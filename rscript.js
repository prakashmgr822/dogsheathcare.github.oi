
function validation() {
    let correct_way = /^[A-Za-z]+$/;
    

    var oname = document.getElementById("oname").value;
    var dname = document.getElementById("dname").value;
    var dbreed = document.getElementById("dbreed").value;
    var dage = document.getElementById("dage").value;
    var email = document.getElementById("email").value;
    var pnumber = document.getElementById("pnumber").value;
    var address = document.getElementById("address").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirmpassword = document.getElementById("confirmpassword").value;

    if(oname == "") {
        document.getElementById("messageoname").innerHTML="** Please enter owner's name";
        return false;
    } 
    if(oname.match(correct_way))
        true;
        
        else{
            document.getElementById("messageoname").innerHTML="** Please enter alphabet"
        return false;
        }

        
    
    if(dname == "") {
            document.getElementById("messagedname").innerHTML="** Please enter dog's name";
            return false;
        } 
        if(dname.match(correct_way))
            true;
            
            else{
                document.getElementById("messagedname").innerHTML="** Please enter alphabet"
            return false;
            }


    if(dbreed == "") {
                document.getElementById("messagedbreed").innerHTML="** Please enter dog's breed";
                return false;
            } 
            
            
    if(dage == "") {
                document.getElementById("messagedage").innerHTML="** Please enter dog age ";
                return false;
            } 
    
            if(isNaN(dage)){
                document.getElementById("messagedage").innerHTML="** user must enter digits only ";
                return false;
            }
            

    if(email == "") {
                document.getElementById("messageemail").innerHTML="** Please  enter email";
                return false;
            }
            if(email.indexOf('@') <=0){
                document.getElementById("messageemail").innerHTML="** invalid position ";
                return false;
            }
            if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')) {
                document.getElementById("messageemail").innerHTML="** invalid position ";
                return false;
            }

    if(pnumber == "") {
                document.getElementById("messagepnumber").innerHTML="** Please enter phone number ";
                return false;
            } 

            if(isNaN(pnumber)){
                document.getElementById("messagepnumber").innerHTML="** user must enter digits only ";
                return false;
            }

            if(pnumber!=10){
                document.getElementById("messagepnumber").innerHTML="** user must enter 10 digits only ";
                return false;
            }

    if(address == "") {
                document.getElementById("messageaddress").innerHTML="** Please  enter address ";
                return false;
            } 

    if(username == "") {
                document.getElementById("messageusername").innerHTML="** Please  enter username";
                return false;
            }

    if(password == "") {
                document.getElementById("messagepassword").innerHTML="** Please enter password ";
                return false;
            } 
    
    if(password != confirmpassword ) {
                document.getElementById("messageconfirmpassword").innerHTML="Password doesnot match.  ";
                return false;
            } 

}