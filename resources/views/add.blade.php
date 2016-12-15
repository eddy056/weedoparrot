@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Weed</div>
                <div class="form">
                	{!!Form::open(['url' => '/store', 'files' => true , 'method'=>'post'])!!}
            

                		<p>Weed name: <input type="text" name="name"></p>
               			<p>Weed Type: <input type="text" name="type"></p>
               			<p>Weed Description: <input type="text" name="description"></p>
               			{!!Form::file('image')!!}
               			<p><input type="submit" name="submit" value="submit"></p>
               		{!!Form::close()!!}
               		
            </div>
        </div>
    </div>
</div>
@endsection
