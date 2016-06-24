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
    <div class="container helper-main-content">
        <div class="row">
            <div class="col-sm-8 helper-main-col">

            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3 helper-aside-col">
                <aside>
                    <ul class="cd-accordion-menu animated">
                        <?php
                        $args = array(
                            'orderby'            => 'name',
                            'order'              => 'ASC',
                            'show_last_update'   => 0,
                            'style'              => 'list',
                            'show_count'         => 0,
                            'hide_empty'         => 0,
                            'child_of'           => 2,
                            'title_li'           => '',
                            'taxonomy'           => 'category',
                            'current_category'   => 'class="current-cat"',
                            'walker'             => 'Walker_Category',
                            'hide_title_if_empty' => false,
                        );
                        wp_list_categories($args); ?>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
<?php get_footer('helper'); ?>