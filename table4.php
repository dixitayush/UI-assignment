
<?php

include'fetch.php';

$table = json_decode($var,true);
foreach($table as $item)

  {

        echo " <tr style='height: 70px;text-align: center;'>
     <th class='pt-5' style='text-align: center;font-size:1.2vh;' scope='row'>" . $item['sn'] . "</th>
    <td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
    letter-spacing: 0px; '>" . $item['refferal_programme_name'] . "</td>
    <td class='pt-5'><button type='button' style='border-radius:12px;border-color:#AEB0E9;border: none; color:white; background-color: #AEB0E9; width:80px;' class='btn-sm justify-content-center'>50%<i style='font-size:12px ;margin-left:10px;margin-right:-17px;' class='fas'>&#xf107;</i></button></td>
            </tr>";
    }
   

?>
