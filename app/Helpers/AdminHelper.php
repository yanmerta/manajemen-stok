<?php

namespace App\Helpers;

use App\Models\AdminModel;
use App\Models\LanguageModel;
use App\Models\MenuModel;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class AdminHelper
{
    public static $clientName = 'Property Insurance';

    function __construct()
    {
    }

    public static function data_primary($params = [])
    {
        $menuActive = 'dashboard';
        if (Session::has('admin')) {
            $admin_id = Session::get('admin')->admin_id;
        } else {
            $admin_id = 0;
        }

        $routeNameActive = $params['routeNameActive'] ?? Route::currentRouteName();
        $adminLogin = AdminModel::where('admin_id', $admin_id)->first();

        $lng_code = Request::segment(1);
        $languageActive = LanguageModel
            ::select(['language_id', 'lng_flag_filename'])
            ->where('lng_code', $lng_code)
            ->first();

        $language_id = $languageActive->language_id;

        $data = [
            'menuActive' => $menuActive,
            'adminLogin' => $adminLogin,
            'metaTitle' => self::$clientName,
            'clientName' => self::$clientName,
            'sidebar' => self::sidebar(),
            'currentRouteName' => $routeNameActive,
            'dashboardTitle' => self::menuList()['dashboard'],
            'language_id' => $language_id
        ];

        return $data;
    }

    public static function sidebar()
    {
        $menuList = self::menuList();
        $sidebar = [
            [
                'icon' => NULL,
                'label' => $menuList['intro'],
                'routeName' => NULL,
                'newTab' => FALSE,
                'sub' => [
                    [
                        'icon' => 'nav-icon fas fa-tachometer-alt',
                        'label' => $menuList['dashboard'],
                        'routeName' => 'dashboardPage',
                        'newTab' => FALSE,
                        'sub' => NULL,
                    ],
                    [
                        'icon' => 'nav-icon fas fa-globe',
                        'label' => $menuList['seeWebsite'],
                        'routeName' => 'userHome',
                        'newTab' => TRUE,
                        'sub' => NULL,
                    ]
                ]
            ],
            [
                'icon' => NULL,
                'label' => $menuList['managePage'],
                'routeName' => NULL,
                'newTab' => FALSE,
                'sub' => [
                    [
                        'icon' => 'nav-icon far fa-file',
                        'label' => $menuList['home'],
                        'routeName' => NULL,
                        'newTab' => FALSE,
                        'sub' => [
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['homePage'],
                                'routeName' => 'homePageEdit',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['homeSlider'],
                                'routeName' => 'homeDataList',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['productData'],
                                'routeName' => 'productDataList',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['specializData'],
                                'routeName' => 'specializDataList',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['purchasingData'],
                                'routeName' => 'purchasingDataList',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['testimoniData'],
                                'routeName' => 'testimoniDataList',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                        ],
                    ],
                    [
                        'icon' => 'nav-icon far fa-file',
                        'label' => $menuList['productAndService'],
                        'routeName' => NULL,
                        'newTab' => FALSE,
                        'sub' => [
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['productAndServicePage'],
                                'routeName' => 'productAndServicePageEdit',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['productAndServicePage'],
                                'routeName' => 'productAndServiceDataList',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                        ],
                    ],
                    [
                        'icon' => 'nav-icon far fa-file',
                        'label' => $menuList['about'],
                        'routeName' => NULL,
                        'newTab' => FALSE,
                        'sub' => [
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['aboutPage'],
                                'routeName' => 'aboutPageEdit',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['companyData'],
                                'routeName' => 'companyDataList',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                        ],
                    ],
                    [
                        'icon' => 'nav-icon far fa-file',
                        'label' => $menuList['quotePage'],
                        'routeName' => 'quotePageEdit',
                        'newTab' => FALSE,
                        'sub' => NULL, //[
//                            [
//                                'icon' => 'far fa-circle nav-icon',
//                                'label' => $menuList['quotePage'],
//                                'routeName' => 'quotePageEdit',
//                                'newTab' => FALSE,
//                                'sub' => NULL
//                            ],
//                            [
//                                'icon' => 'far fa-circle nav-icon',
//                                'label' => $menuList['quoteData'],
//                                'routeName' => 'quoteDataList',
//                                'newTab' => FALSE,
//                                'sub' => NULL
//                            ],
                        //],
                    ],
                    [
                        'icon' => 'nav-icon far fa-file',
                        'label' => $menuList['blog'],
                        'routeName' => NULL,
                        'newTab' => FALSE,
                        'sub' => [
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['blogPage'],
                                'routeName' => 'blogPageEdit',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['blogData'],
                                'routeName' => 'blogDataList',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                        ],
                    ],
                    [
                        'icon' => 'nav-icon far fa-file',
                        'label' => $menuList['contactUs'],
                        'routeName' => NULL,
                        'newTab' => FALSE,
                        'sub' => [
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['contactPage'],
                                'routeName' => 'contactPageEdit',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                            [
                                'icon' => 'far fa-circle nav-icon',
                                'label' => $menuList['contactData'],
                                'routeName' => 'contactDataList',
                                'newTab' => FALSE,
                                'sub' => NULL
                            ],
                        ],
                    ],
                    [
                        'icon' => 'nav-icon far fa-file',
                        'label' => $menuList['subscribe'],
                        'routeName' => 'subscribeList',
                        'newTab' => FALSE,
                        'sub' => NULL
                    ],
                    [
                        'icon' => 'nav-icon far fa-file',
                        'label' => $menuList['footer'],
                        'routeName' => 'footerPageEdit',
                        'newTab' => FALSE,
                        'sub' => NULL
                    ],
                    [
                        'icon' => 'nav-icon far fa-file',
                        'label' => $menuList['dictionary'],
                        'routeName' => 'dictionaryDataList',
                        'newTab' => FALSE,
                        'sub' => NULL
                    ],
                ]
            ],
            [
                'icon' => NULL,
                'label' => $menuList['masterData'],
                'routeName' => NULL,
                'newTab' => FALSE,
                'sub' => [
                    [
                        'icon' => 'nav-icon far fa-file',
                        'label' => $menuList['dataAdmin'],
                        'routeName' => 'masterAdminList',
                        'newTab' => FALSE,
                        'sub' => NULL
                    ],
                    [
                        'icon' => 'nav-icon far fa-file',
                        'label' => $menuList['dataEmail'],
                        'routeName' => 'masterEmailList',
                        'newTab' => FALSE,
                        'sub' => NULL
                    ],
                    [
                        'icon' => 'nav-icon far fa-file',
                        'label' => $menuList['dataLanguage'],
                        'routeName' => 'masterLanguageList',
                        'newTab' => FALSE,
                        'sub' => NULL
                    ],

                ]
            ]
        ];

        return $sidebar;
    }

    public static function menuList()
    {
        $data = [
            'intro' => 'INTRO',
            'dashboard' => 'Dashboard',
            'seeWebsite' => 'See Website',
            'managePage' => 'MANAGE PAGE',
            'home' => 'Home',
            'homePage' => 'Home Page',
            'homeSlider' => 'Home Slider',
            'productData' => 'Product Data',
            'specializData' => 'Specializ Data',
            'purchasingData' => 'Purchasing Data',
            'testimoniData' => 'Testimoni Data',
            'productAndService' => 'Product And Service',
            'productAndServicePage' => 'Product And Service Page',
            'productAndServiceData' => 'Product And Service Data',
            'about' => 'About',
            'aboutPage' => 'About Page',
            'companyData' => 'Company Data',
            'quote' => 'Quote',
            'quotePage' => 'Quote Page',
            'quoteData' => 'Quote Data',
            'blog' => 'Blog',
            'blogPage' => 'Blog Page',
            'blogData' => 'Blog Data',
            'contactUs' => 'Contact Us',
            'contactPage' => 'Contact Page',
            'contactData' => 'Contact Data',
            'subscribe' => 'Subscribe',
            'footer' => 'Footer',
            'dictionary' => 'Dictionary',
            'masterData' => 'MASTER DATA',
            'dataAdmin' => 'Data Admin',
            'dataEmail' => 'Data Email',
            'dataLanguage' => 'Data Language',
        ];

        return $data;
    }

    public static function getRouteNameSub($sub = [])
    {
        $routeNameArr = [];
        foreach ($sub as $row) {
            $routeNameArr[] = $row['routeName'];
        }

        return $routeNameArr;
    }

    public static function menuUpdate($mnu_type, $mnu_name)
    {
        $lng_code = Request::segment(1);
        $languageActive = LanguageModel
            ::select(['language_id', 'lng_flag_filename'])
            ->where('lng_code', $lng_code)
            ->first();

        $language_id = $languageActive->language_id;
        $where = [
            'language_id' => $language_id,
            'mnu_type' => $mnu_type
        ];

        $check = MenuModel
            ::where($where)
            ->count();

        if ($check > 0) {
            MenuModel
                ::where($where)
                ->update(['mnu_name' => $mnu_name]);
        } else {
            MenuModel::create([
                'language_id' => $language_id,
                'mnu_name' => $mnu_name,
                'mnu_type' => $mnu_type
            ]);
        }


    }
}
