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

        $email=$_POST['loginEmail'];
        $pass=$_POST['loginPass'];

       
        $sql= "select * from users where email='$email' AND password='$pass'";
        $result=mysqli_query($con,$sql) or die(mysqli_error());
        
        $srch= mysqli_fetch_array($result);
        if($srch['email']==$email && $srch['password']==$pass){
            echo "Welcome ".$srch['email'];
        }
        else{
            echo "login hoi nai ";
        }


 ?>
 