<body>
    <div class="boxed blog">
        <!-- Preloader -->
        {{-- <div class="preloader">
            <div class="clear-loading loading-effect-2">
                <span></span>
            </div>
        </div> --}}

        <!-- top header -->
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar-right link-style3">
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="mr-4" href="#" class="top-mail">bmimfi@borribo.com.kh</a>
                                    @foreach (config('app.available_locales') as $locale)

                                        
                                            <a style="margin-left: 20px" href="{{ request()->url() }}?language={{ $locale }}">
                                                <span class="flag-icon flag-icon-{{ $locale }}"></span></a>
                                       


                                    @endforeach
                                </div>
                            </div>

                                
                        </div>

                        </div>
                </div>
                    

                </div>
            </div>
        </div>
        <!-- /.top -->

        <!-- header -->
        <header id="header" class="header header-style2 bg-color">
            <div class="container-fluid">
                <div class="row">
                    <div class="header-wrap">
                        <div class="col-md-3">
                            <div class="inner-header">
                                <div class="logo">
                                    <a href="{{url("/")}}" title="">
                                        <img src="{{ asset('template/icon/logo-dark.png')}}" alt="images" />
                                    </a>
                                </div>
                                <!-- /#logo -->
                                <div class="btn-menu">
                                    <span></span>
                                </div>
                                <!-- //mobile menu button -->
                            </div>

                        </div>
                        <!-- /.col-md-3 -->
                        <div class="col-md-6">
                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        {{-- class="current-menu-item" --}}
                                        <li>
                                            <a href="{{url("/")}}" title="">{{__('menu.home')}}</a>
                                           
                                        </li>
                                        <li>
                                            
                                            <a href="{{route('about')}}" title="">{{__('menu.about')}}</a>
                                           
                                        </li>
                                        <li>
                                            <a href="{{route('product')}}" title="">{{__('menu.product')}}</a>
                                            
                                        </li>
                                        <li>
                                            <a href="{{route('report')}}" title="">{{__('menu.report')}}</a>
                                            
                                        </li>
                                        <li>
                                            <a href="{{route('news')}}" title="">{{__('menu.news')}}</a>
                                            
                                        </li>
                                        <li>
                                            <a href="{{route('job')}}" title="">{{__('menu.job')}}</a>
                                            
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}" title="">{{__('menu.contact')}}</a>
                                        </li>


                 

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3">

                            

                            <div class="site-header-right">
                                <div class="header-inner">
                                    <div class="search flat-show-search">
                                        <div class="show-search">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                        <div class="top-search widgets-input">
                                            <form action="get" id="searchform-all" class="header-search search-form">
                                                <div class="input-group">
                                                    <input type="search" id="s" class="search-field"
                                                        placeholder="Search here" aria-label="Search" />
                                                    <button class="search-submit" type="submit" title="Search"></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- header right -->
                        </div>
                    </div>
                    <!-- /.header-wrap -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </header>
        <!-- /header -->