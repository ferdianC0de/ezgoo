@extends('admin.layouts.app')

@section('content')
  @push('js')
    {{-- <script type="text/javascript">
      $(document).ready(function(){
        $('#usersTable').DataTable({
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
    </script> --}}
  @endpush
  <div class="panel panel-headline">
    <div class="panel-heading">
      <h3 class="panel-title">Users data</h3>
    </div>
    <div class="panel-body">
      @yield('datatable')
      {{-- <div class="table-responsive">
        <table id="usersTable" class="table table-bordered">
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
      </div> --}}
    </div>
  </div>
@endsection
