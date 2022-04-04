<?php

namespace Modules\Product\Repository;

use Modules\Category\Entities\Category;

class CategoryRepository 
{
    private $model;
    public function __construct(Category $model)
    {
        $this->model = $model;
    }
    public function getAll()
    {
        return $this->model->all();
    }

    
}


?>