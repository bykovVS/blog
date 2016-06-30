<?php
/**
 * Created by PhpStorm.
 * User: vipjke
 * Date: 23.06.2016
 * Time: 17:19
 * Template Name: helper
 */
get_header('helper'); // Подключаем хедер?>
    <div class="helper-heading-effect text-center">
        <h1 class="helper-heading animated">Welcome to web dev helper!</h1>
    </div>
    <div id="post_form_success"></div>
    <div class="container helper-main-content">
        <div class="row">
            <div class="col-sm-8">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="row helper-main-col">
                            <div class="col-sm-4">
                                <?php the_post_thumbnail('medium', array('alt' => get_the_title(), 'title' => get_the_title())) ?>
                                <a href="<?php the_permalink() ?>" title="Подробнее">Подробнее</a>
                            </div>
                            <div class="col-sm-8">
                                <h3><?php the_title() ?></h3>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <div class="row helper-main-col">
                        <?php echo wpautop('В данной рубрике статей не найдено.'); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3 helper-aside-col">
                <aside>
                    <ul class="cd-accordion-menu animated">
                        <?php
                        $args = array(
                            'orderby' => 'name',
                            'order' => 'ASC',
                            'show_last_update' => 0,
                            'style' => 'list',
                            'show_count' => 0,
                            'hide_empty' => 0,
                            'child_of' => 2,
                            'title_li' => '',
                            'taxonomy' => 'category',
                            'current_category' => 'class="current-cat"',
                            'walker' => 'Walker_Category',
                            'hide_title_if_empty' => false,
                        );
                        wp_list_categories($args); ?>
                    </ul>
                </aside>
            </div>
        </div>
    </div>

<?php get_footer('helper'); ?>