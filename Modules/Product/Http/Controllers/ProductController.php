<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Http\Requests\ProductValidation;
use Modules\Product\Repository\CategoryRepository;
use Modules\Product\Repository\ProductRepository;

class ProductController extends Controller
{
    private $categoryRepository;
    private $productRepository;

    public function __construct(CategoryRepository $categoryRepository, ProductRepository $productRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }
   
    public function add()
    {
        $categories = $this->categoryRepository->getAll();
        return view('product::admin.body.product.add_product', compact('categories'));
    }

    public function store(ProductValidation $request)
    {
        try{

            $data = [
                'title' => $request->title,
                 'description' => $request->description,
                 'cat_id' => $request->cat_id,
            ];
     
             $data = $this->productRepository->create($data);

            
     
              $notification = [
                 'message' => 'Product added successfully',
                 'alert-type' => 'success'
              ];
     
              return redirect()->back()->with($notification);

        }catch(\Exception $e){

            $notification = [
                'message' => $e->getMessage(),
                'alert-type' => 'error'
             ];
     
            return redirect()->back()->with($notification);

        }
    }

    public function manage()
    {
        $products = $this->productRepository->getDataBelong();
        return view('product::admin.body.product.manage_product', compact('products'));
    }

    public function edit($id)
    {
        $categories = $this->categoryRepository->getAll();

        $product = $this->productRepository->getById($id);
        dd($product);
        return view('product::admin.body.product.edit_product', compact('categories', 'product'));
    }

    public function update(ProductValidation $request)
    {
        try{

            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'cat_id' => $request->cat_id,
            ];
     
              $this->productRepository->update($request->product_id, $data);
     
              $notification = [
                 'message' => 'Product updated successfully',
                 'alert-type' => 'success'
              ];
     
              return redirect()->route('product.manage')->with($notification);

        }catch(\Exception $e){
            $notification = [
                'message' => $e->getMessage(),
                'alert-type' => 'error'
             ];
     
             return redirect()->back()->with($notification);

        }
    }

    public function delete(Request $request)
    {
        try{
            $this->productRepository->delete($request->product_id);
            $notification = [
                'message' => 'Product deleted successfully',
                'alert-type' => 'success'
             ];
     
             return redirect()->route('product.manage')->with($notification);

        }catch(\Exception $e){
            $notification = [
                'message' => $e->getMessage(),
                'alert-type' => 'error'
             ];
     
             return redirect()->back()->with($notification);

        }
    }
}
