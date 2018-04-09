<?php
$fields = [
    acf_image(['name' => 'hero_img', 'label' => 'Image']),
    acf_text(['name' => 'hero_title', 'label' => 'Title']),
];

$location = [
    [
        acf_location('post_type', 'hero')
    ],
];

acf_field_group([
    'title' => 'Hero',
    'fields' => $fields,
    'style' => 'seamless',
    'location' => $location,
    'hide_on_screen' => [
        0 => 'the_content',
    ],
]);
