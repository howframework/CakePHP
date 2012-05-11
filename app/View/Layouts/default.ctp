<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HowFrameWork</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
    	<meta name="author" content="">
    <?php
      echo $this->Html->css('bootstrap');
      echo $this->Html->css('style');
      
      //these scripts we want to put at the bottom of the page as per howframework designed it 
      $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', array('block' => 'scriptBottom'));
      $this->Html->script('bootstrap.min.js', array('block' => 'scriptBottom'));
    ?>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	    
	</head>

	<body>
    <?php echo $this->element('topbar'); ?>	
    <?php echo $this->element('header'); ?>
		<div id="body">
			<div class="container">
				<div class="row">
					<div id="content" class="span8">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>	
					</div>
					<div id="sidebar" class="span4">
						<div class="widget">
							Praesent laoreet elit vel augue porttitor eu adipiscing risus egestas. Donec luctus ligula nec tortor porta ut sodales neque ultrices. Sed rhoncus metus non est ullamcorper aliquet. Morbi eu blandit nibh. Donec dictum iaculis diam nec pulvinar. Morbi auctor hendrerit aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
				</div>
			</div>
		</div>
    <?php echo $this->element('footer'); ?>		
    <?php
      echo $this->element('sql_dump'); 
    ?>
		<!-- JS -->
    <?php echo $this->fetch('scriptBottom'); ?>
	</body>
</html>
