
      <div class="sidebar">
        <a class="active" href="{{ route('admin.dash') }}">Admin Dashboaard</a>
        <a data-toggle="modal" data-target="#adddietModal">Add Diet</a>

        <a  href="{{ route('admin.message') }}">Messages</a>
      <br>
       <div class="btn-group dropup">
        <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ADD <i class="fa fa-plus" style="font-size:24px"></i>
        </button>
        <div class="dropdown-menu">
         <a href="{{route('admin.addmerch')}}"><li>Add Merchant</li></a>

         <a href="{{route('admin.addtrainer')}}"><li>Add Trainer</li></a>
        </div>
      </div>
      <a href="{{route('admin.logout')}}">Logout</a>
      </div>


      <div class="modal fade" id="adddietModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('admin.insertdiet') }}" method="POST" enctype="multipart/form-data">
                @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Diet</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <label for="">Title</label>
              <input type="text" required name="title" class="form-control">
              <label for="">Description</label>
              <input type="text" required name="desc" class="form-control">
              <label for="">Upload Image <span style="color: red">(JPG,JPEG,PNG)</span></label>
              <input type="file" required onchange="readURL(this);" class="form-control-file" name="image">
              <br>
              <img src="" id="blah" alt="">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
        </div>
      </div>
      <script>
           function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)

            };

            reader.readAsDataURL(input.files[0]);
        }
    }
      </script>
@yield('sidenav')
