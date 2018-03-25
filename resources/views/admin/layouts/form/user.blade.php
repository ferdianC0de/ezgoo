<a class="btn btn-warning" href="{{url('administrator/user/'.$data->id.'/edit')}}" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
<button class="btn btn-danger" onclick="event.preventDefault();
              document.getElementById('delete-form').submit();" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash-o"></i></button>
<form class="hidden" id="delete-form" action="{{ url('administrator/user/destroy/'.$data->id) }}" method="post">
  @csrf
  @method('delete')
</form>
