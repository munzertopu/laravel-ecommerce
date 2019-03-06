@extends('admin.index')

@section('content')
<div class="container-fluid">
    @if($type == "ALL")
        <!-- <a href="{{route('report.buyHistoryAll')}}" class="btn btn-success">Show Group By</a> -->
    @endif
    @if($type != "ALL")
        <!-- <a href="{{route('report.buyHistory')}}" class="btn btn-success">Show All</a> -->
    @endif
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" id="activity-table">
            <div class="heading">
                <h3>Buying history</h3>
            </div>
            <div class="table-responsive table-hover">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product id</th>
                            <th>Image</th>
                            @if($type != "ALL")
                            <th>Total Broght</th>
                            @endif
                            <th>Product name</th>
                            <th>Buying_price</th>
                            <th>Selling_price</th>
                            <th>Available quantity</th>
                            <th>Last buying_price</th>
                            <th>Last buying_quantity</th>
                            <th>Date Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buyHistory as $inv)
                        <tr>
                            <td >{{$inv->id}} </td>
                            <td><img src="{{asset('images')}}/product/{{$inv->image}}" class="img-thumbnail" height="100" width="100"></td>
                            @if($type != "ALL")
                            <td >{{$inv->totalbuy}} </td>
                            @endif
                            <td >{{$inv->name}} </td>
                            <td >{{$inv->buying_price}} </td>
                            <td >{{$inv->selling_price}} </td>
                                <td >{{$inv->quantity}} </td>
                                <td >{{$inv->brought_price}} </td>
                            <td >{{$inv->quantitybuy}} </td>
                            <td >{{$inv->date_time}} </td>
                            @if($inv->status=='INSTOCK')
                                <td style="color:green" >{{$inv->status}} </td>
                            @endif
                            @if($inv->status!='INSTOCK')
                            <td style="color:red" >{{$inv->status}} </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection