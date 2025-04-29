@extends('layouts.main')
@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Ubah Product</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Products</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
      <div class="col">
         <div class="card">
            <div class="card-body">
               <form action="/products/{{ $product->id }}" method="POST">
                @csrf
                @method('put')
                 <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name)}}">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" id="description" cols="30"
                         rows="10" class="form-control">{{ old('description', $product->description)}}</textarea>
                  </div>    
                  <div class="form-group">
                    <label for="sku" class="form-label">Kode Produk</label>
                    <input type="text" name="sku" id="sku" class="form-control" value="{{ old('sku', $product->sku)}}">
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">Harga Produk</label>
                    <input type="number" inputmode="numeric" name="price" id="price" class="form-control" value="{{ old('price', $product->price)}}">
                </div>
                <div class="form-group">
                    <label for="stock" class="form-label">Stok</label>
                    <input type="number"inputmode="numeric" name="stock" id="stock" class="form-control" value="{{ old('stock', $product->stock)}}">
                </div>
                <div class="form-group">
                    <label for="category_id" class="form-label">Kategori</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ( $categories as $category)
                            <option value="{{ $category->id}}" {{ $product->category_id === $category->id ? 'selected' : '' }}> {{ $category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-warning mr-2">Edit</button>
                        <a href="/" class="btn btn-sm btn-outline-secondary">Cancel</a>
                    </div>
                </div>
                </div>
               </form>
              </div>
            </div>
        </div>
    </div>
@endsection