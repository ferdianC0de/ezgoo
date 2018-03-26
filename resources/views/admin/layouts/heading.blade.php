<div class="panel-heading clearfix">
  <div class="panel-title">{{ucfirst($to)}}s data</div>
  <div class="btn-group pull-right">
   @if (!Request::url() == 'http://localhost:8000/administrator/user')
     <a href="{{ url('administrator/'.$to.'/create') }}" id="refresh" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Create</a>
   @endif
   <a href="#" id="refresh" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i> Refresh</a>
   <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"><i class="fa fa-download"></i> Export</a>
   <ul class="dropdown-menu">
     <li><a href="{{ url('administrator/'.$to.'/export/pdf') }}"> <i class="fa fa-file-pdf-o"></i> Pdf</a></li>
     <li><a href="{{ url('administrator/'.$to.'/export/excel') }}"> <i class="fa fa-file-excel-o"></i> Excel</a></li>
   </ul>
 </div>
</div>
