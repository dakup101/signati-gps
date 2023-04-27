"use strict";
/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunksignati_gps"] = self["webpackChunksignati_gps"] || []).push([["src_ts_inits_functionalitiesSlider_init_ts"],{

/***/ "./node_modules/swiper/modules/thumbs/thumbs.min.css":
/*!***********************************************************!*\
  !*** ./node_modules/swiper/modules/thumbs/thumbs.min.css ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://signati-gps/./node_modules/swiper/modules/thumbs/thumbs.min.css?");

/***/ }),

/***/ "./src/ts/inits/functionalitiesSlider_init.ts":
/*!****************************************************!*\
  !*** ./src/ts/inits/functionalitiesSlider_init.ts ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! swiper */ \"./node_modules/swiper/swiper.esm.js\");\n/* harmony import */ var swiper_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper/css */ \"./node_modules/swiper/swiper.min.css\");\n/* harmony import */ var swiper_css_thumbs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! swiper/css/thumbs */ \"./node_modules/swiper/modules/thumbs/thumbs.min.css\");\n\r\n\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (function (controllerClass, sliderClass) {\r\n    var controller = new swiper__WEBPACK_IMPORTED_MODULE_0__.Swiper(controllerClass, {\r\n        slidesPerView: 10,\r\n        slideToClickedSlide: true,\r\n        breakpoints: {\r\n            320: {\r\n                slidesPerView: 1\r\n            }\r\n        },\r\n        on: {\r\n            click: function () {\r\n                if (window.screen.width > 991)\r\n                    return;\r\n                var content = document.querySelector(\".functionalities-slider\");\r\n                var offset = 115;\r\n                var contentPos = content.getBoundingClientRect().top;\r\n                var offsetPos = contentPos + window.scrollY - offset;\r\n                window.scrollTo({\r\n                    top: offsetPos,\r\n                    behavior: \"smooth\"\r\n                });\r\n            }\r\n        }\r\n    });\r\n    var slider = new swiper__WEBPACK_IMPORTED_MODULE_0__.Swiper(sliderClass, {\r\n        modules: [swiper__WEBPACK_IMPORTED_MODULE_0__.Thumbs],\r\n        slidesPerView: 1,\r\n        thumbs: {\r\n            swiper: controller\r\n        },\r\n    });\r\n    controller.on('slideChange', function () {\r\n        var activeIndex = controller.activeIndex;\r\n        var activeSlide = controller.slides[activeIndex];\r\n        var prevActiveSlide = controller.slides[activeIndex - 1];\r\n        activeSlide.classList.add('active');\r\n        if (prevActiveSlide) {\r\n            prevActiveSlide.classList.remove('active');\r\n        }\r\n    });\r\n});\r\n\n\n//# sourceURL=webpack://signati-gps/./src/ts/inits/functionalitiesSlider_init.ts?");

/***/ })

}]);