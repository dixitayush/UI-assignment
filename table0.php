<?php
include'fetch.php';

$table = json_decode($var,true);
foreach($table as $item)


{
echo "<tr style='height: 80px;text-align: center;'>
<th class='pt-5' style='text-align: center;font: normal normal medium 15px/20px Roboto;
letter-spacing: 0px;' scope='row'>" . $item['sn']. "</th>
<td class='pt-5' style='text-align: center;font-weight:550;font: normal normal medium 15px/20px Roboto;
letter-spacing: 0px; '>" . $item['refferal_programme_name']. "</td>
<td class='pt-5' style='text-align: center;font-weight:550;font: normal normal medium 15px/20px Roboto;
letter-spacing: 0px;'>" . $item['customer_no'] . "</td>
<td class='pt-5' style='text-align: center;font-weight:550;font: normal normal medium 15px/20px Roboto;
letter-spacing: 0px;'>" . $item['Order_placed'] . "</td>
<td class='pt-5' style='text-align: center;font-weight:550;font: normal normal medium 15px/20px Roboto;
letter-spacing: 0px;'>" . '$' . $item['Total_revenue']. "</td>
<td class='pt-5'><button type='button'
        style='border-radius:12px;border-color:#AEB0E9;border: none; color:white; background-color: #AEB0E9; width:80px;'
        class='btn-sm justify-content-center'>50%<i
            style='font-size:12px ;margin-left:10px;margin-right:-17px;'
            class='fas'>&#xf107;</i></button></td>
<td class='pt-5'><button type='button'
        style='border-radius:12px;border: none;box-shadow: 0px 3px 10px #00000047; width:70px; background-color: #F3BB03; color: white; border-color: #F3BB03;'
        class='btn-sm'>Edit</button></td>
</tr>";
}



?>