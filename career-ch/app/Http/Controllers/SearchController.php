<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function serch(Request $request){
        #キーワード受け取り
        $keyword = $request->input('keyword');

        #クエリ生成
        $query = DB::table('user_information');

        #もしキーワードがあったら
        if (!empty($keyword)) 
        {
            $query->where('user_name','like','%'.$keyword.'%')
            ->orWhere('user_kana','like','%'.$keyword.'%')
            ->orWhere('college','like','%'.$keyword.'%')
            ->orWhere('graduation','like','%'.$keyword.'%')
            ->orWhere('date','like','%'.$keyword.'%')
            ->orWhere('start_time','like','%'.$keyword.'%')
            ->orWhere('end_time','like','%'.$keyword.'%');
        }

        #ページネーション
        $serch = $query->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();//->paginate();
        return view('serch.serch')->with('serch',$serch)->with('keyword',$keyword);
    }

}
