<script type="text/javascript">
  $('[data-toggle="tooltip"]').tooltip();
  $('#delete-button-{{ $data->id }}').click(function(e){
    var id = $(this).val();
    var url = '{{ url('administrator/'.$to) }}';
    swal({
      title: "Confirmation delete",
      text: "When clicking 'OK', data will deleted permanently!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajaxSetup({
          headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

        $.ajax({
          type: "delete",
          url: url + '/' + id ,
          success: function (data) {
            swal(
              "Successfuly deleted!",
              {
                icon:"success",
              }
            ).then((refresh) => {
              $('#{{$to}}sTable').DataTable().ajax.reload();
            });
          }, error: function(data){
            swal(
              "Oops, An error occurred, please try again later",
              {
                icon:"error",
              }
            ).then((refresh) => {
              $('#{{$to}}sTable').DataTable().ajax.reload();
            });
          }
        });
      }
    });
  });
</script>
@if (!Request::url() == 'http://localhost:8000/administrator/user')
  <a class="btn btn-warning" href="{{url('administrator/'.$to.'/'.$data->id.'/edit')}}" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
@endif
  <a class="btn btn-primary" href="{{url('administrator/'.$to.'/'.$data->id)}}" data-toggle="tooltip" title="Show"><i class="fa fa-eye"></i></a>
  <button class="btn btn-danger" id="delete-button-{{ $data->id }}" value="{{ $data->id }}" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
