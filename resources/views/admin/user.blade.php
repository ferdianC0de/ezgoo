@extends('admin.layouts.app')

@section('content')
  @push('js')
    <script type="text/javascript">
      $(document).ready(function(){
        $('#refresh').click(function(){
          table.ajax.reload();
        });
        var table = $('#dataTable').DataTable({
          processing: true,
          serverSide: true,
          ajax : '{{ url('administrator/resource/user') }}',
          columns: [
            { data: 'name' },
            { data: 'email' },
            { data: 'created_at' },
            { data: 'verified' },
            { data: 'action' }
          ]
        });
      });
    </script>
  @endpush
  <div class="panel panel-headline">
    @include('admin.layouts.heading')
    <div class="panel-body">
      <div class="table-responsive">
        <table id="dataTable" class="table table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Created at</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
@endsection
