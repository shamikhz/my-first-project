<?php
include("stu.php");	
?>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
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
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
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
    <center> <h1> Student Login Form </h1> </center>   
    <form action="" method="POST">  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <input type="submit" name="submit" value="LOGIN"> 
          
            <a href="registration page.html"> <h3> Register</h3></a>
         
            <input type="checkbox" checked="checked"> Remember me   <br><br>
         <a href="Forget.html">   Forgot  password? </a>   
        </div>   
    </form>     
<?php
if (isset($_POST['submit']))
{
	$firstname=$_POST['username'];
	$password=$_POST['password'];
$query="SELECT*FROM register WHERE STUDENT NAME='$firstname' && PASSWORD='$password'";
$data=mysqli_query($conn,$query);

$total=mysqli_fetch($data);

if($total==1)
{
 echo "data ok";
}
else
{
    echo  '<span style="color:red;text-align:center;font-size: 20px;"><b>failed</span></b>';
}
}
?>
