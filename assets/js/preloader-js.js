/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/prealoader.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/prealoader.js":
/*!******************************!*\
  !*** ./src/js/prealoader.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("function _typeof(obj) { \"@babel/helpers - typeof\"; if (typeof Symbol === \"function\" && typeof Symbol.iterator === \"symbol\") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === \"function\" && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; }; } return _typeof(obj); }\n\n/*!\n * Particleground\n *\n * @author Jonathan Nicol - @mrjnicol\n * @version 1.1.0\n * @description Creates a canvas based particle system background\n *\n * Inspired by http://requestlab.fr/ and http://disruptivebydesign.com/\n */\n!function (a, b) {\n  \"use strict\";\n\n  function c(a) {\n    a = a || {};\n\n    for (var b = 1; b < arguments.length; b++) {\n      var c = arguments[b];\n      if (c) for (var d in c) {\n        c.hasOwnProperty(d) && (\"object\" == _typeof(c[d]) ? deepExtend(a[d], c[d]) : a[d] = c[d]);\n      }\n    }\n\n    return a;\n  }\n\n  function d(d, g) {\n    function h() {\n      if (y) {\n        r = b.createElement(\"canvas\"), r.className = \"pg-canvas\", r.style.display = \"block\", d.insertBefore(r, d.firstChild), s = r.getContext(\"2d\"), i();\n\n        for (var c = Math.round(r.width * r.height / g.density), e = 0; c > e; e++) {\n          var f = new n();\n          f.setStackPos(e), z.push(f);\n        }\n\n        a.addEventListener(\"resize\", function () {\n          k();\n        }, !1), b.addEventListener(\"mousemove\", function (a) {\n          A = a.pageX, B = a.pageY;\n        }, !1), D && !C && a.addEventListener(\"deviceorientation\", function () {\n          F = Math.min(Math.max(-event.beta, -30), 30), E = Math.min(Math.max(-event.gamma, -30), 30);\n        }, !0), j(), q(\"onInit\");\n      }\n    }\n\n    function i() {\n      r.width = d.offsetWidth, r.height = d.offsetHeight, s.fillStyle = g.dotColor, s.strokeStyle = g.lineColor, s.lineWidth = g.lineWidth;\n    }\n\n    function j() {\n      if (y) {\n        u = a.innerWidth, v = a.innerHeight, s.clearRect(0, 0, r.width, r.height);\n\n        for (var b = 0; b < z.length; b++) {\n          z[b].updatePosition();\n        }\n\n        for (var b = 0; b < z.length; b++) {\n          z[b].draw();\n        }\n\n        G || (t = requestAnimationFrame(j));\n      }\n    }\n\n    function k() {\n      i();\n\n      for (var a = d.offsetWidth, b = d.offsetHeight, c = z.length - 1; c >= 0; c--) {\n        (z[c].position.x > a || z[c].position.y > b) && z.splice(c, 1);\n      }\n\n      var e = Math.round(r.width * r.height / g.density);\n      if (e > z.length) for (; e > z.length;) {\n        var f = new n();\n        z.push(f);\n      } else e < z.length && z.splice(e);\n\n      for (c = z.length - 1; c >= 0; c--) {\n        z[c].setStackPos(c);\n      }\n    }\n\n    function l() {\n      G = !0;\n    }\n\n    function m() {\n      G = !1, j();\n    }\n\n    function n() {\n      switch (this.stackPos, this.active = !0, this.layer = Math.ceil(3 * Math.random()), this.parallaxOffsetX = 0, this.parallaxOffsetY = 0, this.position = {\n        x: Math.ceil(Math.random() * r.width),\n        y: Math.ceil(Math.random() * r.height)\n      }, this.speed = {}, g.directionX) {\n        case \"left\":\n          this.speed.x = +(-g.maxSpeedX + Math.random() * g.maxSpeedX - g.minSpeedX).toFixed(2);\n          break;\n\n        case \"right\":\n          this.speed.x = +(Math.random() * g.maxSpeedX + g.minSpeedX).toFixed(2);\n          break;\n\n        default:\n          this.speed.x = +(-g.maxSpeedX / 2 + Math.random() * g.maxSpeedX).toFixed(2), this.speed.x += this.speed.x > 0 ? g.minSpeedX : -g.minSpeedX;\n      }\n\n      switch (g.directionY) {\n        case \"up\":\n          this.speed.y = +(-g.maxSpeedY + Math.random() * g.maxSpeedY - g.minSpeedY).toFixed(2);\n          break;\n\n        case \"down\":\n          this.speed.y = +(Math.random() * g.maxSpeedY + g.minSpeedY).toFixed(2);\n          break;\n\n        default:\n          this.speed.y = +(-g.maxSpeedY / 2 + Math.random() * g.maxSpeedY).toFixed(2), this.speed.x += this.speed.y > 0 ? g.minSpeedY : -g.minSpeedY;\n      }\n    }\n\n    function o(a, b) {\n      return b ? void (g[a] = b) : g[a];\n    }\n\n    function p() {\n      console.log(\"destroy\"), r.parentNode.removeChild(r), q(\"onDestroy\"), f && f(d).removeData(\"plugin_\" + e);\n    }\n\n    function q(a) {\n      void 0 !== g[a] && g[a].call(d);\n    }\n\n    var r,\n        s,\n        t,\n        u,\n        v,\n        w,\n        x,\n        y = !!b.createElement(\"canvas\").getContext,\n        z = [],\n        A = 0,\n        B = 0,\n        C = !navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),\n        D = !!a.DeviceOrientationEvent,\n        E = 0,\n        F = 0,\n        G = !1;\n    return g = c({}, a[e].defaults, g), n.prototype.draw = function () {\n      s.beginPath(), s.arc(this.position.x + this.parallaxOffsetX, this.position.y + this.parallaxOffsetY, g.particleRadius / 2, 0, 2 * Math.PI, !0), s.closePath(), s.fill(), s.beginPath();\n\n      for (var a = z.length - 1; a > this.stackPos; a--) {\n        var b = z[a],\n            c = this.position.x - b.position.x,\n            d = this.position.y - b.position.y,\n            e = Math.sqrt(c * c + d * d).toFixed(2);\n        e < g.proximity && (s.moveTo(this.position.x + this.parallaxOffsetX, this.position.y + this.parallaxOffsetY), g.curvedLines ? s.quadraticCurveTo(Math.max(b.position.x, b.position.x), Math.min(b.position.y, b.position.y), b.position.x + b.parallaxOffsetX, b.position.y + b.parallaxOffsetY) : s.lineTo(b.position.x + b.parallaxOffsetX, b.position.y + b.parallaxOffsetY));\n      }\n\n      s.stroke(), s.closePath();\n    }, n.prototype.updatePosition = function () {\n      if (g.parallax) {\n        if (D && !C) {\n          var a = (u - 0) / 60;\n          w = (E - -30) * a + 0;\n          var b = (v - 0) / 60;\n          x = (F - -30) * b + 0;\n        } else w = A, x = B;\n\n        this.parallaxTargX = (w - u / 2) / (g.parallaxMultiplier * this.layer), this.parallaxOffsetX += (this.parallaxTargX - this.parallaxOffsetX) / 10, this.parallaxTargY = (x - v / 2) / (g.parallaxMultiplier * this.layer), this.parallaxOffsetY += (this.parallaxTargY - this.parallaxOffsetY) / 10;\n      }\n\n      var c = d.offsetWidth,\n          e = d.offsetHeight;\n\n      switch (g.directionX) {\n        case \"left\":\n          this.position.x + this.speed.x + this.parallaxOffsetX < 0 && (this.position.x = c - this.parallaxOffsetX);\n          break;\n\n        case \"right\":\n          this.position.x + this.speed.x + this.parallaxOffsetX > c && (this.position.x = 0 - this.parallaxOffsetX);\n          break;\n\n        default:\n          (this.position.x + this.speed.x + this.parallaxOffsetX > c || this.position.x + this.speed.x + this.parallaxOffsetX < 0) && (this.speed.x = -this.speed.x);\n      }\n\n      switch (g.directionY) {\n        case \"up\":\n          this.position.y + this.speed.y + this.parallaxOffsetY < 0 && (this.position.y = e - this.parallaxOffsetY);\n          break;\n\n        case \"down\":\n          this.position.y + this.speed.y + this.parallaxOffsetY > e && (this.position.y = 0 - this.parallaxOffsetY);\n          break;\n\n        default:\n          (this.position.y + this.speed.y + this.parallaxOffsetY > e || this.position.y + this.speed.y + this.parallaxOffsetY < 0) && (this.speed.y = -this.speed.y);\n      }\n\n      this.position.x += this.speed.x, this.position.y += this.speed.y;\n    }, n.prototype.setStackPos = function (a) {\n      this.stackPos = a;\n    }, h(), {\n      option: o,\n      destroy: p,\n      start: m,\n      pause: l\n    };\n  }\n\n  var e = \"particleground\",\n      f = a.jQuery;\n  a[e] = function (a, b) {\n    return new d(a, b);\n  }, a[e].defaults = {\n    minSpeedX: .1,\n    maxSpeedX: .7,\n    minSpeedY: .1,\n    maxSpeedY: .7,\n    directionX: \"center\",\n    directionY: \"center\",\n    density: 1e4,\n    dotColor: \"#666666\",\n    lineColor: \"#666666\",\n    particleRadius: 7,\n    lineWidth: 1,\n    curvedLines: !1,\n    proximity: 100,\n    parallax: !0,\n    parallaxMultiplier: 5,\n    onInit: function onInit() {},\n    onDestroy: function onDestroy() {}\n  }, f && (f.fn[e] = function (a) {\n    if (\"string\" == typeof arguments[0]) {\n      var b,\n          c = arguments[0],\n          g = Array.prototype.slice.call(arguments, 1);\n      return this.each(function () {\n        f.data(this, \"plugin_\" + e) && \"function\" == typeof f.data(this, \"plugin_\" + e)[c] && (b = f.data(this, \"plugin_\" + e)[c].apply(this, g));\n      }), void 0 !== b ? b : this;\n    }\n\n    return \"object\" != _typeof(a) && a ? void 0 : this.each(function () {\n      f.data(this, \"plugin_\" + e) || f.data(this, \"plugin_\" + e, new d(this, a));\n    });\n  });\n}(window, document),\n/**\n* requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel\n* @see: http://paulirish.com/2011/requestanimationframe-for-smart-animating/\n* @see: http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating\n* @license: MIT license\n*/\nfunction () {\n  for (var a = 0, b = [\"ms\", \"moz\", \"webkit\", \"o\"], c = 0; c < b.length && !window.requestAnimationFrame; ++c) {\n    window.requestAnimationFrame = window[b[c] + \"RequestAnimationFrame\"], window.cancelAnimationFrame = window[b[c] + \"CancelAnimationFrame\"] || window[b[c] + \"CancelRequestAnimationFrame\"];\n  }\n\n  window.requestAnimationFrame || (window.requestAnimationFrame = function (b) {\n    var c = new Date().getTime(),\n        d = Math.max(0, 16 - (c - a)),\n        e = window.setTimeout(function () {\n      b(c + d);\n    }, d);\n    return a = c + d, e;\n  }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function (a) {\n    clearTimeout(a);\n  });\n}();\nparticleground(document.getElementById('particles-foreground'), {\n  dotColor: 'rgba(255, 255, 255, 1)',\n  lineColor: 'rgba(255, 255, 255, 0.05)',\n  minSpeedX: 0.3,\n  maxSpeedX: 0.6,\n  minSpeedY: 0.3,\n  maxSpeedY: 0.6,\n  density: 50000,\n  // One particle every n pixels\n  curvedLines: false,\n  proximity: 250,\n  // How close two dots need to be before they join\n  parallaxMultiplier: 10,\n  // Lower the number is more extreme parallax\n  particleRadius: 4 // Dot size\n\n});\nparticleground(document.getElementById('particles-background'), {\n  dotColor: 'rgba(255, 255, 255, 0.5)',\n  lineColor: 'rgba(255, 255, 255, 0.05)',\n  minSpeedX: 0.075,\n  maxSpeedX: 0.15,\n  minSpeedY: 0.075,\n  maxSpeedY: 0.15,\n  density: 30000,\n  // One particle every n pixels\n  curvedLines: false,\n  proximity: 20,\n  // How close two dots need to be before they join\n  parallaxMultiplier: 20,\n  // Lower the number is more extreme parallax\n  particleRadius: 2 // Dot size\n\n});\n\n//# sourceURL=webpack:///./src/js/prealoader.js?");

/***/ })

/******/ });