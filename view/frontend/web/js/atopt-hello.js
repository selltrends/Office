define([
    "jquery",
    "jquery/ui"
], function ($) {
    "use strict";

    $.widget('mage.atoptHello', {
        options: {},
        _create: function () {
            alert(this.options);
            //my code here
        }
    });

    return $.mage.atoptHello;
});