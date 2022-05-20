<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('first_name') }}
            {{ Form::text('first_name', $contact->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name']) }}
            {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('middle_name') }}
            {{ Form::text('middle_name', $contact->middle_name, ['class' => 'form-control' . ($errors->has('middle_name') ? ' is-invalid' : ''), 'placeholder' => 'Middle Name']) }}
            {!! $errors->first('middle_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_name') }}
            {{ Form::text('last_name', $contact->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::select('status', ['leads' => 'Leads', 'opportunity' => 'Opportunity', 'won' => 'Won','closed' => 'Closed'], $contact->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('referral_source') }}
            {{ Form::text('referral_source', $contact->referral_source, ['class' => 'form-control' . ($errors->has('referral_source') ? ' is-invalid' : ''), 'placeholder' => 'Referral Source']) }}
            {!! $errors->first('referral_source', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('position_title') }}
            {{ Form::text('position_title', $contact->position_title, ['class' => 'form-control' . ($errors->has('position_title') ? ' is-invalid' : ''), 'placeholder' => 'Position Title']) }}
            {!! $errors->first('position_title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('industry') }}
            {{ Form::text('industry', $contact->industry, ['class' => 'form-control' . ($errors->has('industry') ? ' is-invalid' : ''), 'placeholder' => 'Industry']) }}
            {!! $errors->first('industry', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('project_type') }}
            {{ Form::text('project_type', $contact->project_type, ['class' => 'form-control' . ($errors->has('project_type') ? ' is-invalid' : ''), 'placeholder' => 'Project Type']) }}
            {!! $errors->first('project_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('company') }}
            {{ Form::text('company', $contact->company, ['class' => 'form-control' . ($errors->has('company') ? ' is-invalid' : ''), 'placeholder' => 'Company']) }}
            {!! $errors->first('company', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('project_description') }}
            {{ Form::text('project_description', $contact->project_description, ['class' => 'form-control' . ($errors->has('project_description') ? ' is-invalid' : ''), 'placeholder' => 'Project Description']) }}
            {!! $errors->first('project_description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $contact->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('budget') }}
            {{ Form::text('budget', $contact->budget, ['class' => 'form-control' . ($errors->has('budget') ? ' is-invalid' : ''), 'placeholder' => 'Budget']) }}
            {!! $errors->first('budget', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('website') }}
            {{ Form::text('website', $contact->website, ['class' => 'form-control' . ($errors->has('website') ? ' is-invalid' : ''), 'placeholder' => 'Website']) }}
            {!! $errors->first('website', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('linkedin') }}
            {{ Form::text('linkedin', $contact->linkedin, ['class' => 'form-control' . ($errors->has('linkedin') ? ' is-invalid' : ''), 'placeholder' => 'Linkedin']) }}
            {!! $errors->first('linkedin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address_street') }}
            {{ Form::text('address_street', $contact->address_street, ['class' => 'form-control' . ($errors->has('address_street') ? ' is-invalid' : ''), 'placeholder' => 'Address Street']) }}
            {!! $errors->first('address_street', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address_city') }}
            {{ Form::text('address_city', $contact->address_city, ['class' => 'form-control' . ($errors->has('address_city') ? ' is-invalid' : ''), 'placeholder' => 'Address City']) }}
            {!! $errors->first('address_city', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address_state') }}
            {{ Form::text('address_state', $contact->address_state, ['class' => 'form-control' . ($errors->has('address_state') ? ' is-invalid' : ''), 'placeholder' => 'Address State']) }}
            {!! $errors->first('address_state', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address_country') }}
            {{ Form::text('address_country', $contact->address_country, ['class' => 'form-control' . ($errors->has('address_country') ? ' is-invalid' : ''), 'placeholder' => 'Address Country']) }}
            {!! $errors->first('address_country', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address_zipcode') }}
            {{ Form::text('address_zipcode', $contact->address_zipcode, ['class' => 'form-control' . ($errors->has('address_zipcode') ? ' is-invalid' : ''), 'placeholder' => 'Address Zipcode']) }}
            {!! $errors->first('address_zipcode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="input_fields_wrap_emails">
            @foreach($contact->emails as $index => $email)
            <div class="form-group">
                {{ Form::label('email' . $index) }}
                {{ Form::text('emails[]', $email->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                <button class="btn btn-danger" onclick="remove(event)"><i class="fas fa-trash"></i></button>
            </div>
            @endforeach
            <div class="form-group">
                {{ Form::label('email') }}
                {{ Form::email('emails[]', null, ['class' => 'form-control' . ($errors->has('emails') ? ' is-invalid' : ''), 'placeholder' => 'Contact Email']) }}
                {!! $errors->first('emails', '<div class="invalid-feedback">:message</div>') !!}
                <button class="btn btn-danger" onclick="remove(event)"><i class="fas fa-trash"></i></button>
            </div>
        </div>
        <div class="input_fields_wrap_phones">
            @foreach ($contact->phones as $index => $phone)
            <div class="form-group">
                {{ Form::label('phone' . $index) }}
                {{ Form::text('phones[]', $phone->phone, ['class' => 'form-control' . ($errors->has('phones') ? ' is-invalid' : ''), 'placeholder' => 'Contact phone']) }}
                {!! $errors->first('phones', '<div class="invalid-feedback">:message</div>') !!}
                <button class="btn btn-danger" onclick="remove(event)"><i class="fas fa-trash"></i></button>
            </div>
            @endforeach
            <div class="form-group">
                {{ Form::label('phones') }}
                {{ Form::text('phones[]', null, ['class' => 'form-control' . ($errors->has('phones') ? ' is-invalid' : ''), 'placeholder' => 'Contact phone']) }}
                {!! $errors->first('phones', '<div class="invalid-feedback">:message</div>') !!}
                <button class="btn btn-danger" onclick="remove(event)"><i class="fas fa-trash"></i></button>
            </div>
        </div>
        <!-- add new button -->
        <div class="form-group">
            <button type="button" class="btn btn-primary" data-name='emails' onclick="add(event)">
                Add Email
            </button>
            <button type="button" class="btn btn-primary" data-name='phones' onclick="add(event)">
                Add Phone
            </button>
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    @push('scripts')
    <script>
        // click add new phones and emails
        function add(event) {
            var name = $(event.target).data('name');
            var html = '<div class="form-group">' +
                '<label>' + name + '</label>' +
                '<input type="text" name="' + name + '[]" class="form-control" placeholder="' + name + '">' +
                '<button class="btn btn-danger" onclick="remove(event)"><i class="fas fa-trash"></i></button>' +
                '</div>';
            $('.input_fields_wrap_' + name).append(html);
        }

        // click remove phones and emails
        function remove(event) {
            $(event.target).parent().remove();
        }
        </script>
    @endpush
