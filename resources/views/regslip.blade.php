<!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="style3.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>

        <br>
        <br>
        <div class="titletext">GYM Registration </div>
        <div class="titletextw" >Registration slip </div>
        <div class="form-content">
        <div class="regno" >Reg no:  GYM{{$user->id}} </div>
            <div class="studentImage">

            </div>
            <br>
            <br>
            <br>
            @if ($user->payment_done == 0)
            <p>Payment Status: Not Paid</p>
            @else
            <p>Payment Status:Paid</p>
            @endif

            @if ($user->payment_id )
            <p>Payment id:{{$user->payment_id}}</p>
            @endif

            <table>

             </tr>



                <tr>
                    <td width="6%">1.</td>
                    <td width="34%">Name</td>
                    <td>:</td>
                    <td>{{$user->name}}</td>

                </tr>




                <tr>
                    <td width="6%">2.</td>
                    <td width="34%">Package Amount</td>
                    <td>:</td>
                    <td>{{$user->amount}}</td>
                </tr>
                <tr>
                    <td width="6%">3.</td>
                    <td width="34%">Email id</td>
                    <td>:</td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <td width="6%">4.</td>
                    <td width="34%">Mobile Number</td>
                    <td>:</td>
                    <td>{{$user->mobile}}</td>
                </tr>



            </table>




        </div>

            <hr>

             <div>

                <br>
                <br>


            <hr>

            <br>
            <br>


      Date of issue:{{$user->date}}
      <br>
      <br>

      <br>
       <br>
      <br>

      <br>
             </div>
            <p class="decpps">GYM registration successfuly completed </p>

        </div>

    </body>

    </html>

