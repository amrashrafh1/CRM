<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::email('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_admin') }}
            {{ Form::checkbox('is_admin', true,$user->is_admin ? true : false) }}
            {!! $errors->first('is_admin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('position_title') }}
            {{ Form::text('position_title', $user->position_title, ['class' => 'form-control' . ($errors->has('position_title') ? ' is-invalid' : ''), 'placeholder' => 'posision title']) }}
            {!! $errors->first('position_title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone',$user->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('password') }}
            {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'password']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('password_confirmation') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''), 'placeholder' => 'Password confirmation']) }}
            {!! $errors->first('password_confirmation', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('avatar') }}
            {{ Form::file('avatar', ['class' => 'form-control' . ($errors->has('avatar') ? ' is-invalid' : ''), 'placeholder' => 'Avatar']) }}
            {!! $errors->first('avatar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('permissions') }}
            @foreach ($permissions as $permission)
                <input type="checkbox" name="permissions[]" class="ml-4" value="{{ $permission->id }}" {{ $user->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                {{ $permission->name }}
            @endforeach
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>