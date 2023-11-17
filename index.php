<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <title>Plant Shop</title>

</head>

<body>
  <div class="wrapper">
    <!-- Header -->
    <section class="header_wrapper">
      <div class="header">
        <div class="navbar">
          <div class="navbar__logo"><a href="/">GROW</a></div>
          <ul class="navbar__list">
            <li class="navbar__list--item">
              <a href="/">Home</a>
            </li>
            <li class="navbar__list--item">
              <a href="/shop">Shop</a>
              <ul class="navbar__list--item-sub">
                <li class="navbar__item--sub"><a href="">Cactus</a></li>
                <li class="navbar__item--sub"><a href="">Succulent</a></li>
                <li class="navbar__item--sub"><a href="">Indoor Plants</a></li>
                <li class="navbar__item--sub"><a href="">Bonsai</a></li>
              </ul>
            </li>
            <li class="navbar__list--item">
              <a href="/">About US</a>
            </li>
            <li class="navbar__list--item">
              <a href="/">Testimonial</a>
            </li>
            <li class="navbar__list--item">
              <a href="/giohang" id="btn__show--cart" class="show__cart">
                <img src="icon/cart.png" alt="car" class="navbar__cart--icon">
              </a>
            </li>
          </ul>
        </div>

      </div>
      <div class="modal__cart" id="myModal">
        <div class="modal__content">
          <div class="modal__cart-header">
            <h4>Shopping Cart</h4>
            <p id="close_modal">X</p>
          </div>
          <div class="border-bottom"></div>
          <div class="modal__cart-content">
            <div class="cart__item-left">
              <img src="images/rubber.jpg" alt="Rubber">
              <div class="cart__item--infor">
                <p class="cart__item--title">Rubber indoor plant</p>
                <div class="cart__item--quantity">
                  <img src="icon/minus.png" alt="">
                  <p>1</p>
                  <img src="icon/plus.png" alt="">
                </div>
              </div>
            </div>
            <div class="cart__item-right">
              <p class="cart__remove">X</p>
              <p class="item-price">$45.00</p>
            </div>
          </div>
          <div class="border-bottom"></div>
          <div class="modal__cart-content">
            <div class="cart__item-left">
              <img src="images/rubber.jpg" alt="Rubber">
              <div class="cart__item--infor">
                <p class="cart__item--title">Rubber indoor plant</p>
                <div class="cart__item--quantity">
                  <img src="icon/minus.png" alt="">
                  <p>1</p>
                  <img src="icon/plus.png" alt="">
                </div>
              </div>
            </div>
            <div class="cart__item-right">
              <p class="cart__remove">X</p>
              <p class="item-price">$45.00</p>
            </div>
          </div>
          <div class="border-bottom"></div>
          <div class="modal__cart-content">
            <div class="cart__item-left">
              <img src="images/rubber.jpg" alt="Rubber">
              <div class="cart__item--infor">
                <p class="cart__item--title">Rubber indoor plant</p>
                <div class="cart__item--quantity">
                  <img src="icon/minus.png" alt="">
                  <p>1</p>
                  <img src="icon/plus.png" alt="">
                </div>
              </div>
            </div>
            <div class="cart__item-right">
              <p class="cart__remove">X</p>
              <p class="item-price">$45.00</p>
            </div>
          </div>
          <div class="modal__cart--footer">
            <div class="border-bottom"></div>
            <div class="total__price">
              <p>Subtotal:</p>
              <p class="subtotal__price">$239.00</p>
            </div>
            <button class="btn-shop btn-cart">View Cart</button>
            <button class="btn-shop btn-cart">Checkout</button>
          </div>
        </div>
      </div>
      <div class="slogan">
        <h4>The Boutique Store For Plants!</h4>
        <span>
          Everything Is Better<br />With Plants
        </span>
        <button class="btn-shop">Shop Now</button>
      </div>
    </section>
    <!-- Main -->
    <section class="main">
      <div class="main_seedling">
        <div class="main_service">
          <div class="wrap-img">
            <img class="sprout-img" src="icon/sprout.png" alt="sprout">
          </div>
          <div class="wrap-text">
            <h3>High Quality Plants</h3>
            <p>A line about the service you've mentioned above.</p>
          </div>
        </div>
        <div class="main_service">
          <div class="wrap-img">
            <img class="sprout-img" src="icon/sprout.png" alt="sprout">
          </div>
          <div class="wrap-text">
            <h3>High Quality Plants</h3>
            <p>A line about the service you've mentioned above.</p>
          </div>
        </div>
        <div class="main_service">
          <div class="wrap-img">
            <img class="sprout-img" src="icon/trophy.png" alt="sprout">
          </div>
          <div class="wrap-text">
            <h3>High Quality Plants</h3>
            <p>A line about the service you've mentioned above.</p>
          </div>
        </div>
        <div class="main_service">
          <div class="wrap-img">
            <img class="sprout-img" src="icon/fast-delivery.png" alt="sprout">
          </div>
          <div class="wrap-text">
            <h3>High Quality Plants</h3>
            <p>A line about the service you've mentioned above.</p>
          </div>
        </div>
      </div>
      <!-- Product -->
      <div class="product">
        <div class="product-plants">
          <a href="">
            <img src="images/cactus.jpg" alt="" class="plants-img">
          </a>
          <div class="product-plants-title">
            <a href="/">Cactus</a>
            <img src="icon/right-arrow.png" alt="">
          </div>
        </div>
        <div class="product-plants">
          <a href="">
            <img src="images/bonsai.jpg" alt="" class="plants-img">
          </a>
          <div class="product-plants-title">
            <a href="/">Bonsai</a>
            <img src="icon/right-arrow.png" alt="">
          </div>
        </div>
        <div class="product-plants">
          <a href="">
            <img src="images/succulent.jpg" alt="" class="plants-img">
          </a>
          <div class="product-plants-title">
            <a href="/">Succulent</a>
            <img src="icon/right-arrow.png" alt="">
          </div>
        </div>
        <div class="product-plants">
          <a href="">
            <img src="images/indoor-plant.jpg" alt="" class="plants-img">
          </a>
          <div class="product-plants-title">
            <a href="/">Indoor Plants</a>
            <img src="icon/right-arrow.png" alt="">
          </div>
        </div>
      </div>
      <!-- All Plants -->
      <div class="product__all-plants">
        <div class="all__plants-header">
          <div class="all__plants-text">
            <h2>Featured Products</h2>
            <p>Use these paragraphs to focus on the topic in the headline. Make sure you keep it short and attractive.
            </p>
          </div>
          <button class="btn-shop">View All Plants</button>
        </div>
        <div class="plants">
          <div class="plants-card">
            <a href="/">
              <img src="images/bonsai.jpg" alt="bonsai">
            </a>
            <a class="plant-tittle">Lemon bonsai</a>
            <p class="plant-star">******</p>
            <p class="plant-price">$99.00</p>
          </div>
          <div class="plants-card">
            <a href="/">
              <img src="images/Boncellensis-Secullant.jpg" alt="bonsai">
            </a>
            <a class="plant-tittle">Boncellensis Secullant</a>
            <p class="plant-star">******</p>
            <p class="plant-price">$99.00</p>
          </div>
          <div class="plants-card">
            <a href="/">
              <img src="images/rubber.jpg" alt="bonsai">
            </a>
            <a class="plant-tittle">Rubber Indoor Plant</a>
            <p class="plant-star">******</p>
            <p class="plant-price">$99.00</p>
          </div>
          <div class="plants-card">
            <a href="/">
              <img src="images/Old-Lady-Cactus.jpg" alt="bonsai">
            </a>
            <a class="plant-tittle">Old Lady Cactus</a>
            <p class="plant-star">******</p>
            <p class="plant-price">$99.00</p>
          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      <p class="footer_copyright">Copyright bt Nguyen The Anh developer 2023</p>
    </section>
  </div>
  <script src="js/modalCart.js"></script>
</body>

</html>