@extends('backLayout.app')
@section('title')
Category
@stop

@section('content')

    <h1>Categories <a href="{{ route('categories.create') }}" class="btn btn-primary pull-right btn-sm">Add New Category</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcategories">
            <thead>
                <tr>
                    <th>ID</th><th>Cat Title</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('categories', $item->id) }}">{{ $item->cat_title }}</a></td>
                    <td>
                        <a href="{{ route('categories.edit',$item->id)}}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/categories', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblcategories').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection