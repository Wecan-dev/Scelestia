this["wc-checkout-field-editor"]=this["wc-checkout-field-editor"]||{},this["wc-checkout-field-editor"].admin=function(e){var t={};function i(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,i),o.l=!0,o.exports}return i.m=e,i.c=t,i.d=function(e,t,n){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)i.d(n,o,function(t){return e[t]}.bind(null,o));return n},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="",i(i.s=0)}([function(e,t,i){i(1),e.exports=i(5)},function(e,t){jQuery(document).ready(function(e){function t(){e("#wc_checkout_fields tbody tr").each(function(t,i){e("input.field_order",i).val(parseInt(e(i).index("#wc_checkout_fields tbody tr")),10)})}e("table#wc_checkout_fields tbody").sortable({items:"tr",cursor:"move",axis:"y",handle:"td",scrollSensitivity:40,helper:function(t,i){return i.children().each(function(){e(this).width(e(this).width())}),i.css("left","0"),i},start:function(e,t){t.item.css("background-color","#f6f6f6")},stop:function(e,i){i.item.removeAttr("style"),t()}}),e("tr.new_row").find(".wc-enhanced-select").each(function(){e(this).select2("destroy")}),e("a.new_row").click(function(){var i=e("#wc_checkout_fields tbody tr").length;i++;var n=e("tr.new_row").clone();return html=e(n).html(),html=html.replace(/\[0\]/g,"["+i+"]"),e(n).html(html),e(n).removeClass("new_row").appendTo("#checkout_fields").show(),e("table#wc_checkout_fields tr:not(.new_row) .enhanced").each(function(t,i){e(this).removeClass("enhanced")}),e(document.body).trigger("wc-enhanced-select-init"),t(),!1}),e("a.enable_row").click(function(){var t=e("#wc_checkout_fields tbody").find(".check-column input:checked");return e(t).each(function(){var t=e(this).closest("tr");t.removeClass("disabled"),t.find(".field_enabled").val("1")}),!1}),e("a.disable_row").click(function(){var t=e("#wc_checkout_fields tbody").find(".check-column input:checked");return e(t).each(function(){var t=e(this).closest("tr");t.addClass("disabled"),t.find(".field_enabled").val("0")}),!1}),e("table#wc_checkout_fields").on("change","td.enabled input",function(){e(this).is(":checked")?e(this).closest("tr").removeClass("disabled"):e(this).closest("tr").addClass("disabled")}),e("table#wc_checkout_fields").on("change","select.field_type",function(){var t=e(this).val();e(this).closest("tr").find(".field-options input.placeholder, .field-options input.options, .field-options .na, .field-validation .options, .field-validation .na").hide(),"select"===t||"multiselect"===t||"radio"===t?e(this).closest("tr").find(".field-options .options, .field-validation .options").show():"heading"===t?e(this).closest("tr").find(".field-options .na, .field-validation .na").show():"checkbox"===t?(e(this).closest("tr").find(".field-validation .options").show(),e(this).closest("tr").find(".field-options .na").show()):e(this).closest("tr").find(".field-options .placeholder, .field-validation .options").show()}),e("#wc_checkout_fields").find(".field-options input.placeholder, .field-options input.options").hide(),e("#wc_checkout_fields td.enabled input").change(),e("#wc_checkout_fields select.field_type").change(),e("table#wc_checkout_fields").find('tr[data-field-name="order_comments"] .field-options .placeholder').show(),e("table#wc_checkout_fields").find('tr[data-field-name="order_comments"] .field-options .na').hide()})},,,,function(e,t){}]);
//# sourceMappingURL=admin.js.map