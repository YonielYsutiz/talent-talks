<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Empresa') }}
            {{ Form::text('company', $vacant->company, ['class' => 'form-control' . ($errors->has('company') ? ' is-invalid' : ''), 'placeholder' => 'Company']) }}
            {!! $errors->first('company', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group" >
            <label for="position">Cargo</label>
            <select class="form-control" name="position">
                @foreach ($position_availables as $position)
                    <option value="{{ $position }}">{{ $position }}</option>
                @endforeach
            </select>
            {!! $errors->first('position', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group" >
            <label for="modality">Modalidad</label>
            <select class="form-control" name="modality">
                @foreach ($modalities as $modality)
                    <option value="{{ $modality }}">{{ $modality }}</option>
                @endforeach
            </select>
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
        <div class="form-group" >
            <label for="city">Ciudad</label>
            <select class="form-control" name="city">
                @foreach ($cities as $city)
                    <option value="{{ $city }}">{{ $city }}</option>
                @endforeach
            </select>
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>