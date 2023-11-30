@extends('layouts.admin')


@section('content')

<div class="container py-5">
    <form action="{{ route('admin.projects.store')}}" method="POST">
        @csrf
        <h2>Add new project</h2>
            <div class="mb-3">
                <label for="title" class="form-label">Project Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Project Description</label>
                <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp">
                @error('description')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="release_date" class="form-label">Project Publication Date: </label>
                <input type="date" class="form-control" id="release_date" name="release_date" aria-describedby="emailHelp">
                @error('publication_date')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-warning">Reset</button>
      </form>

</div>
@endsection