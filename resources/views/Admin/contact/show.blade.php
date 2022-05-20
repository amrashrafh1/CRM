<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Show Contact
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
                            <li class="breadcrumb-item"><a href="{{ route('admin.contacts.index') }}">Contact</a></li>
                            <li class="breadcrumb-item active">Show Contact</li>
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
                            <span class="card-title">Show Contact</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.contacts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $contact->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Middle Name:</strong>
                            {{ $contact->middle_name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $contact->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $contact->status }}
                        </div>
                        <div class="form-group">
                            <strong>Referral Source:</strong>
                            {{ $contact->referral_source }}
                        </div>
                        <div class="form-group">
                            <strong>Position Title:</strong>
                            {{ $contact->position_title }}
                        </div>
                        <div class="form-group">
                            <strong>Industry:</strong>
                            {{ $contact->industry }}
                        </div>
                        <div class="form-group">
                            <strong>Project Type:</strong>
                            {{ $contact->project_type }}
                        </div>
                        <div class="form-group">
                            <strong>Company:</strong>
                            {{ $contact->company }}
                        </div>
                        <div class="form-group">
                            <strong>Project Description:</strong>
                            {{ $contact->project_description }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $contact->description }}
                        </div>
                        <div class="form-group">
                            <strong>Budget:</strong>
                            {{ $contact->budget }}
                        </div>
                        <div class="form-group">
                            <strong>Website:</strong>
                            {{ $contact->website }}
                        </div>
                        <div class="form-group">
                            <strong>Linkedin:</strong>
                            {{ $contact->linkedin }}
                        </div>
                        <div class="form-group">
                            <strong>Address Street:</strong>
                            {{ $contact->address_street }}
                        </div>
                        <div class="form-group">
                            <strong>Address City:</strong>
                            {{ $contact->address_city }}
                        </div>
                        <div class="form-group">
                            <strong>Address State:</strong>
                            {{ $contact->address_state }}
                        </div>
                        <div class="form-group">
                            <strong>Address Country:</strong>
                            {{ $contact->address_country }}
                        </div>
                        <div class="form-group">
                            <strong>Address Zipcode:</strong>
                            {{ $contact->address_zipcode }}
                        </div>
                        <div class="form-group">
                            <strong>Created By Id:</strong>
                            {{ $contact->created_by_id }}
                        </div>
                        <div class="form-group">
                            <strong>Modified By Id:</strong>
                            {{ $contact->modified_by_id }}
                        </div>
                        <div class="form-group">
                            <strong>Assigned User Id:</strong>
                            {{ $contact->assigned_user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<x-app-layout>
