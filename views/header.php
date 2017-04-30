<html>
  <head>
    <title=""></title>
    <link rel="stylesheet" href= "<?php echo URL; ?>public/css/default.css" />
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-3.2.1.min.js"> </script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"> </script>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <?php
      if (isset( $this->js ))
      {
        foreach ($this->js as $js) {
          echo '<script type="text/javascript" src="' . URL . 'views/'. $js. '"> </script>';
        }
      }
    ?>
  </head>
  <body>
    <div id="header" >
      <?php if ( Session::get('loggedIn') == false ){ ?>
      <a href="<?php echo URL; ?>index"> Index</a>
      <a href="<?php echo URL; ?>help"> Help</a>
      <?php } ?>
      <?php if ( Session::get('loggedIn') == true ){ ?>
        <a href="<?php echo URL; ?>dashboard"> Dashboard</a>
        <a href="<?php echo URL; ?>dashboard/logout"> Logout </a>

        <?php if (Session::get('type') == 'owner'){ ?>
          <a href="<?php echo URL; ?>user"> Users </a>
        <?php }?>

      <?php } else { ?>
        <a href="<?php echo URL; ?>login"> Login</a>
      <?php } ?>

    </div>
    <div id="content" ></div>
  </body>
</html>
