@extends('them.master')

<!-- owl-carousel Banner Start -->
<!-- <div class="container my-4">
   <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createMovieModal">
      <i class="fas fa-plus-circle me-2"></i> Add Movie
   </button> -->
<!-- Modal for Adding a Movie -->
<div class="modal fade" id="createMovieModal" tabindex="-1" aria-labelledby="createMovieModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="createMovieModalLabel">Create a New Movie</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <!-- Form to Add Movie -->
            <form method="POST" action="{{ route('movie.store') }}" enctype="multipart/form-data">
               @csrf

               <!-- Movie Title -->
               <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                  @error('title')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
               </div>

               <!-- Movie Description -->
               <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="4"
                     required>{{ old('description') }}</textarea>
                  @error('description')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
               </div>

               <!-- Category Selection -->


               <!-- Movie Image -->
               <div class="mb-3">
                  <label for="image" class="form-label">Image (optional)</label>
                  <input type="file" class="form-control" id="image" name="image" accept="image/*">
                  @error('image')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
               </div>

               <!-- Release Date -->
               <div class="mb-3">
                  <label for="release_date" class="form-label">Release Date</label>
                  <input type="date" class="form-control" id="release_date" name="release_date"
                     value="{{ old('release_date') }}" required>
                  @error('release_date')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
               </div>

               <!-- Movie Review (optional) -->
               <div class="mb-3">
                  <label for="review" class="form-label">Review (optional)</label>
                  <textarea class="form-control" id="review" name="review" rows="3">{{ old('review') }}</textarea>
                  @error('review')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
               </div>

               <!-- Submit Button -->
               <button type="submit" class="btn btn-primary">Add Movie</button>
            </form>
         </div>
      </div>
   </div>
</div>
</div>
<section class="pt-0 pb-0">
   <div class="container-fluid px-0">
      <div class="row no-gutters">
         <div class="col-12">
            <div class="gen-banner-movies banner-style-2">
               <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="1"
                  data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="true"
                  data-loop="true" data-margin="0" data-autoplayTimeout="3000" data-smartSpeed="700"
                  data-autoplaySpeed="1000" data-autoplay="true">
                  <div class="item" style="background: url('https://i.ytimg.com/vi/WFs7u7LefTY/maxresdefault.jpg')">
                     <div class="gen-movie-contain-style-2 h-100">
                        <div class="container h-100">
                           <div class="row flex-row-reverse align-items-center h-100">
                              <div class="col-xl-6">
                                 <div class="gen-front-image">
                                    <img src="https://i.ytimg.com/vi/WFs7u7LefTY/maxresdefault.jpg"
                                       alt="owl-carousel-banner-image">
                                    <a href="https://www.youtube.com/watch?v=WFs7u7LefTY"
                                       class="playBut popup-youtube popup-vimeo popup-gmaps">
                                       <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                       <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="213.7px"
                                          height="213.7px" viewBox="0 0 213.7 213.7"
                                          enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                          <polygon class="triangle" id="XMLID_17_" fill="none" stroke-width="7"
                                             stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                             points="73.5,62.5 148.5,105.8 73.5,149.1"></polygon>
                                          <circle class="circle" id="XMLID_18_" fill="none" stroke-width="7"
                                             stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                             cx="106.8" cy="106.8" r="103.3"></circle>
                                       </svg>
                                       <span>Watch Trailer</span>
                                    </a>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="gen-tag-line"><span>Latest Release</span></div>
                                 <div class="gen-movie-info">
                                    <!-- <h3>The Last Odyssey</h3> -->
                                 </div>
                                 <div class="gen-movie-meta-holder">
                                    <ul class="gen-meta-after-title">
                                       <li class="gen-sen-rating">
                                          <span>PG-13</span>
                                       </li>
                                       <li>
                                          <img src="{{asset('assets')}}/images/asset-2.png" alt="rating-image">
                                          <span>4.5/5</span>
                                       </li>
                                    </ul>
                                    <p>A gripping action-packed adventure where a team of explorers discovers a lost
                                       civilization beneath the ocean's surface. They must race against time to uncover
                                       its secrets before rival forces get there first.</p>
                                    <div class="gen-meta-info">
                                       <ul class="gen-meta-after-excerpt">
                                          <li><strong>Cast :</strong> Chris Hemsworth, Zendaya, Michael B. Jordan</li>
                                          <li><strong>Genre :</strong> <span><a href="action.html">Action,</a></span>
                                             <span><a href="adventure.html">Adventure,</a></span> <span><a
                                                   href="thriller.html">Thriller</a></span>
                                          </li>
                                          <li><strong>Tag :</strong> <span><a href="#">3D</a></span>, <span><a
                                                   href="#">Adventure</a></span>, <span><a
                                                   href="#">Blockbuster</a></span></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="gen-movie-action">
                                    <div class="gen-btn-container">
                                       <a href="single-movie.html" class="gen-button .gen-button-dark">
                                          <i aria-hidden="true" class="fas fa-play"></i> <span class="text">Watch
                                             Now</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


                  <div class="item" style="background: url('https://i.ytimg.com/vi/9mQYxib26FM/maxresdefault.jpg')">
                     <div class="gen-movie-contain-style-2 h-100">
                        <div class="container h-100">
                           <div class="row flex-row-reverse align-items-center h-100">
                              <div class="col-xl-6">
                                 <div class="gen-front-image">
                                    <img src="https://i.ytimg.com/vi/9mQYxib26FM/maxresdefault.jpg"
                                       alt="owl-carousel-banner-image">
                                    <a href="https://www.youtube.com/watch?v=NOhDyUmT9z0"
                                       class="playBut popup-youtube popup-vimeo popup-gmaps">
                                       <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="213.7px"
                                          height="213.7px" viewBox="0 0 213.7 213.7"
                                          enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                          <polygon class="triangle" id="XMLID_17_" fill="none" stroke-width="7"
                                             stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                             points="73.5,62.5 148.5,105.8 73.5,149.1"></polygon>
                                          <circle class="circle" id="XMLID_18_" fill="none" stroke-width="7"
                                             stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                             cx="106.8" cy="106.8" r="103.3"></circle>
                                       </svg>
                                       <span>Watch Trailer</span>
                                    </a>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="gen-tag-line"><span>Latest Release</span></div>
                                 <div class="gen-movie-info">
                                    <!-- <h3>The Last Odyssey</h3> -->
                                 </div>
                                 <div class="gen-movie-meta-holder">
                                    <ul class="gen-meta-after-title">
                                       <li class="gen-sen-rating"><span>PG-13</span></li>
                                       <li><img src="{{asset('assets')}}/images/asset-2.png"
                                             alt="rating-image"><span>4.5/5</span></li>
                                    </ul>
                                    <p>A gripping action-packed adventure where a team of explorers discovers a lost
                                       civilization beneath the ocean's surface. They must race against time to uncover
                                       its secrets before rival forces get there first.</p>
                                    <div class="gen-meta-info">
                                       <ul class="gen-meta-after-excerpt">
                                          <li><strong>Cast :</strong> Chris Hemsworth, Zendaya, Michael B. Jordan</li>
                                          <li><strong>Genre :</strong> <span><a href="action.html">Action,</a></span>
                                             <span><a href="adventure.html">Adventure,</a></span> <span><a
                                                   href="thriller.html">Thriller</a></span>
                                          </li>
                                          <li><strong>Tag :</strong> <span><a href="#">3D</a></span>, <span><a
                                                   href="#">Adventure</a></span>, <span><a
                                                   href="#">Blockbuster</a></span></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="gen-movie-action">
                                    <div class="gen-btn-container">
                                       <a href="single-movie.html" class="gen-button .gen-button-dark">
                                          <i aria-hidden="true" class="fas fa-play"></i> <span class="text">Watch
                                             Now</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="item" style="background: url('https://i.ytimg.com/vi/rmFBrvr5Re0/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCYOqgQTM-Lq7Qo2fMQKJEnzN3P7g')">
                     <div class="gen-movie-contain-style-2 h-100">
                        <div class="container h-100">
                           <div class="row flex-row-reverse align-items-center h-100">
                              <div class="col-xl-6">
                                 <div class="gen-front-image">
                                    <img
                                       src="https://i.ytimg.com/vi/rmFBrvr5Re0/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCYOqgQTM-Lq7Qo2fMQKJEnzN3P7g"
                                       alt="owl-carousel-banner-image">
                                    <a href="https://www.youtube.com/watch?v=nEdIy9EW2f4"
                                       class="playBut popup-youtube popup-vimeo popup-gmaps">
                                       <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="213.7px"
                                          height="213.7px" viewBox="0 0 213.7 213.7"
                                          enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                          <polygon class="triangle" id="XMLID_17_" fill="none" stroke-width="7"
                                             stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                             points="73.5,62.5 148.5,105.8 73.5,149.1"></polygon>
                                          <circle class="circle" id="XMLID_18_" fill="none" stroke-width="7"
                                             stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                             cx="106.8" cy="106.8" r="103.3"></circle>
                                       </svg>
                                       <span>Watch Trailer</span>
                                    </a>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="gen-tag-line"><span>Best Thriller</span></div>
                                 <div class="gen-movie-info">
                                    <!-- <h3>The Silent Depths</h3> -->
                                 </div>
                                 <div class="gen-movie-meta-holder">
                                    <ul class="gen-meta-after-title">
                                       <li class="gen-sen-rating"><span>R</span></li>
                                       <li><img src="{{asset('assets')}}/images/asset-2.png"
                                             alt="rating-image"><span>4.8/5</span></li>
                                    </ul>
                                    <p>A tense psychological thriller set in a remote lighthouse, where the characters
                                       are forced to confront their darkest fears as a mysterious force takes over the
                                       island.</p>
                                    <div class="gen-meta-info">
                                       <ul class="gen-meta-after-excerpt">
                                          <li><strong>Cast :</strong> Emily Blunt, Tom Hardy, Samuel L. Jackson</li>
                                          <li><strong>Genre :</strong> <span><a href="horror.html">Horror,</a></span>
                                             <span><a href="thriller.html">Thriller</a></span>
                                          </li>
                                          <li><strong>Tag :</strong> <span><a href="#">Suspense</a></span>, <span><a
                                                   href="#">Mystery</a></span>, <span><a
                                                   href="#">Psychological</a></span></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="gen-movie-action">
                                    <div class="gen-btn-container">
                                       <a href="single-movie.html" class="gen-button .gen-button-dark">
                                          <i aria-hidden="true" class="fas fa-play"></i> <span class="text">Watch
                                             Now</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- owl-carousel Banner End -->


<!-- owl-carousel Videos Section-1 Start -->
<section class="gen-section-padding-2 mb-4">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-6">
            <h4 class="gen-heading-title">All Movie Hits</h4>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
            <div class="gen-movie-action">
               <div class="gen-btn-container text-right">
                  <a href="tv-shows-pagination.html" class="gen-button gen-button-flat">
                     <span class="text">More Videos</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-3">
         <div class="col-12">
            <div class="gen-style-2">
               <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="4"
                  data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="true"
                  data-loop="true" data-margin="30">
                  @foreach ($movies as $movie)
                 <div class="item">
                   <div class="movie type-movie status-publish has-post-thumbnail">
                     <div class="gen-carousel-movies-style-2 movie-grid style-2">
                        <div class="gen-movie-contain">
                          <div class="gen-movie-img">
                            <img src="{{ asset('storage')}}/movies/{{$movie->image}}" alt="movie-image"
                              style=" height: 150px; object-fit: cover; border-radius: 10px;">
                            <div class="gen-movie-add">
                              <div class="movie-actions--link_add-to-playlist dropdown">
                                 <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                   <div class="wpulike wpulike-heart">
                                     <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                   </div>
                                 </a>
                              </div>
                            </div>
                            <div class="gen-movie-action">
                              <a href="{{ route('movie.show', $movie->id) }}"
                                 class="btn btn-dark d-flex justify-content-center align-items-center"
                                 style="width: 50px; height: 50px; border-radius: 50%; background-color: #E50916;">
                                 <i class="fa fa-play"></i>
                              </a>
                            </div>
                          </div>
                          <div class="gen-movie-meta-holder">
                            <ul>
                              <li>{{ $movie->title }}</li>
                              <li>
                                 <a href=""><span> {{ $movie->category->name }}</span></a>
                              </li>
                            </ul>
                          </div>
                          <div class="gen-info-contain">

                            <div class="gen-movie-meta-holder">
                              <ul>
                                 <li>{{ $movie->description }}</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                     </div>
                   </div>
                 </div>
              @endforeach

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- owl-carousel Videos Section-1 End -->

<!-- owl-carousel Videos Section-2 Start -->
<section class="pt-0 gen-section-padding-2 mb-4">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-6">
            <h4 class="gen-heading-title">Top Regional Shows</h4>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
            <div class="gen-movie-action">
               <div class="gen-btn-container text-right">
                  <a href="tv-shows-pagination.html" class="gen-button gen-button-flat">
                     <span class="text">More Videos</span>
                  </a>
               </div>
            </div>
         </div>
      </div>

      <div class="row mt-3">
         <div class="col-12">
            <div class="gen-style-2">
               <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="4"
                  data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="true"
                  data-loop="true" data-margin="30">
                  @foreach ($latestMovies as $movie)
                 <div class="item">
                   <div class="movie type-movie status-publish has-post-thumbnail">
                     <div class="gen-carousel-movies-style-2 movie-grid style-2">
                        <div class="gen-movie-contain">
                          <div class="gen-movie-img">
                            <img src="{{ asset('storage')}}/movies/{{$movie->image}}" alt="movie-image"
                              style=" height: 150px; object-fit: cover; border-radius: 10px;">
                            <div class="gen-movie-add">
                              <div class="movie-actions--link_add-to-playlist dropdown">
                                 <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                   <div class="wpulike wpulike-heart">
                                     <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                   </div>
                                 </a>
                              </div>
                            </div>
                            <div class="gen-movie-action">
                              <a href="{{ route('movie.show', $movie->id) }}"
                                 class="btn btn-dark d-flex justify-content-center align-items-center"
                                 style="width: 50px; height: 50px; border-radius: 50%; background-color: #E50916;">
                                 <i class="fa fa-play"></i>
                              </a>
                            </div>
                          </div>
                          <div class="gen-movie-meta-holder">
                            <ul>
                              <li>{{ $movie->title }}</li>
                              <li>
                                 <a href=""><span> {{ $movie->category->name }}</span></a>
                              </li>
                            </ul>
                          </div>
                          <div class="gen-info-contain">

                            <div class="gen-movie-meta-holder">
                              <ul>
                                 <li>{{ $movie->description }}</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                     </div>
                   </div>
                 </div>
              @endforeach

               </div>
            </div>
         </div>

      </div>
</section>
<!-- owl-carousel Videos Section-2 End -->

<!-- Slick Slider start -->
<section class="gen-section-padding-2 pt-0 pb-0">
   <div class="container">
      <div class="home-singal-silder">
         <div class="gen-nav-movies gen-banner-movies">
            <div class="row">
               <div class="col-lg-12">
                  <div class="slider slider-for">
                     <!-- Slider Items -->
                     <div class="slider-item" style="background: url('images/background/asset-4.jpg')">
                        <div class="gen-slick-slider h-100">
                           <div class="gen-movie-contain h-100">
                              <div class="container h-100">
                                 <div class="row align-items-center h-100">
                                    <div class="col-lg-6">
                                       <div class="gen-movie-info">
                                          <h3>Endless Stories Await</h3>
                                          <p>Movies are a window to the world—offering endless stories of love,
                                             adventure, mystery, and heroism. Whether you're looking to escape reality
                                             or reflect on it, films provide an opportunity to live different lives,
                                             experience new cultures, and embark on unforgettable journeys—all from the
                                             comfort of your seat.</p>

                                       </div>
                                       <div class="gen-movie-action">
                                          <div class="gen-btn-container button-1">
                                             <a class="gen-button" href="#" tabindex="0">
                                                <i aria-hidden="true" class="ion ion-play"></i>
                                                <span class="text">Play Now</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @foreach ($moviesByCategory as $movie)
                   <div class="slider-item" style="background: url('images/background/asset-23.jpg')">
                     <div class="gen-slick-slider h-100">
                        <div class="gen-movie-contain h-100">
                          <div class="container h-100">
                            <div class="row align-items-center h-100">
                              <div class="col-lg-6">
                                 <div class="gen-movie-info">
                                   <h3>{{$movie->title}}</h3>
                                   <p>{{$movie->description}}
                                   </p>

                                 </div>
                                 <div class="gen-movie-action">
                                   <div class="gen-btn-container button-1">
                                     <a class="gen-button" href="#" tabindex="0">
                                       <i aria-hidden="true" class="ion ion-play"></i>
                                       <span class="text">Play Now</span>
                                     </a>
                                   </div>
                                 </div>
                              </div>
                            </div>
                          </div>
                        </div>
                     </div>
                   </div>
                @endforeach

                     <!-- Slider Items -->
                  </div>
                  <div class="slider slider-nav">
                     @foreach ($moviesByCategory as $movie)
                   <div class="slider-nav-contain">
                     <div class="gen-nav-img">
                     <img src="{{ asset('storage') }}/movies/{{$movie->image}}" alt="streamlab-image" class="nav-image" style="width: 100%; height: 150px; object-fit: cover;">

                     </div>
                     <div class="movie-info">

                        <h3><a href="{{ route('movie.show', $movie->id) }}"> {{ $movie->title }}</a></h3>
                        <div class="gen-movie-meta-holder">
                          <ul>
                            <li>
                              <a href="">
                                 {{ $movie->category->name }}
                              </a>
                            </li>
                          </ul>
                        </div>
                     </div>
                   </div>
                @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Slick Slider End -->

<!-- owl-carousel Videos Section-3 Start -->
<section class="gen-section-padding-2">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-6">
            <h4 class="gen-heading-title">Watch For Free: Movie Mania</h4>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
            <div class="gen-movie-action">
               <div class="gen-btn-container text-right">
                  <a href="tv-shows-pagination.html" class="gen-button gen-button-flat">
                     <span class="text">More Videos</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-3">
         <div class="col-12">
            <div class="gen-style-2">
               <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="4"
                  data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false"
                  data-loop="false" data-margin="30">


                  <div class="item">
                     <div
                        class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_genre-drama">
                        <div class="gen-carousel-movies-style-2 movie-grid style-2">
                           <div class="gen-movie-contain">
                              <div class="gen-movie-img">
                                 <img src="{{asset('assets')}}/images/background/asset-1.jpg"
                                    alt="owl-carousel-video-images">
                                 <div class="gen-movie-add">
                                    <div class="wpulike wpulike-heart">
                                       <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button type="button"
                                             class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                    </div>
                                    <ul class="menu bottomRight">
                                       <li class="share top">
                                          <i class="fa fa-share-alt"></i>
                                          <ul class="submenu">
                                             <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                             </li>
                                             <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                             </li>
                                             <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a></li>
                                          </ul>
                                       </li>
                                    </ul>
                                    <div class="movie-actions--link_add-to-playlist dropdown">
                                       <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                             class="fa fa-plus"></i></a>
                                       <div class="dropdown-menu mCustomScrollbar">
                                          <div class="mCustomScrollBox">
                                             <div class="mCSB_container">
                                                <a class="login-link" href="register.html">Sign in to add this movie
                                                   to a
                                                   playlist.</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="gen-movie-action">
                                    <a href="single-movie.html" class="gen-button">
                                       <i class="fa fa-play"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="gen-info-contain">
                                 <div class="gen-movie-info">
                                    <h3><a href="single-movie.html">King of Skull</a></h3>
                                 </div>
                                 <div class="gen-movie-meta-holder">
                                    <ul>
                                       <li>2hr 13mins</li>
                                       <li>
                                          <a href="action.html"><span>Action</span></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- #post-## -->
                  </div>


                  <div class="item">
                     <div class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action">
                        <div class="gen-carousel-movies-style-2 movie-grid style-2">
                           <div class="gen-movie-contain">
                              <div class="gen-movie-img">
                                 <img src="{{asset('assets')}}/images/background/asset-26.jpg"
                                    alt="owl-carousel-video-images">
                                 <div class="gen-movie-add">
                                    <div class="wpulike wpulike-heart">
                                       <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button type="button"
                                             class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                    </div>
                                    <ul class="menu bottomRight">
                                       <li class="share top">
                                          <i class="fa fa-share-alt"></i>
                                          <ul class="submenu">
                                             <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                             </li>
                                             <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                             </li>
                                             <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a></li>
                                          </ul>
                                       </li>
                                    </ul>
                                    <div class="movie-actions--link_add-to-playlist dropdown">
                                       <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                             class="fa fa-plus"></i></a>
                                       <div class="dropdown-menu mCustomScrollbar">
                                          <div class="mCustomScrollBox">
                                             <div class="mCSB_container">
                                                <a class="login-link" href="register.html">Sign in to add this movie
                                                   to a
                                                   playlist.</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="gen-movie-action">
                                    <a href="single-movie.html" class="gen-button">
                                       <i class="fa fa-play"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="gen-info-contain">
                                 <div class="gen-movie-info">
                                    <h3><a href="single-movie.html">Spaceman The Voyager</a></h3>
                                 </div>
                                 <div class="gen-movie-meta-holder">
                                    <ul>
                                       <li>1h 32mins</li>
                                       <li>
                                          <a href="action.html"><span>Action</span></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- #post-## -->
                  </div>
                  <div class="item">
                     <div
                        class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-drama movie_tag-4k-ultra movie_tag-brother movie_tag-king movie_tag-premieres">
                        <div class="gen-carousel-movies-style-2 movie-grid style-2">
                           <div class="gen-movie-contain">
                              <div class="gen-movie-img">
                                 <img src="{{asset('assets')}}/images/background/asset-27.jpg"
                                    alt="owl-carousel-video-images">
                                 <div class="gen-movie-add">
                                    <div class="wpulike wpulike-heart">
                                       <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button type="button"
                                             class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                    </div>
                                    <ul class="menu bottomRight">
                                       <li class="share top">
                                          <i class="fa fa-share-alt"></i>
                                          <ul class="submenu">
                                             <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                             </li>
                                             <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                             </li>
                                             <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a></li>
                                          </ul>
                                       </li>
                                    </ul>
                                    <div class="movie-actions--link_add-to-playlist dropdown">
                                       <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                             class="fa fa-plus"></i></a>
                                       <div class="dropdown-menu mCustomScrollbar">
                                          <div class="mCustomScrollBox">
                                             <div class="mCSB_container">
                                                <a class="login-link" href="register.html">Sign in to add this movie
                                                   to a
                                                   playlist.</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="gen-movie-action">
                                    <a href="single-movie.html" class="gen-button">
                                       <i class="fa fa-play"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="gen-info-contain">
                                 <div class="gen-movie-info">
                                    <h3><a href="single-movie.html">I Can Only Imagine</a></h3>
                                 </div>
                                 <div class="gen-movie-meta-holder">
                                    <ul>
                                       <li>1hr 50mins</li>
                                       <li>
                                          <a href="drama.html"><span>Drama</span></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- #post-## -->
                  </div>


                  <div class="item">
                     <div
                        class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-comedy movie_tag-4k-ultra movie_tag-brother movie_tag-premieres movie_tag-viking">
                        <div class="gen-carousel-movies-style-2 movie-grid style-2">
                           <div class="gen-movie-contain">
                              <div class="gen-movie-img">
                                 <img src="{{asset('assets')}}/images/background/asset-3.jpg"
                                    alt="owl-carousel-video-images">
                                 <div class="gen-movie-add">
                                    <div class="wpulike wpulike-heart">
                                       <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button type="button"
                                             class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                    </div>
                                    <ul class="menu bottomRight">
                                       <li class="share top">
                                          <i class="fa fa-share-alt"></i>
                                          <ul class="submenu">
                                             <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                             </li>
                                             <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                             </li>
                                             <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a></li>
                                          </ul>
                                       </li>
                                    </ul>
                                    <div class="movie-actions--link_add-to-playlist dropdown">
                                       <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                             class="fa fa-plus"></i></a>
                                       <div class="dropdown-menu mCustomScrollbar">
                                          <div class="mCustomScrollBox">
                                             <div class="mCSB_container">
                                                <a class="login-link" href="register.html">Sign in to add this movie
                                                   to a
                                                   playlist.</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="gen-movie-action">
                                    <a href="single-movie.html" class="gen-button">
                                       <i class="fa fa-play"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="gen-info-contain">
                                 <div class="gen-movie-info">
                                    <h3><a href="single-movie.html">The Express</a></h3>
                                 </div>
                                 <div class="gen-movie-meta-holder">
                                    <ul>
                                       <li>2hr 00mins</li>
                                       <li>
                                          <a href="action.html"><span>Action</span></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- #post-## -->
                  </div>


                  <div class="item">
                     <div
                        class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_tag-brother movie_tag-king movie_tag-premieres movie_tag-viking">
                        <div class="gen-carousel-movies-style-2 movie-grid style-2">
                           <div class="gen-movie-contain">
                              <div class="gen-movie-img">
                                 <img src="{{asset('assets')}}/images/background/asset-28.jpg"
                                    alt="owl-carousel-video-images">
                                 <div class="gen-movie-add">
                                    <div class="movie-actions--link_add-to-playlist dropdown">
                                       <a class="dropdown-toggle" href="#"><i class="fa fa-plus"></i></a>
                                       <div class="dropdown-menu">
                                          <a class="login-link" href="register.html">Sign
                                             in to add this movie to a playlist.</a>
                                       </div>
                                    </div>
                                    <div class="wpulike wpulike-heart">
                                       <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button type="button"
                                             aria-label="Like Button" class="wp_ulike_btn wp_ulike_put_image">
                                          </button>
                                       </div>
                                    </div>
                                    <ul class="menu bottomRight">
                                       <li class="share top">
                                          <i class="fa fa-share-alt"></i>
                                          <ul class="submenu">
                                             <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                             </li>
                                             <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                             </li>
                                             <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a></li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="gen-movie-action">
                                    <a href="single-movie.html" class="gen-button">
                                       <i class="fa fa-play"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="gen-info-contain">
                                 <div class="gen-movie-info">
                                    <h3><a href="single-movie.html">Chapter & Verse</a></h3>
                                 </div>
                                 <div class="gen-movie-meta-holder">
                                    <ul>
                                       <li>1hr 37 mins</li>
                                       <li>
                                          <a href="action.html"><span>Action</span></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- #post-## -->
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- owl-carousel Videos Section-3 End -->