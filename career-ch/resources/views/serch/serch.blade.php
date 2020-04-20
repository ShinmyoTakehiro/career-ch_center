@extends('default.default')

<?php $nums=0;?>  @forelse ($serch as $serch->id) <?php $nums++;?> @empty 0 @endforelse
<?php $num=0;?>  @forelse ($serch2 as $serch2->id) <?php $num++;?> @empty 0 @endforelse

  
@section('active')
<ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link " href="/career-ch/">Dashcoard</a></li>
            <li class="nav-item"><a class="nav-link " href="/career-ch/members/">career-ch会員</a></li>
            <li class="nav-item"><a class="nav-link " href="/career-ch/event">イベント</a></li>
</ul>

@endsection
@section('title')
<div class="event-title" style="padding-top:3rem;">
    
<div class="table">
    <h2 data-group="full" class="eventkind">”{{$keyword}}”の検索結果</h2>
</div>
    
</div>    
@endsection

@section('main')
                
<div class="table database table-responsive" style="padding-top:1rem; margin-bottom:3rem;">
    <h2>キャリch会員データ　<?php echo $num?>名</h2>
    <table class=" table-striped table-sm eventkind" data-group="full">
     
       <thead class="scrollhead">
           <tr>
               <th class="table-id">No.</th>
               <th class="table-name">Name</th>
               <th class="table-college">大学名</th>
               <th class="table-grad">卒業</th>
               <th class="table-since">since</th>
               <th class="table-tel">Tel</th>
               <th class="table-email">Mail</th>
               <th class="table-time">Call</th>
               <th class="table-memo">Memo</th>
               
               
   
               
           </tr>
       </thead>
       <tbody class="scrollbody" style="height:80px;">
         <?php $num=0;?>  
       @forelse ($serch2 as $serch2)
       <?php $num++;?>
           <tr>
           {{-- <td class="table2-id">{{$data->id}}</td> --}}
           <td class="table-id"><?php echo $num?></td>
      
          {{-- <td class="table2-event">{{$data->event_id}}</td> --}}
           {{-- <td>{{$data->user_name}}</td> --}}
           <td class="table-name">{{$serch2->last_name}}{{$serch2->first_name}}</td>
           <td class="table-college">{{$serch2->company_name}}</td>
           <td class="table-grad">{{$serch2->value}}</td>
           <td class="table-since">{{$serch2->member_since}}</td>
           <td class="table-tel"><a href="tel:{{$serch2->phone}}">{{$serch2->phone}}</a></td>
           <td class="table-email"><a href="mailto:{{$serch2->email}}">{{$serch2->email}}</a></td>
           <td id="schedule" class="table-time schedule">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" id="time_form" >
             @csrf
           <input type="hidden" name="member_id" value="{{$serch2->member_id}}">
            {{-- <button id="schedule-yes" onclick="showTimeYes()"><i class="fas fa-check"></i></button> --}}
            <button id="schedule-yes" type="submit" name="timey" value="timey"><i class="fas fa-check"></i></button>
            <button id="schedule-non" type="submit" name="timen"  value="timen"><i class="fas fa-times"></i></button>
            </form>
        <div id="scheduleItem" style="color:#0ABF6A;">{{$serch2->txn_id}}</div>
        {{-- <div id="scheduleItem" style="color:#0ABF6A;">{{$data2->txn_id}}</div> --}}
        </td>
           <td class="table-memo">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" id="notes_form"  class="form-group">
            @csrf
            <input type="hidden" name="member_id" value="{{$serch2->member_id}}">
            <input type="text" name="text" value="" class="form-control">
            <input type="submit" name="add" value="add" class="btn btn-secondary btn-sm">
            </form>
        <div class="memotable">{{$serch2->notes}}</div>
        </td>
           </tr>
       @empty
           <tr><td>検索にあてはまるデータがありませんでした</td></tr>
       @endforelse
   
           
       </tbody>
    </table>  
</div>

<div class="table database table-responsive" style="margin-bottom:0; padding-bottom:1rem;"> 
    <h2>イベントデータ　<?php echo $nums?>名</h2>
  <table class=" table-striped table-sm eventkind" data-group="full">
    
    <thead class="scrollhead">
        <tr>
            <th class="table2-id">No.</th>
            <th class="table2-event">event</th>
            <th class="table2-name">Name</th>
            <th class="table2-kana">ふりがな</th>
            <th class="table2-college">College</th>
            <th class="table2-graduation">Grad</th>
            <th class="table2-email">Mail</th>
            <th class="table2-tel">Tel</th>
            <th class="table2-date">面談日程</th>
            
            

            
        </tr>
    </thead>
    <tbody class="scrollbody" style="height:294px;">
      <?php $num=0;?>  
    @forelse ($serch as $serch)
    <?php $num++;?>
        <tr>
        {{-- <td class="table2-id">{{$data->id}}</td> --}}
        <td class="table2-id"><?php echo $num?></td>
    @if ((int)$serch->event_id === 1)
    <td class="table2-event">アスリートフェス</td>
    @elseif((int)$serch->event_id === 2)
    <td class="table2-event">セレクション</td> 
    @elseif((int)$serch->event_id === 3)
    <td class="table2-event">ジールフェス</td> 
    @elseif((int)$serch->event_id === 4)
    <td class="table2-event">セレクション(女子会)</td> 
    @elseif((int)$serch->event_id === 5)
    <td class="table2-event">求人フェア</td> 
    @elseif((int)$serch->event_id === 6)
    <td class="table2-event">マッチングイベント</td> 
    @elseif((int)$serch->event_id === 7)
    <td class="table2-event">就活相談会</td> 
    @elseif((int)$serch->event_id === 8)
    <td class="table2-event">模擬面接イベント</td>
    @elseif((int)$serch->event_id === 9)
    <td class="table2-event">出遅れ＆やり直し就活</td>
    @elseif((int)$serch->event_id === 10)
    <td class="table2-event">内定0脱出サポート</td>
    @elseif((int)$serch->event_id === 11)
    <td class="table2-event">納得の内定就活</td>
    @elseif((int)$serch->event_id === 12)
    <td class="table2-event">START UP 就活</td>
    @elseif((int)$serch->event_id === 13)
    <td class="table2-event">既卒・第二新卒向けサポート</td>
    @elseif((int)$serch->event_id === 14)
    <td class="table2-event">介護業界求人フェア</td>  
    @elseif((int)$serch->event_id === 15)
    <td class="table2-event">リカツ</td>
    @elseif((int)$serch->event_id === 100)
    <td class="table2-event">登録</td> 
    @elseif((int)$serch->event_id === 16)
    <td class="table2-event">楽スル就活</td>
    @elseif((int)$serch->event_id === 17)
    <td class="table2-event">社の都就職</td> 
    @elseif((int)$serch->event_id === 18)
    <td class="table2-event">内定トラベル</td>
    @elseif((int)$serch->event_id === 19)
    <td class="table2-event">Web面談</td>
    @else
    <td class="table2-event">価なし</td>   
    @endif   
       {{-- <td class="table2-event">{{$data->event_id}}</td> --}}
        {{-- <td>{{$data->user_name}}</td> --}}
        <td class="table2-name">{{$serch->user_name}}</td>
        <td class="table2-kana">{{$serch->user_kana}}</td>
        <td class="table2-college">{{$serch->college}}</td>
        <td class="table2-graduation">{{$serch->graduation}}卒</td>
        <td class="table2-email"><a href="mailto:{{$serch->mail}}">{{$serch->mail}}</a></td>
        <td class="table2-tel"><a href="tel:{{$serch->tel}}">{{$serch->tel}}</a></td>
        <td class="table2-date"><a href="">{{$serch->date}}　{{$serch->start_time}}-{{$serch->end_time}}</a></td>
        </tr>
    @empty
        <tr><td>検索にあてはまるデータがありませんでした</td></tr>
    @endforelse

        
    </tbody>
  </table>
</div>


@endsection
     