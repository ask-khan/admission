<html>
  <head>
    <title=""></title>
    <link rel="stylesheet" href= "<?php echo URL; ?>public/css/default.css" />
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-3.2.1.min.js"> </script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"> </script>
  </head>
  <body>
    <div id="header" >
      Header
      <a href="<?php echo URL; ?>index"> Index</a>
      <a href="<?php echo URL; ?>help"> Help</a>
      <?php if ( Session::get('loggedIn') == true ){ ?>
        <a href="<?php echo URL; ?>dashboard/logout"> Logout </a>
      <?php } else { ?>
        <a href="<?php echo URL; ?>login"> Login</a>
      <?php } ?>
    </div>
    <div id="content" ></div>
  </body>
</html>
