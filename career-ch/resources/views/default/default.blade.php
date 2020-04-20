<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head lang="ja">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('public/favicon.ico') }}">
        {{-- 日付を表示するプラグインのmoment.js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="shortcut icon"  href="career-ch/favicon.ico">
        <title>career-ch_center</title>
        <link rel="manifest" href="{{ asset('public/manifest.json')}}">
        <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{ asset('public/service-worker.js')}}"></script>
        <script>
            // service workerが有効なら、service-worker.js を登録します
            if ('serviceWorker' in navigator) {
              navigator.serviceWorker.register('{{ asset('public/service-worker.js')}}').then(function() { console.log('Service Worker Registered'); });
           }
          </script>
    
        <script src="{{ asset('public/js/main.js') }}"></script>
        {{-- <script src="{{ asset('public/js/service-worker.js') }}"></script> --}}
        {{-- bootstrap導入 --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding:0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
       <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/career-ch/">Zeal Career</a>
        {{--   
         @yield('search') --}}
           <!--↓↓ 検索フォーム ↓↓-->
     <form class="form-inline" name="serch_form" action="{{url('/serch')}}" method="post"> 
        @csrf
        <input type="text" name="keyword" value="{{$keyword}}" class="form-control form-control-dark w-100" placeholder="serch">
    
         
          <input type="submit" value="search" class="nav-link search">
     
        </form> 
       
        <!--↑↑ 検索フォーム ↑↑-->   
        </nav>     
      <div class="container-fluid">     
        <div class="row">  
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                @yield('active')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">SEARCH</h6>
                <ul class="nav flex-column mb-2">
                   <li class="nav-item"><a class="nav-link" href="">Year</a></li>
                   <li class="nav-item"><a class="nav-link" href="">Month</a></li> 

                </ul>
            </div>
        </nav>        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h2>@yield('title')</h2>
        @yield('main')
       </div> 
     </div>    
        </main>
        {{-- bootstrap用ｊｓ読み込み --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    </body>
</html>
