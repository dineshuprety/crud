<?php

namespace Modules\Product\Repository;

use Modules\Product\Entities\Product;

use DB;

class ProductRepository 
{
    private  $model;
    
    public function __construct(Product $model)
    {
        $this->model = $model;
    }
    public function getAll()
    {
        return $this->model->all();
    }

    public function getDataBelong()
    {
        try {
            return $this->model->with('category')->get();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
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
            return $e->getMessage();
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