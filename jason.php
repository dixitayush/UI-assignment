<?php
include 'connection.php';


{
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn, $sql);
      
    $customer =array();
    while ($row = mysqli_fetch_assoc($result)) {

       
        $arr[]=$row;
        
    }

    $customer=$arr;

    header("Content-type:application/json"); 
    echo json_encode($customer);
}

?>
