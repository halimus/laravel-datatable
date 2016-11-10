<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name', 'Laravel-DataTable') }}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://datatables.yajrabox.com/highlight/styles/zenburn.css">
        <script src="https://datatables.yajrabox.com/highlight/highlight.pack.js"></script>
        
        @stack('css')
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div id="main">
        
            @include('layouts.navbar')

            <div class="container" id="content">
                @yield('content')
                
                <?php 
                  for($i=0;$i<100;$i++){
                    //echo '<p>aaaaaaaaaaaaaaaaaaaaaaaa'.$i.'</p>';
                  }
                ?>
                
            </div>
            
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>     
        @stack('scripts')
        
    </body>
</html>

