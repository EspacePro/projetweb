<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/sites_tests/gateway/user/pages/02.blog/sticky-post-example/item.md',
    'modified' => 1665247254,
    'size' => 484,
    'data' => [
        'header' => [
            'title' => 'Sticky Post Example',
            'date' => '14:55 07/11/2014',
            'body_classes' => 'single single-post postid-15 single-format-standard group-blog',
            'post_class' => 'sticky',
            'continue_link' => false
        ],
        'frontmatter' => 'title: Sticky Post Example
date: 14:55 07/11/2014
body_classes: single single-post postid-15 single-format-standard group-blog
post_class: sticky
continue_link: false',
        'markdown' => 'This is a sticky post.

There are a few things to verify:

* The sticky post should be distinctly recognizable in some way in comparison to normal posts. You can style the .sticky class if you are using the ```post_class: sticky``` in our page header to generate your post classes, which is a best practice.
'
    ]
];
