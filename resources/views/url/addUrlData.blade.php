{!! Form::open(['url' => 'api/v1/url']) !!}
<div class="form-group">
    {!! Form::label('username', 'User Name:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('url', 'URL:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::input('text', 'description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit("Submit", ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}