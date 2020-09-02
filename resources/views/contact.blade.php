@extends('layouts.master')
@section('title','Contact')
@section('content')
    <div class="col-md-9 col-md-offset-3">
        <div class="posts">
            <div class="posts-inner">
                <article class="post">
                    <div class="post-header">
                        <h2 class="title"><span>Contact Me</span></h2>

                        <!-- Post Details -->
                        <div class="post-details">
                            <a href="#" class="post-date"><span>Aug 06, 2020</span></a>
                            <a href="#" class="post-views">8,235 views</a>
                            <div class="post-share-icon">
                                <span>SHARE</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i><span>Google Plus</span></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i><span>Behance</span></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i><span>Dribbble</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Post Details -->
                    </div>
                    <div class="post-media">
                        <img src="/images/contact.jpg" alt="Post">
                    </div>
                    <div class="post-content">

                        <!-- The Content -->
                        <div class="the-excerpt">
                            <p>There’s nothing quite as frightening as the unknown. These words of former US Secretary of Defense Donald Rumsfeld should be truly terrifying (although the general consensus at the time was that they sounded like nonsense).</p>
                            <blockquote>
                                <p>Donec eget ipsum sagittis, varius leo non, mattis eros. Donec eleifend, urna ut elementum tincidunt, velit nibh pulvinar odio, ac tristique mauris magna sit amet arcu. Aenean vestibulum gravida rutrum. Morbi vel augue a lectus ultricies varius nec id elit. </p>
                            </blockquote>
                            <p>
                                Suspendisse eleifend nulla ac rhoncus egestas. Sed vehicula ipsum vitae finibus condimentum. Phasellus rhoncus, nulla et sodales sodales, massa nisl volutpat odio, ac sodales risus metus sollicitudin odio.
                            </p>
                            <h4>Contact Information</h4>
                            <p>
                                <strong>- Tel:</strong> +994 50 411 44 23 <br/>
                                <strong>- Email:</strong> rustemov.tamerlan@gmail.com <br/>
                                <strong>- Address:</strong> Baku, Azerbaijan
                                <br/>
                            </p>
                            <form action="#" method="post" class="contact" style="margin-top: 10px;">
                                <div class="contact-item">
                                    <label>Your Name *</label>
                                    <input name="author" value="" type="text">
                                </div>
                                <div class="contact-item">
                                    <label>Your Email *</label>
                                    <input name="email" value="" type="email">
                                </div>
                                <div class="contact-item">
                                    <label>Website URL</label>
                                    <input id="url" name="url" value="" type="text">
                                </div>
                                <div class="contact-item">
                                    <label>Message *</label>
                                    <textarea name="comment"></textarea>
                                </div>
                                <div class="contact-item form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Send">
                                </div>
                            </form>
                        </div>
                        <!-- End The Content -->
                    </div>

                </article>
            </div>
        </div>
    </div>
@endsection
