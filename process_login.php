<?php
session_start();

$conn=mysqli_connect("localhost","root","","gamers") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['pass'];
    
    $main=mysqli_query($conn,"SELECT * FROM people WHERE username='$username'and password='$password'")or die(mysqli_error($conn));

    $row2=mysqli_num_rows($main);
	
	if($row2==1){
		 while($rows2=mysqli_fetch_array($main)){
			 $_SESSION['username']=$rows2['username'];
			 $_SESSION['password']=$rows2['password'];
			 $_SESSION['isLogged']=true;
			 
			 ?>
			 <script>
             window.location.href='amin/gameon.php';

			 </script>
			 <?php
		 }
	}else{
		?>
		<script>
			window.location.href='login.php';
		</script>
		
		<?php
	}
}

?>