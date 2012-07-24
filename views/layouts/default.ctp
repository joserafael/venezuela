<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Venezuela :: 
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
        echo $this->Html->css('estilo');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="/">Venezuela</a>
          <ul class="nav">
            <li class="active"><a href="/venezuela/estados">Estados</a></li>
            <li><a href="/venezuela/municipios">Municipios</a></li>
            <li><a href="/venezuela/parroquias">Parroquias</a></li>
          </ul>
         
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Venezuela <small>estados, municipios y parroquias</small></h1>
        </div>
        <div class="row">
          <div class="span10">
          <?php echo $this->Session->flash(); ?>

    <?php echo $content_for_layout; ?>
          </div>
          <div class="span4">
            
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; 2012</p>
      </footer>

    </div> <!-- /container -->
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>