<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<style>

#header {
	/* background-image: url('/sites/default/files/dental_patient_rights1-1.jpg'); */
	/* background-repeat: no-repeat; */
	/* background-size: cover; */
	background: #00274c;
}

#top-navigation {
	background:#eee;
}

#logo-name-navsearch {
	background:#ddd;
}

img.logo {
	max-width: 100%;
}

#integrated-header {
	background:#eee;
}

#main-top {
	background:#ddd;
}

#main-upper {
	background:#eee;
}

#main-lower {
	background:#ddd;
}

#main-bottom {
	background:#eee;
}

</style>

<header id="header" class="bg-image" role="banner">
	<?php if (!empty($page['top_nav'])): ?>
		<div id="top-navigation">
		    <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<?php print render($page['top_nav']); ?>
					</div>
				</div>
			</div>
			</div>
		</div><!-- /#top-navigation -->
	<?php endif; ?>
	
	<?php if ($logo || $site_name || !empty($page['search_box'])): ?>
		<div id="logo-name-navsearch">
			<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<?php if ($logo): ?>
						<div class="col-xs-3 col-sm-3 col-md-3">
						<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
    	      			<img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    	    			</a>
						</div>
    					<?php endif; ?>
                    	
						<?php if (!empty($page['search_box'])): ?>
						<div class="col-md-3 col-md-push-6">
						<?php print render($page['search_box']); ?>
						</div>
						<?php endif; ?>
                    	
		            	
						<?php if (!empty($site_name) || (!empty($page['header']))): ?>
							
							<?php if (!empty($site_name)): ?>	
							<div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-3<?php if (!empty($page['header'])) {echo " hidden";} ?>">
							<a href="<?php print $front_page; ?>" 
							title="<?php print t('Home'); ?>">
								<?php print $site_name; ?>
							</a>
							</div>
							<?php endif; ?>
							
						
							<?php if (!empty($page['header'])): ?>
							<div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-3">
								<?php print render($page['header']); ?>
							</div>
							<?php endif; ?>
							
						<?php endif; ?>
					</div>
				</div>
			</div>
			</div>
		</div><!-- /#logo-name-navsearch -->
	<?php endif; ?>
	
	<?php if (!empty($page['integrated_header'])): ?>
		<div id="integrated-header"> 
			<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<?php print render($page['integrated_header']); ?>
					</div>
				</div>
			</div>
			</div>
		</div><!-- /#integrated_header-->
	<?php endif; ?>
</header>

<?php if (!empty($page['main_top'])): ?>
	<div id="main-top" role="complementary">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<?php print render($page['main_top']); ?>
				</div>
			</div>
		</div>
		</div>
	</div><!-- /#main-top -->
<?php endif; ?>

<?php if (!empty($page['main_upper'])): ?>
	<div id="main-upper" role="complementary">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<?php print render($page['main_upper']); ?>
				</div>
			</div>
		</div>
		</div>
	</div><!-- /#main-upper -->
<?php endif; ?>


<?php if (!empty($page['content'])): ?>
<main id="main-content" role="main">
	<div class="container">
		<div class="row">
    	<?php if (!empty($page['sidebar_first'])): ?>
    	  <aside class="col-sm-3" role="complementary">
    	    <?php print render($page['sidebar_first']); ?>
    	  </aside>  <!-- /#sidebar-first -->
    	<?php endif; ?>
    	
    	<section<?php print $content_column_class; ?>>
    	  <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
    	  <a id="main-content"></a>
    	  <?php print render($title_prefix); ?>
    	  <?php if (!empty($title)): ?>
    	    <h1 class="page-header"><?php print $title; ?></h1>
    	  <?php endif; ?>
    	  <?php print render($title_suffix); ?>
    	  <?php print $messages; ?>
    	  <?php if (!empty($tabs)): ?>
    	    <?php print render($tabs); ?>
    	  <?php endif; ?>
    	  <?php if (!empty($page['help'])): ?>
    	    <?php print render($page['help']); ?>
    	  <?php endif; ?>
    	  <?php if (!empty($action_links)): ?>
    	    <ul class="action-links"><?php print render($action_links); ?></ul>
    	  <?php endif; ?>
		
		  <?php if (!empty($page['content_upper'])): ?>
			<?php print render($page['content_upper']); ?>
		  <?php endif; ?>
    	  <?php print render($page['content']); ?>
    	 <?php if (!empty($page['content_lower'])): ?>
			<?php print render($page['content_lower']); ?>
		<?php endif; ?>
    	</section>
    	
    	<?php if (!empty($page['sidebar_second'])): ?>
    	  <aside class="col-sm-3" role="complementary">
    	    <?php print render($page['sidebar_second']); ?>
    	  </aside>  <!-- /#sidebar-second -->
    	<?php endif; ?>
		</div>
  </div>
</main><!-- /#main-content -->
<?php endif; ?>


<?php if (!empty($page['main_lower'])): ?>
	<div id="main-lower" role="complementary">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<?php print render($page['main_lower']); ?>
				</div>
			</div>
		</div>
		</div>
	</div><!-- /#main-lower -->
<?php endif; ?>

<?php if (!empty($page['main_bottom'])): ?>
	<div id="main-bottom" role="complementary">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<?php print render($page['main_bottom']); ?>
				</div>
			</div>
		</div>
		</div>
	</div><!-- /#main-bottom -->
<?php endif; ?>

<?php if (!empty($page['main_bottom'])): ?>
	<footer id="footer" role="contentinfo">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<?php print render($page['footer']); ?>
				</div>
			</div>
		</div>
		</div>
	</div><!-- /#footer -->
<?php endif; ?>

<?php if (!empty($page['navigation'])): ?>
<nav id="menu" role="navigation">
<?php print render($page['navigation']); ?>
</nav>
<?php endif; ?>

