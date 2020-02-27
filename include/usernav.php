			<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  	
 						 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   							 <span class="navbar-toggler-icon"></span>
 						 </button>
  					<div class="collapse navbar-collapse" id="collapsibleNavbar">
   						 <ul class="navbar-nav"
               <li class="nav-item">
                    <a href="index.php" class="nav-link text-white"><i class="fa fa-home" ></i>Home</a>
                  </li>
      						
     						 <li class="nav-item">
       							 <a href="sign.php" class="nav-link text-white"><i class="fa fa-sign-in" ></i>>Sign in</a>
      						</li> 
       						<li class="nav-item">
       						 	 <a href="about.php" class="nav-link  text-white"><i class="far fa-address-card"></i>About us</a> 
       						</li>
                  <li class="nav-item">
                    <a href="donate.php" class="nav-link text-white">Donate</a>
                  </li>
                  <li class="nav-item">
                    <a   href="donors.php" class="nav-link text-white" >Donors</a>
                  </li>
                   <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php if(isset($_SESSION['name'])) echo $_SESSION['name'];?><!-- Donor Name -->
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          
                        <a href="user/index.php" class="dropdown-item"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>

                       <a  href="user/update.php" class="dropdown-item" ><i class="fa fa-edit" aria-hidden="true"></i>
                      Update Profile</a>

                       <a class="dropdown-item" href="user/logout.php">
                   <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Logout</a>

         			</div>
            </li>
   						 </ul>
 				 	</div>  
				</nav>