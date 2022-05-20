<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Show Setting
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="content-header">
            <div class="container-fluid ml-auto">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Setting</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            @endif
                            <form method="POST" action="{{ route('admin.profile.update') }}" accept-charset="UTF-8"
                                enctype="multipart/form-data">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                    <label for="name" class="control-label">{{ 'Name' }}</label>
                                    <input class="form-control" name="name" type="text" id="name"
                                        value="{{ auth()->user()->name }}">
                                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                    <label for="email" class="control-label">{{ 'Email' }}</label>
                                    <input class="form-control" name="email" type="text" id="email"
                                        value="{{ auth()->user()->email }}">
                                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                                    <label for="password" class="control-label">{{ 'Password' }}</label>
                                    <input class="form-control" name="password" type="password" id="password" value="">
                                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
                                    <label for="password_confirmation" class="control-label">{{ 'password confirmation' }}</label>
                                    <input class="form-control" name="password_confirmation" type="password" id="password_confirmation" value="">
                                    {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="form-group {{ $errors->has('position_title') ? 'has-error' : ''}}">
                                    <label for="position_title" class="control-label">{{ 'Position Title' }}</label>
                                    <input class="form-control" name="position_title" type="text" id="position_title"
                                        value="{{ auth()->user()->position_title }}">
                                    {!! $errors->first('position_title', '<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                                    <label for="phone" class="control-label">{{ 'Phone' }}</label>
                                    <input class="form-control" name="phone" type="text" id="phone"
                                        value="{{ auth()->user()->phone }}">
                                    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                                </div>

                                <img src="{{ Storage::url(auth()->user()->avatar) }}" width="200" height="180" />

                                <div class="form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
                                    <label for="avatar" class="control-label">{{ 'avatar' }}</label>
                                    <input class="form-control" name="avatar" type="file" id="avatar">
                                    {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-app-layout>
