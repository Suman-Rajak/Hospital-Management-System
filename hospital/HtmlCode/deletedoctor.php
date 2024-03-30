<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$Doctor_Name = $_POST['Doctor_Name'];
$conn = new mysqli('localhost','root','','patient');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ".$conn->connect_error);
}

else{
    $stmt = $conn->prepare("delete from doctor where Doctor_Name = ?;");

    $stmt->bind_param("s",$Doctor_Name);
    $execval = $stmt->execute();
    echo "Successfully Deleted..";
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
    <title>Delete Doctor</title> 
    <link rel="stylesheet" href="../CssFile/deletedoctor.css"> 
</head> 
<body> 
    <div> <h1 style="text-align: center; color: blueviolet;"><a href="index.php" style="text-decoration: none;">BSMARTS MDICAL HOSPITAL</a></h1></div> 
     <fieldset id="mid"> 
            <legend style="text-align: center; border-radius: 10px;">Doctor Delete From</legend> 
            <form action="" method="post"> 
                <h1 style="text-align: center;">Delete Doctor</h1> 
                <h3 style="text-align: center;">Please Fill Out The From Below To Add Doctor</h3> 
               <p><input type="text" name="Doctor_Name" id="name" placeholder="Enter Doctor Name" required></p>   
                    <input type="submit" name="submit" id="submit"> 
                    <button id="reset">Reset</button> 
                </div> 
     </form> 
</body> 
</html>