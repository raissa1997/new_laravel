<div class="main-content">
                <div class="write-post-container">

                <div class="user-profile">
                    <img src="users/images/profile-pic.png" alt="" />
                    <div>
                        <p>{{ Auth::user()->name }} </p>
                    </div>
                </div>

                <div class="post-input-container">
                    <textarea rows="3" placeholder="What's on your mind?"></textarea>
                    <div class="add-post-links">
                        <a href="#"><img src="users/images/photo.png" alt="" /> Photo/Video</a>
                        <a href="{{url('post_page')}}">Ajouter un post</a>
                        <div class="content">
                                <button class="button">Post</button>
                         </div>
                    </div>
                
                </div>

            </div>
</div>