<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Simple Login with CodeIgniter</title>
   <?php include('rutas_config.php');
   include('rutas_config_js.php'); ?>
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="<?php echo $ruta_estilo ?>bootstrap.css">
     <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
   <link rel="stylesheet" type="text/css" href="<?php echo $ruta_estilo ?>bootstrap-responsive.css">
   <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
 </head>
 <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url(); ?>">Mi proyecto</a>
        </div>
      </div>
    </div>
  <div class='container'>
    <div class='hero-unit'>
      <div class='row'>
        <div class='span4'>
          <img src="<?php echo $logo ?>logo.jpg">
        </div>
        <div class='span4'>
          <h1>Bienvenido!!</h1>
          <p>A este espacio para padres y maestros donde se podra visualizar de una manera rapida e intuitiva las calificaciones de los estudiastes.</p>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='span4'>
        <p> </p>
      </div>
      <div class='span4'>
        <ul class='nav nav-tabs' id='myTab'>
          <li class='active'>
            <a href='#maestro' data-toggle='tab'>Maestro</a>
          </li>
          <li>
            <a href='#papa' data-toggle='tab'>Padre</a>
          </li>
        </ul>
        <div class='tab-content' id='myTabContent'>
          <div class='tab-pane fade active in' id='maestro'>
            <fieldset>
                <?php echo validation_errors(); ?>
                <?php echo form_open('verifyLogin'); ?>
              <label for="username">Username:</label>
              <input type="text" class='span3' size="20" id="username" name="username" value="<?php echo set_value('username'); ?>"/>
              <br/>
              <label for="password">Password:</label>
              <input type="password" class='span3' size="20" id="passowrd" name="password"/>
              <br/>
              <input type="submit" value="Login" class="btn btn-primary"/>
            </form>
        </fieldset>
          </div>
          <div class='tab-pane fade' id='papa'>
            <fieldset>
                <?php echo validation_errors(); ?>
                <?php echo form_open('verifyLogin/checkMat'); ?>
              <label for="matricula">Matricula:</label>
              <input type="text" class='span3' size="20" id="matricula" name="matricula" />
              <br/>
              <input type="submit" value="Login con Matricula" class="btn btn-primary"/>
            </form>
        </fieldset>
          </div>
        </div>
 </div>
</div>
 </div> 
<script type='text/javascript' src='<?php echo $jquery ?>jquery.js'></script>
<script type='text/javascript' src='<?php echo $bootstrap_tab ?>bootstrap-tab.js'></script>
 </body>
</html>