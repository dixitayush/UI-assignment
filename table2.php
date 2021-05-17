
<?php
include 'connection.php';

if(isset($_POST["limit"], $_POST["start"]))
{
    $sql = "SELECT * FROM customer ORDER BY Sn ASC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
    $result3 = mysqli_query($conn, $sql);
   

    while ($row = mysqli_fetch_assoc($result3)) {

        echo " <tr style='height: 70px;text-align: center;'>
  <th class='pt-5' style='text-align: center;font-size:1.2vh;' scope='row'>" . $row['Sn'] . "</th>
  <td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
  letter-spacing: 0px; '>" . $row['Refferal_Programme_name'] . "</td>
  <td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
  letter-spacing: 0px;'>" . $row['Order_placed'] . "</td>
</tr>";
    }
}


?>
