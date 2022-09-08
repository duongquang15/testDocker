<?php
namespace App\Repositories;
use App\Models\Product;
class ProductRepositories implements ProductInterface{
    public function all(){
        return Product::all();
    }

    public function get($id){
        return Product::find($id);
    }

    public function store(array $data){
        return Product::create($data);
    }

    public function update($id, array $data){
        return Product::find($id)->update($data);
    }
    
    public function delete($id){
        return Product::destroy($id);
    }
}