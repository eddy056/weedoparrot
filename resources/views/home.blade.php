@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                        @if(Session::has('flash'))
                            {{session('flash')}}
                        @endif
                    @foreach($weedlist as $weed)

                        <p>{{ $weed->name}} <img src="{{ asset('image/'.$weed->image) }}" width="500" height="500"></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop
