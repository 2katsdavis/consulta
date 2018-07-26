<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <title>Linear scales R</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom styling -->
    <link rel="stylesheet" href="css/style1.css">
<style>
    
 
    svg{
        border-radius: 7px;
        background-color: #fff;
    }
    #chart-area svg rect:hover{
    stroke: #fff;
    stroke-width:3px;
    }
</style>
</head>

<body>
    <!-- Bootstrap grid setup -->
    <div id="container">
        <div class="row">
            <div id="chart-area"></div>
        </div>
    </div>

<!-- External JS libraries -->
<script src="js/d3.min.js"></script>
<!-- Custom JS -->
<?php 
include_once "js/main2.php";
 ?>

</body>
</html>


