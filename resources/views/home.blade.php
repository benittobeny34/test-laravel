@extends('template.index')

@section('content')

       <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>

   
        <!-- jQuery -->

        <!-- DataTables -->
         

<script type="text/javascript">  
  $(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route("all-posts") !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'title', name: 'tilte' },
            { data: 'description', name: 'description' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@endsection