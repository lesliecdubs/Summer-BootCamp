<?php get_header(); 
?>

<div id="container">
<a name="top"></a>

<!-- Full Disclosure: The following code was written with assistance from a tutorial that no longer exists on the web. -->

<?php
// Array to store each page's info
$args = array(
	'sort_order' => 'ASC',
	'sort_column' => 'menu_order', //post_title
	'hierarchical' => 1,
	'exclude' => '',
	'child_of' => 0,
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
);
$pages = get_pages($args);
// Start loop
foreach ($pages as $page_data) {
    $content = apply_filters('the_content', $page_data->post_content);
    $title = $page_data->post_title;
    $slug = $page_data->post_name;
?>
<div id='<?php echo "$slug" ?>'>
	<a name='<?php echo "$slug" ?>'></a>
		<div class="sectionwrap">
			<?php echo "$content" ?>
		</div>
</div>

<?php 
}
get_footer(); ?>