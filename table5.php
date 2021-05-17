
<?php
include 'connection.php';

if(isset($_POST["limit"], $_POST["start"]))
{
    $sql = "SELECT * FROM customer ORDER BY Sn ASC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
    $result6 = mysqli_query($conn, $sql);
   

    while ($row = mysqli_fetch_assoc($result6)) {

        echo " <tr style='height: 70px;text-align: center;'>
     <th class='pt-5' style='text-align: center;font-size:1.2vh;' scope='row'>" . $row['Sn'] . "</th>
    <td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
    letter-spacing: 0px; '>" . $row['Refferal_Programme_name'] . "</td>
    <td class='pt-5'><button type='button' style='border-radius:12px;border:none;box-shadow: 0px 3px 10px #00000047; width:70px; background-color: #F3BB03; color: white; border-color: #F3BB03;' class='btn-sm'>Edit</button></td>
            </tr>";
    }
}    

?>
