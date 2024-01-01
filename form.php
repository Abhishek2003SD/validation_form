<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    background:black;
}

form{
    padding:10px; 
}

.container{
    width: 20%;
    margin: auto;
    margin-top: 200px;
    padding:10px;
    
}
form{
    background:gray;
}
input{
   margin:5px;
   width:98%;
   height:30px;
   border-radius:10px;
}

input[type="submit"]{
   margin:5px;
   width:40%;
   height:30px;
}

input[type="reset"]{
   margin:5px;
   width:40%;
   height:30px;
}

</style>
</head>
<body>
    <div class="container">
        <form action="todatBack.php" name="myform" onsubmit="return validationForm()">
            <div class="col1">
                <label for="">name</label><br>
                <input type="text" name="name">
            </div>

            <div class="col1">
                <label for="">Address</label><br>
                <input type="text" name="address">
            </div>

            <div class="col1">
                <label for="">contact</label><br>
                <input type="text" name="contact">
            </div>

            <div class="col1">
                <label for="">email</label><br>
                <input type="text" name="email">
            </div>

            <div class="col1">
                <label for="">password</label><br>
                <input type="password" name="password">
            </div>

            <div class="col1">
                <label for="">confirm password</label><br>
                <input type="password" name="cpassword">
            </div>

            <div class="col1">
                <label for="">courses</label><br>
                <select name="courses" id="">
                    <option selected value="-1">[selectedcoueses]</option>
                    <option>software</option>
                    <option>hardware</option>
                    <option>electronic</option>
                </select>
                
            </div>

            <div class="col1">
                <label for="">age</label><br>
                <input type="text" name="age">
            </div>

            <h4 id="enter"></h4>
            <input type="submit">
            <input type="reset">

        </form>
    </div>
</body>
<script>
    function validationForm(){
        let error=document.getElementById('enter');
        let email=document.myform.email.value;


        let atpos=email.indexOf('@');
        let dotpos=email.indexOf('.');

        if(document.myform.name.value==""){
            error.innerText="name empty";
            document.myform.name.focus();
            return false;
        }

        if(document.myform.address.value==""){
            error.innerText="address empty";
            document.myform.address.focus();
            return false;
        }

        if(document.myform.contact.value=="" || document.myform.contact.value.length!=10 || isNaN(document.myform.contact.value)){
            
            error.innerText="contact is empty or not value";
            document.myform.contact.focus();
            return false;
        }

        if(document.myform.email.value==""){
            error.innerText="email empy";
            document.myform.email.focus();
            return false;
        }
        if(atpos<1 || dotpos<1 || (dotpos-atpos <2)){
            error.innerText="email not value";
            document.myform.email.focus();
            return false;
        }
        if(document.myform.password.value=="" || document.myform.password.value.length<8){
            error.innerText="password empy or minimum 8 character";
            document.myform.password.focus();
            return false;
        }

        let pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/;

        if(!document.myform.password.value.match(pass)){
            error.innerText="8-20/a-z/A-Z characters used for password";
            document.myform.password.focus();
            return false;
        }

        if(document.myform.password.value!=document.myform.cpassword.value){
            error.innerText="password and confirm password is not match";
            document.myform.cpassword.focus();
            return false;
        }

        if(document.myform.courses.value=="-1"){
            error.innerText="selected course";
            document.myform.courses.focus();
            return false;
        }

        if(isNaN(document.myform.age.value) || document.myform.age.value<1 ){
            
            error.innerText="check age";
            document.myform.age.focus();
            return false;
        }

        
    }
</script>


</html>