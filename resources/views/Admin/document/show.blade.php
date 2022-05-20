<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Show Document
        </h2>
    </x-slot>
    <section class="content container-fluid">
    <div class="content-header">
            <div class="container-fluid ml-auto">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.documents.index') }}">Document</a></li>
                            <li class="breadcrumb-item active">Show Document</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Document</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.documents.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $document->name }}
                        </div>
                        <div class="form-group">
                            <strong>File:</strong>
                            {{ $document->file }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $document->status }}
                        </div>
                        <div class="form-group">
                            <strong>Type Id:</strong>
                            {{ $document->type_id }}
                        </div>
                        <div class="form-group">
                            <strong>Publish Date:</strong>
                            {{ $document->publish_date }}
                        </div>
                        <div class="form-group">
                            <strong>Expiration Date:</strong>
                            {{ $document->expiration_date }}
                        </div>
                        <div class="form-group">
                            <strong>Created By Id:</strong>
                            {{ $document->created_by_id }}
                        </div>
                        <div class="form-group">
                            <strong>Modified By Id:</strong>
                            {{ $document->modified_by_id }}
                        </div>
                        <div class="form-group">
                            <strong>Assigned User Id:</strong>
                            {{ $document->assigned_user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<x-app-layout>
