<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{

/**
     * 一覧を取得する
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Database\Eloquent\Collection
*/

public function serch(Request $request){
    
    // $data = DB::connection('mysql_2')->table('wptestswpm_members_tbl')->select('*',DB::raw('CONCAT(last_name,first_name)AS name'))->get();
            // ->join('zeal-a_central.user_information', 'wptestswpm_members_tbl.last_name*', '=', 'user_information.user_name')
            
    $data2 = DB::table('user_information')->select('*')->get();
       #キーワード受け取り
       $keyword = $request->input('keyword');

       #クエリ生成
       $query = DB::query();
    //    $query2 = DB::connection('mysql_2')->table('wptestswpm_members_tbl');
       #もしキーワードがあったら
       if (!empty($keyword)) 
       {
           $query=DB::table('user_information')
           ->where('user_name','like','%'.$keyword.'%')
           ->orWhere('user_kana','like','%'.$keyword.'%')
           ->orWhere('college','like','%'.$keyword.'%')
           ->orWhere('graduation','like','%'.$keyword.'%')
           ->orWhere('date','like','%'.$keyword.'%')
           ->orWhere('event_id','like','%'.$keyword.'%')
           ->orWhere('start_time','like','%'.$keyword.'%')
           ->orWhere('end_time','like','%'.$keyword.'%');

            $query2= DB::connection('mysql_2')
               ->table('wptestswpm_members_tbl')
               ->join('wptestswpm_form_builder_custom', 'wptestswpm_members_tbl.member_id','=','wptestswpm_form_builder_custom.user_id')
                     ->whereIn('wptestswpm_form_builder_custom.field_id',[53,158,166,433,208,229,251,283,304,330,381,411])
                     ->where('value','like','%'.$keyword.'%') 
            
               ->where('last_name','like','%'.$keyword.'%')
               ->orWhere('first_name','like','%'.$keyword.'%')
               ->orWhere('value','like','%'.$keyword.'%')
            //   ->orWhere('member_since','like','%'.$keyword.'%')
              ->orWhere('member_id','like','%'.$keyword.'%')
              ->orWhere('email','like','%'.$keyword.'%')
              ->orWhere('phone','like','%'.$keyword.'%')
              ->orWhere('txn_id','like','%'.$keyword.'%')
              ->orWhere('notes','like','%'.$keyword.'%');

            //   $query3 = DB::connection('mysql_2')
            //   ->table('wptestswpm_form_builder_custom')
            //       ->where('value','like','%'.$keyword.'%') 
            //       ->join('wptestswpm_members_tbl', 'wptestswpm_form_builder_custom.user_id','=','wptestswpm_members_tbl.member_id')
            //       ->whereIn('wptestswpm_form_builder_custom.field_id',[53,158,166,433,208,229,251,283,304,330,381,411])
            //            ;
              
       }

       #ページネーション
       $serch = $query->orderBy('user_name','desc');
       $serch2 = $query2->orderBy('last_name','desc');

       $serch = $serch->get();
       $serch2 = $serch2->get();
    //    $serch2 = $query2->groupBy('last_name','first_name','member_since','email','phone','notes')->orderBy('last_name','desc')->get();//->paginate();
    // return view('serch.serch',['data'=>$data,'data2'=>$data2])->with('serch',$serch)->with('keyword',$keyword);
    // return view('serch.serch',['data2'=>$data2])->with('serch',$serch)->with('serch2',$serch2)->with('keyword',$keyword);
    return view('serch.serch',['data2'=>$data2])->with('serch',$serch)->with('serch2',$serch2)->with('keyword',$keyword);
    // return view('Users.index',['data'=>$data,'data2'=>$data2])->with('serch',$serch)->with('serch2',$serch2)->with('keyword',$keyword);
    // return view('Users.index',compact('data','data2'));
    // return view('Users.index')->with($data);
    // var_dump($data2);

}













public function sample(Request $request){
        
    //最新の方法   
$keyword = $request->input('keyword');
    $serch = DB::query();
    

    if (!empty($keyword)) {
        $serch->where('user_name','like','%'.$keyword.'%');
    }
    //$request->input()で検索時に入力した項目を取得します。
    // $keyword = $request->input('keyword');

    // ユーザ名入力フォームで入力した文字列を含むカラムを取得します
    // if ($request->has('keyword')&& $keyword !='') {
    //     $serch ->where('user_name','like','%'.$keyword.'%')
    //             ->orWhere('user_kana','like','%'.$keyword.'%')
    //             ->orWhere('college','like','%'.$keyword.'%')
    //             ->orWhere('graduation','like','%'.$keyword.'%')
    //             ->orWhere('date','like','%'.$keyword.'%')
    //             ->orWhere('start_time','like','%'.$keyword.'%')
    //             ->orWhere('id','like','%'.$keyword.'%')
    //             ->orWhere('mail','like','%'.$keyword.'%')
    //             ->orWhere('tel','like','%'.$keyword.'%')
    //             ->orWhere('event_id','like','%'.$keyword.'%')
    //             ->orWhere('end_time','like','%'.$keyword.'%')
    //             ->orderBy('id','desc')
    //             ->get();
    // }

    // $serch = $query->paginate('100');
    // $serch = $query;
    // $serch = $query->orderBy('id','desc');//->paginate();


    return view('serch.serch')
        ->with('serch',$serch)
        ->with('keyword',$keyword);

$query = DB::table('user_information');



$data = DB::connection('mysql_2')->table('wptestswpm_members_tbl')->select('*',DB::raw('CONCAT(last_name,first_name)AS name'))->get();
// ->join('zeal-a_central.user_information', 'wptestswpm_members_tbl.last_name*', '=', 'user_information.user_name')

$data2 = DB::table('user_information')->select('*')->get();





        #キーワード受け取り
        $keyword = $request->input('keyword');

        #クエリ生成
        // $query = DB::query();
        
        // $query = DB::table('user_information')
        //         ->where('user_name','like','%'.$keyword.'%')
        //         ->orWhere('user_kana','like','%'.$keyword.'%')
        //         ->orWhere('college','like','%'.$keyword.'%')
        //         ->orWhere('graduation','like','%'.$keyword.'%')
        //         ->orWhere('date','like','%'.$keyword.'%')
        //         ->orWhere('start_time','like','%'.$keyword.'%')
        //         ->orWhere('end_time','like','%'.$keyword.'%')->get();
        // $query2 = DB::connection('mysql_2')->table('wptestswpm_members_tbl')
        //         ->where('last_name','like','%'.$keyword.'%')
        //         ->orWhere('first_name','like','%'.$keyword.'%')
        //         ->orWhere('member_since','like','%'.$keyword.'%')
        //         ->orWhere('email','like','%'.$keyword.'%')
        //         ->orWhere('phone','like','%'.$keyword.'%')
        //         ->orWhere('txn_id','like','%'.$keyword.'%')
        //         ->orWhere('notes','like','%'.$keyword.'%')->get();
        #もしキーワードがあったら
        if (!empty($keyword)) 
        {
            $query->where('user_name','like','%'.$keyword.'%')
            ->orWhere('user_kana','like','%'.$keyword.'%')
            ->orWhere('college','like','%'.$keyword.'%')
            ->orWhere('graduation','like','%'.$keyword.'%')
            ->orWhere('date','like','%'.$keyword.'%')
            ->orWhere('event_id','like','%'.$keyword.'%')
            ->orWhere('start_time','like','%'.$keyword.'%')
            ->orWhere('end_time','like','%'.$keyword.'%');

        //     $query2->where('last_name','like','%'.$keyword.'%')
        //     ->orWhere('first_name','like','%'.$keyword.'%')
        //     ->orWhere('member_since','like','%'.$keyword.'%')
        //     ->orWhere('email','like','%'.$keyword.'%')
        //     ->orWhere('phone','like','%'.$keyword.'%')
        //     ->orWhere('txn_id','like','%'.$keyword.'%')
        //     ->orWhere('notes','like','%'.$keyword.'%')->get();

        }

        // $serch1 = [];
        // foreach($query as $p1){
        //     if($p1){
        //         $serch1[] = $p1->id;
        //     }
        // }

        // $serch2 = [];
        // foreach($query2 as $p2){
        //     if($p2){
        //         $serch2[] = $p2->id;
        //     }
        // }

        // $serch = DB::table('user_information')->whereIn('id', $serch1)->orWhereIn('member_id', $serch2)->get();

        #ページネーション
        $serch = $query->orderBy('id','desc');//->paginate();
        // $serch2 = $query2->groupBy('last_name','first_name','member_since','email','phone','notes')->orderBy('last_name','desc')->get();//->paginate();
        return view('serch.serch')->with('serch',$serch)->with('keyword',$keyword);
        // return view('serch.serch',['data'=>$data,'data2'=>$data2])->with('serch',$serch)->with('keyword',$keyword);
        // return view('serch.serch',['serch',$serch])->with('keyword',$keyword);
    //     return view('serch.serch',$serch);
    }

}
