@extends('layouts.master')

@section('title')
	Laravel Shopping Cart
@endsection

@section('content')
	@foreach($products->chunk(3) as $productChunk)
  <div class="row">
		@foreach($productChunk as $product)
			<div class="col-sm-6 col-md-4">
				<div class="img-thumbnail">			
					<img src="{{ $product->imagePath }}" alt="..." class="img-fluid" style="max-width: 50%">				
					<div class="caption">
						<h3>{{ $product->title }}</h3>
						<p class="description">{{ $product->description }}</p>
						<div class="clearfix">
							<div class="float-left price">${{ $product->price }}</div>
							<a href="#" class="btn btn-success float-right" role="button">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
	@endforeach	
@endsection