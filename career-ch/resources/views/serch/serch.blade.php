@extends('default.default')

<?php $nums=0;?>  @forelse ($serch as $serch->id) <?php $nums++;?> @empty 0 @endforelse

@section('search')
<!--↓↓ 検索フォーム ↓↓-->
<form class="form-inline" action="{{url('/serch')}}"> 
<input type="text" name="keyword" value="{{$keyword}}" class="form-control form-control-dark w-100" placeholder="search">


<input type="submit" value="search" class="nav-link search">

</form>

<!--↑↑ 検索フォーム ↑↑-->   
@section('active')
<ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link " href="/career-ch/">Dashcoard</a></li>
            <li class="nav-item"><a class="nav-link " href="/career-ch/members/">career-ch会員</a></li>
            <li class="nav-item"><a class="nav-link active" href="/career-ch/event">イベント</a></li>
</ul>
@endsection
@endsection
@section('title')
<div class="event-title">
    
<div class="table">
    <h2 data-group="full" class="eventkind">”{{$keyword}}”の検索結果　<?php echo $nums?>名</h2>
</div>
    
</div>    
@endsection

@section('main')
                
        

<div class="table database table-responsive"> <table class=" table-striped table-sm eventkind" data-group="full">
    <ul class="btn-group">
        {{-- {{$serch->appends(Request::only('keyword'))->links() }} --}}
    </ul>
     <?php //var_dump($serch)?> 
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
    <tbody class="scrollbody">
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
    @else
    <td class="table2-event"></td>   
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
        
</table>
    
</div>
@endsection
     