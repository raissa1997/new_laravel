<nav>
        <div class="nav-left">
            <img class="logo" src="users/images/" alt="" />
            <ul>
                <!-- <li><img src="users/images/notification.png" alt="" /></li>
                <li><img src="users/images/inbox.png" alt="" /></li>
                <li><img src="users/images/video.png" alt="" /></li> -->
                <!-- <li> 
                      <a href="{{url('create_post')}}">Create Post</a>
                    </li> -->
            </ul>
        </div>

        <div class="nav-right">
            <div class="search-box">
               <img src="users/images/search.png" alt="zx" />
                <input type="text" name="" id="" placeholder="Search" />
            </div>
            <div class="list-inline-item logout">     

            @if(Route::has('login'))

            @auth

                <x-app-layout>
                          
                </x-app-layout>
            @endauth    
            @endif    
            </div>    
        </div>

        <!-- ---------Setting Menu ------------ -->
        <div class="settings-menu" id="subMenu">      

            <div class="settings-menu-inner">

          

            </div>

        </div>
    </nav>