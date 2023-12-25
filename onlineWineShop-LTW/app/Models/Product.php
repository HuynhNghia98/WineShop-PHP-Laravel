<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Category;


class Product extends Model
{
    protected $fillable = ['name', 'description', 'image', 'quantity', 'price', 'category_id', 'region', 'abv'];

    public static function sumPriceByQuantities($products, $productInSession)
    {
        $total = 0;
        foreach ($products as $product) {
            $total = $total + ($product->getPrice() * $productInSession[$product->getId()]);
        }
        return $total;
    }

    public static function minusPriceByQuantities($productInSession)
    {
        $products = Product::all();
        foreach ($products as $product) {
            if (isset($productInSession[$product->getId()])) {
                $quantityToMinus = $productInSession[$product->getId()];

                if ($quantityToMinus > 0) {
                    $newQuantity = $product->getQuantity() - $quantityToMinus;
                    $product->setQuantity($newQuantity);
                    $product->save();
                }
            }
        }
    }

    // relationship
    // category
    public function category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
    // item
    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
    // review
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function getReviews()
    {
        return $this->reviews;
    }
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
    }

    // get/set
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
    public function getQuantity()
    {
        return $this
            ->attributes['quantity'];
    }
    public function setQuantity($id)
    {
        $this
            ->attributes['quantity'] = $id;
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
    public function getImage()
    {
        return $this
            ->attributes['image'];
    }
    public function setImage($image)
    {
        $this
            ->attributes['image'] = $image;
    }
    public function getPrice()
    {
        return $this
            ->attributes['price'];
    }
    public function setPrice($price)
    {
        $this
            ->attributes['price'] = $price;
    }
    public function getCategoryId()
    {
        return $this
            ->attributes['category_id'];
    }
    public function setCategoryId($categoryId)
    {
        $this
            ->attributes['category_id'] = $categoryId;
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
    public function getRegion()
    {
        return $this
            ->attributes['region'];
    }
    public function setRegion($region)
    {
        $this
            ->attributes['region'] = $region;
    }
    public function getAbv()
    {
        return $this
            ->attributes['abv'];
    }
    public function setAbv($abv)
    {
        $this
            ->attributes['abv'] = $abv;
    }
}
