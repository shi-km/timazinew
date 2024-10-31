

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
    <div class="video-hero ">
       <div class="video-text position-relative">
          <h1 class="display-1">Timazi Videos</h1>
          <p class="mb-5 fs-4">Explore Edifying Videos</p>
          <form class="d-flex position-absolute translate-middle start-50" role="search">
                <input class="form-control" type="search" placeholder="Search resources .." aria-label="Search" style="width: 60vh;">
                <button class="button bg-black text-white ms-2 px-4" type="submit" >Search</button>
              </form>
       </div>
    </div>
    <h1 class="text-center my-5 display-4 sudo position-relative">Videos</h1>
<div class="container my-5">
<div class="row">
    <div class="col">
    <div class="card h-100">
        <img src="/assets/images/video-Christ-versus-tribal-gods.png" class="img-fluid p-4">
        <div class="card-body">
            <div class="card-title ps-4">
                <h2>Christ vs Tribal gods</h2>
                <div class="card-text">
                    <p class="card-text lh-lg fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, modi vero possimus nostrum qui...</p>
                </div>
                <div class="card-link">
                <a href="" class="card-link fs-5">Go to Video<i class="fa fa-arrow-circle-right ps-3 text-black fs-4 "></i> </a>
        </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col">
    <div class="card h-100">
        <img src="/assets/images/video-battle-for-this-generation.png" class="img-fluid p-4">
        <div class="card-body">
            <div class="card-title">
                  <h2>The Battle For This Generation</h2>
                <div class="card-text">
                <p class="card-text lh-lg fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, modi vero possimus nostrum qui...</p>
                </div>
                <div class="card-link">
                <a href="" class="card-link fs-5">Go to Video<i class="fa fa-arrow-circle-right ps-3 text-black fs-4 "></i> </a>
        </div>
            </div>
        </div>
    </div>
    </div>  
    <div class="col">
    <div class="card h-100">
        <img src="/assets/images/video-the-mystery-of-inclusion-of-gentiles.png" class="img-fluid p-4">
        <div class="card-body">
            <h2  class="card-title">The Mystery of The Inclusion of Gentiles</h2>
                <p  class="card-text lh-lg fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, modi vero possimus nostrum qui...</p>
                <a href="" class="card-link fs-5">Go to Video<i class="fa fa-arrow-circle-right ps-3 text-black fs-4 "></i> </a>
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
include("footer.html")
?>