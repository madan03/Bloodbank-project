<?php 
	
  include 'include/hdr.php';
  
	if(isset($_SESSION['user_id']) &&!empty($_SESSION['user_id'])){

    $sql ="SELECT * FROM donor1 WHERE id=".$_SESSION['user_id'];
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0){

		while($row =mysqli_fetch_assoc($result)){
      $userId=$row['id'];
      $name=$row['name'];
      $blood_group=$row['blood_group'];
      $gender=$row['gender'];
      $email=$row['email'];
      $contact=$row['contact_no'];
      $city=$row["city"];
      $dob=$row['dob'];
      $date = explode("-", $dob);
      $dbPassword=$row['password'];
    }
  }
  if(isset($_POST['submit'])){

   
      if(isset($_POST['name']) && !empty($_POST['name'])){
        if(preg_match('/^[A-Za-z\s]+$/',$_POST['name'])){

          $name = $_POST['name'] ;
        }
        else{
          $nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Only lower and upper case and space character are allow.</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>';}

        }
        else{
          $nameError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please fill the name field</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
            </div>';}
             //gender input check
           if(isset($_POST['gender']) && !empty($_POST['gender'])){

            $gender =$_POST['gender'];


         }else{
          $genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Please select your gender</strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
        </div>';}
         //day input check
          
          if(isset($_POST['day']) && !empty($_POST['day'])){

        $day = $_POST['day'];


        }else{
          $dayError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please select day</strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
        </div>';}
        //month input check
        if(isset($_POST['month']) && !empty($_POST['month'])){

        $month = $_POST['month'];


        }else{
          $monthError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please select month</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';}

       //year input check
        if(isset($_POST['year']) && !empty($_POST['year'])){

        $year =$_POST['year'];


        }else{
          $yearError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please select year</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>';}
           //blood group check
       if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){

            $blood_group =$_POST['blood_group'];


        }else{
          $blood_groupError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Please select your blood group.</strong>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
          </button>
          </div>';}
           //city input check
      if(isset($_POST['city']) && !empty($_POST['city'])){
        if(preg_match('/^[A-Za-z\s]+$/',$_POST['city'])){

          $city = $_POST['city'] ;
        }
        else{
          $cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Only lower and upper case and space character are allow.</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
        </div>';}

        }
        else{
          $cityError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please fill the city field</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';}
         //contact number check
            if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
        if(preg_match('/\d{10}/',$_POST['contact_no'])){

          $contact = $_POST['contact_no'] ;
        }
        else{
          $contactError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>contact should consist of 10 character.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>';}

        }
        else{
          $contactError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please fill the number</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>';}
                //email input check
            if(isset($_POST['email']) && !empty($_POST['email'])){
              $pattern = '/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
                  if(preg_match($pattern,$_POST['email'])){

                  $email=$_POST['email'];
                  }         
        
        else{
          $emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>please enter valid email address.</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
          </div>';}

        }
      
        else{
          $emailError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please fill the email field</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';}
 

    
         //insert Data into database
     if(isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month)&& isset($year)&&
        isset($email)&& isset($contact) && isset($city) ){

        $DonorDob =$year."-".$month."-".$day;
      //md5=encrypt password
       // $password = md5($password);
         $sql = "UPDATE donor1 SET
            name='$name',gender='$gender',email='$email',dob='$DonorDob',contact_no='$contact',city='$city' ,blood_group='$blood_group'
            WHERE id=".$_SESSION['user_id'];
            
              //query execute
            if(mysqli_query($connection, $sql)){
              $updateError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Data  is update.</strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
               </div>';
              
           }
           else{
              $updateError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       <strong>Data not update.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
            }
          }
        }
          // echo "<script>alert('Sanjok')</script>";
  if(isset($_POST['update_pass'])){
              $password =$_POST['new_password'];
            
              
              $sql ="UPDATE donor1 SET password='$password' WHERE id=".$_SESSION['user_id'];
           //   echo "<script>alert($sql)</script>";
					    if(mysqli_query($connection,$sql)){

            $updatepasswordError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong> successfully update password.</strong>
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
						 </button>
						 </div>';
				
					
					} else{
						$updatepasswordError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Data not inserted try again.</strong>
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
						 </button>
						 </div>';
					 }

            
      
          }
       

     
      
 
if(isset($_POST['update_pass'])){
     //password input check
     if(isset($_POST['old_password']) &&!empty($_POST['old_password']) && isset($_POST['c_password'])
      &&!empty($_POST['c_password']) && isset($_POST['new_password'])
      &&!empty($_POST['new_password'])){
        $old_password=$_POST['old_password'];

            if($old_password==$dbPassword){
              if(strlen($_POST['new_password'])>=6){

                if($_POST['new_password'] == $_POST['c_password']){
                
                  $password=$_POST['new_password'];
                }
                else
                { $passwordError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Password are not same</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
          </button>
          </div>';}
          
          
          }
              
               else{ 
                 $passwordError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Password should consist of 6 character</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
          </button>
          </div>';}
          

            }
            else{
              $passwordError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Please enter valid password</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
             </button>
             </div>';
            }

      
}
    else{
          $passwordError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please enter valid password.</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';}

       
    }
    
  

?>
       

			<div class="container" style="padding: 60px 0;" class="mdn">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	
          <?php if(isset($updateError)) echo $updateError; 
           
           if(isset($updateaccountError)) echo $updateaccountError;
          
          ?>
					<form class="form-group" action="" method="post" novalidate="">
          <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value="<?php if(isset($name)) echo $name; ?>">
            <?php
           if(isset($nameError)) echo $nameError;


          ?>
          </div><!--full name-->
         
          <div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
                <?php  if(isset($blood_group)) echo '<option selected="" value="' .$blood_group.'"> '.$blood_group.'</option>';?>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
              </div><!--End form-group-->
             <?php
           if(isset($blood_groupError)) echo $blood_groupError;
            ?>
            
          <div class="form-group">
                      <label for="gender">Gender</label><br>
                          Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:8px; margin-right:8px;" >
                          Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:8px;"
                           <?php if(isset($gender)){if($gender=="Female") echo "checked";}?>>
            <?php
                if(isset($genderError)) echo $genderError;
            ?>
            </div><!--gender-->
            <div class="form-inline">
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="day" style="margin-bottom:8px;" required>
                <option value="">---Day---</option>
                 <?php  if(isset($date[2])) echo '<option selected="" value="' .$date[2].'"> '.$date[2].'</option>';?>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:8px;" required>
                <option value="">---Month---</option>
                 <?php  if(isset($date[1])) echo '<option selected="" value="' .$date[1].'"> '.$date[1].'</option>';?>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:8px;" required>
                <option value="">---Year---</option>
                 <?php  if(isset($date[0])) echo '<option selected="" value="' .$date[0].'"> '.$date[0].'</option>';?>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option><option value="2000">2000</option><option value="2001" >2001</option>
                <option value="2002" >2002</option><option value="2003" >2003</option><option value="2004" >2004</option>
                <option value="2005" >2005</option><option value="2006" >2006</option><option value="2007" >2007</option>
                <option value="2008" >2008</option><option value="2009" >2009</option><option value="2010" >2010</option>
                
              </select>
            </div><!--End form-group-->
             <?php
           if(isset($dayError)) echo $dayError;
            ?>
             <?php
           if(isset($monthError)) echo $monthError;
            ?>
             <?php
           if(isset($yearError)) echo $yearError;
            ?>

            <div class="form-group">
            <label for="fullname">Email</label>
            <input type="text" name="email" id="email" placeholder="Email" pattern="
            [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control"  value="<?php if(isset($email)) echo $email; ?>">
          </div>
           <?php
           if(isset($emailError)) echo $emailError;
            ?>
          <div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no"  placeholder="98********" class="form-control" required pattern="^\d{10}$" title="10 numeric characters only" maxlength="10" value="<?php if(isset($contact)) echo $contact;?>">
            </div><!--End form-group-->
             <?php
           if(isset($contactError)) echo $contactError;
            ?>
          <div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
                     <option value="">--select--</option>
                   <?php  if(isset($city)) echo '<option selected="" value="' .$city.'"> '.$city.'</option>';?>
                   <option value="1">Bhaktapur           </option>
    <option value="2">Dhading             </option>
    <option value="3">Kathmandu           </option>
    <option value="4">Kavrepalanchok      </option>
	<option value="5">Lalitpur            </option>
	<option value="6">Nuwakot             </option>
	<option value="7">Rasuwa              </option>
	<option value="8">Sindhupalchok       </option>
	<option value="9">Banke               </option>
	<option value="10">Bardiya             </option>
	<option value="11">Dailekh             </option>
	<option value="12">Jajarkot            </option>
	<option value="13">Surkhet             </option>
	<option value="14">Baglung             </option>
	<option value="15">Mustang             </option>
	<option value="16">Myagdi              </option>
	<option value="17">Parbat              </option>
	<option value="18">Gorkha              </option>
	<option value="19">Kaski               </option>
	<option value="20">Lamjung             </option>
	<option value="21">Manang              </option>
	<option value="22">Syangja             </option>
	<option value="23">Tanahu              </option>
	<option value="24">Dhanusa             </option>
	<option value="25">Dolakha             </option>
	<option value="26">Mahottari           </option>
	<option value="27">Ramechhap           </option>
	<option value="28">Sarlahi             </option>
	<option value="29">Sindhuli            </option>
	<option value="30">Dolpa               </option>
	<option value="31">Humla               </option>
	<option value="32">Jumla               </option>
	<option value="33">Kalikot             </option>
	<option value="34">Mugu                </option>
	<option value="35">Bhojpur             </option>
	<option value="36">Dhankuta            </option>
	<option value="37">Morang              </option>
	<option value="38">Sankhuwasabha       </option>
	<option value="39">Sunsari             </option>
	<option value="40">Terhathum           </option>
	<option value="41">Arghakhanchi        </option>
	<option value="42">Gulmi               </option>
	<option value="43">Kapilvastu          </option>
	<option value="44">Nawalparasi         </option>
	<option value="45">Palpa               </option>
	<option value="46">Rupandehi           </option>
	<option value="47">Baitadi             </option>
	<option value="48">Dadeldhura          </option>
	<option value="49">Darchula            </option>
	<option value="50">Kanchanpur          </option>
	<option value="51">Ilam                </option>
	<option value="52">Jhapa               </option>
	<option value="53">Panchthar           </option>
	<option value="54">Taplejung           </option>
	<option value="55">Bara                </option>
	<option value="56">Chitwan             </option>
	<option value="57">Makwanpur           </option>
	<option value="58">Parsa               </option>
	<option value="59">Rautahat            </option>
	<option value="60">Dang                </option>
	<option value="61">Pyuthan             </option>
	<option value="62">Rolpa               </option>
	<option value="63">Rukum               </option>
	<option value="64">Salyan              </option>
	<option value="65">Khotang             </option>
	<option value="66">Okhaldhunga         </option>
	<option value="67">Saptari             </option>
	<option value="68">Siraha              </option>
	<option value="69">Solukhumbu          </option>
	<option value="70">Udayapur            </option>
	<option value="71">Achham              </option>
	<option value="72">Bajhang             </option>
	<option value="73">Bajura              </option>
	<option value="74">Doti                </option>
	<option value="75">Kailali             </option>

                    
                  </select>          
                  <!--city end-->
                    <?php
           if(isset($cityError)) echo $cityError;
            ?>
             </div>
              
          <div class="form-group">
            <button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Update</button>
          </div>
        </form>

					</div>
				</div>
        <div class="card col-md-6 offset-md-3">
					
					<!-- Display Message -->
          <?php if(isset($passwordError)) echo $passwordError;
          if(isset($updatepasswordError)) echo $updatepasswordError;
          ?>

					<div class="panel panel-default" style="padding: 20px;">
        <form method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
              <?php  if(isset($passwordError1)) echo $passwordError1 ?>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
						
            	</div>
						</form>
					</div>
				</div>


		<!--	<div class="card col-md-6 offset-md-3">
					
		  

					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
			</div>
		
    </div>-->
	
<?php
	}
	else
   // header("location: ../index.php")
    ?> 
    

    