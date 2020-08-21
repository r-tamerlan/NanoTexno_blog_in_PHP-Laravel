@extends('layouts.master')
@section('title','Category Name')
@section('content')
    <div class="col-md-9 col-md-offset-2">
        <div class="posts">
            <!-- Posts Start-->

            <div class="post-content">
                <h1 class="text-info ">Azerbaycan </h1>
            </div>


            <div class="posts-inner list-layout">
                <article class="post">
                    <div class="post-media" style="background-image: url(/images/posts/1.jpg)">
                        <a href="single.html">
                            <img src="/images/posts/1.jpg" alt="Post">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="post-header">
                            <h2 class="title">
                                <a href="single.html">Creativity is more than a song and dance act</a>
                            </h2>

                            <!-- Post Details -->
                            <div class="post-details">
                                <div class="post-cat">
                                    <a href="#">Travel</a>
                                </div>
                                <a href="#" class="post-date"><span>Aug 06, 2018</span></a>
                                <div class="post-details-child">
                                    <a href="#" class="post-views">15</a>
                                    <a href="#" class="post-comments">03</a>
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
                            <p>Morbi leo enim, laoreet eget urna id, ullamcorper condimentum urna. Curabitur accumsan sem et nisi ultricies porttitor...
                            </p>
                        </div>
                        <!-- End The Content -->
                        <div class="read-more">
                            <a href="single.html">Continue Reading ...</a>
                        </div>
                    </div>

                </article>
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
