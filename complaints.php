<?php
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$con =mysqli_connect($sname, $unmae, $password,$db_name);
if ($con -> connect_error) {
die("connection failed:".$conn->connect_error);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    html{
        /* background: linear-gradient(to right top, #0c008c, #002a8d, #003c82, #134971, #45535e) ; */

        max-height:768px;
        height:100%;
        color:black;
        /* background-image: linear-gradient(to bottom, #00132e, #27485a, #648085, #acbbb7, #f7f8f7); */
    }
     form{
         margin:10px auto;
         max-width:350px;
         width:100%;
         border:2px solid lightgrey;
         background: white;
        
       
         
         /* box-shadow: 1px 2px  1px 3px  lightgrey; */
         height:300px;
         border-radius: 10px;
         text-align:center;
         margin-bottom:0px;
     }
     form div{
         height:50px;
         color: #002a8d;
         text-align:center;
         padding:10px ;
        
         margin-top:-10px !important;
         border-bottom: 2px solid transparent;
         border-bottom: 2px solid #002a8d;
         margin-bottom:10px;
          

     }
     form div h3{
         margin-top:50px;
         margin-bottom:0px;
        
     }
      form label{
         padding-left:5px;
         float:left;
         margin:13px auto ;
     }
     form input{
         padding:5px;
         border-radius: 5px;
         border:2.5px solid grey;
         border-radius: 5px;
         max-width:160px;
         margin:10px auto;
        margin-right:10px;
         
         float:right;
     
        
     }
     .submit{
         height:40px;
         font-size:16px;
         border: 2px solid transparent;
         border-radius: 5px;
         background: #002a8d;
         font-weight:bold; 
         color: white;
         margin-top:20px;
         margin-right:100px !important;
         width:120px;
     

     }
     table{
         max-width:600px;
         width:80%;
         
         border: 2px solid black;
         margin-top:30px;
         text-align: center;
         padding:5px;
         background: white;
         color:black;
         border-collapse: collapse;
         margin:30px auto 0px;
         
        
     }
    table thead{

        font-size: 20px;
        font-weight: bold;
        border: 1px solid black;
        width:200px;
        color:black;
    }
    table  tr {
     border: 1px solid black;
     color:black;
    }
    table tr td{
color: black;
font-weight: bold;
border: 1px solid black;
    }
    h2{
        margin:30px auto 10px;
        width:400px;

    }
    h1{
        width:800px;
        margin:30px auto 0px;
        text-align:center;
    }


.button {
  border-radius: 15px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: RED;} /* Red */

</style>

     
</head>
<body>
     

   <h2 color="Black" >Students Complaints Table</h2>
    <table   cellpadding="1" cellspacing="1">
       <tr> <thead><td>RollNo</td><td>Complain</td><td>Date and Time</td></thead></tr>
        
        <tr>
<?php
$sql= "SELECT * FROM `complaints`";
$result= mysqli_query($con, $sql);
//if ($result->num_rows>0){
while ($rows=$result->fetch_assoc())
{
?>
            <td><?php echo $rows['rollNo'] ?></td>
            
            <td><?php echo $rows['complaint'] ?></td>

            <td><?php echo $rows['dt'] ?></td>
        </tr>
        <?php
        } ?>

    </table>




    <button onclick="window.location.href='index.html'" class="button1 button">Log Out</button> <br>
</body>
</html>