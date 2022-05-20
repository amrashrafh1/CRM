<div class="box box-info padding-1">
    <div class="box-body">
        <h3>Roles:</h3>
        @foreach($roles as $role)
            <div class="form-group">
                {{ Form::label($role->name) }}
                {{ Form::checkbox('role_id[]', $role->id, in_array($permission->id, $role->permissions->pluck('id')->toArray()) ? true : false, ['class' => ($errors->has('role_id') ? ' is-invalid' : ''), 'placeholder' => 'Role']) }}
                {!! $errors->first('role_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        @endforeach
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $permission->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('guard_name') }}
            {{ Form::text('guard_name', $permission->guard_name, ['class' => 'form-control' . ($errors->has('guard_name') ? ' is-invalid' : ''), 'placeholder' => 'Guard Name']) }}
            {!! $errors->first('guard_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>