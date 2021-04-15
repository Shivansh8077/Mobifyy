<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Demo Website</title>
    <style>
        table
        {
            width:50%;
            margin: 5px;
            border: 5px solid red;
            padding: 2px;
            padding-bottom: 15px;
            margin: 30px;
            border-collapse: collapse;
        }
        th,td
        {
            padding: 2px;
            border: 2px solid purple;
            height: 20px;
        }
        th
        {
            text-align:left;
            background-color: yellow;
            color: grey;
        }
        td
        {
            color:red;
            text-align:left;
            background-color: pink;
        }
    </style>
    <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
</head>
<body style="background: #ffe2ee;background-image: url(https://s3.ap-south-1.amazonaws.com/hsdreams1/pins/2019/04/big/97e7111dedf9744cdd3023cec7575e6d.jpeg);image-orientation: revert;height: fit-content;">
<div>
    <h1 style="background-color:#373737;color: white;text-align: center;padding: 20px"><?php echo "This is my Demo Website, It demonstrates the use of ECHO and print functions using PHP" ?></h1>
</div>

<div class="row">
    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <h3>SIGN UP AND CLICK SUBMIT</h3>
            <form method="post" action="">
                <input type="text" name="name"     placeholder="Name" class="form-control form-group input-lg" >
                <input type="text" name="city"     placeholder="City" class="form-control form-group input-lg">
                <button class="btn btn-default btn-primary btn-lg">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php

$name =$_POST["name"];
$city = $_POST["city"];


echo  "<span style='color: white; font-size: 30px; background: black;margin-left: 450px'>Welcome ${name}</span><br>
        <span style='margin-left: 450px;background: black;color: white; font-size: 30px;'> You are from ${city}</span>";
?>

//Now-doc Syntax
<?php
$shiv=<<<'mystring'
My name is Shivan''s/h S?h,a)ar%M@a ..$name 
mystring;
echo $shiv;

?>
//heredoc
<?php
$shiv=<<<"mystring"
My name is Shivan''s/h S?h,a)ar%M@a .. $name
mystring;
echo $shiv;

?>
</body>
<div style="margin: 80px;>
<div style=" background-color: lightblue; margin-bottom: 60px;">
    <marquee direction:"right"> <h1 style="color:purple;margin-left: 500px;font-weight: bolder;font-size: 40px;font-family: 'Droid Sans Mono Slashed';background: #8aff07;margin-left: 400px"><?php echo"Messi relocated to Spain" ?></h1> </marquee>
</div>
<marquee direction"right">
<h1 style="background: transparent;color: navy;margin-left: 60px;font-weight: bolder;font-family: Algerian;font-size: 50px"><?php echo"LEONEL MESSI" ?></h1>
<a href="https://en.wikipedia.org/wiki/Lionel_Messi"> <img src="https://www.fcbarcelonanoticias.com/uploads/s1/11/96/73/5/messi-equipos-quieren.jpeg" alt="Leo Messi" ;height=200px; width=400px ;margin="00"px; border="20px"; padding="250px 250px 250px 250px"; style="float: left" ></a>

</marquee>
<p style="font-size:25px; margin-top:15px;font-weight: bolder;color: black;background: #8aff07"> Three successful seasons followed, with 6 <a href="https://en.wikipedia.org/wiki/Ballon_d%27Or"> Ballons d'Or</a>, making him the first player to win the award four times. During the 2011–12 season, he set the La Liga and European records for most goals scored in a single season, while establishing himself as Barcelona's all-time top scorer. The following two seasons, Messi finished second for the Ballon d'Or behind Cristiano Ronaldo (his perceived career rival), before regaining his best form during the 2014–15 campaign, becoming the all-time top scorer in La Liga and leading Barcelona to a historic second treble, after which he was awarded a fifth Ballon d'Or in 2015. Messi assumed the captaincy of Barcelona in 2018, and in 2019 he secured a record sixth Ballon d'Or.</p>
<div style="background-color:transparent; color: white">
    <h2 style="margin-top: 50px;margin-left: 30px;background: yellow;width: fit-content"> <i><h2 style="color: black">About Messi</h2></i> </h2>
    <marquee direction"left">
    <table>
        <tbody>
        <tr>
            <th>Clubs</th>
            <th>Goals</th>
            <th>Assists</th>
        </tr>
        <tr><td>Man Utd</td><td>10</td><td>5</td></tr>
        <tr><td>Real Madrid</td><td>50</td><td>10</td></tr>
        </tbody>
    </table>
    </marquee>
</div>
<div style="font-weight: bolder; text-align: center"><h2>To know more about messi click </h2><a href="https://en.wikipedia.org/wiki/Lionel_Messi">Here</a> </div>
<div style="font-weight: bolder; text-align: center;"><h2>Or click on his image above.</h2></div>
</div>
</body>
</html>