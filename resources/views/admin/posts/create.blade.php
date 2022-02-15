@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Nuovo post</div>

                <div class="card-body">
                    
                    <form action="{{route("posts.store")}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci titolo">
                        </div>

                        <div class="form-group">
                            <label for="content">Contenuto</label>
                            <textarea name="content" id="content" class="form-control" cols="30" rows="10" placeholder="Inserisci il contenuto del post"></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">Crea Post</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection