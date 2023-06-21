<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.homecss')

    <style>
    :root {
    --bg-color: #fff;
    }
    .post-contain {    
        background: var(--bg-color);
        border-radius: 6px;
        padding: 20px;
        color: #626262;
    }
    </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>

<body>
    @include('user.header')


    <div class="container">

        <!-- ---------Left Sidebar ------------ -->
        @include('user.left_sidebar')



        <!-- ---------Main Content ------------ -->

        <!--Main start-->
        <div class="main-content">


            <div class="write-post-container">
                <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="user-profile">
                        <img src="users/images/user.png" alt="" />
                        <div>
                            <p>{{ Auth::user()->name }} </p>
                        </div>
                        <!-- Here we submit the post with the Button Post -->
                        <div class="content">
                            <input type="submit" value="Post" style="position: relative; right:-170px;">
                        </div>

                    </div>

                    <div class="post-input-container">
                        <textarea rows="3" placeholder="What's on your mind?" name="description">

                    </textarea>
                    <!-- Here We are going to define Image -->
                        <div class="add-post-links">
                            <input type="file" name="image" id="" class="form-control" placeholder="image">
                    
                        </div>
                    </div>

                </form>
            </div>

            <!--Post-Container-->
            <div class="" style="margin-top: 5%;">
                @foreach($posts as $post)
             <div class="post-contain" style="margin-top: 5%;">
                <div class="post-row mt-5">

                    <div class="user-profile">
                        <img src="users/images/user.png" alt="" />
                        <div>
                            <p>{{ $post->user->name }} </p>
                            <p></p>
                            <span>{{$post->created_at}}</span>
                        </div>
                    </div>
                </div>

                <p class="post-text">
                    {{$post->description}}

                </p>
                <img class="" src="/images/{{$post->image}}" width="1053px" height="569px" alt="" />

                <div class="post-row">
                    <div class="activity-icons">
                        <!-- <div><img src="users/images/like-blue.png" alt="" />Like</div> -->
                        <!-- <div><img src="users/images/comments.png" alt="" />Comment</div> -->
                        <i class="bi bi-hand-thumbs-up">Like</i>
                        <i class="bi bi-chat-left">Comment</i>
                    </div>
                </div>
             </div>  
             @endforeach 
            </div>
            <!--end post-Container-->
        </div>
        <!--Main end-->

        <!-- ---------Right Sidebar ------------ -->
        @include('user.right_sidebar')

        <!-- ---------Footer -------------->
        <!-- @include('user.footer') -->

    </div>
</body>

</html>