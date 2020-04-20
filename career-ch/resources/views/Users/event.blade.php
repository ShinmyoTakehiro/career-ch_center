@extends('default.default')

   

    <?php $nums=0;?>  @forelse ($data as $data->id) <?php $nums++;?> @empty 0 @endforelse
    <?php $num1=0;?>  @forelse ($fes as $fes->event_id)<?php $num1++;?> @empty 0 @endforelse
    <?php $num2=0;?>  @forelse ($select as $select->event_id) <?php $num2++;?>  @empty 0 @endforelse
    <?php $num3=0;?>  @forelse ($festivalw as $festivalw->event_id) <?php $num3++;?>  @empty 0 @endforelse
    <?php $num4=0;?>  @forelse ($selectg as $selectg->event_id) <?php $num4++;?>  @empty 0 @endforelse
    <?php $num5=0;?>  @forelse ($fea as $fea->event_id) <?php $num5++;?>  @empty 0 @endforelse
    <?php $num6=0;?>  @forelse ($matching as $matching->event_id) <?php $num6++;?>  @empty 0 @endforelse
    <?php $num7=0;?>  @forelse ($requrut as $requrut->event_id) <?php $num7++;?>  @empty 0 @endforelse
    <?php $num8=0;?>  @forelse ($interview as $interview->event_id) <?php $num8++;?>  @empty 0 @endforelse
    <?php $num9=0;?>  @forelse ($exhibition as $exhibition->event_id) <?php $num9++;?>  @empty 0 @endforelse
    <?php $num10=0;?>  @forelse ($event10 as $event10->event_id) <?php $num10++;?>  @empty 0 @endforelse
    <?php $num11=0;?>  @forelse ($event11 as $event11->event_id) <?php $num11++;?>  @empty 0 @endforelse
    <?php $num12=0;?>  @forelse ($event12 as $event12->event_id) <?php $num12++;?>  @empty 0 @endforelse
    <?php $num13=0;?>  @forelse ($event13 as $event13->event_id) <?php $num13++;?>  @empty 0 @endforelse
    <?php $num14=0;?>  @forelse ($event14 as $event14->event_id) <?php $num14++;?>  @empty 0 @endforelse
    <?php $num15=0;?>  @forelse ($event15 as $event15->event_id) <?php $num15++;?>  @empty 0 @endforelse
    <?php $num16=0;?> @forelse ($easy as $easy->event_id) <?php $num16++;?>  @empty 0 @endforelse
    <?php $num17=0;?>  @forelse ($event17 as $event17->event_id) <?php $num17++;?>  @empty 0 @endforelse
    <?php $num18=0;?>  @forelse ($event18 as $event18->event_id) <?php $num18++;?>  @empty 0 @endforelse
    <?php $num19=0;?>  @forelse ($event19 as $event19->event_id) <?php $num19++;?>  @empty 0 @endforelse


        @section('title')
        <div class="event-title">
        <div id="table" class="table-head">
            <h2 data-group="full" class="eventkind">イベント参加者一覧　<?php echo $nums?>名</h2>
            <h2 data-group="fes" class="eventkind">アスリートフェス　<?php echo $num1?>名</h2>
            <h2 data-group="selection" class="eventkind">セレクション　<?php echo $num2?>名</h2>
            <h2 data-group="womenf" class="eventkind">ジールフェス　<?php echo $num3?>名</h2>
            <h2 data-group="ladyselct" class="eventkind">セレクション(女子会)　<?php echo $num4?>名</h2>
            <h2 data-group="fea" class="eventkind">求人フェア　<?php echo $num5?>名</h2>
            <h2 data-group="matching" class="eventkind">マッチングイベント　<?php echo $num6?>名</h2>
            <h2 data-group="requrutevent" class="eventkind">就活相談会　<?php echo $num7?>名</h2>
            <h2 data-group="interviewevent" class="eventkind">模擬面接イベント　<?php echo $num8?>名</h2>
            <h2 data-group="exhibition" class="eventkind">出遅れ＆やり直し就活　<?php echo $num9?>名</h2>
            <h2 data-group="event10" class="eventkind">内定0脱出サポート　<?php echo $num10?>名</h2>
            <h2 data-group="event11" class="eventkind">納得の内定就活　<?php echo $num11?>名</h2>
            <h2 data-group="event12" class="eventkind">START UP 就活　<?php echo $num12?>名</h2>
            <h2 data-group="event13" class="eventkind">既卒・第二新卒向けサポート　<?php echo $num13?>名</h2>
            <h2 data-group="event14" class="eventkind">介護業界求人フェア　<?php echo $num14?>名</h2>
            <h2 data-group="event15" class="eventkind">リカツ　<?php echo $num15?>名</h2>
            <h2 data-group="easy" class="eventkind">楽スル就活　<?php echo $num16?>名</h2>
            <h2 data-group="event17" class="eventkind">社の都就職　<?php echo $num17?>名</h2>
            <h2 data-group="event18" class="eventkind">内定トラベル　<?php echo $num18?>名</h2>
            <h2 data-group="event19" class="eventkind">Web面談　<?php echo $num19?>名</h2>
        </div>
            <ul class="btn-group">
                <li data-group="full" class="btn btn-secondary active">全体</a> 
               <li data-group="fes" class="btn btn-secondary">アスリートフェス</a> 
               <li data-group="selection" class="btn btn-secondary">セレクション</a> 
               <li data-group="womenf" class="btn btn-secondary">ジールフェス</a>
               <li data-group="ladyselct" class="btn btn-secondary">セレクション(女子会)</a> 
               <li data-group="fea" class="btn btn-secondary">求人フェア</a> 
               <li data-group="matching" class="btn btn-secondary">マッチングイベント</a> 
               <li data-group="requrutevent" class="btn btn-secondary">就活相談会</a> 
               <li data-group="interviewevent" class="btn btn-secondary">模擬面接イベント</a> 
               <li data-group="exhibition" class="btn btn-secondary">出遅れ＆やり直し</a> 
               <li data-group="event10" class="btn btn-secondary">内定0脱出サポート</a> 
                <li data-group="event11" class="btn btn-secondary">納得の内定就活</a> 
                <li data-group="event12" class="btn btn-secondary">START UP 就活</a> 
                <li data-group="event13" class="btn btn-secondary">既卒・第二新卒向けサポート</a> 
                <li data-group="event14" class="btn btn-secondary">介護業界求人フェア</a> 
                <li data-group="event15" class="btn btn-secondary">リカツ</a> 
                <li data-group="easy" class="btn btn-secondary">楽スル</a> 
                <li data-group="event17" class="btn btn-secondary">社の都就職</a> 
                <li data-group="event18" class="btn btn-secondary">内定トラベル</a> 
                <li data-group="event19" class="btn btn-secondary">Web面談</a> 

               

            </ul>
        </div>    
        @endsection
      {{--  @section('search')
          <!--↓↓ 検索フォーム ↓↓-->
     <form class="form-inline" action="{{url('/serch')}}"> 
    <input type="text" name="keyword" value="{{$keyword}}" class="form-control form-control-dark w-100" placeholder="serch">

     
      <input type="submit" value="search" class="nav-link search">
 
    </form> 
   
    <!--↑↑ 検索フォーム ↑↑-->   
        @endsection--}}
          @section('active')
        <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link " href="/career-ch/">Dashcoard</a></li>
                    <li class="nav-item"><a class="nav-link " href="/career-ch/members/">career-ch会員</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/career-ch/event">イベント</a></li>
        </ul>
    @endsection
        @section('main')
                
        


        <div id="table" class="table database table-responsive" style="padding-bottom:36px; margin-bottom:0;">
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
                <tbody class="scrollbody">
                  <?php $num=0;?>  
                @forelse ($data as $data)
                <?php $num++;?>
                @if ($data->cancel_flg == 0)
                    
                
                    
                
                    <tr>
                    {{-- <td class="table2-id">{{$data->id}}</td> --}}
                    <td class="table2-id"><?php echo $num?></td>
                @if ((int)$data->event_id === 1)
                <td class="table2-event">アスリートフェス</td>
                @elseif((int)$data->event_id === 2)
                <td class="table2-event">セレクション</td> 
                @elseif((int)$data->event_id === 3)
                <td class="table2-event">ジールフェス</td> 
                @elseif((int)$data->event_id === 4)
                <td class="table2-event">セレクション(女子会)</td> 
                @elseif((int)$data->event_id === 5)
                <td class="table2-event">求人フェア</td> 
                @elseif((int)$data->event_id === 6)
                <td class="table2-event">マッチングイベント</td> 
                @elseif((int)$data->event_id === 7)
                <td class="table2-event">就活相談会</td> 
                @elseif((int)$data->event_id === 8)
                <td class="table2-event">模擬面接イベント</td>
                @elseif((int)$data->event_id === 9)
                <td class="table2-event">出遅れ＆やり直し就活</td>
                @elseif((int)$data->event_id === 10)
                <td class="table2-event">内定0脱出サポート</td>
                @elseif((int)$data->event_id === 11)
                <td class="table2-event">納得の内定就活</td>
                @elseif((int)$data->event_id === 12)
                <td class="table2-event">START UP 就活</td>
                @elseif((int)$data->event_id === 13)
                <td class="table2-event">既卒・第二新卒向けサポート</td>
                @elseif((int)$data->event_id === 14)
                <td class="table2-event">介護業界求人フェア</td>  
                @elseif((int)$data->event_id === 15)
                <td class="table2-event">リカツ</td>
                @elseif((int)$data->event_id === 100)
                <td class="table2-event">登録</td> 
                @elseif((int)$data->event_id === 16)
                <td class="table2-event">楽スル就活</td>
                @elseif((int)$data->event_id === 17)
                <td class="table2-event">社の都就職</td> 
                @elseif((int)$data->event_id === 18)
                <td class="table2-event">内定トラベル</td>
                @elseif((int)$data->event_id === 19)
                <td class="table2-event">Web面談</td>
                @else
                <td class="table2-event"></td>   
                @endif   
                   {{-- <td class="table2-event">{{$data->event_id}}</td> --}}
                    {{-- <td>{{$data->user_name}}</td> --}}
                    <td class="table2-name">{{$data->user_name}}</td>
                    <td class="table2-kana">{{$data->user_kana}}</td>
                    <td class="table2-college">{{$data->college}}</td>
                    <td class="table2-graduation">{{$data->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$data->mail}}">{{$data->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$data->tel}}">{{$data->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$data->date}}　{{$data->start_time}}-{{$data->end_time}}</a></td>
                    </tr>
                @else
                {{-- キャンセル学生の背景色変更 --}}
                <tr style="background-color:#ff8a7f;">
                        {{-- <td class="table2-id">{{$data->id}}</td> --}}
                        <td class="table2-id"><?php echo $num?></td>
                    @if ((int)$data->event_id === 1)
                    <td class="table2-event">アスリートフェス</td>
                    @elseif((int)$data->event_id === 2)
                    <td class="table2-event">セレクション</td> 
                    @elseif((int)$data->event_id === 3)
                    <td class="table2-event">ジールフェス</td> 
                    @elseif((int)$data->event_id === 4)
                    <td class="table2-event">セレクション(女子会)</td> 
                    @elseif((int)$data->event_id === 5)
                    <td class="table2-event">求人フェア</td> 
                    @elseif((int)$data->event_id === 6)
                    <td class="table2-event">マッチングイベント</td> 
                    @elseif((int)$data->event_id === 7)
                    <td class="table2-event">就活相談会</td> 
                    @elseif((int)$data->event_id === 8)
                    <td class="table2-event">模擬面接イベント</td>
                    @elseif((int)$data->event_id === 9)
                    <td class="table2-event">出遅れ＆やり直し就活</td>
                    @elseif((int)$data->event_id === 10)
                    <td class="table2-event">内定0脱出サポート</td>
                    @elseif((int)$data->event_id === 11)
                    <td class="table2-event">納得の内定就活</td>
                    @elseif((int)$data->event_id === 12)
                    <td class="table2-event">START UP 就活</td>
                    @elseif((int)$data->event_id === 13)
                    <td class="table2-event">既卒・第二新卒向けサポート</td>
                    @elseif((int)$data->event_id === 14)
                    <td class="table2-event">介護業界求人フェア</td>  
                    @elseif((int)$data->event_id === 15)
                    <td class="table2-event">リカツ</td>
                    @elseif((int)$data->event_id === 100)
                    <td class="table2-event">登録</td> 
                    @elseif((int)$data->event_id === 16)
                    <td class="table2-event">楽スル就活</td>
                    @elseif((int)$data->event_id === 17)
                    <td class="table2-event">社の都就職</td>
                    @elseif((int)$data->event_id === 18)
                    <td class="table2-event">内定トラベル</td>
                    @elseif((int)$data->event_id === 19)
                    <td class="table2-event">Web面談</td>
                    @else
                    <td class="table2-event"></td>   
                    @endif   
                    {{-- <td class="table2-event">{{$data->event_id}}</td> --}}
                        {{-- <td>{{$data->user_name}}</td> --}}
                        <td class="table2-name">{{$data->user_name}}</td>
                        <td class="table2-kana">{{$data->user_kana}}</td>
                        <td class="table2-college">{{$data->college}}</td>
                        <td class="table2-graduation">{{$data->graduation}}卒</td>
                        <td class="table2-email"><a href="mailto:{{$data->mail}}">{{$data->mail}}</a></td>
                        <td class="table2-tel"><a href="tel:{{$data->tel}}">{{$data->tel}}</a></td>
                        <td class="table2-date"><a href="">{{$data->date}}　{{$data->start_time}}-{{$data->end_time}}</a></td>
                </tr>
                @endif
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="fes">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($fes as $fes)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$fes->user_name}}</td>
                    <td class="table2-kana">{{$fes->user_kana}}</td>
                    <td class="table2-college">{{$fes->college}}</td>
                    <td class="table2-graduation">{{$fes->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$fes->mail}}">{{$fes->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$fes->tel}}">{{$fes->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$fes->date}}　{{$fes->start_time}}-{{$fes->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="selection">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($select as $select)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$select->user_name}}</td>
                    <td class="table2-kana">{{$select->user_kana}}</td>
                    <td class="table2-college">{{$select->college}}</td>
                    <td class="table2-graduation">{{$select->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$select->mail}}">{{$select->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$select->tel}}">{{$select->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$select->date}}　{{$select->start_time}}-{{$select->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="womenf">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($festivalw as $festivalw)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$festivalw->user_name}}</td>
                    <td class="table2-kana">{{$festivalw->user_kana}}</td>
                    <td class="table2-college">{{$festivalw->college}}</td>
                    <td class="table2-graduation">{{$festivalw->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$festivalw->mail}}">{{$festivalw->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$festivalw->tel}}">{{$festivalw->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$festivalw->date}}　{{$festivalw->start_time}}-{{$festivalw->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="ladyselct">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($selectg as $selectg)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$selectg->user_name}}</td>
                    <td class="table2-kana">{{$selectg->user_kana}}</td>
                    <td class="table2-college">{{$selectg->college}}</td>
                    <td class="table2-graduation">{{$selectg->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$selectg->mail}}">{{$selectg->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$selectg->tel}}">{{$selectg->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$selectg->date}}　{{$selectg->start_time}}-{{$selectg->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="fea">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($fea as $fea)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$fea->user_name}}</td>
                    <td class="table2-kana">{{$fea->user_kana}}</td>
                    <td class="table2-college">{{$fea->college}}</td>
                    <td class="table2-graduation">{{$fea->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$fea->mail}}">{{$fea->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$fea->tel}}">{{$fea->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$fea->date}}　{{$fea->start_time}}-{{$fea->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="matching">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($matching as $matching)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$matching->user_name}}</td>
                    <td class="table2-kana">{{$matching->user_kana}}</td>
                    <td class="table2-college">{{$matching->college}}</td>
                    <td class="table2-graduation">{{$matching->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$matching->mail}}">{{$matching->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$matching->tel}}">{{$matching->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$matching->date}}　{{$matching->start_time}}-{{$matching->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="requrutevent">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($requrut as $requrut)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$requrut->user_name}}</td>
                    <td class="table2-kana">{{$requrut->user_kana}}</td>
                    <td class="table2-college">{{$requrut->college}}</td>
                    <td class="table2-graduation">{{$requrut->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$requrut->mail}}">{{$requrut->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$requrut->tel}}">{{$requrut->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$requrut->date}}　{{$requrut->start_time}}-{{$requrut->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="interviewevent">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($interview as $interview)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$interview->user_name}}</td>
                    <td class="table2-kana">{{$interview->user_kana}}</td>
                    <td class="table2-college">{{$interview->college}}</td>
                    <td class="table2-graduation">{{$interview->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$interview->mail}}">{{$interview->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$interview->tel}}">{{$interview->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$interview->date}}　{{$interview->start_time}}-{{$interview->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="exhibition">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($exhibition as $exhibition)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$exhibition->user_name}}</td>
                    <td class="table2-kana">{{$exhibition->user_kana}}</td>
                    <td class="table2-college">{{$exhibition->college}}</td>
                    <td class="table2-graduation">{{$exhibition->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$exhibition->mail}}">{{$exhibition->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$exhibition->tel}}">{{$exhibition->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$exhibition->date}}　{{$exhibition->start_time}}-{{$exhibition->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="event10">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($event10 as $event10)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$event10->user_name}}</td>
                    <td class="table2-kana">{{$event10->user_kana}}</td>
                    <td class="table2-college">{{$event10->college}}</td>
                    <td class="table2-graduation">{{$event10->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$event10->mail}}">{{$event10->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$event10->tel}}">{{$event10->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$event10->date}}　{{$event10->start_time}}-{{$event10->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="event11">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($event11 as $event11)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$event11->user_name}}</td>
                    <td class="table2-kana">{{$event11->user_kana}}</td>
                    <td class="table2-college">{{$event11->college}}</td>
                    <td class="table2-graduation">{{$event11->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$event11->mail}}">{{$event11->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$event11->tel}}">{{$event11->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$event11->date}}　{{$event11->start_time}}-{{$event11->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>    
            <table class="table table-striped table-sm eventkind" data-group="event12">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($event12 as $event12)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$event12->user_name}}</td>
                    <td class="table2-kana">{{$event12->user_kana}}</td>
                    <td class="table2-college">{{$event12->college}}</td>
                    <td class="table2-graduation">{{$event12->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$event12->mail}}">{{$event12->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$event12->tel}}">{{$event12->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$event12->date}}　{{$event12->start_time}}-{{$event12->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="event13">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($event13 as $event13)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$event13->user_name}}</td>
                    <td class="table2-kana">{{$event13->user_kana}}</td>
                    <td class="table2-college">{{$event13->college}}</td>
                    <td class="table2-graduation">{{$event13->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$event13->mail}}">{{$event13->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$event13->tel}}">{{$event13->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$event13->date}}　{{$event13->start_time}}-{{$event13->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="event14">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($event14 as $event14)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$event14->user_name}}</td>
                    <td class="table2-kana">{{$event14->user_kana}}</td>
                    <td class="table2-college">{{$event14->college}}</td>
                    <td class="table2-graduation">{{$event14->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$event14->mail}}">{{$event14->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$event14->tel}}">{{$event14->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$event14->date}}　{{$event14->start_time}}-{{$event14->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="event15">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($event15 as $event15)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$event15->user_name}}</td>
                    <td class="table2-kana">{{$event15->user_kana}}</td>
                    <td class="table2-college">{{$event15->college}}</td>
                    <td class="table2-graduation">{{$event15->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$event15->mail}}">{{$event15->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$event15->tel}}">{{$event15->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$event15->date}}　{{$event15->start_time}}-{{$event15->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="easy">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($easy as $easy)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$easy->user_name}}</td>
                    <td class="table2-kana">{{$easy->user_kana}}</td>
                    <td class="table2-college">{{$easy->college}}</td>
                    <td class="table2-graduation">{{$easy->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$easy->mail}}">{{$easy->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$easy->tel}}">{{$easy->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$easy->date}}　{{$easy->start_time}}-{{$easy->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="event17">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($event17 as $event17)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$event17->user_name}}</td>
                    <td class="table2-kana">{{$event17->user_kana}}</td>
                    <td class="table2-college">{{$event17->college}}</td>
                    <td class="table2-graduation">{{$event17->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$event17->mail}}">{{$event17->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$event17->tel}}">{{$event17->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$event17->date}}　{{$event17->start_time}}-{{$event17->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="event18">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($event18 as $event18)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$event18->user_name}}</td>
                    <td class="table2-kana">{{$event18->user_kana}}</td>
                    <td class="table2-college">{{$event18->college}}</td>
                    <td class="table2-graduation">{{$event18->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$event18->mail}}">{{$event18->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$event18->tel}}">{{$event18->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$event18->date}}　{{$event18->start_time}}-{{$event18->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
            <table class="table table-striped table-sm eventkind" data-group="event19">
                <thead class="scrollhead">
                    <tr>
                        <th class="table2-id">No.</th>
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
                @forelse ($event19 as $event19)
                <?php $num++;?>
                    <tr>
                    <td class="table2-id"><?php echo $num?></td>
                    <td class="table2-name">{{$event19->user_name}}</td>
                    <td class="table2-kana">{{$event19->user_kana}}</td>
                    <td class="table2-college">{{$event19->college}}</td>
                    <td class="table2-graduation">{{$event19->graduation}}卒</td>
                    <td class="table2-email"><a href="mailto:{{$event19->mail}}">{{$event19->mail}}</a></td>
                    <td class="table2-tel"><a href="tel:{{$event19->tel}}">{{$event19->tel}}</a></td>
                    <td class="table2-date"><a href="">{{$event19->date}}　{{$event19->start_time}}-{{$event19->end_time}}</a></td>
                    </tr>
                @empty
                    <tr><td>現在参加者はいません</td></tr>
                @endforelse
                    
            </table>
        </div>
        @endsection
     
