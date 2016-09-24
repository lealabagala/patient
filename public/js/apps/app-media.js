/*!
 * remark v1.0.0 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingSurge
 * Licensed under the Themeforest Standard Licenses
 */
(function (document, window, $) {
    "use strict";
    var $win = $(window), $doc = $(document), $body = $(document.body);
    window.AppMedia = App.extend({
        handleArrangement: function () {
            $("#arrangement-grid").on("click", function () {
                var $this = $(this);
                if ($this.hasClass("active")) {
                    return;
                } else {
                    $("#arrangement-list").removeClass("active");
                    $this.addClass("active");
                    $(".medias").removeClass("is-list").addClass("is-grid");
                }
            });
            $("#arrangement-list").on("click", function () {
                var $this = $(this);
                if ($this.hasClass("active")) {
                    return;
                } else {
                    $("#arrangement-grid").removeClass("active");
                    $this.addClass("active");
                    $(".medias").removeClass("is-grid").addClass("is-list");
                }
            });
        },
        handleCheck: function () {
            $(".media-select").on("change", function (e) {
                var $all = $("#media_all");
                $(this).parents(".media-item").toggleClass("item-checked");
                var length = $(".item-checked").length;
                if (length > 0) {
                    $(".site-action").addClass("toggle-action");
                    if (length === $(".media-select").length && !$all.prop("checked")) {
                        $all.prop("checked", true);
                    }
                } else {
                    $(".site-action").removeClass("toggle-action");
                    if ($all.prop("checked")) {
                        $all.prop("checked", false);
                    }
                }
                e.stopPropagation();
            });
            $("#media_all").on("change", function (e) {
                var val = $(e.target).prop("checked");
                $(".media-select input").each(function () {
                    $(this).prop("checked", val).trigger("change");
                });
            });
        },
        handleActive: function () {
            $(document).on("change", ".multi-select", function (e) {
                var checked = $(this).find("input").prop("checked");
                if (checked) {
                    $(this).parents(".media-item").addClass("item-checked");
                } else {
                    $(this).parents(".media-item").removeClass("item-checked");
                }
            });
        },
        handleAction: function () {
            $(document).on("change", ".multi-select", function (e) {
                var $checked = $(".multi-select input:checked"), length = $checked.length;
                if (length > 0) {
                    $(".site-action").addClass("toggle-action");
                } else {
                    $(".site-action").removeClass("toggle-action");
                }
            });
            $(".site-action").on("click", function (e) {
                var $this = $(this);
                if ($this.hasClass("toggle-action")) {
                    $(".select-all input").prop("checked", false).trigger("change");
                    $this.removeClass("toggle-action");
                } else {
                    $("#fileupload").trigger("click");
                }
            });
            $("#fileupload").on("click", function (e) {
                e.stopPropagation();
            });
        },
        handleDropdownAction: function () {
            $(".info-wrap>.dropdown").on("show.bs.dropdown", function () {
                $(this).closest(".media-item").toggleClass("item-active");
            }).on("hidden.bs.dropdown", function () {
                $(this).closest(".media-item").toggleClass("item-active");
            });
            $(".info-wrap .dropdown-menu").on("click", function (e) {
                e.stopPropagation();
            });
        },
        run: function (next) {
            $(".media-item-actions").on("click", function (e) {
                e.stopPropagation();
            });
            $(".checkbox").on("click", function (e) {
                e.stopPropagation();
            });
            this.handleArrangement();
            this.handleAction();
            this.handleActive();
            this.handleMultiSelect();
            this.handleDropdownAction();
        }
    });
})(document, window, jQuery);