<?php
session_start();
$name=$_SESSION['username']??'Guest';


 ?>

<head>
	<title>Ninja Pizza</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
	  .brand{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #cbb09c !important;
  	}
  	form{
  		max-width: 460px;
  		margin: 20px auto;
  		padding: 20px;
  	}
    .pizza{
      width: 100px;
      margin: 40px auto -30px;
      display: block;
      position: relative;
      top: -30px;
    }
		.i{

			position: relative !important;
			right: -30px !important;
		}
		footer .support{
			position: fixed;
			bottom: 0px;
			left: 12px;
			bottom: 0px;
			border-radius: 8px 8px 0px 0px;


		}
		footer .Complaints{
			position: relative !important;
			left: 10px !important;
			text-decoration: none !important;
			color: white;
		}
		/* .row{
			display: flex !important;
			flex-basis: 200px !important;
			flex-wrap: wrap !important;


		} */
		/* .card-content{

			height:200px !important;
			/* overflow: auto !important ; */
		} */
  </style>
</head>
<body class="grey lighten-4">
	<nav class="white z-depth-0">
    <div class="container">
      <a href="index.php" class="brand-logo brand-text">Ninja Pizza</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
				<li class="	grey-text ">Hello <?php echo ($name); ?></li>
        <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
      </ul>
    </div>
  </nav>
