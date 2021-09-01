@extends('layouts.header_footer')
@section('header')
<div class="team">


    <section class="our-team-section">
        <h1 class="hea" style="text-align: center;">Our Team</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Name1</h3>
                            <span class="post">Owner</span>
                        </div>
                        <ul class="social">
                            <li>
                                <a href="#"  target="_blank"class="fa fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Name 2</h3>
                            <span class="post">Manager</span>
                        </div>
                        <ul class="social">
                            <li>
                                <a href="#" class="fa fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Name 3</h3>
                            <span class="post">Sales Executive</span>
                        </div>
                        <ul class="social">
                            <li>
                                <a href="#" class="fa fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Team 4</h3>
                            <span class="post">Lead Trainer</span>
                        </div>
                        <ul class="social">
                            <li>
                                <a href="#" class="fa fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </div>





    <section id="contact">
        <div class="container">
            <div class="contact-title">
                <h3 class="heading" style="text-align: center;">Get In <span>Touch</span></h3>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48306.05339877067!2d-74.245183970742!3d40.825144655510556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2555646a723a1%3A0x449f3366d017b214!2sMontclair%2C+NJ%2C+USA!5e0!3m2!1sen!2sin!4v1465991700675" frameborder="0"></iframe>
            </div>
            <div class="row">
                <div class="col-md-7 contact-form">
                    <h4>Contact form</h4>
                    <form action="#" method="post">
                        <input type="text" name="Name" value="Name" required="">
                        <input type="email" name="Email" value="Email" required="">
                        <input type="text" name="Phone" value="Phone"required="">
                        <textarea name="Message" required="">Message...</textarea>
                        <input type="submit" value="Submit">
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




@endsection
