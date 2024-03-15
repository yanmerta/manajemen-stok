<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MainHelper
{
    public static $clientName = 'Travel Isurance';

    function __construct()
    {

    }

    public static function fileRename($file, $forceFileName = NULL)
    {
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $extension_length = -1 * (strlen($extension) + 1);

        if ($forceFileName) {
            $filenameUse = $forceFileName;
        } else {
            $filenameUse = substr($filename, 0, $extension_length);
        }

        $filename_new = Str::slug($filenameUse, '-') . '.' . $extension;

        $imagesFileCheckExist = Storage::exists('images/' . $filename_new);
        $videosFileCheckExist = Storage::exists('videos/' . $filename_new);
        $filesFileCheckExist = Storage::exists('files/' . $filename_new);
        $othersFileCheckExist = Storage::exists('others/' . $filename_new);

        if ($imagesFileCheckExist || $videosFileCheckExist || $filesFileCheckExist || $othersFileCheckExist) {
            $filename_new = Str::slug($filenameUse, '-') . '-' . self::strRandom(3) . '.' . $extension;
        }

        return $filename_new;
    }

    public static function strRandom($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    public static function textReadMore($str, $length = 200)
    {
        $text = strip_tags($str);
        $readMore = substr($text, 0, $length) . '...';

        return $readMore;
    }

    public static function paragraphAddClass($text, $classes)
    {
        return str_replace('<p>', '<p class="' . $classes . '">', $text);
    }

    public static function slug($str)
    {
        $link = '';
        if (is_array($str)) {
            foreach ($str as $row) {
                $link .= Str::slug($row) . '/';
            }
        } else {
            $link = Str::slug($str);
        }

        return $link;
    }

    public static function dateFormatView($date)
    {
        return date('F, d Y', strtotime($date));
    }
}
