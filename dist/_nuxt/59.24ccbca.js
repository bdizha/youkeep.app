(window.webpackJsonp=window.webpackJsonp||[]).push([[59],{577:function(t,e,r){"use strict";r.r(e);r(21);var n=r(9),c=r(6),o={name:"r-delivery-addresses",components:{},props:{},data:function(){return{params:null}},computed:Object(c.b)({store:"shop/store",stores:"base/stores",processes:"base/processes",search:"address/search"}),created:function(){},methods:{onSelect:function(address){var t=this;return Object(n.a)(regeneratorRuntime.mark((function e(){var r;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=address,console.log(r,"address params"),e.next=4,t.$store.dispatch("address/onSelect",r);case 4:case"end":return e.stop()}}),e)})))()},onItemLabel:function(address){return'<div class="r-text-sm"><strong title="'+address.secondary_text+'">'+address.title+", </strong><br>"+address.main_text+"</div>"}}},l=r(4),component=Object(l.a)(o,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("a-row",{staticClass:"r-margin-top-24",attrs:{type:"flex",justify:"center"}},[r("a-col",{staticClass:"gutter-row",attrs:{xs:{span:24},sm:{span:24},lg:{span:24}}},t._l(t.search.data,(function(address){return r("div",{key:"address-"+address.id,staticClass:"r-account-item",class:{"r-account-item__active":address.is_default},on:{click:function(e){return t.onSelect(address)}}},[r("a-row",{attrs:{type:"flex",justify:"center",align:"middle",gutter:[12,12]}},[r("a-col",{attrs:{xs:{span:20},sm:{span:20},lg:{span:20}}},[r("span",{domProps:{innerHTML:t._s(t.onItemLabel(address))}})]),t._v(" "),r("a-col",{staticClass:"r-text-right",attrs:{xs:{span:4},sm:{span:4},lg:{span:4}}},[r("a-avatar",{attrs:{shape:"square",icon:"check"}})],1)],1)],1)})),0)],1)}),[],!1,null,null,null);e.default=component.exports}}]);