<nav class="navbar navbar-expand-lg show  navbar-light ">
    <a class="navbar-brand" href="#">Sort by:</a>

    <div class="collapse navbar-collapse show" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::current() }}">All <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::current()."?sort=price_asc" }}"> Price-Low to High</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::current()."?sort=price_desc" }}"> Price-High to Low</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::current()."?sort=new" }}"> Newest</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::current()."?sort=old" }}"> Oldest</a>
          </li>



                <form class="form-inline" action="{{ route('shoping') }}" method="GET">
                    <input name="search"  value="{{ request()->query('search') }}" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>


      </ul>

    </div>
  </nav>
  @yield('sort')
