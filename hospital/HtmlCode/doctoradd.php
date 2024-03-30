<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$Doctor_Name = $_POST['Doctor_Name'];
$specialist = $_POST['specialist'];
$week = $_POST['week'];
$time = $_POST['time'];

$conn = new mysqli('localhost','root','','patient');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ".$conn->connect_error);
}

else{
    $stmt = $conn->prepare("insert into doctor (Doctor_Name, specialist, week, time) values(?,?,?,?);");

    $stmt->bind_param("ssss",$Doctor_Name, $specialist, $week, $time);
    $execval = $stmt->execute();
    echo "Successfully Registered...";
    $stmt->close();
    $conn->close();
}
}
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Adding Doctor</title> 
    <link rel="stylesheet" href="../CssFile/adddoctor.css"> 
</head> 
<body> 
    <div> <h1 style="text-align: center; color: blueviolet;"><a href="index.php" style="text-decoration: none;">BSMARTS MDICAL HOSPITAL</a></h1></div> 
     <fieldset id="mid"> 
            <legend style="text-align: center; border-radius: 10px;">Doctor Add From</legend> 
            <form action="" method="post"> 
                <h1 style="text-align: center;">Add Doctor</h1> 
                <h3 style="text-align: center;">Please Fill Out The From Below To Add Doctor</h3> 
               <p><input type="text" name="Doctor_Name" id="name" placeholder="Enter Doctor Name" required></p>   
                   <p><input type="text" name="specialist" id="disease" placeholder="Specialist" required></p> 
                  <p> 
                      Available Day: <select name="week" id="week" style="width: 98%;"> 
                          <option value="#">...Select...</option> 
                          <option value="monday">Monday</option> 
                          <option value="tuesday">Tuesday</option> 
                          <option value="wednesday">Wednesday</option> 
                          <option value="thursday">Thusday</option> 
                          <option value="friday">Friday</option> 
                          <option value="saturday">Saturday</option> 
                          <option value="sunday">Sunday</option> 
                      </select> 
                  </p> 
                <p>  Time: <input type="time" name="time" id="time"></p> 
                    <input type="submit" name="submit" id="submit"> 
                    <button id="reset">Reset</button> 
                </div> 
                </form> 
</body> 
</html>