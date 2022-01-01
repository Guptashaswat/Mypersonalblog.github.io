<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">My Personal blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form.php">Contact us</a>
      </li>
    
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"> Contact us</h2>
</div>
<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control">
</div>
<div class="form-group">
      <label>Email-id</label>
      <input type="text" name="email" autocomplete="off" class="form-control">
</div>
<div class="form-group">
      <label>Mobile</label>
      <input type="text" name="mobile" autocomplete="off" class="form-control">
</div>
<div class="form-group">
      <label>comments</label>
     <textarea class="form-control" name="comments">
</textarea>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
<footer>
  <h3 class="p-3 bg-dark text-white text-centre">@Shaswatgupta</h3>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 10px;
    font-size: 20px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    margin: 1px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
</style>

<!-- Add font awesome icons -->
<a href="https://www.facebook.com/shaswat.gupta.963" class="fa fa-facebook"></a>
<a href="https://www.facebook.com/shaswat.gupta.963" class="fa fa-twitter"></a>
<a href="https://www.google.com/search?q=SHASWAT+GUPTA&sxsrf=AOaemvKsWLzcZIOn5GROedoAXc-M1l7wZA%3A1640507061647&ei=tSbIYY_nJqycseMPjKKf8AU&ved=0ahUKEwjPlaSFhYH1AhUsTmwGHQzRB14Q4dUDCA4&uact=5&oq=SHASWAT+GUPTA&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyBAguEAoyBAgAEAoyBQgAEIAEMgQIABAKMgQIABAKMgQIABAKMgQIABAKMgQIABAKOgcIABBHELADSgQIQRgASgQIRhgAUP8GWP8GYN4QaAFwAXgAgAHWA4gB1gOSAQM0LTGYAQCgAQHIAQXAAQE&sclient=gws-wiz" class="fa fa-google"></a>
</footer>
</body>
</div>
</section>
</html>