(()=>{"use strict";function t(e){return t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t(e)}function e(t,n){return e=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(t,e){return t.__proto__=e,t},e(t,n)}const n=window.wp.i18n;var r=function(t,e,n,r){var o,i,a,c,u=document.getElementById("code_snippets_ajax_nonce"),l=e.querySelector(".column-id");u&&null!=l&&l.textContent&&parseInt(l.textContent,10)&&(n.id=parseInt(l.textContent,10),n.shared_network=Boolean(e.className.match(/\bshared-network-snippet\b/)),n.network=n.shared_network||window.pagenow.endsWith("-network"),n.scope=null!==(o=e.getAttribute("data-snippet-scope"))&&void 0!==o?o:n.scope,i="action=update_code_snippet&_ajax_nonce=".concat(u.value,"&field=").concat(t,"&snippet=").concat(JSON.stringify(n)),a=r,(c=new XMLHttpRequest).open("POST",window.ajaxurl,!0),c.setRequestHeader("Content-Type","application/x-www-form-urlencoded charset=UTF-8"),c.onload=function(){200>c.status||400<=c.status||(console.info(c.responseText),null==a||a(JSON.parse(c.responseText)))},c.send(i))};function o(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function i(){i=function(t,e){return new o(t,void 0,e)};var n=RegExp.prototype,r=new WeakMap;function o(t,n,i){var a=new RegExp(t,n);return r.set(a,i||r.get(t)),e(a,o.prototype)}function a(t,e){var n=r.get(e);return Object.keys(n).reduce((function(e,r){var o=n[r];if("number"==typeof o)e[r]=t[o];else{for(var i=0;void 0===t[o[i]]&&i+1<o.length;)i++;e[r]=t[o[i]]}return e}),Object.create(null))}return function(t,n){if("function"!=typeof n&&null!==n)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(n&&n.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),n&&e(t,n)}(o,RegExp),o.prototype.exec=function(t){var e=n.exec.call(this,t);if(e){e.groups=a(e,this);var r=e.indices;r&&(r.groups=a(r,this))}return e},o.prototype[Symbol.replace]=function(e,o){if("string"==typeof o){var i=r.get(this);return n[Symbol.replace].call(this,e,o.replace(/\$<([^>]+)>/g,(function(t,e){var n=i[e];return"$"+(Array.isArray(n)?n.join("$"):n)})))}if("function"==typeof o){var c=this;return n[Symbol.replace].call(this,e,(function(){var e=arguments;return"object"!=t(e[e.length-1])&&(e=[].slice.call(e)).push(a(e,c)),o.apply(this,e)}))}return n[Symbol.replace].call(this,e,o)},i.apply(this,arguments)}var a=function(t,e){if(null!=t&&t.textContent){var n=parseInt(t.textContent.replace(i(/\((\d+)\)/,{count:1}),"$1"),10);n+=e?1:-1,t.textContent="(".concat(n,")")}else console.error("Could not update view count.",t)};function c(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}!function(){var t,e=function(t,e){var n="undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(!n){if(Array.isArray(t)||(n=function(t,e){if(t){if("string"==typeof t)return o(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?o(t,e):void 0}}(t))||e&&t&&"number"==typeof t.length){n&&(t=n);var r=0,i=function(){};return{s:i,n:function(){return r>=t.length?{done:!0}:{done:!1,value:t[r++]}},e:function(t){throw t},f:i}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var a,c=!0,u=!1;return{s:function(){n=n.call(t)},n:function(){var t=n.next();return c=t.done,t},e:function(t){u=!0,a=t},f:function(){try{c||null==n.return||n.return()}finally{if(u)throw a}}}}(document.getElementsByClassName("snippet-activation-switch"));try{var i=function(){var e=t.value;e.addEventListener("click",(function(t){return function(t,e){var o,i=null==t||null===(o=t.parentElement)||void 0===o?void 0:o.parentElement;if(i){var c=i.className.match(/\b(?:in)?active-snippet\b/);if(c){e.preventDefault();var u="inactive-snippet"===c[0];r("active",i,{active:u},(function(t){var e=i.querySelector(".snippet-activation-switch");if(t.success){i.className=u?i.className.replace(/\binactive-snippet\b/,"active-snippet"):i.className.replace(/\bactive-snippet\b/,"inactive-snippet");var r=document.querySelector(".subsubsub"),o=null==r?void 0:r.querySelector(".active .count"),c=null==r?void 0:r.querySelector(".inactive .count");o&&a(o,u),c&&a(c,u),e.title=u?(0,n.__)("Deactivate","code-snippets"):(0,n.__)("Activate","code-snippets")}else i.className+=" erroneous-snippet",e.title=(0,n.__)("An error occurred when attempting to activate","code-snippets")}))}}else console.error("Could not toggle snippet active status.",i)}(e,t)}))};for(e.s();!(t=e.n()).done;)i()}catch(t){e.e(t)}finally{e.f()}}(),function(){var t,e=function(t,e){var n="undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(!n){if(Array.isArray(t)||(n=function(t,e){if(t){if("string"==typeof t)return c(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?c(t,e):void 0}}(t))||e&&t&&"number"==typeof t.length){n&&(t=n);var r=0,o=function(){};return{s:o,n:function(){return r>=t.length?{done:!0}:{done:!1,value:t[r++]}},e:function(t){throw t},f:o}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var i,a=!0,u=!1;return{s:function(){n=n.call(t)},n:function(){var t=n.next();return a=t.done,t},e:function(t){u=!0,i=t},f:function(){try{a||null==n.return||n.return()}finally{if(u)throw i}}}}(document.getElementsByClassName("snippet-priority"));try{var n=function(){var e=t.value;e.addEventListener("input",(function(){return o=null===(n=(t=e).parentElement)||void 0===n?void 0:n.parentElement,i={priority:parseFloat(t.value)},void(o?r("priority",o,i):console.error("Could not update snippet information.",i,o));var t,n,o,i})),e.disabled=!1};for(e.s();!(t=e.n()).done;)n()}catch(t){e.e(t)}finally{e.f()}}()})();