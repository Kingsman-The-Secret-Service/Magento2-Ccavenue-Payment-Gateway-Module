define(
    [
        'Magento_Checkout/js/view/payment/default',
        // 'Magekmf_Ccavenue/payment/Ccavenue'
    ],
    function (Component) {
        'use strict';

        console.log(window);

        return Component.extend({
            defaults: {
                template: 'Magekmf_Ccavenue/payment/ccavenue'
            },
            getTitle:function(){

                return window.checkoutConfig.payment.ccavenue.title;
            }
        });
    }
);