



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="panel.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
    <title></title>
   
    
</head>
<section class="header">
    <a href=""><img src="images/logo.png" class="logo">
    
    </section>
    <body>
        
    <h1>LIST OF CUSTOMERS</h1>

    <table class="content-table">
        
          <tr>
            <th>id</th>
            <th>Owner's Name</th>
            <th>Dog's Name</th>
            <th>Dog's Breed</th>
            <th>Dog's Gender</th>
            <th>Age</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Username</th>
            <th>Password</th>
            <th>Operations</th>
            </tr>
           

            <tbody>
            <?php
        include 'connection.php';

        $selectquery = "select * from registration";

        $query = mysqli_query($con,$selectquery);

        $nums = mysqli_num_rows($query);

        
        
        while($res = mysqli_fetch_array($query)){
            ?>
            </tbody>
            
            <tr>
            
             <td><?php echo $res['id']; ?></td>
             <td><?php echo $res['oname']; ?></td>
             <td><?php echo $res['dname']; ?></td>
             <td><?php echo $res['breed']; ?></td>
             <td><?php echo $res['gender']; ?></td>
             <td><?php echo $res['age']; ?></td>
             <td><?php echo $res['email']; ?></td>
             <td><?php echo $res['phoneno']; ?></td>
             <td><?php echo $res['address']; ?></td>
             <td><?php echo $res['username']; ?></td>
             <td><?php echo $res['password']; ?></td>
             <td></td>
          </tr>
          
            <?php
        }

            ?>
            </table>
            </body>
            </html>