<?php
set_time_limit(0);
?>
 @include('up')
    <title>Upload Zip</title>
<div id="nav" class="btn-group">

	<a href="upload" class="btn btn-info btn-lg btn-block" role="button"> GTFS Zip</a>
  	<a href="mupload" class="btn btn-info btn-lg btn-block" role="button">Edit Route</a>
  	<a href="add_route" class="btn btn-info btn-lg btn-block" role="button">Add Route</a>
  	<a href="add_agen" class="btn btn-info btn-lg btn-block" role="button">Add Agency</a>
</div>
    <div id="section">
    <h1><b><i>Enter the name of the City and Transport Agency</i></b></h1></br></br>
    {{ Form::open(array('url'=>'add_agen', 'method' => 'POST')) }}
    	{{ Form::label('Name of the City') }}
    	{{ Form::text('city') }}</br></br>
    	{{ Form::label('Name of the Transport Agency') }}
    	{{ Form::text('trans_agen') }}</br></br>  	
 	{{ Form::submit('Save',['class' =>'btn btn-primary']) }}
    {{ Form::close() }}
     </div>
     @include('down')
