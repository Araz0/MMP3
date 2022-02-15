/*!
 * artplayer.js v4.2.6
 * Github: https://github.com/zhw2590582/ArtPlayer#readme
 * (c) 2017-2022 Harvey Zack
 * Released under the MIT License.
 */

! function (t, e) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).Artplayer = e()
}(this, (function () {
    "use strict";

    function t(t, e) {
        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
    }

    function e(t, e) {
        for (var r = 0; r < e.length; r++) {
            var n = e[r];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }

    function r(t, r, n) {
        return r && e(t.prototype, r), n && e(t, n), t
    }

    function n(t) {
        if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return t
    }

    function o(t, e) {
        return o = Object.setPrototypeOf || function (t, e) {
            return t.__proto__ = e, t
        }, o(t, e)
    }

    function i(t, e) {
        if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
        t.prototype = Object.create(e && e.prototype, {
            constructor: {
                value: t,
                writable: !0,
                configurable: !0
            }
        }), e && o(t, e)
    }

    function a(t) {
        return a = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
            return typeof t
        } : function (t) {
            return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
        }, a(t)
    }

    function c(t, e) {
        if (e && ("object" === a(e) || "function" == typeof e)) return e;
        if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined");
        return n(t)
    }

    function s(t) {
        return s = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
            return t.__proto__ || Object.getPrototypeOf(t)
        }, s(t)
    } ! function (t, e) {
        void 0 === e && (e = {});
        var r = e.insertAt;
        if (t && "undefined" != typeof document) {
            var n = document.head || document.getElementsByTagName("head")[0],
                o = document.createElement("style");
            o.type = "text/css", "top" === r && n.firstChild ? n.insertBefore(o, n.firstChild) : n.appendChild(o), o.styleSheet ? o.styleSheet.cssText = t : o.appendChild(document.createTextNode(t))
        }
    }('.art-video-player{zoom:1;-webkit-tap-highlight-color:rgba(0,0,0,0);-ms-high-contrast-adjust:none;background-color:#000;color:#eee;direction:ltr;display:flex;font-family:Roboto,Arial,Helvetica,sans-serif;font-size:14px;height:100%;line-height:1.3;margin:0 auto;outline:0;position:relative;text-align:left;touch-action:manipulation;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;width:100%;z-index:20}.art-video-player *{box-sizing:border-box;margin:0;padding:0}.art-video-player ::-webkit-scrollbar{height:5px;width:5px}.art-video-player ::-webkit-scrollbar-thumb{background-color:#666}.art-video-player ::-webkit-scrollbar-thumb:hover{background-color:#ccc}.art-video-player .art-icon{align-items:center;display:inline-flex;justify-content:center;line-height:1.5}.art-video-player .art-icon svg{fill:#fff}.art-video-player img{max-width:100%;vertical-align:top}@supports ((-webkit-backdrop-filter:initial) or (backdrop-filter:initial)){.art-video-player .art-backdrop-filter{-webkit-backdrop-filter:saturate(180%) blur(20px);backdrop-filter:saturate(180%) blur(20px);background-color:rgba(0,0,0,.7)!important}}.art-video-player .art-video{background-color:#000;cursor:pointer;z-index:10}.art-video-player .art-poster,.art-video-player .art-video{bottom:0;height:100%;left:0;position:absolute;right:0;top:0;width:100%}.art-video-player .art-poster{background-position:50%;background-repeat:no-repeat;background-size:cover;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;z-index:11}.art-video-player .art-subtitle{bottom:10px;color:#fff;display:none;font-size:20px;padding:0 20px;pointer-events:none;position:absolute;text-align:center;text-shadow:.5px .5px .5px rgba(0,0,0,.5);width:100%;z-index:20}.art-video-player .art-subtitle p{height:-webkit-fit-content;height:-moz-fit-content;height:fit-content;line-height:1.2;margin:5px 0 0;word-break:break-all}.art-video-player .art-bilingual p:nth-child(n+2){transform:scale(.6);transform-origin:center top}.art-video-player.art-subtitle-show .art-subtitle{display:block}.art-video-player.art-control-show .art-subtitle{bottom:50px}.art-video-player .art-danmuku{z-index:30}.art-video-player .art-danmuku,.art-video-player .art-layers{bottom:0;height:100%;left:0;overflow:hidden;pointer-events:none;position:absolute;right:0;top:0;width:100%}.art-video-player .art-layers{display:none;z-index:40}.art-video-player .art-layers .art-layer{pointer-events:auto}.art-video-player.art-layer-show .art-layers{display:block}.art-video-player .art-mask{align-items:center;bottom:0;display:none;height:100%;justify-content:center;left:0;overflow:hidden;pointer-events:none;position:absolute;right:0;top:0;width:100%;z-index:50}.art-video-player .art-mask .art-state{align-items:center;display:flex;height:60px;justify-content:center;opacity:.6;width:60px}.art-video-player.art-mask-show .art-mask{display:flex}.art-video-player .art-loading{align-items:center;bottom:0;display:none;height:100%;justify-content:center;left:0;pointer-events:none;position:absolute;right:0;top:0;width:100%;z-index:70}.art-video-player.art-loading-show .art-loading{display:flex}.art-video-player .art-bottom{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAADGCAYAAAAT+OqFAAAAdklEQVQoz42QQQ7AIAgEF/T/D+kbq/RWAlnQyyazA4aoAB4FsBSA/bFjuF1EOL7VbrIrBuusmrt4ZZORfb6ehbWdnRHEIiITaEUKa5EJqUakRSaEYBJSCY2dEstQY7AuxahwXFrvZmWl2rh4JZ07z9dLtesfNj5q0FU3A5ObbwAAAABJRU5ErkJggg==) repeat-x bottom;bottom:0;display:flex;flex-direction:column;height:100px;justify-content:space-between;left:0;opacity:0;padding:50px 10px 0;pointer-events:none;position:absolute;right:0;transition:all .2s ease-in-out;visibility:hidden;z-index:60}.art-video-player .art-bottom .art-progress{pointer-events:auto;position:relative;z-index:0}.art-video-player .art-bottom .art-progress .art-control-progress{align-items:center;cursor:pointer;display:flex;flex-direction:row;height:4px;position:relative}.art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner{align-items:center;background:hsla(0,0%,100%,.2);display:flex;height:50%;position:relative;width:100%}.art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-loaded{background:hsla(0,0%,100%,.4);bottom:0;height:100%;left:0;position:absolute;right:0;top:0;width:0;z-index:10}.art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-played{bottom:0;height:100%;left:0;position:absolute;right:0;top:0;width:0;z-index:20}.art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-highlight{bottom:0;height:100%;left:0;pointer-events:none;position:absolute;right:0;top:0;z-index:30}.art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-highlight span{background:#fff;display:inline-block;height:100%;left:0;pointer-events:auto;position:absolute;top:0;width:7px}.art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-indicator{align-items:center;border-radius:50%;justify-content:center;position:absolute;transform:scale(.1);transition:transform .1s ease-in-out;visibility:hidden;z-index:40}.art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-indicator .art-icon{height:100%;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;width:100%}.art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-tip{background:rgba(0,0,0,.7);border-radius:3px;color:#fff;display:none;font-size:12px;font-weight:700;height:20px;left:0;line-height:20px;padding:0 5px;position:absolute;text-align:center;top:-25px;white-space:nowrap;z-index:50}.art-video-player .art-bottom .art-progress .art-control-thumbnails{background-color:rgba(0,0,0,.7);bottom:8px;display:none;left:0;pointer-events:none;position:absolute}.art-video-player .art-bottom .art-progress .art-control-loop{bottom:0;display:none;height:100%;left:0;pointer-events:none;position:absolute;right:0;top:0;width:100%}.art-video-player .art-bottom .art-progress .art-control-loop .art-loop-point{background:hsla(0,0%,100%,.75);height:8px;left:0;position:absolute;top:-2px;width:2px}.art-video-player .art-bottom .art-controls{align-items:center;display:flex;height:45px;justify-content:space-between;pointer-events:auto;position:relative;z-index:1}.art-video-player .art-bottom .art-controls .art-controls-left,.art-video-player .art-bottom .art-controls .art-controls-right{display:flex}.art-video-player .art-bottom .art-controls .art-control{align-items:center;cursor:pointer;display:flex;font-size:12px;line-height:1;min-height:36px;min-width:36px;opacity:.9;text-align:center;white-space:nowrap}.art-video-player .art-bottom .art-controls .art-control .art-icon{align-items:center;display:flex;float:left;height:36px;justify-content:center;width:36px}.art-video-player .art-bottom .art-controls .art-control:hover{opacity:1}.art-video-player .art-bottom .art-controls .art-control-onlyText{padding:0 10px}.art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel{float:left;height:100%;overflow:hidden;position:relative;transition:margin .2s cubic-bezier(.4,0,1,1),width .2s cubic-bezier(.4,0,1,1);width:0}.art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel .art-volume-slider-handle{background:#fff;border-radius:12px;height:12px;left:0;margin-top:-6px;position:absolute;top:50%;width:12px}.art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel .art-volume-slider-handle:before{background:#fff;left:-54px}.art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel .art-volume-slider-handle:after{background:hsla(0,0%,100%,.2);left:6px}.art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel .art-volume-slider-handle:after,.art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel .art-volume-slider-handle:before{content:"";display:block;height:3px;margin-top:-2px;position:absolute;top:50%;width:60px}.art-video-player .art-bottom .art-controls .art-control-volume:hover .art-volume-panel{width:60px}.art-video-player .art-bottom .art-controls .art-control-quality{position:relative;z-index:30}.art-video-player .art-bottom .art-controls .art-control-quality .art-qualitys{background:rgba(0,0,0,.8);border-radius:3px;bottom:35px;color:#fff;display:none;padding:5px 0;position:absolute;text-align:center;width:100px}.art-video-player .art-bottom .art-controls .art-control-quality .art-qualitys .art-quality-item{height:30px;line-height:30px;overflow:hidden;text-overflow:ellipsis;text-shadow:0 0 2px rgba(0,0,0,.5);white-space:nowrap}.art-video-player .art-bottom .art-controls .art-control-quality .art-qualitys .art-quality-item:hover{background-color:hsla(0,0%,100%,.1)}.art-video-player .art-bottom .art-controls .art-control-quality:hover .art-qualitys{display:block}.art-video-player .art-bottom:hover .art-progress .art-control-progress .art-control-progress-inner{height:100%}.art-video-player .art-bottom:hover .art-progress .art-control-progress .art-control-progress-inner .art-progress-indicator{transform:scale(1);visibility:visible}.art-video-player.art-control-show .art-bottom,.art-video-player.art-hover .art-bottom{opacity:1;visibility:visible}.art-video-player.art-destroy .art-progress-indicator,.art-video-player.art-destroy .art-progress-tip,.art-video-player.art-error .art-progress-indicator,.art-video-player.art-error .art-progress-tip{display:none!important}.art-video-player.art-mobile .art-progress-indicator{transform:scale(1)!important;visibility:visible!important}.art-video-player .art-notice{display:none;font-size:14px;left:0;padding:10px;pointer-events:none;position:absolute;top:0;width:100%;z-index:80}.art-video-player .art-notice .art-notice-inner{background-color:rgba(0,0,0,.6);border-radius:3px;color:#fff;display:inline-block;padding:5px 10px}.art-video-player.art-notice-show .art-notice{display:flex}.art-video-player .art-contextmenus{background-color:rgba(0,0,0,.9);border-radius:3px;display:none;flex-direction:column;left:10px;min-width:200px;padding:5px 0;position:absolute;top:10px;z-index:120}.art-video-player .art-contextmenus .art-contextmenu{border-bottom:1px solid hsla(0,0%,100%,.1);color:#fff;cursor:pointer;display:block;font-size:12px;overflow:hidden;padding:10px 15px;text-overflow:ellipsis;text-shadow:0 0 2px rgba(0,0,0,.5);white-space:nowrap}.art-video-player .art-contextmenus .art-contextmenu a{color:#fff;text-decoration:none}.art-video-player .art-contextmenus .art-contextmenu span{display:inline-block;padding:0 7px}.art-video-player .art-contextmenus .art-contextmenu span.art-current,.art-video-player .art-contextmenus .art-contextmenu span:hover{color:#00c9ff}.art-video-player .art-contextmenus .art-contextmenu:hover{background-color:hsla(0,0%,100%,.1)}.art-video-player .art-contextmenus .art-contextmenu:last-child{border-bottom:none}.art-video-player.art-contextmenu-show .art-contextmenus{display:flex}.art-video-player .art-settings{align-items:center;display:flex;height:100%;justify-content:center;left:0;opacity:0;overflow:hidden;pointer-events:none;position:absolute;top:0;visibility:hidden;width:100%;z-index:90}.art-video-player .art-settings .art-setting-inner{background-color:rgba(0,0,0,.9);bottom:0;font-size:12px;height:100%;overflow:auto;position:absolute;right:-300px;top:0;transition:all .2s ease-in-out;width:300px}.art-video-player .art-settings .art-setting-inner .art-setting-body{height:100%;overflow-y:auto;width:100%}.art-video-player .art-settings .art-setting-inner .art-setting-body .art-setting{border-bottom:1px solid hsla(0,0%,100%,.1);padding:10px 15px}.art-video-player .art-settings .art-setting-inner .art-setting-body .art-setting .art-setting-header{margin-bottom:5px}.art-video-player .art-settings .art-setting-radio{display:flex}.art-video-player .art-settings .art-setting-radio .art-radio-item{flex:1;padding:0 2px}.art-video-player .art-settings .art-setting-radio .art-radio-item button{background-color:hsla(0,0%,100%,.2);border:none;border-radius:2px;color:#fff;height:22px;outline:none;width:100%}.art-video-player .art-settings .art-setting-radio .art-radio-item.current button,.art-video-player .art-settings .art-setting-radio .art-radio-item button:active{background-color:#00a1d6}.art-video-player .art-settings .art-setting-range input{-webkit-appearance:none;-moz-appearance:none;appearance:none;background-color:hsla(0,0%,100%,.5);height:3px;outline:none;width:100%}.art-video-player .art-settings .art-setting-checkbox{align-items:center;display:flex}.art-video-player .art-settings .art-setting-checkbox input{height:14px;margin-right:5px;width:14px}.art-video-player .art-settings .art-setting-upload{display:flex}.art-video-player .art-settings .art-setting-upload .art-upload-btn{background-color:hsla(0,0%,100%,.2);border:none;border-radius:2px;color:#fff;height:22px;line-height:22px;outline:none;text-align:center;width:80px}.art-video-player .art-settings .art-setting-upload .art-upload-value{flex:1;height:22px;line-height:22px;overflow:hidden;padding-left:10px;text-overflow:ellipsis;white-space:nowrap}.art-video-player.art-setting-show .art-settings{opacity:1;pointer-events:auto;visibility:visible}.art-video-player.art-setting-show .art-settings .art-setting-inner{right:0}.art-video-player .art-info{-webkit-font-smoothing:antialiased;background-color:rgba(0,0,0,.9);color:#fff;display:none;flex-direction:column;font-family:Noto Sans CJK SC DemiLight,Roboto,Segoe UI,Tahoma,Arial,Helvetica,sans-serif;font-size:12px;left:10px;padding:10px;position:absolute;top:10px;width:350px;z-index:100}.art-video-player .art-info .art-info-item{display:flex;margin-bottom:5px}.art-video-player .art-info .art-info-item .art-info-title{text-align:right;width:100px}.art-video-player .art-info .art-info-item .art-info-content{flex:1;overflow:hidden;padding-left:5px;text-overflow:ellipsis;white-space:nowrap}.art-video-player .art-info .art-info-item:last-child{margin-bottom:0}.art-video-player .art-info .art-info-close{cursor:pointer;position:absolute;right:5px;top:5px}.art-video-player.art-info-show .art-info{display:flex}.art-video-player.art-hide-cursor *{cursor:none!important}.art-video-player[data-aspect-ratio] video{box-sizing:content-box;-o-object-fit:fill;object-fit:fill}.art-video-player.art-fullscreen-web{bottom:0;height:100%!important;left:0;position:fixed;right:0;top:0;width:100%!important;z-index:9999}.art-fullscreen-rotate{background-color:#000;bottom:0;height:100%;left:0;position:fixed;right:0;top:0;width:100%;z-index:9999}.art-video-player .art-mini-header{align-items:center;background-color:rgba(0,0,0,.5);color:#fff;display:none;height:35px;justify-content:space-between;left:0;line-height:35px;opacity:0;position:absolute;right:0;top:0;transition:all .2s ease-in-out;visibility:hidden;z-index:110}.art-video-player .art-mini-header .art-mini-title{cursor:move;flex:1;overflow:hidden;padding:0 10px;text-overflow:ellipsis;white-space:nowrap}.art-video-player .art-mini-header .art-mini-close{cursor:pointer;font-size:22px;text-align:center;width:35px}.art-video-player.art-is-dragging{opacity:.7}.art-video-player.art-mini{box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 3px 6px 0 rgba(0,0,0,.2);height:225px;position:fixed;width:400px;z-index:9999}.art-video-player.art-mini .art-mini-header{display:flex;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.art-video-player.art-mini.art-hover .art-mini-header{opacity:1;visibility:visible}.art-video-player.art-mini .art-mask .art-state{position:static}.art-video-player.art-mini .art-bottom,.art-video-player.art-mini .art-contextmenu,.art-video-player.art-mini .art-danmu,.art-video-player.art-mini .art-info,.art-video-player.art-mini .art-layers,.art-video-player.art-mini .art-notice,.art-video-player.art-mini .art-setting,.art-video-player.art-mini .art-subtitle{display:none!important}.art-auto-size{align-items:center;display:flex;justify-content:center}.art-video-player[data-flip=horizontal] .art-video{transform:scaleX(-1)}.art-video-player[data-flip=vertical] .art-video{transform:scaleY(-1)}.art-video-player .art-layers .art-layer-log{background-color:rgba(0,0,0,.5);border-radius:3px;bottom:10px;color:#fff;display:none;font-size:13px;left:10px;padding:5px;pointer-events:none;position:absolute;text-shadow:0 0 2px rgba(0,0,0,.5);-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;width:120px}.art-video-player .art-layers .art-layer-log p{margin-bottom:0;word-break:break-all}.art-video-player .art-control-selector{position:relative}.art-video-player .art-control-selector .art-selector-list{background-color:rgba(0,0,0,.8);border-radius:3px;bottom:35px;color:#fff;display:none;max-height:200px;max-width:200px;min-width:100px;overflow:auto;padding:5px 0;position:absolute;text-align:center}.art-video-player .art-control-selector .art-selector-list .art-selector-item{height:30px;line-height:30px;overflow:hidden;padding:0 5px;text-overflow:ellipsis;text-shadow:0 0 2px rgba(0,0,0,.5);white-space:nowrap}.art-video-player .art-control-selector .art-selector-list .art-selector-item:hover{background-color:hsla(0,0%,100%,.1)}.art-video-player .art-control-selector .art-selector-list .art-selector-item.art-current,.art-video-player .art-control-selector .art-selector-list .art-selector-item:hover{color:#00c9ff}.art-video-player .art-control-selector:hover .art-selector-list{display:block}:root{--balloon-color:hsla(0,0%,6%,.95);--balloon-font-size:12px;--balloon-move:4px}button[aria-label][data-balloon-pos]{overflow:visible}[aria-label][data-balloon-pos]{cursor:pointer;position:relative}[aria-label][data-balloon-pos]:after{background:var(--balloon-color);border-radius:2px;color:#fff;content:attr(aria-label);font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Open Sans,Helvetica Neue,sans-serif;font-size:var(--balloon-font-size);font-style:normal;font-weight:400;line-height:1.2;padding:.5em 1em;text-indent:0;text-shadow:none;white-space:nowrap}[aria-label][data-balloon-pos]:after,[aria-label][data-balloon-pos]:before{opacity:0;pointer-events:none;position:absolute;transition:all .18s ease-out .18s;z-index:10}[aria-label][data-balloon-pos]:before{border:5px solid transparent;border-top:5px solid var(--balloon-color);content:"";height:0;width:0}[aria-label][data-balloon-pos]:hover:after,[aria-label][data-balloon-pos]:hover:before{opacity:1;pointer-events:none}[aria-label][data-balloon-pos][data-balloon-pos=up]:after{margin-bottom:10px}[aria-label][data-balloon-pos][data-balloon-pos=up]:after,[aria-label][data-balloon-pos][data-balloon-pos=up]:before{bottom:100%;left:50%;transform:translate(-50%,var(--balloon-move));transform-origin:top}[aria-label][data-balloon-pos][data-balloon-pos=up]:hover:after,[aria-label][data-balloon-pos][data-balloon-pos=up]:hover:before{transform:translate(-50%)}');
    "undefined" != typeof globalThis ? globalThis : "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self && self;
    var l = {
        exports: {}
    };
    ! function (t, e) {
        t.exports = function () {
            function t(e) {
                return (t = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                    return typeof t
                } : function (t) {
                    return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
                })(e)
            }
            var e = Object.prototype.toString,
                r = function (r) {
                    if (void 0 === r) return "undefined";
                    if (null === r) return "null";
                    var o = t(r);
                    if ("boolean" === o) return "boolean";
                    if ("string" === o) return "string";
                    if ("number" === o) return "number";
                    if ("symbol" === o) return "symbol";
                    if ("function" === o) return function (t) {
                        return "GeneratorFunction" === n(t)
                    }(r) ? "generatorfunction" : "function";
                    if (function (t) {
                        return Array.isArray ? Array.isArray(t) : t instanceof Array
                    }(r)) return "array";
                    if (function (t) {
                        return !(!t.constructor || "function" != typeof t.constructor.isBuffer) && t.constructor.isBuffer(t)
                    }(r)) return "buffer";
                    if (function (t) {
                        try {
                            if ("number" == typeof t.length && "function" == typeof t.callee) return !0
                        } catch (t) {
                            if (-1 !== t.message.indexOf("callee")) return !0
                        }
                        return !1
                    }(r)) return "arguments";
                    if (function (t) {
                        return t instanceof Date || "function" == typeof t.toDateString && "function" == typeof t.getDate && "function" == typeof t.setDate
                    }(r)) return "date";
                    if (function (t) {
                        return t instanceof Error || "string" == typeof t.message && t.constructor && "number" == typeof t.constructor.stackTraceLimit
                    }(r)) return "error";
                    if (function (t) {
                        return t instanceof RegExp || "string" == typeof t.flags && "boolean" == typeof t.ignoreCase && "boolean" == typeof t.multiline && "boolean" == typeof t.global
                    }(r)) return "regexp";
                    switch (n(r)) {
                        case "Symbol":
                            return "symbol";
                        case "Promise":
                            return "promise";
                        case "WeakMap":
                            return "weakmap";
                        case "WeakSet":
                            return "weakset";
                        case "Map":
                            return "map";
                        case "Set":
                            return "set";
                        case "Int8Array":
                            return "int8array";
                        case "Uint8Array":
                            return "uint8array";
                        case "Uint8ClampedArray":
                            return "uint8clampedarray";
                        case "Int16Array":
                            return "int16array";
                        case "Uint16Array":
                            return "uint16array";
                        case "Int32Array":
                            return "int32array";
                        case "Uint32Array":
                            return "uint32array";
                        case "Float32Array":
                            return "float32array";
                        case "Float64Array":
                            return "float64array"
                    }
                    if (function (t) {
                        return "function" == typeof t.throw && "function" == typeof t.return && "function" == typeof t.next
                    }(r)) return "generator";
                    switch (o = e.call(r)) {
                        case "[object Object]":
                            return "object";
                        case "[object Map Iterator]":
                            return "mapiterator";
                        case "[object Set Iterator]":
                            return "setiterator";
                        case "[object String Iterator]":
                            return "stringiterator";
                        case "[object Array Iterator]":
                            return "arrayiterator"
                    }
                    return o.slice(8, -1).toLowerCase().replace(/\s/g, "")
                };

            function n(t) {
                return t.constructor ? t.constructor.name : null
            }

            function o(t, e) {
                var n = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : ["option"];
                return i(t, e, n), a(t, e, n),
                    function (t, e, n) {
                        var c = r(e),
                            s = r(t);
                        if ("object" === c) {
                            if ("object" !== s) throw new Error("[Type Error]: '".concat(n.join("."), "' require 'object' type, but got '").concat(s, "'"));
                            Object.keys(e).forEach((function (r) {
                                var c = t[r],
                                    s = e[r],
                                    l = n.slice();
                                l.push(r), i(c, s, l), a(c, s, l), o(c, s, l)
                            }))
                        }
                        if ("array" === c) {
                            if ("array" !== s) throw new Error("[Type Error]: '".concat(n.join("."), "' require 'array' type, but got '").concat(s, "'"));
                            t.forEach((function (r, c) {
                                var s = t[c],
                                    l = e[c] || e[0],
                                    u = n.slice();
                                u.push(c), i(s, l, u), a(s, l, u), o(s, l, u)
                            }))
                        }
                    }(t, e, n), t
            }

            function i(t, e, n) {
                if ("string" === r(e)) {
                    var o = r(t);
                    if ("?" === e[0] && (e = e.slice(1) + "|undefined"), !(-1 < e.indexOf("|") ? e.split("|").map((function (t) {
                        return t.toLowerCase().trim()
                    })).filter(Boolean).some((function (t) {
                        return o === t
                    })) : e.toLowerCase().trim() === o)) throw new Error("[Type Error]: '".concat(n.join("."), "' require '").concat(e, "' type, but got '").concat(o, "'"))
                }
            }

            function a(t, e, n) {
                if ("function" === r(e)) {
                    var o = e(t, r(t), n);
                    if (!0 !== o) {
                        var i = r(o);
                        throw "string" === i ? new Error(o) : "error" === i ? o : new Error("[Validator Error]: The scheme for '".concat(n.join("."), "' validator require return true, but got '").concat(o, "'"))
                    }
                }
            }
            return o.kindOf = r, o
        }()
    }(l);
    var u = l.exports,
        p = function () {
            function e() {
                t(this, e)
            }
            return r(e, [{
                key: "on",
                value: function (t, e, r) {
                    var n = this.e || (this.e = {});
                    return (n[t] || (n[t] = [])).push({
                        fn: e,
                        ctx: r
                    }), this
                }
            }, {
                key: "once",
                value: function (t, e, r) {
                    var n = this;

                    function o() {
                        n.off(t, o);
                        for (var i = arguments.length, a = new Array(i), c = 0; c < i; c++) a[c] = arguments[c];
                        e.apply(r, a)
                    }
                    return o._ = e, this.on(t, o, r)
                }
            }, {
                key: "emit",
                value: function (t) {
                    for (var e = ((this.e || (this.e = {}))[t] || []).slice(), r = arguments.length, n = new Array(r > 1 ? r - 1 : 0), o = 1; o < r; o++) n[o - 1] = arguments[o];
                    for (var i = 0; i < e.length; i += 1) e[i].fn.apply(e[i].ctx, n);
                    return this
                }
            }, {
                key: "off",
                value: function (t, e) {
                    var r = this.e || (this.e = {}),
                        n = r[t],
                        o = [];
                    if (n && e)
                        for (var i = 0, a = n.length; i < a; i += 1) n[i].fn !== e && n[i].fn._ !== e && o.push(n[i]);
                    return o.length ? r[t] = o : delete r[t], this
                }
            }]), e
        }(),
        f = "undefined" != typeof window ? window.navigator.userAgent : "",
        d = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(f),
        h = /^((?!chrome|android).)*safari/i.test(f),
        v = /MicroMessenger/i.test(f),
        y = /MSIE|Trident/i.test(f);

    function g(t) {
        var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : document;
        return e.querySelector(t)
    }

    function m(t) {
        var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : document;
        return Array.from(e.querySelectorAll(t))
    }

    function b(t, e) {
        return t.classList.add(e)
    }

    function w(t, e) {
        return t.classList.remove(e)
    }

    function x(t, e) {
        return t.classList.contains(e)
    }

    function O(t, e) {
        return e instanceof Element ? t.appendChild(e) : t.insertAdjacentHTML("beforeend", String(e)), t.lastElementChild || t.lastChild
    }

    function k(t, e, r) {
        return t.style[e] = r, t
    }

    function j(t, e) {
        return Object.keys(e).forEach((function (r) {
            k(t, r, e[r])
        })), t
    }

    function P(t, e) {
        var r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2],
            n = window.getComputedStyle(t, null).getPropertyValue(e);
        return r ? parseFloat(n) : n
    }

    function S(t) {
        return Array.from(t.parentElement.children).filter((function (e) {
            return e !== t
        }))
    }

    function R(t, e) {
        S(t).forEach((function (t) {
            return w(t, e)
        })), b(t, e)
    }

    function E(t, e) {
        var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "up";
        d || (t.setAttribute("aria-label", e), t.setAttribute("data-balloon-pos", r))
    }

    function $(t) {
        var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
            r = t.getBoundingClientRect(),
            n = window.innerHeight || document.documentElement.clientHeight,
            o = window.innerWidth || document.documentElement.clientWidth,
            i = r.top - e <= n && r.top + r.height + e >= 0,
            a = r.left - e <= o + e && r.left + r.width + e >= 0;
        return i && a
    }

    function D(t, e) {
        return t.composedPath && t.composedPath().indexOf(e) > -1
    }

    function z(t, e) {
        return e.parentNode.replaceChild(t, e), t
    }

    function T() {
        if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
        if (Reflect.construct.sham) return !1;
        if ("function" == typeof Proxy) return !0;
        try {
            return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () { }))), !0
        } catch (t) {
            return !1
        }
    }

    function C(t, e, r) {
        return C = T() ? Reflect.construct : function (t, e, r) {
            var n = [null];
            n.push.apply(n, e);
            var i = new (Function.bind.apply(t, n));
            return r && o(i, r.prototype), i
        }, C.apply(null, arguments)
    }

    function A(t) {
        var e = "function" == typeof Map ? new Map : void 0;
        return A = function (t) {
            if (null === t || (r = t, -1 === Function.toString.call(r).indexOf("[native code]"))) return t;
            var r;
            if ("function" != typeof t) throw new TypeError("Super expression must either be null or a function");
            if (void 0 !== e) {
                if (e.has(t)) return e.get(t);
                e.set(t, n)
            }

            function n() {
                return C(t, arguments, s(this).constructor)
            }
            return n.prototype = Object.create(t.prototype, {
                constructor: {
                    value: n,
                    enumerable: !1,
                    writable: !0,
                    configurable: !0
                }
            }), o(n, t)
        }, A(t)
    }

    function L(t) {
        var e = function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
                return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () { }))), !0
            } catch (t) {
                return !1
            }
        }();
        return function () {
            var r, n = s(t);
            if (e) {
                var o = s(this).constructor;
                r = Reflect.construct(n, arguments, o)
            } else r = n.apply(this, arguments);
            return c(this, r)
        }
    }
    var M = function (e) {
        i(o, e);
        var r = L(o);

        function o(e, i) {
            var a;
            return t(this, o), a = r.call(this, e), "function" == typeof Error.captureStackTrace && Error.captureStackTrace(n(a), i || a.constructor), a.name = "ArtPlayerError", a
        }
        return o
    }(A(Error));

    function q(t, e) {
        if (!t) throw new M(e);
        return t
    }

    function F(t) {
        return "WEBVTT \r\n\r\n".concat(t.replace(/{[\s\S]*?}/g, "").replace(/\{\\([ibu])\}/g, "</$1>").replace(/\{\\([ibu])1\}/g, "<$1>").replace(/\{([ibu])\}/g, "<$1>").replace(/\{\/([ibu])\}/g, "</$1>").replace(/(\d\d:\d\d:\d\d),(\d\d\d)/g, "$1.$2").concat("\r\n\r\n"))
    }

    function B(t) {
        return URL.createObjectURL(new Blob([t], {
            type: "text/vtt"
        }))
    }

    function I(t) {
        var e = new RegExp("Dialogue:\\s\\d,(\\d+:\\d\\d:\\d\\d.\\d\\d),(\\d+:\\d\\d:\\d\\d.\\d\\d),([^,]*),([^,]*),(?:[^,]*,){4}([\\s\\S]*)$", "i");

        function r() {
            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "";
            return t.split(/[:.]/).map((function (t, e, r) {
                if (e === r.length - 1) {
                    if (1 === t.length) return ".".concat(t, "00");
                    if (2 === t.length) return ".".concat(t, "0")
                } else if (1 === t.length) return (0 === e ? "0" : ":0") + t;
                return 0 === e ? t : e === r.length - 1 ? ".".concat(t) : ":".concat(t)
            })).join("")
        }
        return "WEBVTT\n\n".concat(t.split(/\r?\n/).map((function (t) {
            var n = t.match(e);
            return n ? {
                start: r(n[1].trim()),
                end: r(n[2].trim()),
                text: n[5].replace(/{[\s\S]*?}/g, "").replace(/(\\N)/g, "\n").trim().split(/\r?\n/).map((function (t) {
                    return t.trim()
                })).join("\n")
            } : null
        })).filter((function (t) {
            return t
        })).map((function (t, e) {
            return t ? "".concat(e + 1, "\n").concat(t.start, " --\x3e ").concat(t.end, "\n").concat(t.text) : ""
        })).filter((function (t) {
            return t.trim()
        })).join("\n\n"))
    }

    function V(t) {
        return t.includes("?") ? V(t.split("?")[0]) : t.includes("#") ? V(t.split("#")[0]) : t.trim().toLowerCase().split(".").pop()
    }

    function W(t, e) {
        var r = document.createElement("a");
        r.style.display = "none", r.href = t, r.download = e, document.body.appendChild(r), r.click(), document.body.removeChild(r)
    }

    function H(t, e) {
        (null == e || e > t.length) && (e = t.length);
        for (var r = 0, n = new Array(e); r < e; r++) n[r] = t[r];
        return n
    }

    function N(t) {
        return function (t) {
            if (Array.isArray(t)) return H(t)
        }(t) || function (t) {
            if ("undefined" != typeof Symbol && null != t[Symbol.iterator] || null != t["@@iterator"]) return Array.from(t)
        }(t) || function (t, e) {
            if (t) {
                if ("string" == typeof t) return H(t, e);
                var r = Object.prototype.toString.call(t).slice(8, -1);
                return "Object" === r && t.constructor && (r = t.constructor.name), "Map" === r || "Set" === r ? Array.from(t) : "Arguments" === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r) ? H(t, e) : void 0
            }
        }(t) || function () {
            throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
        }()
    }
    var U = Object.defineProperty,
        _ = Object.prototype.hasOwnProperty;

    function X(t, e) {
        return _.call(t, e)
    }

    function Q(t, e) {
        return Object.getOwnPropertyDescriptor(t, e)
    }

    function Y() {
        for (var t = function (t) {
            return t && "object" === a(t) && !Array.isArray(t)
        }, e = arguments.length, r = new Array(e), n = 0; n < e; n++) r[n] = arguments[n];
        return r.reduce((function (e, r) {
            return Object.keys(r).forEach((function (n) {
                var o = e[n],
                    i = r[n];
                Array.isArray(o) && Array.isArray(i) ? e[n] = o.concat.apply(o, N(i)) : !t(o) || !t(i) || i instanceof Element ? e[n] = i : e[n] = Y(o, i)
            })), e
        }), {})
    }

    function Z() {
        var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
        return new Promise((function (e) {
            return setTimeout(e, t)
        }))
    }

    function J(t, e) {
        var r, n, o = !1;
        return function i() {
            for (var a = arguments.length, c = new Array(a), s = 0; s < a; s++) c[s] = arguments[s];
            if (o) return r = c, void (n = this);
            o = !0, t.apply(this, c), setTimeout((function () {
                o = !1, r && (i.apply(n, r), r = null, n = null)
            }), e)
        }
    }

    function G(t, e, r) {
        return Math.max(Math.min(t, Math.max(e, r)), Math.min(e, r))
    }

    function K(t) {
        var e = Math.floor(t / 3600),
            r = Math.floor((t - 3600 * e) / 60),
            n = Math.floor(t - 3600 * e - 60 * r);
        return (e > 0 ? [e, r, n] : [r, n]).map((function (t) {
            return t < 10 ? "0".concat(t) : String(t)
        })).join(":")
    }

    function tt(t) {
        return t.replace(/[&<>'"]/g, (function (t) {
            return {
                "&": "&amp;",
                "<": "&lt;",
                ">": "&gt;",
                "'": "&#39;",
                '"': "&quot;"
            }[t] || t
        }))
    }
    var et = Object.freeze({
        __proto__: null,
        query: g,
        queryAll: m,
        addClass: b,
        removeClass: w,
        hasClass: x,
        append: O,
        remove: function (t) {
            return t.parentNode.removeChild(t)
        },
        setStyle: k,
        setStyles: j,
        getStyle: P,
        sublings: S,
        inverseClass: R,
        tooltip: E,
        isInViewport: $,
        includeFromEvent: D,
        replaceElement: z,
        ArtPlayerError: M,
        errorHandle: q,
        srtToVtt: F,
        vttToBlob: B,
        assToVtt: I,
        getExt: V,
        download: W,
        def: U,
        has: X,
        get: Q,
        mergeDeep: Y,
        sleep: Z,
        debounce: function (t, e, r) {
            var n;

            function o() {
                for (var o = arguments.length, i = new Array(o), a = 0; a < o; a++) i[a] = arguments[a];
                var c = function () {
                    n = null, t.apply(r, i)
                };
                clearTimeout(n), n = setTimeout(c, e)
            }
            return o.clearTimeout = function () {
                clearTimeout(n)
            }, o
        },
        throttle: J,
        clamp: G,
        secondToTime: K,
        escape: tt,
        userAgent: f,
        isMobile: d,
        isSafari: h,
        isWechat: v,
        isIE: y
    });

    function rt(t, e, r) {
        return e in t ? Object.defineProperty(t, e, {
            value: r,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : t[e] = r, t
    }

    function nt(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function ot(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? nt(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : nt(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }
    var it = "boolean",
        at = "string",
        ct = "number",
        st = "object",
        lt = "function";

    function ut(t, e, r) {
        return q(e === at || t instanceof Element, "".concat(r.join("."), " require '").concat(at, "' or 'Element' type"))
    }
    var pt = {
        html: ut,
        disable: "?".concat(it),
        name: "?".concat(at),
        index: "?".concat(ct),
        style: "?".concat(st),
        click: "?".concat(lt),
        mounted: "?".concat(lt),
        tooltip: "?".concat(at),
        selector: "?".concat("array"),
        onSelect: "?".concat(lt)
    },
        ft = {
            container: ut,
            url: at,
            poster: at,
            title: at,
            type: at,
            theme: at,
            lang: at,
            volume: ct,
            isLive: it,
            muted: it,
            autoplay: it,
            autoSize: it,
            autoMini: it,
            loop: it,
            flip: it,
            rotate: it,
            playbackRate: it,
            aspectRatio: it,
            screenshot: it,
            setting: it,
            hotkey: it,
            pip: it,
            mutex: it,
            backdrop: it,
            fullscreen: it,
            fullscreenWeb: it,
            subtitleOffset: it,
            miniProgressBar: it,
            localVideo: it,
            localSubtitle: it,
            useSSR: it,
            ads: [{
                url: at
            }],
            plugins: [lt],
            whitelist: ["".concat(at, "|").concat(lt, "|").concat("regexp")],
            layers: [pt],
            contextmenu: [pt],
            settings: [pt],
            controls: [ot(ot({}, pt), {}, {
                position: function (t, e, r) {
                    var n = ["top", "left", "right"];
                    return q(n.includes(t), "".concat(r.join("."), " only accept ").concat(n.toString(), " as parameters"))
                }
            })],
            quality: [{
                default: "?".concat(it),
                html: at,
                url: at
            }],
            highlight: [{
                time: ct,
                text: at
            }],
            thumbnails: {
                url: at,
                number: ct,
                column: ct
            },
            subtitle: {
                url: at,
                type: at,
                style: st,
                encoding: at,
                bilingual: it
            },
            moreVideoAttr: st,
            icons: st,
            customType: st
        },
        dt = {
            propertys: ["audioTracks", "autoplay", "buffered", "controller", "controls", "crossOrigin", "currentSrc", "currentTime", "defaultMuted", "defaultPlaybackRate", "duration", "ended", "error", "loop", "mediaGroup", "muted", "networkState", "paused", "playbackRate", "played", "preload", "readyState", "seekable", "seeking", "src", "startDate", "textTracks", "videoTracks", "volume"],
            methods: ["addTextTrack", "canPlayType", "load", "play", "pause"],
            events: ["abort", "canplay", "canplaythrough", "durationchange", "emptied", "ended", "error", "loadeddata", "loadedmetadata", "loadstart", "pause", "play", "playing", "progress", "ratechange", "seeked", "seeking", "stalled", "suspend", "timeupdate", "volumechange", "waiting"],
            prototypes: ["width", "height", "videoWidth", "videoHeight", "poster", "webkitDecodedFrameCount", "webkitDroppedFrameCount", "playsInline", "webkitSupportsFullscreen", "webkitDisplayingFullscreen", "onenterpictureinpicture", "onleavepictureinpicture", "disablePictureInPicture", "cancelVideoFrameCallback", "requestVideoFrameCallback", "getVideoPlaybackQuality", "requestPictureInPicture", "webkitEnterFullScreen", "webkitEnterFullscreen", "webkitExitFullScreen", "webkitExitFullscreen"]
        },
        ht = function () {
            function e(r) {
                t(this, e), this.art = r
            }
            return r(e, [{
                key: "state",
                get: function () {
                    var t = this.art,
                        e = t.option,
                        r = t.constructor.kindOf;
                    return !d || e.whitelist.some((function (t) {
                        switch (r(t)) {
                            case "string":
                                return "*" === t || f.indexOf(t) > -1;
                            case "function":
                                return t(f);
                            case "regexp":
                                return t.test(f);
                            default:
                                return !1
                        }
                    }))
                }
            }]), e
        }(),
        vt = function () {
            function e(r) {
                var n = this;
                t(this, e), this.art = r;
                var o = r.option,
                    i = r.constructor,
                    a = r.whitelist;
                o.container instanceof Element ? this.$container = o.container : (this.$container = g(o.container), q(this.$container, "No container element found by ".concat(o.container)));
                var c = this.$container.tagName.toLowerCase();
                q("div" === c, "Unsupported container element type, only support 'div' but got '".concat(c, "'")), q(i.instances.every((function (t) {
                    return t.template.$container !== n.$container
                })), "Cannot mount multiple instances on the same dom element"), this.query = this.query.bind(this), this.$container.dataset.artId = r.id, this.$original = this.$container.cloneNode(!0), a.state ? this.desktop() : this.mobile()
            }
            return r(e, [{
                key: "query",
                value: function (t) {
                    return g(t, this.$container)
                }
            }, {
                key: "desktop",
                value: function () {
                    var t = this.art.option;
                    t.useSSR || (this.$container.innerHTML = e.html), this.$player = this.query(".art-video-player"), this.$video = this.query(".art-video"), this.$poster = this.query(".art-poster"), this.$subtitle = this.query(".art-subtitle"), this.$danmuku = this.query(".art-danmuku"), this.$bottom = this.query(".art-bottom"), this.$progress = this.query(".art-progress"), this.$controls = this.query(".art-controls"), this.$controlsLeft = this.query(".art-controls-left"), this.$controlsRight = this.query(".art-controls-right"), this.$layer = this.query(".art-layers"), this.$loading = this.query(".art-loading"), this.$notice = this.query(".art-notice"), this.$noticeInner = this.query(".art-notice-inner"), this.$mask = this.query(".art-mask"), this.$state = this.query(".art-state"), this.$setting = this.query(".art-settings"), this.$settingInner = this.query(".art-setting-inner"), this.$settingBody = this.query(".art-setting-body"), this.$info = this.query(".art-info"), this.$infoPanel = this.query(".art-info-panel"), this.$infoClose = this.query(".art-info-close"), this.$miniHeader = this.query(".art-mini-header"), this.$miniTitle = this.query(".art-mini-title"), this.$miniClose = this.query(".art-mini-close"), this.$contextmenu = this.query(".art-contextmenus"), t.backdrop && (b(this.$settingInner, "art-backdrop-filter"), b(this.$contextmenu, "art-backdrop-filter"), b(this.$info, "art-backdrop-filter")), d && b(this.$player, "art-mobile")
                }
            }, {
                key: "mobile",
                value: function () {
                    this.$container.innerHTML = '<div class="art-video-player"><video class="art-video"></video></div>', this.$player = this.query(".art-video-player"), this.$video = this.query(".art-video")
                }
            }, {
                key: "destroy",
                value: function (t) {
                    t ? z(this.$original, this.$container) : b(this.$player, "art-destroy")
                }
            }], [{
                key: "html",
                get: function () {
                    return '<div class="art-video-player art-subtitle-show art-layer-show"><video class="art-video"></video><div class="art-poster"></div><div class="art-subtitle"></div><div class="art-danmuku"></div><div class="art-layers"></div><div class="art-mask"><div class="art-state"></div></div><div class="art-bottom"><div class="art-progress"></div><div class="art-controls"><div class="art-controls-left"></div><div class="art-controls-right"></div></div></div><div class="art-loading"></div><div class="art-notice"><div class="art-notice-inner"></div></div><div class="art-settings"><div class="art-setting-inner"><div class="art-setting-body"></div></div></div><div class="art-info"><div class="art-info-panel"><div class="art-info-item"><div class="art-info-title">Player version:</div><div class="art-info-content">4.2.6</div></div><div class="art-info-item"><div class="art-info-title">Video url:</div><div class="art-info-content" data-video="src"></div></div><div class="art-info-item"><div class="art-info-title">Video volume:</div><div class="art-info-content" data-video="volume"></div></div><div class="art-info-item"><div class="art-info-title">Video time:</div><div class="art-info-content" data-video="currentTime"></div></div><div class="art-info-item"><div class="art-info-title">Video duration:</div><div class="art-info-content" data-video="duration"></div></div><div class="art-info-item"><div class="art-info-title">Video resolution:</div><div class="art-info-content"><span data-video="videoWidth"></span> x <span data-video="videoHeight"></span></div></div></div><div class="art-info-close">[x]</div></div><div class="art-mini-header"><div class="art-mini-title"></div><div class="art-mini-close">xD7</div></div><div class="art-contextmenus"></div></div>'
                }
            }]), e
        }(),
        yt = {
            "Video info": "统计信息",
            Close: "关闭",
            "Video load failed": "加载失败",
            Volume: "音量",
            Play: "播放",
            Pause: "暂停",
            Rate: "速度",
            Mute: "静音",
            Flip: "翻转",
            Rotate: "旋转",
            Horizontal: "水平",
            Vertical: "垂直",
            Reconnect: "重新连接",
            "Hide subtitle": "隐藏字幕",
            "Show subtitle": "显示字幕",
            "Hide danmu": "隐藏弹幕",
            "Show danmu": "显示弹幕",
            "Show setting": "显示设置",
            "Hide setting": "隐藏设置",
            Screenshot: "截图",
            "Play speed": "播放速度",
            "Aspect ratio": "画面比例",
            Default: "默认",
            Normal: "正常",
            Open: "打开",
            "Switch video": "切换",
            "Switch subtitle": "切换字幕",
            Fullscreen: "全屏",
            "Exit fullscreen": "退出全屏",
            "Web fullscreen": "网页全屏",
            "Exit web fullscreen": "退出网页全屏",
            "Mini player": "迷你播放器",
            "PIP mode": "画中画模式",
            "Exit PIP mode": "退出画中画模式",
            "PIP not supported": "不支持画中画模式",
            "Fullscreen not supported": "不支持全屏模式",
            "Local Subtitle": "本地字幕",
            "Local Video": "本地视频",
            "Subtitle offset time": "字幕偏移时间",
            "No subtitles found": "未发现字幕"
        },
        gt = {
            "Video info": "統計訊息",
            Close: "關閉",
            "Video load failed": "載入失敗",
            Volume: "音量",
            Play: "播放",
            Pause: "暫停",
            Rate: "速度",
            Mute: "靜音",
            Flip: "翻轉",
            Rotate: "旋轉",
            Horizontal: "水平",
            Vertical: "垂直",
            Reconnect: "重新連接",
            "Hide subtitle": "隱藏字幕",
            "Show subtitle": "顯示字幕",
            "Hide danmu": "隱藏彈幕",
            "Show danmu": "顯示彈幕",
            "Show setting": "顯示设置",
            "Hide setting": "隱藏设置",
            Screenshot: "截圖",
            "Play speed": "播放速度",
            "Aspect ratio": "畫面比例",
            Default: "默認",
            Normal: "正常",
            Open: "打開",
            "Switch video": "切換",
            "Switch subtitle": "切換字幕",
            Fullscreen: "全屏",
            "Exit fullscreen": "退出全屏",
            "Web fullscreen": "網頁全屏",
            "Exit web fullscreen": "退出網頁全屏",
            "Mini player": "迷你播放器",
            "PIP mode": "畫中畫模式",
            "Exit PIP mode": "退出畫中畫模式",
            "PIP not supported": "不支持畫中畫模式",
            "Fullscreen not supported": "不支持全屏模式",
            "Local Subtitle": "本地字幕",
            "Local Video": "本地視頻",
            "Subtitle offset time": "字幕偏移時間",
            "No subtitles found": "未發現字幕"
        },
        mt = function () {
            function e(r) {
                t(this, e), this.art = r, this.languages = {
                    "zh-cn": yt,
                    "zh-tw": gt
                }, this.init()
            }
            return r(e, [{
                key: "init",
                value: function () {
                    var t = this.art.option.lang.toLowerCase();
                    this.language = this.languages[t] || {}
                }
            }, {
                key: "get",
                value: function (t) {
                    return this.language[t] || t
                }
            }, {
                key: "update",
                value: function (t) {
                    this.languages = Y(this.languages, t), this.init()
                }
            }]), e
        }();
    var bt = {
        exports: {}
    };
    ! function (t) {
        ! function () {
            var e = "undefined" != typeof window && void 0 !== window.document ? window.document : {},
                r = t.exports,
                n = function () {
                    for (var t, r = [
                        ["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"],
                        ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"],
                        ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"],
                        ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"],
                        ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"]
                    ], n = 0, o = r.length, i = {}; n < o; n++)
                        if ((t = r[n]) && t[1] in e) {
                            for (n = 0; n < t.length; n++) i[r[0][n]] = t[n];
                            return i
                        } return !1
                }(),
                o = {
                    change: n.fullscreenchange,
                    error: n.fullscreenerror
                },
                i = {
                    request: function (t, r) {
                        return new Promise(function (o, i) {
                            var a = function () {
                                this.off("change", a), o()
                            }.bind(this);
                            this.on("change", a);
                            var c = (t = t || e.documentElement)[n.requestFullscreen](r);
                            c instanceof Promise && c.then(a).catch(i)
                        }.bind(this))
                    },
                    exit: function () {
                        return new Promise(function (t, r) {
                            if (this.isFullscreen) {
                                var o = function () {
                                    this.off("change", o), t()
                                }.bind(this);
                                this.on("change", o);
                                var i = e[n.exitFullscreen]();
                                i instanceof Promise && i.then(o).catch(r)
                            } else t()
                        }.bind(this))
                    },
                    toggle: function (t, e) {
                        return this.isFullscreen ? this.exit() : this.request(t, e)
                    },
                    onchange: function (t) {
                        this.on("change", t)
                    },
                    onerror: function (t) {
                        this.on("error", t)
                    },
                    on: function (t, r) {
                        var n = o[t];
                        n && e.addEventListener(n, r, !1)
                    },
                    off: function (t, r) {
                        var n = o[t];
                        n && e.removeEventListener(n, r, !1)
                    },
                    raw: n
                };
            n ? (Object.defineProperties(i, {
                isFullscreen: {
                    get: function () {
                        return Boolean(e[n.fullscreenElement])
                    }
                },
                element: {
                    enumerable: !0,
                    get: function () {
                        return e[n.fullscreenElement]
                    }
                },
                isEnabled: {
                    enumerable: !0,
                    get: function () {
                        return Boolean(e[n.fullscreenEnabled])
                    }
                }
            }), r ? t.exports = i : window.screenfull = i) : r ? t.exports = {
                isEnabled: !1
            } : window.screenfull = {
                isEnabled: !1
            }
        }()
    }(bt);
    var wt = bt.exports;

    function xt(t) {
        var e = t.i18n,
            r = t.notice,
            n = t.template.$video;
        t.once("ready", (function () {
            wt.isEnabled ? function (t) {
                var e = t.template.$player;
                wt.on("change", (function () {
                    return t.emit("fullscreen", wt.isFullscreen)
                })), U(t, "fullscreen", {
                    get: function () {
                        return wt.isFullscreen
                    },
                    set: function (r) {
                        r ? wt.request(e).then((function () {
                            b(e, "art-fullscreen"), t.aspectRatioReset = !0, t.autoSize = !1, t.emit("resize"), t.emit("fullscreen", !0)
                        })) : wt.exit().then((function () {
                            w(e, "art-fullscreen"), t.aspectRatioReset = !0, t.autoSize = t.option.autoSize, t.emit("resize"), t.emit("fullscreen")
                        }))
                    }
                })
            }(t) : document.fullscreenEnabled || n.webkitSupportsFullscreen ? function (t) {
                var e = t.template.$video;
                U(t, "fullscreen", {
                    get: function () {
                        return e.webkitDisplayingFullscreen
                    },
                    set: function (r) {
                        r ? (e.webkitEnterFullscreen(), t.emit("fullscreen", !0)) : (e.webkitExitFullscreen(), t.emit("fullscreen"))
                    }
                })
            }(t) : U(t, "fullscreen", {
                get: function () {
                    return !1
                },
                set: function () {
                    r.show = e.get("Fullscreen not supported")
                }
            }), U(t, "fullscreen", Q(t, "fullscreen"))
        }))
    }

    function Ot(t) {
        var e = t.i18n,
            r = t.notice,
            n = t.template.$video;
        document.pictureInPictureEnabled ? function (t) {
            var e = t.template.$video,
                r = t.events.proxy,
                n = t.notice;
            e.disablePictureInPicture = !1, U(t, "pip", {
                get: function () {
                    return document.pictureInPictureElement
                },
                set: function (t) {
                    t ? e.requestPictureInPicture().catch((function (t) {
                        throw n.show = t, t
                    })) : document.exitPictureInPicture().catch((function (t) {
                        throw n.show = t, t
                    }))
                }
            }), r(e, "enterpictureinpicture", (function () {
                t.emit("pip", !0)
            })), r(e, "leavepictureinpicture", (function () {
                t.emit("pip")
            }))
        }(t) : n.webkitSupportsPresentationMode ? function (t) {
            var e = t.template.$video;
            e.webkitSetPresentationMode("inline"), U(t, "pip", {
                get: function () {
                    return "picture-in-picture" === e.webkitPresentationMode
                },
                set: function (r) {
                    r ? (e.webkitSetPresentationMode("picture-in-picture"), t.emit("pip", !0)) : (e.webkitSetPresentationMode("inline"), t.emit("pip"))
                }
            })
        }(t) : U(t, "pip", {
            get: function () {
                return !1
            },
            set: function () {
                r.show = e.get("PIP not supported")
            }
        })
    }
    var kt = function e(r) {
        t(this, e),
            function (t) {
                var e = t.option,
                    r = t.template.$video;
                U(t, "url", {
                    get: function () {
                        return r.currentSrc
                    },
                    set: function (n) {
                        var o = e.type || V(n),
                            i = e.customType[o];
                        o && i ? Z().then((function () {
                            t.loading.show = !0, i.call(t, r, n, t)
                        })) : (t.url && t.url !== n && t.once("video:canplay", (function () {
                            t.isReady && t.emit("restart")
                        })), r.src = n, t.option.url = n, t.emit("url", n))
                    }
                })
            }(r),
            function (t) {
                var e = t.template.$video;
                U(t, "attr", {
                    value: function (t, r) {
                        if (void 0 === r) return e[t];
                        e[t] = r
                    }
                })
            }(r),
            function (t) {
                var e = t.i18n,
                    r = t.notice,
                    n = t.option,
                    o = t.constructor.instances,
                    i = t.template.$video;
                U(t, "play", {
                    value: function () {
                        var a = i.play();
                        if (a && a.then && a.then().catch((function (t) {
                            throw r.show = t, t
                        })), n.mutex)
                            for (var c = 0; c < o.length; c++) {
                                var s = o[c];
                                s !== t && s.pause()
                            }
                        return r.show = e.get("Play"), t.emit("play"), a
                    }
                })
            }(r),
            function (t) {
                var e = t.template.$video,
                    r = t.i18n,
                    n = t.notice;
                U(t, "pause", {
                    value: function () {
                        var o = e.pause();
                        return n.show = r.get("Pause"), t.emit("pause"), o
                    }
                })
            }(r),
            function (t) {
                U(t, "toggle", {
                    value: function () {
                        return t.playing ? t.pause() : t.play()
                    }
                })
            }(r),
            function (t) {
                var e = t.notice;
                U(t, "seek", {
                    set: function (r) {
                        t.currentTime = r, t.emit("seek", t.currentTime), t.duration && (e.show = "".concat(K(t.currentTime), " / ").concat(K(t.duration)))
                    }
                }), U(t, "forward", {
                    set: function (e) {
                        t.seek = t.currentTime + e
                    }
                }), U(t, "backward", {
                    set: function (e) {
                        t.seek = t.currentTime - e
                    }
                })
            }(r),
            function (t) {
                var e = t.template.$video,
                    r = t.i18n,
                    n = t.notice,
                    o = t.storage;
                U(t, "volume", {
                    get: function () {
                        return e.volume || 0
                    },
                    set: function (i) {
                        e.volume = G(i, 0, 1), n.show = "".concat(r.get("Volume"), ": ").concat(parseInt(100 * e.volume, 10)), 0 !== e.volume && o.set("volume", e.volume), t.emit("volume", e.volume)
                    }
                }), U(t, "muted", {
                    get: function () {
                        return e.muted
                    },
                    set: function (r) {
                        e.muted = r, t.emit("volume", e.volume)
                    }
                })
            }(r),
            function (t) {
                var e = t.template.$video;
                U(t, "currentTime", {
                    get: function () {
                        return e.currentTime || 0
                    },
                    set: function (r) {
                        r = parseFloat(r), Number.isNaN(r) || (e.currentTime = G(r, 0, t.duration))
                    }
                })
            }(r),
            function (t) {
                U(t, "duration", {
                    get: function () {
                        var e = t.template.$video.duration;
                        return e === 1 / 0 ? 0 : e || 0
                    }
                })
            }(r),
            function (t) {
                var e = t.i18n,
                    r = t.option,
                    n = t.notice;

                function o(o, i, a) {
                    return new Promise((function (c) {
                        if (o === t.url) return c(o);
                        URL.revokeObjectURL(t.url), t.url = o, t.once("video:canplay", (function () {
                            t.playbackRate = !1, t.aspectRatio = !1, t.flip = "normal", t.autoSize = r.autoSize, t.currentTime = a, t.notice.show = "", t.playing && t.play(), i && (n.show = "".concat(e.get("Switch video"), ": ").concat(i)), t.emit("switch", o), c(o)
                        }))
                    }))
                }
                U(t, "switchQuality", {
                    value: function (e, r) {
                        return o(e, r, t.currentTime)
                    }
                }), U(t, "switchUrl", {
                    value: function (t, e) {
                        return o(t, e, 0)
                    }
                })
            }(r),
            function (t) {
                var e = t.template,
                    r = e.$video,
                    n = e.$player,
                    o = t.i18n,
                    i = t.notice;
                U(t, "playbackRate", {
                    get: function () {
                        return n.dataset.playbackRate
                    },
                    set: function (e) {
                        if (e) {
                            if (e === n.dataset.playbackRate) return;
                            var a = [.5, .75, 1, 1.25, 1.5, 1.75, 2];
                            q(a.includes(e), "'playbackRate' only accept ".concat(a.toString(), " as parameters")), r.playbackRate = e, n.dataset.playbackRate = e, i.show = "".concat(o.get("Rate"), ": ").concat(1 === e ? o.get("Normal") : "".concat(e, "x")), t.emit("playbackRate", e)
                        } else t.playbackRate && (t.playbackRate = 1, delete n.dataset.playbackRate, t.emit("playbackRate"))
                    }
                }), U(t, "playbackRateReset", {
                    set: function (e) {
                        if (e) {
                            var r = n.dataset.playbackRate;
                            r && (t.playbackRate = Number(r))
                        }
                    }
                })
            }(r),
            function (t) {
                var e = t.template,
                    r = e.$video,
                    n = e.$player,
                    o = t.i18n,
                    i = t.notice;
                U(t, "aspectRatio", {
                    get: function () {
                        return n.dataset.aspectRatio || ""
                    },
                    set: function (e) {
                        e || (e = "default");
                        var a = ["default", "4:3", "16:9"];
                        if (q(a.includes(e), "'aspectRatio' only accept ".concat(a.toString(), " as parameters")), "default" === e) k(r, "width", null), k(r, "height", null), k(r, "padding", null), delete n.dataset.aspectRatio;
                        else {
                            var c = e.split(":").map(Number),
                                s = r.videoWidth,
                                l = r.videoHeight,
                                u = n.clientWidth,
                                p = n.clientHeight,
                                f = s / l,
                                d = c[0] / c[1];
                            if (f > d) {
                                var h = d * l / s;
                                k(r, "width", "".concat(100 * h, "%")), k(r, "height", "100%"), k(r, "padding", "0 ".concat((u - u * h) / 2, "px"))
                            } else {
                                var v = s / d / l;
                                k(r, "width", "100%"), k(r, "height", "".concat(100 * v, "%")), k(r, "padding", "".concat((p - p * v) / 2, "px 0"))
                            }
                            n.dataset.aspectRatio = e
                        }
                        i.show = "".concat(o.get("Aspect ratio"), ": ").concat("default" === e ? o.get("Default") : e), t.emit("aspectRatio", e)
                    }
                }), U(t, "aspectRatioReset", {
                    set: function (e) {
                        if (e && t.aspectRatio) {
                            var r = t.aspectRatio;
                            t.aspectRatio = r
                        }
                    }
                })
            }(r),
            function (t) {
                var e = t.option,
                    r = t.notice,
                    n = t.template.$video,
                    o = document.createElement("canvas");
                U(t, "getDataURL", {
                    value: function () {
                        return new Promise((function (t, e) {
                            try {
                                o.width = n.videoWidth, o.height = n.videoHeight, o.getContext("2d").drawImage(n, 0, 0), t(o.toDataURL("image/png"))
                            } catch (t) {
                                r.show = t, e(t)
                            }
                        }))
                    }
                }), U(t, "getBlobUrl", {
                    value: function () {
                        return new Promise((function (t, e) {
                            try {
                                o.width = n.videoWidth, o.height = n.videoHeight, o.getContext("2d").drawImage(n, 0, 0), o.toBlob((function (e) {
                                    t(URL.createObjectURL(e))
                                }))
                            } catch (t) {
                                r.show = t, e(t)
                            }
                        }))
                    }
                }), U(t, "screenshot", {
                    value: function () {
                        return t.getDataURL().then((function (r) {
                            return W(r, "".concat(e.title || "artplayer", "_").concat(K(n.currentTime), ".png")), t.emit("screenshot", r), r
                        }))
                    }
                })
            }(r), xt(r),
            function (t) {
                var e = t.template.$player;
                U(t, "fullscreenWeb", {
                    get: function () {
                        return x(e, "art-fullscreen-web")
                    },
                    set: function (r) {
                        r ? (b(e, "art-fullscreen-web"), t.aspectRatioReset = !0, t.autoSize = !1, t.emit("resize"), t.emit("fullscreenWeb", !0)) : (w(e, "art-fullscreen-web"), t.aspectRatioReset = !0, t.autoSize = t.option.autoSize, t.emit("resize"), t.emit("fullscreenWeb"))
                    }
                })
            }(r), Ot(r),
            function (t) {
                var e = t.template.$video;
                U(t, "loaded", {
                    get: function () {
                        return t.loadedTime / e.duration
                    }
                }), U(t, "loadedTime", {
                    get: function () {
                        return e.buffered.length ? e.buffered.end(e.buffered.length - 1) : 0
                    }
                })
            }(r),
            function (t) {
                U(t, "played", {
                    get: function () {
                        return t.currentTime / t.duration
                    }
                })
            }(r),
            function (t) {
                var e = t.template.$video;
                U(t, "playing", {
                    get: function () {
                        return !!(e.currentTime > 0 && !e.paused && !e.ended && e.readyState > 2)
                    }
                })
            }(r),
            function (t) {
                var e = t.template,
                    r = e.$container,
                    n = e.$player,
                    o = e.$video;
                U(t, "autoSize", {
                    get: function () {
                        return x(r, "art-auto-size")
                    },
                    set: function (e) {
                        if (e) {
                            var i = o.videoWidth,
                                a = o.videoHeight,
                                c = r.getBoundingClientRect(),
                                s = c.width,
                                l = c.height,
                                u = i / a,
                                p = s / l;
                            if (b(r, "art-auto-size"), p > u) k(n, "width", "".concat(l * u / s * 100, "%")), k(n, "height", "100%");
                            else {
                                var f = s / u / l * 100;
                                k(n, "width", "100%"), k(n, "height", "".concat(f, "%"))
                            }
                            t.emit("autoSize", {
                                width: t.width,
                                height: t.height
                            })
                        } else w(r, "art-auto-size"), k(n, "width", null), k(n, "height", null), t.emit("autoSize")
                    }
                })
            }(r),
            function (t) {
                U(t, "rect", {
                    get: function () {
                        return t.template.$player.getBoundingClientRect()
                    }
                });
                for (var e = ["bottom", "height", "left", "right", "top", "width"], r = function (r) {
                    var n = e[r];
                    U(t, n, {
                        get: function () {
                            return t.rect[n]
                        }
                    })
                }, n = 0; n < e.length; n++) r(n);
                U(t, "x", {
                    get: function () {
                        return t.left + window.pageXOffset
                    }
                }), U(t, "y", {
                    get: function () {
                        return t.top + window.pageYOffset
                    }
                })
            }(r),
            function (t) {
                var e = t.template.$player,
                    r = t.i18n,
                    n = t.notice;
                U(t, "flip", {
                    get: function () {
                        return e.dataset.flip
                    },
                    set: function (o) {
                        o || (o = "normal");
                        var i = ["normal", "horizontal", "vertical"];
                        q(i.includes(o), "'flip' only accept ".concat(i.toString(), " as parameters")), "normal" === o ? delete e.dataset.flip : (t.rotate = !1, e.dataset.flip = o);
                        var a = o.replace(o[0], o[0].toUpperCase());
                        n.show = "".concat(r.get("Flip"), ": ").concat(r.get(a)), t.emit("flip", o)
                    }
                }), U(t, "flipReset", {
                    set: function (e) {
                        if (e && t.flip) {
                            var r = t.flip;
                            t.flip = r
                        }
                    }
                })
            }(r),
            function (t) {
                var e = t.i18n,
                    r = t.option,
                    n = t.storage,
                    o = t.events.proxy,
                    i = t.template,
                    a = i.$player,
                    c = i.$miniClose,
                    s = i.$miniTitle,
                    l = i.$miniHeader,
                    u = "",
                    p = !1,
                    f = 0,
                    d = 0,
                    h = 0,
                    v = 0;
                o(l, "mousedown", (function (e) {
                    p = !0, f = e.pageX, d = e.pageY, h = t.left, v = t.top
                })), o(document, "mousemove", (function (t) {
                    if (p) {
                        b(a, "art-is-dragging");
                        var e = v + t.pageY - d,
                            r = h + t.pageX - f;
                        k(a, "top", "".concat(e, "px")), k(a, "left", "".concat(r, "px")), n.set("top", e), n.set("left", r)
                    }
                })), o(document, "mouseup", (function () {
                    p = !1, w(a, "art-is-dragging")
                })), o(c, "click", (function () {
                    t.mini = !1, p = !1, w(a, "art-is-dragging")
                })), O(s, r.title || e.get("Mini player")), U(t, "mini", {
                    get: function () {
                        return x(a, "art-mini")
                    },
                    set: function (e) {
                        if (e) {
                            t.autoSize = !1, u = a.style.cssText, b(a, "art-mini");
                            var o = n.get("top"),
                                i = n.get("left");
                            if (o && i) k(a, "top", "".concat(o, "px")), k(a, "left", "".concat(i, "px")), $(l) || (n.del("top"), n.del("left"), t.mini = !0);
                            else {
                                var c = document.body,
                                    s = c.clientHeight - t.height - 50,
                                    p = c.clientWidth - t.width - 50;
                                n.set("top", s), n.set("left", p), k(a, "top", "".concat(s, "px")), k(a, "left", "".concat(p, "px"))
                            }
                            t.aspectRatio = !1, t.playbackRate = !1, t.notice.show = "", t.emit("mini", !0)
                        } else a.style.cssText = u, w(a, "art-mini"), k(a, "top", null), k(a, "left", null), t.aspectRatio = !1, t.playbackRate = !1, t.autoSize = r.autoSize, t.notice.show = "", t.emit("mini")
                    }
                })
            }(r),
            function (t) {
                var e = [];
                U(t, "loop", {
                    get: function () {
                        return e
                    },
                    set: function (r) {
                        if (Array.isArray(r) && "number" == typeof r[0] && "number" == typeof r[1]) {
                            var n = G(r[0], 0, Math.min(r[1], t.duration)),
                                o = G(r[1], n, t.duration);
                            o - n >= 1 ? (e = [n, o], t.emit("loop", e)) : (e = [], t.emit("loop"))
                        } else e = [], t.emit("loop")
                    }
                }), t.on("video:timeupdate", (function () {
                    e.length && (t.currentTime < e[0] || t.currentTime > e[1]) && (t.seek = e[0])
                }))
            }(r),
            function (t) {
                var e = t.template,
                    r = e.$video,
                    n = e.$player,
                    o = t.i18n,
                    i = t.notice;
                U(t, "rotate", {
                    get: function () {
                        return Number(n.dataset.rotate) || 0
                    },
                    set: function (e) {
                        e || (e = 0);
                        var a = [-270, -180, -90, 0, 90, 180, 270];
                        if (q(a.includes(e), "'rotate' only accept ".concat(a.toString(), " as parameters")), 0 === e) delete n.dataset.rotate, k(r, "transform", null);
                        else {
                            t.flip = !1, t.autoSize = !0, n.dataset.rotate = e;
                            var c = function () {
                                var t = r.videoWidth,
                                    e = r.videoHeight;
                                return t > e ? e / t : t / e
                            },
                                s = 0,
                                l = 1;
                            switch (e) {
                                case -270:
                                    s = 90, l = c();
                                    break;
                                case -180:
                                    s = 180;
                                    break;
                                case -90:
                                    s = 270, l = c();
                                    break;
                                case 90:
                                    s = 90, l = c();
                                    break;
                                case 180:
                                    s = 180;
                                    break;
                                case 270:
                                    s = 270, l = c()
                            }
                            k(r, "transform", "rotate(".concat(s, "deg) scale(").concat(l, ")"))
                        }
                        i.show = "".concat(o.get("Rotate"), ": ").concat(e, "°"), t.emit("rotate", e)
                    }
                }), U(t, "rotateReset", {
                    set: function (e) {
                        if (e && t.rotate) {
                            var r = t.rotate;
                            t.rotate = r
                        }
                    }
                })
            }(r),
            function (t) {
                var e = t.option,
                    r = t.template.$poster;
                U(t, "poster", {
                    get: function () {
                        return e.poster
                    },
                    set: function (t) {
                        e.poster = t, k(r, "backgroundImage", "url(".concat(t, ")"))
                    }
                })
            }(r),
            function (t) {
                var e = t.option,
                    r = t.template,
                    n = r.$container,
                    o = r.$video,
                    i = n.style.height;
                U(t, "autoHeight", {
                    get: function () {
                        return x(n, "art-auto-height")
                    },
                    set: function (r) {
                        if (r) {
                            var a = n.clientWidth,
                                c = o.videoHeight * (a / o.videoWidth);
                            k(n, "height", c + "px"), b(n, "art-auto-height"), t.autoSize = e.autoSize, t.emit("autoHeight", c)
                        } else k(n, "height", i), w(n, "art-auto-height"), t.autoSize = e.autoSize, t.emit("autoHeight")
                    }
                })
            }(r),
            function (t) {
                var e = t.option,
                    r = t.template.$player;
                U(t, "theme", {
                    get: function () {
                        return getComputedStyle(r).getPropertyValue("--theme")
                    },
                    set: function (t) {
                        e.theme = t, r.style.setProperty("--theme", t)
                    }
                })
            }(r),
            function (t) {
                U(t, "title", {
                    get: function () {
                        return t.option.title
                    },
                    set: function (e) {
                        t.option.title = e
                    }
                })
            }(r),
            function (t) {
                var e = ["mini", "pip", "fullscreen", "fullscreenWeb"];
                ! function (e) {
                    for (var r = function (r) {
                        var n = e[r];
                        t.on(n, (function () {
                            t[n] && e.filter((function (t) {
                                return t !== n
                            })).forEach((function (e) {
                                t[e] && (t[e] = !1)
                            }))
                        }))
                    }, n = 0; n < e.length; n++) r(n)
                }(e), U(t, "normalSize", {
                    get: function () {
                        return e.every((function (e) {
                            return !t[e]
                        }))
                    }
                })
            }(r),
            function (t) {
                var e = t.option,
                    r = t.events.proxy,
                    n = t.template,
                    o = n.$player,
                    i = n.$video,
                    a = n.$poster,
                    c = t.i18n,
                    s = t.notice,
                    l = 0;
                r(i, "click", (function () {
                    t.toggle()
                })), r(i, "dblclick", (function () {
                    t.fullscreen = !t.fullscreen
                }));
                for (var u = 0; u < dt.events.length; u++) r(i, dt.events[u], (function (e) {
                    t.emit("video:".concat(e.type), e)
                }));
                t.on("video:canplay", (function () {
                    l = 0, t.loading.show = !1
                })), t.once("video:canplay", (function () {
                    t.loading.show = !1, t.controls.show = !0, t.mask.show = !0, t.isReady = !0, t.emit("ready")
                })), t.on("video:ended", (function () {
                    e.loop ? (t.seek = 0, t.play(), t.controls.show = !1, t.mask.show = !1) : (t.controls.show = !0, t.mask.show = !0)
                })), t.on("video:error", (function () {
                    l < 5 ? Z(1e3).then((function () {
                        l += 1, t.url = e.url, s.show = "".concat(c.get("Reconnect"), ": ").concat(l), t.emit("error", l)
                    })) : (t.loading.show = !1, t.controls.show = !1, b(o, "art-error"), Z(1e3).then((function () {
                        s.show = c.get("Video load failed"), t.destroy(!1)
                    })))
                })), t.once("video:loadedmetadata", (function () {
                    t.autoSize = e.autoSize, d && (t.loading.show = !1, t.controls.show = !0, t.mask.show = !0)
                })), t.on("video:loadstart", (function () {
                    t.loading.show = !0
                })), t.on("video:pause", (function () {
                    t.controls.show = !0, t.mask.show = !0
                })), t.on("video:play", (function () {
                    t.mask.show = !1, k(a, "display", "none")
                })), t.on("video:playing", (function () {
                    t.mask.show = !1
                })), t.on("video:seeked", (function () {
                    t.loading.show = !1
                })), t.on("video:seeking", (function () {
                    t.loading.show = !0
                })), t.on("video:timeupdate", (function () {
                    t.mask.show = !1
                })), t.on("video:waiting", (function () {
                    t.loading.show = !0
                }))
            }(r),
            function (t) {
                var e = t.option,
                    r = t.storage,
                    n = t.template,
                    o = n.$video,
                    i = n.$poster;
                Object.keys(e.moreVideoAttr).forEach((function (r) {
                    t.attr(r, e.moreVideoAttr[r])
                })), e.muted && (t.muted = e.muted), e.volume && (o.volume = G(e.volume, 0, 1));
                var a = r.get("volume");
                "number" == typeof a && (o.volume = G(a, 0, 1)), e.poster && k(i, "backgroundImage", "url(".concat(e.poster, ")")), e.autoplay && (o.autoplay = e.autoplay), e.theme && (t.theme = e.theme), 0 === e.ads.length && (t.url = e.url)
            }(r)
    };

    function jt(t, e) {
        for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = s(t)););
        return t
    }

    function Pt() {
        return Pt = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, r) {
            var n = jt(t, e);
            if (n) {
                var o = Object.getOwnPropertyDescriptor(n, e);
                return o.get ? o.get.call(arguments.length < 3 ? t : r) : o.value
            }
        }, Pt.apply(this, arguments)
    }
    var St = function () {
        function e(r) {
            t(this, e), this.id = 0, this.art = r, this.add = this.add.bind(this)
        }
        return r(e, [{
            key: "show",
            get: function () {
                return x(this.art.template.$player, "art-".concat(this.name, "-show"))
            },
            set: function (t) {
                var e = this.art.template.$player,
                    r = "art-".concat(this.name, "-show");
                t ? b(e, r) : w(e, r), this.art.emit(this.name, t)
            }
        }, {
            key: "toggle",
            set: function (t) {
                t && (this.show = !this.show)
            }
        }, {
            key: "add",
            value: function (t) {
                var e = this,
                    r = "function" == typeof t ? t(this.art) : t;
                if (r.html = r.html || "", u(r, pt), this.$parent && this.name && !r.disable) {
                    var n = r.name || "".concat(this.name).concat(this.id);
                    q(!X(this, n), "Cannot add an existing name [".concat(n, "] to the [").concat(this.name, "]")), this.id += 1;
                    var o = document.createElement("div");
                    b(o, "art-".concat(this.name)), b(o, "art-".concat(this.name, "-").concat(n));
                    var i = Array.from(this.$parent.children);
                    o.dataset.index = r.index || this.id;
                    var a = i.find((function (t) {
                        return Number(t.dataset.index) >= Number(o.dataset.index)
                    }));
                    return a ? a.insertAdjacentElement("beforebegin", o) : O(this.$parent, o), r.html && O(o, r.html), r.style && j(o, r.style), r.tooltip && E(o, r.tooltip), r.click && this.art.events.proxy(o, "click", (function (t) {
                        t.preventDefault(), r.click.call(e.art, e, t)
                    })), r.selector && ["left", "right"].includes(r.position) && this.selector(r, o), r.mounted && r.mounted.call(this.art, o), 1 === o.childNodes.length && 3 === o.childNodes[0].nodeType && b(o, "art-control-onlyText"), U(this, n, {
                        value: o
                    }), o
                }
            }
        }, {
            key: "selector",
            value: function (t, e) {
                var r = this,
                    n = this.art.events,
                    o = n.hover,
                    i = n.proxy;
                b(e, "art-control-selector");
                var a = document.createElement("div");
                b(a, "art-selector-value"), O(a, t.html), e.innerText = "", O(e, a);
                var c = t.selector.map((function (t, e) {
                    return '<div class="art-selector-item '.concat(t.default ? "art-current" : "", '" data-index="').concat(e, '">').concat(t.html, "</div>")
                })).join(""),
                    s = document.createElement("div");
                b(s, "art-selector-list"), O(s, c), O(e, s);
                var l = function () {
                    var t = P(e, "width") / 2 - P(s, "width") / 2;
                    s.style.left = "".concat(t, "px")
                };
                o(e, l), i(s, "click", (function (e) {
                    var n = (e.composedPath() || []).find((function (t) {
                        return x(t, "art-selector-item")
                    }));
                    if (n) {
                        R(n, "art-current");
                        var o = Number(n.dataset.index),
                            i = t.selector[o] || {};
                        if (a.innerText = n.innerText, t.onSelect) {
                            var c = t.onSelect.call(r.art, i, n);
                            "string" == typeof c && (a.innerHTML = c)
                        }
                        l(), r.art.emit("selector", i, n)
                    }
                }))
            }
        }]), e
    }();

    function Rt(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Et(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Rt(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Rt(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function $t(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Dt(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? $t(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : $t(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function zt(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Tt(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? zt(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : zt(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function Ct(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function At(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Ct(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Ct(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function Lt(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Mt(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Lt(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Lt(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function qt(t, e) {
        var r = t.template.$progress,
            n = r.getBoundingClientRect().left,
            o = G(("number" == typeof e.pageX ? e.pageX : e.touches[0].clientX) - n, 0, r.clientWidth),
            i = o / r.clientWidth * t.duration;
        return {
            second: i,
            time: K(i),
            width: o,
            percentage: G(o / r.clientWidth, 0, 1)
        }
    }

    function Ft(t) {
        return function (e) {
            var r = e.icons,
                n = e.option,
                o = e.events.proxy;
            return Mt(Mt({}, t), {}, {
                html: '<div class="art-control-progress-inner"><div class="art-progress-loaded"></div><div class="art-progress-played"></div><div class="art-progress-highlight"></div><div class="art-progress-indicator"></div><div class="art-progress-tip"></div></div>',
                mounted: function (t) {
                    var i = !1,
                        a = g(".art-progress-loaded", t),
                        c = g(".art-progress-played", t),
                        s = g(".art-progress-highlight", t),
                        l = g(".art-progress-indicator", t),
                        u = g(".art-progress-tip", t);
                    k(c, "backgroundColor", "var(--theme)");
                    var p = 14;

                    function f(t, e) {
                        "loaded" === t && k(a, "width", "".concat(100 * e, "%")), "played" === t && (k(c, "width", "".concat(100 * e, "%")), k(l, "left", "calc(".concat(100 * e, "% - ").concat(p / 2, "px)")))
                    }
                    r.indicator ? (p = 16, O(l, r.indicator)) : j(l, {
                        backgroundColor: "var(--theme)"
                    }), j(l, {
                        left: "-".concat(p / 2, "px"),
                        width: "".concat(p, "px"),
                        height: "".concat(p, "px")
                    });
                    for (var d = 0; d < n.highlight.length; d++) {
                        var h = n.highlight[d],
                            v = G(h.time, 0, e.duration) / e.duration * 100;
                        O(s, '<span data-text="'.concat(h.text, '" data-time="').concat(h.time, '" style="left: ').concat(v, '%"></span>'))
                    }
                    f("loaded", e.loaded), e.on("video:progress", (function () {
                        f("loaded", e.loaded)
                    })), e.on("video:timeupdate", (function () {
                        f("played", e.played)
                    })), e.on("video:ended", (function () {
                        f("played", 1)
                    })), o(t, "mousemove", (function (r) {
                        k(u, "display", "block"), D(r, s) ? function (r) {
                            var n = qt(e, r).width,
                                o = r.target.dataset.text;
                            u.innerHTML = o;
                            var i = u.clientWidth;
                            n <= i / 2 ? k(u, "left", 0) : n > t.clientWidth - i / 2 ? k(u, "left", "".concat(t.clientWidth - i, "px")) : k(u, "left", "".concat(n - i / 2, "px"))
                        }(r) : function (r) {
                            var n = qt(e, r),
                                o = n.width,
                                i = n.time;
                            u.innerHTML = i;
                            var a = u.clientWidth;
                            o <= a / 2 ? k(u, "left", 0) : o > t.clientWidth - a / 2 ? k(u, "left", "".concat(t.clientWidth - a, "px")) : k(u, "left", "".concat(o - a / 2, "px"))
                        }(r)
                    })), o(t, "mouseout", (function () {
                        k(u, "display", "none")
                    })), o(t, "click", (function (t) {
                        if (t.target !== l) {
                            var r = qt(e, t),
                                n = r.second;
                            f("played", r.percentage), e.seek = n
                        }
                    })), o(l, "mousedown", (function () {
                        i = !0
                    })), o(document, "mousemove", (function (t) {
                        if (i) {
                            var r = qt(e, t),
                                n = r.second;
                            f("played", r.percentage), e.seek = n
                        }
                    })), o(document, "mouseup", (function () {
                        i && (i = !1)
                    })), o(l, "touchstart", (function (t) {
                        1 === t.touches.length && (i = !0)
                    })), o(document, "touchmove", (function (t) {
                        if (1 === t.touches.length && i) {
                            var r = qt(e, t),
                                n = r.second;
                            f("played", r.percentage), e.seek = n
                        }
                    })), o(document, "touchend", (function () {
                        i && (i = !1)
                    }))
                }
            })
        }
    }

    function Bt(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function It(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Bt(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Bt(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function Vt(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Wt(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Vt(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Vt(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function Ht(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Nt(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Ht(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Ht(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function Ut(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function _t(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Ut(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Ut(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function Xt(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Qt(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Xt(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Xt(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function Yt(t) {
        return function (e) {
            return Qt(Qt({}, t), {}, {
                mounted: function (t) {
                    var r = e.option,
                        n = e.template,
                        o = n.$progress,
                        i = n.$video,
                        a = e.events,
                        c = a.proxy,
                        s = a.loadImg,
                        l = null,
                        u = !1,
                        p = !1;
                    c(o, "mousemove", (function (n) {
                        u || (u = !0, s(r.thumbnails.url).then((function (t) {
                            l = t, p = !0
                        }))), p && (k(t, "display", "block"), function (n) {
                            var a = qt(e, n).width,
                                c = r.thumbnails,
                                s = c.url,
                                u = c.number,
                                p = c.column,
                                f = l.naturalWidth / p,
                                d = f / (i.videoWidth / i.videoHeight),
                                h = o.clientWidth / u,
                                v = Math.floor(a / h),
                                y = Math.ceil(v / p) - 1,
                                g = v % p || p - 1;
                            k(t, "backgroundImage", "url(".concat(s, ")")), k(t, "height", "".concat(d, "px")), k(t, "width", "".concat(f, "px")), k(t, "backgroundPosition", "-".concat(g * f, "px -").concat(y * d, "px")), a <= f / 2 ? k(t, "left", 0) : a > o.clientWidth - f / 2 ? k(t, "left", "".concat(o.clientWidth - f, "px")) : k(t, "left", "".concat(a - f / 2, "px"))
                        }(n))
                    })), c(o, "mouseout", (function () {
                        k(t, "display", "none")
                    }))
                }
            })
        }
    }

    function Zt(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Jt(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Zt(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Zt(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function Gt(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Kt(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Gt(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Gt(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function te(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function ee(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? te(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : te(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function re(t) {
        var e = function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
                return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () { }))), !0
            } catch (t) {
                return !1
            }
        }();
        return function () {
            var r, n = s(t);
            if (e) {
                var o = s(this).constructor;
                r = Reflect.construct(n, arguments, o)
            } else r = n.apply(this, arguments);
            return c(this, r)
        }
    }
    var ne = function (e) {
        i(o, e);
        var n = re(o);

        function o(e) {
            var r;
            t(this, o), (r = n.call(this, e)).name = "control";
            var i = e.option,
                a = e.template.$player;
            return r.mouseMoveTime = Date.now(), e.on("mousemove", (function () {
                r.show = !0, w(a, "art-hide-cursor"), b(a, "art-hover"), r.mouseMoveTime = Date.now()
            })), e.on("video:timeupdate", (function () {
                e.playing && r.show && Date.now() - r.mouseMoveTime >= 3e3 && (r.show = !1, b(a, "art-hide-cursor"), w(a, "art-hover"))
            })), e.once("ready", (function () {
                r.add(Ft({
                    name: "progress",
                    disable: i.isLive,
                    position: "top",
                    index: 10
                })), r.add(Yt({
                    name: "thumbnails",
                    disable: !i.thumbnails.url || i.isLive,
                    position: "top",
                    index: 20
                })), r.add(function (t) {
                    return function (e) {
                        return ee(ee({}, t), {}, {
                            mounted: function (t) {
                                var r = O(t, '<span class="art-loop-point"></span>'),
                                    n = O(t, '<span class="art-loop-point"></span>');
                                e.on("loop", (function (o) {
                                    o ? (k(t, "display", "block"), k(r, "left", "calc(".concat(o[0] / e.duration * 100, "% - ").concat(r.clientWidth, "px)")), k(n, "left", "".concat(o[1] / e.duration * 100, "%"))) : k(t, "display", "none")
                                }))
                            }
                        })
                    }
                }({
                    name: "loop",
                    disable: !1,
                    position: "top",
                    index: 30
                })), r.add(function (t) {
                    return function (e) {
                        return At(At({}, t), {}, {
                            mounted: function (t) {
                                var r = e.events.proxy,
                                    n = e.icons,
                                    o = e.i18n,
                                    i = O(t, n.play),
                                    a = O(t, n.pause);

                                function c() {
                                    k(i, "display", "flex"), k(a, "display", "none")
                                }

                                function s() {
                                    k(i, "display", "none"), k(a, "display", "flex")
                                }
                                E(i, o.get("Play")), E(a, o.get("Pause")), r(i, "click", (function () {
                                    e.play()
                                })), r(a, "click", (function () {
                                    e.pause()
                                })), e.playing ? s() : c(), e.on("video:playing", (function () {
                                    s()
                                })), e.on("video:pause", (function () {
                                    c()
                                }))
                            }
                        })
                    }
                }({
                    name: "playAndPause",
                    disable: !1,
                    position: "left",
                    index: 10
                })), r.add(function (t) {
                    return function (e) {
                        return Nt(Nt({}, t), {}, {
                            mounted: function (t) {
                                var r = e.events.proxy,
                                    n = e.icons,
                                    o = e.i18n,
                                    i = !1,
                                    a = O(t, n.volume),
                                    c = O(t, n.volumeClose),
                                    s = O(t, '<div class="art-volume-panel"></div>'),
                                    l = O(s, '<div class="art-volume-slider-handle"></div>');

                                function u(t) {
                                    var e = s.getBoundingClientRect().left;
                                    return G(t.pageX - e - 6, 0, 54) / 48
                                }

                                function p() {
                                    var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : .7;
                                    if (e.muted || 0 === t) k(a, "display", "none"), k(c, "display", "flex"), k(l, "left", "0");
                                    else {
                                        var r = 48 * t;
                                        k(a, "display", "flex"), k(c, "display", "none"), k(l, "left", "".concat(r, "px"))
                                    }
                                }
                                E(a, o.get("Mute")), k(c, "display", "none"), d && k(s, "display", "none"), p(e.volume), e.on("video:volumechange", (function () {
                                    p(e.volume)
                                })), r(a, "click", (function () {
                                    e.muted = !0
                                })), r(c, "click", (function () {
                                    e.muted = !1
                                })), r(s, "click", (function (t) {
                                    e.muted = !1, e.volume = u(t)
                                })), r(l, "mousedown", (function () {
                                    i = !0
                                })), r(t, "mousemove", (function (t) {
                                    i && (e.muted = !1, e.volume = u(t))
                                })), r(document, "mouseup", (function () {
                                    i && (i = !1)
                                }))
                            }
                        })
                    }
                }({
                    name: "volume",
                    disable: !1,
                    position: "left",
                    index: 20
                })), r.add(function (t) {
                    return function (e) {
                        return Wt(Wt({}, t), {}, {
                            mounted: function (t) {
                                function r() {
                                    var r = "".concat(K(e.currentTime), " / ").concat(K(e.duration));
                                    r !== t.innerText && (t.innerText = r)
                                }
                                r();
                                for (var n = ["video:loadedmetadata", "video:timeupdate", "video:progress"], o = 0; o < n.length; o++) e.on(n[o], r)
                            }
                        })
                    }
                }({
                    name: "time",
                    disable: i.isLive,
                    position: "left",
                    index: 30
                })), r.add(function (t) {
                    return function (e) {
                        var r = e.option.quality,
                            n = r.find((function (t) {
                                return t.default
                            })) || r[0];
                        return Kt(Kt({}, t), {}, {
                            html: n ? n.html : "",
                            selector: r,
                            onSelect: function (t) {
                                e.switchQuality(t.url, t.html)
                            }
                        })
                    }
                }({
                    name: "quality",
                    disable: 0 === i.quality.length,
                    position: "right",
                    index: 10
                })), r.add(function (t) {
                    return function (e) {
                        return Jt(Jt({}, t), {}, {
                            tooltip: e.i18n.get("Screenshot"),
                            mounted: function (t) {
                                var r = e.events.proxy;
                                O(t, e.icons.screenshot), r(t, "click", (function () {
                                    e.screenshot()
                                }))
                            }
                        })
                    }
                }({
                    name: "screenshot",
                    disable: !i.screenshot,
                    position: "right",
                    index: 20
                })), r.add(function (t) {
                    return function (e) {
                        return It(It({}, t), {}, {
                            tooltip: e.i18n.get("Hide subtitle"),
                            mounted: function (t) {
                                var r = e.events.proxy,
                                    n = e.icons,
                                    o = e.i18n,
                                    i = e.subtitle;
                                O(t, n.subtitle), r(t, "click", (function () {
                                    i.toggle = !0
                                })), e.on("subtitle", (function (e) {
                                    E(t, o.get(e ? "Hide subtitle" : "Show subtitle"))
                                }))
                            }
                        })
                    }
                }({
                    name: "subtitle",
                    disable: !i.subtitle.url,
                    position: "right",
                    index: 30
                })), r.add(function (t) {
                    return function (e) {
                        return _t(_t({}, t), {}, {
                            tooltip: e.i18n.get("Show setting"),
                            mounted: function (t) {
                                var r = e.events.proxy,
                                    n = e.icons,
                                    o = e.i18n,
                                    i = e.setting;
                                O(t, n.setting), r(t, "click", (function () {
                                    i.toggle = !0
                                })), e.on("setting", (function (e) {
                                    E(t, o.get(e ? "Hide setting" : "Show setting"))
                                }))
                            }
                        })
                    }
                }({
                    name: "setting",
                    disable: !i.setting,
                    position: "right",
                    index: 40
                })), r.add(function (t) {
                    return function (e) {
                        return Tt(Tt({}, t), {}, {
                            tooltip: e.i18n.get("PIP mode"),
                            mounted: function (t) {
                                var r = e.events.proxy,
                                    n = e.icons,
                                    o = e.i18n;
                                O(t, n.pip), r(t, "click", (function () {
                                    e.pip = !e.pip
                                })), e.on("pip", (function (e) {
                                    E(t, o.get(e ? "Exit PIP mode" : "PIP mode"))
                                }))
                            }
                        })
                    }
                }({
                    name: "pip",
                    disable: !i.pip,
                    position: "right",
                    index: 50
                })), r.add(function (t) {
                    return function (e) {
                        return Dt(Dt({}, t), {}, {
                            tooltip: e.i18n.get("Web fullscreen"),
                            mounted: function (t) {
                                var r = e.events.proxy,
                                    n = e.icons,
                                    o = e.i18n;
                                O(t, n.fullscreenWeb), r(t, "click", (function () {
                                    e.fullscreenWeb = !e.fullscreenWeb
                                })), e.on("fullscreenWeb", (function (e) {
                                    E(t, o.get(e ? "Exit web fullscreen" : "Web fullscreen"))
                                }))
                            }
                        })
                    }
                }({
                    name: "fullscreenWeb",
                    disable: !i.fullscreenWeb,
                    position: "right",
                    index: 60
                })), r.add(function (t) {
                    return function (e) {
                        return Et(Et({}, t), {}, {
                            tooltip: e.i18n.get("Fullscreen"),
                            mounted: function (t) {
                                var r = e.events.proxy,
                                    n = e.icons,
                                    o = e.i18n;
                                O(t, n.fullscreen), r(t, "click", (function () {
                                    e.fullscreen = !e.fullscreen
                                })), e.on("fullscreen", (function (e) {
                                    E(t, o.get(e ? "Exit fullscreen" : "Fullscreen"))
                                }))
                            }
                        })
                    }
                }({
                    name: "fullscreen",
                    disable: !i.fullscreen,
                    position: "right",
                    index: 70
                }));
                for (var t = 0; t < i.controls.length; t++) r.add(i.controls[t])
            })), r
        }
        return r(o, [{
            key: "add",
            value: function (t) {
                var e = "function" == typeof t ? t(this.art) : t,
                    r = this.art.template,
                    n = r.$progress,
                    i = r.$controlsLeft,
                    a = r.$controlsRight;
                switch (e.position) {
                    case "top":
                        this.$parent = n;
                        break;
                    case "left":
                        this.$parent = i;
                        break;
                    case "right":
                        this.$parent = a;
                        break;
                    default:
                        q(!1, "Control option.position must one of 'top', 'left', 'right'")
                }
                Pt(s(o.prototype), "add", this).call(this, e)
            }
        }]), o
    }(St);

    function oe(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function ie(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? oe(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : oe(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function ae(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function ce(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? ae(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : ae(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function se(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function le(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? se(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : se(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function ue(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function pe(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? ue(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : ue(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function fe(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function de(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? fe(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : fe(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function he(t) {
        var e = function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
                return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () { }))), !0
            } catch (t) {
                return !1
            }
        }();
        return function () {
            var r, n = s(t);
            if (e) {
                var o = s(this).constructor;
                r = Reflect.construct(n, arguments, o)
            } else r = n.apply(this, arguments);
            return c(this, r)
        }
    }
    var ve = function (e) {
        i(o, e);
        var n = he(o);

        function o(e) {
            var r;
            return t(this, o), (r = n.call(this, e)).art = e, r.name = "contextmenu", r.$parent = e.template.$contextmenu, e.once("ready", (function () {
                d || r.init()
            })), r
        }
        return r(o, [{
            key: "init",
            value: function () {
                var t = this,
                    e = this.art,
                    r = e.option,
                    n = e.template,
                    o = n.$player,
                    i = n.$contextmenu,
                    a = e.events.proxy;
                this.add(function (t) {
                    return function (e) {
                        var r = e.i18n;
                        return ie(ie({}, t), {}, {
                            html: "".concat(r.get("Play speed"), ':<span data-rate="0.5">0.5</span><span data-rate="0.75">0.75</span><span data-rate="1.0" class="art-current">').concat(r.get("Normal"), '</span><span data-rate="1.25">1.25</span><span data-rate="1.5">1.5</span><span data-rate="2.0">2.0</span>'),
                            click: function (t, r) {
                                var n = r.target.dataset.rate;
                                n && (e.playbackRate = Number(n), t.show = !1)
                            },
                            mounted: function (t) {
                                e.on("playbackRate", (function (e) {
                                    var r = m("span", t).find((function (t) {
                                        return Number(t.dataset.rate) === e
                                    }));
                                    r && R(r, "art-current")
                                }))
                            }
                        })
                    }
                }({
                    disable: !r.playbackRate,
                    name: "playbackRate",
                    index: 10
                })), this.add(function (t) {
                    return function (e) {
                        var r = e.i18n;
                        return ce(ce({}, t), {}, {
                            html: "".concat(r.get("Aspect ratio"), ':<span data-ratio="default" class="art-current">').concat(r.get("Default"), '</span><span data-ratio="4:3">4:3</span><span data-ratio="16:9">16:9</span>'),
                            click: function (t, r) {
                                var n = r.target.dataset.ratio;
                                n && (e.aspectRatio = n, t.show = !1)
                            },
                            mounted: function (t) {
                                e.on("aspectRatio", (function (e) {
                                    var r = m("span", t).find((function (t) {
                                        return t.dataset.ratio === e
                                    }));
                                    r && R(r, "art-current")
                                }))
                            }
                        })
                    }
                }({
                    disable: !r.aspectRatio,
                    name: "aspectRatio",
                    index: 20
                })), this.add(function (t) {
                    return function (e) {
                        return le(le({}, t), {}, {
                            html: e.i18n.get("Video info"),
                            click: function (t) {
                                e.info.show = !0, t.show = !1
                            }
                        })
                    }
                }({
                    disable: !1,
                    name: "info",
                    index: 30
                })), this.add(function (t) {
                    return pe(pe({}, t), {}, {
                        html: '<a href="https://artplayer.org" target="_blank">ArtPlayer 4.2.6</a>'
                    })
                }({
                    disable: !1,
                    name: "version",
                    index: 40
                })), this.add(function (t) {
                    return function (e) {
                        return de(de({}, t), {}, {
                            html: e.i18n.get("Close"),
                            click: function (t) {
                                t.show = !1
                            }
                        })
                    }
                }({
                    disable: !1,
                    name: "close",
                    index: 60
                }));
                for (var c = 0; c < r.contextmenu.length; c++) this.add(r.contextmenu[c]);
                a(o, "contextmenu", (function (e) {
                    e.preventDefault(), t.show = !0;
                    var r = e.clientX,
                        n = e.clientY,
                        a = o.getBoundingClientRect(),
                        c = a.height,
                        s = a.width,
                        l = a.left,
                        u = a.top,
                        p = i.getBoundingClientRect(),
                        f = p.height,
                        d = p.width,
                        h = r - l,
                        v = n - u;
                    r + d > l + s && (h = s - d), n + f > u + c && (v = c - f), j(i, {
                        top: "".concat(v, "px"),
                        left: "".concat(h, "px")
                    })
                })), a(o, "click", (function (e) {
                    D(e, i) || (t.show = !1)
                })), this.art.on("blur", (function () {
                    t.show = !1
                }))
            }
        }]), o
    }(St);

    function ye(t) {
        var e = function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
                return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () { }))), !0
            } catch (t) {
                return !1
            }
        }();
        return function () {
            var r, n = s(t);
            if (e) {
                var o = s(this).constructor;
                r = Reflect.construct(n, arguments, o)
            } else r = n.apply(this, arguments);
            return c(this, r)
        }
    }
    var ge = function (e) {
        i(o, e);
        var n = ye(o);

        function o(e) {
            var r;
            return t(this, o), (r = n.call(this, e)).name = "info", e.once("ready", (function () {
                d || r.init()
            })), r
        }
        return r(o, [{
            key: "init",
            value: function () {
                var t = this,
                    e = this.art,
                    r = e.events.proxy,
                    n = e.template,
                    o = n.$infoPanel,
                    i = n.$infoClose,
                    a = n.$video;
                r(i, "click", (function () {
                    t.show = !1
                }));
                var c = null,
                    s = m("[data-video]", o) || [];
                this.art.on("destroy", (function () {
                    clearTimeout(c)
                })),
                    function t() {
                        for (var e = 0; e < s.length; e++) {
                            var r = s[e],
                                n = a[r.dataset.video],
                                o = "number" == typeof n ? n.toFixed(2) : n;
                            r.innerText !== o && (r.innerText = o)
                        }
                        c = setTimeout(t, 1e3)
                    }()
            }
        }]), o
    }(St);

    function me(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function be(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? me(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : me(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function we(t) {
        var e = function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
                return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () { }))), !0
            } catch (t) {
                return !1
            }
        }();
        return function () {
            var r, n = s(t);
            if (e) {
                var o = s(this).constructor;
                r = Reflect.construct(n, arguments, o)
            } else r = n.apply(this, arguments);
            return c(this, r)
        }
    }
    var xe = function (e) {
        i(o, e);
        var n = we(o);

        function o(e) {
            var r;
            return t(this, o), (r = n.call(this, e)).name = "subtitle", e.once("ready", (function () {
                r.init(e.option.subtitle)
            })), r
        }
        return r(o, [{
            key: "url",
            get: function () {
                return this.art.template.$track.src
            },
            set: function (t) {
                this.switch(t)
            }
        }, {
            key: "textTrack",
            get: function () {
                return this.art.template.$video.textTracks[0]
            }
        }, {
            key: "activeCue",
            get: function () {
                return this.textTrack.activeCues[0]
            }
        }, {
            key: "bilingual",
            get: function () {
                return x(this.art.template.$subtitle, "art-bilingual")
            },
            set: function (t) {
                var e = this.art.template.$subtitle;
                t ? b(e, "art-bilingual") : w(e, "art-bilingual")
            }
        }, {
            key: "style",
            value: function (t, e) {
                var r = this.art.template.$subtitle;
                return "object" === a(t) ? j(r, t) : k(r, t, e)
            }
        }, {
            key: "update",
            value: function () {
                var t = this.art.template.$subtitle;
                t.innerHTML = "", this.activeCue && (t.innerHTML = this.activeCue.text.split(/\r?\n/).map((function (t) {
                    return "<p>".concat(tt(t), "</p>")
                })).join(""), this.art.emit("subtitleUpdate", this.activeCue.text))
            }
        }, {
            key: "switch",
            value: function (t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                    r = this.art,
                    n = r.i18n,
                    o = r.notice,
                    i = r.option,
                    a = be(be(be({}, i.subtitle), e), {}, {
                        url: t
                    });
                return this.init(a).then((function (t) {
                    return e.name && (o.show = "".concat(n.get("Switch subtitle"), ": ").concat(e.name)), t
                }))
            }
        }, {
            key: "init",
            value: function (t) {
                var e = this;
                if (u(t, ft.subtitle), t.url) {
                    var r = this.art,
                        n = r.notice,
                        o = r.events.proxy,
                        i = r.template,
                        a = i.$subtitle,
                        c = i.$video;
                    if (!i.$track) {
                        var s = document.createElement("track");
                        s.default = !0, s.kind = "metadata", c.appendChild(s), this.art.template.$track = s, o(this.textTrack, "cuechange", this.update.bind(this))
                    }
                    return this.style(t.style), this.bilingual = t.bilingual, q(window.fetch, "fetch not support"), fetch(t.url).then((function (t) {
                        return t.arrayBuffer()
                    })).then((function (r) {
                        q(window.TextDecoder, "TextDecoder not support");
                        var n = new TextDecoder(t.encoding).decode(r);
                        switch (e.art.emit("subtitleLoad", t.url), t.type || V(t.url)) {
                            case "srt":
                                return B(F(n));
                            case "ass":
                                return B(I(n));
                            case "vtt":
                                return B(n);
                            default:
                                return t.url
                        }
                    })).then((function (t) {
                        return a.innerHTML = "", e.url === t || (URL.revokeObjectURL(e.url), e.art.template.$track.src = t, e.art.emit("subtitleSwitch", t)), t
                    })).catch((function (t) {
                        throw n.show = t, t
                    }))
                }
            }
        }]), o
    }(St);
    var Oe = function () {
        function e(r) {
            var n = this;
            t(this, e), this.destroyEvents = [], this.proxy = this.proxy.bind(this), this.hover = this.hover.bind(this), this.loadImg = this.loadImg.bind(this), r.whitelist.state && r.once("ready", (function () {
                ! function (t, e) {
                    var r = t.template.$player;
                    e.proxy(document, ["click", "contextmenu"], (function (e) {
                        D(e, r) ? (t.isFocus = !0, t.emit("focus")) : (t.isFocus = !1, t.emit("blur"))
                    }))
                }(r, n),
                    function (t, e) {
                        var r = t.template.$player;
                        e.hover(r, (function () {
                            b(r, "art-hover"), t.emit("hover", !0)
                        }), (function () {
                            w(r, "art-hover"), t.emit("hover")
                        }))
                    }(r, n),
                    function (t, e) {
                        var r = t.template.$player;
                        e.proxy(r, "mousemove", (function (e) {
                            t.emit("mousemove", e)
                        }))
                    }(r, n),
                    function (t, e) {
                        var r = t.option,
                            n = J((function () {
                                t.normalSize && (t.autoSize = r.autoSize), t.aspectRatioReset = !0, t.emit("resize")
                            }), 500);
                        e.proxy(window, ["orientationchange", "resize"], (function () {
                            n()
                        })), screen && screen.orientation && screen.orientation.onchange && e.proxy(screen.orientation, "change", (function () {
                            n()
                        }))
                    }(r, n),
                    function (t, e) {
                        if (d && !t.option.isLive) {
                            var r = t.notice,
                                n = t.template.$video,
                                o = !1,
                                i = 0,
                                a = 0;
                            e.proxy(n, "touchstart", (function (t) {
                                1 === t.touches.length && (o = !0, i = t.touches[0].clientX)
                            })), e.proxy(n, "touchmove", (function (e) {
                                if (1 === e.touches.length && o) {
                                    var c = G((e.touches[0].clientX - i) / n.clientWidth, -1, 1);
                                    a = G(t.currentTime + t.duration * c, 0, t.duration), r.show = "".concat(K(a), " / ").concat(K(t.duration))
                                }
                            })), e.proxy(document, "touchend", (function () {
                                o && a && (t.seek = a), o = !1, i = 0, a = 0
                            }))
                        }
                    }(r, n),
                    function (t, e) {
                        var r = t.option,
                            n = t.template.$container,
                            o = J((function () {
                                t.emit("view", $(n, 50))
                            }), 200);
                        e.proxy(window, "scroll", (function () {
                            o()
                        })), t.on("view", (function (e) {
                            r.autoMini && (t.mini = !e)
                        }))
                    }(r, n)
            }))
        }
        return r(e, [{
            key: "proxy",
            value: function (t, e, r) {
                var n = this,
                    o = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {};
                if (Array.isArray(e)) return e.map((function (e) {
                    return n.proxy(t, e, r, o)
                }));
                t.addEventListener(e, r, o);
                var i = function () {
                    return t.removeEventListener(e, r, o)
                };
                return this.destroyEvents.push(i), i
            }
        }, {
            key: "hover",
            value: function (t, e, r) {
                e && this.proxy(t, "mouseenter", e), r && this.proxy(t, "mouseleave", r)
            }
        }, {
            key: "loadImg",
            value: function (t) {
                var e = this;
                return new Promise((function (r, n) {
                    var o;
                    if (t instanceof HTMLImageElement) o = t;
                    else {
                        if ("string" != typeof t) return n(new M("Unable to get Image"));
                        (o = new Image).src = t
                    }
                    if (o.complete) return r(o);
                    e.proxy(o, "load", (function () {
                        return r(o)
                    })), e.proxy(o, "error", (function () {
                        return n(new M("Failed to load Image: ".concat(o.src)))
                    }))
                }))
            }
        }, {
            key: "destroy",
            value: function () {
                for (var t = 0; t < this.destroyEvents.length; t++) this.destroyEvents[t]()
            }
        }]), e
    }(),
        ke = function () {
            function e(r) {
                var n = this;
                t(this, e), this.art = r, this.keys = {}, r.once("ready", (function () {
                    r.option.hotkey && !d && n.init()
                }))
            }
            return r(e, [{
                key: "init",
                value: function () {
                    var t = this,
                        e = this.art.events.proxy;
                    this.add(27, (function () {
                        t.art.fullscreenWeb && (t.art.fullscreenWeb = !1)
                    })), this.add(32, (function () {
                        t.art.toggle()
                    })), this.add(37, (function () {
                        t.art.backward = 5
                    })), this.add(38, (function () {
                        t.art.volume += .1
                    })), this.add(39, (function () {
                        t.art.forward = 5
                    })), this.add(40, (function () {
                        t.art.volume -= .1
                    })), e(window, "keydown", (function (e) {
                        if (t.art.isFocus) {
                            var r = document.activeElement.tagName.toUpperCase(),
                                n = document.activeElement.getAttribute("contenteditable");
                            if ("INPUT" !== r && "TEXTAREA" !== r && "" !== n && "true" !== n) {
                                var o = t.keys[e.keyCode];
                                if (o) {
                                    e.preventDefault();
                                    for (var i = 0; i < o.length; i++) o[i].call(t.art, e);
                                    t.art.emit("hotkey", e)
                                }
                            }
                        }
                    }))
                }
            }, {
                key: "add",
                value: function (t, e) {
                    return this.keys[t] ? this.keys[t].push(e) : this.keys[t] = [e], this
                }
            }, {
                key: "remove",
                value: function (t, e) {
                    if (this.keys[t]) {
                        var r = this.keys[t].indexOf(e); - 1 !== r && this.keys[t].splice(r, 1)
                    }
                    return this
                }
            }]), e
        }();

    function je(t) {
        var e = function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
                return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () { }))), !0
            } catch (t) {
                return !1
            }
        }();
        return function () {
            var r, n = s(t);
            if (e) {
                var o = s(this).constructor;
                r = Reflect.construct(n, arguments, o)
            } else r = n.apply(this, arguments);
            return c(this, r)
        }
    }
    var Pe = function (e) {
        i(n, e);
        var r = je(n);

        function n(e) {
            var o;
            t(this, n), o = r.call(this, e);
            var i = e.option,
                a = e.template.$layer;
            return o.name = "layer", o.$parent = a, e.once("ready", (function () {
                for (var t = 0; t < i.layers.length; t++) o.add(i.layers[t])
            })), o
        }
        return n
    }(St);

    function Se(t) {
        var e = function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
                return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () { }))), !0
            } catch (t) {
                return !1
            }
        }();
        return function () {
            var r, n = s(t);
            if (e) {
                var o = s(this).constructor;
                r = Reflect.construct(n, arguments, o)
            } else r = n.apply(this, arguments);
            return c(this, r)
        }
    }
    var Re = function (e) {
        i(n, e);
        var r = Se(n);

        function n(e) {
            var o;
            return t(this, n), (o = r.call(this, e)).name = "loading", O(e.template.$loading, e.icons.loading), o
        }
        return n
    }(St),
        Ee = function () {
            function e(r) {
                t(this, e), this.art = r, this.time = 2e3, this.timer = null
            }
            return r(e, [{
                key: "show",
                set: function (t) {
                    var e = this.art.template,
                        r = e.$player,
                        n = e.$noticeInner;
                    if (!t) return w(r, "art-notice-show");
                    n.innerText = t instanceof Error ? t.message.trim() : t, b(r, "art-notice-show"), clearTimeout(this.timer), this.timer = setTimeout((function () {
                        n.innerText = "", w(r, "art-notice-show")
                    }), this.time)
                }
            }]), e
        }();

    function $e(t) {
        var e = function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
                return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () { }))), !0
            } catch (t) {
                return !1
            }
        }();
        return function () {
            var r, n = s(t);
            if (e) {
                var o = s(this).constructor;
                r = Reflect.construct(n, arguments, o)
            } else r = n.apply(this, arguments);
            return c(this, r)
        }
    }
    var De = function (e) {
        i(n, e);
        var r = $e(n);

        function n(e) {
            var o;
            return t(this, n), (o = r.call(this, e)).name = "mask", O(e.template.$state, e.icons.state), o
        }
        return n
    }(St);

    function ze(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }
    var Te = function e(r) {
        var n = this;
        t(this, e);
        var o = function (t) {
            for (var e = 1; e < arguments.length; e++) {
                var r = null != arguments[e] ? arguments[e] : {};
                e % 2 ? ze(Object(r), !0).forEach((function (e) {
                    rt(t, e, r[e])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : ze(Object(r)).forEach((function (e) {
                    Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
                }))
            }
            return t
        }({
            loading: '<svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-default"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"/><rect x="47" y="40" width="6" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(0 50 50) translate(0 -30)"><animate attributeName="opacity" from="1" to="0" dur="1s" begin="-1s" repeatCount="indefinite"/></rect><rect x="47" y="40" width="6" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(30 50 50) translate(0 -30)"><animate attributeName="opacity" from="1" to="0" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"/></rect><rect x="47" y="40" width="6" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(60 50 50) translate(0 -30)"><animate attributeName="opacity" from="1" to="0" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"/></rect><rect x="47" y="40" width="6" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(90 50 50) translate(0 -30)"><animate attributeName="opacity" from="1" to="0" dur="1s" begin="-0.75s" repeatCount="indefinite"/></rect><rect x="47" y="40" width="6" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(120 50 50) translate(0 -30)"><animate attributeName="opacity" from="1" to="0" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"/></rect><rect x="47" y="40" width="6" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(150 50 50) translate(0 -30)"><animate attributeName="opacity" from="1" to="0" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"/></rect><rect x="47" y="40" width="6" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(180 50 50) translate(0 -30)"><animate attributeName="opacity" from="1" to="0" dur="1s" begin="-0.5s" repeatCount="indefinite"/></rect><rect x="47" y="40" width="6" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(210 50 50) translate(0 -30)"><animate attributeName="opacity" from="1" to="0" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"/></rect><rect x="47" y="40" width="6" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(240 50 50) translate(0 -30)"><animate attributeName="opacity" from="1" to="0" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"/></rect><rect x="47" y="40" width="6" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(270 50 50) translate(0 -30)"><animate attributeName="opacity" from="1" to="0" dur="1s" begin="-0.25s" repeatCount="indefinite"/></rect><rect x="47" y="40" width="6" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(300 50 50) translate(0 -30)"><animate attributeName="opacity" from="1" to="0" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"/></rect><rect x="47" y="40" width="6" height="20" rx="5" ry="5" fill="#ffffff" transform="rotate(330 50 50) translate(0 -30)"><animate attributeName="opacity" from="1" to="0" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"/></rect></svg>',
            state: '<svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" style="filter: drop-shadow(0px 1px 1px black);" viewBox="0 0 24 24"><path d="M20,2H4C1.8,2,0,3.8,0,6v12c0,2.2,1.8,4,4,4h16c2.2,0,4-1.8,4-4V6C24,3.8,22.2,2,20,2z M15.6,12.8L10.5,16 C9.9,16.5,9,16,9,15.2V8.8C9,8,9.9,7.5,10.5,8l5.1,3.2C16.3,11.5,16.3,12.5,15.6,12.8z"/></svg>',
            play: '<svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 22 22"><path d="M17.982 9.275L8.06 3.27A2.013 2.013 0 0 0 5 4.994v12.011a2.017 2.017 0 0 0 3.06 1.725l9.922-6.005a2.017 2.017 0 0 0 0-3.45z"></path></svg>',
            pause: '<svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 22 22"><path d="M7 3a2 2 0 0 0-2 2v12a2 2 0 1 0 4 0V5a2 2 0 0 0-2-2zM15 3a2 2 0 0 0-2 2v12a2 2 0 1 0 4 0V5a2 2 0 0 0-2-2z"></path></svg>',
            volume: '<svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 22 22"><path d="M10.188 4.65L6 8H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1l4.188 3.35a.5.5 0 0 0 .812-.39V5.04a.498.498 0 0 0-.812-.39zM14.446 3.778a1 1 0 0 0-.862 1.804 6.002 6.002 0 0 1-.007 10.838 1 1 0 0 0 .86 1.806A8.001 8.001 0 0 0 19 11a8.001 8.001 0 0 0-4.554-7.222z"></path><path d="M15 11a3.998 3.998 0 0 0-2-3.465v6.93A3.998 3.998 0 0 0 15 11z"></path></svg>',
            volumeClose: '<svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 22 22"><path d="M15 11a3.998 3.998 0 0 0-2-3.465v2.636l1.865 1.865A4.02 4.02 0 0 0 15 11z"></path><path d="M13.583 5.583A5.998 5.998 0 0 1 17 11a6 6 0 0 1-.585 2.587l1.477 1.477a8.001 8.001 0 0 0-3.446-11.286 1 1 0 0 0-.863 1.805zM18.778 18.778l-2.121-2.121-1.414-1.414-1.415-1.415L13 13l-2-2-3.889-3.889-3.889-3.889a.999.999 0 1 0-1.414 1.414L5.172 8H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1l4.188 3.35a.5.5 0 0 0 .812-.39v-3.131l2.587 2.587-.01.005a1 1 0 0 0 .86 1.806c.215-.102.424-.214.627-.333l2.3 2.3a1.001 1.001 0 0 0 1.414-1.416zM11 5.04a.5.5 0 0 0-.813-.39L8.682 5.854 11 8.172V5.04z"></path></svg>',
            subtitle: '<svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 48 48"><path d="M0 0h48v48H0z" fill="none"/><path d="M40 8H8c-2.21 0-4 1.79-4 4v24c0 2.21 1.79 4 4 4h32c2.21 0 4-1.79 4-4V12c0-2.21-1.79-4-4-4zM8 24h8v4H8v-4zm20 12H8v-4h20v4zm12 0h-8v-4h8v4zm0-8H20v-4h20v4z"/></svg>',
            screenshot: '<svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 50 50">\t<path d="M 19.402344 6 C 17.019531 6 14.96875 7.679688 14.5 10.011719 L 14.097656 12 L 9 12 C 6.238281 12 4 14.238281 4 17 L 4 38 C 4 40.761719 6.238281 43 9 43 L 41 43 C 43.761719 43 46 40.761719 46 38 L 46 17 C 46 14.238281 43.761719 12 41 12 L 35.902344 12 L 35.5 10.011719 C 35.03125 7.679688 32.980469 6 30.597656 6 Z M 25 17 C 30.519531 17 35 21.480469 35 27 C 35 32.519531 30.519531 37 25 37 C 19.480469 37 15 32.519531 15 27 C 15 21.480469 19.480469 17 25 17 Z M 25 19 C 20.589844 19 17 22.589844 17 27 C 17 31.410156 20.589844 35 25 35 C 29.410156 35 33 31.410156 33 27 C 33 22.589844 29.410156 19 25 19 Z "/></svg>',
            setting: '<svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 22 22"><circle cx="11" cy="11" r="2"></circle><path d="M19.164 8.861L17.6 8.6a6.978 6.978 0 0 0-1.186-2.099l.574-1.533a1 1 0 0 0-.436-1.217l-1.997-1.153a1.001 1.001 0 0 0-1.272.23l-1.008 1.225a7.04 7.04 0 0 0-2.55.001L8.716 2.829a1 1 0 0 0-1.272-.23L5.447 3.751a1 1 0 0 0-.436 1.217l.574 1.533A6.997 6.997 0 0 0 4.4 8.6l-1.564.261A.999.999 0 0 0 2 9.847v2.306c0 .489.353.906.836.986l1.613.269a7 7 0 0 0 1.228 2.075l-.558 1.487a1 1 0 0 0 .436 1.217l1.997 1.153c.423.244.961.147 1.272-.23l1.04-1.263a7.089 7.089 0 0 0 2.272 0l1.04 1.263a1 1 0 0 0 1.272.23l1.997-1.153a1 1 0 0 0 .436-1.217l-.557-1.487c.521-.61.94-1.31 1.228-2.075l1.613-.269a.999.999 0 0 0 .835-.986V9.847a.999.999 0 0 0-.836-.986zM11 15a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"></path></svg>',
            fullscreen: '<svg xmlns="http://www.w3.org/2000/svg" height="36" width="36" viewBox="0 0 36 36">\t<path d="m 10,16 2,0 0,-4 4,0 0,-2 L 10,10 l 0,6 0,0 z"></path>\t<path d="m 20,10 0,2 4,0 0,4 2,0 L 26,10 l -6,0 0,0 z"></path>\t<path d="m 24,24 -4,0 0,2 L 26,26 l 0,-6 -2,0 0,4 0,0 z"></path>\t<path d="M 12,20 10,20 10,26 l 6,0 0,-2 -4,0 0,-4 0,0 z"></path></svg>',
            fullscreenWeb: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" height="36" width="36">\t<path d="m 28,11 0,14 -20,0 0,-14 z m -18,2 16,0 0,10 -16,0 0,-10 z" fill-rule="evenodd"></path></svg>',
            pip: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" height="32" width="32"><path d="M25,17 L17,17 L17,23 L25,23 L25,17 L25,17 Z M29,25 L29,10.98 C29,9.88 28.1,9 27,9 L9,9 C7.9,9 7,9.88 7,10.98 L7,25 C7,26.1 7.9,27 9,27 L27,27 C28.1,27 29,26.1 29,25 L29,25 Z M27,25.02 L9,25.02 L9,10.97 L27,10.97 L27,25.02 L27,25.02 Z"></path></svg>'
        }, r.option.icons);
        Object.keys(o).forEach((function (t) {
            U(n, t, {
                get: function () {
                    var e = document.createElement("i");
                    return b(e, "art-icon"), b(e, "art-icon-".concat(t)), O(e, o[t]), e
                }
            })
        }))
    };

    function Ce(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Ae(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Ce(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Ce(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function Le(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Me(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Le(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Le(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function qe(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Fe(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? qe(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : qe(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function Be(t, e) {
        var r = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var n = Object.getOwnPropertySymbols(t);
            e && (n = n.filter((function (e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), r.push.apply(r, n)
        }
        return r
    }

    function Ie(t) {
        for (var e = 1; e < arguments.length; e++) {
            var r = null != arguments[e] ? arguments[e] : {};
            e % 2 ? Be(Object(r), !0).forEach((function (e) {
                rt(t, e, r[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r)) : Be(Object(r)).forEach((function (e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e))
            }))
        }
        return t
    }

    function Ve(t) {
        var e = function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
                return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () { }))), !0
            } catch (t) {
                return !1
            }
        }();
        return function () {
            var r, n = s(t);
            if (e) {
                var o = s(this).constructor;
                r = Reflect.construct(n, arguments, o)
            } else r = n.apply(this, arguments);
            return c(this, r)
        }
    }
    var We = function (e) {
        i(n, e);
        var r = Ve(n);

        function n(e) {
            var o;
            t(this, n), (o = r.call(this, e)).name = "setting";
            var i = e.option,
                a = e.template,
                c = a.$setting,
                s = a.$settingBody,
                l = e.events.proxy;
            return o.$parent = s, i.setting && (e.once("ready", (function () {
                l(c, "click", (function (t) {
                    t.target === c && (o.show = !1)
                })), o.add(function (t) {
                    return function (e) {
                        var r = e.i18n;
                        return Ae(Ae({}, t), {}, {
                            html: '<div class="art-setting-header">'.concat(r.get("Flip"), '</div><div class="art-setting-radio"><div class="art-radio-item current"><button type="button" data-value="normal">').concat(r.get("Normal"), '</button></div><div class="art-radio-item"><button type="button" data-value="horizontal">').concat(r.get("Horizontal"), '</button></div><div class="art-radio-item"><button type="button" data-value="vertical">').concat(r.get("Vertical"), "</button></div></div>"),
                            click: function (t, r) {
                                var n = r.target.dataset.value;
                                n && (e.flip = n)
                            },
                            mounted: function (t) {
                                e.on("flip", (function (e) {
                                    var r = m("button", t).find((function (t) {
                                        return t.dataset.value === e
                                    }));
                                    r && R(r.parentElement, "current")
                                }))
                            }
                        })
                    }
                }({
                    disable: !i.flip,
                    name: "flip"
                })), o.add(function (t) {
                    return function (e) {
                        var r = e.i18n;
                        return Me(Me({}, t), {}, {
                            html: '<div class="art-setting-header">'.concat(r.get("Rotate"), ': <span class="art-rotate-value">0°</span></div><div class="art-setting-radio"><div class="art-radio-item"><button type="button" data-value="90">+90°</button></div><div class="art-radio-item"><button type="button" data-value="-90">-90°</button></div></div>'),
                            click: function (t, r) {
                                var n = r.target.dataset.value;
                                if (n) {
                                    var o = e.rotate + Number(n);
                                    e.rotate = 360 === o || -360 === o ? 0 : o
                                } else e.rotate = 0
                            },
                            mounted: function (t) {
                                var r = g(".art-rotate-value", t);
                                e.on("rotate", (function (t) {
                                    r.innerText = "".concat(t || 0, "°")
                                }))
                            }
                        })
                    }
                }({
                    disable: !i.rotate,
                    name: "rotate"
                })), o.add(function (t) {
                    return function (e) {
                        var r = e.i18n;
                        return Fe(Fe({}, t), {}, {
                            html: '<div class="art-setting-header">'.concat(r.get("Aspect ratio"), '</div><div class="art-setting-radio"><div class="art-radio-item current"><button type="button" data-value="default">').concat(r.get("Default"), '</button></div><div class="art-radio-item"><button type="button" data-value="4:3">4:3</button></div><div class="art-radio-item"><button type="button" data-value="16:9">16:9</button></div></div>'),
                            click: function (t, r) {
                                var n = r.target.dataset.value;
                                n && (e.aspectRatio = n)
                            },
                            mounted: function (t) {
                                e.on("aspectRatio", (function (e) {
                                    var r = m("button", t).find((function (t) {
                                        return t.dataset.value === e
                                    }));
                                    r && R(r.parentElement, "current")
                                }))
                            }
                        })
                    }
                }({
                    disable: !i.aspectRatio,
                    name: "aspectRatio"
                })), o.add(function (t) {
                    return function (e) {
                        var r = e.i18n,
                            n = e.events.proxy;
                        return Ie(Ie({}, t), {}, {
                            html: '<div class="art-setting-header">'.concat(r.get("Play speed"), ': <span class="art-subtitle-value">1.0</span>x</div><div class="art-setting-range"><input class="art-subtitle-range" value="1" type="range" min="0.5" max="2" step="0.25"></div>'),
                            mounted: function (t) {
                                var r = g(".art-setting-range input", t),
                                    o = g(".art-subtitle-value", t);
                                n(r, "change", (function () {
                                    var t = r.value;
                                    o.innerText = t, e.playbackRate = Number(t)
                                })), e.on("playbackRate", (function (t) {
                                    t && r.value !== t && (r.value = t, o.innerText = t)
                                }))
                            }
                        })
                    }
                }({
                    disable: !i.playbackRate,
                    name: "playbackRate"
                }));
                for (var t = 0; t < i.settings.length; t++) o.add(i.settings[t])
            })), e.on("blur", (function () {
                o.show = !1
            }))), o
        }
        return n
    }(St),
        He = function () {
            function e() {
                t(this, e), this.name = "artplayer_settings", this.settings = {}
            }
            return r(e, [{
                key: "get",
                value: function (t) {
                    try {
                        var e = JSON.parse(window.localStorage.getItem(this.name)) || {};
                        return t ? e[t] : e
                    } catch (e) {
                        return t ? this.settings[t] : this.settings
                    }
                }
            }, {
                key: "set",
                value: function (t, e) {
                    try {
                        var r = Object.assign({}, this.get(), rt({}, t, e));
                        window.localStorage.setItem(this.name, JSON.stringify(r))
                    } catch (r) {
                        this.settings[t] = e
                    }
                }
            }, {
                key: "del",
                value: function (t) {
                    try {
                        var e = this.get();
                        delete e[t], window.localStorage.setItem(this.name, JSON.stringify(e))
                    } catch (e) {
                        delete this.settings[t]
                    }
                }
            }, {
                key: "clean",
                value: function () {
                    try {
                        window.localStorage.removeItem(this.name)
                    } catch (t) {
                        this.settings = {}
                    }
                }
            }]), e
        }();

    function Ne(t) {
        var e = t.i18n,
            r = t.subtitle,
            n = t.events.proxy;
        return {
            title: "Subtitle",
            name: "subtitleOffset",
            index: 20,
            html: '<div class="art-setting-header">'.concat(e.get("Subtitle offset time"), ': <span class="art-subtitle-value">0</span>s</div><div class="art-setting-range"><input class="art-subtitle-range" value="0" type="range" min="-5" max="5" step="0.5"></div>'),
            mounted: function (e) {
                var o = g(".art-setting-range input", e),
                    i = g(".art-subtitle-value", e);
                n(o, "change", (function () {
                    var e = o.value;
                    i.innerText = e, t.plugins.subtitleOffset.offset(Number(e))
                })), t.on("subtitle:switch", (function () {
                    o.value = 0, i.innerText = 0
                })), t.on("subtitleOffset", (function (t) {
                    r.update(), o.value !== t && (o.value = t, i.innerText = t)
                }))
            }
        }
    }

    function Ue(t) {
        var e = t.constructor.utils.clamp,
            r = t.setting,
            n = t.notice,
            o = t.template,
            i = t.i18n;
        r.add(Ne);
        var a = [];
        return t.on("subtitle:switch", (function () {
            a = []
        })), {
            name: "subtitleOffset",
            offset: function (r) {
                if (o.$track && o.$track.track) {
                    for (var c = Array.from(o.$track.track.cues), s = e(r, -5, 5), l = 0; l < c.length; l++) {
                        var u = c[l];
                        a[l] || (a[l] = {
                            startTime: u.startTime,
                            endTime: u.endTime
                        }), u.startTime = e(a[l].startTime + s, 0, t.duration), u.endTime = e(a[l].endTime + s, 0, t.duration)
                    }
                    n.show = "".concat(i.get("Subtitle offset time"), ": ").concat(r, "s"), t.emit("subtitleOffset", r)
                } else n.show = "".concat(i.get("No subtitles found")), t.emit("subtitleOffset", 0)
            }
        }
    }

    function _e(t) {
        var e = t.events.proxy,
            r = t.template,
            n = r.$video,
            o = r.$player,
            i = t.option,
            a = t.setting,
            c = t.i18n;

        function s(e) {
            if (e) {
                var r = n.canPlayType(e.type);
                if ("maybe" === r || "probably" === r) {
                    var o = URL.createObjectURL(e);
                    i.title = e.name, t.switchUrl(o, e.name), t.emit("localVideo", e)
                } else q(!1, "Playback of this file format is not supported")
            }
        }

        function l(t) {
            var r = O(t, '<input type="file">');
            k(t, "position", "relative"), j(r, {
                position: "absolute",
                width: "100%",
                height: "100%",
                left: "0",
                top: "0",
                opacity: "0"
            }), e(r, "change", (function () {
                s(r.files[0])
            }))
        }
        return e(o, "dragover", (function (t) {
            t.preventDefault()
        })), e(o, "drop", (function (t) {
            t.preventDefault(), s(t.dataTransfer.files[0])
        })), t.once("ready", (function () {
            a.add({
                title: "Local Video",
                name: "localVideo",
                index: 30,
                html: '<div class="art-setting-header">'.concat(c.get("Local Video"), '</div><div class="art-setting-upload"><div class="art-upload-btn">').concat(c.get("Open"), '</div><div class="art-upload-value"></div></div>'),
                mounted: function (e) {
                    var r = g(".art-upload-btn", e),
                        n = g(".art-upload-value", e);
                    t.on("localVideo", (function (t) {
                        n.textContent = t.name, n.title = t.name
                    })), l(r)
                }
            })
        })), {
            name: "localVideo",
            attach: l
        }
    }

    function Xe(t) {
        var e = t.events.proxy,
            r = t.subtitle,
            n = t.setting,
            o = t.i18n;

        function i(n) {
            var o = O(n, '<input type="file">');
            k(n, "position", "relative"), j(o, {
                position: "absolute",
                width: "100%",
                height: "100%",
                left: "0",
                top: "0",
                opacity: "0"
            }), e(o, "change", (function () {
                ! function (e) {
                    if (e) {
                        var n = V(e.name);
                        ["ass", "vtt", "srt"].includes(n) ? (r.switch(URL.createObjectURL(e), {
                            name: e.name,
                            ext: n
                        }), t.emit("localSubtitle", e)) : q(!1, "Only supports subtitle files in .ass, .vtt and .srt format")
                    }
                }(o.files[0])
            }))
        }
        return t.once("ready", (function () {
            n.add({
                title: "Local Subtitle",
                name: "localSubtitle",
                index: 40,
                html: '<div class="art-setting-header">'.concat(o.get("Local Subtitle"), '</div><div class="art-setting-upload"><div class="art-upload-btn">').concat(o.get("Open"), '</div><div class="art-upload-value"></div></div>'),
                mounted: function (e) {
                    var r = g(".art-upload-btn", e),
                        n = g(".art-upload-value", e);
                    t.on("localSubtitle", (function (t) {
                        n.textContent = t.name, n.title = t.name
                    })), i(r)
                }
            })
        })), {
            name: "localSubtitle",
            attach: i
        }
    }

    function Qe(t) {
        return t.layers.add({
            name: "miniProgressBar",
            style: {
                display: "none",
                position: "absolute",
                left: 0,
                right: 0,
                bottom: 0,
                height: "2px",
                backgroundColor: "var(--theme)"
            },
            mounted: function (e) {
                t.on("control", (function (t) {
                    e.style.display = t ? "none" : "block"
                })), t.on("destroy", (function () {
                    e.style.display = "none"
                })), t.on("video:timeupdate", (function () {
                    e.style.width = "".concat(100 * t.played, "%")
                }))
            }
        }), {
            name: "miniProgressBar"
        }
    }
    var Ye = function () {
        function e(r) {
            t(this, e), this.art = r, this.id = 0;
            var n = r.option;
            n.subtitle.url && n.subtitleOffset && this.add(Ue), !n.isLive && n.miniProgressBar && this.add(Qe), n.localVideo && this.add(_e), n.localSubtitle && this.add(Xe);
            for (var o = 0; o < n.plugins.length; o++) this.add(n.plugins[o])
        }
        return r(e, [{
            key: "add",
            value: function (t) {
                this.id += 1;
                var e = t.call(this, this.art),
                    r = e && e.name || t.name || "plugin".concat(this.id);
                return q(!X(this, r), "Cannot add a plugin that already has the same name: ".concat(r)), U(this, r, {
                    value: e
                }), this
            }
        }]), e
    }(),
        Ze = function () {
            function e(r) {
                t(this, e), this.art = r, this.init()
            }
            return r(e, [{
                key: "current",
                get: function () {
                    return this.art.option.ads[this.index]
                }
            }, {
                key: "prev",
                get: function () {
                    return this.art.option.ads[this.index - 1]
                }
            }, {
                key: "next",
                get: function () {
                    return this.art.option.ads[this.index + 1]
                }
            }, {
                key: "init",
                value: function () {
                    this.index = 0, this.isEnd = !1, this.playing = !1, this.urlCache = this.art.option.url, this.current && (this.playing = !0, this.play(this.current))
                }
            }, {
                key: "play",
                value: function () {
                    var t = this,
                        e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                    this.isEnd || (this.art.switchUrl(e.url), this.art.once("video:timeupdate", (function () {
                        t.art.emit("ads:start", e)
                    })), this.art.once("video:ended", (function () {
                        var e = t.next;
                        e ? (t.index += 1, t.play(e)) : t.end()
                    })))
                }
            }, {
                key: "end",
                value: function () {
                    this.isEnd || (this.isEnd = !0, this.playing = !1, this.art.option.url = this.urlCache, this.art.switchUrl(this.urlCache), this.art.emit("ads:end"))
                }
            }]), e
        }(),
        Je = function e(r) {
            t(this, e);
            for (var n = r.option, o = r.events.proxy, i = r.template.$video, a = 0; a < dt.events.length; a++) o(i, dt.events[a], (function (t) {
                r.emit("video:".concat(t.type), t)
            }));
            Object.keys(n.moreVideoAttr).forEach((function (t) {
                i[t] = n.moreVideoAttr[t]
            })), n.muted && (i.muted = n.muted), n.volume && (i.volume = G(n.volume, 0, 1)), n.poster && (i.poster = n.poster), n.autoplay && (i.autoplay = n.autoplay);
            var c = n.type || V(n.url),
                s = n.customType[c];
            c && s ? (s(i, n.url, r), r.emit("customType", c)) : (i.src = n.url, r.emit("url", i.src))
        };

    function Ge(t) {
        var e = function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
                return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () { }))), !0
            } catch (t) {
                return !1
            }
        }();
        return function () {
            var r, n = s(t);
            if (e) {
                var o = s(this).constructor;
                r = Reflect.construct(n, arguments, o)
            } else r = n.apply(this, arguments);
            return c(this, r)
        }
    }
    var Ke = 0,
        tr = [],
        er = function (e) {
            i(a, e);
            var o = Ge(a);

            function a(e) {
                var r;
                t(this, a), (r = o.call(this)).id = ++Ke;
                var i = Y(a.option, e);
                return r.option = u(i, ft), r.isReady = !1, r.isFocus = !1, r.isDestroy = !1, r.whitelist = new ht(n(r)), r.template = new vt(n(r)), r.events = new Oe(n(r)), r.whitelist.state ? (r.storage = new He(n(r)), r.icons = new Te(n(r)), r.i18n = new mt(n(r)), r.notice = new Ee(n(r)), r.player = new kt(n(r)), r.layers = new Pe(n(r)), r.controls = new ne(n(r)), r.contextmenu = new ve(n(r)), r.subtitle = new xe(n(r)), r.ads = new Ze(n(r)), r.info = new ge(n(r)), r.loading = new Re(n(r)), r.hotkey = new ke(n(r)), r.mask = new De(n(r)), r.setting = new We(n(r)), r.plugins = new Ye(n(r))) : r.mobile = new Je(n(r)), tr.push(n(r)), r
            }
            return r(a, [{
                key: "proxy",
                get: function () {
                    return this.events.proxy
                }
            }, {
                key: "query",
                get: function () {
                    return this.template.query
                }
            }, {
                key: "destroy",
                value: function () {
                    var t = !(arguments.length > 0 && void 0 !== arguments[0]) || arguments[0];
                    this.events.destroy(), this.template.destroy(t), tr.splice(tr.indexOf(this), 1), this.isDestroy = !0, this.emit("destroy")
                }
            }], [{
                key: "instances",
                get: function () {
                    return tr
                }
            }, {
                key: "version",
                get: function () {
                    return "4.2.6"
                }
            }, {
                key: "env",
                get: function () {
                    return "production"
                }
            }, {
                key: "build",
                get: function () {
                    return "1642483742027"
                }
            }, {
                key: "config",
                get: function () {
                    return dt
                }
            }, {
                key: "utils",
                get: function () {
                    return et
                }
            }, {
                key: "scheme",
                get: function () {
                    return ft
                }
            }, {
                key: "Emitter",
                get: function () {
                    return p
                }
            }, {
                key: "validator",
                get: function () {
                    return u
                }
            }, {
                key: "kindOf",
                get: function () {
                    return u.kindOf
                }
            }, {
                key: "html",
                get: function () {
                    return vt.html
                }
            }, {
                key: "option",
                get: function () {
                    return {
                        container: "#artplayer",
                        url: "",
                        poster: "",
                        title: "",
                        type: "",
                        theme: "#f00",
                        volume: .7,
                        isLive: !1,
                        muted: !1,
                        autoplay: !1,
                        autoSize: !1,
                        autoMini: !1,
                        loop: !1,
                        flip: !1,
                        rotate: !1,
                        playbackRate: !1,
                        aspectRatio: !1,
                        screenshot: !1,
                        setting: !1,
                        hotkey: !0,
                        pip: !1,
                        mutex: !0,
                        backdrop: !0,
                        fullscreen: !1,
                        fullscreenWeb: !1,
                        subtitleOffset: !1,
                        miniProgressBar: !1,
                        localVideo: !1,
                        localSubtitle: !1,
                        useSSR: !1,
                        ads: [],
                        layers: [],
                        contextmenu: [],
                        controls: [],
                        settings: [],
                        quality: [],
                        highlight: [],
                        plugins: [],
                        whitelist: [],
                        thumbnails: {
                            url: "",
                            number: 60,
                            column: 10
                        },
                        subtitle: {
                            url: "",
                            type: "",
                            style: {},
                            encoding: "utf-8",
                            bilingual: !1
                        },
                        moreVideoAttr: {
                            controls: !1,
                            preload: h ? "auto" : "metadata"
                        },
                        icons: {},
                        customType: {},
                        lang: navigator.language.toLowerCase()
                    }
                }
            }]), a
        }(p);
    return console.log("%c ArtPlayer %c 4.2.6 %c https://artplayer.org", "color: #fff; background: #5f5f5f", "color: #fff; background: #4bc729", ""), er
}));