
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
   
var perrow = 1,
html = "<table><tr>";


for (var i = 0; i < myObj.length; i++) {
html += `<th class='pt-5' style='text-align: center;font-size:1.2vh' scope='row'>${myObj[i].Sn}</th><td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
letter-spacing: 0px;'>${myObj[i].Refferal_Programme_name}</td><td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
letter-spacing: 0px;'>${myObj[i].Customers_no}</td>`;


var next = i + 1;
if (next%perrow==0 && next!=myObj.length) {
html += "</tr><tr>";
} 
}
html += "</tr></table>";
document.getElementById("table1").innerHTML = html;

var perrow = 1,
html = "<table><tr>";


for (var i = 0; i < myObj.length; i++) {
html += `<th class='pt-5' style='text-align: center;font-size:1.2vh' scope='row'>${myObj[i].Sn}</th><td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
letter-spacing: 0px;'>${myObj[i].Refferal_Programme_name}</td><td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
letter-spacing: 0px;'>${myObj[i].Order_placed}</td>`;


var next = i + 1;
if (next%perrow==0 && next!=myObj.length) {
html += "</tr><tr>";
}
}
html += "</tr></table>";
document.getElementById("table2").innerHTML = html;


var perrow = 1,
html = "<table><tr>";


for (var i = 0; i < myObj.length; i++) {
html += `<th class='pt-5' style='text-align: center;font-size:1.2vh' scope='row'>${myObj[i].Sn}</th><td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
letter-spacing: 0px;'>${myObj[i].Refferal_Programme_name}</td><td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
letter-spacing: 0px;'>${myObj[i].Total_revenue}</td>`;


var next = i + 1;
if (next%perrow==0 && next!=myObj.length) {
html += "</tr><tr>";
}
}
html += "</tr></table>";
document.getElementById("table3").innerHTML = html;


var perrow = 1,
html = "<table><tr>";


for (var i = 0; i < myObj.length; i++) {
html += `<th class='pt-5' style='text-align: center;font-size:1.2vh' scope='row'>${myObj[i].Sn}</th><td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
letter-spacing: 0px;'>${myObj[i].Refferal_Programme_name}</td><td class='pt-5'><button type='button' style='border-radius:12px;border-color:#AEB0E9;border: none; color:white; background-color: #AEB0E9; width:80px;' class='btn-sm justify-content-center'>50%<i style='font-size:12px ;margin-left:10px;margin-right:-17px;' class='fas'>&#xf107;</i></button></td>`;


var next = i + 1;
if (next%perrow==0 && next!=myObj.length) {
html += "</tr><tr>";
}
}
html += "</tr></table>";
document.getElementById("table4").innerHTML = html;

var perrow = 1,
html = "<table><tr>";


for (var i = 0; i < myObj.length; i++) {
html += `<th class='pt-5' style='text-align: center;font-size:1.2vh' scope='row'>${myObj[i].Sn}</th><td class='pt-5' style='text-align: center;font-weight:550;font-size:1.2vh;font: normal normal medium 12px/16px Roboto;
letter-spacing: 0px;'>${myObj[i].Refferal_Programme_name}</td><td class='pt-5'><button type='button' style='border-radius:12px;border:none;box-shadow: 0px 3px 10px #00000047; width:70px; background-color: #F3BB03; color: white; border-color: #F3BB03;' class='btn-sm'>Edit</button></td>`;


var next = i + 1;
if (next%perrow==0 && next!=myObj.length) {
html += "</tr><tr>";
}
}
html += "</tr></table>";
document.getElementById("table5").innerHTML = html;


}
};
xmlhttp.open("GET", "jason.php", true);
xmlhttp.send();


