/*!
* jQuery Lazy - min - v0.1.18
* http://jquery.eisbehr.de/lazy/
* http://eisbehr.de/
*
* Copyright 2014, Daniel 'Eisbehr' Kern
*
* Dual licensed under the MIT and GPL v2 licenses:
* http://www.opensource.org/licenses/mit-license.php
* http://www.gnu.org/licenses/gpl-2.0.html
*
* jQuery("img.lazy").lazy();
*/(function(e,t,n,r){e.fn.lazy=function(r){function u(n){if(typeof n!="boolean")n=false;s.each(function(num){var r=e(this);var s=this.tagName.toLowerCase();if(f(r)||n){if(r.attr(i.attribute)&&(s=="img"&&r.attr(i.attribute)!=r.attr("src")||s!="img"&&r.attr(i.attribute)!=r.css("background-image"))&&!r.data("loaded")&&(r.is(":visible")||!i.visibleOnly)){var u=e(new Image);++o;if(i.onError)u.error(function(){p(i.onError,r);h()});else u.error(function(){h()});var a=true;u.one("load",function(){var e=function(){if(a){t.setTimeout(e,100);return}r.hide();if(s=="img")r.attr("src",u.attr("src"));else r.css("background-image","url("+u.attr("src")+")");setTimeout(function(){r[i.effect](i.effectTime);},num*50);if(i.removeAttribute)r.removeAttr(i.attribute);p(i.afterLoad,r);u.unbind("load");u.remove();h()};e()});p(i.beforeLoad,r);u.attr("src",r.attr(i.attribute));p(i.onLoad,r);a=false;if(u.complete)u.load();r.data("loaded",true)}}});s=e(s).filter(function(){return!e(this).data("loaded")})}function a(){if(i.delay>=0)setTimeout(function(){u(true)},i.delay);if(i.delay<0||i.combined){u(false);e(i.appendScroll).bind("scroll",c(i.throttle,u));e(i.appendScroll).bind("resize",c(i.throttle,u))}}function f(e){var t=n.documentElement.scrollTop?n.documentElement.scrollTop:n.body.scrollTop;return t+l()+i.threshold>e.offset().top}function l(){if(t.innerHeight)return t.innerHeight;if(n.documentElement&&n.documentElement.clientHeight)return n.documentElement.clientHeight;if(n.body&&n.body.clientHeight)return n.body.clientHeight;if(n.body&&n.body.offsetHeight)return n.body.offsetHeight;return i.fallbackHeight}function c(e,t){function s(){function o(){r=+(new Date);t.apply()}var s=+(new Date)-r;n&&clearTimeout(n);if(s>e||!i.enableThrottle)o();else n=setTimeout(o,e-s)}var n;var r=0;return s}function h(){--o;if(!s.size()&&!o)p(i.onFinishedAll,null)}function p(e,t){if(e){if(t!==null)e(t);else e()}}var i={bind:"load",threshold:500,fallbackHeight:2e3,visibleOnly:true,appendScroll:t,delay:-1,combined:false,attribute:"data-src",removeAttribute:true,effect:"show",effectTime:0,enableThrottle:false,throttle:250,beforeLoad:null,onLoad:null,afterLoad:null,onError:null,onFinishedAll:null};if(r)e.extend(i,r);var s=this;var o=0;if(i.bind=="load")e(t).load(a);else if(i.bind=="event")a();if(i.onError)s.bind("error",function(){p(i.onError,e(this))});return this};e.fn.Lazy=e.fn.lazy})(jQuery,window,document);