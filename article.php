<?php
include("header.html");
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
    <div class="article-hero">
        <div class="article-text position-relative">
          <h1 class="display-1">Blog</h1>
          <p class="mb-5 fs-4">Explore Edifying Articles</p>
          <form class="d-flex position-absolute translate-middle start-50" role="search">
                <input class="form-control" type="search" placeholder="Search resources .." aria-label="Search" style="width: 60vh;">
                <button class="button bg-black text-white ms-2 px-4" type="submit" >Search</button>
              </form>
       </div>
    </div>
    <h1 class="bg text-dark my-5 text-center display-4 sudo position-relative">Articles</h1>
    <div class="container my-5">
<div class="row">
    <div class="col">
    <div class="card h-100">
        <img src="/assets/images/resource 1.png" class="img-fluid p-4">
        <div class="card-body">
            <div class="card-title ps-4">
                <h2>This Thing Called Dating.</h2>
                <div class="card-text">
                    <p class="fs-4 p-2">Most of you will get into a dating relationship hoping it will last. But this does not happen always.
                         In any case, these relationships don’t last a term, or a year at their best. And generally, most Christian 
                         young people proceed through a number of
                        
                    serial romances before their marriage. This kind o...</p>
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
        <img src="/assets/images/article_our_father.png" class="img-fluid p-4">
        <div class="card-body">
            <div class="card-title">
                  <h2>Our Father Who Art in Nairobi</h2>
                <div class="card-text">
                <p class="fs-4 p-2">Early Childhood “Our father who art in Nairobi, remember us this month.” I remember 
                    making that sacrilegious sounding ‘prayer’ when I was a nine-year-old boy. My dad who
                     lived in Nairobi then had not showed up home for two years. Usually,
                     he would visit us once a year for half a day! What would ....</p>
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
        <img src="/assets/images/article_youth_ministry.png" class="img-fluid p-4">
        <div class="card-body">
            <h2  class="card-title">Rethinking Youth Ministry</h2>
                <p  class="card-text fs-4 p-2">The Myth of Adolescence Diana West in her book The Death of
                     the Grown Up rightfully argues that adolescence didn’t always exist. In fact, 
                     she says, it is a quite recent phenomenon. The word “teenager” wasn’t really used until 1941.
                     Today, of course, adolescence is considered a fixed stage of develo...</p>
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
include("footer.html");
?>