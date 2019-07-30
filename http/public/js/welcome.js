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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/views/welcome.js":
/*!***************************************!*\
  !*** ./resources/js/views/welcome.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
  var gallery = document.querySelectorAll('.gallery-content > .gallery');
  var gallery_screen = document.querySelector('.gallery-show');
  gallery.forEach(function (ele) {
    var children = ele.children;
    ele.addEventListener('mouseover', function () {
      children[1].classList.remove('hidden');
      children[1].classList.add('show');
    });
    ele.addEventListener('mouseleave', function () {
      children[1].classList.remove('show');
      children[1].classList.add('hidden');
    });
    ele.addEventListener('click', function () {
      var screen = gallery_screen.children[0];
      screen.src = ele.getAttribute('mm');
      console.log(screen);
      gallery_screen.classList.add('show');
      gallery_screen.classList.remove('hidden');
    });
  });
  window.addEventListener('resize', function () {
    // gallery.style['height'] = gallery.style['width'];
    // console.log(gallery.style['width']);
    gallery.forEach(function (ele) {
      ele.style['height'] = ele.clientWidth - ele.clientWidth * 0.2 + 'px';
    });
  });
  window.addEventListener('load', function () {
    gallery.forEach(function (ele) {
      ele.style['background-image'] = 'url(' + ele.getAttribute('mm') + ')';
      ele.style['height'] = ele.clientWidth - ele.clientWidth * 0.2 + 'px';
    });
  });
  gallery_screen.addEventListener("click", function () {
    gallery_screen.classList.add('hidden');
    gallery_screen.classList.remove('show');
  });
})();

/***/ }),

/***/ 1:
/*!*********************************************!*\
  !*** multi ./resources/js/views/welcome.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\project\OnePageSite_2\http\resources\js\views\welcome.js */"./resources/js/views/welcome.js");


/***/ })

/******/ });