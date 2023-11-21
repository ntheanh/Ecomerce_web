<section class="main">
  <?php
  include("./pages/menu.php");
  ?>
  <div class="cart__shop">
    <?php
    include("sidebar/sidebar.php");
    ?>
    <div class="cart__shop--main">
      <?php
      if (isset($_GET['quanly'])) {
        $tam = $_GET['quanly'];
      } else {
        $tam = '';
      }
      if ($tam == 'category') {
        include('main/category.php');
      } elseif ($tam == 'aboutus') {
        include('main/aboutus.php');
      } elseif ($tam == "testimonial") {
        include("main/testimonial.php");
      } else {
        include("main/index.php");
      }
      ?>
    </div>
  </div>

  <!-- main product  -->

  <!-- <div class="main_seedling">
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
  </div> -->

  <!-- Product -->

  <!-- <div class="product">
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
  </div> -->

  <!-- All Plants -->

  <!-- <div class="product__all-plants">
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
      <div class="plants-card">
        <a href="/">
          <img src="images/Old-Lady-Cactus.jpg" alt="bonsai">
        </a>
        <a class="plant-tittle">Old Lady Cactus</a>
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
  </div> -->

</section>