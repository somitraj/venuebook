@extends('Layout/Mainlayout')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel-primary">
            <div class="panel-heading">
                <p style="text-align:center"> User gestion</p>
            </div>
            <div class="panel-body">
                {!! form($form) !!}
            </div>
        </div>
    </div>
</div>
@endsection
