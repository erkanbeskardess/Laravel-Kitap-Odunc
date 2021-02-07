@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">{{$message}}</button>
    </div>
    @endif
