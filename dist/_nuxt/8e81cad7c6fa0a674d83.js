(window.webpackJsonp=window.webpackJsonp||[]).push([[35],{548:function(t,e,n){"use strict";n.r(e);var o={components:{},props:{},data:function(){return{articles:[],store:{slug:null},hasData:!1,hasSpin:!1}},mounted:function(){this.payload()},methods:{payload:function(){this.hasSpin=!0,setTimeout((function(){t.$store.commit("onSpin",!1)}),900);var path=this.$route.path,t=this;axios.get(path,{}).then((function(e){console.log("setting store data >> before"),console.log(e.data),t.articles=e.data.articles,t.hasData=!0,console.log("setting article data >> after"),setTimeout((function(){t.hasSpin=!1}),900)})).catch((function(t){console.log(t)}))}}},r=n(13),component=Object(r.a)(o,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return t.hasData?n("r-article-template",{attrs:{article:null}},[n("a-row",{attrs:{gutter:0}},[n("a-col",{staticClass:"gutter-row r-padding-24"},[n("a-row",{staticClass:"r-product-cards",attrs:{gutter:[24,24]}},t._l(t.articles,(function(article,e){return t.articles.length>0?n("a-col",{key:e,staticClass:"gutter-row",attrs:{xs:{span:24},sm:{span:12},md:{span:8},lg:{span:6}}},[t.hasData?n("r-article-item",{attrs:{size:24,article:article}}):t._e()],1):t._e()})),1)],1)],1)],1):t._e()}),[],!1,null,null,null);e.default=component.exports}}]);