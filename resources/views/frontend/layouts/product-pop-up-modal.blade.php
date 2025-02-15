<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fal fa-times"></i></button>
<form action="{{ route('add.to.cart') }}" id="modal_add_to_cart_form" method="post">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <div class="fp__cart_popup_img">
        <img src="{{ asset($product->thumbnail_image) }}" alt="menu" class="img-fluid w-100">
    </div>
    <div class="fp__cart_popup_text">
        <a href="{{ route('product.details', $product->slug) }}" class="title">{{ $product->name }}</a>
        <p class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
            <span>(201)</span>
        </p>
        <h4 class="price">
            @if ($product->offer_price > 0)
                <input type="hidden" name="base_price" value="{{ $product->offer_price }}">
            @else
                <input type="hidden" name="base_price" value="{{ $product->price }}">
            @endif

            @if ($product->offer_price > 0)
                {{ getCurrencySymbolPosition($product->offer_price) }}
                <del>{{ getCurrencySymbolPosition($product->price) }}</del>
            @else
                {{ getCurrencySymbolPosition($product->price) }}
            @endif
        </h4>

        <div class="details_size">
            @if ($product->size()->exists())
                <div class="details_size">
                    <h5>select size</h5>
                    @foreach ($product->size as $size)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="{{ $size->id }}"
                                data-price="{{ $size->price }}" name="product_size" id="size-{{ $size->id }}">
                            <label class="form-check-label" for="size-{{ $size->id }}">
                                {{ $size->name }} <span>+ {{ getCurrencySymbolPosition($size->price) }}</span>
                            </label>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        @if ($product->option()->exists())
            <div class="details_extra_item">
                <h5>select option <span>(optional)</span></h5>
                @foreach ($product->option as $options)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="product_option[]"
                            data-price="{{ $options->price }}" value="{{ $options->id }}"
                            id="option-{{ $options->id }}">
                        <label class="form-check-label" for="option-{{ $options->id }}">
                            {{ $options->name }} <span>+ {{ getCurrencySymbolPosition($options->price) }}</span>
                        </label>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="details_quentity">
            <h5>select quentity</h5>
            <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                <div class="quentity_btn">
                    <button class="btn btn-danger decrement"><i class="fal fa-minus"></i></button>
                    <input class="bg-slate-500" type="text" name="quentity" id="quentity" placeholder="1"
                        value="1" readonly>
                    <button class="btn btn-success increment"><i class="fal fa-plus"></i></button>
                </div>

                @if ($product->offer_price > 0)
                    <h3 id="total_price">{{ getCurrencySymbolPosition($product->offer_price) }} </h3>
                @else
                    <h3 id="total_price">{{ getCurrencySymbolPosition($product->price) }}</h3>
                @endif

            </div>
        </div>

        <ul class="details_button_area d-flex flex-wrap">

            <li><button type="submit" class="common_btn modal_cart_button">add to cart</button></li>
        </ul>
    </div>

</form>


<script>
    $(document).ready(function() {
        console.log('Working');
        // Cart::destroy();
        $('input[name="product_size"]').on('change', function() {
            updateTotalPrice();
        })
        $('input[name="product_option[]"]').on('change', function() {
            updateTotalPrice();
        })
        // button press event handler 
        $('.increment').on('click', function(e) {
            e.preventDefault()
            let quentity = $('#quentity')
            let curQuantity = parseInt(quentity.val());
            quentity.val(curQuantity + 1);
            updateTotalPrice();
        })
        $('.decrement').on('click', function(e) {
            e.preventDefault()
            let quentity = $('#quentity')
            let curQuantity = parseInt(quentity.val());
            if (curQuantity > 1) {
                quentity.val(curQuantity - 1);
                updateTotalPrice();
            }

        })
        // implements func 
        function updateTotalPrice() {
            let basePrice = parseFloat($('input[name="base_price"]').val());
            let selectedSizePrice = 0;
            let selectOptionPrice = 0;
            let quantity = parseFloat($('#quentity').val());
            //get html element data value 
            let selectedSizes = $('input[name="product_size"]:checked');
            if (selectedSizes.length > 0) {
                selectedSizePrice = parseFloat(selectedSizes.data("price"));
            }
            // Calculate selected options price
            let selectedOptions = $('input[name="product_option[]"]:checked');
            console.log(selectedOptions);
            $(selectedOptions).each(function() {
                selectOptionPrice += parseFloat($(this).data("price"));
            })

            let totalPrice = (basePrice + selectedSizePrice + selectOptionPrice) * quantity;
            $('#total_price').text("{{ config('settings.app_simbol') }}" + parseFloat(totalPrice));
            console.log(totalPrice);
            console.log(selectedSizePrice);
            console.log(selectOptionPrice);
            console.log(quantity);

        }
        //model add to cart function 
        $('#modal_add_to_cart_form').on('submit', function(e) {
            
            e.preventDefault();
            // validations FormData 
            let selectedSizes = $('input[name="product_size"]')

            if (selectedSizes.length > 0) {
                if ($('input[name="product_size"]:checked').val() === undefined) {
                    alert('Please select size');
                    console.log('Please select size');
                    return;
                }
            }

            let formData = $(this).serialize();
            console.log(formData);

            $.ajax({
                method: 'POST',
                url: '{{ route('add.to.cart') }}',
                data: formData,
                beforeSend: function() {
                    $('.modal_cart_button').attr('disabled', 'true');
                    $('.modal_cart_button').html( '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>  Loading...');
                },
                success: function(response) {
                   
                    console.log(response);
                    toastr.success(response.message);
                    UpdateCartSidebar();
                },
                error: function(xhr, status, error) {
                    // let error = JSON.parse(xhr.responseText);
                    // toastr.error(response.message);
                    console.error(error);
                },
                complete: function() {
                    
                    $('.modal_cart_button').html('add to cart');
                    $('.modal_cart_button').attr('disabled', 'false');
                }
            });
        });
    })
</script>
