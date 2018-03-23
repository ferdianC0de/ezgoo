@extends('admin.layouts.app')

@section('content')
  @push('css')
    {!! Charts::styles() !!}
  @endpush
  <div class="panel panel-headline">
    <div class="panel-heading">
      <h3 class="panel-title">Monthly Overview</h3>
      <p class="panel-subtitle">Period: insert daterangepicker here</p>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <div class="metric">
            <span class="icon"><i class="fa fa-user"></i></span>
            <p>
              <span class="number">1,252</span>
              <span class="title">Users</span>
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="metric">
            <span class="icon"><i class="fa fa-eye"></i></span>
            <p>
              <span class="number">274,678</span>
              <span class="title">Visits</span>
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="metric">
            <span class="icon"><i class="fa fa-shopping-bag"></i></span>
            <p>
              <span class="number">202</span>
              <span class="title">Sales</span>
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="metric">
            <span class="icon"><i class="fa fa-bar-chart"></i></span>
            <p>
              <span class="number">35%</span>
              <span class="title">Conversions</span>
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-9">
          <div class="custom-tabs-line tabs-line-bottom left-aligned">
            <ul class="nav" role="tablist">
              <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Plane</a></li>
              <li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Train </a></li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="tab-bottom-left1">
              {!! $chart->html() !!}
            </div>
            <div class="tab-pane fade" id="tab-bottom-left2">
              <p>Chart 2</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="weekly-summary text-right">
            <span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%</span>
            <span class="info-label">Total Sales</span>
          </div>
          <div class="weekly-summary text-right">
            <span class="number">$5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
            <span class="info-label">Monthly Income</span>
          </div>
          <div class="weekly-summary text-right">
            <span class="number">$65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
            <span class="info-label">Total Income</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <!-- RECENT PURCHASES -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Recent Purchases</h3>
          <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
          </div>
        </div>
        <div class="panel-body no-padding">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Order No.</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Date &amp; Time</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="#">763648</a></td>
                <td>Steve</td>
                <td>$122</td>
                <td>Oct 21, 2016</td>
                <td><span class="label label-success">COMPLETED</span></td>
              </tr>
              <tr>
                <td><a href="#">763649</a></td>
                <td>Amber</td>
                <td>$62</td>
                <td>Oct 21, 2016</td>
                <td><span class="label label-warning">PENDING</span></td>
              </tr>
              <tr>
                <td><a href="#">763650</a></td>
                <td>Michael</td>
                <td>$34</td>
                <td>Oct 18, 2016</td>
                <td><span class="label label-danger">FAILED</span></td>
              </tr>
              <tr>
                <td><a href="#">763651</a></td>
                <td>Roger</td>
                <td>$186</td>
                <td>Oct 17, 2016</td>
                <td><span class="label label-success">SUCCESS</span></td>
              </tr>
              <tr>
                <td><a href="#">763652</a></td>
                <td>Smith</td>
                <td>$362</td>
                <td>Oct 16, 2016</td>
                <td><span class="label label-success">SUCCESS</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
            <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
          </div>
        </div>
      </div>
      <!-- END RECENT PURCHASES -->
    </div>
    <div class="col-md-6">
      <!-- TIMELINE -->
      <div class="panel panel-scrolling">
        <div class="panel-heading">
          <h3 class="panel-title">Recent User Activity</h3>
          <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
          </div>
        </div>
        <div class="panel-body">
          <ul class="list-unstyled activity-list">
            <li>
              <img src="{{ asset('admin/img/user1.png') }}" alt="Avatar" class="img-circle pull-left avatar">
              <p><a href="#">Michael</a> has achieved 80% of his completed tasks <span class="timestamp">20 minutes ago</span></p>
            </li>
            <li>
              <img src="{{ asset('admin/img/user2.png') }}" alt="Avatar" class="img-circle pull-left avatar">
              <p><a href="#">Daniel</a> has been added as a team member to project <a href="#">System Update</a> <span class="timestamp">Yesterday</span></p>
            </li>
            <li>
              <img src="{{ asset('admin/img/user3.png') }}" alt="Avatar" class="img-circle pull-left avatar">
              <p><a href="#">Martha</a> created a new heatmap view <a href="#">Landing Page</a> <span class="timestamp">2 days ago</span></p>
            </li>
            <li>
              <img src="{{ asset('admin/img/user4.png') }}" alt="Avatar" class="img-circle pull-left avatar">
              <p><a href="#">Jane</a> has completed all of the tasks <span class="timestamp">2 days ago</span></p>
            </li>
            <li>
              <img src="{{ asset('admin/img/user5.png') }}" alt="Avatar" class="img-circle pull-left avatar">
              <p><a href="#">Jason</a> started a discussion about <a href="#">Weekly Meeting</a> <span class="timestamp">3 days ago</span></p>
            </li>
          </ul>
        </div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
            <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
          </div>
        </div>
      </div>
      <!-- END TIMELINE -->
    </div>
  </div>
  @push('js')
    {!! Charts::scripts() !!}
    {!! $chart->script() !!}
  @endpush
@endsection
