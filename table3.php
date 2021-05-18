

<?php

include'fetch.php';

$table = json_decode($var,true);
foreach($table as $item)

 {

        echo " <tr style='height: 70px;text-align: center;'>
  <th class='pt-5' style='text-align: center;font-size:1.2vh;' scope='row'>" .$item['sn']. "</th>
  <td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
  letter-spacing: 0px; '>" . $item['refferal_programme_name']. "</td>
  <td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
  letter-spacing: 0px;'>" . '$' . $item['Total_revenue']. "</td>
</tr>";
    }  

?>
