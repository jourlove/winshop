
$(document).ready(function() {
    $(window).keydown(function(event){
        if(event.keyCode == 13) {
            event.preventDefault();
            $('#Form-field-Post-products-group a[data-request="formProducts::onAddItem"]').click();                      
            return false;
        }
    });

    $('#Form-field-Post-code').focus();
    
    $('#Form-field-Post-products-group a[data-request="formProducts::onAddItem"]').click(
        function() {

            setTimeout(function() {
                index = parseInt($('input[name="___index_products[]"]').last().val());
                id = 'Form-formProductsForm' + index + '-field-Post-products-' + index + '-product_JAN';
                $('#' + id).focus();
                $('#' + id).focusout(function(e) {
                    $.request('onGetProductInfo', {
                        data: {jan: $(this).val(), idtemp: this.id},
                        success: function(res) {
                            id_temp = res.IdTemp;
                            product_name_id = id_temp + '_name';
                            $('#' + product_name_id).val(res.Name);
                            product_price_id = id_temp + '_price';
                            $('#' + product_price_id).val(res.Price);                                            }
                        }
                    )
                });                            
            },1000);
        }
    );

});
