<?php
    $codeid = $_GET['codeid'];

    $date = new DateTime();
    $formatDate =  $date->format('Y-m-d H:i:s') . "\n";

?>

<!DOCTYPE html>
<html>
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Your page title here :)</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">


</head>
<body>

    <div class="container">
        <div class="row">
        <h1>Fast Report Tool</h1>
            <div class="six columns">

            <form method="post" action="https://wt-naveen-malhotra28-gmail-com-0.sandbox.auth0-extend.com/localexpressapp/updateInfo"> <!---->
                <p>QR Code id: <?php echo $codeid;?></p>
                <input name="codeid" value="<?php echo $codeid; ?>" type="hidden">
                Employee ID:<br>
                <input type="text" value="">
                <p>Scan time: <?php echo $formatDate;?>.</p>
                <input name="startscan" value="<?php echo $formatDate; ?>" type="hidden">
                <input name="endscan" value="" type="hidden">
                What are you reporting:<br>
                <input type="radio" name="label" value="Missing Item"> Missing Item <br>
                <input type="radio" name="label" value="Hazard"> Hazard <br>
                <br>
                Enter Remarks:<br>
                <textarea type="text" name="comments" value="Remarks"></textarea>
                <br><br>
                <input type="submit" value="Submit">
            </form>
            </div>
        </div>
    </div>  


</body>
</html>
