
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
 * $page['top_nav']: Best for utility navigation and social media icons.
 * $page['header']: Logo, Site Name, Nav buttons or search if any.
 * $page['integrated_header']: Lead items integrated into <header>.
 * $page['main_top']: Lead items after <header>.
 * $page['main_upper']: Items just before main content regions.
 * $page['first_sidebar']: Primarily area menus.
 * $page['help']: Reserved for system alerts.
 * $page['content_upper']: Lead items rel to current node. Videos, lead img, etc.
 * $page['content']: Primary content of the node. 
 * $page['content_lower']: Follow-up items for current node. Attached files, etc.
 * $page['second_sidebar']: Another option for menus and support content.
 * $page['main_lower']: Poss for infographics but available for anything.
 * $page['main_bottom']: Poss for events and news but available for any items.
 * $page['footer']: Boilerplate stuff. Possible footer menus. 
 * $page['navigation']: Slide menu. Can contain search and ad hoc blocs as well.
 */



<div id="#page">
	
	<?php if (!empty($page['top_nav']) || !empty($page['header']) || !empty($page['integrated_header']): ?>
		<header id="header" class="bg-image" role="banner">
    	
			<?php if (!empty($page['top_nav'])): ?>
				<div id="top-nav-and-icons-region">
			
				</div>
			<?php endif; ?>
			
			<?php if (!empty($page['header'])): ?>
				<div id="logo-name-and-nav-region">
				
				</div>
			<?php endif; ?>
			
			<?php if (!empty($page['integrated_header'])): ?>
				<div id="integrated-header-region">
			
				</div>	
			<?php endif; ?>
		
		</header>
	<?php endif; ?>
	
	<?php if (): ?>
		<div id="main-top" role="complementary">
		
		</div>
	<?php endif; ?>
	
	<?php if (): ?>
		<div id="main-upper" role="complementary">
		
		</div>
	<?php endif; ?>
	
	<?php if (): ?>
		<main id="content-section">
			
		
		</main>
	<?php endif; ?>
	
	<?php if (): ?>
		<div id="main-lower" role="complementary">
		
		</div>
	<?php endif; ?>
	
	<?php if (): ?>
		<div id="main-bottom" role="complementary">
		
		</div>
	<?php endif; ?>

	<?php if (): ?>
		<footer id="footer" role="contentinfo">
		
		</footer>
	<?php endif; ?>
		
</div><!-- /#page -->

<nav id="menu" role="navigation">

</nav>

