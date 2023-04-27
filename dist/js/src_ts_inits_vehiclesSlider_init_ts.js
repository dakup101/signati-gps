"use strict";
/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunksignatigps"] = self["webpackChunksignatigps"] || []).push([["src_ts_inits_vehiclesSlider_init_ts"],{

/***/ "./node_modules/swiper/modules/thumbs/thumbs.min.css":
/*!***********************************************************!*\
  !*** ./node_modules/swiper/modules/thumbs/thumbs.min.css ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://signatigps/./node_modules/swiper/modules/thumbs/thumbs.min.css?");

/***/ }),

/***/ "./src/ts/inits/vehiclesSlider_init.ts":
/*!*********************************************!*\
  !*** ./src/ts/inits/vehiclesSlider_init.ts ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! swiper */ \"./node_modules/swiper/swiper.esm.js\");\n/* harmony import */ var swiper_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper/css */ \"./node_modules/swiper/swiper.min.css\");\n/* harmony import */ var swiper_css_thumbs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! swiper/css/thumbs */ \"./node_modules/swiper/modules/thumbs/thumbs.min.css\");\n\r\n\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (function (controllerClass, sliderClass) {\r\n    var controller = new swiper__WEBPACK_IMPORTED_MODULE_0__.Swiper(controllerClass, {\r\n        slidesPerView: 5,\r\n        spaceBetween: 20\r\n    });\r\n    var slider = new swiper__WEBPACK_IMPORTED_MODULE_0__.Swiper(sliderClass, {\r\n        modules: [swiper__WEBPACK_IMPORTED_MODULE_0__.Thumbs],\r\n        slidesPerView: 1,\r\n        thumbs: {\r\n            swiper: controller\r\n        }\r\n    });\r\n});\r\n\n\n//# sourceURL=webpack://signatigps/./src/ts/inits/vehiclesSlider_init.ts?");

/***/ })

}]);