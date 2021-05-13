<?php
include 'backend.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?arrow_forward_ios">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <title>Assignment 1</title>
</head>

<body>

    <nav class="nav nav1 sticky-top" style="height: 50px;">
        <button class="btn mx-4"><i class="fa fa-bars"></i></button>
        <div class="justify-content-center icon1" style="margin:auto;">
            <img style="height: 45px;" class="img-fluid img-responsive" src="./icon1.png" alt="">
        </div>


        <div class="justify-content-end" style="align-items:center;">
            <div class=" nav-item notify-icon">
                <img id="notificationbell" style="height:18px;" src="./notifiy-icon.png" alt="">
                <img id="questionicon" src="./quest-icon.png" alt="">
                <div class="dropdown" id="dpt">
                    <a style="font: normal normal normal 14px/28px Roboto;
                    letter-spacing: 0px;
                    color: #000000;
                    opacity: 1;" href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="dpd">Lara
                            Erickson</span></a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                    </div>
                    <img style="height:25px;" src="./profile.png" alt="">
                </div>

            </div>
        </div>
    </nav>
       <div class="container px-3">
       <div class="container mt-5 d-flex justify-content-end">
           <div class="box card1 d-flex justify-content-start align-items-center" style="width:24%;min-width:17%; height:3.5vw;min-height:3vh;">
           <button type="button" style="background-color: #F1F1F1;border:none; border-color: white;
        box-shadow: 0px 3px 6px #00000029 ;position:relative; display:inline;height:1.5vw;width:1.5vw;min-height:1.5vh;min-width:1.5vh;border-radius:100%;
         
        opacity: 1;" class="d-flex justify-content-center align-items-center ml-3"><i style="font-size:0.7vw;color: #514F48; font-weight:550; " class='fas fa-plus'></i></button>
        
         <span style="display:inline;font-size:0.9vw;margin:auto;color:white">Create New Referral Program</span>

        </div>
       </div>
       </div>

    <div class="container my-4">
        <div id="carouselExampleLight" class="carousel carousel-warning slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators pb-2">
                <button style="width:1.2vh;
              height:1.2vh;
              border-radius:100%;" type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="0" class="active mx-1" aria-current="true" aria-label="Slide 1"></button>
                <button style="width:1.2vh;
              height:1.2vh;
              border-radius:100%;" type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="1" class="mx-1" aria-label="Slide 2"></button>
                <button style="width:1.2vh;
              height:1.2vh;
              border-radius:100%;" type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">

                    <div class="box d-flex justify-content-center align-items-center" style="margin-top:20px;padding-top:4%;margin-bottom:20px;z-index:initial;">
                        <div class="row" id="slide1" style=" z-index:-1;background: #F2F2F2 0% 0% no-repeat padding-box;
                    box-shadow: 0px 3px 15px #0000003D;
                   border-radius:14px;opacity: 1;height:11vw;min-height:6vh; width:80%">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img class="img-fluid" style="margin-left:5%;position:relative; bottom:50%;" src="./protip1.png" alt="" srcset="">
                            </div>
                            <div class="col-8 d-flex justify-content-start align-items-center">
                                <div class="row" id="row-text" style="position:relative;bottom:17%;">
                                    <h3 style="font-size:1.6vw;font-weight:bold;font-family:Roboto; margin:auto;
                                 letter-spacing: 0px;
                                color: #272727; 
                                   opacity: 1;">Pro tip 1#</h3>
                                    <p style="font-size:0.9vw;
                                    letter-spacing: 0px;
                                      color: #272727;
                                      font-weight:560;
                                      font: normal normal medium 20px/26px Roboto;
                                      margin-top:2%;
                                     opacity: 1;">A/B Test Your Referral Program. Start Creating new Referral Program to find out which referral program strategy brings most of the revenue to your Business.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="4000">

                    
                <div class="box d-flex justify-content-center align-items-center" style="margin-top:20px;padding-top:4%; margin-bottom:20px;z-index:initial;">
                        <div class="row" id="slide2" style=" z-index:-1;background: #455A64 0% 0% no-repeat padding-box;
                    box-shadow: 0px 3px 15px #0000003D;
                   border-radius:14px;opacity: 1;height:11vw;min-height:6vh; width:80%">
                            <div class="col-4 d-flex justify-content-center">
                                <img class="img-fluid" style="margin-left:5%;position:relative; bottom:50%;" src="./protip2.png" alt="" srcset="">
                            </div>
                            <div class="col-8 d-flex justify-content-start align-items-center">
                                <div class="row" id="row-text" style="position:relative;bottom:17%;">
                                    <h3 style="font-size:1.5vw;font-weight:bold;font-family:Roboto; margin:auto;
                                 letter-spacing: 0px;
                                 color:white;
                                   opacity: 1;">Pro tip 2#</h3>
                                    <p style="font-size:0.9vw;font: normal normal medium 20px/26px Roboto;
                                    letter-spacing: 0px;
                                    color:white;
                                    margin-top:2%;
                                
                                     opacity: 1;">A/B Test Your Referral Program. Start Creating new Referral Program to find out which referral program strategy brings most of the revenue to your Business.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                 
                <div class="box d-flex justify-content-center align-items-center" style="margin-top:20px; margin-bottom:20px;padding-top:4%;z-index:initial;">
                        <div class="row" id="slide3" style=" z-index:-1;background: #739AF0 0% 0% no-repeat padding-box;
                    box-shadow: 0px 3px 15px #0000003D;
                   border-radius:14px;opacity: 1;height:11vw;min-height:6vh;width:80%">
                            <div class="col-4 d-flex justify-content-center">
                                <img class="img-fluid" style="margin-left:5%;position:relative; bottom:50%;" src="./protip3.png" alt="" srcset="">
                            </div>
                            <div class="col-8 d-flex justify-content-start align-items-center">
                                <div class="row" id="row-text" style="position:relative;bottom:17%;">
                                    <h3 style="font-size:1.5vw;font-weight:bold;font-family:Roboto; margin:auto;
                                 letter-spacing: 0px;
                                 color:white;
                                   opacity: 1;">Pro tip 3#</h3>
                                    <p style="font-size:0.9vw;
                                    letter-spacing: 0px;
                                    color:white;
                                    margin-top:2%;
                                    font: normal normal medium 20px/26px Roboto;
                                
                                     opacity: 1;">Customize rewards, decide what an advocate will get referring your Product and What Referred friend will get.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            

                </div>
            </div>
            <button style="color: rgb(255, 255, 66);;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleLight" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button style="color:rgb(255, 255, 66);;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleLight" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container" style="margin-top:10px;">
        <nav class="nav nav-pills slider-tabs">
            <a style="font: normal normal medium 27px/37px Roboto; font-weight: bolder; font-size:18px;background-color: #FFFFFF;
            letter-spacing: 0px;
            color: #707070;
            border-right: 3px solid #e4e2e2;
            opacity: 1;" class="text-sm-center nav-link active" data-toggle="tab" href="#Overview">Overview</a>
            <a style="font: normal normal medium 27px/37px Roboto; font-weight: bolder; font-size:18px; background-color: #FFFFFF;
            letter-spacing: 0px;
            color: #707070;
            opacity: 1; " class="text-sm-center nav-link" data-toggle="tab" href="#analytics">Analytics</a>
            <div class="indicator"></div>
            <div class="hline"></div>

        </nav>


    </div>


    <div class="tab-content">
        <div id="Overview" class="tab-pane fade in active">
            <div class="container my-3">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 my-3">
                        <div class="card" style="box-shadow: 0px 3px 6px #0000002B;
                                border-radius: 23px; background-color: #8DD8A8;width:100%;border:none;">
                            <div class="card-body">
                                <div class="container-sm my-3">
                                    <h4 class="card-title" style="font: normal normal medium 21px/30px Roboto;
                                        letter-spacing: 0px;
                                        font-size:1.4vw;
                                        
                                        clear: both;
                                        color: #FFFFFF;
                                        opacity: 1;">Referal Rate</h4>
                                    <p style="font: normal normal normal 14px/20px Roboto;
                                        letter-spacing: 0px;
                                        font-size:0.9vw;
                                        color: #FFFFFF;
                                        opacity: 1;">In Last 7 days</p>
                                </div>
                                <div class="container-sm">
                                    <img class="img-fluid img-responsive" style=" width:100%;" src="./card-1-image.png" alt="" srcset="">
                                </div>
                                <div class="row d-flex justify-content-end mx-4 my-2">
                                    <button class="btn-sm " style="
                                            background-color:white;
                                            border: none;
                                            position:relative;
                                            width:30%;
                                            min-width:4.5vh;
                                            height:90%;
                                            min-height:0.4vh;
                                            
                                            border-radius:12px;
                                            font: normal normal medium 3px/8px Roboto;
                                            letter-spacing: 0px;
                                            font-weight: bold;
                                             opacity: 1;
                                             font-size:0.6vw;
                                             white-space:nowrap;
                                            color:black;
                                            cursor: pointer;
                                          ">View <i class="fa fa-chevron-right"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6  col-lg-3 my-3">
                        <div class="card" style="border-radius:23px; box-shadow: 0px 3px 6px #0000002B; background-color: #F6BCCA; width:100%;border:none;">
                            <div class="card-body">
                                <div class="container-sm my-3">
                                    <h4 class="card-title" style="font: normal normal medium 21px/30px Roboto;
                                        letter-spacing: 0px;
                                        color: #FFFFFF;
                                        font-size:1.4vw;
                                        
                                        
                                        clear: both;
                                        opacity: 1;">Revenue Rate</h4>
                                    <p style="font: normal normal normal 14px/20px Roboto;
                                        letter-spacing: 0px;
                                        font-size:0.9vw;
                                        color: #FFFFFF;
                                        opacity: 1;">In Last 7 days</p>
                                </div>
                                <div class="container-sm">
                                    <img class="img-fluid img-responsive" style="width:100%;" src="./card-2-image.png" alt="" srcset="">
                                </div>
                                <div class="row d-flex justify-content-end mx-4 my-2">
                                <button class="btn-sm " style="
                                            background-color:white;
                                            border: none;
                                            position:relative;
                                            width:30%;
                                            min-width:4.5vh;
                                            height:90%;
                                            min-height:0.4vh;
                                            
                                            border-radius:12px;
                                            font: normal normal medium 3px/8px Roboto;
                                            letter-spacing: 0px;
                                            font-weight: bold;
                                            white-space:nowrap;
                                             opacity: 1;
                                             font-size:0.6vw;
                                            color:black;
                                            cursor: pointer;
                                          ">View <i class="fa fa-chevron-right"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 my-3">
                        <div class="card" style="box-shadow: 0px 3px 6px #0000002B;
                                border-radius: 23px; background-color: #AEB0E9; width:100%;border:none; ">
                            <div class="card-body">
                                <div class="container-sm my-3">
                                    <h4 class="card-title" style="font: normal normal medium 21px/30px Roboto;
                                        letter-spacing: 0px;
                                        color: #FFFFFF;
                                        font-size: 1.3vw;

                                        clear:both;
                                        opacity: 1;">Conversation</h4>
                                    <p style="font: normal normal normal 14px/20px Roboto;
                                        letter-spacing: 0px;
                                        color: #FFFFFF;
                                        font-size:0.9vw;
                                        opacity: 1;">In Last 7 days</p>
                                </div>
                                <div class="container-sm">
                                    <img class="img-fluid img-responsive" style="width:100%;" src="./card-3-image.png" alt="" srcset="">
                                </div>
                                <div class="row d-flex justify-content-end mx-4 my-2">
                                <button class="btn-sm " style="
                                            background-color:white;
                                            border: none;
                                            position:relative;
                                            width:30%;
                                            min-width:4.5vh;
                                            height:90%;
                                            min-height:0.4vh;
                                            white-space:nowrap;
                                            border-radius:12px;
                                            font: normal normal medium 3px/8px Roboto;
                                            letter-spacing: 0px;
                                            font-weight: bold;
                                             opacity: 1;
                                             font-size:0.67vw;
                                            color:black;
                                            cursor: pointer;
                                          ">View <i class="fa fa-chevron-right"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 my-3 d-flex justify-content-start align-items-center">
                        <div class="row-cols-md-1">
                            <button type="button" style="background-color: #F1F1F1;
                                border-color:#F1F1F1; margin-left:23px;
                            box-shadow: 0px 3px 6px #00000029;
                            border:none;
                            opacity: 1;" class="btn-circle btn-sm d-flex justify-content-center align-items-center"><i style="font-size:17px; color: #707070;" class='fas fa-angle-right'></i></button>
                            <div class="conatiner-sm">
                                <h5 style="font: normal normal bold 12px/17px Roboto;
                                letter-spacing: 0px;
                                color: #3181F8;
                                opacity: 1;">view Analytics</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container my-4">
                <div class="row container-sm my-4">

                    <div class="col-9 col-sm-9 col-md-9 col-lg-9 d-flex justify-content-start align-items-center">
                        <ul class="nav" style="position: relative;">
                            <li class="nav-item d-flex align-items-center"> <img style="height:3vw; margin-right:10px; display: inline;" class="img-fluid img-responsive nav-item" src="./2-row-trophy.png" alt="" srcset=""></li>
                            <li class="nav-item">
                                <h5 style="
                            font: normal normal bold 19px Roboto;
                            letter-spacing: 0px;
                            font-size:2vw;
                            white-space : nowrap;
                            color: #707070;
                            margin-right:10px;
                            opacity: 1;" class="custom-trophy-text-css">All Referral Programs</h5>
                            </li>

                            <li class="nav-item d-flex align-items-center"><button class="d-flex justify-content-start align-items-center display" type="button"><img class="img-fluid img-responsive" style="height:1.7vw;margin:10%;" src="./row-card-image.png" alt="" srcset="">Show in Analytics</button></li>
                        </ul>
                    </div>


                    <div class="col-3 col-sm-3 col-lg-3 d-flex  justify-content-startS align-items-center">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16" style="margin-left:25px;color: #707070; height:1.3vw;min-height:1.6vh;">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg>
                        <h5 id="Download-text" style="font: normal normal normal 19px/25px Roboto;
                            letter-spacing: 0px;
                            color: #707070;
                            opacity: 1;
                            clear: both;
                              margin-left:8px;
                              opacity: 1;"> Download PDF/CSV</h5>
                    </div>

                </div>
            </div>

            <div class="container my-3" id="div-desktop">
                <div class="table-responsive" style="box-shadow: 0px 0px 20px #00000029;
                    border-radius:28px;
                    opacity: 1;">

                    <table class="table">
                        <thead>
                            <tr class="bg-dark text-light" style="height:90px; text-align: center;">
                                <th class="mb-3 pb-5 justify-content-center align-items-center" style="text-align: center;" scope="col ">S.No.</th>
                                <th class="mb-3 pb-5" style="text-align: center;" scope="col">Referral Program Name
                                </th>
                                <th class="mb-3 pb-5" style="text-align: center;" scope="col">Customers</th>
                                <th class="mb-3 pb-5" style="text-align: center;" scope="col">Orders Placed using
                                    Coupon
                                </th>
                                <th class="mb-3 pb-5" style="text-align: center;" scope="col">Total Revenue</th>
                                <th class="mb-3 pb-5" style="text-align: center;" scope="col">Audience Weightage
                                </th>
                                <th class="mb-3 pb-5" style="text-align: center;" scope="col">Preview/Settings</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            while ($row = mysqli_fetch_assoc($result)) {

                                echo "<tr style='height: 80px;text-align: center;'>
                               <th class='pt-5' style='text-align: center;' scope='row'>" . $row['Sn'] . "</th>
                               <td class='pt-5' style='text-align: center;font-weight:550; '>" . $row['Refferal_Programme_name'] . "</td>
                               <td class='pt-5' style='text-align: center;font-weight:550;'>" . $row['Customers_no'] . "</td>
                               <td class='pt-5' style='text-align: center;font-weight:550;'>" . $row['Order_placed'] . "</td>
                               <td class='pt-5' style='text-align: center;font-weight:550;'>" . '$' . $row['Total_revenue'] . "</td>
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

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container my-3" id="div-mobile">
                <div class="table-responsive my-3" style="box-shadow: 0px 3px 20px #00000029;
                    border-radius:28px;
                    opacity: 1;">

                    <table class="table">
                        <thead>
                            <tr class="bg-dark text-light" style="height:90px; text-align: center;">
                                <th class="mb-3 pb-5 justify-content-center align-items-center" style="text-align: center;" scope="col ">S.No.</th>
                                <th class="mb-3 pb-5" style="text-align: center;" scope="col">Referral Program Name
                                </th>
                                <th class="mb-3 pb-5" style="text-align: center; border-bottom:4px solid #F3BB03;" scope="col"><span>Customers</span>
                                    <div class="indicator"></div>
                                </th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            while ($row = mysqli_fetch_assoc($result2)) {

                                echo "<tr style='height: 80px;text-align: center;'>
                                <th class='pt-5' style='text-align: center;' scope='row'>" . $row['Sn'] . "</th>
                                <td class='pt-5' style='text-align: center;font-weight:550; '>" . $row['Refferal_Programme_name'] . "</td>
                                <td class='pt-5' style='text-align: center;font-weight:550;'>" . $row['Customers_no'] . "</td>
                                </tr> ";
                            }

                            ?>


                        </tbody>
                    </table>
                </div>

                <div class="table-responsive my-3" style="box-shadow: 0px 3px 20px #00000029;
                    border-radius:28px;
                    opacity: 1;">

                    <table class="table">
                        <thead>
                            <tr class="bg-dark text-light" style="height:90px; text-align: center;">
                                <th class="mb-3 pb-5 justify-content-center align-items-center" style="text-align: center;" scope="col ">S.No.</th>
                                <th class="mb-3 pb-5" style="text-align: center;" scope="col">Referral Program Name
                                </th>
                                <th class="mb-3 pb-5" style="text-align: center;border-bottom:4px solid #F3BB03;" scope="col">Ordered Placed using
                                    Coupon</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            while ($row = mysqli_fetch_assoc($result3)) {

                                echo " <tr style='height: 80px;text-align: center;'>
                              <th class='pt-5' style='text-align: center;' scope='row'>" . $row['Sn'] . "</th>
                              <td class='pt-5' style='text-align: center;font-weight:550; '>" . $row['Refferal_Programme_name'] . "</td>
                              <td class='pt-5' style='text-align: center;font-weight:550;'>" . $row['Order_placed'] . "</td>
                          </tr>";
                            }

                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="table-responsive my-3" style="box-shadow: 0px 0px 0px #00000029;
                    border-radius:28px;
                    opacity: 1;">
                    <table class="table">
                        <thead>
                            <tr class="bg-dark text-light" style="height:90px; text-align: center;">
                                <th class="mb-3 pb-5 justify-content-center align-items-center" style="text-align: center;" scope="col ">S.No.</th>
                                <th class="mb-3 pb-5" style="text-align: center;" scope="col">Referral Program Name
                                </th>
                                <th class="mb-3 pb-5" style="text-align: center;border-bottom:4px solid #F3BB03;" scope="col">Total Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            while ($row = mysqli_fetch_assoc($result4)) {

                                echo " <tr style='height: 80px;text-align: center;'>
                              <th class='pt-5' style='text-align: center;' scope='row'>" . $row['Sn'] . "</th>
                              <td class='pt-5' style='text-align: center;font-weight:550; '>" . $row['Refferal_Programme_name'] . "</td>
                              <td class='pt-5' style='text-align: center;font-weight:550;'>" . '$' . $row['Total_revenue'] . "</td>
                          </tr>";
                            }

                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="table-responsive my-3" style="box-shadow: 0px 3px 20px #00000029;
                    border-radius:28px;
                    opacity: 1;">

                    <table class="table">
                        <thead>
                            <tr class="bg-dark text-light" style="height:90px; text-align: center;">
                                <th class="mb-3 pb-5 justify-content-center align-items-center" style="text-align: center;" scope="col ">S.No.</th>
                                <th class="mb-3 pb-5" style="text-align: center;" scope="col">Referral Program Name
                                </th>
                                <th class="mb-3 pb-5" style="text-align: center;border-bottom:4px solid #F3BB03;" scope="col">Audience Weightage
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr style="height: 80px;text-align: center;">
                                <th class="pt-5" style="text-align: center;" scope="row">1.</th>
                                <td class="pt-5" style="text-align: center;font-weight:550; ">My Referal mobile 1
                                </td>
                                <td class="pt-5"><button type="button" style="border-radius:12px;border-color:#AEB0E9;border: none; color:white; background-color: #AEB0E9; width:80px;" class="btn-sm justify-content-center">50%<i style="font-size:12px ;margin-left:10px;margin-right:-17px;" class='fas'>&#xf107;</i></button></td>
                            </tr>
                            <tr style="height: 80px;text-align: center;">
                                <th class="pt-5" style="text-align: center;" scope="row">2.</th>
                                <td class="pt-5" style="text-align: center;font-weight:550;">My Referal Program 2
                                </td>
                                <td class="pt-5"><button type="button" style="border-radius:12px;border-color:#AEB0E9;border: none; color:white; background-color: #AEB0E9; width:80px;" class="btn-sm justify-content-center">50%<i style="font-size:12px ;margin-left:10px;margin-right:-17px;" class='fas'>&#xf107;</i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive  my-3" style="box-shadow: 0px 3px 20px #00000029;
                    border-radius:28px;
                    opacity: 1;">
                    <table class="table">
                        <thead>
                            <tr class="bg-dark text-light" style="height:90px; text-align: center;">
                                <th class="mb-3 pb-5 justify-content-center align-items-center" style="text-align: center;" scope="col ">S.No.</th>
                                <th class="mb-3 pb-5" style="text-align: center;" scope="col">Referral Program Name
                                </th>
                                <th class="mb-3 pb-5" style="text-align: center;border-bottom:4px solid #F3BB03;border-left:10%; border-right:10%; " scope="col">Preview/Setting</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="height: 80px;text-align: center;">
                                <th class="pt-5" style="text-align: center;" scope="row">1.</th>
                                <td class="pt-5" style="text-align: center;font-weight:550; ">My Referal mobile 1
                                </td>
                                <td class="pt-5"><button type="button" style="border-radius:12px;border:none;box-shadow: 0px 3px 10px #00000047; width:70px; background-color: #F3BB03; color: white; border-color: #F3BB03;" class="btn-sm">Edit</button></td>
                            </tr>
                            <tr style="height: 80px;text-align: center;">
                                <th class="pt-5" style="text-align: center;" scope="row">2.</th>
                                <td class="pt-5" style="text-align: center;font-weight:550;">My Referal Program 2
                                </td>
                                <td class="pt-5"><button type="button" style="border-radius:12px;border:none;box-shadow: 0px 3px 10px #00000047; width:70px; background-color: #F3BB03; color: white; border-color: #F3BB03;" class="btn-sm">Edit</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container my-5">
                <div class="d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="analytics" class="tab-pane fade">
            <div class="container my-4">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mx-0 d-flex justify-content-center">
                        <img class="img-fluid img-responsive" src="./ticket-1.png" alt="" srcset="">
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mx-0 d-flex justify-content-center ">
                        <img class="img-fluid img-responsive" src="./ticket-2.png" alt="" srcset="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mx-0 d-flex justify-content-center">
                        <img class="img-fluid img-responsive" src="./ticket-3.png" alt="" srcset="">
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mx-0s d-flex justify-content-center">
                        <img class="img-fluid img-responsive" src="./ticket-4.png" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="container">

            </div>

        </div>

    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).on('click', '.slider-tabs .nav-link', function() {
            handleTabChange($(this));
        });

        handleTabChange($('.slider-tabs .active'));

        function handleTabChange(tab) {
            var nav = tab.closest('.nav');
            $('.indicator', nav).css({
                width: tab.outerWidth(),
                left: tab.position().left
            });
            tab.siblings().removeClass('active');
            tab.addClass('active');
        }
    </script>


    <script>
        function openCity(evt) {
            var i, x, tablinks;

            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-border-yellow", "");
            }
            evt.currentTarget.firstElementChild.className += " w3-border-yellow";
        }
    </script>


    <script>
        function setColor() {
            var count = 1;
            var property = document.getElementById('change');
            if (count == 0) {
                property.style.backgroundColor = "blue"
                count = 1;
            } else {
                property.style.backgroundColor = "yellow"
                count = 0;
            }

        }
    </script>



    <script>
        $('.carousel').carousel();
    </script>


</body>

</html>