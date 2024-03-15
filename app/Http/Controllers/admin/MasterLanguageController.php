<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\MainHelper;
use App\Helpers\AdminHelper;
use App\Models\LanguageModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MasterLanguageController extends Controller
{
    function list()
    {
        $list = LanguageModel::all();
        $data = [
            'list' => $list,
            'menuActive' => 'master_language'
        ];

        $data = array_merge(AdminHelper::data_primary(), $data);
        return view('admin.masterLanguage.masterLanguageList', $data);
    }

    function insert(Request $request)
    {
        $request->validate([
            "lng_name" => 'required',
            // "lng_flag_filename" => 'required',
            "lng_code" => 'required',
            "lng_active_status" => 'required',
        ]);

        $data_insert = $request->except(['_token']);

        $file = $request->file('lng_flag_filename');
        $filename = MainHelper::fileRename($file, $data_insert['lng_name']);
        Storage::putFileAs('images', $file, $filename);
        $data_insert['lng_flag_filename'] = $filename;

        LanguageModel::create($data_insert);
    }

    function edit($language_id)
    {
        $row = LanguageModel::where('language_id', $language_id)->first();

        $data = [
            'row' => $row
        ];

        return view('admin.masterLanguage.masterLanguageEdit', $data);
    }

    function update(Request $request, $language_id)
    {
        $request->validate([
            "lng_name" => 'required',
            // "lng_flag_filename" => 'required',
            "lng_code" => 'required',
            "lng_active_status" => 'required',
        ]);

        $data_update = $request->except('_token');

        if ($request->hasFile('lng_flag_filename')) {
            $lng_flag_filename = LanguageModel
                ::select('lng_flag_filename')
                ->where('language_id', $language_id)
                ->value('lng_flag_filename');

            Storage::delete('images/' . $lng_flag_filename);

            $file = $request->file('lng_flag_filename');
            $filename = MainHelper::fileRename($file, $data_update['lng_name']);
            Storage::putFileAs('images', $file, $filename);

            $data_update['lng_flag_filename'] = $filename;

        }


        LanguageModel::where('language_id', $language_id)->update($data_update);
    }

    function Delete($language_id)
    {
        $lng_flag_filename = languageModel
            ::select('lng_flag_filename')
            ->where('language_id', $language_id)
            ->value('lng_flag_filename');

        Storage::delete('images/' . $lng_flag_filename);

        LanguageModel::where('language_id', $language_id)->delete();
    }
}

