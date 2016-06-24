<?php
/**
 * Чистый Шаблон для разработки
 * Функции шаблона
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
register_nav_menus(array( // Регистрируем 2 меню
    'top' => 'Верхнее меню',
    'left' => 'Нижнее'
));
add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(254, 190); // Задаем размеры миниатюре

if (function_exists('register_sidebar'))
    register_sidebar(); // Регистрируем сайдбар
add_action('template_redirect', 'use_parent_category_template');

// Заменяем точки

function excerpt($num) {
    $limit = $num-90; //задаем количество выводимых символов в посте (числа могут быть как отрицательные так и положительные)
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt)."..."; // добавляем три точки в конец каждого поста
    echo $excerpt;
}
// Для подкатегорий рубрик

function use_parent_category_template()
{
    global $cat, $post;
    $category = get_category($cat);

    if (is_category()):
        while ($category->cat_ID) {
            if (file_exists(TEMPLATEPATH . "/category-" . $category->cat_ID . '.php')) {
                include(TEMPLATEPATH . "/category-" . $category->cat_ID . '.php');
                exit;
            }
            $category = get_category($category->category_parent);
        }
    elseif (is_single()) :

        $categories = get_the_category($post->ID);

        if (count($categories)) foreach ($categories as $category) {
            while ($category->cat_ID) {
                if (file_exists(TEMPLATEPATH . "/single-" . $category->cat_ID . '.php')) {
                    include(TEMPLATEPATH . "/single-" . $category->cat_ID . '.php');
                    exit;
                }

                $category = get_category($category->category_parent);
            }

        }

    endif;

} ?>