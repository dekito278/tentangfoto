@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div>
            <all-posts />
        </div>
    </div>
    <div class="col-md-6">
            <create-post />
    </div>  
</div>
@endsection