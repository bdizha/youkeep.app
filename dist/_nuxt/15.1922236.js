(window.webpackJsonp=window.webpackJsonp||[]).push([[15],{534:function(t,e,r){"use strict";r.r(e);r(21);var n=r(9),o=r(6),l={layout:"default",name:"r-welcome",props:{},asyncData:function(t){return Object(n.a)(regeneratorRuntime.mark((function e(){var r,n;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.store,n={category_id:1,limit:12,order_by:"randomized_at",with:["photos","breadcrumbs"]},e.next=4,r.dispatch("shop/onCategories",n);case 4:return e.next=6,r.dispatch("base/onReviews",{});case 6:case"end":return e.stop()}}),e)})))()},data:function(){return{images:["welcome-01.jpg","welcome-02.jpg","welcome-03.jpg"],title:"It's shopping time!",isProcessing:!0,testimonials:[],modal:{current:null,isVisible:!1},hasData:!1}},computed:Object(o.b)({store:"shop/store",category:"shop/category",categories:"base/categories"}),mounted:function(){},methods:{onStoreTray:function(){var t={isVisible:!0,isClosable:!0,current:"store"};this.$store.dispatch("base/onModal",t)},onCategories:function(){return Object(n.a)(regeneratorRuntime.mark((function t(){return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:case"end":return t.stop()}}),t)})))()}}},c=r(4),component=Object(c.a)(l,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("a-row",{staticClass:"r-welcome",attrs:{type:"flex",justify:"center"}},[r("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:24},lg:{span:24}}},[r("r-category-actions"),t._v(" "),r("a-row",{staticClass:"r-mt-48",attrs:{type:"flex",justify:"center",align:"middle"}},[r("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:21},lg:{span:18}}},[r("a-row",{attrs:{gutter:[48,48],type:"flex",justify:"start",align:"middle"}},[r("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[r("a-card",{staticClass:"r-p-24"},[r("a-card-meta",[r("template",{slot:"description"},[r("h1",{staticClass:"r-heading"},[t._v("\n                    It's shopping time!\n                  ")]),t._v(" "),r("h2",{staticClass:"r-heading"},[r("span",{staticClass:"r-heading r-text-secondary"},[t._v("Shop more,")]),t._v(" "),r("span",{staticClass:"r-text-secondary"},[t._v("Pay less")])]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("\n                    Yes, as long as you shop it with Shopple, you are fully in control.\n                  ")]),r("br"),t._v(" "),r("a-row",{attrs:{type:"flex",justify:"start"}},[r("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:24},lg:{span:24}}},[r("r-delivery-form")],1)],1)],1)],2)],1)],1),t._v(" "),r("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[r("a-card",[r("a-card-meta",[r("template",{slot:"description"},[r("r-slider",{attrs:{images:t.images}})],1)],2)],1)],1)],1),t._v(" "),r("r-steps")],1)],1),t._v(" "),r("a-row",{attrs:{type:"flex",justify:"center",align:"middle"}},[r("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:21},lg:{span:18}}},[r("r-store-slider",{attrs:{title:t.title,columns:6}}),t._v(" "),r("a-row",{staticClass:"r-mb-48",attrs:{type:"flex",justify:"start"}},[r("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:24},lg:{span:24}}},[r("r-category-slider")],1)],1),t._v(" "),r("r-category-list",{attrs:{columns:6,limit:3}}),t._v(" "),r("r-features",{attrs:{span:24}}),t._v(" "),r("r-testimonials")],1)],1)],1)],1)}),[],!1,null,null,null);e.default=component.exports}}]);