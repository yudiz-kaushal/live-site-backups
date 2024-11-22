<?php 
/**
 * Template Name: Common Content
 * 
 */

get_header();
?>

<section class=" common-content">
    <div class=" common-cnt-banner">
        <div class=" container">
            <h1 class=" heading-h1">Privacy Policy</h1>
        </div>
    </div>
    <div class=" container">
        <div class="common-content-container">
            <?php echo the_content(); ?>
        </div>
    </div>
</section>
<?php get_footer() ?>