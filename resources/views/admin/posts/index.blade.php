@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Posts list</div>

                <div class="card-body">
                    <ul>
                        @foreach ($posts as $post)
                        <li>{{$post->title}}</li>
                            
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection