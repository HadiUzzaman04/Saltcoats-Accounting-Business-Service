@extends('layouts.app')
@section('content')

<!--edit modal begain-->

<div class="modal-header">
    <h5 class="modal-title" id="editModalLabel">Edit Contact Info</h5>
</div>
<div class="modal-body">
    <form action="{{route('contactinfo.update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="recipient-address" class="col-form-label">Address</label>
            <input type="text" class="form-control" id="recipient-address" value="{{ $data->address}}" name="address" required>
        </div>
        <div class="form-group">
            <label for="recipient-phone" class="col-form-label">Phone</label>
            <input type="text" class="form-control" id="recipient-phone" value="{{ $data->phone}}" name="phone" required>
        </div>
        <div class="form-group">
            <label for="recipient-email" class="col-form-label">Email</label>
            <input type="text" class="form-control" id="recipient-email" value="{{ $data->email}}" name="email" required>
        </div>

        <div class="modal-footer">
            <button type="submit" id="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>

<!--edit modal end-->

@endsection