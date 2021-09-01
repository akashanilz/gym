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
        <div class="regno" >Reg no:  GYM{{$user->user->id}} </div>
            <div class="studentImage">

            </div>
            <br>
            <br>
            <br>


            <p>Payment Status:Paid</p>

<br>

            <p>Payment id:{{$user->payment_id}}</p>
<br>
            <p>Paid on:{{$user->date}}</p>
            <table>

             </tr>



                <tr>
                    <td width="6%">1.</td>
                    <td width="34%">Name</td>
                    <td>:</td>
                    <td>{{$user->user->name}}</td>

                </tr>




                <tr>
                    <td width="6%">2.</td>
                    <td width="34%">Package Amount</td>
                    <td>:</td>
                    <td>{{$user->user->amount}}</td>
                </tr>
                <tr>
                    <td width="6%">3.</td>
                    <td width="34%">Email id</td>
                    <td>:</td>
                    <td>{{$user->user->email}}</td>
                </tr>
                <tr>
                    <td width="6%">4.</td>
                    <td width="34%">Mobile Number</td>
                    <td>:</td>
                    <td>{{$user->user->mobile}}</td>
                </tr>

                <tr>
                    <td width="6%">5.</td>
                    <td width="34%">Month Paid</td>
                    <td>:</td>
                    <td>{{$user->month_and_year}}</td>
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
            <p class="decpps">GYM fees successfuly paid </p>

        </div>

    </body>

    </html>

