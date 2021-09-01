
      <div class="sidebar">
        <a class="active" href="{{ route('user.merdash') }}">Merchant Dashboaard</a>
        <a href="{{route('user.pro')}}">Add Products</a>

        <a href="{{route('user.logout')}}">Logout</a>
      <br>
      {{-- <div class="btn-group dropup">
        <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ADD <i class="fa fa-plus" style="font-size:24px"></i>
        </button>
        <div class="dropdown-menu">
         <a href=""><li>Add Merchant</li></a>

         <a href=""><li>Add Trainer</li></a>
        </div>
      </div>--}}
      </div>
@yield('sidenav')
