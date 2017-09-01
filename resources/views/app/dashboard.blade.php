@extends("../layout.app") @section("content")
<div class="row">
    <div class="col-md-12">
        <h1><strong>Escritorio</strong></h1>
        <hr> @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    </div>
</div>
@endsection