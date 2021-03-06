<div class="col-md-12">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Lỗi:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<div class="form-group">
	{!! Form::label('name', 'Tên', array('class'=>'col-sm-2 control-label')) !!}
	<div class="col-sm-8">
	{!! Form::text('name', old('name') ? old('name') : (isset($item) ? $item->name : ''), ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('email', 'Email', array('class'=>'col-sm-2 control-label')) !!}
	<div class="col-sm-8">
	{!! Form::email('email', old('email') ? old('email') : (isset($item) ? $item->email : ''), ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('title', 'Title', array('class'=>'col-sm-2 control-label')) !!}
	<div class="col-sm-8">
	{!! Form::text('title', old('title') ? old('title') : (isset($item) ? $item->title : ''), ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('content', 'Nội dung', array('class'=>'col-sm-2 control-label')) !!}
	<div class="col-sm-8">
		{!! Form::textarea('content', old('content'), ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('captcha', 'Captcha', array('class'=>'col-sm-2 control-label')) !!}
	<div class="col-sm-8">
		{!! app('captcha')->display(); !!}
	</div>
</div>
<div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		{!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
        <a href="javascript:window.history.back()" class="btn btn-default" title="">Hủy</a>
	</div>
</div>