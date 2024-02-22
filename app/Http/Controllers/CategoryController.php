<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryById(Request $request)
    {
        $categories = Category::query()->where('parent_id',$request->id)->get();

        $category = Category::query()->findOrFail($request->id);
        return view('page.category',compact('categories','category'));
    }
}
