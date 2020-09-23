@extends('wrapper')

@section('body')

<div class="game-view">
    <div class="game-picture">
        <img src="{{$product->image_url}}">
    </div>
    <div class="game-info">
        <h1 class="title">
            {{$product->title}}
        </h1>
        <div class="discount">

            {{round((1 - ($product->price / $product->non_discounted_price)) * 100)}}%
        </div>
        <hr>
        <div class="specs">
            <table>
                <tr>
                    <th>
                        Platform
                    </th>
                    <th>
                        Region
                    </th>
                    <th>
                        Availability
                    </th>
                    <th>
                        Delivery
                    </th>
                </tr>
                <tr>
                    <td>

            {{$product->platform}}
                    </td>
                    <td>

            {{$product->region}}
                    </td>
                    <td>

                        {{$product->availability}}
                    </td>
                    <td>

            {{$product->delivery}}
                    </td>
                </tr>
            </table>
        </div>
        <div class="price">
            <div class="old-price">
                RRP €
                {{$product->non_discounted_price}}
            </div>
            €{{$product->price}}
        </div>
        <div class="purchase">
            <button class="main-button">
                BUY NOW 🛒+
            </button>
        </div>


        <div class="other-specs">
            <table>
                <tr>
                    <th>
                        PUBLISHER
                    </th>
                    <th>
                        DEVELOPER
                    </th>
                    <th>
                        RELEASE DATE
                    </th>
                    <th>
                        GENRE
                    </th>
                </tr>
                <tr>
                    <td>

            {{$product->publisher}}
                    </td>
                    <td>

            {{$product->developer}}
                    </td>
                    <td>

            {{$product->release_date}}
                    </td>
                    <td>
                        SIMULATION, STRATEGY
                    </td>
                </tr>
            </table>
        </div>

    </div>


    <h1 class="other-games">YOU MAY ALSO LIKE</h1>
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


    <div class="game-description">
        <h1>INFORMATION</h1>
        {{$product->description}}
    </div>

</div>


@endsection
