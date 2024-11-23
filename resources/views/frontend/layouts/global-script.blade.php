<script>
    /**Cart Modal Popup Calling With On Click Js Function**/
    function loadProductModal(productId){
        
        console.log('ok');
        $.ajax({
            url: '{{ route("product.details.modal",":productId") }}'.replace(':productId', productId),
            method: 'GET',
            beforeSend: function () {
                $('.overlay-container').removeClass('d-none');
                $('.overlay').addClass('active');
            },
            success: function (response) {
                console.log(response);
                $(".load_product_modal_body").html(response);
                $("#cartModal").modal('show');
            },
            error: function (xhr, status, error) {
                console.error(error);
            },
            complete: function () {
                $('.overlay').removeClass('active');
                $('.overlay-container').addClass('d-none');
            }
        });
        
    }

    function UpdateCartSidebar(callback = null) {
        
        $.ajax({
            url: '{{ route("get.form.cart") }}',
            method: 'GET',
            success: function (response) {
                console.log(response);
                $(".cart_container").html(response);
                let cart_total = $("#cart_item_count").val();
                $('.cart_total').text("{{ getCurrencySymbolPosition(':cart_total')}}".replace(':cart_total', cart_total));
                let cart_count = $("#cart_item_count_number").val();
                $('.menu_cart_count').text("{{ (':cart_count')}}".replace(':cart_count', cart_count));
                if (callback != null) {
                    callback();
                }
                $('.cart_count').text("Total Items : {{ (':cart_count')}}".replace(':cart_count', cart_count));
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    }
    
   
</script>