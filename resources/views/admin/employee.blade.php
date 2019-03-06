@extends('admin.index')

@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12" id="activity-table">
    <div class="heading">
      <h3>Employee list</h3>
    </div>
    <div class="table-responsive table-hover">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Join date</th>
          </tr>
        </thead>
        <tbody>
          @foreach($employee as $inv)
          <tr>
          <td >{{$inv->id}} </td>
          <td >{{$inv->name}} </td>
          <td >{{$inv->email}} </td>
          <td >{{$inv->phone}} </td>
          <td >{{$inv->join_date}} </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection