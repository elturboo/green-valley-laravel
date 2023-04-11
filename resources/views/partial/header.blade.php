<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{route('index')}}">
                                <img alt="Porto" width="82" height="40" src="{{asset('assets/img/logo.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="">
                                            <a class="" href="{{route('index')}}">
                                            {{__("home")}}
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="" href="{{route('about')}}">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="" href="{{route('services')}}">
                                                Our Services
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="" href="{{route('products')}}">
                                                Products
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="" href="{{route('contact')}}">
                                                Contact Us
                                            </a>
                                        </li>


                                        <li>
                                            @if(App::isLocale('ar'))
                                            <a href="{{ route('lang','en') }}">
                                                EN
                                            </a>
                                            @else
                                           <a href="{{ route('lang','ar') }}">
                                            AR
                                            </a>
                                           @endif
                                        </li>
                                        <!-- <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Shop
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Single Product</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="shop-product-full-width.html">Full Width</a></li>
                                                        <li><a class="dropdown-item" href="shop-product-sidebar-left.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="shop-product-sidebar-right.html">Right Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="shop-product-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item" href="shop-4-columns.html">4 Columns</a></li>
                                                <li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>

                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
