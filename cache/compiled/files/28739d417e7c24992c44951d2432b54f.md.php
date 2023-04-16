<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/sites_tests/gateway/user/pages/03.pages/02.shortcodes/default.md',
    'modified' => 1665247254,
    'size' => 2212,
    'data' => [
        'header' => [
            'title' => 'Shortcodes',
            'body_classes' => 'page page-template-default group-blog',
            'toggles' => [
                0 => [
                    'title' => 'Some title',
                    'description' => 'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Donec sed odio dui.',
                    'position' => 'top'
                ],
                1 => [
                    'title' => 'Another title',
                    'description' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.',
                    'position' => 'top'
                ]
            ],
            'progressbar' => [
                0 => [
                    'title' => 'Example',
                    'percent' => 75,
                    'background' => '#f1c40f',
                    'position' => 'top'
                ],
                1 => [
                    'title' => 'Example',
                    'percent' => 25,
                    'background' => '#f10e0e',
                    'position' => 'top'
                ]
            ]
        ],
        'frontmatter' => 'title: Shortcodes
body_classes: page page-template-default group-blog
toggles:
  - title: Some title
    description: Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Donec sed odio dui.
    position: top
  - title: Another title
    description: Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
    position: top
progressbar:
  - title: Example
    percent: 75
    background: "#f1c40f"
    position: top
  - title: Example
    percent: 25
    background: "#f10e0e"
    position: top',
        'markdown' => '____
#### Toggles

Toggles ? Maybe for an awesome FAQ page? Add following code to page header:
<pre>
toggles:
  - title: Some title
    description: Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Donec sed odio dui.
    position: top
  - title: Another title
    description: Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
    position: top
</pre>

___
#### Progress Bar

<pre>
progressbar:
  - title: Example
    percent: 75
    background: "#f1c40f"
    position: top
  - title: Example
    percent: 25
    background: "#f10e0e"
    position: top
</pre>
'
    ]
];
