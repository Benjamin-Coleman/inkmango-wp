<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inkmango
 */
get_header();
?>

<div class="home-wrapper">
    <?php
    $args = array(
        'category' => 'Featured',
        'numberposts' => 1,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status' => 'publish'
    );

    $featured_post = get_posts( $args, ARRAY_A );
    ?>
    <div class="featured-post">
        <?php
            $featured_post = get_posts();
            
                echo '<li><a href="' . get_permalink($featured["ID"]) . '">' .   $featured["post_title"].'</a> </li> ';
            
            wp_reset_query();
        ?>
    </div>
    
<?php
$args = array(
	'numberposts' => 5,
	'offset' => 0,
	'category' => 0,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' =>'',
	'post_type' => 'post',
	'post_status' => 'draft, publish, future, pending, private',
	'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>

<h2>Recent Posts</h2>
    <ul>
    <?php
        $recent_posts = wp_get_recent_posts();
        foreach( $recent_posts as $recent ){
            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
        }
        wp_reset_query();
    ?>
    </ul>
</div>