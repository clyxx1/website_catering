(function ($) {
  "use strict";

  wp.customize.controlConstructor["bloglo-sortable"] =
    wp.customize.Control.extend({
      ready: function () {
        "use strict";

        var control = this;

        // Setup sortable.
        if (control.params.sortable) {
          control.container.find("ul").sortable({
            items: "> .bloglo-sortable-item",
            intersect: "pointer",
            axis: "y",
            update: function () {
              control.update();
            },
          });
        }

        // Set visibility.
        control.container.on("click", ".dashicons-visibility", function () {
          $(this).closest(".bloglo-sortable-item").toggleClass("invisible");
          control.update();
        });
      },

      update: function () {
        var items = this.container.find(".bloglo-sortable-item"),
          new_val = {},
          $item;

        if (!_.isEmpty(items)) {
          _.each(items, function (item) {
            $item = $(item);
            new_val[$item.data("value")] = !$item.hasClass("invisible");
          });
        }

        this.setting.set({});
        this.setting.set(new_val);
      },
    });
})(jQuery);
