@extends('layouts.header_footer')

@section('header')

<div  data-scroll-index="1" class="section wb first about">
    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-6">
                <div class="message-box">
                  <h2 class="atitle">ABOUT US</h2>



                      <!-- <div class="con">
                        <header>
                          <h4 style="text-align: center; color: #fff;">Welcome To BDJS</h4>
                        </header>
                      </div> -->


                    <p style="text-align: justify; color: white;" > Lorem ipsum dolor sit amet consectetur adipisicing elit. A ducimus laborum qui? Molestias tempore voluptatem qui nulla eveniet nam quaerat distinctio ut, quo laudantium illum officiis voluptate. Voluptates, laborum hic. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium tempora amet atque nesciunt ipsa dignissimos id reprehenderit voluptatibus debitis, dolore fugit? Consequuntur molestias eos a excepturi, labore repellat dignissimos odio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam placeat voluptatum asperiores error amet repellat. Odit molestias hic ex blanditiis est laboriosam dolores atque accusamus, assumenda similique iste beatae ea?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, tempore doloribus tenetur, commodi accusantium quibusdam temporibus amet nam quas nisi dicta corrupti. Rerum aut illo, sed facilis maiores neque adipisci. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque odio nam excepturi nemo culpa ullam voluptate porro adipisci nisi temporibus aliquid voluptas dolorem impedit minima quisquam ipsum, laudantium repellat non. lo</p>

                    <!-- <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 b">Learn More</a> -->
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-md-6">






                    <!-- <img src="uploads/about_04.png" alt="" class="img-responsive img-rounded">
                    <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a> -->
                    <iframe class="aboutvideo" src="https://www.youtube.com/embed/gey73xiS8F4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div><!-- end media -->
            </div><!-- end col -->
        </div><!-- end row -->
  </div>

<div class="gallery">
  <div class="gallery-container">
    <div class="gallery-item" data-index="1">
        <img src="images/trainer1.jpg">
    </div>
    <div class="gallery-item" data-index="2">
        <img src="images/hero1.jpg">
    </div>
    <div class="gallery-item" data-index="3">
        <img src="https://images.pexels.com/photos/531321/pexels-photo-531321.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb">
    </div>
    <div class="gallery-item" data-index="4">
        <img src="https://images.pexels.com/photos/373920/pexels-photo-373920.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
    </div>
    <div class="gallery-item" data-index="5">
        <img src="https://images.pexels.com/photos/164241/pexels-photo-164241.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
    </div>
    <div class="gallery-item" data-index="6">
        <img src="https://images.pexels.com/photos/417054/pexels-photo-417054.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
    </div>
    <div class="gallery-item" data-index="7">
        <img src="https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
    </div>
    <div class="gallery-item" data-index="8">
        <img src="https://images.pexels.com/photos/38326/pexels-photo-38326.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
    </div>
    <div class="gallery-item" data-index="9">
        <img src="https://images.pexels.com/photos/266691/pexels-photo-266691.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
    </div>
</div>
</div>




@endsection
