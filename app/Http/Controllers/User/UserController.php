<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Cart;
use App\Models\Month;
use App\Models\Oder;
use App\Models\Register;
use App\Models\User;
use Illuminate\Support\Str;
use PDF;
use Razorpay\Api\Api;
use Mail;
use App\Models\Product;
use App\Models\Category;
use App\Models\Diet;
use App\Models\Form;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paymentt(){
        return view('payment');
    }
    public function index()
    {
        return view('home');
    }
    public function product()

    {
        return view('merchant.addproduct');
    }
    public function insertproduct(Request $request)
    {
       $data= $request->all();
       $image= $request->file('image');
       $image_name = uniqid() . '.' . $image->extension();
       $image->move('./uploads/productimages',$image_name);
       $uuid = Str::uuid()->toString();
       $product = new Product;
       $product->name = $data['name'];
     //  $product->slug = SlugService:: createSlug(Product::class, 'slug',$request->name);
       $product->image = $image_name;
       $product->uuid = $uuid;
       $product->category_id = $data['category'];
       $product->brand_id = $data['brand'];
      // $product->material_id = $data['material'];
       $product->price = $data['price'];
       $product->merchant_id= $data['id'];
       $product->quantity = $data['quantity'];
       $product->discription = $data['disc'];
       $product->status = $data['status'];
        $product->save();
        return redirect(route('user.merdash'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userdash()
    {
        return redirect(route('home'));
    }
    public function merchant()
    {
        return view('merchant.dash');
    }
public function formfill(Request $request){
     $form=new Form();
     $form->name=$request->name;
     $form->message= $request->message;
     $form->email= $request->email;
     $form->mobile= $request->mobile;
     $form->save();
     Alert::success('Success', 'Form submitted successfully');
     return redirect(route('home'));
}
    public function shop(Request $request)
    {
        $sort=$request->sort;
        $group = Product::all();
         $search= $request->query('search');
         if($search){
             $group=Product::where('name','LIKE',"%{$search}%")->get();

             return view('index-shop')->with(compact('group'));
         }

        $group = Product::when(($sort=="price_asc"),function($product){

            $product->orderBy('price','asc');
          })->when(($sort=="price_desc"),function($product){
              $product->orderBy('price','desc');
          })->when(($sort=="new"),function($product){
              $product->orderBy('created_at','desc');
          })->when(($sort=="old"),function($product){
            $product->orderBy('created_at','asc');
        }) ->get();
         // dd($group);*/
        return view('index-shop')->with(compact('group'));
    }

    public function shop1(Request $request)
    {


        $group = Product::all();
        $urll= route('home');
        $path="/uploads/productimages/";
        $url=$urll.$path;
      //  dd($url);
        $tt=[];
        foreach($group as $cors){
           array_push($tt,['name'=>$cors->name,
           'image'=>$url.$cors->image,
            'id'=>$cors->id,
            'price'=>$cors->price,
          ]);
        }

   return response()->json($tt);
    }
    public function cat(Request $request ,$id)
    {
        $sort=$request->sort;
        $cat= Category::find($id);
        $group = Product::where('category_id',$id)->when(($sort=="price_asc"),function($product){

            $product->orderBy('price','asc');
          })->when(($sort=="price_desc"),function($product){
              $product->orderBy('price','desc');
          })->when(($sort=="new"),function($product){
              $product->orderBy('created_at','desc');
          })->when(($sort=="old"),function($product){
            $product->orderBy('created_at','asc');
        }) ->get();
         // dd($group);
        return view('category')->with(compact('group'));
    }

    public function addattend()
    {
        return view('trainer.addattendence');
    }
    public function addattendd(Request $request)
    {

        $rules=[

            'date' => 'required|date|unique:attendances,date',

        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {

            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        else{
        $st=$request->all();
        $ss=$request->id;
        $att=new Attendance;
        $att->user_id=$ss;
        $att->date=$st['date'];
        $att->save();
        return'success';

        }
    }
    public function trainer()
    {
        return view('trainer.dash');
    }
    public function viewat()
    {
        return view('trainer.monthselectattd');
    }
    public function viewatt(Request $request)
    {
        $ff=$request->all();
        $date=$ff['date'];
        $reg = Attendance::where('date','=' ,$date)->first();
       // dd($reg);
        return view('trainer.viewattend',compact('reg'));
    }
    public function cart($id)

    {
        $carts = User::find($id);


         return view('carts',['carts'=>$carts]);
        //return view('cart');
    }

    public function checkout($id)

    {
        $carts = User::find($id);
       // $ff=$carts->cart;
      //  dd($ff);

         return view('checkout',['carts'=>$carts]);
        //return view('cart');
    }
    public function pending()
    {
        $dd=Oder::all();
       /* $ss=[];
        foreach($dd as $cc){
        foreach($cc->product as $prd){
            if($prd['merchant_id']==auth()->user()->id);{
                $ss=$prd;
            }
        }
    }
     // dd($ss);*/
        return view('merchant.pendingoder');
    }
    public function checkouter(Request $request)

    {
       $rr=$request->all();
       $checkout = User::find($request->id);

       //$ff= $checkout->cart;
       $ss=[];
       foreach($checkout->cart as $kk){
          array_push($ss,$kk->product);
       }
       $oder= new Oder;
       $oder->product = $ss;
       $oder->user_id = $rr['user'];
       $oder->total = $rr['total'];
       $oder->address = $rr['address'];
       $oder->mobile = $rr['mobile'];
       $oder->save();
      $oders=$oder->id;
      $data=Oder::find($oders);
      //dd($data);
       return view('razorpay',compact('data'));

}

    public function deletecart(Request $request){
        $data=Cart::find($request->id);
        $data->delete();
        return redirect()->back();
    }

    public function addcart(Request $request)


    {
        $ss= $request->all();
        $cart=new Cart;
        $cart->product_id=$ss['product_id'];
        $cart->user_id=$ss['user_id'];
        $cart->save();
        return redirect(route('shoping'));
        //return view('cart');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function confirmodd(Request $request)

    {

        $oder=$request->id;
        $data=Oder::find($oder);
        return view('merchant.confirmoder',compact('data'));
    }
    public function about(){
        return view ('about');
    }
    public function contact(){
        return view ('contact');
    }
    public function diet(Request $request){
        $search=$request->query('search');
        if($search){
            $diet=Diet::where('title','LIKE',"%{$search}%")->get();

        }
        else{
            $diet=Diet::all();
        }

        return view('client.diet',compact('diet'));
    }
public function monthh(){
    return view('trainer.month');
}
    public function delivered(Request $request)

    {

        $oder=$request->id;
        $data=Oder::find($oder);

        return view('merchant.deliveredoder',compact('data'));
    }
    public function confirmoddd(Request $request)

    {

        $oder=$request->id;
        $data=Oder::find($oder);
        $req=$request->all();

        $val=$req['val'];
        if($val==0){
            $data->oder_confirm=1;
            $data->save();
            return redirect()->back();
        }
        else if($val==1){
            $data->oder_packed=1;
            $data->save();
            return redirect()->back();
        }
        else if($val==2){
            $data->oder_shipped=1;
            $data->save();
            return redirect()->back();
        }
        else if($val==3){
            $data->oder_out_for_delivery=1;
            $data->save();
            return redirect()->back();
        }
        else if($val==4){
            $data->oder_delivered=1;
            $data->save();
            return redirect()->back();
        }


        return view('merchant.confirmoder',compact('data'));
    }
    public function showprd(){
        return view('merchant.products');
    }
    public function store(Request $request)
    {

        $data = $request->all();
        $rules = [
            'address'=>'required',
            'age'=>'required',
            'weight'=>'required',
            'height'=>'required',

        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {

            return redirect()->back()->withInput($request->all())->withErrors($validator);

        }
       // dd($data);
       $ids = $data['id'];
       $reg = User::where('uuid','=' ,$ids)->first();
       //dd($reg);

        $reg->name = $data['name'];
        $reg->email = $data['email'];
        $reg->mobile = $data['mobile'];
        $reg->address = $data['address'];
        $reg->weight = $data['weight'];
        $reg->amount = $data['amount'];
        $reg->health = $data['health'];
        $reg->age = $data['age'];
        $reg->register_check = 1;
        $reg->height = $data['height'];

        $reg->save();
       // return redirect(route('home'));

        $request->session()->put('user',$reg->id);



         if(session()->has('user')){
            $id=session()->get('user');

            $user=User::find($id);

       /* $data =[ 'user'=>$user];
           $pdf = PDF::loadView('regslip' ,$data,['title'=>'Another Title','margin_top'=>0 ,
            'margin_left'=>0 ,'margin_right'=>0,'margin_bottom'=>0
            ]);

           /* Mail::send('user.registerslip', $data, function($message)use($user, $pdf) {
                //$message->from('a103dd500a-ae368e@inbox.mailtrap.io','bdjs');
                $message->to($user->email)->attachData($pdf->output(), "Register.pdf");
            });*/

    return view('paysuccess',compact('user'));
        //return redirect(route('home'));
    }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pdf(Request $request)
    {
         $user=User::find($request->id);

        $data =[ 'user'=>$user];
            $pdf = PDF::loadView('regslip' ,$data,['title'=>'Another Title','margin_top'=>0 ,
            'margin_left'=>0 ,'margin_right'=>0,'margin_bottom'=>0
            ]);
            return $pdf->download('Registration.pdf');

    }
    public function monthpdf(Request $request)
    {
         $user=Month::find($request->id);

        $data =[ 'user'=>$user];
            $pdf = PDF::loadView('client.monthslip' ,$data,['title'=>'Another Title','margin_top'=>0 ,
            'margin_left'=>0 ,'margin_right'=>0,'margin_bottom'=>0
            ]);
            return $pdf->download('Invoice.pdf');

    }

     public function payment(Request $request){

        $data = $request->all();

        $users = $data['user_id'];

        $user = User::where('id','=',$users)->first();





        $amount = $user->amount;
        $api = new Api('rzp_test_IHMVXVPgvdVv7Q', 'AUkkrBiiBZyyOEv89tCSHu4g');


        $order  = $api->order->create(array('receipt' => '123', 'amount' => $amount*100, 'currency' => 'INR')); // Creates order
        $orderId = $order['id']; // Get the created Order ID
        $user->payment_done = true;
        $user->payment_id = $orderId;
        $user->razorpay_id = $data['razorpay_payment_id'];
        $user->save();


    $datass =[ 'user'=>$user];
    /*$pdf = PDF::loadView('user.invoice' ,$datass,['title'=>'Another Title','margin_top'=>0 ,
    'margin_left'=>0 ,'margin_right'=>0,'margin_bottom'=>0
    ]);

    /*Mail::send('user.invoice', $datass, function($message)use($user, $pdf) {
        //$message->from('a103dd500a-ae368e@inbox.mailtrap.io','bdjs');
        $message->to($user->email)->attachData($pdf->output(), "Invoice.pdf");
    });*/


        return view('client.paydone', compact('user'));
    }

public function paymentmonth(Request $request){

    $data = $request->all();

    $users = $data['user_id'];
    $date = $data['date'];

    $user = User::where('id','=',$users)->first();
    $month = new Month;

    $amount = $user->amount;
    $api = new Api('rzp_test_IHMVXVPgvdVv7Q', 'AUkkrBiiBZyyOEv89tCSHu4g');


    $order  = $api->order->create(array('receipt' => '123', 'amount' => $amount*100, 'currency' => 'INR')); // Creates order
    $orderId = $order['id']; // Get the created Order ID
   // $user->payment_done = true;
    $month->payment_id = $orderId;
    $month->razorpay_id = $data['razorpay_payment_id'];
    $month->user_id = $users;
    $month->month_and_year = $date;
    $month->save();
    $request->session()->put('user',$month->id);
    if(session()->has('user')){
        $id=session()->get('user');

        $user=Month::find($id);





    return view('client.monthsuccess',compact('user'));


//$datass =[ 'user'=>$user];
/*$pdf = PDF::loadView('user.invoice' ,$datass,['title'=>'Another Title','margin_top'=>0 ,
'margin_left'=>0 ,'margin_right'=>0,'margin_bottom'=>0
]);

/*Mail::send('user.invoice', $datass, function($message)use($user, $pdf) {
    //$message->from('a103dd500a-ae368e@inbox.mailtrap.io','bdjs');
    $message->to($user->email)->attachData($pdf->output(), "Invoice.pdf");
});*/


  //  return view('client.paydone', compact('user'));
//}
}
}

public function razorpay(Request $request){

    $all=$request->all();
    $oder_id=$all['oder_id'];
    $new=Oder::find($oder_id);
    $amount=$new->total;
   // $new= new Oder;
    $api = new Api('rzp_test_IHMVXVPgvdVv7Q', 'AUkkrBiiBZyyOEv89tCSHu4g');
    $order  = $api->order->create(array('receipt' => '123', 'amount' => $amount*100, 'currency' => 'INR')); // Creates order
    $orderId = $order['id']; // Get the created Order ID
    $new->razorpay_id= $all['razorpay_payment_id'];
    $new->payment_id= $orderId;
    $new->status=1;
    $new->save();


    $cart=Cart::where('user_id','=',$new->user_id)->get();
    foreach($cart as $del){
        $del->delete();
    }


    Alert::success('Success', 'Your order was successfully placed');
    return redirect(route('shoping'));

}

public function invoice(Request $request )
{
    $user=User::find($request->id);

    $data =[ 'user'=>$user];
        $pdf = PDF::loadView('regslip' ,$data,['title'=>'Another Title','margin_top'=>0 ,
        'margin_left'=>0 ,'margin_right'=>0,'margin_bottom'=>0
        ]);
        return $pdf->download('Invoice.pdf');


}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function myoder(Request $request)

    {
        $req=$request->id;
        $users=Oder::find($req);
        $user = Oder::where('user_id','=',$req)->get();
         //$user= $users->oder;
        //$oders=$user->oder;
       //dd($user);
        return view('trackoder',compact('user'));
    }
    public function month()
    {
        return view('client.paymonth');
    }
    public function months(Request $request)
    {
        $data = $request->all();
        $date = $data['month'];
        $id = $data['id'];
        $user=User::find($id);

        //dd($user);
      //  dd($date);
        return view('client.paymonthfinal')
        ->with(compact('user'))
        ->with(compact('date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
