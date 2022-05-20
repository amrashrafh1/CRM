<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Show Contact
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
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contact') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('admin.contacts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>First Name</th>
										<th>Middle Name</th>
										<th>Last Name</th>
										<th>Status</th>
										<th>Referral Source</th>
										<th>Position Title</th>
										<th>Industry</th>
										<th>Project Type</th>
										<th>Company</th>
										<th>Project Description</th>
										<th>Description</th>
										<th>Budget</th>
										<th>Website</th>
										<th>Linkedin</th>
										<th>Address Street</th>
										<th>Address City</th>
										<th>Address State</th>
										<th>Address Country</th>
										<th>Address Zipcode</th>
										<th>Created By Id</th>
										<th>Modified By Id</th>
										<th>Assigned User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contact->first_name }}</td>
											<td>{{ $contact->middle_name }}</td>
											<td>{{ $contact->last_name }}</td>
											<td>{{ $contact->status }}</td>
											<td>{{ $contact->referral_source }}</td>
											<td>{{ $contact->position_title }}</td>
											<td>{{ $contact->industry }}</td>
											<td>{{ $contact->project_type }}</td>
											<td>{{ $contact->company }}</td>
											<td>{{ $contact->project_description }}</td>
											<td>{{ $contact->description }}</td>
											<td>{{ $contact->budget }}</td>
											<td>{{ $contact->website }}</td>
											<td>{{ $contact->linkedin }}</td>
											<td>{{ $contact->address_street }}</td>
											<td>{{ $contact->address_city }}</td>
											<td>{{ $contact->address_state }}</td>
											<td>{{ $contact->address_country }}</td>
											<td>{{ $contact->address_zipcode }}</td>
											<td>{{ $contact->created_by_id }}</td>
											<td>{{ $contact->modified_by_id }}</td>
											<td>{{ $contact->assigned_user_id }}</td>

                                            <td>
                                                <form action="{{ route('admin.contacts.destroy',$contact->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('admin.contacts.show',$contact->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('admin.contacts.edit',$contact->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $contacts->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
