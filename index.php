 <?php
include("header.php");
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
  
   
  <!-- hero section -->
  <div id="carouselAutoplaying" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-indicators text-warning">
      <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image:linear-gradient(to top, rgba(0, 0, 0, 0.8),
       rgba(0, 0, 0, 0)), url(/assets/images/backgroung.png);
       height:calc(100vh - 105px); background-position: center; background-size: cover;" >
        <div class="carousel-caption">
         <h1 class="display-1">Timazi Africa</h1>
    <p class="fs-4">Timazi Africa is a non-denominational ministry that proclaims the Gospel of Jesus Christ to the High school
       student in Africa to know Him, love Him and live for Him.
    </p>
    <a href="bible.html" class="card-link start-50 hero-link">Learn More</a>
        </div>
      </div>
      <div class="carousel-item"  style="background-image:linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0)), url(/assets/images/bible-reading-program.png); 
      height:calc(100vh - 105px); background-position: center;background-size: cover;">
        <div class="carousel-caption ">
        <h5 class="display-3">Bible Reading Program</h5>
    <p class="fs-4">The Timazi Bible Reading Program is designed to help teenagers, young adults and families read the
      Bible consistently and develop a lifetime habit of daily Bible reading.</p>

        </div>
      </div>
      <div class="carousel-item" style="background-image:linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0)), url(/assets/images/magazinees.jpg); 
      height:calc(100vh - 105px); background-position: center; background-size: cover;">
        <div class="carousel-caption ">
          <h5 class="display-3">Latest Magazine</h5>

          <p class="fs-4">The magazine is written as a discipleship tool to respond to pop culture with the Gospel 
            of Jesus Christ and challenge high school students
             to boldly articulate their faith, love it, live it, and defend it.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero end -->

       <!-- our programs -->
     
       <div class="container my-5">
        <h1 class="text-center my-5 display-4 sudo position-relative">Our Programs</h1>
        <div class="row">
          <div class="col-lg-4 col-sm-12 col-md-4 mb-3 ">
            <div class="card h-100 ">
              <img src="/assets/images/Timazi-Magazines.jpg" class="img-fluid">
            <div class="card-body  text-center  position-relative">
              <h5 class="card-title">Timazi Magazine</h5>
              <p class="card-text  mb-5  fs-5">Exists to TRAIN the Christian High School Student to think and act from a biblical worldview</p>
           <div class="text-center">
            <button type="button" class="button position-absolute  translate-middle bottom-0 text-black">Learn more<i class='fa fa-arrow-right px-3' aria-hidden="true"></i></button>
           </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 col-md-4  position-relative mb-3">
            <div class="card h-100">
              <img src="/assets/images/Timazi-Readership-Challenge.jpg" class="img-fluid">
            <div class="card-body text-center   position-relative">
              <h5 class="card-title">Readership Challenge</h5>
              <p class="card-text mb-5 fs-5" >This is a book reading program designed to build a healthy reading culture among high school students.</p>
           <div class="text-center">
            <button type="button" class="button position-absolute bottom-0 text-black translate-middle">Learn more<i class='fa fa-arrow-right px-3' aria-hidden="true"></i></button>
           </div>
            </div>
            </div>
          </div>
          <div class=" col-lg-4 col-sm-12 col-md-4 mb-3">
            <div class="card h-100 ">
              <img src="/assets/images/Mwalimu-Bora.jpg" class="img-fluid">
            <div class="card-body text-center position-relative">
              <h5 class="card-title">Mwalimu Bora</h5>
              <p class="card-text  mb-5 fs-5">This is the Teacher Formation Program at Timazi Africa.</p>
           <div class="text-center">
            <button type="button" class="button position-absolute bottom-0 text-black translate-middle">Learn more<i class='fa fa-arrow-right px-3' aria-hidden="true"></i></button>
           </div>
            </div>
            </div>
          </div>
        </div>
       </div>
       <!-- programs end -->

   <!-- bible reading -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 ">
          <img src="/assets/images/BRP-minified.jpg" class="img-fluid">
        </div>
        <div class="col-sm-12 col-md-6 mt-5 ps-4">
              <h1 class="display-5 title">Bible Reading Program</h1>
              <p class="fs-5 lh-lg">The Timazi Bible Reading Program is designed to help teenagers, young adults and families read the 
                Bible consistently and develop a lifetime habit of daily Bible reading.</p>
                <button href=""class="button  m-2">Learn More<i class='fa fa-arrow-right px-3' aria-hidden="true"></i></button>
                <button href=""class="button  ">Buy Now<i class='fa fa-arrow-right px-3' aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <!-- end bible reading -->

    <!-- testimonial section -->
    <div class="container-fluid">
      <h1 class="text-center m-5 display-4 sudo position-relative">Testimonials</h1>
      <div id="carouseSlides" class="carousel slide text-center my-5 bg-light" data-bs-ride="carousel"style="height: 400px; width: 100%;">
        <div class="carousel-indicators ">
          <button type="button" data-bs-target="#carouseSlides" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1" ></button>
          <button type="button" data-bs-target="#carouseSlides" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouseSlides" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouseSlides" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
          <figure >
            <blockquote class="blockquote m-5">
            <p>"Timazi has proven to get just the right mix between being very faithful to scripture and relevant to the 
              context and culture of students in Kenyan schools. Using scripture, they boldly, 
              attractively and compellingly engage with contemporary issues affecting students​."</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Rev. Daniel Odhiambo<br><cite title="source title">Diocesan Youth Coordinator, ​ACK Marsabit Diocese​</cite>
            </figcaption>
          </figure>
          </div>
          <div class="carousel-item ">
            <figure >
              <blockquote class="blockquote m-5">
              <p>"You should read Timazi Magazine because it is a Bible-based magazine that deals with emerging/current issues among youth. 
                It is well-researched, and you can use it to learn new information and also correct any doctrinal errors you have learned. 
                It is an all-round magazine that deals with all areas of life."</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                --​Anne WACHIRA<br><cite title="source title">CU Patron, Inooro Girls​</cite>
              </figcaption>
            </figure>
            </div>
            <div class="carousel-item">
              <figure >
                <blockquote class="blockquote m-5">
                <p>"Tempting as it (exam cheating) was, I was challenged to remember the example of the Christian Union members
                   from other schools I read about in the magazine mentioned above. I decided, "I would rather honor God with the ‘C’ I worked for than an ‘A’ that I achieved dishonestly", to paraphrase the words of the student I read about. That has been the standard for me to date. 
                  To work for honest grades, and really, for all-around integrity."</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  -- Lynn<br><cite title="source title">Theology Student, AIU</cite>
                </figcaption>
              </figure>
              </div>
              <div class="carousel-item ">
                <figure >
                  <blockquote class="blockquote m-5">
                  <p>"Timazi has taught me a lot… That I can read the Bible from Genesis to Revelation. 
                    [Previously] I had only read up to Leviticus. "</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                    --Student<br><cite title="source title">High School​</cite>
                  </figcaption>
                </figure>
                </div>
        </div>
      </div>
    <!-- testimonials end -->
  
    <!-- our resources section -->
     <div class="container  my-5">
    <h1 class="bg text-dark my-5 text-center display-4 sudo position-relative"> Latest Resources</h1>
     <div class="row">
      <div class=" col-lg-4 col-sm-12 col-md-4 mb-3">
        <div class="trial"></div>
        <div class="card bg-light">
          <img src="/assets/images/resource 1.png" class="img-fluid">
          <div class="card-body">
            <h5 class="card-tittle text-center fs-3">This Thing Called Dating</h5>
            <p class="card-text  fs-4 p-3">Most of you will get into a dating relationship hoping it will 
              last. But this does not happen always. In any case, these relationships don’t 
              last a term, or a year at their best. And generally, most C...</p>
            <div class="text-center latest">
              <a href="#" class="card-link float-start fs-5">Read Article<i class="fa fa-arrow-circle-right p-3"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class=" col-lg-4 col-sm-12 col-md-4 mb-3">
        <div class="card bg-light h-100">
          <img src="/assets/images/resource 2.png"  class="img-fluid">
          <div class="card-body">
            <h5 class="card-tittle text-center fs-3">The Story of Timazi</h5>
            <p class="card-text  p-3 fs-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et iure esse soluta delectus nesciunt mole...</p>
            <div class="text-center latest">
              <a href="#" class="card-link float-start fs-5">Go to Podcast<i class="fa fa-arrow-circle-right p-3"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class=" col-lg-4 col-sm-12 col-md-4 mb-3">
        <div class="card bg-light h-100">
          <img src="/assets/images/video-Christ-versus-tribal-gods.png"  class="img-fluid">
          <div class="card-body">
            <h5 class="card-tittle text-center fs-3">Christ Versus Tribal gods</h5>
            <p class="card-text fs-4 p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, 
              modi vero possimus nostrum qui...</p>
            <div class="text-center latest">
              <a href="#" class="card-link float-start fs-5">Go To Video<i class="fa fa-arrow-circle-right p-3"></i></a>
            </div>
          </div>
        </div>
      </div>
      
     </div>
    </div>
    <!-- latest resources end -->


    <!-- give section -->
<div  class="bg-black  position-relative text-center">
<p class="p-5 fs-1  text-white" >Join us in placing Gospel resources in the hands of Teenagers across Africa.</p>
<button   type="submit"  class="button mb-5  px-5" >Give<i  
aria-hidden="true"></i></button>

</div>
     <!-- subscription section -->
<div class="subscription position-relative my-5" style="height: 50vh";>
      <div class="container">
        <h1 class="text-center pt-5">Get Resources in Your Inbox</h1>
        <form class="d-flex position-absolute start-50 translate-middle top-50 w-50">
          <input type="email" id="email" placeholder="Email Address" class="form-control ">
          <button type="submit" class="button"> Subscribe</button>
        </form>
       </div>
     </div> 
     <!-- subscription end -->

   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
          
</body>
</html>

<?php
include("footer.php")
?>