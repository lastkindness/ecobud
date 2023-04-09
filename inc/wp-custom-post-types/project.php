<?php
use RST\Base\Structure\PostType;
use RST\Base\Structure\Taxonomy;

$project = new PostType('project');

$project->setLabels(
    [
        'name' => __('Всі проекти', 'RST'),
        'singular_name' => __('Проекти', 'RST'),
        'menu_name' => __('Проекти', 'RST'),
        'name_admin_bar' => __('Учасник проектів', 'RST'),
        'parent_item' => NULL,
        'parent_item_colon' => NULL,
        'add_new' => __('Додати проект', 'RST'),
        'add_new_item' => __('Додати проект', 'RST'),
        'new_item' => __('Новий проект', 'RST'),
        'edit_item' => __('Редагувати проект', 'RST'),
        'view_item' => __('Переглянути проект', 'RST'),
        'all_items' => __('Всі проекти', 'RST'),
        'search_items' => __('Шукати проект', 'RST'),
        'not_found' => __('Жоден проект не знайдено', 'RST'),
        'not_found_in_trash' => __('Немає проектів в корзині', 'RST'),
        'featured_image' => __('Фото проекту', 'RST'),
        'set_featured_image' => __('Додати фото проекта', 'RST'),
        'remove_featured_image' => __('Видалити фото проекта', 'RST'),
        'use_featured_image' => __('Використати фото проекта', 'RST'),
    ]
);

$project->setArgs(
    [
        'menu_icon' => 'dashicons-admin-multisite',
        'public' => TRUE,
        'publicly_queryable' => TRUE, // cpt: enabled url in backend/front side
        'query_var' => TRUE, // cpt: using name of CPT in WP functions as a parameter
        'hierarchical' => TRUE,
        'has_archive' => TRUE,
        'rewrite' => TRUE, // cpt: human-readable url
        'supports' => ['title', 'thumbnail', 'revisions'],
        'show_in_nav_menus' => TRUE, // cpt: admin Appearance -> Menus
        'exclude_from_search' => TRUE,
        'taxonomies' => array('post_tag')
    ]
);


// Taxonomy
$taxGroup = new Taxonomy('group', 'group');

$taxGroup->setLabels(
    [
        'name' => __('Група', 'RST'),
        'menu_name' => __('Групи', 'RST'),
        'singular_name' => __('Група', 'RST'),
        'search_items' => __('Пошук групи', 'RST'),
        'all_items' => __('Всі групи', 'RST'),
        'parent_item' => __('Батьківська група', 'RST'),
        'parent_item_colon' => __('Батьківська група:', 'RST'),
        'edit_item' => __('Редагувати групу', 'RST'),
        'update_item' => __('Оновити групу', 'RST'),
        'add_new_item' => __('Додати нову групу', 'RST'),
        'view_item' => __('Переглянути групу', 'RST'),
        'new_item_name' => __('Нове імя для групи', 'RST'),
        'not_found' => __('Жодна група не знайдена', 'RST'),
    ]
);

$taxGroup->setArgs( // the taxonomy panel appears in the sidebar of the
    [
        'public' => TRUE,
        'publicly_queryable' => TRUE, // taxonomy: use in front
        'query_var' => TRUE, // taxonomy: use in front
        'show_admin_column' => TRUE, // taxonomy: show column on the page-list of All CPT items
        'show_in_quick_edit' => TRUE, // taxonomy: show in the page-list of All CPT items
        'show_in_nav_menus' => TRUE, // taxonomy: show in admin Appearance -> Menus
        'show_tagcloud' => TRUE, // taxonomy: use in widgets
        'hierarchical' => TRUE, // taxonomy: TRUE - like a category; FALSE - like a tag
        'show_in_rest' => TRUE, // TRUE - visible taxonomy in sidebar Gutenberg editor, FALSE - only WYSIWYG
    ]
);

$taxGroup->uses($project);
