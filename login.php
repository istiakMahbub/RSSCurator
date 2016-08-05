 <?php
        $con=mysqli_connect('localhost','root','');
        if(!$con)
        {
            echo "Not connected";
        }
        if(!mysqli_select_db($con,'rsscurator'))
        {
            echo "database not selected";
        }   

        session_start();
        if (isset($_POST['btnLogin']))
        {
            $email=$_POST['loginEmail'];
        $pass=$_POST['loginPass'];

       
        $sql= "select * from users where email='$email' AND password='$pass'";
        $result=mysqli_query($con,$sql) or die(mysqli_error());
        
        $srch= mysqli_fetch_array($result);
        if($srch['email']==$email && $srch['password']==$pass){
            
            $_SESSION['valid'] = true;
          $_SESSION['timeout'] = time();
                  $_SESSION['email'] = $email;
                  
                  echo 'You have entered valid use name and password';
            header('Location: setting.php');
        }
        else{
            header('Location: register.php?login=false');
        }
    }
 ?>
 
