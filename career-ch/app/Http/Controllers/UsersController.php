<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
// use App\Http\Controllers;
// use App;
class UsersController extends Controller
{
    public function index(Request $request){
    
     
    $data = DB::connection('mysql_2')->table('wptestswpm_members_tbl')->select('*',DB::raw('CONCAT(last_name,first_name)AS name'))->get();
            // ->join('zeal-a_central.user_information', 'wptestswpm_members_tbl.last_name*', '=', 'user_information.user_name')
            
    $data2 = DB::table('user_information')->select('*')->get();
       #キーワード受け取り
       $keyword = $request->input('keyword');

  
    return view('Users.index',['data'=>$data,'data2'=>$data2])->with('keyword',$keyword);
    }

    public function event(Request $request){
        $data =DB::table('user_information')
        ->groupBy('user_name','college','graduation','event_id','date','start_time')
        ->orderBy('id','desc')
        ->get();

        $fes =DB::table('user_information')->where('event_id','1')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $select = DB::table('user_information')->where('event_id','2')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $festivalw = DB::table('user_information')->where('event_id','3')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $selectg = DB::table('user_information')->where('event_id','4')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $fea = DB::table('user_information')->where('event_id','5')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $matching = DB::table('user_information')->where('event_id','6')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $requrutevent = DB::table('user_information')->where('event_id','7')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();                                                                                                                                                                                                                              
        $interviewevent = DB::table('user_information')->where('event_id','8')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $exhibition = DB::table('user_information')->where('event_id','9')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $event10 = DB::table('user_information')->where('event_id','10')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $event11 = DB::table('user_information')->where('event_id','11')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $event12 = DB::table('user_information')->where('event_id','12')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $event13 = DB::table('user_information')->where('event_id','13')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $event14 = DB::table('user_information')->where('event_id','14')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $event15 = DB::table('user_information')->where('event_id','15')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $easy =    DB::table('user_information')->where('event_id','16')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $event17 = DB::table('user_information')->where('event_id','17')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $event18 = DB::table('user_information')->where('event_id','18')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();
        $event19 = DB::table('user_information')->where('event_id','19')->groupBy('user_name','college','graduation','date','start_time')->orderBy('date','desc')->get();


        $data2 = DB::connection('mysql_2')
        ->table('wptestswpm_members_tbl')
        ->get();

         #キーワード受け取り
         $keyword = $request->input('keyword');

         #ページネーション
        return view('Users.event',['data'=>$data,'data2'=>$data2,'fes'=>$fes,'select'=>$select,'festivalw'=>$festivalw,
                                    'selectg'=>$selectg,'fea'=>$fea,'matching'=>$matching,'requrut'=>$requrutevent,
                                    'interview'=>$interviewevent,'exhibition'=>$exhibition,'event10'=>$event10,'event11'=>$event11,                                   
                                    'event12'=>$event12,'event13'=>$event13,'event14'=>$event14,'event15'=>$event15,'easy'=>$easy,'event17'=>$event17,'event18'=>$event18,'event19'=>$event19])
                                    ->with('keyword',$keyword);

       
    }


    

    public function member(Request $request){
        $data =DB::connection('mysql_2') 
        -> table('wptestswpm_members_tbl')
        ->join('wptestswpm_form_builder_custom', function ($join){
            $join->on('wptestswpm_members_tbl.member_id','=','wptestswpm_form_builder_custom.user_id')
                 ->whereIn('wptestswpm_form_builder_custom.field_id',[53,158,166,433,208,229,251,283,304,330,381,411]);
        })

        ->orderBy('member_id','desc')
        ->get();

         #キーワード受け取り
         $keyword = $request->input('keyword');

    return view('Users.members',['data'=>$data] )->with('keyword',$keyword);
    }

    public function update(Request $request){

        // POST送信した内容をdbに保存。submitをどれ押すかによって条件分岐
        $time = new Carbon(Carbon::now()->format('Y/m/d H:i'));

        if (Input::get('timey')) {
            DB::connection('mysql_2')
            ->table('wptestswpm_members_tbl')
            ->where('member_id',$request->member_id)
            ->update(['txn_id'=>$time,]);
        } elseif (Input::get('add')){
           
            DB::connection('mysql_2')
            ->table('wptestswpm_members_tbl')
            ->where('member_id',$request->member_id)
            ->update(['notes'=>$request->text]);
            
        }
        

        $data =DB::connection('mysql_2') 
        -> table('wptestswpm_members_tbl')
        ->join('wptestswpm_form_builder_custom', function ($join){
            $join->on('wptestswpm_members_tbl.member_id','=','wptestswpm_form_builder_custom.user_id')
                 ->whereIn('wptestswpm_form_builder_custom.field_id',[53,158,166,433,208,229,251,283,304,330,381,411]);
        })
        ->orderBy('member_id','desc')
        ->get();

         #キーワード受け取り
         $keyword = $request->input('keyword');

         #クエリ生成
         $query = DB::query();
         $query2 = DB::connection('mysql_2')->table('wptestswpm_members_tbl');
 
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

             $query2->where('last_name','like','%'.$keyword.'%')
             ->orWhere('first_name','like','%'.$keyword.'%')
             ->orWhere('member_since','like','%'.$keyword.'%')
             ->orWhere('email','like','%'.$keyword.'%')
             ->orWhere('phone','like','%'.$keyword.'%')
             // ->orWhere('txn_id','like','%'.$keyword.'%')
             ->orWhere('notes','like','%'.$keyword.'%');
         }
 
         #ページネーション
         $serch = $query->orderBy('id','desc');  
         $serch2 = $query2->groupBy('last_name','first_name','member_since','email','phone','notes')->orderBy('last_name','desc')->get();//->paginate();

        return view('Users.members',['data'=>$data])->with('serch',$serch)->with('serch2',$serch2)->with('keyword',$keyword);
    }




}
