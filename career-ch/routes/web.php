<?php
// use App\Wptestswpm_members_tbl;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;


Route::get('', 'SerchController@default');
Route::get('/', 'UsersController@index');
// function () {
//     $data =DB::connection('mysql_2') -> select('select * from wptestswpm_members_tbl;');
//     return view('Users.index',['data'=>$data]);
   

// });


Route::get('/event', 'UsersController@event');
// function () {
//     $data =DB::select('select * from user_information;');
    
//     return view('Users.event',['data'=>$data]);
    
//     $event =DB::select('select * from zeal-a_central_ver2');
//     return view('Users.event',['eventName'=>$event]);
//     // $eventName = array(
//     //     // '1' => 'フェス',
//     //     // '2' => 'セレクション',
//     //     // '3' => 'フェス(女子会)',
//     //     // '4' => 'セレクション(女子会)',
//     //     // '5' => '求人フェア',
//     //     // '6' => 'マッチングイベント',
//     //     // '7' => '就活相談会',
//     //     // '8' => '模擬面接イベント',
//     //     // '100' => '登録'
//     //     ['num'=>'1','name'=>'フェス'],
//     //     ['num'=>'2','name'=>'セレクション'],
//     //     ['num'=>'1','name'=>'フェス(女子会)'],
//     //     ['num'=>'1','name'=>'セレクション(女子会)'],
//     //     ['num'=>'1','name'=>'求人フェア'],
//     //     ['num'=>'1','name'=>'マッチングイベント'],
//     //     ['num'=>'1','name'=>'就活相談会'],
//     //     ['num'=>'1','name'=>'模擬面接イベント'],
//     //     ['num'=>'1','name'=>'登録']
//     // );
//         // var_dump($eventName); 
//     // return view('Users.event',['eventName'=>$eventName]);
// });

// Route::get('/event','UsersController@fes');
Route::get('/event/selection','UsersController@selection');



Route::get('/members','UsersController@member');

Route::get('/serch','SearchController@serch');
// function () {
//     $data =DB::connection('mysql_2') -> select('select * from wptestswpm_members_tbl;');
//     return view('Users.members',['data'=>$data]);
// });

