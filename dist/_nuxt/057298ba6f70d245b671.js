(window.webpackJsonp=window.webpackJsonp||[]).push([[33],{546:function(t,e,r){"use strict";r.r(e);var l={components:{},props:{article:{type:Object,required:!1},isShow:{type:Boolean,required:!1,default:!1}},data:function(){return{hasSpin:!0}},mounted:function(){this.payload()},methods:{payload:function(){this.hasSpin=!1},onSearch:function(){this.isSearching=!0}}},c=r(13),component=Object(c.a)(l,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return t.article?r("a-card",{staticClass:"r-article r-article-cover",style:"background-image: url(/storage/article/"+t.article.photo+");"},[r("r-article-photo",{attrs:{article:t.article}}),t._v(" "),r("a-card-meta",[r("template",{slot:"description"},[r("div",{staticClass:"r-article-info"},[r("div",{staticClass:"r-article-info-title"},[t._v(t._s(t.article.title))]),t._v(" "),t._e()]),t._v(" "),r("div",{staticClass:"r-article-slogan"},[r("a-icon",{attrs:{slot:"prefix",type:"star"},slot:"prefix"})],1)])],2),t._v(" "),t.hasSpin?r("r-spinner",{attrs:{"is-absolute":!0}}):t._e()],1):t._e()}),[],!1,null,null,null);e.default=component.exports}}]);