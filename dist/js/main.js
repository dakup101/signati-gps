/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/sass/theme.scss":
/*!*****************************!*\
  !*** ./src/sass/theme.scss ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://signati-gps/./src/sass/theme.scss?");

/***/ }),

/***/ "./src/ts/handlers/faq_handle.ts":
/*!***************************************!*\
  !*** ./src/ts/handlers/faq_handle.ts ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (function () {\r\n    var faqContainer = document.querySelector(\".faq\");\r\n    if (!faqContainer)\r\n        return;\r\n    __webpack_require__.e(/*! import() */ \"src_ts_inits_faq_init_ts\").then(__webpack_require__.bind(__webpack_require__, /*! ../inits/faq_init */ \"./src/ts/inits/faq_init.ts\")).then(function (module) {\r\n        var faq_init = module.default;\r\n        faq_init();\r\n    });\r\n});\r\n\n\n//# sourceURL=webpack://signati-gps/./src/ts/handlers/faq_handle.ts?");

/***/ }),

/***/ "./src/ts/handlers/forWhomSlider_handle.ts":
/*!*************************************************!*\
  !*** ./src/ts/handlers/forWhomSlider_handle.ts ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (function () {\r\n    var sliderContainer = document.querySelector('.for-slider');\r\n    if (!sliderContainer)\r\n        return;\r\n    console.log('yeet');\r\n    Promise.all(/*! import() */[__webpack_require__.e(\"vendors-node_modules_swiper_swiper_min_css-node_modules_swiper_swiper_esm_js\"), __webpack_require__.e(\"vendors-node_modules_swiper_modules_navigation_navigation_min_css-node_modules_swiper_modules-c640c9\"), __webpack_require__.e(\"src_ts_inits_forWhomSlider_init_ts\")]).then(__webpack_require__.bind(__webpack_require__, /*! ../inits/forWhomSlider_init */ \"./src/ts/inits/forWhomSlider_init.ts\")).then(function (module) {\r\n        var forWhomSlider_init = module.default;\r\n        forWhomSlider_init();\r\n    });\r\n});\r\n\n\n//# sourceURL=webpack://signati-gps/./src/ts/handlers/forWhomSlider_handle.ts?");

/***/ }),

/***/ "./src/ts/handlers/functionalitiesSlider_handle.ts":
/*!*********************************************************!*\
  !*** ./src/ts/handlers/functionalitiesSlider_handle.ts ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (function () {\r\n    var functionalitiesNav = document.querySelector(\".functionalities-controller\");\r\n    var functionalitiesSlider = document.querySelector(\".functionalities-slider\");\r\n    if (!functionalitiesNav || !functionalitiesSlider)\r\n        return;\r\n    Promise.all(/*! import() */[__webpack_require__.e(\"vendors-node_modules_swiper_swiper_min_css-node_modules_swiper_swiper_esm_js\"), __webpack_require__.e(\"vendors-node_modules_swiper_modules_thumbs_thumbs_min_css\"), __webpack_require__.e(\"src_ts_inits_functionalitiesSlider_init_ts\")]).then(__webpack_require__.bind(__webpack_require__, /*! ../inits/functionalitiesSlider_init */ \"./src/ts/inits/functionalitiesSlider_init.ts\")).then(function (module) {\r\n        var functionalitiesSlider_init = module.default(\".functionalities-controller\", \".functionalities-slider\");\r\n    });\r\n});\r\n\n\n//# sourceURL=webpack://signati-gps/./src/ts/handlers/functionalitiesSlider_handle.ts?");

/***/ }),

/***/ "./src/ts/handlers/vehiclesSlider_handle.ts":
/*!**************************************************!*\
  !*** ./src/ts/handlers/vehiclesSlider_handle.ts ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (function () {\r\n    var vehiclesNav = document.querySelector(\".vehicles-controller\");\r\n    var vehiclesSlider = document.querySelector(\".vehicles-slider\");\r\n    if (!vehiclesNav || !vehiclesSlider)\r\n        return;\r\n    Promise.all(/*! import() | print */[__webpack_require__.e(\"vendors-node_modules_swiper_swiper_min_css-node_modules_swiper_swiper_esm_js\"), __webpack_require__.e(\"vendors-node_modules_swiper_modules_thumbs_thumbs_min_css\"), __webpack_require__.e(\"print\")]).then(__webpack_require__.bind(__webpack_require__, /*! ../inits/vehiclesSlider_init */ \"./src/ts/inits/vehiclesSlider_init.ts\")).then(function (module) {\r\n        module.default('.vehicles-controller', '.vehicles-slider');\r\n    });\r\n});\r\n\n\n//# sourceURL=webpack://signati-gps/./src/ts/handlers/vehiclesSlider_handle.ts?");

/***/ }),

/***/ "./src/ts/handlers/video_handle.ts":
/*!*****************************************!*\
  !*** ./src/ts/handlers/video_handle.ts ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (function () {\r\n    var video = document.querySelector(\"#video\");\r\n    if (!video)\r\n        return;\r\n    __webpack_require__.e(/*! import() */ \"src_ts_inits_video_init_ts\").then(__webpack_require__.bind(__webpack_require__, /*! ../inits/video_init */ \"./src/ts/inits/video_init.ts\")).then(function (module) {\r\n        var videoInit = module.default;\r\n        videoInit();\r\n    });\r\n});\r\n\n\n//# sourceURL=webpack://signati-gps/./src/ts/handlers/video_handle.ts?");

/***/ }),

/***/ "./src/ts/index.ts":
/*!*************************!*\
  !*** ./src/ts/index.ts ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _handlers_video_handle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./handlers/video_handle */ \"./src/ts/handlers/video_handle.ts\");\n/* harmony import */ var _handlers_vehiclesSlider_handle__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./handlers/vehiclesSlider_handle */ \"./src/ts/handlers/vehiclesSlider_handle.ts\");\n/* harmony import */ var _handlers_forWhomSlider_handle__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./handlers/forWhomSlider_handle */ \"./src/ts/handlers/forWhomSlider_handle.ts\");\n/* harmony import */ var _handlers_functionalitiesSlider_handle__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./handlers/functionalitiesSlider_handle */ \"./src/ts/handlers/functionalitiesSlider_handle.ts\");\n/* harmony import */ var _handlers_faq_handle__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./handlers/faq_handle */ \"./src/ts/handlers/faq_handle.ts\");\n/* harmony import */ var validate_regex__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! validate-regex */ \"./node_modules/validate-regex/index.js\");\n/* harmony import */ var validate_regex__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(validate_regex__WEBPACK_IMPORTED_MODULE_5__);\nvar __awaiter = (undefined && undefined.__awaiter) || function (thisArg, _arguments, P, generator) {\r\n    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }\r\n    return new (P || (P = Promise))(function (resolve, reject) {\r\n        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }\r\n        function rejected(value) { try { step(generator[\"throw\"](value)); } catch (e) { reject(e); } }\r\n        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }\r\n        step((generator = generator.apply(thisArg, _arguments || [])).next());\r\n    });\r\n};\r\nvar __generator = (undefined && undefined.__generator) || function (thisArg, body) {\r\n    var _ = { label: 0, sent: function() { if (t[0] & 1) throw t[1]; return t[1]; }, trys: [], ops: [] }, f, y, t, g;\r\n    return g = { next: verb(0), \"throw\": verb(1), \"return\": verb(2) }, typeof Symbol === \"function\" && (g[Symbol.iterator] = function() { return this; }), g;\r\n    function verb(n) { return function (v) { return step([n, v]); }; }\r\n    function step(op) {\r\n        if (f) throw new TypeError(\"Generator is already executing.\");\r\n        while (g && (g = 0, op[0] && (_ = 0)), _) try {\r\n            if (f = 1, y && (t = op[0] & 2 ? y[\"return\"] : op[0] ? y[\"throw\"] || ((t = y[\"return\"]) && t.call(y), 0) : y.next) && !(t = t.call(y, op[1])).done) return t;\r\n            if (y = 0, t) op = [op[0] & 2, t.value];\r\n            switch (op[0]) {\r\n                case 0: case 1: t = op; break;\r\n                case 4: _.label++; return { value: op[1], done: false };\r\n                case 5: _.label++; y = op[1]; op = [0]; continue;\r\n                case 7: op = _.ops.pop(); _.trys.pop(); continue;\r\n                default:\r\n                    if (!(t = _.trys, t = t.length > 0 && t[t.length - 1]) && (op[0] === 6 || op[0] === 2)) { _ = 0; continue; }\r\n                    if (op[0] === 3 && (!t || (op[1] > t[0] && op[1] < t[3]))) { _.label = op[1]; break; }\r\n                    if (op[0] === 6 && _.label < t[1]) { _.label = t[1]; t = op; break; }\r\n                    if (t && _.label < t[2]) { _.label = t[2]; _.ops.push(op); break; }\r\n                    if (t[2]) _.ops.pop();\r\n                    _.trys.pop(); continue;\r\n            }\r\n            op = body.call(thisArg, _);\r\n        } catch (e) { op = [6, e]; y = 0; } finally { f = t = 0; }\r\n        if (op[0] & 5) throw op[1]; return { value: op[0] ? op[1] : void 0, done: true };\r\n    }\r\n};\r\n// Imports\r\n\r\n\r\n\r\n\r\n\r\n\r\ndocument.addEventListener(\"DOMContentLoaded\", function () {\r\n    (0,_handlers_video_handle__WEBPACK_IMPORTED_MODULE_0__[\"default\"])();\r\n    (0,_handlers_vehiclesSlider_handle__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\r\n    (0,_handlers_forWhomSlider_handle__WEBPACK_IMPORTED_MODULE_2__[\"default\"])();\r\n    (0,_handlers_functionalitiesSlider_handle__WEBPACK_IMPORTED_MODULE_3__[\"default\"])();\r\n    (0,_handlers_faq_handle__WEBPACK_IMPORTED_MODULE_4__[\"default\"])();\r\n    countersHandle();\r\n    handleMenu();\r\n    handleMobileMenu();\r\n    var benefits = new Benefits();\r\n    var benefitsTriggers = document.querySelectorAll(\".benefits-show\");\r\n    console.log(benefitsTriggers);\r\n    Array.from(benefitsTriggers).forEach(function (trigger) {\r\n        trigger.addEventListener(\"click\", function (ev) {\r\n            ev.preventDefault();\r\n            document.querySelector(\".benefits-popup\").classList.toggle(\"show\");\r\n        });\r\n    });\r\n    var benefitsClose = document.querySelector(\".benefits-close\");\r\n    benefitsClose.addEventListener(\"click\", function (ev) {\r\n        ev.preventDefault();\r\n        document.querySelector(\".benefits-popup\").classList.toggle(\"show\");\r\n    });\r\n});\r\nfunction handleMenu() {\r\n    var menuItems = document.querySelectorAll(\".site-header-nav-item.has-children\");\r\n    if (!menuItems)\r\n        return;\r\n    Array.from(menuItems).forEach(function (item) {\r\n        var itemLink = item.querySelector(\"a\");\r\n        var dropDown = item.querySelector(\".site-header-nav-sub\");\r\n        var dropDownTimeout = null;\r\n        itemLink.addEventListener(\"mouseenter\", function (ev) {\r\n            dropDown.classList.remove(\"hide-menu\");\r\n            itemLink.classList.add(\"active\");\r\n        });\r\n        itemLink.addEventListener(\"mouseleave\", function (ev) {\r\n            dropDownTimeout = setTimeout(function () {\r\n                dropDown.classList.add(\"hide-menu\");\r\n                itemLink.classList.remove(\"active\");\r\n            }, 250);\r\n        });\r\n        dropDown.addEventListener(\"mouseenter\", function () {\r\n            if (dropDownTimeout)\r\n                clearTimeout(dropDownTimeout);\r\n        });\r\n        dropDown.addEventListener(\"mouseleave\", function () {\r\n            dropDownTimeout = setTimeout(function () {\r\n                dropDown.classList.add(\"hide-menu\");\r\n                itemLink.classList.remove(\"active\");\r\n            }, 250);\r\n        });\r\n    });\r\n}\r\nfunction handleMobileMenu() {\r\n    var mobileMenu = document.querySelector(\".site-header-nav-mobile\");\r\n    if (!mobileMenu)\r\n        return;\r\n    console.log(\"--- Handle Mobile Menu ---\");\r\n    var mobileMenuOpen = document.querySelector(\".site-header-nav-mobile-open\");\r\n    var mobileMenuClose = document.querySelector(\".site-header-nav-mobile-close\");\r\n    mobileMenuOpen.addEventListener(\"click\", function (ev) {\r\n        ev.preventDefault();\r\n        mobileMenu.classList.toggle(\"open\");\r\n    });\r\n    mobileMenuClose.addEventListener(\"click\", function (ev) {\r\n        ev.preventDefault();\r\n        mobileMenu.classList.toggle(\"open\");\r\n    });\r\n    var parentItems = mobileMenu.querySelectorAll(\".site-header-nav-mobile-item.has-children\");\r\n    parentItems.forEach(function (item) {\r\n        item.addEventListener(\"click\", function (ev) {\r\n            ev.preventDefault();\r\n            if (ev.target !== item)\r\n                return;\r\n            item.classList.toggle(\"active\");\r\n            var subItem = item.querySelector(\".site-header-nav-mobile-sub-wrapper\");\r\n            if (item.classList.contains(\"active\")) {\r\n                subItem.style.height = subItem.scrollHeight + \"px\";\r\n                return;\r\n            }\r\n            subItem.style.height = \"0px\";\r\n        });\r\n    });\r\n    var children = mobileMenu.querySelectorAll(\".site-header-nav-mobile-sub-item a\");\r\n    Array.from(children).forEach(function (el) {\r\n        el.addEventListener(\"click\", function (ev) {\r\n            console.log(el);\r\n            window.location.replace(el.getAttribute(\"href\"));\r\n        });\r\n    });\r\n}\r\nfunction countersHandle() {\r\n    var countersSpeed = document.querySelectorAll(\".animate-number.speed\");\r\n    var countersDistance = document.querySelectorAll(\".animate-number.distance\");\r\n    if (!countersSpeed || !countersDistance)\r\n        return;\r\n    countersSpeed.forEach(function (counter) {\r\n        // Function to generate a random number between min and max\r\n        function getRandomNumber(min, max) {\r\n            return Math.floor(Math.random() * (max - min + 1) + min);\r\n        }\r\n        // Function to update the number inside the div\r\n        function updateNumber(target) {\r\n            var randomNumber = getRandomNumber(80, 95);\r\n            target.innerHTML = randomNumber;\r\n        }\r\n        // Set a random timeout between 0.5s and 1s to update the number\r\n        function setRandomTimeout(counter) {\r\n            var timeout = getRandomNumber(300, 600);\r\n            setTimeout(function () {\r\n                updateNumber(counter);\r\n                setRandomTimeout(counter);\r\n            }, timeout);\r\n        }\r\n        setRandomTimeout(counter);\r\n    });\r\n    countersDistance.forEach(function (counter) {\r\n        var number = Math.floor(Math.random() * 130) + 100;\r\n        // Define a function to update the number\r\n        var updateNumber = function () {\r\n            // Generate a random number between 3 and 6\r\n            var random = Math.floor(Math.random() * 4) + 3;\r\n            // Add the random number to the current number\r\n            number += random;\r\n            // If the number is 160 or above, reset it to 100\r\n            if (number >= 600) {\r\n                number = 100;\r\n            }\r\n            // Update the text of the div with the new number\r\n            counter.innerHTML = number.toString();\r\n            // Call the updateNumber function again in a random time between 0.5s and 1.5s\r\n            var delay = Math.random() * 1500 + 600;\r\n            setTimeout(updateNumber, delay);\r\n        };\r\n        // Call the updateNumber function to set the initial value of the div\r\n        updateNumber();\r\n    });\r\n}\r\nvar Benefits = /** @class */ (function () {\r\n    function Benefits() {\r\n        this.wrapper = null;\r\n        this.curStep = \"1\";\r\n        this.OP = validate_regex__WEBPACK_IMPORTED_MODULE_5__.Regex.OP;\r\n        this.steps = {\r\n            1: {\r\n                inputs: null,\r\n                value: [],\r\n                proceed: null,\r\n            },\r\n            2: {\r\n                inputs: null,\r\n                value: null,\r\n                proceed: null,\r\n            },\r\n            3: {\r\n                inputs: null,\r\n                value: null,\r\n                proceed: null,\r\n            },\r\n            4: {\r\n                inputs: null,\r\n                value: [],\r\n                proceed: null,\r\n            },\r\n            5: {\r\n                email: null,\r\n                tel: null,\r\n                firm: null,\r\n                name: null,\r\n                lName: null,\r\n            },\r\n        };\r\n        this.wrapper = document.querySelector(\".benefits-popup\");\r\n        this.step_1_handle();\r\n        this.step_2_handle();\r\n        this.step_3_handle();\r\n        this.step_4_handle();\r\n        this.step_5_handle();\r\n        this.proceed_handle();\r\n    }\r\n    Benefits.prototype.proceed_handle = function () {\r\n        var _this = this;\r\n        var proceeds = this.wrapper.querySelectorAll(\"button[data-proceed]\");\r\n        Array.from(proceeds).forEach(function (btn) {\r\n            btn.addEventListener(\"click\", function (ev) {\r\n                ev.preventDefault();\r\n                _this.proceed(btn.getAttribute(\"data-proceed\"));\r\n            });\r\n        });\r\n    };\r\n    Benefits.prototype.proceed = function (step) {\r\n        return __awaiter(this, void 0, void 0, function () {\r\n            var steps;\r\n            return __generator(this, function (_a) {\r\n                switch (_a.label) {\r\n                    case 0:\r\n                        if (!(step == \"6\")) return [3 /*break*/, 2];\r\n                        return [4 /*yield*/, this.sendMail()];\r\n                    case 1:\r\n                        _a.sent();\r\n                        _a.label = 2;\r\n                    case 2:\r\n                        steps = this.wrapper.querySelectorAll(\".step\");\r\n                        Array.from(steps).forEach(function (step) {\r\n                            step.classList.add(\"hidden\");\r\n                        });\r\n                        document.querySelector(\".step-\" + step).classList.remove(\"hidden\");\r\n                        return [2 /*return*/];\r\n                }\r\n            });\r\n        });\r\n    };\r\n    Benefits.prototype.step_1_handle = function () {\r\n        var _this = this;\r\n        var inputs = (this.steps[1].inputs = this.wrapper.querySelectorAll('input[name=\"step_1\"]'));\r\n        var proceed = (this.steps[1].proceed = this.wrapper.querySelector('button[data-proceed=\"2\"]'));\r\n        Array.from(inputs).forEach(function (input) {\r\n            input.addEventListener(\"change\", function (ev) {\r\n                var target = ev.currentTarget;\r\n                var parent = target.parentNode;\r\n                if (target.checked) {\r\n                    parent.classList.add(\"selected\");\r\n                    _this.steps[1].value.push(target.value);\r\n                    console.log(_this.steps[1].value);\r\n                }\r\n                else {\r\n                    _this.steps[1].value.splice(_this.steps[1].value.indexOf(target.value), 1);\r\n                    parent.classList.remove(\"selected\");\r\n                }\r\n                if (_this.steps[1].value.length)\r\n                    proceed.classList.remove(\"disabled\");\r\n                else\r\n                    proceed.classList.add(\"disabled\");\r\n            });\r\n        });\r\n    };\r\n    Benefits.prototype.step_2_handle = function () {\r\n        var _this = this;\r\n        var inputs = (this.steps[2].inputs = this.wrapper.querySelectorAll('input[name=\"step_2\"]'));\r\n        var proceed = (this.steps[2].proceed = this.wrapper.querySelector('button[data-proceed=\"3\"]'));\r\n        Array.from(inputs).forEach(function (input) {\r\n            input.addEventListener(\"change\", function (ev) {\r\n                var target = ev.currentTarget;\r\n                var parent = target.parentNode;\r\n                Array.from(inputs).forEach(function (radio) {\r\n                    radio.parentNode.classList.remove(\"selected\");\r\n                });\r\n                if (target.checked) {\r\n                    parent.classList.add(\"selected\");\r\n                    _this.steps[2].value = target.value;\r\n                }\r\n                if (_this.steps[2].value)\r\n                    proceed.classList.remove(\"disabled\");\r\n                else\r\n                    proceed.classList.add(\"disabled\");\r\n            });\r\n        });\r\n    };\r\n    Benefits.prototype.step_3_handle = function () {\r\n        var _this = this;\r\n        var inputs = (this.steps[3].inputs = this.wrapper.querySelectorAll('input[name=\"step_3\"]'));\r\n        var proceed = (this.steps[3].proceed = this.wrapper.querySelector('button[data-proceed=\"4\"]'));\r\n        Array.from(inputs).forEach(function (input) {\r\n            input.addEventListener(\"change\", function (ev) {\r\n                var target = ev.currentTarget;\r\n                var parent = target.parentNode;\r\n                Array.from(inputs).forEach(function (radio) {\r\n                    radio.parentNode.classList.remove(\"selected\");\r\n                });\r\n                if (target.checked) {\r\n                    parent.classList.add(\"selected\");\r\n                    _this.steps[3].value = target.value;\r\n                }\r\n                if (_this.steps[3].value)\r\n                    proceed.classList.remove(\"disabled\");\r\n                else\r\n                    proceed.classList.add(\"disabled\");\r\n            });\r\n        });\r\n    };\r\n    Benefits.prototype.step_4_handle = function () {\r\n        var _this = this;\r\n        var inputs = (this.steps[4].inputs = this.wrapper.querySelectorAll('input[name=\"step_4\"]'));\r\n        var proceed = (this.steps[4].proceed = this.wrapper.querySelector('button[data-proceed=\"5\"]'));\r\n        Array.from(inputs).forEach(function (input) {\r\n            input.addEventListener(\"change\", function (ev) {\r\n                var target = ev.currentTarget;\r\n                var parent = target.parentNode;\r\n                if (target.checked) {\r\n                    parent.classList.add(\"selected\");\r\n                    _this.steps[4].value.push(target.value);\r\n                    console.log(_this.steps[4].value);\r\n                }\r\n                else {\r\n                    _this.steps[4].value.splice(_this.steps[4].value.indexOf(target.value), 1);\r\n                    parent.classList.remove(\"selected\");\r\n                }\r\n                if (_this.steps[4].value.length)\r\n                    proceed.classList.remove(\"disabled\");\r\n                else\r\n                    proceed.classList.add(\"disabled\");\r\n            });\r\n        });\r\n    };\r\n    Benefits.prototype.step_5_handle = function () {\r\n        var _this = this;\r\n        var wrapper = this.wrapper.querySelector(\".step-5\");\r\n        var inputs = wrapper.querySelectorAll(\"input\");\r\n        var proceed = (this.steps[3].proceed = this.wrapper.querySelector('button[data-proceed=\"6\"]'));\r\n        Array.from(inputs).forEach(function (input) {\r\n            input.addEventListener(\"input\", function (ev) {\r\n                var isValid = true;\r\n                proceed.classList.remove(\"disabled\");\r\n                input.classList.remove(\"border-red\");\r\n                switch (input.name) {\r\n                    case \"step_email\": {\r\n                        var inputValid = validate_regex__WEBPACK_IMPORTED_MODULE_5__.Regex.valid(input.value, validate_regex__WEBPACK_IMPORTED_MODULE_5__.patterns.EMAIL, {\r\n                            flags: [_this.OP.CASE_INSENSITIVE],\r\n                        });\r\n                        if (!inputValid) {\r\n                            isValid = false;\r\n                            input.classList.add(\"border-red\");\r\n                        }\r\n                        _this.steps[5].email = input.value;\r\n                        break;\r\n                    }\r\n                    case \"step_tel\": {\r\n                        var numberFormat = /^(?=\\S)\\+?\\d*(?:\\s*\\d+){0,}$/;\r\n                        console.log(\"TEL: \" + numberFormat.test(input.value));\r\n                        if (!numberFormat.test(input.value)) {\r\n                            isValid = false;\r\n                            input.classList.add(\"border-red\");\r\n                        }\r\n                        _this.steps[5].tel = input.value;\r\n                        break;\r\n                    }\r\n                    case \"step_firm\": {\r\n                        _this.steps[5].firm = input.value;\r\n                        break;\r\n                    }\r\n                    case \"step_name\": {\r\n                        _this.steps[5].name = input.value;\r\n                        break;\r\n                    }\r\n                    case \"step_lName\": {\r\n                        _this.steps[5].lName = input.value;\r\n                        break;\r\n                    }\r\n                }\r\n                if (!isValid)\r\n                    proceed.classList.add(\"disabled\");\r\n                if (!_this.steps[5].name)\r\n                    proceed.classList.add(\"disabled\");\r\n                if (!_this.steps[5].lName)\r\n                    proceed.classList.add(\"disabled\");\r\n            });\r\n        });\r\n    };\r\n    Benefits.prototype.sendMail = function () {\r\n        return __awaiter(this, void 0, void 0, function () {\r\n            var ajaxUrl, data, resp;\r\n            return __generator(this, function (_a) {\r\n                switch (_a.label) {\r\n                    case 0:\r\n                        ajaxUrl = \"/wp-admin/admin-ajax.php\";\r\n                        data = new FormData();\r\n                        data.append(\"action\", \"send_benefits\");\r\n                        data.append(\"zasoby\", this.steps[1].value.join(\", \"));\r\n                        data.append(\"obszar\", this.steps[2].value);\r\n                        data.append(\"ilosc\", this.steps[3].value);\r\n                        data.append(\"func\", this.steps[4].value.join(\", \"));\r\n                        data.append(\"email\", this.steps[5].email);\r\n                        data.append(\"tel\", this.steps[5].tel);\r\n                        data.append(\"firm\", this.steps[5].firm);\r\n                        data.append(\"name\", this.steps[5].name);\r\n                        data.append(\"lName\", this.steps[5].lName);\r\n                        return [4 /*yield*/, fetch(ajaxUrl, {\r\n                                method: \"POST\",\r\n                                body: data,\r\n                                credentials: \"same-origin\",\r\n                            })\r\n                                .then(function (response) { return response.text(); })\r\n                                .then(function (text) {\r\n                                return text;\r\n                            })];\r\n                    case 1:\r\n                        resp = _a.sent();\r\n                        console.log(resp);\r\n                        return [2 /*return*/];\r\n                }\r\n            });\r\n        });\r\n    };\r\n    return Benefits;\r\n}());\r\n\n\n//# sourceURL=webpack://signati-gps/./src/ts/index.ts?");

/***/ }),

/***/ "./node_modules/validate-regex/index.js":
/*!**********************************************!*\
  !*** ./node_modules/validate-regex/index.js ***!
  \**********************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

eval("\r\n\r\nconst patterns = __webpack_require__(/*! ./lib/pattern */ \"./node_modules/validate-regex/lib/pattern.js\");\r\nconst RegexPattern = __webpack_require__(/*! ./lib/. */ \"./node_modules/validate-regex/lib/index.js\");\r\n\r\nclass Regex {\r\n\r\n    /* \r\n    * List of flags for regex.\r\n    */\r\n    static OP = {\r\n        GLOBAL: 'g',\r\n        CASE_INSENSITIVE: 'i',\r\n        MULTILINE: 'm'\r\n    }\r\n\r\n    /**\r\n     * Method to validate string/text with regex pattern.\r\n     *\r\n     * @param {string} statement text/string that we want to check, EX: 124.\r\n     * @param {string} pattern regex pattern, EX: patterns.NUMBER.\r\n     * @param {Object} options options to set flags, enable/disable debug mode.\r\n     * @returns {boolean} return true if string match with pattern.\r\n     */\r\n    static valid(statement = \"\", pattern = null, options = {}) {\r\n        if (pattern) {\r\n            return new RegexPattern(statement, pattern, options).validate();\r\n        }\r\n    }\r\n\r\n    /**\r\n     * Method to extract groups/data from string/text using given regex pattern.\r\n     *\r\n     * @param {string} statement text/string that we want to check, EX: dev@xyz.io.\r\n     * @param {string} pattern regex pattern, EX: patterns.NUMBER.\r\n     * @param {Object} options options to set flags, enable/disable debug mode.\r\n     * @returns {Object} return matched data in object format. Ex : {key:value}.\r\n     */\r\n    static groups(statement = \"\", pattern = null, options = {}) {\r\n        if (pattern) {\r\n            return new RegexPattern(statement, pattern, options).getAvailableGroups();\r\n        }\r\n    }\r\n}\r\n\r\nmodule.exports = {\r\n    patterns,\r\n    Regex\r\n};\n\n//# sourceURL=webpack://signati-gps/./node_modules/validate-regex/index.js?");

/***/ }),

/***/ "./node_modules/validate-regex/lib/index.js":
/*!**************************************************!*\
  !*** ./node_modules/validate-regex/lib/index.js ***!
  \**************************************************/
/***/ ((module) => {

eval("\r\n\r\nclass RegexPattern {\r\n\r\n    constructor(statement = \"\", pattern = null, options = {}) {\r\n        this.statement = statement;\r\n        this.pattern = pattern;\r\n        this.flag = \"g\";\r\n        if (options.flags && Array.isArray(options.flags) && options.flags.length) {\r\n            this.flag = Array.from(new Set([...options.flags, 'g'])).join(\"\");\r\n        }\r\n        this.debug = options.debug || false;\r\n    }\r\n\r\n    /**\r\n     * Method to validate string/text with regex pattern.\r\n     *\r\n     * @returns {boolean} return true if string match with pattern.\r\n     */\r\n    validate() {\r\n        try {\r\n            if (this.pattern) {\r\n                return new RegExp(this.pattern, this.flag).test(this.statement);\r\n            }\r\n            return false;\r\n        } catch (error) {\r\n            logs(error, true);\r\n            return false;\r\n        }\r\n    }\r\n\r\n    /**\r\n     * Method to extract group/specfic data from string using regex pattern.\r\n     *\r\n     * @returns {Object} return object with matched group/pattern data in object.\r\n     */\r\n    getAvailableGroups() {\r\n        let output = {};\r\n        try {\r\n            if (this.pattern) {\r\n                const regexObj = new RegExp(this.pattern, this.flag);\r\n                const result = regexObj.exec(this.statement);\r\n                if (result && result.groups) {\r\n                    return Object.assign({}, result.groups);\r\n                }\r\n            }\r\n        } catch (error) {\r\n            logs(error, true);\r\n        }\r\n        return output\r\n    }\r\n\r\n    /**\r\n     * Method to enable/disable debug logs .\r\n     *\r\n     * @param {string} msg - Text/string that we want to log in console.\r\n     * @param {boolean} [isError=false] - Error flag if true then use console.error else console.log.\r\n     * @returns \r\n     */\r\n    logs(msg = \"\", isError = false) {\r\n        if (this.debug && msg) {\r\n            if (isError) {\r\n                console.error(\"regex-pkg error> \", msg && msg.message ? msg.message : msg);\r\n            } else {\r\n                console.info(\"regex-pkg > \", msg);\r\n            }\r\n        }\r\n    }\r\n}\r\n\r\nmodule.exports = RegexPattern;\n\n//# sourceURL=webpack://signati-gps/./node_modules/validate-regex/lib/index.js?");

/***/ }),

/***/ "./node_modules/validate-regex/lib/pattern.js":
/*!****************************************************!*\
  !*** ./node_modules/validate-regex/lib/pattern.js ***!
  \****************************************************/
/***/ ((module) => {

eval("\r\n\r\n/* \r\n * List of some patterns used to match with text/string.\r\n */\r\nconst patterns = {\r\n    EMAIL: /^(?<email>[a-z0-9\\.\\-\\_]+)\\@(?<domain>[a-z0-9\\-\\_]+\\.[a-z]+)$/,\r\n    NUMBER: /^(?<digit>\\d+)(?<decimal>\\.\\d+)?$/,\r\n    NUMBER_INT: /^(?<digit>\\d+)$/,\r\n    NUMBER_DECIMAL: /^(?<digit>\\d+)?(?<decimal>\\.\\d+)$/,\r\n    BOOLEAN: /^(0)|(1)|(true|false)$/,\r\n    LOWER_CASE: /^[a-z-_\\d\\s]+$/,\r\n    UPPER_CASE: /^[A-Z-_\\d\\s]+$/,\r\n    PORT: /^(\\s+)?((6553[0-5])|(655[0-2][0-9])|(65[0-4][0-9]{2})|(6[0-4][0-9]{3})|([1-5][0-9]{4})|([0-5]{0,5})|([0-9]{1,4}))(\\s+)?$/,\r\n    HOST: /((http(s)?)\\:\\/\\/)?(www\\.)?((([a-z-0-9]+\\.)+[a-z-0-9]{1,5})|localhost)/,\r\n\r\n}\r\n\r\nmodule.exports = patterns;\n\n//# sourceURL=webpack://signati-gps/./node_modules/validate-regex/lib/pattern.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/ensure chunk */
/******/ 	(() => {
/******/ 		__webpack_require__.f = {};
/******/ 		// This file contains only the entry chunk.
/******/ 		// The chunk loading function for additional chunks
/******/ 		__webpack_require__.e = (chunkId) => {
/******/ 			return Promise.all(Object.keys(__webpack_require__.f).reduce((promises, key) => {
/******/ 				__webpack_require__.f[key](chunkId, promises);
/******/ 				return promises;
/******/ 			}, []));
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/get javascript chunk filename */
/******/ 	(() => {
/******/ 		// This function allow to reference async chunks
/******/ 		__webpack_require__.u = (chunkId) => {
/******/ 			// return url for filenames based on template
/******/ 			return "js/" + chunkId + ".js";
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/get mini-css chunk filename */
/******/ 	(() => {
/******/ 		// This function allow to reference async chunks
/******/ 		__webpack_require__.miniCssF = (chunkId) => {
/******/ 			// return url for filenames based on template
/******/ 			return "styles/" + chunkId + ".theme.css";
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/global */
/******/ 	(() => {
/******/ 		__webpack_require__.g = (function() {
/******/ 			if (typeof globalThis === 'object') return globalThis;
/******/ 			try {
/******/ 				return this || new Function('return this')();
/******/ 			} catch (e) {
/******/ 				if (typeof window === 'object') return window;
/******/ 			}
/******/ 		})();
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/load script */
/******/ 	(() => {
/******/ 		var inProgress = {};
/******/ 		var dataWebpackPrefix = "signati-gps:";
/******/ 		// loadScript function to load a script via script tag
/******/ 		__webpack_require__.l = (url, done, key, chunkId) => {
/******/ 			if(inProgress[url]) { inProgress[url].push(done); return; }
/******/ 			var script, needAttach;
/******/ 			if(key !== undefined) {
/******/ 				var scripts = document.getElementsByTagName("script");
/******/ 				for(var i = 0; i < scripts.length; i++) {
/******/ 					var s = scripts[i];
/******/ 					if(s.getAttribute("src") == url || s.getAttribute("data-webpack") == dataWebpackPrefix + key) { script = s; break; }
/******/ 				}
/******/ 			}
/******/ 			if(!script) {
/******/ 				needAttach = true;
/******/ 				script = document.createElement('script');
/******/ 		
/******/ 				script.charset = 'utf-8';
/******/ 				script.timeout = 120;
/******/ 				if (__webpack_require__.nc) {
/******/ 					script.setAttribute("nonce", __webpack_require__.nc);
/******/ 				}
/******/ 				script.setAttribute("data-webpack", dataWebpackPrefix + key);
/******/ 				script.src = url;
/******/ 			}
/******/ 			inProgress[url] = [done];
/******/ 			var onScriptComplete = (prev, event) => {
/******/ 				// avoid mem leaks in IE.
/******/ 				script.onerror = script.onload = null;
/******/ 				clearTimeout(timeout);
/******/ 				var doneFns = inProgress[url];
/******/ 				delete inProgress[url];
/******/ 				script.parentNode && script.parentNode.removeChild(script);
/******/ 				doneFns && doneFns.forEach((fn) => (fn(event)));
/******/ 				if(prev) return prev(event);
/******/ 			}
/******/ 			var timeout = setTimeout(onScriptComplete.bind(null, undefined, { type: 'timeout', target: script }), 120000);
/******/ 			script.onerror = onScriptComplete.bind(null, script.onerror);
/******/ 			script.onload = onScriptComplete.bind(null, script.onload);
/******/ 			needAttach && document.head.appendChild(script);
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/publicPath */
/******/ 	(() => {
/******/ 		var scriptUrl;
/******/ 		if (__webpack_require__.g.importScripts) scriptUrl = __webpack_require__.g.location + "";
/******/ 		var document = __webpack_require__.g.document;
/******/ 		if (!scriptUrl && document) {
/******/ 			if (document.currentScript)
/******/ 				scriptUrl = document.currentScript.src;
/******/ 			if (!scriptUrl) {
/******/ 				var scripts = document.getElementsByTagName("script");
/******/ 				if(scripts.length) scriptUrl = scripts[scripts.length - 1].src
/******/ 			}
/******/ 		}
/******/ 		// When supporting browsers where an automatic publicPath is not supported you must specify an output.publicPath manually via configuration
/******/ 		// or pass an empty string ("") and set the __webpack_public_path__ variable from your code to use your own logic.
/******/ 		if (!scriptUrl) throw new Error("Automatic publicPath is not supported in this browser");
/******/ 		scriptUrl = scriptUrl.replace(/#.*$/, "").replace(/\?.*$/, "").replace(/\/[^\/]+$/, "/");
/******/ 		__webpack_require__.p = scriptUrl + "../";
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/css loading */
/******/ 	(() => {
/******/ 		if (typeof document === "undefined") return;
/******/ 		var createStylesheet = (chunkId, fullhref, oldTag, resolve, reject) => {
/******/ 			var linkTag = document.createElement("link");
/******/ 		
/******/ 			linkTag.rel = "stylesheet";
/******/ 			linkTag.type = "text/css";
/******/ 			var onLinkComplete = (event) => {
/******/ 				// avoid mem leaks.
/******/ 				linkTag.onerror = linkTag.onload = null;
/******/ 				if (event.type === 'load') {
/******/ 					resolve();
/******/ 				} else {
/******/ 					var errorType = event && (event.type === 'load' ? 'missing' : event.type);
/******/ 					var realHref = event && event.target && event.target.href || fullhref;
/******/ 					var err = new Error("Loading CSS chunk " + chunkId + " failed.\n(" + realHref + ")");
/******/ 					err.code = "CSS_CHUNK_LOAD_FAILED";
/******/ 					err.type = errorType;
/******/ 					err.request = realHref;
/******/ 					if (linkTag.parentNode) linkTag.parentNode.removeChild(linkTag)
/******/ 					reject(err);
/******/ 				}
/******/ 			}
/******/ 			linkTag.onerror = linkTag.onload = onLinkComplete;
/******/ 			linkTag.href = fullhref;
/******/ 		
/******/ 			if (oldTag) {
/******/ 				oldTag.parentNode.insertBefore(linkTag, oldTag.nextSibling);
/******/ 			} else {
/******/ 				document.head.appendChild(linkTag);
/******/ 			}
/******/ 			return linkTag;
/******/ 		};
/******/ 		var findStylesheet = (href, fullhref) => {
/******/ 			var existingLinkTags = document.getElementsByTagName("link");
/******/ 			for(var i = 0; i < existingLinkTags.length; i++) {
/******/ 				var tag = existingLinkTags[i];
/******/ 				var dataHref = tag.getAttribute("data-href") || tag.getAttribute("href");
/******/ 				if(tag.rel === "stylesheet" && (dataHref === href || dataHref === fullhref)) return tag;
/******/ 			}
/******/ 			var existingStyleTags = document.getElementsByTagName("style");
/******/ 			for(var i = 0; i < existingStyleTags.length; i++) {
/******/ 				var tag = existingStyleTags[i];
/******/ 				var dataHref = tag.getAttribute("data-href");
/******/ 				if(dataHref === href || dataHref === fullhref) return tag;
/******/ 			}
/******/ 		};
/******/ 		var loadStylesheet = (chunkId) => {
/******/ 			return new Promise((resolve, reject) => {
/******/ 				var href = __webpack_require__.miniCssF(chunkId);
/******/ 				var fullhref = __webpack_require__.p + href;
/******/ 				if(findStylesheet(href, fullhref)) return resolve();
/******/ 				createStylesheet(chunkId, fullhref, null, resolve, reject);
/******/ 			});
/******/ 		}
/******/ 		// object to store loaded CSS chunks
/******/ 		var installedCssChunks = {
/******/ 			"main": 0
/******/ 		};
/******/ 		
/******/ 		__webpack_require__.f.miniCss = (chunkId, promises) => {
/******/ 			var cssChunks = {"vendors-node_modules_swiper_swiper_min_css-node_modules_swiper_swiper_esm_js":1,"vendors-node_modules_swiper_modules_thumbs_thumbs_min_css":1,"vendors-node_modules_swiper_modules_navigation_navigation_min_css-node_modules_swiper_modules-c640c9":1};
/******/ 			if(installedCssChunks[chunkId]) promises.push(installedCssChunks[chunkId]);
/******/ 			else if(installedCssChunks[chunkId] !== 0 && cssChunks[chunkId]) {
/******/ 				promises.push(installedCssChunks[chunkId] = loadStylesheet(chunkId).then(() => {
/******/ 					installedCssChunks[chunkId] = 0;
/******/ 				}, (e) => {
/******/ 					delete installedCssChunks[chunkId];
/******/ 					throw e;
/******/ 				}));
/******/ 			}
/******/ 		};
/******/ 		
/******/ 		// no hmr
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"main": 0
/******/ 		};
/******/ 		
/******/ 		__webpack_require__.f.j = (chunkId, promises) => {
/******/ 				// JSONP chunk loading for javascript
/******/ 				var installedChunkData = __webpack_require__.o(installedChunks, chunkId) ? installedChunks[chunkId] : undefined;
/******/ 				if(installedChunkData !== 0) { // 0 means "already installed".
/******/ 		
/******/ 					// a Promise means "currently loading".
/******/ 					if(installedChunkData) {
/******/ 						promises.push(installedChunkData[2]);
/******/ 					} else {
/******/ 						if(!/^vendors\-node_modules_swiper_modules_(navigation_navigation_min_css\-node_modules_swiper_modules\-c640c9|thumbs_thumbs_min_css)$/.test(chunkId)) {
/******/ 							// setup Promise in chunk cache
/******/ 							var promise = new Promise((resolve, reject) => (installedChunkData = installedChunks[chunkId] = [resolve, reject]));
/******/ 							promises.push(installedChunkData[2] = promise);
/******/ 		
/******/ 							// start chunk loading
/******/ 							var url = __webpack_require__.p + __webpack_require__.u(chunkId);
/******/ 							// create error before stack unwound to get useful stacktrace later
/******/ 							var error = new Error();
/******/ 							var loadingEnded = (event) => {
/******/ 								if(__webpack_require__.o(installedChunks, chunkId)) {
/******/ 									installedChunkData = installedChunks[chunkId];
/******/ 									if(installedChunkData !== 0) installedChunks[chunkId] = undefined;
/******/ 									if(installedChunkData) {
/******/ 										var errorType = event && (event.type === 'load' ? 'missing' : event.type);
/******/ 										var realSrc = event && event.target && event.target.src;
/******/ 										error.message = 'Loading chunk ' + chunkId + ' failed.\n(' + errorType + ': ' + realSrc + ')';
/******/ 										error.name = 'ChunkLoadError';
/******/ 										error.type = errorType;
/******/ 										error.request = realSrc;
/******/ 										installedChunkData[1](error);
/******/ 									}
/******/ 								}
/******/ 							};
/******/ 							__webpack_require__.l(url, loadingEnded, "chunk-" + chunkId, chunkId);
/******/ 						} else installedChunks[chunkId] = 0;
/******/ 					}
/******/ 				}
/******/ 		};
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		// no on chunks loaded
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 		
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunksignati_gps"] = self["webpackChunksignati_gps"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_require__("./src/sass/theme.scss");
/******/ 	var __webpack_exports__ = __webpack_require__("./src/ts/index.ts");
/******/ 	
/******/ })()
;