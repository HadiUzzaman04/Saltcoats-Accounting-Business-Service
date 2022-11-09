@extends('layouts.app')
@section('content')

<!--edit modal begain-->

<div class="modal-header">
    <h5 class="modal-title" id="editModalLabel">Edit Service</h5>
</div>
<div class="modal-body">
    <form action="{{route('service.update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="recipient-name" value="{{ $data->name}}" name="name" required>
        </div>
        <div class="form-group">
            <label for="message-text" class="col-form-label">Details</label>
            <textarea class="form-control" id="message-text" rows="6" name="details" required>{{ $data->details}}</textarea>
        </div>
        <div class="footer">
            <button type="submit" id="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>


<!--edit modal end-->

@endsection