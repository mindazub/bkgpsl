@extends('layout.app')

@section('categories')

<div class="col-md-3">
    <!-- <p class="lead">Shop Name</p>                 -->
    <div class="list-group">
        @foreach($categories as $category)
            <a href="{{ route('catWithProd', [ $category->name ]) }}" class="list-group-item">{{ $category->name }}</a>
        @endforeach
    </div>
</div>

@stop


@section('content')

<!-- <h1>Products list</h1> -->

@foreach ($products->chunk(3) as $chunk)
    <div class="row">
        @foreach ($chunk as $product)
            <!-- <div class="col-xs-4">{{ $product->title }}</div> -->
            <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <button class="pull-right btn-sm btn-success">
	                                <i class="fa fa-lg fa-shopping-cart" aria-hidden="true" style="position: auto;"></i>
                                	<h4 class="pull-right">{{ $product->price }}</h4>
                                </button>
                                <h4><a href="/products/{{ $product->id }}">{{ $product->title }}</a>
                                </h4>
                                <h5>{{ $product->quantity }} </h5>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
        @endforeach
    </div>
@endforeach

{{ $products->render() }}


@stop