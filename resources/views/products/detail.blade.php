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
                                    New Year Card
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="product product--layout--standard" data-layout="standard">
                        <div class="product__content">
                            <!-- .product__gallery -->
                            <div class="product__gallery">
                                <div class="product-gallery">
                                    <div class="product-gallery__featured">
                                        <button class="product-gallery__zoom">
                                            <svg width="24px" height="24px">
                                                <use xlink:href="images/sprite.svg#zoom-in-24"></use>
                                            </svg>
                                        </button>
                                        <div class="owl-carousel" id="product-image">
                                         
                                            <div class="product-image
                                                    product-image--location--gallery">
                                                <a data-width="700" data-height="700"
                                                    class="product-image__body" target="_blank"><img
                                                        class="product-image__img" src="{{asset('assets/images/back_images/products/large/'.$productDetails->image) }}"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="product-gallery__carousel">
                                        <div class="owl-carousel" id="product-carousel">
                                            <a href="images/idesign/product.jpg" class="product-image
                                                    product-gallery__carousel-item">
                                                <div class="product-image__body">
                                                    <img class="product-image__img
                                                            product-gallery__carousel-image"
                                                        src="images/idesign/product.jpg" alt="" />
                                                </div>
                                            </a><a href="images/idesign/product.jpg" class="product-image
                                                    product-gallery__carousel-item">
                                                <div class="product-image__body">
                                                    <img class="product-image__img
                                                            product-gallery__carousel-image"
                                                        src="images/idesign/product.jpg" alt="" />
                                                </div>
                                            </a><a href="images/idesign/product.jpg" class="product-image
                                                    product-gallery__carousel-item">
                                                <div class="product-image__body">
                                                    <img class="product-image__img
                                                            product-gallery__carousel-image"
                                                        src="images/idesign/product.jpg" alt="" />
                                                </div>
                                            </a><a href="images/idesign/product.jpg" class="product-image
                                                    product-gallery__carousel-item">
                                                <div class="product-image__body">
                                                    <img class="product-image__img
                                                            product-gallery__carousel-image"
                                                        src="images/idesign/product.jpg" alt="" />
                                                </div>
                                            </a><a href="images/idesign/product.jpg" class="product-image
                                                    product-gallery__carousel-item">
                                                <div class="product-image__body">
                                                    <img class="product-image__img
                                                            product-gallery__carousel-image"
                                                        src="images/idesign/product.jpg" alt="" />
                                                </div>
                                            </a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <!-- .product__gallery / end -->
                            <!-- .product__info -->
                            <div class="product__info">
                                <div class="product__wishlist-compare">
                                    <button type="button" class="btn btn-sm
                                            btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right"
                                        title="Wishlist">
                                        <i class="fa fa-heart"></i>
                                    </button>

                                </div>
                                <h1 class="product__name">
                                    {{$productDetails->product_name}}
                                </h1>
                                <div class="product__rating">
                                    <div class="product__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <i class="fa fa-star"></i>
                                                <div class="rating__star
                                                        rating__star--only-edge
                                                        rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                                <i class="fa fa-star"></i>
                                                <div class="rating__star
                                                        rating__star--only-edge
                                                        rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                                <i class="fa fa-star"></i>
                                                <div class="rating__star
                                                        rating__star--only-edge
                                                        rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                                <i class="fa fa-star"></i>
                                                <div class="rating__star
                                                        rating__star--only-edge
                                                        rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                                <i class="fa fa-star"></i>
                                                <div class="rating__star
                                                        rating__star--only-edge
                                                        rating__star--active">
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
                                    <div class="product__rating-legend">
                                        <a href="#">7 Reviews</a><span>/</span><a href="#">Write A Review</a>
                                    </div>
                                </div>
                                <div class="product__description">
                                {{$productDetails->description}}
                                </div>
                                <!-- <ul class="product__features">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                                <ul class="product__meta">
                                    <li class="product__meta-availability">
                                        Availability: <span class="text-success">In Stock</span>
                                    </li>
                                    <li>Brand: <a href="#">Wakita</a></li>
                                    <li>SKU: 83690/32</li>
                                </ul> -->
                            </div>
                            <!-- .product__info / end -->
                            <!-- .product__sidebar -->
                            <div class="product__sidebar">
                                <div class="product__availability">
                                    Availability: <span class="text-success">In Stock</span>
                                </div>
                                <div class="product__prices">NPR 360</div>
                                <!-- .product__options -->
                                <form class="product__options">
                                    <div class="form-group product__option">
                                        <label class="product__option-label" for="product-quantity">Quantity</label>
                                        <div class="product__actions">
                                            <div class="product__actions-item">
                                                <div class="input-number
                                                        product__quantity">
                                                    <input id="product-quantity" class="input-number__input
                                                            form-control
                                                            form-control-lg" type="number" min="1" value="1" />
                                                    <div class="input-number__add"></div>
                                                    <div class="input-number__sub"></div>
                                                </div>
                                            </div>
                                           
                                            <div class="product__actions-item
                                                    product__actions-item--addtocart">
                                                    <a href="cart.html">   
                                               
                                                       
                                                    Add to cart
                                           
                                             
                                            </a>
                                            </div>
                                      
                                        </div>
                                    </div>
                                </form>
                                <div class="product-price-calculator">
                                    <button class="btn-lg
                                            product-price-calculator-button" data-toggle="modal"
                                        data-target="#PriceCalcModal">
                                        Price calculator <i class="fas
                                                fa-calculator"></i>
                                    </button>
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
                                                                        <img src="images/idesign/calc-font-card.png"
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
                                                                        <img src="images/idesign/calc-font-back-card.png"
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
                                                    <div class="priceModal-button">
                                                        <button>Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .product__options / end -->
                        </div>
                        <!-- .product__end -->
                        <!-- <div class="product__footer">
                                <div class="product__tags tags">
                                    <div class="tags__list">
                                        <a href="#">Mounts</a> <a href="#">Electrodes</a>
                                        <a href="#">Chainsaws</a>
                                    </div>
                                </div>
                                <div class="product__share-links
                                        share-links">
                                    <ul class="share-links__list">
                                        <li class="share-links__item
                                                share-links__item--type--like">
                                            <a href="#">Like</a>
                                        </li>
                                        <li class="share-links__item
                                                share-links__item--type--tweet">
                                            <a href="#">Tweet</a>
                                        </li>
                                        <li class="share-links__item
                                                share-links__item--type--pin">
                                            <a href="#">Pin It</a>
                                        </li>
                                        <li class="share-links__item
                                                share-links__item--type--counter">
                                            <a href="#">4K</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                    </div>
                </div>
                <div class="product-tabs product-tabs--sticky">
                    <div class="product-tabs__list">
                        <div class="product-tabs__list-body">
                            <div class="product-tabs__list-container
                                        container">
                                <a href="#tab-description" class="product-tabs__item
                                            product-tabs__item--active">Description</a>
                                <a href="#tab-specification" class="product-tabs__item">Specification</a>
                                <a href="#tab-reviews" class="product-tabs__item">Reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="product-tabs__content">
                            <div class="product-tabs__pane
                                        product-tabs__pane--active" id="tab-description">
                                <div class="typography">
                                    <h4>Product Full Description</h4>
                                    <p>
                                        Happy New Year card is the card you
                                        give to your loved ones. You can
                                        fully customize the card.
                                    </p>
                                </div>
                            </div>
                            <div class="product-tabs__pane" id="tab-specification">
                                <div class="spec">
                                    <h4 class="spec__header">Specification</h4>
                                    <div class="spec__section">
                                        <h5 class="spec__section-title">General</h5>
                                        <div class="spec__row">
                                            <div class="spec__name">Material</div>
                                            <div class="spec__value">Aluminium,
                                                Plastic</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Engine
                                                Type</div>
                                            <div class="spec__value">Brushless</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Battery
                                                Voltage</div>
                                            <div class="spec__value">18 V</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Battery
                                                Type</div>
                                            <div class="spec__value">Li-lon</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Number
                                                of Speeds</div>
                                            <div class="spec__value">2</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Charge
                                                Time</div>
                                            <div class="spec__value">1.08 h</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Weight</div>
                                            <div class="spec__value">1.5 kg</div>
                                        </div>
                                    </div>
                                    <div class="spec__section">
                                        <h4 class="spec__section-title">Dimensions</h4>
                                        <div class="spec__row">
                                            <div class="spec__name">Length</div>
                                            <div class="spec__value">99 mm</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Width</div>
                                            <div class="spec__value">207 mm</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Height</div>
                                            <div class="spec__value">208 mm</div>
                                        </div>
                                    </div>
                                    <div class="spec__disclaimer">
                                        Information on technical
                                        characteristics, the delivery
                                        set, the country of manufacture and
                                        the appearance of the
                                        goods is for reference only and is
                                        based on the latest
                                        information available at the time of
                                        publication.
                                    </div>
                                </div>
                            </div>
                            <div class="product-tabs__pane" id="tab-reviews">
                                <div class="reviews-view">
                                    <div class="reviews-view__list">
                                        <h4 class="reviews-view__header">Customer
                                            Reviews</h4>
                                        <div class="reviews-list">
                                            <ol class="reviews-list__content">
                                                <li class="reviews-list__item">
                                                    <div class="review">
                                                        <div class="review__avatar">
                                                            <img src="http://julian-andrews.com/images/library/JRA_NEPAL_NOV_2009_056.jpg"
                                                                alt="" />
                                                        </div>
                                                        <div class="review__content">
                                                            <div class="review__author">Ram
                                                                Kumar
                                                                Bajgain</div>
                                                            <div class="review__rating">
                                                                <div class="rating">
                                                                    <div class="rating__body">
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge
                                                                                    rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge
                                                                                    rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge
                                                                                    rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge
                                                                                    rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge">
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
                                                            <div class="review__text">
                                                                I love their
                                                                products and
                                                                would love
                                                                to do so in
                                                                their
                                                                future. They
                                                                really do
                                                                standard
                                                                to their
                                                                quality and
                                                                their
                                                                promises
                                                            </div>
                                                            <div class="review__date">27
                                                                May, 2018</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="reviews-list__item">
                                                    <div class="review">
                                                        <div class="review__avatar">
                                                            <img src="https://image.shutterstock.com/image-photo/kathmandu-nepal-16-jun-2017-260nw-793033618.jpg"
                                                                alt="" />
                                                        </div>
                                                        <div class="review__content">
                                                            <div class="review__author">Atma
                                                                Ram Mulepati</div>
                                                            <div class="review__rating">
                                                                <div class="rating">
                                                                    <div class="rating__body">
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge
                                                                                    rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge
                                                                                    rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge
                                                                                    rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge">
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
                                                            <div class="review__text">
                                                                idesign has
                                                                been a
                                                                companion
                                                                for me to
                                                                make custom
                                                                gifts. For
                                                                me something
                                                                custom is an
                                                                unique and
                                                                lovely thing
                                                                u can give
                                                                to someone
                                                                for any
                                                                special
                                                                occasion or
                                                                no ocassion.
                                                            </div>
                                                            <div class="review__date">12
                                                                April, 2018</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="reviews-list__item">
                                                    <div class="review">
                                                        <div class="review__avatar">
                                                            <img src="http://newkidonthewok.com/wp-content/uploads/2015/09/DSC05537.jpg"
                                                                alt="" />
                                                        </div>
                                                        <div class="review__content">
                                                            <div class="review__author">Sita
                                                                Shrestha</div>
                                                            <div class="review__rating">
                                                                <div class="rating">
                                                                    <div class="rating__body">
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge
                                                                                    rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge
                                                                                    rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge
                                                                                    rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge
                                                                                    rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-star"></i>
                                                                        <div class="rating__star
                                                                                    rating__star--only-edge
                                                                                    rating__star--active">
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
                                                            <div class="review__text">
                                                                I can always
                                                                trust on
                                                                idesign for
                                                                quality as
                                                                they have
                                                                been doing
                                                                so with
                                                                their
                                                                products.
                                                            </div>
                                                            <div class="review__date">2
                                                                January,
                                                                2018</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                            <div class="reviews-list__pagination">
                                                <ul class="pagination
                                                            justify-content-center">
                                                    <li class="page-item
                                                                disabled">
                                                        <a class="page-link
                                                                    page-link--with-arrow" href="#"
                                                            aria-label="Previous">
                                                            <i class="fa fa-angle-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item
                                                                active">
                                                        <a class="page-link" href="#">2 <span
                                                                class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link
                                                                    page-link--with-arrow" href="#" aria-label="Next">
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="reviews-view__form">
                                        <h3 class="reviews-view__header">Write
                                            A Review</h3>
                                        <div class="row">
                                            <div class="col-12 col-lg-9
                                                        col-xl-8">
                                                <div class="form-row">
                                                    <div class="form-group
                                                                col-md-4">
                                                        <label for="review-stars">Review
                                                            Stars</label>
                                                        <select id="review-stars" class="form-control">
                                                            <option>5 Stars
                                                                Rating</option>
                                                            <option>4 Stars
                                                                Rating</option>
                                                            <option>3 Stars
                                                                Rating</option>
                                                            <option>2 Stars
                                                                Rating</option>
                                                            <option>1 Stars
                                                                Rating</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group
                                                                col-md-4">
                                                        <label for="review-author">Your
                                                            Name</label>
                                                        <input type="text" class="form-control" id="review-author"
                                                            placeholder="Your Name" />
                                                    </div>
                                                    <div class="form-group
                                                                col-md-4">
                                                        <label for="review-email">Email
                                                            Address</label>
                                                        <input type="text" class="form-control" id="review-email"
                                                            placeholder="Email
                                                                    Address" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="review-text">Your
                                                        Review</label>
                                                    <textarea class="form-control" id="review-text" rows="6"></textarea>
                                                </div>
                                                <div class="form-group
                                                            mb-0">
                                                    <button type="submit" class="btn
                                                                btn-primary btn-lg">
                                                        Post Your Review
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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