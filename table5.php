
<?php
include'fetch.php';

$table = json_decode($var,true);
foreach($table as $item)

  {

        echo " <tr style='height: 70px;text-align: center;'>
     <th class='pt-5' style='text-align: center;font-size:1.2vh;' scope='row'>" . $item['sn'] . "</th>
    <td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
    letter-spacing: 0px; '>" .  $item['refferal_programme_name'] . "</td>
    <td class='pt-5'><button type='button' style='border-radius:12px;border:none;box-shadow: 0px 3px 10px #00000047; width:70px; background-color: #F3BB03; color: white; border-color: #F3BB03;' class='btn-sm'>Edit</button></td>
            </tr>";
    
}    

?>
