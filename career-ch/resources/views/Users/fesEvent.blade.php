@extends('default.default')
    <?php $nums=0;?>
    @forelse ($fes as $fes->id)
        <?php $nums++;?>
    @empty
        0
    @endforelse
        @section('title')
        <div class="event-title">
            <h2>フェス参加者　<?php echo $nums?>名</h2>
            <div class="btn-group">
                <a href="/career-ch/event/" class="btn btn-secondary">全体</a> 
               <a href="" class="btn btn-secondary active">フェス</a> 
               <a href="" class="btn btn-secondary">セレクション</a> 
               <a href="" class="btn btn-secondary">フェス(女子会)</a>
               <a href="" class="btn btn-secondary">セレクション(女子会)</a> 
               <a href="" class="btn btn-secondary">求人フェア</a> 
               <a href="" class="btn btn-secondary">マッチングイベント</a> 
               <a href="" class="btn btn-secondary">就活相談会</a> 
               <a href="" class="btn btn-secondary">模擬面接イベント</a> 
               

            </div>
        </div>    
        @endsection
          @section('active')
        <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link " href="/career-ch/">Dashcoard</a></li>
                    <li class="nav-item"><a class="nav-link " href="/career-ch/members/">career-ch会員一覧</a></li>
                    <div class="event-nav">
                        <li class="nav-item"><a class="nav-link" href="/career-ch/event">イベント参加者一覧</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/career-ch/event">フェス</a></li>
                        <li class="nav-item"><a class="nav-link" href="/career-ch/event">セレクション</a></li>
                        <li class="nav-item"><a class="nav-link" href="/career-ch/event">フェス(女子会)</a></li>
                        <li class="nav-item"><a class="nav-link" href="/career-ch/event">セレクション(女子会)</a></li>
                        <li class="nav-item"><a class="nav-link" href="/career-ch/event">求人フェア</a></li>
                        <li class="nav-item"><a class="nav-link" href="/career-ch/event">マッチングイベント</a></li>
                        <li class="nav-item"><a class="nav-link" href="/career-ch/event">就活相談会</a></li>
                        <li class="nav-item"><a class="nav-link" href="/career-ch/event">模擬面接イベント</a></li>
                        </div>
    
                </ul>
    @endsection
        @section('main')
                



        <div class="database table-responsive">
            <table class="table table-striped table-sm">
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
                    <tr><td>null</td></tr>
                @endforelse
                    
            </table>
        </div>
        @endsection
     
