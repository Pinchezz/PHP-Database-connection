<?php 
$response='';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Bootstrap2-main/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <title>Zalego Login</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
 <!-- nav bar -->
     navigation bar 
    <nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Zalego Academy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="/aboutus.php">About Us</a>
              <a class="btn btn-primary" class="nav-link"  href="/process.php">Register Now  </a>
            </div>
          </div>
        </div>
      </nav>
 

     <!-- end of navigation nav -->
    <a class="toggle-btn"><i class="fa fa-bars"></i></a>
    


    <main class=" p-5 nb-4 bg-light">
        <h1>Welcome, Peter Mbuthia</h1>
        <p>Lorem ipsum dolor sit Mollitia at  voluptatum dolor maiores? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, odio.</p>
     </main>
     <br>
     <br>
     <br>
     
     <!-- Contact us page -->
     <div class="row pt-5" name="contact">
         <h1>Contact us</h1>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci hic in ab qui cum facilis suscipit? Omnis, corporis dolorum sunt vitae expedita minima aperiam, eius deserunt eos modi voluptates blanditiis.</p>
       <form action="index.php" method="POST">
        <?php echo $response ?>
         <div class="row">
           <div class="mb-3 col-lg-6"></div>
           <label for="first-name" class="form-label">First Name</label>
           <input type="text" name="firstName" class="form-control" placeholder="Enter Your First Name">
         </div>


         <div class="mb-3 col-lg-6">
          <label for="last-name" class="form-label">Last Name</label>
          <input type="text" name="lastName" class="form-control" placeholder="Enter Your Last Name">

         </div>
         <div class="row">
         <div class="mb-3 col-lg-6">
          <label for="Phone-number" class="form-label">Phone Number</label>
          <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone-Number">
         </div>
         </div>
        </div>
      </div>     
        <div class="row">
        <div class="mb-3 col-lg-6">
         <label for="Email Address" class="form-label">Email Address</label>
         <input type="text"  name="email" class="form-control" placeholder="Enter Your Email Address">
        </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <label for="message" class="form-label">Your message</label>
            <textarea cols="30"  name= "message" rows="10" class="form-control"></textarea>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        
        <button type= "submit" name= "submitButton" class="btn btn-primary">Send a Message</button>

       </form>
       
       <!-- end of contact us -->
     


     
        
       
       
       
       <hr>
       <footer>
         &copy;Company 2022
       </footer>
      </div>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>

</body>
</html>