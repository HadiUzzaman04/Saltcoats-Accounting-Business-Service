@extends('layouts.app')
@section('content')

<!--edit modal begain-->

<div class="modal-header">
    <h5 class="modal-title" id="editModalLabel">Edit Accounting FAQ</h5>
</div>
<div class="modal-body">
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="recipient-question" class="col-form-label">Question</label>
            <input type="text" class="form-control" id="recipient-question" value="{{ $data->question}}" name="question" required>
        </div>
        <div class="form-group">
            <label for="message-text" class="col-form-label">Answer</label>
            <textarea class="form-control" id="message-text" rows="6" name="answer" required>{{ $data->answer}}</textarea>
        </div>
        <div class="footer">
            <button type="submit" id="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>


<!--edit modal end-->

@endsection