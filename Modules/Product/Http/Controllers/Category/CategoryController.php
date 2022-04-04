<?php 

namespace Modules\Product\Http\Controllers\Category;

use Modules\Product\Repository\CategoryRepository;

class CategoryController {

    // private $categoryRepository;

    // public function __construct(CategoryRepository $categoryRepository)
    // {
    //     $this->categoryRepository = $categoryRepository;
    // }

    public function index()
    {
        $categories = CategoryRepository::getAll();
        return view('product::admin.body.category.index', compact('categories'));
    }
}