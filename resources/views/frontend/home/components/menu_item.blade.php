<section class="fp__menu mt_95 xs_mt_65">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-duration="1s">
            <div class="m-auto text-center col-md-8 col-lg-7 col-xl-6">
                <div class="fp__section_heading mb_45">
                    <h4>food Menu</h4>
                    <h2>Our Popular Delicious Foods</h2>
                    <span>
                        <img src="images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                    </span>
                    <p>Objectively pontificate quality models before intuitive information. Dramatically
                        recaptiualize multifunctional materials.</p>
                </div>
            </div>
        </div>

        <div class="row wow fadeInUp" data-wow-duration="1s">
            <div class="col-12">
                <div class="flex-wrap menu_filter d-flex justify-content-center">
                    <button class=" active" data-filter="*">all menu</button>
                    @foreach ($categorys as $key => $category)
                        <button data-filter=".{{ $category->slug }}">{{ $category->name }}</button>
                    @endforeach


                </div>
            </div>
        </div>

        <div class="grid row">
            @foreach ($categorys as $key => $category)
                @php
                    $products = App\Models\Admin\Product::where([
                        'show_at_home' => 1,
                        'status' => 1,
                        'category_id' => $category->id,
                    ])
                        ->orderBy('id', 'desc')
                        ->take(8)
                        ->get();
                    // dd($products);
                @endphp
            @endforeach

            @foreach ($products as $key => $product)
                <div class="col-xl-3 col-sm-6 col-lg-4 {{ $product->slug }} pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img">
                            <img src="{{ asset($product->thumbnail_image) }}" alt="menu" class="img-fluid w-100">
                            <a class="category" href="{{ route('product.details', $product->slug) }}">{{ @$product->category->name }}</a>
                        </div>
                        <div class="fp__menu_item_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>10</span>
                            </p>
                            <a class="title" href="{{ route('product.details', $product->slug) }}">{{ $product->name }}</a>
                            <h5 class="price">
                                @if ($product->offer_price > 0)
                                    ${{ $product->offer_price }}
                                    <del>${{ $product->price }}</del>
                                @else
                                    ${{ $product->price }}
                                @endif
                            </h5>
                            <ul class="flex-wrap d-flex justify-content-center">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                            class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach




        </div>
    </div>
</section>
