<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Home\StoreRequest;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Shetabit\Multipay\Invoice;
// use Shetabit\Multipay\Payment as MultipayPayment;
use Shetabit\Payment\Facade\Payment as MultipayPayment;

class CheckoutsController extends Controller
{
    public function checkoutShow()
    {
        $products = !is_null(Cookie::get('basket')) ? json_decode(Cookie::get('basket'), true) : [] ;

        $productsPrice = array_sum(array_column($products , 'price'));

        return view('home.checkouts.checkout' , compact('products','productsPrice'));
    }

#insert into orders table
    public function addorder(StoreRequest $request)
    {
        $validatedData = $request->validated();
        

        $user = User::firstOrCreate(['email' => $validatedData['email']
    
        ],[
            'name' => $validatedData['name'],
            
            'mobile' => $validatedData['mobile'],
        ]);


        try {

            $orderItems = json_decode(Cookie::get('basket'), true);

            $products = Product::findMany(array_keys($orderItems));

            $productsPrice = $products->sum('price');
            $ref_id = rand(1111,9999);
            $createdOrder = Order::create([
                'amount' => $productsPrice,
                'ref_id' => $ref_id,
                'status' => 'unpaid',
                'user_id' => $user->id,
            ]);

            $orderItemsForCreateOrder =  $products->map(function($product){
                $current_product = $product->only(['price','id']);

                $current_product['product_id'] = $current_product['id'];

                unset($current_product['id']);

                return $current_product;
            });

            $createdOrder->orderItems()->createMany($orderItemsForCreateOrder->toArray());


            #payment method will be here

            $ref_id = rand(1111,9999);
            $res_id = rand(1111,9999);

            $createdPayment = Payment::create([
                'gateway' => 'zarinpal',
                'ref_id' => $ref_id,
                'res_id' => $res_id,
                'status' => 'unpaid',
                'order_id' => $createdOrder->id,
            ]);

            #etesal b drgahe banki

          
           
            


        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
        
    }

   

}
