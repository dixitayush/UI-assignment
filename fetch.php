
<?php
include 'connection.php';

if(isset($_POST["limit"], $_POST["start"]))
{
    $sql = "SELECT * FROM customer ORDER BY Sn ASC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
    $result = mysqli_query($conn, $sql);
   $customer =array();
    while ($row = mysqli_fetch_assoc($result)) {

     $arr['sn'] = $row['Sn'];
     $arr['refferal_programme_name']=$row['Refferal_Programme_name'];
     $arr['customer_no']=$row['Customers_no'];
     $arr['Order_placed']=$row['Order_placed'];
     $arr['Total_revenue']=$row['Total_revenue'];
     
    
    
     array_push($customer, $arr);
           
        
    }
   $var = json_encode($customer);
    
}

?>
