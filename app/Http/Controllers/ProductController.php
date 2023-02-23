<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepository;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'name',
            'description',
            'price',
        ]);

        $product = $this->productRepository->create($data);

        return redirect()->route('products.show', $product->id);
    }

    public function show($id)
    {
        $product = $this->productRepository->find($id);

        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        return view('products.edit', compact('product'));
    }

}
