<?php

namespace App\Http\Controllers\Admin;

use App\Models\ListModel;
use App\Helpers\MainHelper;
use App\Helpers\AdminHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductAndServiceModel;
use Illuminate\Support\Facades\Storage;

class ListController extends Controller
{
    function dataList(Request $request)
    {
        $data = AdminHelper::data_primary();
        $pdtsvc_id = $request->input('pdtsvc_id');
        $row = ProductAndServiceModel::all();
        $list = ListModel::where('language_id', $data['language_id'])->where('pdtsvc_id', $pdtsvc_id)->get();
        $data = [
            'list' => $list,
            'row' => $row,
            'pageTitle' => AdminHelper::menuList()['productAndService'],
        ];

        $data = array_merge(AdminHelper::data_primary(), $data);
        return view('admin.productAndService.list.listDataList', $data);
    }

    // function dataCreate()
    // {
    //     $list = ProductAndServiceModel::select('id', 'nama_ket')->get();
    //     return view('admin.productAndService.list.listDataList', compact('list'));
    // }


    function dataInsert(Request $request)
    {
        $request->validate([
//            "list_title" => 'required',
            "list_active_status" => 'required',


        ]);

        $data_insert = $request->except(['_token']);
        $language_id = $data_insert['language_id'];

        $row = ListModel::where('language_id', $language_id)->first();

        ListModel::create($data_insert);
    }

    function dataEdit($list_id)
    {
        $data = AdminHelper::data_primary();
        $row = ListModel::where('list_id', $list_id)
        ->where('language_id', $data['language_id'])
        ->first();


        $data = [
            'row' => $row
        ];
        $data = array_merge(AdminHelper::data_primary(), $data);
        return view('admin.productAndService.list.listDataEditModal', $data);
    }

    function dataUpdate(Request $request, $list_id)
    {
        $request->validate([
//            "list_title" => 'required',
            "list_active_status" => 'required',
        ]);

        $data_update = $request->except('_token');
        $language_id = $data_update['language_id'];

        $row = ListModel::where('language_id', $language_id)->first();

        ListModel::where('list_id', $list_id)->update($data_update);
    }


    function dataDelete($list_id)
    {
        ListModel::where('list_id', $list_id)->delete();
    }
}
