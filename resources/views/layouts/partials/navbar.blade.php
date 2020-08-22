<div class="col-md-3 col-md-pull-1">
    <div class="header affix">
        <div class="table">
            <div class="table-cell">
                <!-- Logo -->
                <div class="logo">
                    <a href="index-2.html">
                        <img src="/images/logo-light.png" alt="Logo" class="logo-light">
                        <img src="/images/logo.png" alt="Logo">
                    </a>
                </div>
                <!-- End Logo -->

                <!-- Navigation -->
                <div class="main-menu">
                    <nav>
                        <ul class="menu-list text-info">
                            <li class="menu-item-has-children  ">
                                <a href="{{ route('homepage') }}">Home</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a  style="cursor: pointer">Profil</a>
                                <ul class="sub-menu " >

                                    <li>
                                        <a href="{{ route('users.signin') }}">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('users.registration') }}">Sign Up</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a  style="cursor: pointer">Categories</a>
                                <ul class="sub-menu" >
                                   @php
                                    $categories=\App\Models\Categories::all();
                                   @endphp
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('categories',$category->category_slug) }}">{{$category->category_name}}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <!-- End Navigation -->



                <!-- Socials -->
                <div class="socials ">
                    <!-- Personel Area Start -->
                    <div class="copyright ">
                        <p class="text-info">
                            XXX - xxx - XXX
                        </p>
                    </div>
                    <!-- Personel Area End -->
                    <a href="#" title="Behance">
                        <i class="fa fa-behance text-warning"></i>
                    </a>
                    <a href="#" title="Dribbble">
                        <i class="fa fa-dribbble text-warning"></i>
                    </a>
                    <a href="#" title="Facebook">
                        <i class="fa fa-facebook text-warning"></i>
                    </a>
                    <a href="#" title="Google Plus">
                        <i class="fa fa-google-plus text-warning"></i>
                    </a>
                    <a href="#" title="Instagram">
                        <i class="fa fa-instagram text-warning"></i>
                    </a>
                    <a href="#" title="Search this site">
                        <i class="fa fa-search text-danger" style="color: brown;"></i>
                    </a>

                </div>
                <!-- End Socials -->


                <div class="box-search">
                    <form role="search" method="get" action="#">
                        <input type="text" placeholder="Search ..." name="s" />
                    </form>
                </div>

                <div class="copyright ">
                    <p class="text-info">
                        NanoTexno @ 2020. Design by R.Tamerlan
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
