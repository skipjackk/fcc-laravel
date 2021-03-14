@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label ">Caption</label>

                    <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" caption="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label ">Image</label>
                    <input id="image" name="image" type="file" class="form-control-file @error('image') is-invalid @enderror" caption="image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row pt-4">
                    <button class="btn btn-primary">Add Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection