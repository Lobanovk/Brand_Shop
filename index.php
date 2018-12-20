<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>BRAND</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div class="wrapper">
  <div class="content">
    <header class="header">
      <div class="header-flex">
        <div class="header-left">
          <a class="logo" href="#"> <img src="img/logo.png" alt="logo">BRAN<span
              class="special-D">D</span></a>
          <form class="form" action="#">
            <div class="browse"><span class="browse-text">Browse</span><i class="fa fa-caret-down"></i>
              <div class="browse-mega-box">
                <div class="browse-mega-flex">
                  <h3>Women</h3>
                  <ul class="browse-mega-menu">
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Tops</a></li>
                    <li><a href="#">Sweaters/Knits</a></li>
                    <li><a href="#">Jackets/Coats</a></li>
                    <li><a href="#">Blazers</a></li>
                    <li><a href="#">Denim</a></li>
                    <li><a href="#">Leggings/Pants</a></li>
                    <li><a href="#">Skirts/Shorts</a></li>
                    <li><a href="#">Accessories </a></li>
                  </ul>
                  <h3>Men</h3>
                  <ul class="browse-mega-menu">
                    <li><a href="#">Tees/Tank tops</a></li>
                    <li><a href="#"> Shirts/Polos </a></li>
                    <li><a href="#">Sweaters</a></li>
                    <li><a href="#">Sweatshirts/Hoodies</a></li>
                    <li><a href="#">Blazers</a></li>
                    <li><a href="#">Jackets/vests</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <input class="search" type="search" placeholder="Search for Item...">
            <button class="submit-search" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="header-right">
          <div class="cart-position">
            <a href="shoping_cart.php"><img src="img/cart.svg" alt="cart">
            </a>
            <div class="cart">
              <div id="cart">
              
              <!---->
              <!--<div class="goods">-->
                <!--<a href="#">-->
                  <!--<img src="img/Layer_43.jpg" alt="thing"></a>-->
                <!--<div class="cart-text">-->
                  <!--<p class="name-goods">Rebox Zane</p>-->
                  <!--<div class="star">-->
                    <!--<i class="fa fa-star"></i>-->
                    <!--<i class="fa fa-star"></i>-->
                    <!--<i class="fa fa-star"></i>-->
                    <!--<i class="fa fa-star"></i>-->
                    <!--<i class="fa fa-star-half"></i></div>-->
                  <!--<p class="price">1&nbsp;x $250</p>-->
                <!--</div>-->
                <!--<i class="fas fa-times-circle remove-goods"></i>-->
              <!--</div>-->
              <!---->
              <!---->
              <!---->
              <!---->
              <!---->
              <!---->
              <!---->
              <!---->
              <!---->
              <!---->
              <!---->
              <!--<div class="goods">-->
                <!--<a href="#">-->
                  <!--<img src="img/Layer_44.jpg" alt="thing"></a>-->
                <!--<div class="cart-text">-->
                  <!--<p class="name-goods">Rebox Zane</p>-->
                  <!--<div class="star">-->
                    <!--<i class="fa fa-star"></i>-->
                    <!--<i class="fa fa-star"></i>-->
                    <!--<i class="fa fa-star"></i>-->
                    <!--<i class="fa fa-star"></i>-->
                    <!--<i class="fa fa-star-half"></i></div>-->
                  <!--<p class="price">1&nbsp;x $250</p>-->
                <!--</div>-->
                <!--<i class="fas fa-times-circle"></i>-->
              <!--</div>-->


              </div>
              <div class="flex-text-between">
                <p>TOTAL</p>
                <p>$<span id="all-price"></span></p>
              </div>
              <div class="checkout"><a class="checkout-text"
                                       href="checkout.php"><span>Checkout</span></a></div>
              <div class="go-to-card"><a class="go-to-card-text"
                                         href="shoping_cart.php"><span>Go&nbsp;to&nbsp;cart</span></a>
              </div>
            </div>
          </div>
          <div class="account"><a class="account-text" href="#">
            <span>My&nbsp;Account</span><i class="fa fa-caret-down"></i></a></div>
        </div>
      </div>
    </header>
    <nav>
      <ul class="menu">
        <li><a class="active" href="#">Home</a></li>
        <li><a href="product.php">Man</a></li>
        <li><a href="#">Women</a>
          <div class="mega-box">
            <div class="mega-flex">
              <h3>Women</h3>
              <ul class="mega-menu">
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Tops</a></li>
                <li><a href="#">Sweaters/Knits</a></li>
                <li><a href="#">Jackets/Coats</a></li>
                <li><a href="#">Blazers</a></li>
                <li><a href="#">Denim</a></li>
                <li><a href="#">Leggings/Pants</a></li>
                <li><a href="#">Skirts/Shorts</a></li>
                <li><a href="#">Accessories </a></li>
              </ul>
            </div>
            <div class="mega-flex">
              <h3>Women</h3>
              <ul class="mega-menu">
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Tops</a></li>
                <li><a href="#">Sweaters/Knits</a></li>
                <li><a href="#">Jackets/Coats</a></li>
              </ul>
              <h3>Women</h3>
              <ul class="mega-menu">
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Tops</a></li>
                <li><a href="#">Sweaters/Knits</a></li>
              </ul>
            </div>
            <div class="mega-flex">
              <h3>Women</h3>
              <ul class="mega-menu">
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Tops</a></li>
                <li><a href="#">Sweaters/Knits</a></li>
                <li><a href="#">Jackets/Coats</a></li>
              </ul>
              <a class="mega-menu-link" href="#"><img src="img/Layer_42.jpg" alt="choose-menu">
                <p class="mega-menu-text">Super sale!</p></a>
            </div>
          </div>
        </li>
        <li><a href="#">Kids</a></li>
        <li><a href="#">Accoseriese</a></li>
        <li><a href="#">Featured</a></li>
        <li><a href="#">Hot Deals</a></li>
      </ul>
    </nav>
    <div class="slider">
      <div class="slider-text">
        <h3 class="slider-head">THE BRAND</h3>
        <p class="slider-p">OF&nbsp;LUXERIOUS <span class="slider-span">FASHION</span></p>
      </div>
    </div>
    <aside class="offer">
      <div>
        <a href="#">
          <div class="big-offer big-offer1">
            <div class="offer-text-big1">
              <p class="offer-p">hOT dEAL</p>
              <h4 class="offer-h4">FOR MEN</h4></div>
          </div>
        </a>
        <a href="#">
          <div class="small-offer small-offer1">
            <div class="offer-text-small1">
              <p class="offer-p"> LUXIROUS &amp;&nbsp;trendy</p>
              <h4 class="offer-h4">ACCESORIES</h4></div>
          </div>
        </a>
      </div>
      <div>
        <a href="#">
          <div class="small-offer small-offer2">
            <div class="offer-text-small2">
              <p class="offer-p">30% offer</p>
              <h4 class="offer-h4">women</h4></div>
          </div>
        </a>
        <a href="#">
          <div class="big-offer big-offer2">
            <div class="offer-text-big2">
              <p class="offer-p"> new arrivals</p>
              <h4 class="offer-h4">FOR kids</h4></div>
          </div>
        </a>
      </div>
    </aside>
    <section>
      <div class="futered-items">
        <h5 class="items-h5">Fetured Items</h5>
        <p class="items-p">Shop for items based on&nbsp;what we&nbsp;featured in&nbsp;this week</p>
      </div>
      <div class="img-items">
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.php"> <img class="img" src="img/index/items-img1.png"-->
                                                           <!--alt="items-poduct">-->
            <!--<div class="product-info">-->
              <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
            <!---->
            <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
              <!--<span>Add to&nbsp;Cart</span>-->
            <!--</a>-->
          <!--</div>-->
        <!--</div>-->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.php"> <img class="img" src="img/index/items-img2.png"-->
                                                           <!--alt="items-poduct">-->
            <!--<div class="product-info">-->
              <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
            <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
              <!--<span>Add to&nbsp;Cart</span>-->
            <!--</a>-->
          <!--</div>-->
        <!--</div>-->
        <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.php"> <img class="img" src="img/index/items-img3.png"-->
                                                           <!--alt="items-poduct">-->
            <!--<div class="product-info">-->
              <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
            <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
              <!--<span>Add to&nbsp;Cart</span>-->
            <!--</a>-->
          <!--</div>-->
        <!--</div>-->
        <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.php"> <img class="img" src="img/index/items-img4.png"-->
                                                           <!--alt="items-poduct">-->
            <!--<div class="product-info">-->
              <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
            <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
              <!--<span>Add to&nbsp;Cart</span>-->
            <!--</a>-->
          <!--</div>-->
        <!--</div>-->
        <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.php"> <img class="img" src="img/index/items-img5.png"-->
                                                           <!--alt="items-poduct">-->
            <!--<div class="product-info">-->
              <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
            <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
              <!--<span>Add to&nbsp;Cart</span>-->
            <!--</a>-->
          <!--</div>-->
        <!--</div>-->
        <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.php"> <img class="img" src="img/index/items-img6.png"-->
                                                           <!--alt="items-poduct">-->
            <!--<div class="product-info">-->
              <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
            <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
              <!--<span>Add to&nbsp;Cart</span>-->
            <!--</a>-->
          <!--</div>-->
        <!--</div>-->
        <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.php"> <img class="img" src="img/index/items-img7.png"-->
                                                           <!--alt="items-poduct">-->
            <!--<div class="product-info">-->
              <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
            <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
              <!--<span>Add to&nbsp;Cart</span>-->
            <!--</a>-->
          <!--</div>-->
        <!--</div>-->
        <!--<div class="parent-product">-->
          <!--<a class="product" href="single_page.php"> <img class="img" src="img/index/items-img8.png"-->
                                                           <!--alt="items-poduct">-->
            <!--<div class="product-info">-->
              <!--<p>Mango People T-shirt</p> <span>$52.00</span></div>-->
          <!--</a>-->
          <!--<div class="parent-add-cart">-->
            <!--<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">-->
              <!--<span>Add to&nbsp;Cart</span>-->
            <!--</a>-->
          <!--</div>-->
        <!--</div>-->
      </div>
      <div class="button-all-product"><a href="#">Browse All Product<i
          class="fa fa-long-arrow-alt-right"></i></a></div>
    </section>
    
    <aside class="special-offer">
      <div class="sales-offer">
        <h4 class="sales-offer-h4">30&#37; <span>OFFER</span></h4>
        <p class="sales-offer-p">FOR WOMEN</p>
      </div>
      <div class="service">
        <article class="service-delivery"><img src="img/car.svg" alt="delivery">
          <div class="delivery-text">
            <h6 class="dilevery-text-h6">Free Delivery</h6>
            <p class="delivery-text-p">Worldwide delivery on&nbsp;all. Authorit tively morph next-generation
              innov tion with extensive models.</p>
          </div>
        </article>
        <article class="service-sales"><img src="img/sales.svg" alt="delivery">
          <div class="sales-text">
            <h6 class="dilevery-text-h6">Sales &amp;&nbsp;discounts</h6>
            <p class="delivery-text-p">Worldwide delivery on&nbsp;all. Authorit tively morph next-generation
              innov tion with extensive models.</p>
          </div>
        </article>
        <article class="service-qualiry"><img src="img/crown.svg" alt="delivery">
          <div class="delivery-text">
            <h6 class="dilevery-text-h6">Quality assurance</h6>
            <p class="delivery-text-p">Worldwide delivery on&nbsp;all. Authorit tively morph next-generation
              innov tion with extensive models.</p>
          </div>
        </article>
      </div>
    </aside>
  </div>
  <footer class="footer">
    <section class="short-info">
      <div class=" short-info-text">



        <div class="short-info-discription-img"><img src="img/footer/img-face.png" alt="">
          <div class="short-info-text-discription">
            <p class="short-info-quote">&laquo;Vestibulum quis porttitor dui! Quisque viverra nunc&nbsp;mi,
              a&nbsp;pulvinar purus condimentum&nbsp;a. Aliquam condimentum mattis neque sed pretium&raquo;</p>
            <p class="short-info-name">Bin Burhan</p>
            <p class="short-info-">Dhaka, Bd</p>
            <div class="swap">
              <a class="swap1" href="#"></a>
              <a class="swap2" href="#"></a>
              <a class="swap1" href="#"></a>
            </div>
          </div>
        </div>

        <div class="subscribe-container">
          <div class="subscride">
            <h5>Subscribe</h5>
            <p>FOR OUR NEWLETTER AND PROMOTION</p>
          </div>
          <div class="email-subscribe">
            <form action="#">
              <input class="email-subscribe-form" type="email" placeholder="Enter Your Email">
              <input class="email-button" type="submit" value="Subscribe"></form>
          </div>
        </div>
      </div>
      <div class="img-backdround"></div>
    </section>
    <div class="footer-info">
      <div class="footer-info1">
        <a class="logo logo-margin-bottom" href="#"> <img src="img/logo.png" alt="logo">BRAN<span
            class="special-D">D</span></a>
        <div class="footer-text">
          <p class="p-margin-bottom">Objectively transition extensive data rather than cross functional
            solutions. Monotonectally syndicate multidisciplinary materials before go&nbsp;forward benefits.
            Intrinsicly syndicate an&nbsp;expanded array of&nbsp;processes and cross-unit partnerships. </p>
          <p>Efficiently plagiarize 24/365 action items and focused infomediaries. Distinctively seize
            superior initiatives for wireless technologies. Dynamically optimize. </p>
          <!--
                           <p class="p-margin-bottom">Objectively strategize seamless relationships via resource sucking testing procedures. Proactively cultivate next-generation results for value-added methodologies. Dynamically plagiarize unique methodologies after performance based methodologies. Monotonectally empower stand-alone mindshare rather than ubiquitous opportunities. Dynamically orchestrate resource sucking scenarios after alternative synergy.</p>

                           <p>Compellingly envisioneer corporate methods of empowerment before standards compliant technologies. Objectively facilitate progressive.</p>
          -->
        </div>
      </div>
      <div class="company">
        <h6 class="footer-h6">COMPANY</h6>
        <ul class="choose">
          <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">How It&nbsp;Works</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="information">
        <h6 class="footer-h6">INFORMATION</h6>
        <ul class="choose">
          <li><a href="#">Tearms &amp;&nbsp;Condition</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">How to&nbsp;Buy</a></li>
          <li><a href="#">How to&nbsp;Sell</a></li>
          <li><a href="#">Promotion</a></li>
        </ul>
      </div>
      <div class="shop-category">
        <h6 class="footer-h6">SHOP CATEGORY</h6>
        <ul class="choose">
          <li><a href="#">Men</a></li>
          <li><a href="#">Women</a></li>
          <li><a href="#">Child</a></li>
          <li><a href="#">Apparel</a></li>
          <li><a href="#">Brows All</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="footer-copyright-text">
        <div class="copyright">
          <p>&copy;&nbsp;2017 Brand All Rights Reserved.</p>
        </div>
        <div class="social-site">
          <a href="#">
            <div class="icon"><i class="fab fa-facebook-f"></i></div>
          </a>
          <a href="#">
            <div class="icon"><i class="fab fa-twitter"></i></div>
          </a>
          <a href="#">
            <div class="icon"><i class="fab fa-linkedin-in"></i></div>
          </a>
          <a href="#">
            <div class="icon"><i class="fab fa-pinterest-p"></i></div>
          </a>
          <a href="#">
            <div class="icon"><i class="fab fa-google-plus-g"></i></div>
          </a>
        </div>
      </div>
    </div>
  </footer>
</div>

<script src="js/catalog.js"></script>
<script>
  (function ($) {
    $(function () {
     catalog.init();
     cart.init();
    })
  })
  (jQuery);
</script>
</body>

</html>