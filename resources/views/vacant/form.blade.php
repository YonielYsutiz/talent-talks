<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Empresa') }}
            {{ Form::text('company', $vacant->company, ['class' => 'form-control' . ($errors->has('company') ? ' is-invalid' : ''), 'placeholder' => 'Company']) }}
            {!! $errors->first('company', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cargo') }}
            {{ Form::text('position', $vacant->position, ['class' => 'form-control' . ($errors->has('position') ? ' is-invalid' : ''), 'placeholder' => 'Position']) }}
            {!! $errors->first('position', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modalidad') }}
            {{ Form::text('modality', $vacant->modality, ['class' => 'form-control' . ($errors->has('modality') ? ' is-invalid' : ''), 'placeholder' => 'Modality']) }}
            {!! $errors->first('modality', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Salario') }}
            {{ Form::text('salary', $vacant->salary, ['class' => 'form-control' . ($errors->has('salary') ? ' is-invalid' : ''), 'placeholder' => 'Salary']) }}
            {!! $errors->first('salary', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('email_company', $vacant->email_company, ['class' => 'form-control' . ($errors->has('email_company') ? ' is-invalid' : ''), 'placeholder' => 'Email Company']) }}
            {!! $errors->first('email_company', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::text('city', $vacant->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>