/*! animateCSS - v1.2.1 - 2015-10-18
 * https://github.com/craigmdennis/animateCSS
 * Copyright (c) 2015 Craig Dennis; Licensed MIT */

(function () {
  "use strict";
  var a;
  (a = jQuery),
    a.fn.extend({
      animateCSS: function (b, c) {
        var d, e, f, g, h, i, j, k, l, m;
        return (
          (k = {
            effect: b,
            delay: 0,
            animationClass: "animated",
            infinite: !1,
            callback: c,
            duration: 1e3,
            debug: !1
          }),
          (l =
            "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend"),
          (k = a.extend(k, c)),
          (h = function (a) {
            return e(a);
          }),
          (e = function (a) {
            return (
              k.infinite === !0 && (k.animationClass += " infinite"),
              setTimeout(function () {
                return j(a), m(a), d(a), g(a);
              }, k.delay)
            );
          }),
          (d = function (a) {
            return a.addClass(k.effect + " " + k.animationClass + " ");
          }),
          (m = function (a) {
            return (
              "hidden" === a.css("visibility") &&
                a.css("visibility", "visible"),
              a.is(":hidden") ? a.show() : void 0
            );
          }),
          (i = function (a) {
            return a.removeClass(k.effect + " " + k.animationClass);
          }),
          (j = function (a) {
            return a.css({
              "-webkit-animation-duration": k.duration + "ms",
              "-moz-animation-duration": k.duration + "ms",
              "-o-animation-duration": k.duration + "ms",
              "animation-duration": k.duration + "ms"
            });
          }),
          (f = function (a) {
            return (
              k.infinite === !1 && i(a),
              "function" == typeof k.callback ? k.callback.call(a) : void 0
            );
          }),
          (g = function (a) {
            return a.one(l, function (b) {
              return b.stopPropagation(), f(a);
            });
          }),
          this.each(function () {
            return h(a(this));
          })
        );
      }
    });
}).call(this);
