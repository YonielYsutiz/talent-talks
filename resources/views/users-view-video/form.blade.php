<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $usersViewVideo->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('slug_video') }}
            {{ Form::text('slug_video', $usersViewVideo->slug_video, ['class' => 'form-control' . ($errors->has('slug_video') ? ' is-invalid' : ''), 'placeholder' => 'Slug Video']) }}
            {!! $errors->first('slug_video', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('points') }}
            {{ Form::text('points', $usersViewVideo->points, ['class' => 'form-control' . ($errors->has('points') ? ' is-invalid' : ''), 'placeholder' => 'Points']) }}
            {!! $errors->first('points', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>