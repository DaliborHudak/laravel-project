@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>
        <div class="col-6">
            <h1>Terms</h1>
            <div>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto tenetur illum perferendis. At, in?
                Repellendus,
                veritatis architecto exercitationem nesciunt delectus deserunt consequatur. Similique, eius in doloremque
                quae nulla
                quaerat harum.
            </div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection
