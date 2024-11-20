<script>
    /**Cart Modal Popup Calling With On Click Js Function**/
    function loadProductModal(productId){
        console.log('ok');
        $.ajax({
            url: '{{ route("product.details.modal",":productId") }}'.replace(':productId', productId),
            method: 'GET',
            success: function (response) {
                console.log(response);
                $(".load_product_modal_body").html(response);
                $("#cartModal").modal('show');
            },
            error: function (xhr, status, error) {
                console.error(error);}
        });
        
    }
</script>