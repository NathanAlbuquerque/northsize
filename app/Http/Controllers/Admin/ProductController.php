<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $user = Auth::user();
        $products = Product::orderBy('id', 'desc')->get();
        return view('adm-product-index', compact('products', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $user = Auth::user();
        return view('adm-product-create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['name']);
        Product::create($validated);
        return redirect()->route('product.index')->with('success', 'Produto adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product): View
    {
        $user = Auth::user();
        return view('adm-product-show', compact('product', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): View
    {
        $user = Auth::user();
        return view('adm-product-edit', compact('product', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, Product $product): RedirectResponse
    {
        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['name']);
        $product->update($validated);
        return redirect()->route('product.index')->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Produto excluído com sucesso!');
    }
}
