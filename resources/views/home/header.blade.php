<header>
          <div class="container">
            <div class="logo">
              <img src="acceuil/img/bg1.png" style="width:150px" alt="Logo" />
              <h3>La Fabrique Numerique</h3>
            </div>

            <div class="links">
              <ul>

              @if (Route::has('login'))
                    @auth
                    
                    <!-- <li><a href="{{route('home')}}">Connecting</a></li> -->

                    <li>
                        
                    <x-app-layout>
                      
                    </x-app-layout>
                    
                        
                    </li>

                    @else

                <li><a href="{{route('login')}}" class="btn">Se connecter</a></li>
                <li><a href="{{route('register')}}" class="btn">S'inscrire</a></li>
                @endauth
                @endif 
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>
