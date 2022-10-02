<?php
include("stu.php");
error_reporting(0);
?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> registration page</title>  
<style>   
Body {  font-family:calibri,helvetica,sans-serif;
background-color:pink; 
}  
button {   
       background-color: green;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
        
    }   
 input[type=text], input[type=password] , input[type=DOB] , input[type=number] , input[type=file]{   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
photo { 
width:40%;
padding:30px 5px;
}
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> Student Registration Form </h1> </center>   
    <form action="get" >  
        <div class="container">
            <label>Student name </label>   
            <input type="text" placeholder="Enter Username" name="username" required>
             <label>Gender </label>   
            <input type="text" placeholder="gender" name="gender" required>    
            <label>Father's name</label>
            <input  type="text" placeholder="fathername" name="father" required>
            <label>Mother's name</label>
            <input type="text" placeholder="mothername"  name="mother" required>
            <label>Address</label>
            <input type="text" placeholder="address" name="address">

                      <label>Mail</label>
               <input type="text" placeholder="e-mail" name="mail" required>
           <label>Date of birth</label>
            <input type="DOB" placeholder="Year of birth" name="DOB" required>
             <label>High school marks</label>
              <input type="number" placeholder="percentage" name="hnumber">
             <label>Intermediate marks</label>
              <input type="number" placeholder="percentage" name="inumber">
              
             <label>Course</label>
              <input type="text" placeholder="course" name="course">  
              <label>Mobile number</label>
             <input type="number" placeholder="number" name="mnumber" required>
            <label>Password </label>   
            <input type="password" placeholder="Enter Password" name="password" required>
            <label>Confirm password</label>
          <input type="password" placeholder="confirm password" name="conpassword" reqired>  
            <button type="submit" name="submit">Register</button>  
            

        </div>   
    </form>     
</body>     
</html>  
<?php
$id=$_GET['id'];
$username=$_GET['username'];
$gender=$_GET['gender'];
$father=$_GET['father'];
$mother=$_GET['mother'];
$address=$_GET['address'];
$mail=$_GET['mail'];
$DOB=$_GET['DOB'];
$highschoolmarks=$_GET['hnumber'];
$intermediatemarks=$_GET['inumber'];
$course=$_GET['course'];
$mobilenumber=$_GET['mnumber'];
$password=$_GET['password'];
$confirmpassword=$_GET['conpassword'];

$query="INSERT INTO register VALUE ('$id','$username','$father','$mother','$address','$mail','$DOB','$highschoolmarks','$intermediatemarks','$mobilenumber','$password','$confirmpassword')";
$data=mysqli_query($conn,$query);
if($data)
{
 echo "data inserted into database";
}
else
{
    echo  '<span style="color:red;text-align:center;font-size: 20px;"><b>failed to insert data into databse </span></b>';
}
?>