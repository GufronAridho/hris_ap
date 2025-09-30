<?php

namespace Config;

class Menu
{
    public static array $menus = [
        'home' => [
            ['label' => 'Home', 'url' => 'home/index', 'icon' => 'fas fa-home'],
            ['label' => 'Privacy Policy', 'url' => 'home/privacy_policy', 'icon' => 'fas fa-shield-alt'],
            ['label' => 'Dashboard', 'url' => 'home/dashboard', 'icon' => 'fas fa-tachometer-alt'],
            ['label' => 'Report', 'url' => 'home/report', 'icon' => 'fas fa-file-alt'],
        ],
        'recruitment' => [
            ['label' => 'Home', 'url' => 'recruitment/index', 'icon' => 'fas fa-home'],
            ['label' => 'Summary', 'url' => 'recruitment/summary', 'icon' => 'fas fa-chart-pie'],
            ['label' => 'Candidate', 'url' => 'recruitment/candidate', 'icon' => 'fas fa-user-friends'],
            ['label' => 'Interview', 'url' => 'recruitment/interview', 'icon' => 'fas fa-comments'],
        ],
        'onboarding' => [
            ['label' => 'Item 1', 'url' => 'module3/item1', 'icon' => 'fas fa-box'],
            ['label' => 'Item 2', 'url' => 'module3/item2', 'icon' => 'fas fa-box-open'],
        ],
        'module4' => [
            ['label' => 'Page A', 'url' => 'module4/pagea', 'icon' => 'fas fa-file'],
            ['label' => 'Page B', 'url' => 'module4/pageb', 'icon' => 'fas fa-file-alt'],
        ],
    ];
}
