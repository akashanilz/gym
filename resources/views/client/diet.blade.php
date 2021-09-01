
@extends('layouts.header_footer')
@section('header')
<style>
    .wd
    {
        width: 50%;
        text-align: center;
        padding: 2% 0;
        /* background-color: #df6700; */
        background-color:#df6700;
        text-transform: uppercase;
        font-weight: bolder;
        color: black;
    }
    .wd:hover
    {
        color: black;
    }
    .wd img
    {
        margin-right: 10px;
    }
    .table tr th
    {
        width: 163px;
    }
    /* .row
    {
        align-items: center;
    } */
    .sp
    {
        padding: 3%;
        margin: auto auto;

    }
    #nutii
    {
      padding: 3%;
    }
    .heading
    {
      text-transform: uppercase;
      font-weight: bolder;
      text-align: center;
      font-style: italic;
      width: 50%;
      margin-left: auto;
      margin-right: auto;
      border: 1px solid blue;
      border-radius: 132px 20px;
      background-color: beige;
    }
    .card img
    {
      width: 50%;
      margin-left: auto;
      margin-right: auto;
      margin-top: 2%;
    }
    .container .rr
    {
      text-align: center;
    }
    .card .card-text
    {
      text-align: justify;
    }
    .s
    {
      padding: 2%;
    }

    .container .card
    {
        border: 1px solid #A8DB13;

    }
    .card-title
    {
      text-align: center;
    }
    .sp .card{
      background-color: rgb(26, 41, 44);
      color: #fff;

    }
    table,th,td{
      color: #fff !important;
    }

    @media only screen and (max-width: 600px)
    {
      .heading
      {
        width: 80%;
      }
      .container .card{
        margin-left: auto;
        margin-right: auto;
        width: 17rem !important;
      }
    }
</style>
</head>
<body style="background-color: black;">

      <div class="call">
  <div class="container c" style="align-content: center;">
      <table align="center" cellspacing="0" cellpadding="0" style="width:100%;">

      <tbody><tr><td align="center"><br><b class="atitle">Calorie Calculator</b><br><br>

      <form name="frm" action="" class="frms"><table>
      <tbody style="color: white;"><tr>
          <td>Age:</td>
          <td><input type="text" name="age" id="age" align="left" size="3" maxlength="2" onkeypress="return cknum(event,age)"><font>years</font></td></tr>
      <tr>
          <td>Gender:</td>
          <td>
              <input type="radio" name="gen" id="gen" checked="">
              <font>Male</font><input type="radio" name="gen" id="gen"><font>Female</font>
              </td>
          </tr>
          <tr>
          <td>Height:
          </td>
          <td>
              <select style="width:100px;" name="foot" id="foot" onchange="hcon()">
              <option value="1">1'</option>
              <option value="2">2'</option>
              <option value="3">3'</option>
              <option value="4">4'</option>
              <option value="5">5'</option>
              <option value="6">6'</option>
              <option value="7">7'</option>
              </select>
              &nbsp;&nbsp;<select style="width:100px;" name="inch" id="inch" onchange="hcon()">
              <option value="1">1"</option>
              <option value="2">2"</option>
              <option value="3">3"</option>
              <option value="4">4"</option>
              <option value="5">5"</option>
              <option value="6">6"</option>
              <option value="7">7"</option>
              <option value="8">8"</option>
              <option value="9">9"</option>
              <option value="10">10"</option>
              <option value="11">11"</option>
              </select>
          </td>
          </tr>
          <tr>
            <td>Cms :</td>
            <td><input type="text" name="cen" id="cen" size="4" onkeyup="con(cen)"></td>
           </tr>
          <tr>
              <td>Weight:</td>
              <td><input type="text" name="weight" id="weight" maxlength="3" size="3" onkeypress="return cknum(event,weight)">
              <font>Kg</font></td>
          </tr>
          <tr>
              <td>Activeness:</td>
              <td>
              <select style="width:100px;" name="loa" id="loa">
              <option value="1">Sedentary</option>
              <option value="2">Light Active</option>
              <option value="3">Moderately Active</option>
              <option value="4">Very Active</option>
              <option value="5">Extra Active</option>
              </select>
              </td>
          </tr>
          <tr>
             <td colspan="2" align="center"><input type="button" value="Calculate The Calorie" onclick="cc()"></td>
          </tr>
      </tbody></table>
      </form>
      <br>
      <table align="center" border="0" class="frms noborders">
      <tbody><tr><td align="right" style="color:white; font-size:13px; font-weight:bold;">&nbsp;&nbsp;&nbsp;Calorie</td><td align="left" style="color: white; font-size:13px; font-weight:bold;">Result</td></tr>
      <tr><td align="right" style="color:white; font-size:13px;">Calorie Needed:</td><td><input type="text" id="rc" style="font-size:13px;" size="15" readonly=""></td></tr></tbody></table>
      <!-- <div style="color: #3D366F; font-size:13px;">You Must Intake  The Following Daily</div>
      <table class="frms noborders">
      <tbody><tr><td align="right" style="color: #3D366F; font-size:13px;">Fat:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rf" style="font-size:13px;" size="15" readonly=""></td></tr>
      <tr><td align="right" style="color: #3D366F; font-size:13px;">Protein:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rp" style="font-size:13px;" size="15" readonly=""></td></tr>
      <tr><td align="right" style="color: #3D366F; font-size:13px;">Carbohydrate:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rh" style="font-size:13px;" size="15" readonly=""></td></tr>
      <tr><td align="right" style="color: #3D366F; font-size:13px;">Alcohol:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="ra" style="font-size:13px;" size="15" readonly=""></td></tr> -->
      </tbody></table>
      <p style="text-align: center; color: #df6700;">Add 500 calories more for weight gain</p>
      <p style="text-align: center; color: #df6700;">Remove 500 calories for weight loss</p>
        </td></tr></tbody></table></div>

      </div>

      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-link  wd" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><img src="{{ asset('images/loss.png') }}" height="40" width="40" alt="">  Weight Gain</a>
          <a class="nav-link wd" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><img src="{{ asset('images/weight.png') }}" height="40" width="40" alt="">  Weight Loss</a>

        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 sp">
                        <div class="card mx-auto" style="width: 25rem;">
                            <div class="card-body">
                              <h5 class="card-title">Diet Plan 1</h5>
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Time</th>
                                    <th scope="col">Meals</th>

                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">6:00 am</th>
                                    <td>Protien shake with oats(pre-workout)</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">10:00-11:00 am</th>
                                    <td>5 Chappthi with dal currry with 4 full eggs</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">1:00-2:00 pm</th>
                                    <td>One plate rice with veggies and quarter chicken</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3:00-4:00 pm</th>
                                    <td>Nuts and dates</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">7:00-8:00 pm</th>
                                    <td>Dinner</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">10.30</th>
                                    <td>Protien shake</td>
                                    <td></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 sp">
                      <div class="card mx-auto" style="width: 25rem;">
                          <div class="card-body">
                            <h5 class="card-title">Diet Plan 2</h5>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Time</th>
                                  <th scope="col">Meals</th>

                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">6:00 am</th>
                                  <td>Protien shake with oats(pre-workout)</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <th scope="row">10:00-11:00 am</th>
                                  <td>5 Chappthi with dal currry with 4 full eggs</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <th scope="row">1:00-2:00 pm</th>
                                  <td>One plate rice with veggies and quarter chicken</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <th scope="row">3:00-4:00 pm</th>
                                  <td>Nuts and dates</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <th scope="row">7:00-8:00 pm</th>
                                  <td>Dinner</td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <th scope="row">10.30</th>
                                  <td>Protien shake</td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 sp">
                    <div class="card mx-auto" style="width: 25rem;">
                        <div class="card-body">
                          <h5 class="card-title">Diet Plan 3</h5>
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Time</th>
                                <th scope="col">Meals</th>

                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">6:00 am</th>
                                <td>Protien shake with oats(pre-workout)</td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">10:00-11:00 am</th>
                                <td>5 Chappthi with dal currry with 4 full eggs</td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">1:00-2:00 pm</th>
                                <td>One plate rice with veggies and quarter chicken</td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">3:00-4:00 pm</th>
                                <td>Nuts and dates</td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">7:00-8:00 pm</th>
                                <td>Dinner</td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">10.30</th>
                                <td>Protien shake</td>
                                <td></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                </div>
                </div>
                  <hr style="height: 3px;background-color: darkgray;">
        </div>
        <div class="tab-pane " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6 sp">
                <div class="card mx-auto" style="width: 25rem;">
                    <div class="card-body">
                      <h5 class="card-title">Diet Plan 4</h5>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Time</th>
                            <th scope="col">Meals</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">6:00 am</th>
                            <td>Protien shake with oats(pre-workout)</td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">10:00-11:00 am</th>
                            <td>5 Chappthi with dal currry with 4 full eggs</td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">1:00-2:00 pm</th>
                            <td>One plate rice with veggies and quarter chicken</td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">3:00-4:00 pm</th>
                            <td>Nuts and dates</td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">7:00-8:00 pm</th>
                            <td>Dinner</td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">10.30</th>
                            <td>Protien shake</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 sp">
              <div class="card mx-auto" style="width: 25rem;">
                  <div class="card-body">
                    <h5 class="card-title">Diet Plan 5</h5>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Time</th>
                          <th scope="col">Meals</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">6:00 am</th>
                          <td>Protien shake with oats(pre-workout)</td>
                          <td></td>
                        </tr>
                        <tr>
                          <th scope="row">10:00-11:00 am</th>
                          <td>5 Chappthi with dal currry with 4 full eggs</td>
                          <td></td>
                        </tr>
                        <tr>
                          <th scope="row">1:00-2:00 pm</th>
                          <td>One plate rice with veggies and quarter chicken</td>
                          <td></td>
                        </tr>
                        <tr>
                          <th scope="row">3:00-4:00 pm</th>
                          <td>Nuts and dates</td>
                          <td></td>
                        </tr>
                        <tr>
                          <th scope="row">7:00-8:00 pm</th>
                          <td>Dinner</td>
                          <td></td>
                        </tr>
                        <tr>
                          <th scope="row">10.30</th>
                          <td>Protien shake</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 sp">
            <div class="card mx-auto" style="width: 25rem;">
                <div class="card-body">
                  <h5 class="card-title">Diet Plan 6</h5>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Time</th>
                        <th scope="col">Meals</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">6:00 am</th>
                        <td>Protien shake with oats(pre-workout)</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">10:00-11:00 am</th>
                        <td>5 Chappthi with dal currry with 4 full eggs</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">1:00-2:00 pm</th>
                        <td>One plate rice with veggies and quarter chicken</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">3:00-4:00 pm</th>
                        <td>Nuts and dates</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">7:00-8:00 pm</th>
                        <td>Dinner</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">10.30</th>
                        <td>Protien shake</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
            </div>
            <hr style="height: 3px;background-color: darkgray;">

        </div>

      </div>

      <section id="nutii">
        <h1 class="heading">Nutritions</h1>
        <br>
<div class="d-flex justify-content-center">

    <form class="form-inline" action="{{ route('diet') }}" method="GET">
        <input name="search" value="{{ request()->query('search') }}" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
</div>

      </section>

        <div class="container contain">
          <div class="row rr">
             @forelse ($diet as $item)


            <div class="col-lg-3 col-sm-6 col-12 s">
              <div class="card" style="width: 15rem;">
                <img src="{{ asset('images/uploads/'.$item->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->title }}</h5>
                  <p class="card-text">{{ $item->description }}</p>
                </div>
              </div>
            </div>
            @empty
            <p style="text-align: center; font-size: 30px; color:white;">Nothing found ! </p>
            @endforelse

          </div>
        </div>

      </section>




</body>

@endsection
