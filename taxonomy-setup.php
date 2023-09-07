<?php

function insert_job_listing_categories($categories)
{
    foreach ($categories as $category_path) {
        $parts = explode('->', $category_path);

        $parent_term_id = 0;

        foreach ($parts as $part) {
            $existing_term = get_term_by('name', trim($part), 'job_listing_categories');

            if (!$existing_term) {
                $term = wp_insert_term(trim($part), 'job_listing_categories', [
                    'parent' => $parent_term_id
                ]);

                if (!is_wp_error($term)) {
                    $parent_term_id = $term['term_id'];
                }
            } else {
                $parent_term_id = $existing_term->term_id;
            }
        }
    }
}

// Использование
$listing_categories = ['главная', 'главная->дочерняя', 'главная->дочерняя2'];
insert_job_listing_categories($listing_categories);
