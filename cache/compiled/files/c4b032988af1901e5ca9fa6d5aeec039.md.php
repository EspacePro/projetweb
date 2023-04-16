<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/sites_tests/gateway/user/pages/01.home/modular.md',
    'modified' => 1665247254,
    'size' => 487,
    'data' => [
        'header' => [
            'title' => 'Home',
            'menu' => 'Home',
            'onpage_menu' => false,
            'body_classes' => 'home page page-template page-template-template-home page-template-template-home-php group-blog',
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_showcase',
                        1 => '_highlights',
                        2 => '_callout',
                        3 => '_bottom',
                        4 => '_contact'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Home
menu: Home
onpage_menu: false
body_classes: "home page page-template page-template-template-home page-template-template-home-php group-blog"

content:
    items: @self.modular
    order:
        by: default
        dir: asc
        custom:
            - _showcase
            - _highlights
            - _callout
            - _bottom
            - _contact',
        'markdown' => '## Featured Posts
### Occaecati curabitur autem mollit! Vestibulum veritatis. Aliquam orci cumque curabitur.
'
    ]
];
