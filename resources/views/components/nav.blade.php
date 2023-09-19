
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.index')}}">
            <i class="ti-shield menu-icon"></i>
            <span class="menu-title">Tableau de Bord</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('categorie.index')}}">
            <i class="ti-palette menu-icon"></i>
            <span class="menu-title">Gestion de categorie</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('post.index')}}">
            <i class="ti-layout-list-post menu-icon"></i>
            <span class="menu-title">Gestion de posts</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('praticien.index')}}">
            <i class="ti-star menu-icon"></i>
            <span class="menu-title">Gestion de praticiens</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="mx-4 mt-2" href="{{route('admin.logout')}}">
              <button class="btn btn-danger">
                Deconnexion
              </button>
            </a>
          </li>
      </ul>
    </nav>
