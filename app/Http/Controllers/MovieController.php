<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Category;
use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $movies = Movie::all();
        $categories = Category::all();
        $oneMonthAgo = Carbon::now()->subMonth();

        $latestMovies = Movie::where('release_date', '>', $oneMonthAgo)
            ->orderBy('release_date', 'desc')
            ->get();


        $moviesByCategory = collect();
        foreach ($categories as $category) {

            $movieInCategory = Movie::where('category_id', $category->id)
                ->orderBy('release_date', 'desc')
                ->first();

            if ($movieInCategory) {
                $moviesByCategory->push($movieInCategory);
            }
        }

        return view('them.index', compact('movies', 'categories', 'latestMovies', 'moviesByCategory'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'release_date' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image',
            'review' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('movies', $newImageName, 'public');
            $validatedData['image'] = $newImageName;
        }

        Movie::create($validatedData);

        return redirect()->route('movie.index')->with('success', 'Movie created successfully!');
    }

    /**
     * Display the specified resource.
     */
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);
        $relatedMovies = Movie::where('id', '!=', $id)->take(4)->get();
    
        return view('them.show', compact('movie', 'relatedMovies'));
    }
    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
   

    public function rate(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);
    
        $movie = Movie::findOrFail($id);
        $movie->rating = $request->input('rating');
        $movie->save();
    
        return redirect()->back()->with('success', 'Rating updated successfully!');
    }
    
}
