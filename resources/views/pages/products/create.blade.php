@extends('layouts.main')
@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Tambah Product</h1>
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
               <form action="/products/store" method="POST">
                @csrf
                @method('POST')
                 <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" id="description" cols="30"
                         rows="10" class="form-control"></textarea>
                  </div>    
                  <div class="form-group">
                    <label for="sku" class="form-label">Kode Produk</label>
                    <input type="text" name="sku" id="sku" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">Harga Produk</label>
                    <input type="number" inputmode="numeric" name="price" id="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number"inputmode="numeric" name="stok" id="stok" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category_id" class="form-label">Kategori</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ( $categories as $category)
                            <option value="{{ $category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-success mr-2">Simpan</button>
                        <a href="/" class="btn btn-sm btn-outline-secondary">Batal</a>
                    </div>
                </div>
                </div>
               </form>
              </div>
            </div>
        </div>
    </div>
@endsection