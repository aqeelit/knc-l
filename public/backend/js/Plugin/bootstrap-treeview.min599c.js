

!function(global,factory){if("function"==typeof define&&define.amd)define("/Plugin/bootstrap-treeview",["exports","jquery","Plugin","Config"],factory);else if("undefined"!=typeof exports)factory(exports,require("jquery"),require("Plugin"),require("Config"));else{var mod={exports:{}};factory(mod.exports,global.jQuery,global.Plugin,global.Config),global.PluginBootstrapTreeview=mod.exports}}(this,function(exports,_jquery,_Plugin2,_Config){"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var _jquery2=babelHelpers.interopRequireDefault(_jquery),_Plugin3=babelHelpers.interopRequireDefault(_Plugin2),Config=babelHelpers.interopRequireWildcard(_Config),Treeview=function(_Plugin){function Treeview(){return babelHelpers.classCallCheck(this,Treeview),babelHelpers.possibleConstructorReturn(this,(Treeview.__proto__||Object.getPrototypeOf(Treeview)).apply(this,arguments))}return babelHelpers.inherits(Treeview,_Plugin),babelHelpers.createClass(Treeview,[{key:"getName",value:function(){return"treeview"}},{key:"render",value:function(){if(_jquery2.default.fn.treeview){var $el=this.$el,options=this.options;"string"==typeof options.source&&_jquery2.default.isFunction(window[options.source])?(options.data=window[options.source](),delete options.source):_jquery2.default.isFunction(options.souce)&&(options.data=options.source(),delete options.source),$el.treeview(options)}}}],[{key:"getDefaults",value:function(){return{injectStyle:!1,expandIcon:"icon wb-plus",collapseIcon:"icon wb-minus",emptyIcon:"icon",nodeIcon:"icon wb-folder",showBorder:!1,borderColor:Config.colors("blue-grey",200),onhoverColor:Config.colors("blue-grey",100),selectedColor:"#ffffff",selectedBackColor:Config.colors("primary",600),searchResultColor:Config.colors("primary",600),searchResultBackColor:"#ffffff"}}}]),Treeview}(_Plugin3.default);_Plugin3.default.register("treeview",Treeview),exports.default=Treeview});