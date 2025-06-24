<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $categories = Category::where('user_id', $userId)
                                ->orderBy('category_name', 'asc')
                                ->get();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $userId = Auth::id();

        $categories = Category::where('user_id', $userId)
                                ->get();
        return view('categories.create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|string|max:255|unique:categories',
        ]);

        $data = array_merge($validated, ['user_id' => Auth::id()]);

        Category::create($data);

        return redirect()->route('categories.index')->with('success', 'Kategori baru ditambahkan.');
    }

    public function show(Category $category)
    {
        if ($category->user_id !== Auth::id()) {
            return redirect()->route('categories.index')->with('error', 'Anda tidak memiliki akses ke kategori ini.');
        }
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        $userId = Auth::id();
        $categories = Category::where('user_id', $userId)
                                ->get();
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $userId = Auth::id();
        $categories = Category::where('user_id', $userId)
                                ->get();

        $request->validate([
            'category_name' => 'required|string|max:255|unique:categories,category_name,'
        ]);

        $category->update([
            'category_name' => $request->category_name,
        ]);

        return redirect()->route('categories.index')
                        ->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
                        ->with('success', 'Kategori berhasil dihapus.');
    }
}
