<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <title>3.2 - Linear scales</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom styling -->
    <link rel="stylesheet" href="css/style.css">
<style>
    
    #container {
        margin-top: 20px;
    }
    #container .row{
        border-radius: 10px;

        position: relative;
        margin: 0 auto;
        background-color: #222;
        width: 420px;
        height: 350px;
    
    }
    svg{
        padding: 10px;
        border: 3px solid #222;
        border-radius: 7px;

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


