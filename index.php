<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Стартовое представление сайта</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
  <nav>
    <div class="container"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#">Brand</a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a> </li>
          <li><a href="#">Link</a> </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a> </li>
              <li><a href="#">Another action</a> </li>
              <li><a href="#">Something else here</a> </li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a> </li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a> </li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right hidden-sm">
          <li><a href="#">Link</a> </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a> </li>
              <li><a href="#">Another action</a> </li>
              <li><a href="#">Something else here</a> </li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a> </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid --> 
  </nav>
  <div class="container-fluid">
    <div id="carousel1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="images/Headers/Header-1.jpg" alt="First slide image" class="center-block">
          <div class="carousel-caption">
            <h3>First slide Heading</h3>
            <p>First slide Caption</p>
          </div>
        </div>
        <div class="item"><img src="images/Headers/Header-2.jpg" alt="Second slide image" class="center-block">
          <div class="carousel-caption">
            <h3>Second slide Heading</h3>
            <p>Second slide Caption</p>
          </div>
        </div>
        <div class="item"><img src="images/Headers/Header-3.jpg" alt="Third slide image" class="center-block">
          <div class="carousel-caption">
            <h3>Third slide Heading</h3>
            <p>Third slide Caption</p>
          </div>
        </div>
        </div>
      <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
  </div>    
  <hr>  
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <div class="row">
          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Shipping" src="img/40X40.gif"></div>
          <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
            <h4>Иная инфа</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <div class="row">
          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Shipping" src="img/40X40.gif"></div>
          <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
            <h4>Иная инфа</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <div class="row">
          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Shipping" src="img/40X40.gif"></div>
          <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
            <h4>Иная инфа</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<hr>
<section>
  <div class="container">
  <h1 class="text-center">Мы рады приветствовать Вас на нашем сайте. </h1>
  <p>Пришла пора устроить праздник, отметить день рождения, справить свадьбу, корпоративную вечеринку, выпускной вечер, но ещё не выбрали компанию организатора? Не забивайте голову выбором! Для организации яркого, запоминающего праздника у нас есть все услуги:</p>
  <ul>
    <li> прокат лимузинов и автомобилей VIP-класса, </li>
    <li>прокат микроавтобусов, </li>
    <li>фотографы, </li>
    <li>видеографы, </li>
    <li>ведущие </li>
  </ul>
  <p>Мы приедем вовремя и именно на том лимузине, который Вы заказывали.</p>
<h4 class="text-center">  <p>Позвоните сейчас!</p>
  <p>+7-982-911-6062<br>
    +7-982-911-6063
  </p>
  <p>E-mail: <a href="mailto:limtyumen@example.com">limtyumen@example.com</a></p>
</h4>
  </div>
</section>
<hr>
<section>
  <h2 class="text-center"><a href="Car-Rent.php">Аренда автомобилей</a></h2>
  <hr>
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="images/Cars/Thumbnail/Chrysler-Sebring-2.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Заказать</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="images/Cars/Thumbnail/Líncoln-w-1.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Заказать</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="images/Cars/Thumbnail/Chrysler-300C-b-1.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Заказать</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6 hidden-lg hidden-md hidden-sm">
        <div class="thumbnail"> <img src="images/Cars/Thumbnail/Chrysler-300C-w-1.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Заказать</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center hidden-xs">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail"> <img src="images/Cars/Thumbnail/Chrysler-300C-b-2.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Заказать</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail"> <img src="images/Cars/Thumbnail/Range-Rover-1.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Заказать</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail"> <img src="images/Cars/Thumbnail/Porsche-BMW-1.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Заказать</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<section>
  <h2 class="text-center"><a href="Photographers-Service.php">Услуги фотографа</a></h2>
  <hr>
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="images/Photographers-Service/Thumbnail/Photographers-Service-7.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
  </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="images/Photographers-Service/Thumbnail/Photographers-Service-3.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
  </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="images/Photographers-Service/Thumbnail/Photographers-Service-4.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
  </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6 hidden-lg hidden-md hidden-sm">
        <div class="thumbnail"> <img src="images/Photographers-Service/Thumbnail/Photographers-Service-2.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
  </div>
        </div>
      </div>
    </div>
    <div class="row text-center hidden-xs">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail"> <img src="images/Photographers-Service/Thumbnail/Photographers-Service-5.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
  </div>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail"> <img src="images/Photographers-Service/Thumbnail/Photographers-Service.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
  </div>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail"> <img src="images/Photographers-Service/Thumbnail/Photographers-Service-6.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<section>
  <h2 class="text-center"><a href="Videographer-Services.php">Услуги видеографа</a></h2>
  <hr>
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6 hidden-lg hidden-md hidden-sm">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center hidden-xs">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<section>
  <h2 class="text-center"><a href="Wedding-leading-services.php">Услуги ведущего</a></h2>
  <hr>
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6 hidden-lg hidden-md hidden-sm">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center hidden-xs">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3>Product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>
<hr>
<section>
  <div class="container">
    <p>Компания Лимузин-Тюмень72 на протяжении многих лет радует своих клиентов качественной работой, новыми автомобилями, ухоженными салонами и конечно же приятными ценами. </p>
  </div>
</section>
<hr>
<section>
  <h2 class="text-center">"В контакте" о нас говорят</h2>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="media-object-default">
          <div class="media">
            <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"> </a> </div>
            <div class="media-body">
              <h4 class="media-heading">Product</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, vitae doloremque voluptatum doloribus neque assumenda velit sapiente quas aliquam ratione. Sed possimus corporis dolorum optio eaque in asperiores soluta expedita! </div>
          </div>
          <div class="media">
            <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"> </a> </div>
            <div class="media-body">
              <h4 class="media-heading">Product</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, quasi doloribus non repellendus quae aperiam. Quos, eligendi itaque soluta ut dignissimos reprehenderit commodi laboriosam quis atque minus enim magnam delectus.</div>
          </div>
          <div class="media">
            <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
            <div class="media-body">
              <h4 class="media-heading">Product</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, repellendus, ad, adipisci neque earum culpa magnam veritatis ipsum dolores odio laboriosam sed veniam accusamus! Architecto, provident nulla recusandae repellendus illo!</div>
          </div>
        </div>
      </div>
      <hr class="hidden-md hidden-lg">
      <div class="col-lg-4 col-md-6">
        <div class="media-object-default">
          <div class="media">
            <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
            <div class="media-body">
              <h4 class="media-heading">Product</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, eos, et in quam laboriosam ipsum laudantium laborum provident nihil modi reprehenderit tempora voluptatum quasi non libero quaerat vel. Assumenda, officiis?</div>
          </div>
          <div class="media">
            <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
            <div class="media-body">
              <h4 class="media-heading">Product</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, minus, praesentium dignissimos non provident et consectetur illo expedita aliquam laboriosam esse incidunt deleniti accusantium debitis voluptas. Non vitae quos dolorem.</div>
          </div>
          <div class="media">
            <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
            <div class="media-body">
              <h4 class="media-heading">Product</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, ducimus quidem aliquam voluptate quas impedit modi neque quasi deleniti dicta. Dolore, provident, unde voluptas dicta fugit odit maxime eius minus!</div>
          </div>
        </div>
      </div>
      <hr class="hidden-lg">
      <div class="col-lg-4 col-md-12 hidden-md">
        <div class="media-object-default">
          <div class="media">
            <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
            <div class="media-body">
              <h4 class="media-heading">Media heading 1</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro dolorum reprehenderit vitae omnis. Quidem, recusandae, magni ut perspiciatis nobis consequuntur ullam molestias molestiae obcaecati ea labore aspernatur modi. Impedit, fugit!</div>
          </div>
          <div class="media">
            <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
            <div class="media-body">
              <h4 class="media-heading">Media heading 2</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, libero, ea itaque atque vero quidem esse optio minus tenetur dolorem delectus nemo fugit deserunt quibusdam veritatis assumenda obcaecati praesentium omnis!</div>
          </div>
          <div class="media">
            <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
            <div class="media-body">
              <h4 class="media-heading">Media heading 2</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, cumque, ad voluptatibus vel perspiciatis reprehenderit magni in recusandae voluptatum iusto commodi laudantium veritatis esse labore nisi error tempora debitis impedit.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<div class="container well">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7">
        <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
            <div>
              <ul class="list-unstyled">
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4  col-xs-6">
            <div>
              <ul class="list-unstyled">
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
            <div>
              <ul class="list-unstyled">
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5">
        <address>
        <strong>Лимузин-Тюмень72</strong><br>
Тюмень, Тюменская область<br>
+7-982-911-6062<br>
+7-982-911-6063
        </address>
        <address>
        <strong>E-mail</strong><br>
        <a href="mailto:limtyumen@example.com ">limtyumen@example.com </a>
        </address>
      </div>
    </div>
  </div>

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Limusin-Tyumen72. All rights reserved.</p>
        <p>Powered by <a href="mailto:stoneagat@rambler.ru">StoneAgate</a></p>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery-1.11.2.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>