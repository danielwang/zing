<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PageUp Concepts Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="daniel.wang" >
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    
    <link href="<?php echo($resURL)?>../gel/sg/dist/css/pageup.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet/less" type="text/css" href="<?php echo($resURL) ?>css/main.less" />
    <!-- apps css -->
    <?php if($pageClass != null) { 
       echo '<link rel="stylesheet/less" type="text/css" href="'.$resURL.'css/apps.less" />';
    }?>
    <!-- LESS.js -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    <!-- Fontawesome -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
    <!-- Google font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>  
    <!-- custom script -->
    <script src="<?php echo($resURL) ?>js/custom.js"></script> 
</head>
<body class="<?php echo($pageClass)?>">

    