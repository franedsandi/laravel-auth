@extends('layouts.admin')

@section('content')


<div class="container">

    <h1 class="py-5 text-white">Project Details</h1>


        <div class="card mb-5" style="width: 35rem;">

            <div class="card">
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                <h5 class="card-title">{{ $project->title}}</h5>
                <p class="card-text"><span>Publication Date: </span>{{ $project->publication_date }}</p>
                <p class="card-text">{{ $project->description }}</p>
                <div class="d-flex gap-2 justify-content-center">
                    <a class="btn btn-outline-warning" href="{{ route('admin.projects.edit' , $project)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    @include('admin.projects.delete_boton')
                </div>
                </div>
            </div>

        </div>
        <a class="btn btn-light fw-bold" href="{{ route('admin.projects.index')}}"><i class="fa-solid fa-arrow-left"></i></a>

</div>


@endsection