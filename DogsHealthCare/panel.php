




<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="panel.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <title></title>
   
    
</head>
<section class="header">
    <a href=""><img src="images/logo.png" class="logo">
    
    </section>
    <h1>LIST OF CUSTOMERS</h1>
    

    <table class="content-table">
        <thead>
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
            <th colspan="2">Operations</th>

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
             <td><i class="fa fa-edit" aria-hidden="true"></i></td>
             <td><i class="fa fa-trash" aria-hidden="true"></i></td>
          </tr>
          
            <?php
        }

            ?>
            

          
      </table>
    

   
     

        

    
    

</html>