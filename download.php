<?php
    require 'html-builder.php';
?>

<html>
    <head>
        <?php insertHeader("DocDash");?>
        
        <!--Custom CSS -->
        <link href="./css/index.css" rel="stylesheet" type="text/css">
        
        <!-- Bootstrap and font awesome-->
        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="./css/slick-team-slider.css"  rel="stylesheet" type="text/css" />
        <link href="./css/style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <?php insertNav(); ?>
        <div class="jumbotron">
            <h1 class="small" style="text-align:center; color:black"><span class="bold">Doc->Dash </span>Downloads</h1>
        </div>
        <div id="downloadDiv">
            <div class="card" style="margin-left:15%; margin-right:15%; border-radius:20px "><br>
                <div class="container">
                    <span class="label label-info">Please enter the UUID given while uploading the file</span><br>
                <div class="input-group">
                    
                    <span class="input-group-addon" id="basic-addon3">UUID : </span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"/>
                    </div><br>
                    <input class="btn btn-primary" type="submit" value="Download">
                </div><br>
            </div>
        </div>
    </body>
</html>