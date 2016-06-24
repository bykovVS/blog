<?php get_header('helper'); ?>
    <div class="helper-heading-effect text-center">
        <h1 class="helper-heading animated"><?php single_cat_title(); ?></h1>
    </div>
    <div class="container helper-main-content">
        <div class="row">
            <div class="col-sm-8 helper-main-col">

            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3 helper-aside-col">
                <?php get_sidebar('helper'); ?>
            </div>
        </div>
    </div>
<?php get_footer('helper'); ?>