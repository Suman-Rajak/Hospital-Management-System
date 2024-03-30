<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

  
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="../CssFile/home.css">
    <title>Home Page</title>
 
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark navbar sticky-top navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><img
            src="Image/user.jpg"
            alt=""
            style="max-width: 12%; border-radius: 50%"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active bg-image hover-zoom"
                aria-current="page"
                href="index.php"
                ><img src="../Image/medical icon.png" alt="" style="height:25px; width:25px; margin-right: 25px;">Home</a
              >
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li> -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
               Doctor's Appointment
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../HtmlCode/DoctorsPage.php"> Doctor's Details</a></li> 
                <li><a class="dropdown-item" href="../Image/doctor's Pdf.pdf" target="blank">Doctor's List</a></li>
              </ul>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bed_status.php">Bed Status</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Signup.php">SignUp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AdminSignin.php">Admin Sign in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="help.php">Help & Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Terms.php">Terms & Condition</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    <h2 class="title">WELCOME TO BSMARTS MEDICAL HOSPITAL</h2>
     <main>
      <div>
        <img src="../Image/Home1.jpg" alt="" id="homeImage">
      </div>
       
        <fieldset>
          <legend>About Hospital Management</legend>
          <p>Hospital management is known as management or administration of hospitals. Hospital Management provides the direct connection between health care services and those supplying the services they require. Hospital Management Career involves ensuring effective use of physical & financial resources of the hospital.</p>
        </fieldset>
      
     </main>
     <section>
       <div id="dev">
         <img src="../Image/mypic.jpg" alt="" id="joy">
         <img src="../Image/TAnu1.jpg" alt="" id="tanu">
         <img src="../Image/suman.jpeg" alt="" id="suman">
         <img src="../Image/ayan.jpg" alt="" id="ayan">
         <img src="../Image/handi.jpg" alt="" id="ayan">
         <img src="../Image/bc.jpg" alt="" id="ayan">
       </div>
       <h6 style="text-align: center;">Developed By Joydip,Tanumoy,Suman,Ayan,Subhajit,Braja</h6>
     </section>
     <footer id="footer">
      
       <p class="details">FAQs &nbsp;&nbsp;@Copywrite2022</p>
     </footer>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  </body>
</html>
