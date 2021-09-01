



@extends('layouts.header_footer')
@section('header')

@include('sweetalert::alert')

        <div class="hero">
            <div class="hero-content">
                <h1>Iron Gym</h1>
                <p>Join Now For 1000rs</p>

                <a href="#third" class="read-more">Join NOW</a>
                {{-- <a href="#" class="read-more">Payment</a> --}}

            </div>
        </div>
        <section>
          <div class="about-us">
            <div class="container">
              <div class="col-sm-6 offset-sm-6">
                <h2 class="atitle">ABOUT US</h2>
                <p class="wow bounceInRight" data-wow-delay=".25s">Trainers, athletes and serious clients alike are looking for the toughest, most brutally productive training techniques to spice up their workouts and provide a truly unique challenge for their body and mind. Think: one-arm push-ups, pistols, pull-ups, handstands, hanging levers and the like! If you want toeither for </p>
                <button type="button" class="btn btn-outline-secondary btn-lg mb-3 aab " style="color: #fff;" data-toggle="button" aria-pressed="false" autocomplete="off">
                  Read More
                </button>
              </div>
            </section>
            <div class="demo">
              <div class="container">
                <h2 style="text-align: center;" class="ttitle">TRAINERS</h2>
                  <div class="row">
                      <div class="col-md-12">
                          <div id="news-slider" class="owl-carousel">
                              <div class="post-slide">
                                  <div class="post-img">
                                      <a href="#"><img src="images/trainer1.jpg" alt=""></a>
                                  </div>
                                  <div class="post-content">
                                      <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                                      <p class="post-description">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                                      </p>

                                      <a href="#" class="read-more">read more</a>
                                  </div>
                              </div>

                              <div class="post-slide">
                                  <div class="post-img">
                                      <a href="#"><img src="images/trainer2.jpg" alt=""></a>
                                  </div>
                                  <div class="post-content">
                                      <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                                      <p class="post-description">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                                      </p>

                                      <a href="#" class="read-more">read more</a>
                                  </div>
                              </div>
                              <div class="post-slide">
                                <div class="post-img">
                                    <a href="#"><img src="images/trainer4.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                                    <p class="post-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                                    </p>

                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>
                            <div class="post-slide">
                              <div class="post-img">
                                  <a href="#"><img src="images/trainer3.jpg" alt=""></a>
                              </div>
                              <div class="post-content">
                                  <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                                  <p class="post-description">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                                  </p>

                                  <a href="#" class="read-more">read more</a>
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <section id="third">
            <div class="membership">
              <h1>View Our Plans</h1>
              <p class="membership_desc">Get started today and recieve 25% off your first month</p>
              <div class="membership_warp">
                <!-- card_1 -->
                <div class="membership_card">
                  <div class="membership_tittle">
                    <i class="fas fa-dumbbell card_icon"></i>
                    <h3>Starter</h3>
                    <div class="membership_perks">
                      <p>get acces to the entire gym</p>
                      <p>₹1000 per month</p>
                    </div>
                    @if (auth()->check())
                    <a type="button"  data-toggle="modal" data-target="#oneModal" class="button">Join Now</a>
                    @else
                    <a type="button"  href="{{route('user.login')}}" class="button">Join Now</a>
                    @endif

                  </div>
                </div>
                <!-- card_2 -->
                <div class="membership_card">
                  <div class="membership_tittle">
                    <i class="fas fa-bicycle card_icon"></i>
                    <h3>Silver</h3>
                    <div class="membership_perks">
                      <p>get acces to the entire gym</p>
                      <p>Group Fitness Class</p>
                      <p>₹1500 per month</p>
                    </div>
                    <a type="button"  data-toggle="modal" data-target="#twoModal" class="button">Join Now</a>
                  </div>
                </div>
                <!-- card_3 -->
                <div class="membership_card">
                  <div class="membership_tittle">
                    <i class="fas fa-dumbbell card_icon"></i>
                    <h3>Gold</h3>
                    <div class="membership_perks">
                      <p>get acces to the entire gym</p>
                      <p>Group Fitness Class</p>
                      <p>Private Personal Training</p>
                      <p>₹3000 per month</p>
                    </div>
                    <a type="button"  data-toggle="modal" data-target="#threeModal" class="button">Join Now</a>
                  </div>
                </div>
              </div>
            </div>

        </section>

        <!-- <section id="testimonials">
          <div class="contact-title">
            <h3 class="heading" style="text-align: center;color: #fff;">What People <span>Say</span></h3>
          </div>
          <div class="container" >
              <div id="car" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/11.jpg" class="d-block w-100" alt="trainer">
                    <div class="carousel-caption">
                      <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen. </p>
                      <img src="https://i.imgur.com/lE89Aey.jpg">
                      <div id="image-caption">Harry Mon</div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./images/11.jpg" class="d-block w-100" alt="trainer">
                    <div class="carousel-caption">
                      <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen. </p>
                      <img src="https://i.imgur.com/lE89Aey.jpg">
                      <div id="image-caption">Harry Mon</div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./images/11.jpg" class="d-block w-100" alt="trainer">
                    <div class="carousel-caption">
                      <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen. </p>
                      <img src="https://i.imgur.com/lE89Aey.jpg">
                      <div id="image-caption">Harry Mon</div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#car" role="button" data-slide="prev">
                  <i class='fas fa-arrow-left'></i>
                </a>
                <a class="carousel-control-next" href="#car" role="button" data-slide="next">
                  <i class='fas fa-arrow-right'></i>
                </a>
              </div>
           </div>
        </section> -->


<!-- Button trigger modal -->


<!-- Modal -->
@if (auth()->check())
@if (auth()->user()->register_check == 1)
<div class="modal fade" id="oneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Your Already registered</h5>
        </div>
      </div>
    </div>
</div>
@else
<form action="{{route('register')}}" method="POST">
    @csrf
<div class="modal fade" id="oneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gym Registration (₹1000)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">
        <div class="form-group">
            <label for="exampleInputName1">Full Name </label>
            <input type="name" name="name" value="{{auth()->user()->name}}" readonly required class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter your full name">

            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <input type="hidden" name="id" value="{{auth()->user()->uuid}}">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email"  value="{{auth()->user()->email}}" readonly required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email id">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Mobile Number</label>
            <input type="number" required  value="{{auth()->user()->mobile}}" readonly name="mobile" class="form-control" id="exampleInputMobile1" aria-describedby="emailHelp" placeholder="Enter your mobile number">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="inputAddress2">Address</label>
            <input type="text" required name="address" class="form-control" id="inputAddress2" placeholder="Enter your address">
          </div>
          <input type="hidden" name="amount" value="1000">
          <div class="form-group">
            <label for="exampleInputEmail1">Weight</label>
            <input type="number" required name="weight" class="form-control" id="exampleInputWeight1" aria-describedby="emailHelp" placeholder="Enter Your Weight in KG">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputAge">Age</label>
            <input type="number" required name="age" class="form-control" id="exampleInputWeight1" aria-describedby="emailHelp" placeholder="Enter Your Age">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Health Issue (Optional)</label>
            <input type="name" name="health" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Any health issues (Optional)">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Height</label>
            <input type="number" required name="height" class="form-control" id="exampleInputWeight1" aria-describedby="emailHelp" placeholder="Enter Your height in CM">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  class="btn btn-success">Register</button>
      </div>
    </div>
  </div>
</div>
</form>
@endif



@endif



@if (auth()->check())
@if (auth()->user()->register_check == 1)
<div class="modal fade" id="twoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Your Already registered</h5>
        </div>
      </div>
    </div>
</div>
@else
<form action="{{route('register')}}" method="POST">
    @csrf
<div class="modal fade" id="twoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Gym Registration (₹1500)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputName1">Full Name </label>
                <input type="name" name="name" value="{{auth()->user()->name}}" readonly required class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter your full name">

                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <input type="hidden" name="id" value="{{auth()->user()->uuid}}">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"  value="{{auth()->user()->email}}" readonly required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email id">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mobile Number</label>
                <input type="number" required  value="{{auth()->user()->mobile}}" readonly name="mobile" class="form-control" id="exampleInputMobile1" aria-describedby="emailHelp" placeholder="Enter your mobile number">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>

              <div class="form-group">
                <label for="inputAddress2">Address</label>
                <input type="text" required name="address" class="form-control" id="inputAddress2" placeholder="Enter your address">
              </div>
              <input type="hidden" name="amount" value="1500">
              <div class="form-group">
                <label for="exampleInputEmail1">Weight</label>
                <input type="number" required name="weight" class="form-control" id="exampleInputWeight1" aria-describedby="emailHelp" placeholder="Enter Your Weight in KG">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="exampleInputAge">Age</label>
                <input type="number" required name="age" class="form-control" id="exampleInputWeight1" aria-describedby="emailHelp" placeholder="Enter Your Age">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Health Issue (Optional)</label>
                <input type="name" name="health" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Any health issues (Optional)">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Height</label>
                <input type="number" required name="height" class="form-control" id="exampleInputWeight1" aria-describedby="emailHelp" placeholder="Enter Your height in CM">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>

          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Register</button>
        </div>
      </div>
    </div>
  </div>
</form>
@endif
@endif


@if (auth()->check())
@if (auth()->user()->register_check == 1)
<div class="modal fade" id="threeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Your Already registered</h5>
        </div>
      </div>
    </div>
</div>
@else
<form action="{{route('register')}}" method="POST">
    @csrf
  <div class="modal fade" id="threeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Gym Registration (₹3000)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputName1">Full Name </label>
                <input type="name" name="name" value="{{auth()->user()->name}}" readonly required class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter your full name">

                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <input type="hidden" name="id" value="{{auth()->user()->uuid}}">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"  value="{{auth()->user()->email}}" readonly required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email id">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mobile Number</label>
                <input type="number" required  value="{{auth()->user()->mobile}}" readonly name="mobile" class="form-control" id="exampleInputMobile1" aria-describedby="emailHelp" placeholder="Enter your mobile number">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>

              <div class="form-group">
                <label for="inputAddress2">Address</label>
                <input type="text" required name="address" class="form-control" id="inputAddress2" placeholder="Enter your address">
              </div>
              <input type="hidden" name="amount" value="3000">
              <div class="form-group">
                <label for="exampleInputEmail1">Weight</label>
                <input type="number" required name="weight" class="form-control" id="exampleInputWeight1" aria-describedby="emailHelp" placeholder="Enter Your Weight in KG">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="exampleInputAge">Age</label>
                <input type="number" required name="age" class="form-control" id="exampleInputWeight1" aria-describedby="emailHelp" placeholder="Enter Your Age">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Health Issue (Optional)</label>
                <input type="name" name="health" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Any health issues (Optional)">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Height</label>
                <input type="number" required name="height" class="form-control" id="exampleInputWeight1" aria-describedby="emailHelp" placeholder="Enter Your height in CM">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>

          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Register</button>
        </div>
      </div>
    </div>
  </div>
</form>
@endif
@endif

        <div class="testimonials">
          <div class="inner">
            <h1>Testimonials</h1>
            <!-- <div class="border"></div> -->

            <div class="row">
              <div class="col">
                <div class="testimonial">
                  <img src="p1.png" alt="">
                  <div class="name">Full name</div>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  </p>
                </div>
              </div>

              <div class="col">
                <div class="testimonial">
                  <img src="p2.png" alt="">
                  <div class="name">Full name</div>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  </p>
                </div>
              </div>

              <div class="col">
                <div class="testimonial">
                  <img src="p3.png" alt="">
                  <div class="name">Full name</div>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <section id="contact">
          <div class="container">
              <div class="contact-title">
                  <h3 class="heading" style="text-align: center;">Get In <span>Touch</span></h3>
              </div>
              <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63020.70450684762!2d76.4723101726518!3d9.173043950818933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b061c549dfb32f3%3A0x3cc5f9f4d4a5b63d!2sKayamkulam%2C%20Kerala!5e0!3m2!1sen!2sin!4v1624541577343!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="row">
                  <div class="col-md-7 contact-form">
                      <h4>Contact form</h4>
                      <form action="{{ route('form-fill') }}" method="POST">
                          @csrf
                          <input type="text" name="name" placeholder="Name" required="">
                          <input type="email" name="email" placeholder="Email" required="">
                          <input type="text" name="mobile" placeholder="Mobile"required="">
                          <textarea name="message"  placeholder="Message" required=""></textarea>
                          <input type="submit" placeholder="Submit">
                      </form>
                  </div>
                  <div class="col-md-5 contact">
                      <h4>Contact Info</h4>
            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur. Nunc id dui vitae urna tincidunt varius.</p>
            <ul class="contact_info">
              <li><span class="fa fa-map-marker" aria-hidden="true"></span>1234k Avenue, 4th block, 3FB, New Jersey.</li>
              <li><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
              <li><span class="fa fa-phone" aria-hidden="true"></span>+1(21) 244 567 5678</li>
              <li><span class="fa fa-globe" aria-hidden="true"></span><a href="#">info@website.com</a></li>
            </ul>
                  </div>
              </div>
          </div>
      </section>
      <section>

        @endsection

