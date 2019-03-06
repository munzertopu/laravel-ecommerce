@extends('admin.index')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" id="activity-table">
            <div class="heading">
                <h3>Customer list</h3>
            </div>
            <div class="table-responsive table-hover">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Join</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customerList as $cus)
                        <tr>
                            <td >{{$cus->id}} </td>
                            <td >{{$cus->name}} </td>
                            <td >{{$cus->email}} </td>
                            <td >{{$cus->address}} </td>
                            <td >{{$cus->phone}} </td>
                            <td >{{$cus->join_date}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection