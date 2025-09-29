<?php

namespace Config;

class Menu
{
    public static array $menus = [
        'home' => [
            ['label' => 'Home', 'url' => 'home/home'],
            ['label' => 'Privacy Policy', 'url' => 'home/privacy_policy'],
            ['label' => 'Dashboard', 'url' => 'home/dashboard'],
            ['label' => 'Report', 'url' => 'home/report'],
        ],
        'recruitment' => [
            ['label' => 'Home', 'url' => 'recruitment/home'],
            ['label' => 'Summary', 'url' => 'recruitment/summary'],
            ['label' => 'Candidate', 'url' => 'recruitment/candidate'],
            ['label' => 'Interview', 'url' => 'recruitment/interview'],
        ],
        'onboarding' => [
            ['label' => 'Item 1', 'url' => 'module3/item1'],
            ['label' => 'Item 2', 'url' => 'module3/item2'],
        ],
        'module4' => [
            ['label' => 'Page A', 'url' => 'module4/pagea'],
            ['label' => 'Page B', 'url' => 'module4/pageb'],
        ],
        // Add other modules here...
    ];
}
