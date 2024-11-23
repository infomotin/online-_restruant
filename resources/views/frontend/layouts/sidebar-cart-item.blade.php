<input type="hidden" id="cart_item_count" value="{{ cartTotal() }}" >
<input type="hidden" id="cart_item_count_number" value="{{ count(Cart::content()) }}" >

@foreach (Cart::content() as $item)
    <li>
        <div class="menu_cart_img">
            <img src="{{ asset($item->options->product_info['image']) }}" alt="menu" class="img-fluid w-100">
        </div>
        <div class="menu_cart_text">
            <a class="title"
                href="{{ route('product.details', $item->options->product_info['slug']) }}">{{ $item->name }}
            </a>
            <p class="qty">Qty:{{ $item->qty }}</p>
            <p class="size"> Size:{{ @$item->options->product_size['name'] }}</p>
            @foreach ($item->options->product_option as $option)
                <p class="extra">Extra:{{ $option['name'] }}</p>
            @endforeach
            <p class="price">{{ getCurrencySymbolPosition($item->price) }}</p>
        </div>
        <span class="del_icon"><i class="fal fa-times"></i></span>
    </li>
@endforeach
