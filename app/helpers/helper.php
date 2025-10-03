<?php

use Illuminate\Support\Facades\DB;

if (!function_exists("siteConfig")) {
    function siteConfig()
    {
        return DB::table('configurations')->first();
    }
}

function getPages(){
    return $pages = [
        'home' => 'Home',
        'about' => 'About',
        'services' => 'Services',
        'contact' => 'Contact',
        'blog' => 'Blog',
        'case-studies' => 'Case Studies'
    ];
}
if (! function_exists('display')) {
    function display()
    {
        return [
            'tex-exemption'    => 'Tex Exemption',
            'donation-policy'   => 'Donation Policy',
            'causes'   => 'Causes',
            'donate'   => 'Donate',
            'certificates'   => 'Certificates',
        ];
    }
}
