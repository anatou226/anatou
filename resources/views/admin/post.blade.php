@extends('layouts.main')
@section('content')
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo me-5" href="index.html"><img src="images/logo.svg" class="me-2" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown me-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="ti-email mx-0"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">

  @include('components.nav')
      <!-- partial -->
      <div class="main-panel row ">
        <div class="offset-2 mt-4 col-lg-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Gestion de Post</h4>
                <div class="text-end">
                  <a href="{{route('post.create')}}" class="btn btn-success ">
                    ajouter un post
                  </a>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Titre </th>
                        <th>Categorie </th>
                        <th>Description </th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($posts as $post)
                     <tr>
                        <td>{{$post->titre}}</td>
                        <td>{{$post->category->libele}} </td>
                        <td>{{$post->description}} </td>
                        <td>
                            <button class="btn btn-primary">
                                Editer
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger">
                                Supprimer
                            </button>
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                  {{$posts->links()}}
                </div>
              </div>
            </div>
          </div>
@include('components.footer')
      </div>
    </div>
  </div>
@endsection


