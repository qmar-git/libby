<!DOCTYPE html>
<html>

<head>

  <script language="javascript" type="text/javascript">
    function preventBack() {
      window.history.forward()
    };
    setTimeout("preventBack()", 0);
    window.onunload = function() {
      null;
    }
  </script>
  <title>LIBBY</title>
  <link rel="stylesheet" type="text/css" href="/03.css">
  <link rel="stylesheet" href="homepage-design.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
<!-- NAVBAR  -->
<nav class="navbar">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="My-project-2.png" alt="Bootstrap" width="200px" height="">
    </a>
  </div>
</nav>

  <section>
    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
  </section>
  <header>
    <!-- <nav>
        <ul>
          <li><a href="#">About</a></li>
        </ul>
      </nav> -->
  </header>
  <div class="container-fluid">
    <div class="container text-center">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="image">
            <img src="library-animate.svg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="content">
            <h1>Welcome To LIBBY</h1>
            <h3>Expose Your Shelf To Something New</h3>
            <h4 class="mt-5">Searching For Books ??</h4>
            <button type="button" class="btn btn-outline-info">Search Books</button>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>