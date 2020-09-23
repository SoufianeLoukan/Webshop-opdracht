@extends('wrapper')

@section('body')
    <h1 class="other-games">Coming Soon</h1>
    <div class="games">

        @foreach ($games as $product)

        <a href="{{route('product.show', $product->id) }}" class="game-thumbnail">

            <div class="image">
                <div class="discount">
                    {{round((1 - ($product->price / $product->non_discounted_price)) * 100)}}%
                </div>
                <img src="{{$product->image_url}}">
            </div>
            <div class="description">
                <div class="title">
                    {{$product->title}}
                </div>
                <hr>
                <div class="price">
                    <div class="new-price">
                        €{{$product->price}}
                    </div>
                    <div class="old-price">
                        €{{$product->non_discounted_price}}
                    </div>
                </div>
            </div>

        </a>

        @endforeach

    </div>
@endsection
