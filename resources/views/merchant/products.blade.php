@include('merchant.header')

<style>
    .card{
        border: none !important;
    }
   .card:hover
   {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   }
    .car-img
    {
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        padding-top: 3%;
    }
    .card-tit
    {
        color: #000;

    }
    .card-tit:hover
    {
        text-decoration: none;
        color: #000;
    }
    .card-text i{
        color: rgb(236, 214, 14);
    }
    .off
    {
        font-size:.8rem;
        color: rgb(18, 238, 165);
        font-style: italic;
    }
</style>
<body>

    @foreach (\App\Models\Product::all() as $item)

    @if ($item->merchant_id==auth()->user()->id)



    <div class="col-lg-3 col-md-4 col-sm-6 p-3">
        <div class="card" style="width: 18rem;">
            <a href="" class="card-tit">
            <img src="{{asset('uploads/productimages/'. $item->image)}}" class="car-img" alt="...">
            </a>
            <div class="card-body">
            <a href="" class="card-tit">
              <h5 class="card-title">{{$item->name}}</h5>
            </a>
            <p class="card-text">
                {{$item->price}}<p>
              <p class="card-text">
                {{$item->quantity}}<p>


            </div>
          </div>
    </div>

    @endif
    @endforeach
</body>
