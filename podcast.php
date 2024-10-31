<?php
include("header.html")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timazi Africa</title>
    <!-- cdn boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <!-- custom css link -->
    <link rel="stylesheet" href="/assets/css/styles.css" type="text/css">
    <!-- favicon link -->
    <link rel="icon" href="https://newsite.timazi.org/wp-content/uploads/2024/08/cropped-Timazi-Favicon-32x32.png" sizes="32x32">
    <!-- font awsome lik -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="podcast-hero">
        <div class="podcast-text position-relative">
          <h1 class="display-1">Timazi Podcasts</h1>
          <p class="mb-5 fs-4">Explore Edifying Podcast</p>
          <form class="d-flex position-absolute translate-middle start-50" role="search">
                <input class="form-control" type="search" placeholder="Search resources .." aria-label="Search" style="width: 60vh;">
                <button class="button bg-black text-white ms-2 px-4" type="submit" >Search</button>
              </form>
       </div>
    </div>
    <h1 class="bg text-dark my-5 text-center display-4 sudo position-relative">Podcasts</h1>

<div class="container my-5">
<div class="card my-5" style="width:auto">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/assets//images/resource 2.png" class="img-fluid p-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title  mt-4 fs-2"><i class="fa fa-play-circle-o me-3 fs-2"></i>The Story of Timazi</h4>
        <p class="card-text pt-3 fs-5 lh-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et iure esse soluta delectus nesciunt
             molestiae quod consequatur? Quam, optio possimus?...</p>
             <p class="card-text"><small">May 22, 2024</small></p>
             <a href="" class="card-link fs-5">Go to podcast<i class="fa fa-arrow-circle-right ps-3 text-black fs-4 "></i> </a>
      </div>
    </div>
  </div>
</div>
<div class="card my-5">
    <div class="row">
        <div class="col-md-4">
            <img src="/assets//images/podcast-in-search-of-sanity-musinginzi.png" class="img-fluid p-3">
        </div>
        <div class="col-md-8">
          <div class="card-body">
          <h4 class="card-title mt-4  fs-2"><i class="fa fa-play-circle-o me-3 fs-2"></i>In Search of Sanity – Musingizi’s Story</h4>
          <p class="card-text pt-3 fs-5 lh-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut a...</p>
            <p class="card-text"><small>May 15, 2024</small></p>
            <a href="" class="card-link fs-5">Go to podcast<i class="fa fa-arrow-circle-right ps-3 text-black fs-4 "></i> </a>

          </div>
        </div>
    </div>
</div>
<div class="card my-5">
    <div class="row">
        <div class="col-md-4">
            <img src="/assets//images/podcast_Godly_generation.png"   class="img-fluid p-3">
        </div>
        <div class="col-md-8">
          <div class="card-body">
          <h4 class="card-title mt-4 fs-2"><i class="fa fa-play-circle-o me-3 fs-2"></i>Establishing a Godly Generation</h4>
          <p class="card-text pt-3 fs-5 lh-lg">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum...</p>
          <p class="card-text"><small>May 14, 2024</small></p>
          <a href="" class="card-link fs-5">Go to podcast<i class="fa fa-arrow-circle-right ps-3 text-black fs-4 "></i> </a>

          </div>
        </div>
    </div>
</div>
</div>
    <?php
    include("reuse.html");
    
    ?>


</body>
</html>
<?php
include("footer.html");
?>