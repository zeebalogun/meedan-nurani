<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>    
	<title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
    <!--[if lte IE 6]><style type="text/css" media="all">@import "<?php print $base_path . path_to_theme() ?>/css/ie6.css"</style><![endif]-->
    <!--[if IE 7]><style type="text/css" media="all">@import "<?php print $base_path . path_to_theme() ?>/css/ie7.css"</style><![endif]-->
   <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">
	<div id="skip-link">
		<a href="#content"><?php print t('Skip to Content'); ?></a>
		<a href="#navigation"><?php print t('Skip to Navigation'); ?></a>
	</div>  
	<div id="top-strip">
	  <?php print $top_strip; ?>
	</div>
	<div class="page">
		<div id="header">
			<div id="logo-title">
				<?php if (!empty($logo)): ?>
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          	<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
          </a>
        <?php endif; ?>
      	<div id="name-and-slogan">
					<?php if (!empty($site_name)): ?>
						<h1 id="site-name">
							<a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>" rel="home">
								<span><?php print $site_name; ?></span>
							</a>
						</h1>
					<?php endif; ?>
					<?php if (!empty($site_slogan)): ?>
						<div id="site-slogan"><?php print $site_slogan; ?></div>
					<?php endif; ?>
				</div> <!-- /name-and-slogan -->
			</div> <!-- /logo-title -->
      <?php if ($header): ?>
      	<div id="header-region">
       		<?php print $header; ?>
				</div>
     	<?php endif; ?>
			<?php // Uncomment to add the search box.// print $search_box; ?>
    </div> <!-- /header -->
		
		<div id="content-wrapper" >
			<?php if ($title): ?>
				<h1 class="title"><?php print $title; ?></h1>
			<?php endif; ?>

			<?php if ($content_top): ?>
      	<div id="slash" class="overview">
        	<?php print $content_top; ?>
        </div> <!-- /#slash -->
      <?php endif; ?>

			<div id="container">
				<div id="main" class="clearfix">
      		<div id="content">
      			<div id="content-inner" class="inner column center">
        			<?php if ($breadcrumb || $messages || $help || $tabs): ?>
          			<div id="content-header">
            			<?php print $messages; ?>
	              	<?php print $help; ?> 
  	            	<?php if ($tabs): ?>
    	            	<div class="tabs"><?php print $tabs; ?></div>
      	        	<?php endif; ?>
        	    	</div> <!-- /#content-header -->
          		<?php endif; ?>
          		<div id="content-area">
	            	<?php print $content; ?>
  	        		<?php print $feed_icons; ?>
    	      	</div> <!-- /#content-area -->
      	    	<?php if ($content_bottom): ?>
        	    	<div id="content-bottom">
          	    	<?php print $content_bottom; ?>
            		</div><!-- /#content-bottom -->
	          	<?php endif; ?>
  	      	</div> <!-- content-inner -->
    	    </div> <!-- content -->
      	</div> <!-- /main -->
		 		<?php if ($left): ?>
					<div id="sidebar-first" class="column sidebar first">
    	   		<div id="sidebar-first-inner" class="inner">
      	 			<?php print $left; ?>
        	  </div>
	        </div>
  	    <?php endif; ?> <!-- /sidebar-left -->
    	  <?php if ($right): ?>
     		 	<div id="sidebar-second" class="column sidebar second">
        	  <div id="sidebar-second-inner" class="inner">
          	  <?php print $right; ?>
          	</div>
 	       </div>
  	    <?php endif; ?> <!-- /sidebar-second --> 
				<div class="clearfix"></div>
			</div> <!-- container -->
				<div class="clear"></div>
		</div> <!-- /content-wrapper -->
	</div> <!-- /pager -->
  <?php if(!empty($footer_message) || !empty($footer_block)): ?>
  	<div id="outer-footer">
			<div class="page">
				<?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>  
				<?php print $footer_message; ?>
			</div>
		</div> <!-- /outer-footer -->
	<?php endif; ?>

<?php print $closure; ?>
</body>
</html>
