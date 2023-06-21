<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.homecss')

    <!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>
   @include('user.header')


    <div class="container">

        <!-- ---------Left Sidebar ------------ -->
        @include('user.left_sidebar')



        <!-- ---------Main Content ------------ -->
         @include('user.main')


         <div class="post-container">
                @foreach($posts as $post)

                

                <div class="post-row">

                    <div class="user-profile">
                        <img src="users/images/profile-pic.png" alt="" />
                        <div>
                    <p>{{ $post->user->name }} </p>
                            <p></p>
                            <span>August 26 2022, 13:58 </span>
                        </div>
                    </div>

                </div>

                <p class="post-text">
                    {{$post->description}}
                    <br>
                </p>
                <img class="post-img" src="users/images/feed-image-1.png" alt="" />

                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="users/images/like-blue.png" alt="" /> 120</div>
                        <div><img src="users/images/comments.png" alt="" /> 45</div>
                    </div>
                </div>

                <br>
             @endforeach            
            <br>
        </div>           
         
        <!-- ---------Right Sidebar ------------ -->
         @include('user.right_sidebar')
         
        <!-- ---------Footer -------------->
        @include('user.footer')
    </div>    

</body>

</html>