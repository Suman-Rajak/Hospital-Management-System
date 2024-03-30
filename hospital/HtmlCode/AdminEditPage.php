<!doctype html> 
<html lang="en"> 
  <head> 
     
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../CssFile/admineditpage.css"> 
    <title>Admin Portal</title> 
  </head> 
  <body> 
  <a href="index.php" style="text-decoration: none;">
    <h1 style="text-align: center;color: rgb(17, 1, 233); text-decoration: underline; background-color: rgb(8, 255, 8); padding:5px"> WELCOME TO BSMARTS MEDICAL HOSPITAL </h1></a> 
   
      <div class="row pt-5" > 
  <div class="col-sm-6"> 
    <div class="card p-3"> 
      <div class="card-body"> 
        <h5 class="card-title">Adding Patient</h5> 
        <p class="card-text">To add a new patient, click on the '+' symbol. Select 'Add new patient' from the Button . </p> 
        <a href="PatientForm.php" class="btn btn-primary">Add Patient</a> 
      </div> 
    </div> 
  </div> 
  <div class="col-sm-6"> 
    <div class="card p-3"> 
      <div class="card-body"> 
        <h5 class="card-title">Show Appointment</h5> 
        <p class="card-text">See Full Appontment List Of Patient.</p> 
        <a href="Showappointment.php" class="btn btn-primary">Appointment</a> 
      </div> 
    </div> 
  </div> 
</div> 
<br> 
<div class="row"> 
  <div class="col-sm-6"> 
    <div class="card p-3"> 
      <div class="card-body"> 
        <h5 class="card-title">Adding Doctor</h5> 
        <p class="card-text">To add a new Doctor, click on the '+' symbol. Select 'Add new Doctor' from the Button . </p> 
        <a href="doctoradd.php" class="btn btn-primary">+ Add Doctor</a> 
      </div> 
    </div> 
  </div> 
  <div class="col-sm-6"> 
    <div class="card p-3"> 
      <div class="card-body"> 
        <h5 class="card-title">Delete Doctor</h5> 
        <p class="card-text">To Delete a Doctor, click on the '-' symbol. Select 'Delete Doctor' from the Button</p> 
        <a href="deletedoctor.php" class="btn btn-primary"> - Delete Doctor</a> 
      </div> 
    </div> 
  </div> 
</div> 
    
<div id="BM"> 
  <div class="card-body p-3"> 
    <h5 class="card-title">Bed Managment</h5> 
    <p class="card-text">To Management Bed Matrix, click on the 'Update Bed' from the Button</p> 
    <a href="BedManagement.php" class="btn btn-primary">Update Bed</a> 
  </div> 
</div> 
 
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
 
     
  </body> 
</html>