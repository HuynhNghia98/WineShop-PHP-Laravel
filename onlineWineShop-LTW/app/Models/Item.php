<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;

class Item extends Model
{
    protected $fillable = [
        'quantity', 'price', 'order_id', 'product_id', 'created_at', 'updated_at'
    ];

    // relationship
    // order
    public function order()
    {
        return $this->belongsTo(Order::class, "order_id", "id");
    }
    public function getOrder()
    {
        return $this->order;
    }
    public function setOrder($order)
    {
        $this->order = $order;
    }
    // product
    public function product()
    {
        return $this->belongsTo(Product::class, "product_id", "id");
    }
    public function getProduct()
    {
        return $this->product;
    }
    public function setProduct($product)
    {
        $this->product = $product;
    }

    // validate
    public static function validate($request)
    {
        $request->validate([
            "price" => "required|numeric|gt:0",
            "quantity" => "required|numeric|gt:0",
            "product_id" => "required|exists:products,id",
            "order_id" => "required|exists:orders,id",
        ]);
    }
    // get/set
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }
    public function setQuantity($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }
    public function getPrice()
    {
        return $this->attributes['price'];
    }
    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    public function getOrderId()
    {
        return $this->attributes['order_id'];
    }
    public function setOrderId($orderId)
    {
        $this->attributes['order_id'] = $orderId;
    }
    public function getProductId()
    {
        return $this->attributes['product_id'];
    }
    public function setProductId($productId)
    {
        $this->attributes['product_id'] = $productId;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}
