<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\Discounts;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Checkout\AfterCheckout;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = products::all();

        return view('welcome', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(products $products)
    {
        return view ('checkout', [
            'product' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, products $products)
    {
        // mapping request data
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['product_id'] = $products->id;

        // update user data
        $user = Auth::user();
        $user->email = $data['email'];
        $user->name = $data['name'];
        $user->phone_number = $data['phone'];
        $user->address = $data['address'];
        $user->save();

        // // create discount
        // if ($request->discount) {
        //     $discount = Discounts::whereCode($request->discount)->first();
        //     $data['discount_id'] = $discount->id;
        //     $data['discount_percentage'] = $discount->percentage;
        // }

         // create checkout
        $checkout = Checkout::create($data);
        // return $checkout;
    //     $this->getSnapRedirect($checkout);

    //    // Sending email
    //    Mail::to(Auth::user()->email)->send(new AfterCheckout($checkout));

       return redirect(route('checkout.success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data =  products::where('slug', 'like', "%".$slug."%")->firstOrfail();

        // payment summary
        $price = DB::table('products')
            ->select('price')
            ->where('slug', 'like', "%".$slug."%")
            ->first('price');

       $tax = $price->price * 10 / 100;

        $total = $price->price + $tax;

        // dd($total);
        return view('checkout', ['product' => $data], ['price' => $total]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }

    public function success()
    {
        return view('success_checkout');
    }
}
