@extends('default.default')
 <?php $nums=0;?> 
    @forelse ($data as $data2)
      <?php $nums++;?>  
    @empty
        0
    @endforelse
        <h2>@section('title')
            career-ch会員一覧　<?php echo $nums?>名
        @endsection</h2>

    @section('active')
    
        <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link " href="/career-ch/">Dashcoard</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/career-ch/members/">career-ch</a></li>
                    <li class="nav-item"><a class="nav-link" href="/career-ch/event">イベント</a></li>

                </ul>
    @endsection
            <script>
                // moment.jsの時刻表示
function showTimeYes() {
    var now = moment();
    // document.getElementById("scheduleItem").now.format("MM/DD(ddd) HHH:mm:ss")
    var area = document.getElementById("scheduleItem");
     
    area.innerHTML =now.format("MM/DD(ddd) HHH:mm:ss");
    // area.now.format"MM/DD（ddd）HH:mm";<p style="color:red;"></p>
}

            </script>
    @section('main')
     <div class="database table-responsive">
            <table class="table table-striped table-sm">
                <thead class="scrollhead">
                    <tr>
                        <th class="table-id">ID</th>
                        <th class="table-name">Name</th>
                        <th class="table-college">大学名</th>

                        <th class="table-grad">卒業</th>
                        <th class="table-since">Since</th>
                        <th class="table-tel">Tel</th>
                        <th class="table-email">Email</th>
                        <th class="table-time">call</th>

                        
                    </tr>
                </thead>
                <tbody class="scrollbody">
                 <?php $num=0;?> 
                @forelse($data as $data2)
                    <?php $num++;?>
                        <tr>
                        <td class="table-id"><?php echo $num?></td>
                        <td class="table-name">{{$data2->last_name}}{{$data2->first_name}}</td>
                        <td class="table-college">{{$data2->company_name}}</td>
                    @if ($data2->value)
                        <td class="table-grad">{{$data2->value}}</td>
                    @else
                        <tr><td>　</td></tr> 
                    @endif
                    
                        <td class="table-since">{{$data2->member_since}}</td>
                        <td class="table-tel"><a href="tel:{{$data2->phone}}">{{$data2->phone}}</a></td>
                        <td class="table-email"><a href="mailto:{{$data2->email}}">{{$data2->email}}</a></td>
                        <td id="schedule" class="table-time schedule">
                            <button id="schedule-yes" onclick="showTimeYes()"><i class="fas fa-check"></i></button>
                            <button id="schedule-non" onclick="showTimeNo()"><i class="fas fa-times"></i></button>
                            <div id="scheduleItem" style="color:#0ABF6A;"></div>
                            <div id="scheduleItem" style="color:#0ABF6A;"></div>
                        </td>
                        </tr>
                @empty
                        <tr><td>null</td></tr>
                @endforelse
                    
            </table>
        </div>
@endsection