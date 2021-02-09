@extends ('layouts.main')

@section('title', $cat->title)

@section('custom_css')
<link rel="stylesheet" type="text/css" href="/styles/categories.css">
<link rel="stylesheet" type="text/css" href="/styles/categories_responsive.css">
@endsection

@section('content')
<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url('/images/{{$cat->img}}')"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">{{$cat->title}}<span>.</span></div>
                            <div class="home_text">
                                <p>{{$cat->desc}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Product Sorting -->
                <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                    <div class="results">Showing <span>{{$cat->products->count()}}</span> results</div>
                    <div class="sorting_container ml-md-auto">
                        <div class="sorting">
                            <ul class="item_sorting">
                                <li>
                                    <span class="sorting_text">Sort by</span>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    <ul>
                                        <li class="product_sorting_btn" data-order="default"><span>Default</span></li>
                                        <li class="product_sorting_btn" data-order="price-low-high"><span>Price: Low-High</span></li>
                                        <li class="product_sorting_btn" data-order="price-high-low"><span>Price: High-Low</span></li>
                                        <li class="product_sorting_btn" data-order="name-a-z"><span>Name: A-Z</span></li>
                                        <li class="product_sorting_btn" data-order="name-z-a"><span>Name: Z-A</span></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="product_grid">
                    @foreach($products as $product)
                    <!-- Product -->
                    @php
                    $image = '';
                    if(count($product->images) > 0){
                    $image = $product->images[0]['img'];
                    } else {
                    $image = 'no_image.png';
                    }
                    @endphp
                    <div class="product">
                        <div class="product_image"><img src="/images/{{$image}}" alt="{{$product->title}}"></div>
                        <div class="product_extra product_new"><a href="{{route('showCategory',$product->category['alias'])}}">{{$product->category['title']}}</a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="{{route('showProduct',[$product->category['alias'],$product->id])}}">{{$product->title}}</a></div>
                            @if($product->new_price != null)
                            <div style="text-decoration: line-through">${{$product->price}}</div>
                            <div class="product_price">${{$product->new_price}}</div>
                            @else
                            <div class="product_price">${{$product->price}}</div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
