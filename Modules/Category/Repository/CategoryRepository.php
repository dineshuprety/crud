<?php

namespace Modules\Category\Repository;

use Modules\Category\Entities\Category;
use DB;

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

    public function getById($id)
    {
        return $this->model->findorfail($id);
    }

    public function create(array $attributes)
    {
        try{
            DB::beginTransaction();
            $data = $this->model->create($attributes);
            DB::commit();
            return $data;
        }
        catch(\Exception $e){
            DB::rollback();
            return false;
        }
        
    }

    public function update($id, array $attributes)
    {
        try{
            DB::beginTransaction();
            $data = $this->getById($id)->update($attributes);
            DB::commit();
            return $data;
        }
        catch(\Exception $e){
            DB::rollback();
            return false;
        }
      
    }

    public function delete($id)
    {
        try{
            DB::beginTransaction();
            $data = $this->getById($id)->delete();
            DB::commit();
            return $data;
        }
        catch(\Exception $e){
            DB::rollback();
            return false;
        }
      
    }
}


?>