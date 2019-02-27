<?php
echo $_POST["codeid"];
echo $_POST["startscan"];
echo $_POST["endscan"];
echo $_POST["label"];
echo $_POST["comments"];
print_r($_POST);

$url = 'https://wt-naveen-malhotra28-gmail-com-0.sandbox.auth0-extend.com/localexpressapp/updateInfo';

$params = array(
    'codeid' => $_POST["codeid"],
    'startscan' => $_POST["startscan"],
    'endscan' => $_POST["endscan"],
    'label' => $_POST["label"],
    'comments' => $_POST["comments"]
);

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $params);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );

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
        <br>
        <h1 >Success</h1>
            
        </div>
    </div>  


</body>
</html>
