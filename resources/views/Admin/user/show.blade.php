<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit User') }}
    </h2>
</x-slot>

<section class="content container-fluid">
    <div class="content-header">
        <div class="container-fluid ml-auto">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Create User') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">{{ __('Users') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Edit User') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Avatar:</strong>
                            <img src='{{ Storage::url($user->avatar) }}' width="150"/>
                        </div>
                        <div class="form-group">
                            <strong>is admin:</strong>
                            {{ $user->is_admin ? 'Admin' : 'User' }}
                        </div>
                        <div class="form-group">
                            <strong>is active:</strong>
                            {{ $user->is_active ? 'active' : 'inactive' }}
                        </div>
                        <div class="form-group">
                            <strong>phone:</strong>
                            {{ $user->phone }}
                        </div>
                        <div class="form-group">
                            <strong>position title:</strong>
                            {{ $user->position_title }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
