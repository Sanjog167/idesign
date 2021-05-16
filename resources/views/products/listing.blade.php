<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />
  <title>iDesign | Home</title>
  <link rel="icon" type="image/png" href="/assets/images/front_images/idesign/logo.jpg" />
  <!-- fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/assets/vendor/owl-carousel/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="/assets/vendor/photoswipe/photoswipe.css" />
  <link rel="stylesheet" href="/assets/vendor/photoswipe/default-skin/default-skin.css" />
  <link rel="stylesheet" href="/assets/vendor/select2/css/select2.min.css" />
  <link rel="stylesheet" href="/assets/css/front_css/style.css" />
  <!-- font - fontawesome -->
  <link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />
  <!-- font - stroyka -->
  <link rel="stylesheet" href="/assets/fonts/stroyka/stroyka.css" />

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <link rel="stylesheet" href="/assets/css/front_css/lunar.css">
  <script src="/assets/js/frontend_js/lunar.js" defer></script>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style>
.departments__links {
    position: relative;
    list-style: none;
    padding: 0 0 0px;
    margin: 0;
}
</style>


</head>

<body>
  <!-- site -->
  <div class="site">
    <!-- mobile site__header -->
    <header class="site__header d-lg-none">
      <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
      <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
        <div class="mobile-header__panel">
          <div class="container">
            <div class="mobile-header__body">
              <button class="mobile-header__menu-button">
                <i class="fa fa-bars fa-2x"></i>
              </button>
              <a class="mobile-header__logo" href="index.html">
                <!-- mobile-logo -->
                  <img src="/assets/images/front_images/idesign/logo.jpg" alt="logo"> 
                <!-- mobile-logo / end -->
              </a>
              <div class="search search--location--mobile-header mobile-header__search">
                <div class="search__body">
                  <form class="search__form" action="#">
                    <input class="search__input" name="search" placeholder="Search over 10,000 products"
                      aria-label="Site search" type="text" autocomplete="off" />
                    <button class="search__button search__button--type--submit" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                    <button class="search__button search__button--type--close" type="button">
                      <i class="fa fa-remove"></i>
                    </button>
                    <div class="search__border"></div>
                  </form>
                  <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                </div>
              </div>
              <div class="mobile-header__indicators">
                <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                  <button class="indicator__button">
                    <span class="indicator__area">
                      <i class="fa fa-search fa-2x"></i>
                    </span>
                  </button>
                </div>
                <div class="indicator indicator--mobile d-sm-flex d-none">
                  <a href="wishlist.html" class="indicator__button"><span class="indicator__area">
                    <i class="fa fa-heart"></i>
                      <span class="indicator__value">0</span></span></a>
                </div>
                <div class="indicator indicator--mobile">
                  <a href="cart.html" class="indicator__button"><span class="indicator__area">
                    <i class="fa fa-shopping-cart fa-2x"></i>  
                      <span class="indicator__value">3</span></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- mobile site__header / end -->
    <!-- desktop site__header -->
    <header class="site__header d-lg-block d-none">
      <div class="site-header">
        <!-- .topbar -->
        <div class="site-header__topbar topbar">
          <div class="topbar__container container">
            <div class="topbar__row">
              <div class="topbar__item topbar__item--link">
                <!-- <a class="topbar-link" href="about-us.html">About Us</a> -->
                <i class="fa fa-facebook"></i>
              </div>
              <div class="topbar__item topbar__item--link">
                <!-- <a class="topbar-link" href="contact-us.html">Contacts</a> -->
                <i class="fa fa-instagram"></i>
              </div>
              <div class="topbar__item topbar__item--link">
                <!-- <a class="topbar-link" href="#">Store Loca tion</a> -->
                <i class="fa fa-youtube"></i>
              </div>
              <div class="topbar__item topbar__item--link">
                <!-- <a class="topbar-link" href="track-order.html">Track Order</a> -->
                <i class="fa fa-whatsapp"></i>
              </div>
              <!-- <div class="topbar__item topbar__item--link">
                  <a class="topbar-link" href="blog-classic.html">Blog</a>
                </div> -->
              <div class="topbar__spring"></div>
              <div class="topbar__item">
                <div class="topbar-dropdown">
                  <div class="customerservice">
                    <p>Customer service: 9801003558, 9851130597</p>
                  </div>
                  <div class="opening-hours">
                    <p>Opens: 6:00am-6:00pm</p>
                  </div>
                  
                  
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- .topbar / end -->
        <div class="site-header__middle container">
          <div class="site-header__logo">
            <a href="{{url('/')}}"><img src="/assets/images/front_images/idesign/logo.jpg" alt="logo"></a>
          </div>
          <div class="site-header__search">
            <div class="site-header__search">
              <div class="search search--location--header">
                <div id="search-body-id" class="search__body">
                      <form class="search__form" action="#">
                      <input class="search__input" name="search" placeholder="Search over 10,000 products"
                          aria-label="Site search" type="text" autocomplete="off" />
                      
                      <div class="search__border"></div>
                      </form>
                  <div class="search__suggestions suggestions suggestions--location--header"></div>
                  
                </div>
                
                <button id="toggle-button" class="search__button search__button--type--submit" type="submit">
                 <img src="/assets/images/front_images/search.svg">
                </button>
                <div id="search_button_caption" class="search_button_caption">
                  <p>Search</p>
                </div>
              </div>
              
            </div>
          </div>
          <div class="site-header__phone">
            <!-- <div class="site-header__phone-title">Customer Service</div>
            <div class="site-header__phone-number">+977 9876765432</div> -->
            <div class="nav-panel__indicators">
             
              <div class="indicator">
                <a href="cart.html" class="indicator__button"><span class="indicator__area">
                  <img src="/assets/images/front_images/shopping-cart.svg">
                    <span class="indicator__value">3</span></span></a>
             
              </div>
              <div class="flex-class">
                <a href="login-register.html" class="indicator__button indicator indicator--trigger--click"><span class="indicator__area">
                  <img src="/assets/images/front_images/user.svg"> <p class="logintext">Login</p></span>
                </a>
                <div class="topbar__item">
                  <div class="topbar-dropdown">
                <button class="topbar-dropdown__btn" type="button">
                  My Account
                  <svg width="7px" height="5px">
                    <use xlink:href="/assets/images/front_images/sprite.svg#arrow-rounded-down-7x5"></use>
                  </svg>
                </button>  
                <div class="topbar-dropdown__body">
                    <!-- .menu -->
                    <div class="menu menu--layout--topbar">
                      <div class="menu__submenus-container"></div>
                      <ul class="menu__list">
                        <li class="menu__item">
                          <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                          <div class="menu__item-submenu-offset"></div>
                          <a class="menu__item-link" href="dashboard.html">Dashboard</a>
                        </li>
                        <li class="menu__item">
                          <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                          <div class="menu__item-submenu-offset"></div>
                          <a class="menu__item-link" href="edit-profile.html">Edit Profile</a>
                        </li>
                        <li class="menu__item">
                          <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                          <div class="menu__item-submenu-offset"></div>
                          <a class="menu__item-link" href="change-password.html">Password</a>
                        </li>
                        <li class="menu__item">
                          <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                          <div class="menu__item-submenu-offset"></div>
                          <a class="menu__item-link" href="account-login.html">Logout</a>
                        </li>
                      </ul>
                    </div>
                    <!-- .menu / end -->
                  </div>              
                </div>
                </div>
                </div>
            </div>
          </div>
        </div>
        <div class="site-header__nav-panel">
          <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
          <div class="nav-panel" data-sticky-mode="pullToShow">
            <div class="nav-panel__container container">
              <div class="nav-panel__row">
                <div class="nav-panel__departments">
                  <!-- .departments -->
                  <div class="departments departments--open departments--fixed"
                    data-departments-fixed-by=".block-slideshow">
                    <div class="departments__body hiddenbody" style="display:none">
                      <div class="departments__links-wrapper">
                        <div class="departments__submenus-container"></div>
                     
                        <?php ?>
                          @foreach($categories as $cat)
                        <ul class="departments__links">
                      
                          <!-- first list start -->
                          <li class="departments__item">
                        
                          <a class="departments__item-link" href="{{ asset('/products/'.$cat->url) }}">
                            {{$cat->name}}
                              <i class="fa fa-chevron-right departments__item-arrow">
                              
                              </i>
                            </a>
                         
                            <div class="departments__submenu departments__submenu--type--menu">
                              <!-- .menu -->
                              <div class="menu menu--layout--classic">
                                <div class="menu__submenus-container"></div>
                                <ul class="menu__list">
                                @foreach($cat->categories as $subcat)
                                  <li class="menu__item">
                                 
                                    <div class="menu__item-submenu-offset"></div>
                                    <a class="menu__item-link" href="{{ asset('/products/'.$subcat->url) }}">
                                    {{$subcat->name}} 
                                     
                                    </a>
                                  
                                  </li>
                                  @endforeach  
                                </ul>
                            
                              </div>
                              <!-- .menu / end -->
                            </div>
                          </li>
                          <!-- first list end -->

                       
                          
                        
                        </ul>
                        @endforeach
                      </div>
                    </div>
                    <button class="departments__button catbutton">
                     <img src="/assets/images/front_images/bar.svg" class="barsbars">
                      Shop By Category
                      <i class="fa fa-chevron-up departments__button-arrow">
                    
                      </i>
                    </button>
                  </div>
                  <!-- .departments / end -->
                </div>
                <!-- .nav-links -->
                <div class="nav-panel__nav-links nav-links">
                  <ul class="nav-links__list">
                    <li class="nav-links__item nav-links__item--has-submenu">
                      <a class="nav-links__item-link" href="index.html">
                        <div class="nav-links__item-body">
                          Home
                         
                        </div>
                      </a>
                    </li>
                    <li class="nav-links__item nav-links__item--has-submenu">
                      <a class="nav-links__item-link" href="index.html">
                        <div class="nav-links__item-body">
                          About
                        </div>
                      </a>
                    </li>
                    <li class="nav-links__item nav-links__item--has-submenu">
                      <a class="nav-links__item-link" href="index.html">
                        <div class="nav-links__item-body">
                          Contact
                        </div>
                      </a>
                    </li>
                    <li class="nav-links__item nav-links__item--has-submenu">
                      <a class="nav-links__item-link" href="index.html">
                        <div class="nav-links__item-body">
                          Location
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>
                <!-- .nav-links / end -->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- desktop site__header / end -->
    <!-- site__body -->
    <div class="site__body">
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-angle-right"></i>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Categories
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="category-container">
                    <div class="row">
                            <!-- shop-products-wrapper end -->
                        <div class="col-lg-3">
                            <div class="shop-top-bar mt-30">
                                <div class="product-select-box">
                                    <div class="product-short">
                                        <p>Sort By:</p>
                                        <select class="nice-select">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- product-select-box end -->
                            </div>
                            <!--sidebar-categores-box start  -->
                            <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                                <div class="sidebar-title">
                                    <h2>Office Material</h2>
                                </div>
                                <!-- category-sub-menu start -->
                                <div class="category-sub-menu">
                                    <ul>
                                        <li class="has-sub"><a href="# ">Cards</a>
                                            <ul>
                                                <li><a href="#">Visiting Card</a></li>
                                                <li><a href="#">Brouchures</a></li>
                                                <li><a href="#">Flyers</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="#">Cermics</a>
                                            <ul>
                                                <li><a href="#">Cups</a></li>
                                                <li><a href="#">Plates</a></li>
                                                <li><a href="#">Mugs</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="#">Apparels</a>
                                            <ul>
                                                <li><a href="#">T-shirt</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">PPE</a></li>
                                                <li><a href="#">Masks</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- category-sub-menu end -->
                            </div>
                            
                            <!--sidebar-categores-box end  -->
                        </div>
                        <div class="col-lg-9">

                            <!-- shop-top-bar start -->
                            
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                               
                                    <div class="category-gridview-container">
                                    @foreach($productsAll as $product)
                                        <div class="product-card product-card--hidden-actions">
                                            <button class="product-card__quickview" type="button">
                                                <i class="fa fa-eye"></i>
                                                <span class="fake-svg-icon"></span>
                                            </button>
                                            <div class="product-card__badges-list">
                                                <div class="product-card__badge product-card__badge--new">
                                                    New
                                                </div>
                                            </div>
                                            <div class="product-card__image product-image">
                                                <a href="{{ url('product/'.$product->id) }}" class="product-image__body"><img
                                                        class="product-image__img"
                                                        src="{{asset('assets/images/back_images/products/large/'.$product->image) }}"
                                                        alt="" /></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name">
                                                    <a href="#">{{$product->product_name}}</a>
                                                </div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body">
                                                                <i class="fa fa-star"></i>
                                                                <div
                                                                    class="rating__star rating__star--only-edge rating__star--active">
                                                                    <div class="rating__fill">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                    <div class="rating__stroke">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                </div>
                                                                <i class="fa fa-star"></i>
                                                                <div
                                                                    class="rating__star rating__star--only-edge rating__star--active">
                                                                    <div class="rating__fill">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                    <div class="rating__stroke">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                </div>
                                                                <i class="fa fa-star"></i>
                                                                <div
                                                                    class="rating__star rating__star--only-edge rating__star--active">
                                                                    <div class="rating__fill">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                    <div class="rating__stroke">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                </div>
                                                                <i class="fa fa-star"></i>
                                                                <div
                                                                    class="rating__star rating__star--only-edge rating__star--active">
                                                                    <div class="rating__fill">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                    <div class="rating__stroke">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                </div>
                                                                <i class="fa fa-star"></i>
                                                                <div class="rating__star rating__star--only-edge">
                                                                    <div class="rating__fill">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                    <div class="rating__stroke">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__rating-legend">
                                                        9 Reviews
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-card__actions">
                                                <div class="product-card__prices">{{$product->price}}</div>
                                                <div class="product-card__buttons">
                                                    <a href="{{ url('product/'.$product->id) }}">
                                                        <button class="btn btn-primary product-card__addtocart"
                                                            type="button">
                                                            Add To Cart
                                                        </button>
                                                    </a>
                                                    <button href="cart.html"
                                                        class="btn btn-light btn-svg-icon--fake-svg product-card__wishlist price-calculator-button"
                                                        type="button" style="white-space: nowrap;">
                                                        Price Calculator
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach 
                                    </div>
                                    <div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p>Showing 1-12 of 13 item(s)</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="pagination-box">
                                                    <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i>
                                                            Previous</a>
                                                    </li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li>
                                                        <a href="#" class="Next">Next <i class="fa fa-chevron-right"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- site__body / end -->
    <!-- site__footer -->
    <footer class="site__footer">
      <div class="site-footer">
        <div class="container">
          <div class="site-footer__widgets">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="site-footer__widget footer-contacts">
                    <div class="footer-logo">
                      <a href="index.html">  <img src="/assets/images/front_images/idesign/logo.jpg" alt="logo"></a>
                    </div>
                  <div class="footer-contacts__text">
                    <p> iDesign is a complete e-commerce site and the first-ever online printing service in Nepal. We are a comprehensive solution partner guaranteeing the best quality at your door in a comparatively low rate. Connect with us to step ahead in the printing world.</p>
                  </div>
                  <ul class="footer-contacts__contacts">
                    <li>
                      <i class="footer-contacts__icon fas fa-globe-americas"></i>
                      kathmandu, Nepal
                    </li>
                    <li>
                      <i class="footer-contacts__icon far fa-envelope"></i>
                      idesign@gmail.com
                    </li>
                    <li>
                      <i class="footer-contacts__icon fas fa-mobile-alt"></i>
                      +977 98766776689
                    </li>
                    <li>
                      <i class="footer-contacts__icon far fa-clock"></i>
                      Mon-Sat 10:00pm - 7:00pm
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-6 col-md-3 col-lg-2">
                <div class="site-footer__widget footer-links">
                  <h5 class="footer-links__title">Information</h5>
                  <ul class="footer-links__list">
                    <li class="footer-links__item">
                      <a href="about-us.html" class="footer-links__link">About Us</a>
                    </li>
                    <li class="footer-links__item">
                      <a href="terms.html" class="footer-links__link">Terms & Conditions</a>
                    </li>
                    <li class="footer-links__item">
                      <a href="privacy.html" class="footer-links__link">Privacy Policy</a>
                    </li>
                    <li class="footer-links__item">
                      <a href="contact.html" class="footer-links__link">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-6 col-md-3 col-lg-2">
                <div class="site-footer__widget footer-links">
                  <h5 class="footer-links__title">My Account</h5>
                  <ul class="footer-links__list">
                    <li class="footer-links__item">
                      <a href="contact.html#map-location" class="footer-links__link">Store Location</a>
                    </li>
                    <!-- <li class="footer-links__item">
                      <a href="#" class="footer-links__link">Order History</a>
                    </li> -->
                    <li class="footer-links__item">
                      <a href="#" class="footer-links__link">Wish List</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4">
                <div class="site-footer__widget footer-newsletter">
                  <h5 class="footer-newsletter__title">Newsletter</h5>
                  <div class="footer-newsletter__text">
                    Subscribe to know about great deals.
                  </div>
                  <form action="#" class="footer-newsletter__form">
                    <label class="sr-only" for="footer-newsletter-address">Email Address</label>
                    <input type="text" class="footer-newsletter__form-input form-control" id="footer-newsletter-address"
                      placeholder="Email Address..." />
                    <button class="footer-newsletter__form-button btn btn-primary">
                      Subscribe
                    </button>
                  </form>
                  <div class="footer-newsletter__text footer-newsletter__text--social">
                    Follow us on:
                  </div>
                  <!-- social-links -->
                  <div class="social-links footer-newsletter__social-links social-links--shape--circle">
                    <ul class="social-links__list">
                      <li class="social-links__item">
                        <a class="social-links__link social-links__link--type--youtube" href="#" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                      </li>
                      <li class="social-links__item">
                        <a class="social-links__link social-links__link--type--facebook" href="#" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                      </li>
                      <li class="social-links__item">
                        <a class="social-links__link social-links__link--type--twitter" href="#" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                      </li>
                      <li class="social-links__item">
                        <a class="social-links__link social-links__link--type--instagram" href="#" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- social-links / end -->
                </div>
              </div>
            </div>
          </div>
          <div class="site-footer__bottom">
            <div class="site-footer__copyright">
              <!-- copyright -->
              <p> copyright &copy; All Right Reserved. Developed by <a href="nextaussietech.com" class="brand-color">NAT</a>.</p>
            <!-- copyright / end -->
            </div>
            <!-- <div class="site-footer__payments">
              <img src="/assets/images/front_images/payments.png" alt="" />
            </div> -->
          </div>
        </div>
        <div class="totop">
          <div class="totop__body">
            <div class="totop__start"></div>
            <div class="totop__container container"></div>
            <div class="totop__end">
              <button type="button" class="totop__button">
                <i class="fa fa-angle-up"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- site__footer / end -->
  </div>
  <!-- site / end -->
  <!-- quickview-modal -->
  <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content"></div>
    </div>
  </div>
  <!-- quickview-modal / end -->
  <!-- mobilemenu -->
  <div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
      <div class="mobilemenu__header">
        <div class="mobilemenu__title">Menu</div>
        <button type="button" class="mobilemenu__close">
          <i class="fa fa-remove"></i>
        </button>
      </div>
      <div class="mobilemenu__content">
        <ul class="mobile-links mobile-links--level--0" data-collapse
          data-collapse-opened-class="mobile-links__item--open">
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a href="index.html" class="mobile-links__item-link">Home</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="index.html" class="mobile-links__item-link">Home 1</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="index-2.html" class="mobile-links__item-link">Home 2</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="index-3.html" class="mobile-links__item-link">Home 1 Finder</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="index-4.html" class="mobile-links__item-link">Home 2 Finder</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="offcanvas-cart.html" class="mobile-links__item-link">Offcanvas Cart</a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a href="#" class="mobile-links__item-link">Categories</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">Power Tools</a>
                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                      <i class="fa fa-angle-down"></i>
                    </button>
                  </div>
                  <div class="mobile-links__item-sub-links" data-collapse-content>
                    <ul class="mobile-links mobile-links--level--2">
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Engravers</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Wrenches</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Wall Chaser</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Pneumatic Tools</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">Machine Tools</a>
                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                      <i class="fa fa-angle-down"></i>
                    </button>
                  </div>
                  <div class="mobile-links__item-sub-links" data-collapse-content>
                    <ul class="mobile-links mobile-links--level--2">
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Thread Cutting</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Chip Blowers</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Sharpening Machines</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Pipe Cutters</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Slotting machines</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="#" class="mobile-links__item-link">Lathes</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop Grid</a>
                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                      <i class="fa fa-angle-down"></i>
                    </button>
                  </div>
                  <div class="mobile-links__item-sub-links" data-collapse-content>
                    <ul class="mobile-links mobile-links--level--2">
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">3 Columns
                            Sidebar</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="shop-grid-4-columns-full.html" class="mobile-links__item-link">4 Columns Full</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="shop-grid-5-columns-full.html" class="mobile-links__item-link">5 Columns Full</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="shop-list.html" class="mobile-links__item-link">Shop List</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="shop-right-sidebar.html" class="mobile-links__item-link">Shop Right Sidebar</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="product.html" class="mobile-links__item-link">Product</a>
                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                      <i class="fa fa-angle-down"></i>
                    </button>
                  </div>
                  <div class="mobile-links__item-sub-links" data-collapse-content>
                    <ul class="mobile-links mobile-links--level--2">
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="product.html" class="mobile-links__item-link">Product</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="product-alt.html" class="mobile-links__item-link">Product Alt</a>
                        </div>
                      </li>
                      <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                          <a href="product-sidebar.html" class="mobile-links__item-link">Product Sidebar</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="cart.html" class="mobile-links__item-link">Cart</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="cart-empty.html" class="mobile-links__item-link">Cart Empty</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="checkout.html" class="mobile-links__item-link">Checkout</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="order-success.html" class="mobile-links__item-link">Order Success</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="wishlist.html" class="mobile-links__item-link">Wishlist</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="compare.html" class="mobile-links__item-link">Compare</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="track-order.html" class="mobile-links__item-link">Track Order</a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a href="account-login.html" class="mobile-links__item-link">Account</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-login.html" class="mobile-links__item-link">Login</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-dashboard.html" class="mobile-links__item-link">Dashboard</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-profile.html" class="mobile-links__item-link">Edit Profile</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-orders.html" class="mobile-links__item-link">Order History</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-order-details.html" class="mobile-links__item-link">Order Details</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-addresses.html" class="mobile-links__item-link">Address Book</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-edit-address.html" class="mobile-links__item-link">Edit Address</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="account-password.html" class="mobile-links__item-link">Change Password</a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a href="blog-classic.html" class="mobile-links__item-link">Blog</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="blog-classic.html" class="mobile-links__item-link">Blog Classic</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="blog-grid.html" class="mobile-links__item-link">Blog Grid</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="blog-list.html" class="mobile-links__item-link">Blog List</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="blog-left-sidebar.html" class="mobile-links__item-link">Blog Left Sidebar</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="post.html" class="mobile-links__item-link">Post Page</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="post-without-sidebar.html" class="mobile-links__item-link">Post Without Sidebar</a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a href="#" class="mobile-links__item-link">Pages</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="about-us.html" class="mobile-links__item-link">About Us</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="contact.html" class="mobile-links__item-link">Contact Us</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="contact-us-alt.html" class="mobile-links__item-link">Contact Us Alt</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="404.html" class="mobile-links__item-link">404</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="terms-and-conditions.html" class="mobile-links__item-link">Terms And Conditions</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="faq.html" class="mobile-links__item-link">FAQ</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="components.html" class="mobile-links__item-link">Components</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="typography.html" class="mobile-links__item-link">Typography</a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a data-collapse-trigger class="mobile-links__item-link">Currency</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">€ Euro</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">£ Pound Sterling</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">$ US Dollar</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">₽ Russian Ruble</a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mobile-links__item" data-collapse-item>
            <div class="mobile-links__item-title">
              <a data-collapse-trigger class="mobile-links__item-link">Language</a>
              <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="mobile-links__item-sub-links" data-collapse-content>
              <ul class="mobile-links mobile-links--level--1">
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">English</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">French</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">German</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">Russian</a>
                  </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                  <div class="mobile-links__item-title">
                    <a href="#" class="mobile-links__item-link">Italian</a>
                  </div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade modal-quickview" id="demoModal"  tabindex="-1" role="dialog" aria-labelledby="demoModal" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered " role="document">
      <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          <div class="container-fluid">
            <div class="row">
                <div class="bg-img d-none d-sm-flex align-items-center" > <!-- style="background-image: url('https://img.freepik.com/free-vector/elegant-minimal-black-yellow-business-card-template_1017-22513.jpg?size=338&ext=jpg')" -->
                  <img src="https://img.freepik.com/free-vector/elegant-minimal-black-yellow-business-card-template_1017-22513.jpg?size=338&ext=jpg" alt="product image">
                </div>
                <div class="modal-content-container">
                  <h2>Visting Card</h2>
                  <div class="product-card__rating">
                    <div class="product-card__rating-stars">
                      <div class="rating">
                        <div class="rating__body">
                          <i class="fa fa-star"></i>
                          <div class="rating__star rating__star--only-edge rating__star--active">
                            <div class="rating__fill">
                              <div class="fake-svg-icon"></div>
                            </div>
                            <div class="rating__stroke">
                              <div class="fake-svg-icon"></div>
                            </div>
                          </div>
                          <i class="fa fa-star"></i>
                          <div class="rating__star rating__star--only-edge rating__star--active">
                            <div class="rating__fill">
                              <div class="fake-svg-icon"></div>
                            </div>
                            <div class="rating__stroke">
                              <div class="fake-svg-icon"></div>
                            </div>
                          </div>
                          <i class="fa fa-star"></i>
                          <div class="rating__star rating__star--only-edge rating__star--active">
                            <div class="rating__fill">
                              <div class="fake-svg-icon"></div>
                            </div>
                            <div class="rating__stroke">
                              <div class="fake-svg-icon"></div>
                            </div>
                          </div>
                          <i class="fa fa-star"></i>
                          <div class="rating__star rating__star--only-edge rating__star--active">
                            <div class="rating__fill">
                              <div class="fake-svg-icon"></div>
                            </div>
                            <div class="rating__stroke">
                              <div class="fake-svg-icon"></div>
                            </div>
                          </div>
                          <i class="fa fa-star"></i>
                          <div class="rating__star rating__star--only-edge">
                            <div class="rating__fill">
                              <div class="fake-svg-icon"></div>
                            </div>
                            <div class="rating__stroke">
                              <div class="fake-svg-icon"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-card__rating-legend">
                      9 Reviews
                    </div>
                  </div>

                  <div class="product-card__actions quickview-cardaction">
                    <div class="product-card__prices">
                      $750.00 <del>$1000</del> <span class="discount_percent">25%</span>
                    </div>                    

                    <div class="quickview_availability">
                      <p>
                        Availability: <span class="quickview-stock">Yes</span> 
                      </p>
                    </div>
                  </div>

                  

                  <div class="quickview_description">
                    <p>
                      Standard Business Card to communicate your brand. Print your business card online and carry your fine print, best quality card. <br>
                      (300 GSM paper with matt lamination)
                    </p>
                  </div>

                  <label class="product__option-label" for="product-quantity">Quantity</label>
                  <div class="product__actions">
                    <div class="product__actions-item">
                      <div class="input-number product__quantity product__quantity-quickview">
                          <input id="product-quantity" class="input-number__input
                                  form-control
                                  form-control-lg" type="number" min="1" value="1" />
                          <div class="input-number__add"></div>
                          <div class="input-number__sub"></div>
                      </div>
                    </div>
                  </div>
                  <div class="product-card__buttons quickview-productcard-button">
                    <a href="cart.html">
                      <button class="btn btn-primary product-card__addtocart" type="button">
                        Add To Cart
                      </button>
                    </a>
                  </div>
                </div>
            </div>
          </div>


      </div>
    </div>
  </div>

  <div class="price-cal-modal modal fade" id="PriceCalcModal" tabindex="-1" role="dialog"
  aria-labelledby="demoModal" aria-hidden="true">
  <div class="modal-dialog
          modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal"
                  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <div class="text-center price-calc-modal-head
                      ">
                  <i class="fas fa-calculator"></i>
                  <h3>Price Calculator</h3>
              </div>
              <hr>
              <!-- <form>
                      <div
                          class="form-group">
                          <label
                              for="exampleInputEmail1">Email
                              address</label>
                          <input
                              type="email"
                              class="form-control"
                              id="exampleInputEmail1"
                              aria-describedby="emailHelp"
                              placeholder="Enter
                              email">
                      </div>
                  </form> -->

              <div class="card-radio-tile-group">
                  <h4 class=card-radio-size-heading>Size</h4>
                  <div class="card-radio-size-container">
                      <div class="input-container">
                          <input id="front-card" class="radio-button" type="radio"
                              name="radio" />
                          <div class="radio-tile">
                              <div class="icon front-card">
                                  <img src="/assets/images/front_images/idesign/calc-font-card.png"
                                      alt="">
                              </div>
                              <label for="front-card"
                                  class="radio-tile-label">Front Side</label>
                          </div>
                      </div>
                      <div class="input-container">
                          <input id="font-back-card" class="radio-button"
                              type="radio" name="radio" />
                          <div class="radio-tile">
                              <div class="icon font-back-card-icon">
                                  <img src="/assets/images/front_images/idesign/calc-font-back-card.png"
                                      alt="">
                              </div>
                              <label for="front-back-card"
                                  class="radio-tile-label">Front & Back
                                  Side</label>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="card-radio-tile-group quangroup">
                  <h4 class=card-radio-size-heading>Quantity</h4>
                  <div class="card-radio-size-container">
                      <div class="input-container">
                          <input id="front-card" class="radio-button" type="radio"
                              name="radio-quan" />
                          <div class="radio-tile">
                              <div class="icon front-card">
                                  <div class="quantity_label_number">
                                      <p>1</p>
                                  </div>
                              </div>
                              <label for="front-card"
                                  class="radio-tile-label">Rs. 360</label>
                          </div>
                      </div>
                      <div class="input-container">
                          <input id="front-card" class="radio-button" type="radio"
                              name="radio-quan" />
                          <div class="radio-tile">
                              <div class="icon front-card">
                                  <div class="quantity_label_number">
                                      <p>2</p>
                                  </div>
                              </div>
                              <label for="front-card"
                                  class="radio-tile-label">Rs. 360</label>
                          </div>
                      </div>
                      <div class="input-container">
                          <input id="front-card" class="radio-button" type="radio"
                              name="radio-quan" />
                          <div class="radio-tile">
                              <div class="icon front-card">
                                  <div class="quantity_label_number">
                                      <p>3</p>
                                  </div>
                              </div>
                              <label for="front-card"
                                  class="radio-tile-label">Rs. 360</label>
                          </div>
                      </div>
                      <div class="input-container">
                          <input id="front-card" class="radio-button" type="radio"
                              name="radio-quan" />
                          <div class="radio-tile">
                              <div class="icon front-card">
                                  <div class="quantity_label_number">
                                      <p>4</p>
                                  </div>
                              </div>
                              <label for="front-card"
                                  class="radio-tile-label">Rs. 360</label>
                          </div>
                      </div>
                  </div>
              </div>

            
                  
                
              <div class="card-radio-tile-group">
                  <h4 class="card-radio-size-heading">Corner</h4>
                  <div class="card-radio-size-container">
                      <div class="input-container round-straight">
                          <input id="front-card" class="radio-button" type="radio"
                              name="round-radio" />
                          <div class="radio-tile">
                              <p>straight</p>
                              <div class="straight-container">
                                  <div class="background-container"></div>
                              </div>
                              <label for="straight" class="radio-tile-label">Rs.
                                  0.00</label>
                          </div>
                      </div>
                      <div class="input-container round-straight">
                          <input id="font-back-card" class="radio-button" type="radio"
                              name="round-radio" />
                          <div class="radio-tile">
                              <p>Round</p>
                              <div class="round-container">
                                  <div class="background-container round-added"></div>
                              </div>
                              <label for="round"
                                  class="radio-tile-label">Rs.100</label>
                          </div>
                      </div>
                  </div>
              </div>
           
              <div class="card-radio-tile-group custom-design">
                  <p>Get Custom Design</p>
                  <select value="yes/no">
                      <option value="yes" name="yes" id="yes">Yes</option>
                      <option value="no" name="no" id="no">No</option>
                  </select>
              </div>
              <div class="small_notice">
              <div class="card-radio-tile-group per-piece">
                  <p class="no-margin brand-color">Per piece price: Rs. 10 </p>
              </div>
              <div class="card-radio-tile-group">
                  <p class="no-margin brand-color">Subtotal: Rs. 10 </p>
              </div>
              <div class="card-radio-tile-group">
                  <p class="no-margin brand-color">Total: Rs. 10 <br> (all inclusive
                      of shipping & taxes) </p>
              </div>
              <img src="/assets/images/front_images/check.svg">
            </div>
              <div class="priceModal-button">
                  <button>Add to Cart</button>
              </div>
          </div>
      </div>

  </div>
</div>




<!-- Modal Ends -->
  <!-- mobilemenu / end -->
  <!-- photoswipe -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div>
          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
          <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>
        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- photoswipe / end -->
  <!-- js -->
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/owl-carousel/owl.carousel.min.js"></script>
  <script src="/assets/vendor/nouislider/nouislider.min.js"></script>
  <script src="/assets/vendor/photoswipe/photoswipe.min.js"></script>
  <script src="/assets/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
  <script src="/assets/vendor/select2/js/select2.min.js"></script>
  <script src="/assets/js/frontend_js/number.js"></script>
  <script src="/assets/js/frontend_js/main.js"></script>
  <script src="/assets/js/frontend_js/header.js"></script>
  <script src="/assets/vendor/svg4everybody/svg4everybody.min.js"></script>

  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "UA-97489509-8");
  </script>
  <script>
    svg4everybody();
  </script>
  <script>
    var swiper = new Swiper('.mainbans', {
      pagination: {
          el: '.swiper-pagination',
          dynamicBullets: true,
          clickable: true,
        },
        autoplay: true,
    });
  </script>
<script>
  $(document).ready(function(){
      $("#toggle-button").click(function(){
        $("#search-body-id").toggle(500);
        $("#search_button_caption").toggle();
      });
    });
</script>

<script>
$(".catbutton").click(function(){
  $(".hiddenbody").toggle(200);
});
</script>



</body>

</html>