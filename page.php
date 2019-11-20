<?php get_header(); ?>

<!-- page header-->

<div class="head-content">
    <div class="left-side">
        <div style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/img/img4.jpg');"></div>
    </div>

    <div class="right-side">
        <div class="double-img">
            <div style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/img/img5.jpg');"></div>
        </div>
        <div class="action-section">
            <div class="hero">Shop Now!</div>
            <div class="hero">Perfect Lashes</div>
            <div class="button">
                <span></span>
                <input type="button" value="Shop Now">
            </div>
        </div>
    </div>
</div>

<!--page header ends -->

<!-- page content -->
<div class="main-content">

    <div class="left-side">
        <div class="details">
            <div class="title"><?php the_title() ?> </div>
            <div class="content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php the_content(); ?>

                <?php endwhile;
                endif; ?>
            </div>
        </div>

        <div class="img" style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/img/img7.jpg');"></div>
    </div>

    <div class="right-side">
        <div class="img" style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/img/img6.jpg');"></div>

        <div class="action-section">
            <div class="hero">The greatest lashes</div>
            <div class="button">
                <input type="button" value="Shop Now">
            </div>
        </div>
    </div>

</div>

<!-- page content ends -->

<?php get_footer(); ?>