<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Diet;
use App\Models\Material;
use App\Models\Merchant;
use App\Models\Oder;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplement;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertreq()
    {
        return view('trackoder');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function updating(Request $request)
    {
        $prd=$request->all();
         $data= Product::find($request->id);
         $image = $request->file('image');
         $name = uniqid() . '.' . $image->extension();
         // dd($name);
          $image->move('./uploads/productimages', $name);
          $data->name=$prd['name'];
          $data->image=$name;
          $data->quantity=$prd['quantity'];
         $data->supplement_id=$prd['supplement'];
         $data->brand_id=$prd['brand'];
         $data->price=$prd['price'];
         $data->merchant_id=$prd['merchant'];
         $data->brand_id=$prd['brand'];
         $data->discription=$prd['discription'];

         $data->save();
         return redirect(route('insertprd'));
    }
    public function deleteitem(Request $request){
        $data =Product::find($request->id);
      //  dd($data);
        $data->delete();
        return redirect()->back();
     }
    public function itemall($id)
    {
        $suppliment= Supplement::find($id);
     //   dd($suppliment);
        return view('items',compact('suppliment'));
    }
    public function updateitem($id)
    {
        $update= Product::find($id);
     //   dd($suppliment);
        return view('update',compact('update'));
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
     //  $product->merchant_id = $data['merchant'];
       $product->quantity = $data['quantity'];
       $product->discription = $data['disc'];
       $product->status = $data['status'];
        $product->save();
        return redirect(route('admin.dash'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function displayall(Request $request)
    {
        $request= Product::all();
      //  dd($request);
        return view('displayall', compact('request'));

    }
    public function supplement(Request $request)
    {
        $request= Supplement::all();
       // $data=$request->product;
       // dd($request);
        return view('suppliment')
         ->with(compact('request'));

    }

    public function supplementary(Request $request)
    {
       $data = $request->all();
       $uuid = Str::uuid()->toString();
       $suppli = new Supplement;
       $suppli->name = $data['name'];
       $suppli->uuid = $uuid;
       $suppli->save();
       return redirect(route('insertprd'));
    }
    public function brandin(Request $request)
    {
       $data = $request->all();
       $uuid = Str::uuid()->toString();
       $brand = new Brand;
       $brand->name = $data['name'];
       $brand->uuid = $uuid;
       $brand->save();
       return redirect(route('insertprd'));
    }
    public function materialin(Request $request)
    {
       $data = $request->all();
       $uuid = Str::uuid()->toString();
       $material = new Material;
       $material->name = $data['name'];
       $material->uuid = $uuid;
       $material->save();
       return redirect(route('insertprd'));
    }
    public function merchantin(Request $request)
    {
       $data = $request->all();
       $uuid = Str::uuid()->toString();
       $merchant = new Merchant;
       $merchant->name = $data['name'];
       $merchant->uuid = $uuid;
       $merchant->save();
       return redirect(route('insertprd'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dash()
    {
        return view('Admin.dash');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reg()
    {
        return view('Admin.registered');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mem()
    {
        return view('Admin.members');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function month()
    {
        return view('Admin.monthlyfees');
    }
public function insertdiet(Request $request){
    $diet=new Diet();
    $diet->title=$request->title;
    $diet->description=$request->desc;
    if($request->hasFile('image')){
        $image= $request->file('image');
        $im_file_name1 = uniqid() . '.' . $image->extension();

        $image->move('./images/uploads',$im_file_name1);
        $diet->image=$im_file_name1;
       }
       $diet->save();
       return redirect(route('admin.dash'));

}
public function message(){
    return view('Admin.message');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function product()
    {
        return view('Admin.addproduct');
    }
    public function pending()
    {
        return view('Admin.pendingoder');
    }
    public function addmer()
    {
        return view('Admin.addmerchant');
    }
    public function addtrain()
    {
        return view('Admin.addtrainer');
    }
    public function confirmodd(Request $request)

    {

        $oder=$request->id;
        $data=Oder::find($oder);
        return view('Admin.confirmoder',compact('data'));
    }
    public function delivered(Request $request)

    {

        $oder=$request->id;
        $data=Oder::find($oder);

        return view('Admin.deliveredoder',compact('data'));
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


        return view('Admin.confirmoder',compact('data'));
    }
    public function addmerr(Request $request)
    {
        $rules=[

            'email' => 'required|email|unique:users,email',
            'password'=>'required',
            'cpassword'=>['same:password'],
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {

            return redirect()->back()->withInput($request->all())->withErrors($validator);



        }
        else{


        $data = $request->all();
      $password=$request->input('password');
      $pass= Hash::make($password);




        $userreg = new User;
       $uuid = Str::uuid()->toString();

        $userreg->email = $data['email'];
        $userreg->password = $pass;
        $userreg->company = $data['company'];
        $userreg->company_details = $data['company_details'];
        $userreg->group = $data['group'];
        $userreg->uuid = $uuid;

        $userreg->save();
        return 'success';


        }



    }
  public function crmprd(){
      return view('Admin.prdconfirm');
  }
  public function crmprdd($id){
    $dd=product::find($id);
    //dd($dd);
    $dd->admin_confirm=1;
    $dd->update();
    return redirect(route('admin.prdconfirm'));
}

    public function addtrainn(Request $request)
    {

        $rules=[

            'email' => 'required|email|unique:users,email',
            'password'=>'required',
            'cpassword'=>['same:password'],
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {

            return redirect()->back()->withInput($request->all())->withErrors($validator);



        }
        else{


        $data = $request->all();
      $password=$request->input('password');
      $pass= Hash::make($password);




        $userreg = new User;
       $uuid = Str::uuid()->toString();

        $userreg->email = $data['email'];
        $userreg->password = $pass;
        $userreg->name = $data['name'];
        $userreg->weight = $data['weight'];
        $userreg->height = $data['height'];
        $userreg->age = $data['age'];
        $userreg->group = $data['group'];
        $userreg->uuid = $uuid;

        $userreg->save();
        return 'success';


        }

    }

}
