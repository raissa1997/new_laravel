<div class="main-content">
    
            @if(session()->has('status'))
                <div class="mt-2 shadow bg-pink-500 text-black font-bold py-2 px-4 rounded">
                    {{session('status')}}
                </div>
            @endif
    <div class="write-post-container">

            


        <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="user-profile">
                <img src="users/images/profile-pic.png" alt="" />
                <div>
                    <p>{{ Auth::user()->name }} </p>
                </div>
                <div class="content">
                  <input type="submit" value="Post" style="position: relative; right:-170px;">
                </div>

            </div>

            <div class="post-input-container">
                <textarea rows="3" placeholder="What's on your mind?" name="description" required></textarea>
                <div class="add-post-links">
                    <a href="#"><img src="users/images/photo.png" alt="" /> Photo/Video</a>
                </div>
            </div>
        </form>
        

    </div>
</div>