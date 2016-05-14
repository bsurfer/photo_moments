<?php
if(isset($_POST['btn-upload']))
{
     $pic = rand(1000,100000)."-".$_FILES['pic']['name'];
    $pic_loc = $_FILES['pic']['tmp_name'];
     $folder="images/";
     if(move_uploaded_file($pic_loc,$folder.$pic))
     {
        ?><script>alert('Successfully uploaded');</script><?php
     }
     else
     {
        ?><script>alert('Error while uploading file');</script><?php
     }
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
  <!--[if IE 7]>
  <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
      <!--[if gt IE 8]>
      <!--> <html class="no-js"> <!--<![endif]-->
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <title>
	    Photo Upload</title>
	  <meta name="description" content="Photo upload">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	  <link rel="stylesheet" href="css/main.css">
	  <link rel="stylesheet" href="css/iconset.css">
	</head>
	<body>
	  <header>
	  <a href="https://www.linkedin.com/in/betoalves">
	    <i class="icon-coverflow_line	icon2x"></i></a>
	  </header>
	  <section class="first_container">
	  <h2>
	    Upload your photo</h2>
	  <form id="upload" action="" method="post" enctype="multipart/form-data">
	      <input type="file" name="pic" />
	    <button type="submit" name="btn-upload">
	      <i class="icon-upload " ></i> Upload</button>
	  </form>
	  </section>
	  <footer>
	  <!--<div class="center txt-center">
	    <h1>
	      Thank you</h1>
	    <h2>
	      Hope you enjoyed</h2>
	  </div>-->
	  <div class="legal">
	    <strong>
	      Copyright  © 2016 Beto</strong>
	    <span>
	      <a href="https://github.com/bsurfer">
		<i class="icon-git icon2x"></i></a>
	      <a href="https://www.linkedin.com/in/betoalves">
		<i class="icon-linked_in icon2x"></i></a>
	      <a href="https://betorion.wordpress.com/">
		<i class="icon-vector_pen icon2x"></i></a>
	      <a href="mailto:beto.alves.f@gmail.com">
		<i class="icon-at icon2x"></i></a>
	    </span>
	    </footer>
	  </body>
	</html>
