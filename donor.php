<?php	
	
	include ('include/header.php');
  include('include/config.php'); 
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
    height:190px;
    border:3px solid transparent;
    border-radius: 5px;
    margin:20px 5px 0px 5px;
    /* -webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95); */
    /* -moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95); */
    /* box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95); */
    padding: 20px;
    

  }
  .donors_data:hover{
    background:green;
    margin-left:22px;
    margin-right:22px;
  


  }
</style>

<div class="container-fluid red-background ">
	<div class="row2">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center" style="color:white">Donors</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>


	<!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Are you delete this record?</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <form target="" method="post">
                <br>
                <input type="hidden" name="delId" value="">
                <button type="submit" name="delete" class="btn btn-danger">Yes</button>

                <button type="button" class="btn btn-info" data-dismiss="alert">
                <span aria-hidden="true">Oops! No </span>
                </button>      
            </form>
     </div>

     <br>

     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Message</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>-->

    <div class="container" style="padding: 60px 0; ">
	   <div class=" row"  >
		
        <?php 

            $sql ="SELECT * FROM donor1";
            $result =mysqli_query($connection,$sql);
            if(mysqli_num_rows($result)>0){
              while($row =mysqli_fetch_assoc($result)){
                if($row['save_life_date']=='0'){

                  echo '<div class="  col-md-3 col-sm-12 col-lg-3 donors_data "
                  <span class="name">'.$row['name'].'</span>
                  <span>'.$row['blood_group'].'</span>
                  <span>'.$row['gender'].'</span>
                  <span>'.$row['city'].'</span>
                  <span>'.$row['email'].'</span>
                   <span>'.$row['contact_no'].'</span>
                  </div>';
                }
              else{
                 echo '<div  class="  abc col-md-3 col-sm-12 col-lg-3 donors_data   "
                  <span class="name">'.$row['name'].'</span>
                  <span>'.$row['blood_group'].'</span>
                  <span>'.$row['gender'].'</span>
                  <h4 class="name ">Donated</h4>
                  </div>';
                

              }

            }
          }
            else{
              echo ' <div class="alert alert-success alert-dismissible fade show" role="alert  ">
            <strong>Data not found</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>-->';
            }


            ?>

	</div>
</div>


<?php	

	include ('include/footer.php'); 

?>