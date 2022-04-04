<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Category\Http\Requests\CategoryAdd;
use Modules\Category\Repository\CategoryRepository;
use Modules\Category\Repository\CategorySlug;

class CategoryController extends Controller
{

    private $categoryRepository;
    private $categorySlug;

    public function __construct(CategoryRepository $categoryRepository, CategorySlug $categorySlug)
    {
        $this->categoryRepository = $categoryRepository;
        $this->categorySlug = $categorySlug;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAll();
        return view('category::admin.body.category.manage_category', compact('categories'));
    }

    public function add()
    {
        return view('category::admin.body.category.add_category');
    }

    public function store(CategoryAdd $request)
    {
        try{

            $category_slug = $this->categorySlug->createSlug($request->category_name);
            
            $data = [
                'category_name' => $request->category_name,
                'category_slug' => $category_slug,
            ];

           $this->categoryRepository->create($data);
           $notification = [
               'message' => 'Category Added Successfully',
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

    public function edit($id)
    {
        $category = $this->categoryRepository->getById($id);
        return view('category::admin.body.category.edit_category', compact('category'));
    }

    public function update(CategoryAdd $request)
    {
        try{
            $category_slug = $this->categorySlug->createSlug($request->category_name);
            $data = [
                'category_name' => $request->category_name,
                'category_slug' => $category_slug,
            ];
            $this->categoryRepository->update($request->category_id, $data);
            $notification = [
                'message' => 'Category Updated Successfully',
                'alert-type' => 'success'
            ];
            return redirect()->route('category.index')->with($notification);
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
            $this->categoryRepository->delete($request->category_id);
            $notification = [
                'message' => 'Category Deleted Successfully',
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
    
   
}
