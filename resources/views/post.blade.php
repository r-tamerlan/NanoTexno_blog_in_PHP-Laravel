@extends('layouts.master')
@section('title','Nano Texno')
@section('content')
    <div class="col-md-9 col-md-offset-3">
        <div class="posts">
            <div class="posts-inner">
                <!-- Post -->
                <article class="post">
                    <div class="post-header">
                        <h2 class="title"><span>Creativity is more than a song and dance act</span></h2>

                        <!-- Post Details -->
                        <div class="post-details">
                            <div class="post-cat">
                                <a href="#">Travel</a>
                            </div>
                            <a href="#" class="post-date"><span>Aug 06, 2018</span></a>
                            <div class="post-details-child">
                                <a href="#" class="post-views">15 views</a>
                                <a href="#" class="post-comments">03 Comments</a>
                                <div class="post-share-icon">
                                    <span>SHARE</span>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                        <li><a href="#"><i class="fa fa-google"></i><span>Google Plus</span></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post Details -->
                    </div>
                    <div class="post-media">
                        <img src="/images/single.jpg" alt="Post">
                    </div>
                    <div class="post-content">

                        <!-- The Content -->
                          content.........
                        <!-- End The Content -->

                        <div class="post-tags">
                            <strong>Tags: </strong>
                            <ul>
                                <li><a href="#">Art</a></li>

                            </ul>
                        </div>
                        <div class="post-author">
                            Writed by  <a href="#">Kendy</a>
                        </div>
                    </div>

                </article>
                <!-- Post -->
            </div>


            <!-- Related Posts -->
            <div id="related-posts">
                <h2 class="title"><span>Related Posts</span></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="post">
                            <div class="post-media" style="background-image: url(images/posts/4.jpg)">
                                <a href="single.html">
                                    <img src="images/posts/4.jpg" alt="Image">
                                </a>
                            </div>
                            <div class="post-entry">
                                <h3 class="title">
                                    <a href="single.html">Living Lagom in Sweden: An Interview With Lola Akerstrom</a>
                                </h3>
                                <div class="post-details">
                                    <a href="#" class="post-date"><span>Aug 06, 2018</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="post">
                            <div class="post-media" style="background-image: url(images/posts/2.jpg)">
                                <a href="single.html">
                                    <img src="images/posts/2.jpg" alt="Image">
                                </a>
                            </div>
                            <div class="post-entry">
                                <h3 class="title">
                                    <a href="single.html">Living Lagom in Sweden: An Interview With Lola Akerstrom</a>
                                </h3>
                                <div class="post-details">
                                    <a href="#" class="post-date"><span>Aug 06, 2018</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Related Posts -->

            <!-- Author Box -->
            <div class="author-box">
                <div class="header-top clearfix">
                    <div class="avatar-author">
                        <img src="images/avatar.jpg" alt="Avatar">
                    </div>
                    <div class="author-name">
                        <h3 class="title">
                            <a href="#">Kendy</a>
                        </h3>
                        <div class="author-socials">
                            <a href="#" class="fa fa-behance" title="Behance"></a>
                            <a href="#" class="fa fa-dribbble" title="Dribbble"></a>
                            <a href="#" class="fa fa-facebook" title="Facebook"></a>
                            <a href="#" class="fa fa-google" title="Google Plus"></a>
                            <a href="#" class="fa fa-twitter" title="Twitter"></a>
                        </div>
                    </div>

                </div>
                <div class="author-description">
                    Kendy loves beautiful content and doesn't like to give in easily. I run responsive Web design workshops, online workshops and loves solving complex UX, front-end and performance problems in large companies.
                    <a href="#">Get in touch.</a>
                </div>
            </div>
            <!-- End Author Box -->


        </div>
    </div>
@endsection
