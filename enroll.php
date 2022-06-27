<?php 
$response='';
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn= mysqli_connect($server,$username,$password,$database);
if(isset($_POST['submitButton']))
{//1. Fetch form data
$fullname = $_POST["fullname"];
$phone= $_POST["phone"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$course=$_POST['course'];


  //2. submit form data
  $insertData = mysqli_query($conn, "INSERT INTO
  enrollments(fullname,phone,email,gender,course);
  VALUES('$fullname', '$phone', '$email', '$gender', '$course')");

if($insertData)
{
  $response="data successfully submitted";
}
else{
  $response="Error occurred";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Bootstrap2-main/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
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
<br>
<br>
<br>
     <!-- Contact us page -->
     <div class="row" name="enroll">

       <div class="card"> 
             <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>

                 <form action="enroll.php" method="POST">
                  <?php echo $response ?>
                  <ul>
                    <li>
                        <span><i class="fa fa-calender fa-3x"><i></span>
                        <span>20th July 2022</span>
                    </li>
                    <li>
                      <span>
                        <i class="fa fa-map-marker fa-2x"></i> 
                        </span>
                        <span>Zalego Academy <br>Devan Plaza </span>
                      
                    </li>
          
                  </ul>

        </div>  
    
        <p class="text-centre">Looking for a place to kickstart you career in technology?<br> Whether you are local, new in town or just cruising through we've got<br> loads of great tips and event for you</p>
<h1 class="text-center">Sign up Today</h1> 

  <div class="row">
           <div class="mb-3 col-lg-6"></div>
           <label for="fullname" class="form-label">Full Name</label>
           <input type="text" name="fullname" class="form-control" placeholder="Enter Your Full Name">
         </div>


         <div class="mb-3 col-lg-6">
          <label for="phone" class="form-label">Phone number</label>
          <input type="text" name="phone" class="form-control" placeholder="+254">

         </div>
         <div class="row">
         <div class="mb-3 col-lg-6">
          <label for="email" class="form-label">email</label>
          <input type="text" name="email" class="form-control" placeholder="Enter Your email address">
         </div>
         </div>
        
    
        <div class="row">
        <div class="mb-3 col-lg-6">
         <label for="gender" name="gender" class="form-label">Whats your gender?</label>
         <!-- <input type="text"  name="gender" class="form-control" placeholder="--select your gender--"> -->
         <select class="form-select" aria-label="Disabled select example">
            <option selected>"--Select your gender--"</option>
            <option1 value="1">Male</option1>
            <option2 value="2">Female</option2>
         </select>

        </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <label for="course" name="course" class="form-label">What's your preferred course? </label>
            <select class="form-select" aria-label="Disabled select example">
            <option selected>"--select your course--"</option>
            <option value="1">Android application development</option>
            <option value="2">Web Design and development</option>
            <option value="3">Data Analysis</option>
            <option value="4">Cyber security</option>
            

            </select>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>  
        <p>You agree by providing your information you understand all our data privacy and protection policy <br>outlined in our terms and condition and the Privacy Policy statement.  </p>       
        <button type= "" name= "checkBox" class="btn btn-primary">Agree Terms and conditions</button>
       </form>
     
</div>

       <!-- end of contact us -->
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>