define([
    'underscore',
    'uiRegistry',
    'Magento_Ui/js/form/element/select',
    'Magento_Ui/js/modal/modal'
], function (_, uiRegistry, select, modal) {
    'use strict';

    return select.extend({

        /**
         * On value change handler.
         *
         * @param {String} value
         */
        onUpdate: function (value) {

            var field1 = uiRegistry.get('index = cms_block');
            var field2 = uiRegistry.get('index = columns');

            // console.log(field1);
            // console.log(field2);

            console.log(uiRegistry)



            return this._super();

        },
    });
});