@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Posts</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required autofocus>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" desabled readonly value="{{ old('slug') }}" required>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                   
                    @foreach ($categories as $cat)
                        @if (old('category_id') == $cat->id)
                            <option value={{ $cat->id }} selected> {{ $cat->name }}</option>    
                        @else
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>    
                        @endif
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                    <trix-editor input="body"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>


    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
