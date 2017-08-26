@if ($errors->all())
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h4><i class="fa fa-exclamation-triangle"></i> Oops! There was an error ... </h4>
        @foreach ($errors->all() as $error)
            <i class="fa fa-caret-right"></i>  {{$error}} <br />
        @endforeach
    </div>
@endif