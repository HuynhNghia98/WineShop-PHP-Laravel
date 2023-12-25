<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["categories"] = Category::all();
        return view("admin.category.index")->with("viewData", $viewData);
    }

    public function getCreate()
    {
        $viewData = [];
        return view("admin.category.create")->with("viewData", $viewData);
    }

    public function postCreate(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
        ]);
        $existingCategory = Category::where('name', 'LIKE', '%' . $request->input('name') . '%')->first();
        if ($existingCategory) {
            return redirect()->back()->withInput()->withErrors(['name' => 'Category already exists']);
        }
        $newCategory = new Category();
        $newCategory->setName($request->input("name"));
        $newCategory->setDescription($request->input("description"));
        $newCategory->save();

        return redirect()->route("admin.category.index")->with("success", "Created Succesfully");
    }

    public function getUpdate($id)
    {
        $viewData = [];
        $viewData["category"] = Category::findOrFail($id);
        return view("admin.category.edit")->with("viewData", $viewData);
    }

    public function postUpdate(Request $request, $id)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
        ]);
        $category = Category::find($id);
        if (!$category) {
            return redirect()->back()->with("error", "Category does not exist");
        }

        $category->name = $request->input("name");
        $category->description = $request->input("description");
        $category->save();

        return redirect()->route("admin.category.index")->with("success", "Updated Succesfully");
    }

    public function getDelete($id)
    {
        $viewData = [];
        $viewData["category"] = Category::findOrFail($id);
        return view("admin.category.delete")->with("viewData", $viewData);
    }

    public function postDelete($id)
    {
        Category::destroy($id);
        return redirect()->route('admin.category.index')->with('success', "Deleted Succesfully");
    }
}
