<?php

namespace App\Helpers;

use App\Models\AboutPageModel;
use App\Models\ContactPageModel;
use App\Models\DictionaryModel;
use App\Models\FooterPageModel;
use App\Models\LanguageModel;
use App\Models\MenuModel;
use App\Models\ProductAndServiceModel;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class UserHelper
{
    public static $clientName = 'Property Insurance Bali';

    function __construct()
    {

    }

    public static function data_primary()
    {
        $menuActive = '';
        $language = LanguageModel::where('lng_active_status', 'yes')->get();
        $lng_code = Request::segment(1);
        $languageActive = LanguageModel::select(['language_id', 'lng_flag_filename'])->where('lng_code', $lng_code)->first();
        $language_id = $languageActive->language_id;
        $lng_flag_filename = $languageActive->lng_flag_filename;
        $whereLanguageId = [
            'language_id' => $language_id
        ];


        $productAndService = ProductAndServiceModel::where($whereLanguageId)->get();
        $footerPage = FooterPageModel::where($whereLanguageId)->first();
        $contactPage = ContactPageModel::where($whereLanguageId)->first();
        $languageData = LanguageModel::where('lng_active_status', 'yes')->get();
        $menu = MenuModel::where($whereLanguageId)->get();

        $dictionary = DictionaryModel::where('language_id', $language_id)->get();
        $waLink = 'https://api.whatsapp.com/send?phone=6287777333544';


        $data = [
            'menuActive' => $menuActive,
            'languageData' => $languageData,
            'productAndService' => $productAndService,
            'footerPage' => $footerPage,
            'contactPage' => $contactPage,
            'language_id' => $language_id,
            'lng_code' => $lng_code,
            'lng_flag_filename' => $lng_flag_filename,
            'waLink' => $waLink,
            'language' => $language,
            'minifyUse' => TRUE
        ];

        foreach ($dictionary as $row) {
            $data['dict_' . $row->dict_variable] = $row->dict_word;
        }

        foreach ($menu as $row) {
            $data['menu_'.$row->mnu_type] = $row->mnu_name;
        }


        return $data;
    }

    public static function languageSwitchUrl($lng_code)
    {

        $segments = Request::segments();
        $url = '';

        if (count($segments) <= 1) {
            return $lng_code;
        }

        foreach ($segments as $key => $segment) {
            if ($key > 0) {
                $url .= $lng_code . '/' . $segment;
            }
        }

        return url($url);

    }

    public static function paragraphAddClass($paragraph, $class)
    {
        return str_replace('<p', '<p ' . $class, $paragraph);
    }

    public static function getRowLanguangeFromAllData($data, $languageId, $linkExtend = [])
    {

        $page = (object)[];
        $languageLink = [];
        foreach ($data as $row) {
            if ($row->language_id == $languageId) {
                $page = $row;
            }

            $linkExtend = array_merge([$row->language->lng_code], $linkExtend);

            $languageLink[$row->language_id] = url(MainHelper::slug($linkExtend));
        }

        return [
            'page' => $page,
            'languageLink' => $languageLink
        ];
    }


}
