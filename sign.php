<?php

include  ('include/header.php');
include  ('include/header1.php');
//include  ('include/config.php');
?>
<?php
if(isset($_POST['SignIn']))
{
     $email = $_POST['email'];
     $password = $_POST['password'];
    $sql ="SELECT * FROM donor1 WHERE  email ='$email' AND password ='$password'";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0){

		while($row =mysqli_fetch_assoc($result)){
      echo "sucessfully login";
      $_SESSION['email']=$row['email'];
      $_SESSION['user_id']=$row['id'];
      $_SESSION['name']=$row['name'];
      $_SESSION['save_life_date']=$row['save_life_date'];
       header('location:user/index.php');
    }
 } else
    {
        echo "login faild";
    
    }

   } 
    
  
?>

<style>
e>
	.size{
		min-height: 0px;
		padding: 60px 0 60px 0;

	}
	h1{
		color: white;
	}
	.form-group{
		text-align: left;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
</style>
 <div class="container-fluid red-background">
	<div class="row2">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">SignIn</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="conatiner size ">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
		<h3>SignIn</h3>
		<hr class="red-bar">
		<?php
					if(isset($submitError)) echo $submitError; 
					?>
		
		<!-- Erorr Messages -->

			<form action="" method="post" >
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email " required>
					<?php
					if(isset($emailError)) echo $emailError; 
					?>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Password" required class="form-control">
					<?php
					if(isset($passwordError)) echo $passwordError; 
						?>
				</div>
				<div class="form-group">
					<button class="btn btn-danger btn-lg center-aligned" type="SignIn" name="SignIn">SignIn</button>
				</div>
			</form>
		</div>
	</div>
</div>
		<?php
			//include footer file.
 			include ('include/footer1.php');
 			?>
