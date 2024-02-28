@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8"> <!-- Blog Content Column -->
      <div class="titlebar">
        <a class="btn btn-secondary float-end mt-3" href="{{ route('posts.create') }}" role="button">Add Post</a>
        <h1>Pensamientos</h1>
      </div>
      <hr>
      <!-- Message if a post is posted successfully -->
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      @if (count($posts) > 0)
      @foreach ($posts as $post)
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-2">
              <img class="img-fluid" style="max-width:50%;" src="{{ asset('images/'.$post->image)}}" alt="">
            </div>
            <div class="col-10">
              <h4>{{$post->title}}</h4>
            </div>
          </div>
          <p>{{$post->description}}</p>
          <hr>
        </div>
      </div>
      @endforeach
      @else
      <p>No Posts found</p>
      @endif
    </div>

    <div class="col-md-4"> <!-- Table Column -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title d-flex justify-content-center">Semana 2</h5>
          <table class="table">
            <tr>
                <td>Club</td>
                <td>Puntos</td>
            </tr>
            <tr>
                <td>O'Higgins</td>
                <td>6</td>
            </tr>
            <tr>
                <td>Coquimbo</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Deportes Iquique</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Nublense</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Palestino</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Colo Colo</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Union La Calera</td>
                <td>3</td>
            </tr>
            <tr>
                <td>La U</td>
                <td>3</td>
            </tr><tr>
                <td>Cobresal</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Everton</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Huachipato</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Union Espanola</td>
                <td>1</td>
            </tr><tr>
                <td>Universidad Catolica</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Audax Italiano</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Copiapo</td>
                <td>0</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
