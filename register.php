<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="login" align="right">

<form action="login.php" method="post">
     <p>Already have an account?</p>

        <input class="login-form" type="email" name="loginEmail" placeholder="Registerd Email">
    
        <input class="login-form" type="password" name="loginPass" placeholder="Password">
    
        <button class="login-form" type="submit" name="btnLogin" value="Sign IN"><b>Sign In</b></button>
      
     </form>
</div>



<div class="signUP">
            
    <form action="config.php" method="post">
       
            
        <input class="text-input" id="name" type="text" name="name" placeholder="Full Name" required maxlength="22">
        <br>
 

        <input class="text-input" type="email" name="email" placeholder="Email" required><br>
  
    
        <input class="text-input"  type="password" name="pass" placeholder="Password length between 5 to 10" required pattern=".{5,10}"><br>

 
        <input class="text-input" type="password"  name="conPass" placeholder="Confirm Password" required pattern=".{5,10}"><br>

        <button class="submit text-input" type="submit" value="Sign up"><b>Sign Up</b></button><br>
                     
    </form>
 </div>
</body>
</html>
