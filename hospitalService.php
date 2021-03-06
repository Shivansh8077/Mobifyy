<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANSERV | Services | Hospital Service</title>

    <!-- Custom Bootstrap  -->
    <link rel="stylesheet" href="css/houseServices.css">

    <!-- Bootstrap CDN  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awsome  -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


</head>
<body>

    <!-- Navigation Bar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navigationBar">
    
        <a class="navbar-brand" href="#">SANSERV</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Testimonials</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">APPOINTMENT</button>
            </form>
        </div>
    </nav>

    <!-- Content Part  -->
    <section class="background-img">
        <div class="row">
           
            <div class="col-lg-2 menu-bar">
                <div id="navigationBox" >
                    <h4 id="head">Quick Links</h4>
                    <ul>
                        <li class="py-4 my-4"><a href="houseService.html"> House Sanitization </a></li>
                        <li class="py-4 my-4"><a href="socityService.html">Socity Sanitization </a></li>
                        <li class="py-4 my-4"><a href="officeService.html">Office Sanitization </a></li>
                        <li class="py-4 my-4"><a href="wareHouse.html">Warehouse Sanitization </a></li>
                        <li class="py-4 my-4"><a href="schoolService.html">School Sanitization </a></li>
                        <li class="py-4 my-4"><a href="hospitalService.html">Hospital Sanitization </a></li>
                        <li class="py-4 my-4"><a href="hotelService.html">Hotel Sanitization </a></li>
                    </ul>
                </div>
            </div>
           
            <div class="col-lg-10 service-tag">
                
                <h1 id="head1">Services</h1>
                
                <div class="row">
                    <div class="col-lg-6 form-sec">
                        <div id="formBox">
                            <div>
                                <h2 class="text-center">HOSPITAL SERVICE FORM</h2>
                            </div>
                    
                            <div >
                                <form method="post" action="">
                                    
                                    <div class="form-group">
                                        <label> Name </label>
                                        <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Enter Name">
                                    </div>
                    
                                    <div class="form-group">
                                        <label> E-mail </label>
                                        <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter Email ID">
                                    </div>
                    
                                    <div class="form-group">
                                        <label> Mobile Number </label>
                                        <input type="number" name="mobile" autocomplete="off" class="form-control" placeholder="Enter Mobile Number">
                                    </div>

                                    <div class="form-group">
                                        <label> Address </label>
                                        <input type="text" name="address" autocomplete="off" class="form-control" placeholder="Enter Address">
                                    </div>

                                    <div class="form-group">
                                        <label> Contact Time </label>
                                        <input type="text" name="time" autocomplete="off" class="form-control" placeholder="Enter Contact Time">
    
                                    </div>

                                    <div class="form-group">
                                        <label> Appointment Date </label>
                                        <input type="text" name="date" autocomplete="off" class="form-control" placeholder="Enter Appointment Date">
                                    </div>
                    
                                    <!-- <label>House Type : </label>
                                    <div class="form-check form-check-inline ">
                                        <input type="checkbox" class="form-check-input px-3" id="exampleCheck1">
                                        <label class="form-check-label " for="exampleCheck1">1 BHK </label>

                                        <br>

                                        <input type="checkbox" class="form-check-input  pl-3" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck2">2 BHK </label>

                                        <br>

                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck3">3 BHK </label>
                                        
                                        <br>

                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck4"> Other </label>
                                    </div>
                     -->

                                    <label>Comments </label>
                                    <br>
                                    <textarea name="comment" id="" cols="74" ></textarea>

                                    <br>
                                    <button type="submit" name="b1" class="btn btn-secondary">Submit</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 img-sec">
                        <!-- <h1 class="text-center">Image</h1> -->
                        <img src="../images/img2-carousel.jpg" alt="" class="img-fluid mt-5 pt-5" id="image1">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer Section  -->

    <footer class="">

        <section class="sec-1">
            <section class="link1">
                <h2>Categories</h2>

                <ul>
                    <li><a href="#">Sanitization</a></li>
                    <li><a href="#">Pesticides</a></li>
                    <li><a href="#">Disinfection</a></li>    
                
                </ul>
            </section>

            <section class="link2">
                <h2>Quick Links</h2>

                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#"> Contribute  </a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Services</a></li>
                    <!-- <li><a href="#">Disclaimer</a></li> -->
                </ul>
            </section>

            <section class="link3">
                <h2>Contact Us</h2>

                <ul>
                    <li><i class="fa fa-home"></i><span> Uttar Pradesh, India</span></li>
                    <li><i class="fa fa-envelope"></i><span> senserv@gmail.com</span></li>
                    <li><i class="fa fa-phone-square"></i><span> Mobile : 9999999999</span></li>
                    <li><i class="fa fa-facebook-official"></i><a href="#"> senserv </a></li>
                </ul>
            </section>

            <section class="sec-2">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </section>

            
        </section>
        <p class="p-3 bg-dark text-white text-center"> ?? SANSERV | 2020 </p>


    </footer>


    
</body>
</html>


<?php
include 'connection.php';

if(isset($_POST['b1']))
{
    //$roll = $_POST['t1'];
    //$name = $_POST['t2'];
    //$class = $_POST['t3'];
    $name = $_POST['user'];
    $email = $_POST['email'];
    $mob = $_POST['mobile'];
    $address = $_POST['address'];
    $ts = $_POST['time'];
    $ds = $_POST['date'];
    $comments = $_POST['comment'];

    if($name!="" && $email!="" && $mob!="" && $address!="" && $ts!="" && $ds!="" && $comments!="")
    {
    $query = "insert into hospitalservice (name,email,mob,address,ts,ds,comments) values('$name','$email','$mob','$address','$ts','$ds','$comments')";
    $data = mysqli_query($conn,$query) or die (mysqli_error($conn));
        if($data)
        {
            echo "Record Inserted Succesfully";
        }
        else
        {
            echo "Data not Inserted";
        }
}
    else{
    echo "<p style='color:red'> All Fields are required</p>";
}
}
?>