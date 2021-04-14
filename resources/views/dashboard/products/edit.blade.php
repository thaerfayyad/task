@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>products</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i>dashboard</a></li>
                <li><a href="{{ route('products.index') }}">products</a></li>
                <li class="active">edit</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">edit</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group">
                            <label>categories</label>
                            <select name="category_id" class="form-control">
                                <option value="">all categories</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                            </div>

                            <div class="form-group">
                                <label>description</label>
                                <textarea name="description" class="form-control ckeditor">{{ $product->description }}</textarea>
                            </div>

                        @endforeach

                        <div class="form-group">
                            <label>image</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ $product->image_path }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>

                        <div class="form-group">
                            <label>purchase price</label>
                            <input type="number" name="purchase_price" step="0.01" class="form-control" value="{{ $product->purchase_price }}">
                        </div>

                        <div class="form-group">
                            <label>sale price</label>
                            <input type="number" name="sale_price" step="0.01" class="form-control" value="{{ $product->sale_price }}">
                        </div>

                        <div class="form-group">
                            <label>stock</label>
                            <input type="number" name="stock" class="form-control" value="{{ $product->stock}}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Update</button>
                        </div>

                    </form>

                </div>

            </div>

        </section>

    </div>

@endsection
