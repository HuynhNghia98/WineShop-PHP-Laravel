<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["products"] = Product::all();
        return view("admin.product.index")->with("viewData", $viewData);
    }

    public function getDetail($id)
    {
        $viewData = [];
        $viewData["categories"] = Category::all();
        $viewData["product"] = Product::find($id);
        $viewData["category"] = Category::where('id', $viewData["product"]->getCategoryId())->first();
        return view("admin.product.detail")->with("viewData", $viewData);
    }

    public function getCreate()
    {
        $viewData = [];
        $viewData["categories"] = Category::All();
        return view("admin.product.create")->with("viewData", $viewData);
    }

    public function postCreate(Request $request)
    {
        $request->validate([
            "name" => "required|max:255|unique:products",
            "quantity" => "required",
            "price" => "required",
            "categoryName" => "required",
        ]);

        $newProduct = new Product();
        $newProduct->setName($request->input("name"));
        $newProduct->setQuantity($request->input("quantity"));
        $newProduct->setPrice($request->input("price"));
        $newProduct->setRegion($request->input("region") ? $request->input("region") : "");
        $newProduct->setAbv($request->input("abv") ? $request->input("abv") : "");
        $newProduct->setDescription($request->input("description") ? $request->input("description") : "");
        // tim kiem id category theo ten trong input
        $category = Category::where('name', 'LIKE', '%' . $request->input("categoryName") . '%')->first();
        $newProduct->setCategoryId($category->getId());
        $newProduct->setImage("");
        $newProduct->save();
        // them image
        if ($request->hasFile('image')) {
            $originalName = $request->file('image')->getClientOriginalName();
            // Lấy tên tệp mà không có phần mở rộng
            $fileNameWithoutExtension = pathinfo($originalName, PATHINFO_FILENAME);
            // Tạo tên mới cho tệp ảnh dựa trên tên không có phần mở rộng và thêm uniqid và phần mở rộng sau đó
            $imageName = $fileNameWithoutExtension . '_' . uniqid() . '.' . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            // Lưu tên tệp ảnh vào trường 'image' trong cơ sở dữ liệu
            $newProduct->setImage($imageName);
            $newProduct->save();
        }
        return redirect()->route("admin.product.index")->with("success", "Created Succesfully");
    }

    public function getUpdate($id)
    {
        $viewData = [];
        $viewData["product"] = Product::findOrFail($id);
        $viewData["categories"] = Category::all();
        $viewData["category"] = Category::where('id', $viewData["product"]["category_id"])->first();
        return view("admin.product.edit")->with("viewData", $viewData);
    }

    public function postUpdate(Request $request, $id)
    {
        $request->validate([
            "name" => "required|max:255",
            "quantity" => "required",
            "price" => "required",
        ]);
        // kiem tra neu san pham khong ton tai thi bao loi
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with("error", "Product does not exist");
        }
        // cap nhat du lieu
        $product->update([
            'name' => $request->input("name"),
            'quantity' => $request->input("quantity"),
            'price' => $request->input("price"),
            'region' => $request->input("region") ? $request->input("region") : "",
            'abv' => $request->input("abv") ? $request->input("abv") : "",
            'description' => $request->input("description") ? $request->input("description") : "",
        ]);
        // Kiểm tra xem có thay đổi category không
        if ($request->input("categorySelect")) {
            $category = Category::where('name', 'LIKE', '%' . $request->input("categorySelect") . '%')->first();
            if ($category) {
                $product->update(['category_id' => $category->getId()]);
            }
        }
        // cap nhat hình ảnh
        if ($request->hasFile('image')) {
            $originalName = $request->file('image')->getClientOriginalName();
            // Lấy tên tệp mà không có phần mở rộng
            $fileNameWithoutExtension = pathinfo($originalName, PATHINFO_FILENAME);
            // Tạo tên mới cho tệp ảnh dựa trên tên không có phần mở rộng và thêm uniqid và phần mở rộng sau đó
            $newimageName = $fileNameWithoutExtension . '_' . uniqid() . '.' . $request->file('image')->extension();
            Storage::disk('public')->put(
                $newimageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product->update(['image' => $newimageName]);
        }

        return redirect()->route("admin.product.index")->with("success", "Updated Successfully");
    }


    public function getDelete($id)
    {
        $viewData = [];
        $viewData["product"] = Product::findOrFail($id);
        $viewData["category"] = Category::where('id', $viewData["product"]["category_id"])->first();

        return view("admin.product.delete")->with("viewData", $viewData);
    }

    public function delDelete($id)
    {
        Product::destroy($id);
        return redirect()->route('admin.product.index')->with('success', "Deleted Succesfully");
    }
}
