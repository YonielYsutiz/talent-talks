<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $usersViewVacant->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vacant_id') }}
            {{ Form::text('vacant_id', $usersViewVacant->vacant_id, ['class' => 'form-control' . ($errors->has('vacant_id') ? ' is-invalid' : ''), 'placeholder' => 'Vacant Id']) }}
            {!! $errors->first('vacant_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('points') }}
            {{ Form::text('points', $usersViewVacant->points, ['class' => 'form-control' . ($errors->has('points') ? ' is-invalid' : ''), 'placeholder' => 'Points']) }}
            {!! $errors->first('points', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>