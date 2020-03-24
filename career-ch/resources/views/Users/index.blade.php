@extends('default.default')


        <h2>@section('title')
            ダッシュボード
        @endsection</h2>

    @section('active')
        <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="/career-ch/">Dashcoard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/career-ch/members/">career-ch</a></li>
                    <li class="nav-item"><a class="nav-link" href="/career-ch/event">イベント</a></li>

                </ul>
    @endsection

    @section('main')
     <div class="database table-responsive">
            <table class="table table-striped table-sm">
                <thead class="scrollhead">
                    <tr>
                        <th class="table-id">ID</th>
                        <th class="table-name">Name</th>
                        <th class="table-since">Since</th>
                        <th class="table-tel">Tel</th>
                        <th class="table-email">Email</th>
                        <th class="table-status">イベント</th>
                    </tr>
                </thead>
                <tbody class="scrollbody">
                  <?php $num=0;?> 
                <?php
                    // $data3 = [$data,$data2];
                    // print_r($data3);
                ?>   
                @forelse ($data as $data)
                
                <?php $num++;?>
                    <tr>
                    <td class="table-id"><?php echo $num?></td>
                    {{-- <td>{{$data->user_name}}</td> --}}
                    {{-- <td class="table-name">{{$data->last_name}}{{$data->first_name}}</td> --}}
                    <td class="table-name">{{$data->name}}</td>
                    <td class="table-since">{{$data->member_since}}</td>
                    <td class="table-tel"><a href="tel:{{$data->phone}}">{{$data->phone}}</a></td>
                    <td class="table-email"><a href="mailto:{{$data->email}}">{{$data->email}}</a></td>
                    @if($data->name =='稲田陽平' )
                            <td class="table-status"><div class="status-text">参加なし</div></td>
                    @else
                          <td class="table-status"><div class="status-text done">参加あり</div></td>  
                     @endif
                    {{--  --}}
                    @empty
                    <tr><td>null</td></tr>
                 @endforelse
                    {{-- @forelse ($data2 as $data2)
                        
                    @empty
                    <tr><td>未定義</td></tr>
                    @endforelse --}}
                    </tr>   
                </tbody> 
            </table>
        </div>
@endsection
     
