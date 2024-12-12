<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Service;
use App\Models\admin\Category;
use App\Models\admin\ServiceImage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $perPage = 20; // Number of items per page
        $currentPage = $request->query('page', 1); // Get current page from query string
        $totalItems = Service::count(); // Total number of items
        $totalPages = ceil($totalItems / $perPage); // Calculate total number of pages
        // $items = Service::skip(($currentPage - 1) * $perPage)->take($perPage)->get();
        // $items = Service::get();

        $items = Service::skip(($currentPage - 1) * $perPage)->take($perPage)->orderBy('id', 'desc')->get();

        $route = request()->route();
        $routeName = $route->getName();

        $page = [
            'name' => 'Service'
        ];

        return view('admin.pages.service.index', [
            'items' => $items,
            'page' => $page,
            'perPage' => $perPage,
            'routeName' => $routeName,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::orderBy('name', 'asc')->get();

        
        $page = [
            'name' => 'Service',
            'slug' => 'slug',
            'search_index' => 1,
            'search_follow' => 1,
            'canonical_url' => null,
            'meta_title' => null,
            'meta_keyword' => null,
            'meta_description' => null,
        ];

        return view('admin.pages.service.create', compact('page', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
        ]
    );
        

        $item_no = Service::latest()->first();
        if($item_no){
            $item_no =  $item_no->item_no + 1;
        }else{
            $item_no = 1;
        }

           
        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $service->image;
        }


        $service = Service::create([
            'item_no' => $item_no, 
            'name' => $request->name, 
            'description' => $request->description, 
            'image' => $image_name, 
            'para1' => $request->para1, 
            'para2' => $request->para2, 
            'gallery' => $request->gallery,
            'slug' => $request->slug, 
            'status' => $request->status
        ]);
        
        $service->seo()->create([
            'search_index' => $request->search_index, 
            'search_follow' => $request->search_follow, 
            'canonical_url' => $request->canonical_url, 
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword, 
            'meta_description' => $request->meta_description,
            'seoable_id' => $request->seoable_id, 
            'seoable_type' => $request->seoable_type
        ]);


        if($request->file('images') !== null){
            foreach ($request->file('images') as $image) {
                // dd($image);
                $image_name = uploadImagesThumb($image);
                $service->images()->create([
                    'product_id' => $service->id,
                    'image' => $image_name,
                    'image_title' => 'null',
                ]);
            }   
    }

        return redirect()->route('service.create')->with('success', 'Service added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $categories = Category::orderBy('name', 'asc')->get();
        $page = [
            'name' => 'Service'
        ];
        $service = Service::with('seo')->find($id);
        // Check if the page is found
        if ($service) {
            return view('admin.pages.service.edit', compact('page', 'service', 'categories'));
        } else {
            // Handle the case where the page with the given ID is not found
            return redirect()->route('service.index')->with('error', 'Page not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string',
            // 'slug' => 'required|string',
        ]);
        
        // dd($request->all());
                
        $service = Service::find($id);
        
        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $service->image;
        }

        if ($service) {
            
            $service->update([
                'name' => $request->name,
                'category_id' => $request->category_id, 
                'description' => $request->description, 
                'image' => $image_name, 
                'slug' => $request->slug, 
                'status' => $request->status
            ]);
            
            $service->seo()->updateOrCreate([], [
                'search_index' => $request->search_index, 
                'search_follow' => $request->search_follow, 
                'canonical_url' => $request->canonical_url, 
                'meta_title' => $request->meta_title,
                'meta_keyword' => $request->meta_keyword, 
                'meta_description' => $request->meta_description,
            ]);

            
        if($request->file('images') !== null){
            foreach ($request->file('images') as $image) {
                // dd($image);
                $image_name = uploadImagesThumb($image);
                $service->images()->create([
                    'service_id' => $service->id,
                    'image' => $image_name,
                    'image_title' => 'null',
                ]);
            } 
        } 

            return redirect()->route('service.edit', ['service' => $service->id])
                ->with('success', 'service updated successfully');
            }
            else {
                return redirect()->back()->with('error', 'service not found');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $service_images = ServiceImage::where('service_id', $id)->get();
        
        // dd($service_images);

        $service = Service::find($id);
        if (!$service) {
            return redirect()->route('service.index')->with('error', 'service not found.');
        }
        $service->delete();                                                                                                                                                                                                                                                                                                                                                                                                                                               

        foreach($service_images as $service){
            deleteImages($service->image);
        }
        return redirect()->route('service.index')->with('success', 'Service deleted successfully.');
    
    }


    
    public function deleteServiceImage($id)
    {
    //    dd($id);
        $image = ServiceImage::where('image', $id)->first();
        // dd($image);
        $image->delete();
        deleteImages($id);

        return redirect()->back()->with('success', 'Image deleted successfully!');
}
}
