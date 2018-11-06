define([
    'Magento_Ui/js/form/components/insert-listing',
    'mageUtils'
], function (InsertListing, utils) {
    'use strict';

    return InsertListing.extend({
        defaults: {
            requestFieldName: 'entity_id',
            filterFieldName: 'entity_id',
        },

        requestData: function (params, ajaxSettings) {
            var query = utils.copy(params);
            query[this.filterFieldName] = this.getMenuId();
            return this._super(query, ajaxSettings)
        },

        getMenuId: function () {
            var regex = new RegExp('/' + this.requestFieldName + '/([^/]+)/');
            return regex.exec(window.location.href)[1];
        }
    });
});