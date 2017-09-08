@extends('backLayout.app')
@section('title')
Post
@stop

@section('content')

    <h1>Posts <a href="{{ route('posts.create') }}" class="btn btn-primary pull-right btn-sm">Add New Post</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblposts">
            <thead>
                <tr>
                    <th>ID</th><th>Title</th><th>Body</th><th>Short Desc</th><th>Photo</th><th>Category</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ route('posts.edit',$item->id) }}">{{ $item->title }}</a></td><td>{!! $value =  str_limit($item->body, 100, '...');!!}</td><td>{!! $value =  str_limit($item->short_desc, 20, '...');!!}</td><td><img src="{{$item->photo ? $item->photo->file : 'http://placehold.it/400x400'}}" alt="" height="50" width="50"></td><td>{{ $item->categorie->cat_title }}</td>
                    <td>
                        <a href="{{ route('posts.edit',$item->id) }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'action' => ['PostsController@destroy', $item->id],
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
        $('#tblposts').DataTable({
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