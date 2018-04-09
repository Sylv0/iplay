<?php
$fields = [
    acf_image(['name' => 'hero_img', 'label' => 'Primary Image', 'instructions' => 'Image shown as the background.']),
    acf_image(['name' => 'phone_img', 'label' => 'Secondary Image', 'instructions' => 'Image shown on the phone.']),
];

$location = [
    [
        acf_location('post_type', 'hero')
    ],
];

acf_field_group([
    'title' => 'Hero',
    'fields' => $fields,
    'location' => $location,
    'hide_on_screen' => [
        0 => 'the_content',
    ],
]);
