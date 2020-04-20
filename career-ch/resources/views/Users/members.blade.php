@extends('default.default')
 <?php $nums=0;?> 
    @forelse ($data as $data2)
      <?php $nums++;?>  
    @empty
        0
    @endforelse
        @section('title')
        <h2 class="member-head">
            career-ch会員一覧　<?php echo $nums?>名
        </h2>
        @endsection
      


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
     
    area.innerHTML =now.format("MM/DD(ddd) HH:mm");
    // area.now.format"MM/DD（ddd）HH:mm";<p style="color:red;"></p>
}

            </script>
    @section('main')
     <div class="database table-responsive" style="padding-bottom:21px;">
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
                        <th class="table-memo">memo</th>

                        
                    </tr>
                </thead>
                <tbody class="scrollbody member-scroll" style="height:609px;">
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
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" id="time_form" >
                             @csrf
                           <input type="hidden" name="member_id" value="{{$data2->member_id}}">
                            {{-- <button id="schedule-yes" onclick="showTimeYes()"><i class="fas fa-check"></i></button> --}}
                            <button id="schedule-yes" type="submit" name="timey" value="timey"><i class="fas fa-check"></i></button>
                            <button id="schedule-non" type="submit" name="timen"  value="timen"><i class="fas fa-times"></i></button>
                            </form>
                        <div id="scheduleItem" style="color:#0ABF6A;">{{$data2->txn_id}}</div>
                        {{-- <div id="scheduleItem" style="color:#0ABF6A;">{{$data2->txn_id}}</div> --}}
                        </td>
                        <td class="table-memo">
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" id="notes_form"  class="form-group">
                            @csrf
                            <input type="hidden" name="member_id" value="{{$data2->member_id}}">
                            <input type="text" name="text" value="" class="form-control">
                            <input type="submit" name="add" value="add" class="btn btn-secondary btn-sm">
                            </form>
                        <div class="memotable">{{$data2->notes}}</div>
                        </td>
                        </tr>
                @empty
                        <tr><td>null</td></tr>
                @endforelse
                </tbody>    
            </table>
        </div>
@endsection
