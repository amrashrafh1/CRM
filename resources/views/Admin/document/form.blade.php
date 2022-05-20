<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $document->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('file') }}
            {{ Form::file('file',  ['class' => 'form-control' . ($errors->has('file') ? ' is-invalid' : ''), 'placeholder' => 'File']) }}
            {!! $errors->first('file', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::checkbox('status',true, $document->status, ['class' => '' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                {{ Form::label('type_id') }}
                {{ Form::select('type_id', $document_types, $document->type_id, ['id' => 'type_id','class' => 'form-control' . ($errors->has('type_id') ? ' is-invalid' : ''), 'placeholder' => 'Document Type']) }}
                {!! $errors->first('type_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            @can('document_type-create')
                <div class="form-group col-md-6">
                    {{ Form::label('Add new Document type') }}
                    <div class="col-md-8">
                        {{ Form::text('add_new', null, ['id' => 'add_new','class' => 'form-control' . ($errors->has('add_new') ? ' is-invalid' : ''), 'placeholder' => 'Type Document Type.....']) }}
                        {!! $errors->first('add_new', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="col-md-4 mt-2">
                        {{ Form::submit('Add new', ['class' => 'btn btn-primary' ,'placeholder' => 'Document Type', 'onclick' => 'submitForm(event)']) }}
                    </div>
                </div>            
            @endcan
        </div>
        <div class="form-group">
            {{ Form::label('publish_date') }}
            {{ Form::date('publish_date', $document->publish_date, ['class' => 'form-control' . ($errors->has('publish_date') ? ' is-invalid' : ''), 'placeholder' => 'Publish Date']) }}
            {!! $errors->first('publish_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('expiration_date') }}
            {{ Form::date('expiration_date', $document->expiration_date, ['class' => 'form-control' . ($errors->has('expiration_date') ? ' is-invalid' : ''), 'placeholder' => 'Expiration Date']) }}
            {!! $errors->first('expiration_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@can('document_type-create')
<script>
    function submitForm(e) {
        e.preventDefault();
        var add_new = $('#add_new').val();
        if (add_new != '') {
            $.ajax({
                url: '{{ route('admin.document_type.store') }}',
                type: 'POST',
                data: {
                    name: add_new,
                    _token: '{{ csrf_token() }}'
                },
                success: function (data) {
                    $('#type_id').append('<option value="' + data.id + '">' + data.name + '</option>');
                    $('#type_id').val(data.id);
                    $('#add_new').val('');
                }
            });
        }
        
    }

</script>
@endcan