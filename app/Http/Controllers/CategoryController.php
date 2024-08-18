<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();//select * from category
        return view('category.index', ['categories' => $categories]);
    }


    public function create()
    {
        return view('category.create');
    }

    
    public function store(Request $request)
    {
     
       
        // dd(request()->all());
        // $name = request()->name;
        // $description = request()->description;
        // $created_at = request()->date;

        //  Category::created(
        //     [
        //         'name' => $name,
        //         'description' =>$description,
        //         'created_at' =>$created_at
        //     ]
        // );

        $category = new Category;
        $category->name = request()->name;
        $category->description = request()->description;
        $category->created_at = request()->date;
        $category->save();
        return to_route('category.index');
    }


    public function show(Category $category)
    {
        // Return the show view for a single category
        return view('category.show', ['category' => $category]);
    }


    public function edit( $cat_id)
    {
        $category = Category::where('cat_id' , $cat_id)->first();
        // dd($category);
        return view('category.edit', ['category' => $category]);
    }


    public function update(Request $request, $catId)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'created_at' => 'nullable|date',
        ]);
    
        // Find the category by 'cat_id'
        $category = Category::where('cat_id', $catId)->firstOrFail();
    
        // Update the category with validated data
        $category->update($validated);
    
        // Redirect to the index route with a success message
        return redirect()->route('category.index')->with('success', 'Category updated successfully!');
    }
    


    public function destroy( $catId)
    {
        // $singleCatFromDB = Category::findOrFail($catId); //? Find the post or fail
        // $singleCatFromDB->delete(); //! Delete the post

        Category::where('cat_id' ,$catId)->delete();//! another way to daelete 

        return redirect()->route('category.index')->with('success', 'Category deleted successfully!');
    }
}
