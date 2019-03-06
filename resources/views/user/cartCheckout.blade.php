@extends('user.index')

@section('content')
<body>
<div class="container">
  <h2>Cart Checkout</h2>
  <div  style="border: 1px solid gray; padding: 10px">
    <div class="form-group">
      <label><strong>Name:</strong> {{$user->name}}</label>
    </div>
    <div class="form-group">
      <label><strong>Email:</strong> {{$user->email}}</label>
    </div>
    <div class="form-group">
      <label><strong>Phone:</strong> {{$user->phone}}</label>
    </div>
    <div class="form-group">
      <label><strong>Address:</strong> {{$user->address}}</label>
    </div>
    <div class="form-group">
      <label style="color: brown; font-size: 20px"><strong>Quantity:</strong> {{$quantity}}</label>
    </div>
    <div class="form-group">
      <label style="color: brown; font-size: 20px"><strong>Total price:</strong> {{$price}}</label>
    </div>
    <form method="post">
        {{csrf_field()}}
        <label for="type">Payment Type:</label>
        <select name="type">
            <option value=0>Cash on Delivery</option>
            <option value=1>Other</option>
        </select>
        <br>
        <input type="submit" class="btn btn-success" value="Done Checkout">
    </form>
  </div>
</div>
</body>
@endsection