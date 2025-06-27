<?php
    require 'Database.php';
      
    
    
     $id =  $_REQUEST['id'];  
    $roomno = $_REQUEST['roomno']; 
    $beds = $_REQUEST['beds'];                  
      
    
    try{
       $Database = new Database(); 
           $db = $Database->connect(); 
    $query = "select * from rooms where roomno = '$roomno' ";
 
    
    $result = mysqli_query($db, $query);
    $beds1 = 0;    
    if($row = mysqli_fetch_array($result))
    {   
        
            $beds1 = $row['beds'];     
    }
    
    $available = $beds1-$beds;
    
    $query1="update rooms set beds = '$available' where roomno = '$roomno'";
    
    $result1 = mysqli_query($db, $query1);
    
    
    
    
    $query3="update bookings set status = 'Accepted' where id = '$id'";
   
      if(mysqli_query($db, $query3))
    {     
     
    
 $Message = urlencode("success");
         header("location:viewbookings.php?Message=".$Message);
    }
    else{
        
        
 $Message = urlencode("Failed");
         header("location:viewbookings.php?Message=".$Message);
    
    }
    
    }

  catch(Exception $e)
            {
                    $e->getMessage();
            } ?>