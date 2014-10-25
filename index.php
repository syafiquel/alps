<?php require_once("test2.php"); ?>
<!DOCTYPE <html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/ripples.min.css" rel="stylesheet">
    	<link href="css/material-wfont.min.css" rel="stylesheet">
	</head>
<body>

<div class="btn-group">
        <a href="javascript:void(0)" class="btn btn-default">Anonymous Llama</a>
        <div class="btn-group">
            <a href="javascript:void(0)" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
               --Click Here--
                <span class="caret"></span>
            </a>
            
          <ul class="dropdown-menu">
            <li><?php divisible(); ?></li>  
          </ul>
        </div>
</div>
 	
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/ripples.min.js"></script>
<script src="js/material.min.js"></script>
</body>
</html>