define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'evomexico',
                component: 'EVOMexico_Payment/js/view/payment/method-renderer/evomexicostandard'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);
