@extends('user.index')

@section('content')
<body>
<div class="container">
    <h2>PROFILE</h2>
    <div style="border: 1px solid gray; padding: 10px">
        <form method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Current password:</label>
                <input type="text" class="form-control" name="cPass" placeholder="Current password" required>
            </div>
            <div class="form-group">
                <label for="name">New password:</label>
                <input type="text" class="form-control" name="newPass" placeholder="New password" required>
            </div>
            <div class="form-group">
                <label for="name">Retype new password:</label>
                <input type="text" class="form-control" name="cNewPass" placeholder="Current password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    @if(session('msg'))
        <p class="text-danger">{{session('msg')}}</p>
    @endif
</div>
</body>
@endsection