<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Store;
use Inertia\Response;
use App\Http\Requests\StoreRequest;
use App\Http\Resources\StoreResource;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    // public function index()
    // {
    //     $products = Store::all();
    //     return Inertia::render('Admin/Stores/StoreIndex', [
    //         'products' => StoreResource::collection($products)
    //     ]);
    // }

    // public function create(): Response
    // {
    //     $this->authorize('create', Store::class);
    //     return Inertia::render('Admin/Stores/Create');
    // }

    // public function store(StoreRequest $request): RedirectResponse
    // {
    //     $this->authorize('create', Store::class);
    //     Store::create($request->validated());


    //     return to_route('stores.index');
    // }

    // public function edit(Store $store)
    // {
    //     $this->authorize('update', $store);
    //     return Inertia::render('Admin/Stores/Edit', [
    //         'product' => new StoreResource($store)
    //     ]);
    // }

    // public function update(StoreRequest $request, Store $store): RedirectResponse
    // {
    //     $this->authorize('update', $store);
    //     $store->update($request->validated());

    //     return to_route('stores.index');
    // }

    // public function destroy(Store $store): RedirectResponse
    // {
    //     $this->authorize('delete', $store);
    //     $store->delete();
    //     return back();
    // }
}
