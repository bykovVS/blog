<?php get_header('helper'); ?>
    <div class="helper-heading-effect text-center">
        <h1 class="helper-heading animated"><?php single_cat_title(); ?></h1>
    </div>
    <div class="container helper-main-content">
        <div class="row">
            <div class="col-sm-9">
                <?php
                if(have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="row helper-main-col">
                            <div class="col-sm-12">
                                <h3><?php the_title() ?></h3>
                                <p>
                                    <?php
                                    global $more;
                                    $more = 1;
                                    the_content();
                                    ?>
                                </p>
                                <div class="text-right">
                                    <?php the_time('F j, Y'); // Дата создания поста ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <div class="row helper-main-col">
                        <?php echo wpautop( 'В данной рубрике статей не найдено.' ); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-sm-3 helper-aside-col">
                <?php get_sidebar('helper'); ?>
            </div>
        </div>
    </div>
<?php get_footer('helper'); ?>