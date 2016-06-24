<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон сайдбара, все виджеты добавляйте из админки
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
?>
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