<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="rstyle.css">
</head>
<body>
    <form action="connect.php" onreturn="return validation()" class="form" method="POST">
        <h1>BE A MEMBER REGISTER NOW</h1>

        <div class="input">
            <label class="col1">Owner's Name</label>
            <input type="text" id="oname" value="" class="col2" name="oname">
            <span id="messageoname"></span>
            <br></br>
            </div>
            <div class="input">
                <label class="col1">Dog's Name</label>
                <input type="text" id="dname" value="" class="col2" name="dname">
                <span id="messagedname"></span>
                <br></br>
                </div>
                <div class="input">
                    <label class="col1">Dog's Breed</label>
                    <input type="text" id="dbreed" value="" class="col2" name="dbreed">
                    <span id="messagedbreed"></span>
                    <br></br>
                    </div>
                    <div class="input">
                        <label class="col1">Dog's Gender</label>
                        <div>
                        <input type="radio" name="dgender"  value="m" checked >Male
                        <br>
                        </div>
                        <div class="f">
                        <input type="radio" name="dgender"  value="f">Female
                        </div>  
                        
                        </div>
                        <div class="input">
                            <label class="col1">Dog's Age</label>
                            <input type="text" id="dage" name="dage" class="col2">
                            <span id="messagedage"></span>
                            <br></br>
                            </div>
                            <div class="input">
                                <label class="col1">Email Address</label>
                                <input type="text" id="email" name="email" class="col2">
                                <span id="messageemail"></span>
                                <br></br>
                                </div>
                                <div class="input">
                                    <label class="col1">Phone Number</label>
                                    <input type="text" id="pnumber" name="phoneno" class="col2">
                                    <span id="messagepnumber"></span>
                                    <br></br>
                                    </div>
                                    <div class="input">
                                        <label class="col1">Address</label>
                                        <input type="text" id="address" name="address" class="col2">
                                        <span id="messageaddress"></span>
                                        <br></br>
                                        </div>
                                        <div class="input">
                                            <label class="col1">Username</label>
                                            <input type="text" id="username" name="username" class="col2">
                                            <span id="messageusername"></span>
                                            <br></br>
                                            </div>
                                            <div class="input">
                                                <label class="col1">Password</label>
                                                <input type="password" id="password" name="password" class="col2">
                                                <span id="messagepassword"></span>
                                                <br></br>
                                                </div>
                                                <div class="input">
                                                    <label class="col1">Confirm Password</label>
                                                    <input type="password" id="confirmpassword" value="" class="col2">
                                                    <span id="messageconfirmpassword"></span>
                                                    <br></br>
                                                    </div>
                                                    
        <input type="submit" value="submit" onclick="return validation()" class="btn" >
    </form>
</body>

</html>