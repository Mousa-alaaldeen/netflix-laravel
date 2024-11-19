<header id="gen-header" class="gen-header-style-1 gen-has-sticky">
   <div class="gen-bottom-header">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <!-- Logo -->
                 <div class="gen-account-holder">
                    <a href="javascript:void(0)" id="gen-user-btn">
                       {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </a>
                    <span class="welcome-message">
                       Welcome, {{ Auth::user()->name }}!
                    </span>
                    
                 </div>

                  <!-- Menu and Search -->
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul id="gen-main-menu" class="navbar-nav ml-auto flex justify-center w-full">
                        <li class="menu-item active mx-4">
                           <a href="{{ route('movie.index') }}" aria-current="page" class="text-center">Home</a>
                        </li>
                        
                        <!-- Additional Dummy Links -->
                        <li class="menu-item mx-4">
                           <a href="javascript:void(0)" class="text-center">Genres</a> 
                        </li>
                        <li class="menu-item mx-4">
                           <a href="javascript:void(0)" class="text-center">Tv</a> 
                        </li>

                        <!-- Search Form -->
                        <li class="menu-item mx-4">
                           <form action="" method="GET" class="flex items-center mt-3">
                              <input 
                                 type="text" 
                                 name="query" 
                                 placeholder="Search movies..." 
                                 class="w-40 px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-500 focus:outline-none"
                                 required
                              />
                           </form>
                        </li>
                     </ul>
                  </div>

                  <!-- Header Info and Logout -->
                  <div class="gen-header-info-box">
                     <div class="gen-menu-search-block">
                        <button 
                           type="submit" 
                           class="px-2 py-1 bg-red-600 text-white rounded-r-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                           Search
                        </button>
                     </div>

                     <!-- Logout Button -->
                     <div class="gen-btn-container">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                           style="color: inherit; text-decoration: none;">
                           <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                     </div>
                  </div>

                  <!-- Navbar Toggle Button for Mobile -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                     data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <i class="fas fa-bars"></i>
                  </button>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>
