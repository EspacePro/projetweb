<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/sites_tests/gateway/user/pages/02.blog/blog.md',
    'modified' => 1665247254,
    'size' => 442,
    'data' => [
        'header' => [
            'title' => 'Blog',
            'blog_url' => 'blog',
            'menu' => 'Blog',
            'body_classes' => 'blog group-blog infinite-scroll',
            'sitemap' => [
                'changefreq' => 'monthly',
                'priority' => 1.03
            ],
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'limit' => 10,
                'pagination' => true
            ],
            'feed' => [
                'description' => 'Sample Blog Description',
                'limit' => 10
            ],
            'pagination' => true
        ],
        'frontmatter' => 'title: Blog
blog_url: blog
menu: Blog
body_classes: blog group-blog infinite-scroll

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 10
    pagination: true

feed:
    description: Sample Blog Description
    limit: 10

pagination: true',
        'markdown' => '## Latest News
### Change these titles to anything you\'d like in the admin panel or markdown files.
'
    ]
];
