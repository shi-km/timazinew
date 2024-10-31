
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
    

    <!-- contact hero section-->


     <div class="hero position-relative">
      <div class="hero-text text-center text-white position-absolute bottom-0 start-50 translate-middle ">
        <h1 class="display-1">Talk To Us</h1>
        <p class="fs-4">Send us a message and we will get back to you.</p>
        
      </div>
</div>

     <!-- contact hero end -->

    <!-- contact information section -->
     <div class="container my-4">
      <h1 class="display-5 text-center my-5 sudo position-relative">Contact us</h1>
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="p-2 contact h-100 ">
            <h3 class="contact-title text-center p-3">Contact Information</h3>
            <ul class="list-unstyled p-5 lh-lg fs-5">
              <li class="">Give us a call or send us an email & a team member will be in touch.</li>
              <li> <i class="fa fa-map-marker p-2 text-black"></i>Nairobi, Kenya</li>
              <li><i class="fa fa-mobile p-2 text-black"></i>+254726117986/+254705182141</li>
              <li><i class="fa fa-envelope p-2 text-black"></i>info@timazi.org</li>
              <li><i class="fa fa-envelope p-2 text-black" ></i>P. O. Box 1804-00902 Kikuyu</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 mb-3">
         <div class="p-2 contact">
          <h3 class="contact-title  text-center p-3 ">Send a Message</h3>
          <form class="p-5">
            <label class="form-label" for="name">Name</label>
            <input  class="form-control form-control-md mb-3" type="text" id="name" name="name" placeholder="" required>
            <label class="form-label" for="email">Email</label>
            <input class="form-control form-control-md mb-3" id="email" type="email" name="email" placeholder="" required >
            <label class="form-label" for="phone">Telephone No</label>
            <input class="form-control form-control-md mb-3"  type="tel" id="phone" name="phone" placeholder="" required>
            <label class="form-label" for="text">Message</label>
            <input class="form-control form-control-md mb-2" style="height:14vh;" type="text" id="text"  name="text" placeholder="" required><br>
            <button type="submit" class="button px-3">Submit</button>
          </form>
         </div>
        </div>
      </div>
     </div>
       
</body>
</html>
<?php
include("footer.html")
?>