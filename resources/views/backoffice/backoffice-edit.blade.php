@extends('layout')

@section('content')

    <form class="container" action="{{ route('product.update',['product'=>$product]) }}" method="post">
        @csrf
        @method('PUT')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$product->name}}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" value="{{$product->price}}">
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="text" name="weight" class="form-control" id="weight" value="{{$product->weight}}">
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">discount</label>
            <input type="text" name="discount" class="form-control" id="discount" value="{{$product->discount}}">
        </div>
        <div class="mb-3">
            <label for="picture_url" class="form-label">picture_url</label>
            <input type="text" name="picture_url" class="form-control" id="picture_url" value="{{$product->picture_url}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea name="description" id="description">{{$product->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">quantity</label>
            <input type="number" name="quantity" min="0" max="2000" value="{{$product->quantity}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Catégorie</label>
            <select name="category_id" id="category_id">
                @foreach($categorie as $category)
                    <option value="{{ $category->id }}" @if($category->id===$product->category_id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn">Modifier</button>
    </form>
@endsection
