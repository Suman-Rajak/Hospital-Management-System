<?php
$result="";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$conn = new mysqli('localhost','root','','patient');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ".$conn->connect_error);
}

else{
    //    $mobile = $_POST['mobile'];   
        $sql = "select * from appointment;";   
        $result=$conn->query($sql);
        // $row=$result->fetch_assoc();
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
        body{
           background-image: url("../Image/apoin.jpg");
           
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
           padding-left: 35%;
           padding-top: 3%;
       }
       #x{
           padding-left: 20%;
       }
       th,td{
            text-align: center;
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

    <form action="" method="post" id="rn">
        <p><h2 style="color: blue">Click Submit Button To Show Appointment List</h2></p>
        <p id="x"><input type="submit"></p>
    </form>
    <section>
        <h1>Appointment Details</h1>
        <table border="2px">
            <tr>
                <th>SL No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Appointment Date</th>
                <th>Doctor</th>
            </tr>
            <?php
            if($result != ""){
                while($row = mysqli_fetch_array($result))
                    { 
            ?>
            <tr>
                <td><?php echo $row['SLNo']; ?> </td> 
                <td><?php echo $row['name']; ?> </td>       
                <td><?php echo $row['age']; ?> </td>  
                <td><?php echo $row['mobile']; ?> </td>  
                <td><?php echo $row['gender']; ?> </td> 
                <td><?php echo $row['doa']; ?> </td> 
                <td><?php echo $row['assdoc']; ?> </td> 
            </tr>
               <?php
                    }
            }
            ?>
        </table>
    </section>
</body>
</html>