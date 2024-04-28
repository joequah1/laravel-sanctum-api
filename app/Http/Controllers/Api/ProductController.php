<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Responses\ApiResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $response;

    public function __construct(ApiResponse $response)
    {
        $this->response = $response;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return $this->response->success('Products retrieved successfully.', $products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create($request->validated());
        return $this->response->success('Product created successfully.', $product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->response->success('Product retrieved successfully.', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product->update($request->validated());
        return $this->response->success('Product updated successfully.', $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product->delete();
        return $this->response->success('Product deleted successfully.');
    }
}
