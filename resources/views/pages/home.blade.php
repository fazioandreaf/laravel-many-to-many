@extends('layouts.main_layout')
@section('content')
<main>

        @foreach ($employee as $item)
        <div>
            <div>
               <span> Nome:</span> {{$item->name}}
            </div>
            <div>
               <span>Cognome:</span>  {{$item-> lastname}}
            </div>
            <div>
                <span>Ruolo:</span> {{$item-> role}}
            </div>
            <div>
                <span>Addres:</span>
                {{$item -> location -> address}} / {{$item -> location -> state}}
            </div>
            <div>
                <h1>Task</h1>
                <div class="todoo">

                    <span>Todoo: </span>
                    @foreach ($item -> tasks as $i)
                    {{$i -> todoo}}
                    @endforeach
                    <span>Do: </span>
                    @foreach ($item -> tasks as $i)
                        {{$i -> do}}
                    @endforeach
                    <span>Done: </span>
                    @foreach ($item -> tasks as $i)
                    {{$i -> done}}
                    @endforeach

                </div>
            </div>

        </div>
        @endforeach
</main>

@endsection
