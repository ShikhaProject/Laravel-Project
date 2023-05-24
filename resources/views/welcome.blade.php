<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="antialiased">
        <?php
        $login = false; 
       ?>
       
       <?php
        if($login){
        ?>
       <h1>yes it is login here</h1>
       <?php
        } else {
        ?>
        <h1>Login not allow</h1>
        <?php
        }
        ?>
        {{-- this is commwnt of laarvel use if example --}}
        @if($login)
            <h1>yes it is login here</h1>
        @else 
            <h1>login not allow</h1>
        @endif

        {{-- this is exmaple of  for,foreach,endelse--}}
        {{-- @for ($i=0; $i<5; $i++)
            The current value is {{ $i }}
        @endfor --}}
        
        @foreach (range(1,5) as $key => $value)
            {{-- <p>this is key {{$key}} and value {{$value}}</p> --}}
            @if($loop->first)
                <div>first key & value : {{ $key }} - {{ $value }}</div>
            @elseif($loop->last)
                <div>Last key & value : {{ $key }} - {{ $value }}</div>
            @else
                <div>other key & value {{ $key }} - {{ $value }} </div>
            @endif
        @endforeach
        
        @forelse ([] as $item)
            {{$item}}
        @empty
            <h4>blank array data</h4>
        @endforelse
    </body>
</html>
