
 <?php
       include 'config.php';
       session_start();
       if(isset($_SESSION['user_id']) &&!empty($_SESSION['user_id'])){
          
          include 'usernav.php';
       }else{
        include 'navigation.php';
       }
        
 ?>