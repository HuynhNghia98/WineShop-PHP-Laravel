<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class Review extends Model
{
    protected $fillable = ['review', 'rating', 'name', 'email', 'user_id', 'product_id'];

    // validate
    public static function validate($request)
    {
        $request->validate([
            "rating" => "required|numeric|gt:0",
            "product_id" => "required|exists:products,id",
        ]);
    }

    public static function avgRating($productId)
    {
        $averageRating = Review::where('product_id', $productId)->avg('rating');

        return round($averageRating, 1);
    }

    public static function avgRatingProducts()
    {
        $averageRatingProducts = Review::join('products', 'reviews.product_id', '=', 'products.id')
            ->select('products.id', DB::raw('ROUND(AVG(reviews.rating),1) as rating'))
            ->groupBy('products.id');
        return $averageRatingProducts;
    }

    public static function sumTotalReview($productId)
    {
        $total = Review::where('product_id', $productId)->count('id');
        return $total;
    }

    public static function totalReviewProducts()
    {
        $total = Review::join('products', 'reviews.product_id', '=', 'products.id')
            ->select('products.id', DB::raw('COUNT(reviews.id) as total'))
            ->groupBy('products.id');
        return $total;
    }

    // relationship
    // user
    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
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
    public function getEmail()
    {
        return $this
            ->attributes['email'];
    }
    public function setEmail($email)
    {
        $this
            ->attributes['email'] = $email;
    }
    public function getReview()
    {
        return $this
            ->attributes['review'];
    }
    public function SetReview($review)
    {
        $this
            ->attributes['review'] = $review;
    }
    public function getrating()
    {
        return $this
            ->attributes['rating'];
    }
    public function setrating($rating)
    {
        $this
            ->attributes['rating'] = $rating;
    }
    public function getUserId()
    {
        return $this->attributes['user_id'];
    }
    public function setUserId($userId)
    {
        $this->attributes['user_id'] = $userId;
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
