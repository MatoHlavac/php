<html>
<style>
html{
   background:url(https://images.pexels.com/photos/1714208/pexels-photo-1714208.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260) no-repeat;
   background-size: cover;
   height:100%;
   background-color: #000;
}
* {
   box-sizing:border-box;
   -webkit-box-sizing:border-box;
   -moz-box-sizing:border-box;
   -webkit-font-smoothing:antialiased;
   -moz-font-smoothing:antialiased;
   -o-font-smoothing:antialiased;
   font-smoothing:antialiased;
   text-rendering:optimizeLegibility;
}
body {
   color: #C0C0C0;
   font-family: Arial, san-serif;
}


/* Contact Form Styles */
h1 {
   margin: 10px 0 0 0;
}
h4{
   margin: 0 0 20px 0;
}
#contact-form {
   background-color:rgba(72,72,72,0.9);
   padding: 10px 20px 30px 20px;
   max-width:100%;
   float: left;
   left: 50%;
   position: absolute;
   margin-top:30px;
   margin-left: -260px;
   border-radius:7px;
   -webkit-border-radius:7px;
   -moz-border-radius:7px;
}
#contact-form input,   
#contact-form select,   
#contact-form textarea,   
#contact-form label { 
   font-size: 15px;  
   margin-bottom: 2px;
   font-family: Arial, san-serif;
} 
#contact-form input,   
#contact-form select,   
#contact-form textarea { 
   width:100%;
   background: #fff;
   border: 0; 
   -moz-border-radius: 4px;  
   -webkit-border-radius: 4px;  
   border-radius: 4px;
   margin-bottom: 25px;  
   padding: 5px;  
}  
#contact-form input:focus,   
#contact-form select:focus,   
#contact-form textarea:focus {  
   background-color: #E5E6E7; 
}  
#contact-form textarea {
   width:100%;
   height: 150px;
}
#contact-form button[type="submit"] {
   cursor:pointer;
   width:100%;
   border:none;
   background:#991D57;
   background-image:linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
   background-image:-moz-linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
   background-image:-webkit-linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
   color:#FFF;
   margin:0 0 5px;
   padding:10px;
   border-radius:5px;
}
#contact-form button[type="submit"]:hover {
   background-image:linear-gradient(bottom, #9C215A 0%, #A82767 52%);
   background-image:-moz-linear-gradient(bottom, #9C215A 0%, #A82767 52%);
   background-image:-webkit-linear-gradient(bottom, #9C215A 0%, #A82767 52%);
   -webkit-transition:background 0.3s ease-in-out;
   -moz-transition:background 0.3s ease-in-out;
   transition:background-color 0.3s ease-in-out;
}
#contact-form button[type="submit"]:active {
   box-shadow:inset 0 1px 3px rgba(0,0,0,0.5);
}
input:required, textarea:required {  
   box-shadow: none;
   -moz-box-shadow: none;  
   -webkit-box-shadow: none;  
   -o-box-shadow: none;  
} 
#contact-form .required {  
   font-weight:bold;  
   color: #E5E6E7;      
}

/* Hide success/failure message
   (especially since the php is missing) */
#failure, #success {
   color: #6EA070; 
   display:none;  
}

/* Make form look nice on smaller screens */
@media only screen and (max-width: 580px) {
   #contact-form{
      left: 3%;
      margin-right: 3%;
      width: 88%;
      margin-left: 0;
      padding-left: 3%;
      padding-right: 3%;
   }
}

</style>
<body>


<div id="contact-form">
    <div>
        <h1>Nice to Meet You!</h1>
    </div>


    <form method="post" action="/">
        <div>
            <label for="name">
                <span class="required">Name: </span>
                <input type="text" id="name" name="name" value="" placeholder="Your Name" required="required" tabindex="1" autofocus="autofocus" />
            </label>
        </div>
        <div>
            <label for="email">
                <span class="required">Email: </span>
                <input type="email" id="email" name="email" value="" placeholder="Your Email" tabindex="2" required="required" />
            </label>
        </div>
        <div>
            <label for="gender">
                <span>Gender: </span>
                <select id="gender" name="gender" tabindex="4">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">- Other </option>
                </select>
            </label>
        </div>
        <div>
            <label for="phnumber">
                <span class="required">Phone Number: *</span>
                <input type="tel" id="phnumber" name="phnumber" placeholder="Enter your phone number."  required="required"></input>
            </label>
        </div>
        <div>
            <label for="password">
                <span class="required">Password: </span>
                <input type="password" id="password" name="password" placeholder="Enter your password." required>
            </label>
        </div>
        <div>
            <label for="state">
                <span>State:</span>
                <input type="text" id="state" name="state" placeholder="Enter where are you from." required></input>
            </label>
        </div>
        <div>
            <button name="submit" type="submit" id="submit" >SEND</button>
        </div>
    </form>

</div>
</body>
</html>
<?php
if(isset($_POST['name']))
{

    $fp = fopen('data.txt', 'a');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $phnumber=$_POST['phnumber'];
    $password=$_POST['password'];
    $state=$_POST['state'];



    fwrite($fp, $name);
    fwrite($fp, $email);
    fwrite($fp, $gender);
    fwrite($fp, $phnumber);
    fwrite($fp, $password);
    fwrite($fp, $state);
    fclose($fp);
}
?>