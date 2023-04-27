"use strict";
/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunksignati_gps"] = self["webpackChunksignati_gps"] || []).push([["src_ts_inits_faq_init_ts"],{

/***/ "./src/ts/helpers/animateHeight.ts":
/*!*****************************************!*\
  !*** ./src/ts/helpers/animateHeight.ts ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (function (element) {\r\n    var initialHeight = element.offsetHeight;\r\n    element.classList.toggle(\"h-0\");\r\n    var targetHeight = element.offsetHeight;\r\n    element.animate([\r\n        {\r\n            height: \"\".concat(initialHeight, \"px\"),\r\n        },\r\n        {\r\n            height: \"\".concat(targetHeight, \"px\"),\r\n        },\r\n    ], {\r\n        duration: 300\r\n    }).onfinish = function (e) {\r\n        if (!element.classList.contains(\"h-0\")) {\r\n            if (window.screen.width > 991)\r\n                return;\r\n            var offset = 150;\r\n            var contentPos = element.getBoundingClientRect().top;\r\n            var offsetPos = contentPos + window.scrollY - offset;\r\n            window.scrollTo({\r\n                top: offsetPos,\r\n                behavior: \"smooth\"\r\n            });\r\n        }\r\n    };\r\n});\r\n\n\n//# sourceURL=webpack://signati-gps/./src/ts/helpers/animateHeight.ts?");

/***/ }),

/***/ "./src/ts/helpers/toggleAriaExpanded.ts":
/*!**********************************************!*\
  !*** ./src/ts/helpers/toggleAriaExpanded.ts ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (function (element) {\r\n    var isExpanded = element.getAttribute(\"aria-expanded\");\r\n    var newAttr;\r\n    if (isExpanded === \"true\")\r\n        newAttr = \"false\";\r\n    if (isExpanded === \"false\")\r\n        newAttr = \"true\";\r\n    element.setAttribute(\"aria-expanded\", newAttr);\r\n});\r\n\n\n//# sourceURL=webpack://signati-gps/./src/ts/helpers/toggleAriaExpanded.ts?");

/***/ }),

/***/ "./src/ts/inits/faq_init.ts":
/*!**********************************!*\
  !*** ./src/ts/inits/faq_init.ts ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _helpers_animateHeight__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../helpers/animateHeight */ \"./src/ts/helpers/animateHeight.ts\");\n/* harmony import */ var _helpers_toggleAriaExpanded__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../helpers/toggleAriaExpanded */ \"./src/ts/helpers/toggleAriaExpanded.ts\");\n\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (function () {\r\n    var questions = document.querySelectorAll(\".faq-question\");\r\n    console.log(\"hha\");\r\n    questions.forEach(function (question) {\r\n        question.addEventListener(\"click\", function (e) {\r\n            e.preventDefault();\r\n            var target = e.currentTarget;\r\n            var oldExpanded = document.querySelector('.faq-question[aria-expanded=\"true\"]');\r\n            if (oldExpanded && target !== oldExpanded)\r\n                handleClick(oldExpanded);\r\n            handleClick(target);\r\n        });\r\n    });\r\n});\r\nvar handleClick = function (button) {\r\n    var answear = button.nextElementSibling;\r\n    (0,_helpers_toggleAriaExpanded__WEBPACK_IMPORTED_MODULE_1__[\"default\"])(button);\r\n    var initialHeight = answear.offsetHeight;\r\n    (0,_helpers_animateHeight__WEBPACK_IMPORTED_MODULE_0__[\"default\"])(answear);\r\n};\r\n\n\n//# sourceURL=webpack://signati-gps/./src/ts/inits/faq_init.ts?");

/***/ })

}]);