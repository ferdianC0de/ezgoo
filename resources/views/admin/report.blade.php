@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Dashboard</div>
                  <div class="panel-body">
                    <form action="{{ url('admin/displayReport') }}" method="post">
                      {{ csrf_field() }}
                      <table>
                        <thead>
                          <tr>
                            <td>Dari </td>
                            <td> Sampai </td>
                            <td>Urut berdasarkan</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="text" name="from_date" value=""></td>
                            <td><input type="text" name="to_date" value=""></td>
                            <td><input type="text" name="sort_by" value=""></td>
                          </tr>
                        </tbody>
                        <button type="submit">Pesan</button>
                      </table>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
