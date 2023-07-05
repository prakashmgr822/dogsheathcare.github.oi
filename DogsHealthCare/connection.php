<?php

$username="root";
$password="";
$server='localhost';
$db='database2';

$con= mysqli_connect($server, $username, $password, $db);

if($con){
   

?>
<script>
    alert('Coneection successful');
</script>

<?php
}else{
    die("No connection" . mysqli_connect_error());
}
?>
