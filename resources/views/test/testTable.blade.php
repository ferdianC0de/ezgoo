@extends('layouts.app')

@section('content')
  @push('scripts')
    <script type="text/javascript">
      $(document).ready(function(){
        $("#cart").on("click", function(){
            $(".shopping-cart").fadeToggle("fast");
        });
        $('#test-table').DataTable({
            serverSide: true,
            processing: true,
            ajax: '{{url('test/testData')}}',
            columns: [
                {data: 'id'},
                {data: 'plane_name'},
                {data: 'eco_seat'},
                {data: 'bus_seat'},
                {data: 'first_seat'},
            ]
        });
      });
    </script>
  @endpush

  <div class="table-responsive">
    <table id="test-table" class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Outlet</th>
          <th>Departement</th>
          <th>Position</th>
          <th>Position</th>
        </tr>
      </thead>
    </table>
  </div>
@endsection
