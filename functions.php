<!DOCTYPE html>
<head></head>
<body style="background: #373737">
<div style="color: white; width: 80%; margin-left: 10%">
    <?php
    echo "<div style='text-align: left;background: #d3c96e;color: black'><h3>Name: Shivansh Sharma</h3>
        <h3>Section: H</h3>
        <h3>Branch : Btech - CSE</h3>
        <h3>Univ Roll No : 181500682</h3>
        <h1 style='text-align: center'>PHP Second Assignment</h1></div>";
    echo "<marquee scrollamount='30'><div><h1 style='text-align: center'>Area Of Circle</h1></div></marquee>";
    $radius = 5;
    $side = 5;
    $height = 5;
    $width = 50;
    echo "<div style='background: black'><h3 style='text-align: center'>The Area of a Circle with radius ' $radius ' is equals to " . $radius * number_format(pow(pi(), 2), 2) . " </h3></div>";
    echo "<div ><h1 style='text-align: center'>Area Of Square</h1></div>";
    echo "<div style='background: black'><h3 style='text-align: center'>The Area of a Square with each side of ' $side ' is equals to " . number_format(pow($side, 2), 2) . " </h3></div>";
    echo "<div><h1 style='text-align: center'>Area Of Rectangle</h1></div>";
    echo "<div style='background: black'><h3 style='text-align: center'>The Area of a Rectangle with Height ' $height ' and Width ' $width ' is equals to " . number_format($width * $height, 2) . " </h3></div>";
    ?>
</div>
</body>
