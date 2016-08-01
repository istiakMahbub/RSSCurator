
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

    	$name=$_POST['name'];
    	$email=$_POST['email'];
    	$pass=$_POST['pass'];

        if(empty($name) || empty($email) || empty($pass))
        {
            Echo("Field must not be empty");
        }
        else
        {
            $sql= "INSERT into users (name,email,password) VALUES('$name','$email','$pass')";

        if(!mysqli_query($con, $sql))
        {
            echo "Not Inserted";
        }
        else
        {
            echo "Inserted";
        }
        }
        


?>


