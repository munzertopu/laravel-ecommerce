@extends('admin.index')

@section('content')
<body>

<div class="container">
  <h2>Update Product: {{$products->name}}</h2>
  <form method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$products->id}}">
    <div class="form-group">
      <img src="{{asset('images')}}/product/{{$products->image}}" class="img-thumbnail" height="200" width="200">
    </div>
    <div class="form-group">
      <input type="file" name="image">
    </div>
    <div class="form-group">
      <label for="Id">Id:</label>
      <input disabled type="text" class="form-control" placeholder="Enter product name" value = "{{$products->id}}">
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter product name" value = "{{$products->name}}">
    </div>
    <div class="form-group">
      <label for="category">Category:</label>
      <select class="form-control" name="category">
        @foreach($catNames as $cat)
        @if($cat->subcategory_id == $products->subcatagoryid)
        <option value="{{$cat->subcategory_id}}">{{$cat->cat_sub}}</option>
        @endif

        @endforeach

         @foreach($catNames as $cat)
        <!-- <option value="{{$cat->subcategory_id}}">{{$cat->cat_sub}}</option> -->
        @if($cat->subcategory_id != $products->subcatagoryid)
        <option value="{{$cat->subcategory_id}}">{{$cat->cat_sub}}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="buying_price">Buying Price:</label>
      <input  type="text"  class="form-control" name="buying_price" placeholder="Enter Buying Price" value="{{$products->buying_price}}">
    </div>
    <div class="form-group">
      <label for="selling_price">Selling Price:</label>
      <input type="text"  class="form-control" name="selling_price" placeholder="Enter Selling Price" value="{{$products->selling_price}}">
    </div>
    <div class="form-group">
      <label><strong> Available quantity: {{$products->quantity}}</strong></label>
    </div>
    <div class="form-group">
      <label for="quantitiy">Add quantitiy:</label>
      <input type="number"  class="form-control" name="quantity" placeholder="Enter quantitiy">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text"  class="form-control" name="description" value="{{$products->description}}">
    </div>
    <div class="form-group">
      <label for="status">Status:</label>
      <select  class="form-control" name="status">
        @foreach($statusList as $status)
          @if ($products->status== $status->status)
            <option  selected value="{{$status->id}}">{{$status->status}}</option>
          @else
            <option value="{{$status->id}}">{{$status->status}}</option>
          @endif
        @endforeach
      </select>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br>
  @foreach($errors->all() as $err)
      <p class="text-danger">{{$err}}</p>
  @endforeach
    <h3 class="text-success">{{session('message')}}</h3>
</div>

</body>

@endsection