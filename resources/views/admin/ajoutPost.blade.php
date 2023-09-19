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
        <div class="offset-3 mt-4 col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Ajout de post</h4>
                <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="">Titre</label>
                    <input type="text" placeholder="ajouter un titre" class="mt-2 form-control" name="titre" id="">
                    <label for="">Categorie</label>
                    <select class="form-select" name="category_id">
                      @foreach ($categories as $categorie)
                      <option value="{{$categorie->id}}">{{$categorie->libele}}</option>
                      @endforeach
                    </select>
                    <label for="">Photo</label>
                    <input type="file" placeholder="une photo" class="mt-2 form-control" name="photo" id="">
                    <label for="">Description</label>
                  <textarea name="description" id="" class="form-control mt-2 " cols="30" rows="10"></textarea>
                    <input type="submit" class="btn btn-success my-2" value="Ajouter">
                </form>
              </div>
            </div>
          </div>
@include('components.footer')
      </div>
    </div>
  </div>
@endsection


