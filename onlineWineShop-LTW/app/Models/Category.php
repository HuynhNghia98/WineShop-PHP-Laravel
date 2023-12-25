<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    protected $fillable = ['id', 'name', 'description', 'update_at', 'create_at'];

    // relationship
    // product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function getProducts()
    {
        return $this->products;
    }
    public function setProducts($products)
    {
        $this->products = $products;
    }

    // get set
    public function getId()
    {
        return $this
            ->attributes['id'];
    }
    public function setId($id)
    {
        $this
            ->attributes['id'] = $id;
    }
    public function getName()
    {
        return $this
            ->attributes['name'];
    }
    public function setName($name)
    {
        $this
            ->attributes['name'] = $name;
    }
    public function getDescription()
    {
        return $this
            ->attributes['description'];
    }
    public function setDescription($description)
    {
        $this
            ->attributes['description'] = $description;
    }
    public function getUpdateAt()
    {
        return $this
            ->attributes['update_at'];
    }
    public function setUpdateAt($update_at)
    {
        $this
            ->attributes['update_at'] = $update_at;
    }
    public function getCreateAt()
    {
        return $this
            ->attributes['create_at'];
    }
    public function setCreateAt($create_at)
    {
        $this
            ->attributes['create_at'] = $create_at;
    }
}
