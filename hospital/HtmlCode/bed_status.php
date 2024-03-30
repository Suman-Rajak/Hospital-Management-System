<?php
$row="";
$xp=0;
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$conn = new mysqli('localhost','root','','patient');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ".$conn->connect_error);
}

else{
       $Room_Number = $_POST['Room_Number'];   
        $sql = "select * from bedstatus where Room_Number='$Room_Number';";   
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        $xp=0;
    } 
        // $conn->close();    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bed Status</title>
    <style>
        h1{
            text-align: center;
            margin-top: 50px;
        }
        h4{
            text-align: center;
        }
        body{
           background-image: url("../Image/bed.webp");
        }
        body a{
            text-decoration: none;
            text-align: center;    
        }
        #t{
            font-size: 30px;
            color: purple;
        }
        #t1{
            font-size: 40px;
            color: rgba(14, 31, 124, 0.74);
        }
       table{
        border:1px solid black;
        margin-left:auto;
        margin-right:auto; 
        background-color: white;
        text-align: center;
        /* margin: 10px; */
       }
       #rn{
           margin-left: auto;
           margin-right: auto;
           padding-left: 40%;
           padding-top: 10%;
       }
       #x{
           padding-left: 10%;
       }
       th,td{
           padding-left: 50px;
       }
       th{
           background-color: aqua;
       }
    </style>
</head>
<body>
    <a href="index.php">
        <h2 class="title" id="t">WELCOME TO ENVIRONMENT</h2>
        <h1 class="title" id="t1">BSMARTS MEDICAL HOSPITAL</h1>
    </a>

    <h4>Room No Available: 101-113</h4>
    <form action="" method="post" id="rn">
        <p>
            Enter Room No: &nbsp;
            <input type="number" name="Room_Number">
            <p id="x"><input type="submit"></p>
        </p>
    </form>
    <section>
        <h1>Room Details</h1>
        <!-- TABLE CONSTRUCTION-->
        <table border="2px">
            <tr>
                <th>Room Number</th>
                <th>Occupied</th>
                <th>Patient Name</th>
                <th>Admit Date</th>
                <th>Release Date</th>
            </tr>
            <tr>
            <?php
            if($row != ""){
           ?>
                <td><?php echo $row['Room_Number']; ?> </td> 
                <td><?php echo $row['Occupied_or_Vacant']; ?> </td>       
                <td><?php echo $row['Patient_Name']; ?> </td>  
                <td><?php echo $row['Date_of_Admit']; ?> </td>  
                <td><?php echo $row['Date_of_Release']; ?> </td> 
               <?php
            }
            ?>
            </tr>
        </table>
    </section>
</body>
</html>