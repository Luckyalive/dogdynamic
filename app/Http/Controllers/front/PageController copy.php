<?php

namespace App\Http\Controllers\front;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Slider;
use App\Models\admin\Product;
use App\Models\admin\Category;
use App\Models\admin\Blog;
use App\Models\admin\ProductInquiry;
use App\Models\admin\ProductQuantity;
use App\Mail\ProductInquiryMail;



class PageController extends Controller
{
    public function index(){
        $slider = Slider::where('status', 1)->orderBy('id', 'asc')->get(); 
        return view('front.pages.index', compact('slider'));

    }
    public function about(){
        $slider = Slider::all(); 
        return view('front.pages.about-us', compact('slider'));
    }

    public function contact(){
        $slider = Slider::all(); 
        return view('front.pages.contact-us', compact('slider'));
    }
    
    
    public function products(){
        
        Session::forget('cartData');
        $categories = Category::where('status', 1)                
                    ->whereNotIn('slug', [])
                    ->get(); 
                    
        $products = Product::where('status', 1)->get(); 
        return view('front.pages.our-products', compact('products', 'categories'));
    }

    
    public function services(){
        return view('front.pages.services.our-services');
    }
    
    public function farmingService(){
        return view('front.pages.services.farming-service');
    }
    
    public function wasteManagement(){
        return view('front.pages.services.waste-management');
    }
    public function dripIrrigation(){
        return view('front.pages.services.drip-irrigation');
    }
    
    public function solarSystem(){
        return view('front.pages.services.solar-system');
    }
    

    
    
    
    public function blog(){
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->paginate(12);

        return view('front.pages.blog', compact('blogs'));
    }

    public function blogDetail($slug){
        
        $blog = Blog::where(['slug' => $slug, 'status' => 1])->first();
        
        if(!isset($blog)){
            return redirect(route('blog'));
        }
            return view('front.pages.blog-detail', compact('blog'));

    

    }

    public function privacyPolicy(){
        return view('front.pages.privacy-policy');
    }
    
    public function termAndCondition(){
        return view('front.pages.term-and-condition');
    }
    
    public function qrCode(){
        return view('front.pages.qr-code');
    }

    public function storeProductInquiry(Request $request){
        
        // dd($request->all());
        $cartData = @request()->session()->get('cartData');

        $customer = $request->all();

        //  $isMailSent = Mail::to('mail.welcome', compact('customer', 'cartData'));


            // $productInquiry = productInquiry::create([
            //         // Add fields from the request as needed
            // ]);
            
           
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
            ]
        );
    

            
        $product = productInquiry::create([
            'name' => $request->name, 
            'phone' => $request->phone, 
            'email' => $request->email, 
            'address' => $request->address,
            'service' => $request->service, 
            'status' => 'Order Placed', 
            'page_url' => $request->page_url, 
            'message' => $request->message,
        ]);

        if($product){
            // return ($product);
            
            foreach ($cartData as $product_id => $quantity) {
                productQuantity::create([            
                    'product_inquiry_id' => $product->id, 
                    'product_id' => $product_id,
                    'quantity' => $quantity,
                ]);
            }
            
        $isMailSent = Mail::to(env('MAIL_To'))->send(new ProductInquiryMail($customer, $cartData));
            
        return redirect()->route('thankYou')->with('success', 'Thank you..');
        }
        return redirect()->back()->with('fail', 'Something went wrong, please try again later.');

    }
    

    public function storeCartData(Request $request){
        // dd($request->all());
        
    //     $request->validate([
    //         'selected_product' => 'required',
    //     ],
    //     [
    //         'selected_product.required' => 'Please Select the Product.',
    //     ]
    // );

    // dd($request->quantity[49]);
    $cartData = [];

    foreach ($request->quantity as $productId => $quantity) {
        dd('productId',$productId, $quantity);

        // Check if the product has been checked
        if (isset($productId)) {
            // dd($productId);
            if($productId !== 0){
                $quantity = $productId;
            }
            else{
               $cartData[$productId] = $quantity;
            }
        }
    }
    // dd($cartData, $request->selected_product);

  
        
        if(!isset($request->selected_product)){
            request()->session()->put('cartData', null);
        }
        request()->session()->put('cartData', $cartData);
        $value = request()->session()->get('cartData');
        // dd($value);
        return redirect()->route('productInquiry')->with('success', 'Thank you for inquiry.');
    }

    public function productInquiry(){
        
        if(request()->session()->get('cartData')){
            $cartData = @request()->session()->get('cartData');
        
            $values = array_values($cartData);
            $productIds = implode(', ', $values);
            
            return view('front.pages.product-cart-data', compact('cartData', 'productIds'));
        }
        else{        
            return redirect()->route('products');
        }
    }

    public function thankYou(){

 
        return view('front.pages.thank-you');
        
    }

    public function testMail(){
        
        return view('mail.welcome');
    }
    
}
