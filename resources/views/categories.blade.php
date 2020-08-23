@extends('layouts.master')
@section('title','Category Name')
@section('content')
    <div class="col-md-9 col-md-offset-2">
        <div class="posts">
            <!-- Posts Start-->

            <div class="post-content">
                <h1 class="text-info ">{{$category->category_name}} </h1>
            </div>


            <div class="posts-inner list-layout">
                @foreach($thisCategoryPosts as $post)

                <article class="post">
                    <div class="post-media" style="background-image: url(/images/posts/1.jpg)">
                        <a href="{{ route('post',$post->post_slug) }}">
                            <img src="/images/posts/1.jpg" alt="Post">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="post-header">
                            <h2 class="title">
                                <a href="{{ route('post',$post->post_slug) }}">{{$post->post_title}}</a>
                            </h2>

                            <!-- Post Details -->
                            <div class="post-details">
                                <div class="post-cat">
                                    <a href="{{ route('categories',$category->category_slug) }}">{{$category->category_name}}</a>
                                </div>
                                <a href="{{ route('post',$post->post_slug) }}" class="post-date"><span>{{$post->created_at}}</span></a>
                                <div class="post-details-child">
                                    <a href="{{ route('post',$post->post_slug) }}" class="post-views">15</a>
                                    <a href="{{ route('post',$post->post_slug) }}" class="post-comments">03</a>
                                    <div class="post-share-icon">
                                        <ul>
                                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                            <li><a href="https://myaccount.google.com/"><i class="fa fa-google"></i><span>Google Plus</span></a></li>
                                            <li><a href="https://twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                            <li><a href="https://www.behance.net/"><i class="fa fa-behance"></i><span>Behance</span></a></li>
                                            <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i><span>Dribbble</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post Details -->
                        </div>
                        <!-- The Content -->
                        <div class="the-excerpt" >
                            <p>{{$post->post_content}}</p>
                        </div>
                        <!-- End The Content -->
                        <div class="read-more">
                            <a href="{{ route('post',$post->post_slug) }}">Continue Reading ...</a>
                        </div>
                    </div>

                </article>
                @endforeach
            </div>
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
