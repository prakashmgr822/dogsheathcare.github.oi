<?php 
 
 $oname = $_POST['oname'];
 $dname = $_POST['dname'];
 $breed = $_POST['dbreed'];
 $gender = $_POST['dgender'];
 $age = $_POST['dage'];
 $email = $_POST['email'];
 $phoneno = $_POST['phoneno'];
 $address = $_POST['address'];
 $username = $_POST['username'];
 $password = $_POST['password'];

 $conn = mysqli_connect('localhost','root','','database2');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = "insert into registration(oname, dname, breed, gender, age, email, phoneno, address, username, password) VALUES('$oname' ,'$dname', '$breed', '$gender', '$age', '$email', '$phoneno', '$address', '$username', '$password')";
        $result=mysqli_query($conn,$stmt);
        if ($result) {
           echo 'users entry saved successfully';
           }
           else {
             echo 'Error: '. $conn->error;
           }
           $conn->close();
   
       
    }






 
?>