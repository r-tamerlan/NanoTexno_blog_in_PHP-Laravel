@extends('layouts.master')
@section('title','NanoTexno Home')
@section('content')
    @include('layouts.partials.alert')
    <div class="col-md-9 col-md-offset-2">
        <div class="posts">

            <!-- Posts Start-->
            @foreach($allPosts as $homePost)
            <div class="posts-inner list-layout">
                <article class="post">
                    <div class="post-media" style="background-image: url({{asset('storage/'.$homePost->post_images)}}); width: 240px; height: 200px">
                        <a href="{{ route('post',$homePost->post_slug) }}">
                            <img src="{{asset('storage/'.$homePost->post_images)}}" alt="Post">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="post-header">
                            <h2 class="title">
                                <a href="{{ route('post',$homePost->post_slug) }}">{{$homePost->post_title}}</a>
                            </h2>

                            <!-- Post Details -->
                            <div class="post-details">
                                <div class="post-cat">
                                    <a href="{{ route('post',$homePost->post_slug) }}">{{ $homePost->category->category_name }}</a>
                                </div>
                                <a href="{{ route('post',$homePost->post_slug) }}" class="post-date"><span>{{$homePost->created_at}}</span></a>
                                <div class="post-details-child">
                                    <a href="{{ route('post',$homePost->post_slug) }}" class="post-views">{{ $homePost->postInfo->view }}</a>
                                    <a href="{{ route('post',$homePost->post_slug) }}" class="post-comments">{{ $homePost->postInfo->comment }}</a>
                                    <div class="post-share-icon">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                            <li><a href="#"><i class="fa fa-google"></i><span>Google Plus</span></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i><span>Behance</span></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i><span>Dribbble</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post Details -->
                        </div>
                        <!-- The Content -->
                        <div class="the-excerpt">
                            <p>{!! $homePost->post_content !!}
                            </p>
                        </div>
                        <!-- End The Content -->
                        <div class="read-more">
                            <a href="{{ route('post',$homePost->post_slug) }}">Continue Reading ...</a>
                        </div>
                    </div>

                </article>
            </div>
            @endforeach
            <!-- Posts End-->

            <!-- Pagination -->
            <div class="pagination-wrap ">

                <div class="older ">
                    <a href="#" style="color: darkslategray !important;">Older Posts <i class="fa fa-angle-double-right"></i></a>
                </div>
                <div class="newer">
                    <a href="#" style="color: darkslategray !important;"><i class="fa fa-angle-double-left"></i> Newer Posts</a>
                </div>
            </div>
            <!-- End Pagination -->
        </div>
    </div>
@endsection
