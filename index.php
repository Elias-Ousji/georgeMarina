<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">

  <title>Test website</title>

</head>

<body>
  <!-- BEGIN NAVIGATIE -->
  <header>
    <div class="container">
      <div class= "top-header"> 
        <div class=top-header-container>
        <a class="corona" href="https://www.george.amsterdam/" target="_blank">CLICK HERE FOR THE LATEST COVID-19
        UPDATES</a>
        <div class="container">
          <div class="icons">
           <div class="icons-container">  
        <a href="">
        <img alt="" src="./images/bag.jpg" width="75" height="75">
          </div>
          </div>
        </div>
      </div>
      </div>
      <div class="line">
      <br>
      <br>
      <div class="nav">
      
      </div>
        <div class="logo">
          <p>George</p>
        </div>
        <div class="links">
          <ul>
            <li> <a href="#Home">Home</a> </li>
            <li> <a href="#About">About</a> </li>
            <li> <a href="#Menu">Menu</a> </li>
            <li> <a href="#Order">Reservation</a> </li>
            <li> <a href="#Contact">Contact</a> </li>
            <li> <a href="#Bestellen">Order</a> </li>
          </ul>
        </div>
      </div>
      <div class="line"></div>
      <div class="line" style="margin-top: 100px;"></div>
  </header>
  <!-- EINDE NAVIGATIE -->

  <!-- BEGIN TOP-SECTIE -->
  <section class="home" id="Home">
    <div class="text">
      <h1>George has it all</h1>
      From that local neighbourhood spot where everybody knows your name to a light-filled, eclectic restaurant with
      view on the Amstel river: George has it all.
      Serving you iconic dishes and timeless classics with New York, Paris, the Côte d'Azur and Hong Kong in mind, along
      with local ingredients, freshly roasted coffee and signature cocktails, our restaurants are open all day, every
      day – so come join us for an early morning espresso,
      a lazy Sunday brunch or an intimate dinner with friends in a relaxed, elegant atmosphere.
    </div>
    <img class="home-image" src="./images/home-image.jpg" alt="home-image">
  </section>
  <div class="line" style="width: 1250px; margin-left: 130px;"></div>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/carousel1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./images/carousel2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./images/carousel1.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <div class="line" style="width: 1250px; margin-left: 130px;"></div>
  <!-- EINDE TOP-SECTIE -->

  <!-- BEGIN OVER-ONS -->
  <div class="about" id="About">
    <h1>About us</h1>
    <div class="about-box">
      <a href="http://restaurantgeorge.com" target="_blank" rel="noopener noreferrer"></a>
      <p>email:</p>
      <p>location:</p>
      <img src="./images/carousel1.jpg" alt="...">
    </div>

  </div>
  <div class="line" style="width: 1250px; margin-left: 130px;"></div>
  <!-- EINDE OVER-ONS -->

  <!-- BEGIN MENU -->
  <div class="menu" id="Menu">
    <h1>Menu</h1>
    <h6>Appetizer | Sandwhiches | Meat | Fish | Salads | Desserts | Drinks</h3>
      <div class="menu-box">
        <div class="gerecht">
          <img src="./images/carousel1.jpg" alt="...">
          <p>Dish 1 </p>
          <p>€ 10,-</p>
          <div class="gerecht">
            <img src="./images/carousel1.jpg" alt="...">
            <p>Dish 1 </p>
            <p>€ 10,-</p>
          </div>
        </div>
      </div>
      <div class="line" style="margin-bottom: 0;"></div>
      <div class="menu-box">
        <div class="gerecht">
          <img src="./images/carousel1.jpg" alt="...">
          <p>Dish 1 </p>
          <p>€ 10,-</p>
          <div class="gerecht">
            <img src="./images/carousel1.jpg" alt="...">
            <p>Dish 1 </p>
            <p>€ 10,-</p>
          </div>
        </div>
      </div>
      <div class="line" style="margin-bottom: 0;"></div>
      <div class="menu-box">
        <div class="gerecht">
          <img src="./images/carousel1.jpg" alt="...">
          <p>Dish 1 </p>
          <p>€ 10,-</p>
          <div class="gerecht">
            <img src="./images/carousel1.jpg" alt="...">
            <p>Dish 1 </p>
            <p>€ 10,-</p>
          </div>
        </div>
      </div>
      <div class="line"></div>
      <!-- EINDE MENU -->

      <!-- BEGIN RESERVEREN -->
      <div class="reserveren" id="Order">
        <h1>Reservations</h1>
        <div class="reserveren-outer-box">
          <div class="reserveren-box">
            <p>name:</p>
            <p>email:</p>
            <p>Phone-number:</p>
            <p>persons:</p>
          </div>
           <?php include './includes/date.php';?>
           <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Choose time
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">12:00</a></li>
    <li><a class="dropdown-item" href="#">12:30</a></li>
    <li><a class="dropdown-item" href="#">13:00</a></li>
  </ul>
    </div>         
          <div class="container">
          <div class="reserveren-box">
            <img src="./images/carousel1.jpg" alt="...">
          </div>
        </div>
        <div class="line"></div>
        </div>
        <div class="line"></div>
      </div>
      <!-- EINDE RESERVEREN -->

      <!-- EINDE CONTACT  -->
      <div class="contact" id="Contact">
        <h1>Contact</h1>
        <div class="contact-text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius atque dolor, saepe ipsam, ex,
            exercitationem similique magni quibusdam officiis accusamus incidunt rem labore libero vel. 
            Minima ipsam consectetur molestias aspernatur.</p>
            <div class="forum">
              <p>name:</p>
              <p>email:</p>
              <p>message:</p>
            </div>
        </div>
        <div class="line"></div>
      </div>
      <!-- EINDE CONTACT  -->

      <!-- BEGIN BESTELLEN  -->
      <div class="bestellen" id="Bestellen">
        <h1>Order</h1>
        <div class="bestellen-box">
         <div class="bestellen-forum">
          <p>name:</p>
          <p>email:</p>
          <p>Phone number:</p>
          <p>take-away/delivery:</p>
          <p>time:</p>
        </div> 
        <div class="bestellen-text">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis nemo maiores repellendus dolores similique nostrum ea tempore ipsam eum
             necessitatibus aliquam deleniti blanditiis ipsum, beatae aut, voluptate facilis ad dolore dolor! Reiciendis tempore optio voluptatibus, officiis,
             laboriosam ipsam esse neque, cum impedit earum delectus nemo dignissimos voluptatum repellat. 
             Fugit, officia? Eius odio veniam tempora culpa eos iste non facere itaque.</p>
        </div>
       
        </div>     
      </div>
      <!-- EINDE BESTELLEN  -->



      <!-- BEGIN FOOTER -->
      <footer>
        <div class="footer-info">

        </div>
      </footer>
      <!-- EINDE FOOTER -->
  </div>


  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>

</body>

</html>