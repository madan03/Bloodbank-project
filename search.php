<?php 

	//include header file
	include ('include/header.php');
  include('include/navigation.php');

?>
        <style>
  .size{
    min-height: 0px;
    padding: 60px 0 40px 0;
    
  }
  .loader{
    display:none;
    width:69px;
    height:89px;
    position:absolute;
    top:25%;
    left:50%;
    padding:2px;
    z-index: 1;
  }
  .loader .fa{
    color: #e74c3c;
    font-size: 52px !important;
  }
  .form-group{
    text-align: left;
  }
  h1{
    color: white;
  }
  h3{
    color: #e74c3c;
    text-align: center;
  }
  .red-bar{
    width: 25%;
  }
  span{
    display: block;
  }
  .name{
    color: #e74c3c;
    font-size: 22px;
    font-weight: 700;
  }
  .donors_data{
    background-color: white;
    border-radius: 5px;
    margin:20px 5px 0px 5px;
    -webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
    -moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
    box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
    padding: 20px;
  }
</style>

 <body>
<div class="container-fluid red-background ">
	<div class="row4">
		<div class="col-md-6 offset-md-3">
		<h1 class="text-center" style="color:white">Search Donors</h1>
			<hr class="white-bar">
			<br>
    </div>
  </div>
</div>
			 <div class="container" style="padding: 60px 0 60px 0;">
	<div class="row4 " id="data">

		<!-- Display The Search Result -->
    <?php 
    if((isset($_GET['city'])  &&!empty($_GET['city'])) && (isset($_GET['blood_group']) && !empty($_GET['blood_group']))){

        $city = $_GET['city'];
        $blood_group= $_GET['blood_group'];

         $sql ="SELECT * FROM donor1 WHERE city='$city' OR blood_group= '$blood_group' ";
            $result =mysqli_query($connection,$sql);
            if(mysqli_num_rows($result)>0){
              while($row =mysqli_fetch_assoc($result)){
                if($row['save_life_date']=='0'){

                  echo '<div class=" col-md-3 col-sm-12 col-lg-3 donors_data"
                  <span class="name">'.$row['name'].'</span>
                  <span>'.$row['blood_group'].'</span>
                  <span>'.$row['gender'].'</span>
                  <span>'.$row['email'].'</span>
                  <span>'.$row['city'].'</span>
                   <span>'.$row['contact_no'].'</span>
                  </div>';
                }
              else{
                 echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data"
                  <span class="name">'.$row['name'].'</span>
                  <span>'.$row['blood_group'].'</span>
                  <span>'.$row['gender'].'</span>
                  <h4 class="name text-center">Donated</h4>
                  </div>';
                

              }

            }
          }
            else{
              echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data not found</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>-->';
            }

    }
    ?>
    

</div>
</div>

 <?php 

	//include header file
	include ('include/footer1.php');

?>

