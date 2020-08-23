@extends('layouts.master')
@section('title','Nano Texno')
@section('content')
    <div class="col-md-9 col-md-offset-3">
        <div class="posts">
            <div class="posts-inner">
                <!-- Post -->
                <article class="post">
                    <div class="post-header">
                        <h2 class="title"><span>{{ $thisPost->post_title }}</span></h2>

                        <!-- Post Details -->
                        <div class="post-details">
                            <div class="post-cat">
                                <a href="#">{{$thisCategory->category_name}}</a>
                            </div>
                            <a href="#" class="post-date"><span>{{ $thisPost->created_at }}</span></a>
                            <div class="post-details-child">
                                <a href="#" class="post-views">{{ $thisInfo->view }} views</a>
                                <a href="#" class="post-comments">{{ $thisInfo->comment }} Comments</a>
                                <div class="post-share-icon">
                                    <span>SHARE</span>
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
                    <div class="post-media">
                        <img src="/images/single.jpg" alt="Post">
                    </div>
                    <div class="post-content">

                        <!-- The Content -->
                    {{ $thisPost->post_content }}
                        <!-- End The Content -->

                        <div class="post-author">
                            Writed by  <a >R.Tamerlan</a>
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
                            <div class="post-media" style="background-image: url(/images/posts/4.jpg)">
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
                            <div class="post-media" style="background-image: url(/images/posts/2.jpg)">
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
                        <img src="/images/avatar.jpg" alt="Avatar">
                    </div>
                    <div class="author-name">
                        <h3 class="title">
                            <a >R.Tamerlan</a>
                        </h3>
                        <div class="author-socials">

                            <a href="https://www.facebook.com/rustemov.tamerlan" class="fa fa-facebook" title="Facebook"></a>
                            <a href="https://www.instagram.com/tamerlan_srs/" class="fa fa-instagram" title="instagram"></a>

                        </div>
                    </div>

                </div>
                <div class="author-description">
                    R.Tamerlanloves beautiful content and doesn't like to give in easily. I run responsive Web design workshops, online workshops and loves solving complex UX, front-end and performance problems in large companies.
                    <a href="https://www.instagram.com/tamerlan_srs/">Get in touch.</a>
                </div>
            </div>
            <!-- End Author Box -->


        </div>
    </div>
@endsection
