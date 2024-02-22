<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryById(Request $request)
    {
        $categories = Category::query()->where('parent_id',$request->id)->get();
        $category = Category::query()->findOrFail($request->id);
        $courses = Course::query()->where('category_id',$category->id)->get();

        return view('page.category',compact('categories','category','courses'));
    }
}
