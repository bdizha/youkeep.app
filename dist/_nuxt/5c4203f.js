(window.webpackJsonp=window.webpackJsonp||[]).push([[48],{604:function(t,e,n){"use strict";n.r(e);var r=n(5),o=n(19),l=n.n(o),c={name:"r-career",props:{},data:function(){return{banner:"art-04.png",departments:[],modal:{isVisible:null,current:null,message:null},hasData:!0}},computed:Object(r.b)({modal:"base/modal"}),created:function(){this.payload()},methods:{payload:function(){var path=this.$route.path,t=this;l.a.get(path,{}).then((function(e){console.log("setting positions >> before"),console.log(e.data),t.departments=e.data.departments,t.hasData=!0,console.log("setting positions >> after")})).catch((function(t){console.log(t)}))}}},d=n(4),component=Object(d.a)(c,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("r-page",[n("a-row",{attrs:{gutter:[24,24],type:"flex",justify:"start",align:"middle"}},[n("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[n("a-card",[n("a-card-meta",[n("template",{slot:"description"},[n("h4",{staticClass:"r-heading-light r-text-uppercase"},[t._v("\n              Careers at Shopple\n            ")]),t._v(" "),n("h1",{staticClass:"r-heading"},[n("span",{staticClass:"r-text-secondary"},[t._v("More dynamic,")]),n("br"),t._v(" "),n("span",[t._v("Less conventional")])]),t._v(" "),n("p",{staticClass:"r-text-normal"},[t._v("\n              Shopple introduces a new way to shopping\n            ")])])],2)],1)],1),t._v(" "),n("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[n("a-card",[n("div",{attrs:{slot:"cover"},slot:"cover"},[n("r-avatar",{directives:[{name:"lazy-load",rawName:"v-lazy-load"}],attrs:{shape:"square","data-src":"/assets/"+t.banner}})],1)])],1)],1),t._v(" "),n("a-row",{staticClass:"r-mt-48",attrs:{type:"flex",justify:"start"}},[n("a-col",{staticStyle:{"text-align":"left"},attrs:{xs:{span:24},sm:{span:24},md:{span:24},lg:{span:24}}},[n("a-row",{attrs:{gutter:[24,24],type:"flex",justify:"end",align:"middle"}},[n("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[n("a-card",[n("div",{staticClass:"r-card-cover-secondary r-p-24",attrs:{slot:"cover"},slot:"cover"},[n("a-row",{attrs:{gutter:[24,24],type:"flex",justify:"start",align:"middle"}},[n("a-col",{staticClass:"gutter-row",attrs:{xs:{span:24},sm:{span:24},md:{span:24},lg:{span:24}}},[n("h3",{staticClass:"r-heading"},[t._v("\n                    Yes, we're hiring now\n                  ")]),t._v(" "),n("p",{staticClass:"r-text-normal"},[t._v("\n                    Bring your animal friend (a bird, or a dog, and even a cat/doll) to keep you super focused if\n                    necessary.\n                  ")])]),t._v(" "),n("a-col",{staticClass:"gutter-row",attrs:{xs:{span:24},sm:{span:12},md:{span:12},lg:{span:12}}},[n("nuxt-link",{attrs:{to:"/career/openings"}},[n("a-button",{staticClass:"r-btn-secondary",attrs:{block:"",type:"secondary",size:"default"}},[t._v("\n                      See openings\n                    ")])],1)],1),t._v(" "),n("a-col",{staticClass:"gutter-row",attrs:{xs:{span:24},sm:{span:12},md:{span:12},lg:{span:12}}},[n("nuxt-link",{attrs:{to:"/contact-us"}},[n("a-button",{staticClass:"r-btn-bordered-grey",attrs:{block:"",type:"secondary",size:"default"}},[t._v("\n                      Contact us\n                    ")])],1)],1)],1)],1)])],1)],1)],1)],1),t._v(" "),n("a-row",{staticClass:"r-mt-48",attrs:{type:"flex",justify:"start"}},[n("a-col",{staticStyle:{"text-align":"left"},attrs:{xs:{span:24},sm:{span:24},md:{span:24},lg:{span:24}}},[n("a-row",{attrs:{gutter:[24,24],type:"flex",justify:"start",align:"middle"}},[n("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[n("a-card",[n("a-card-meta",[n("template",{slot:"description"},[n("h4",{staticClass:"r-heading-light r-text-uppercase"},[t._v("\n                  Innovative\n                ")]),t._v(" "),n("h4",{staticClass:"r-heading r-text-secondary"},[t._v("\n                  Transforming\n                  the way shopping is experienced\n                ")]),t._v(" "),n("p",{staticClass:"r-text-normal"},[t._v("\n                  Shopple is a consumer centric platform that transforms\n                  the way shoppers experience their shopping.\n                ")]),t._v(" "),n("p",{staticClass:"r-text-normal"},[t._v("\n                  If you take innovation intelligently and methodically, you're in the right place with unlimited\n                  possibilities.\n                ")])])],2)],1)],1),t._v(" "),n("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[n("a-card",[n("a-card-meta",[n("template",{slot:"description"},[n("h4",{staticClass:"r-heading-light r-text-uppercase"},[t._v("\n                  Dynamic\n                ")]),t._v(" "),n("h4",{staticClass:"r-heading r-text-secondary"},[t._v("\n                  Why we do what we do\n                ")]),t._v(" "),n("p",{staticClass:"r-text-normal"},[t._v("\n                  At Shopple, we are building a shopping experience that helps millions of people be effortlessly in\n                  control of their shopping experience.\n                ")]),t._v(" "),n("p",{staticClass:"r-text-normal"},[t._v("\n                  It's all about giving back our customers the control of their shopping capacity.\n                ")])])],2)],1)],1),t._v(" "),n("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[n("a-card",[n("a-card-meta",[n("template",{slot:"description"},[n("h4",{staticClass:"r-heading-light r-text-uppercase"},[t._v("\n                  Progressive\n                ")]),t._v(" "),n("h4",{staticClass:"r-heading r-text-secondary"},[t._v("\n                  Function with new tools\n                ")]),t._v(" "),n("p",{staticClass:"r-text-normal"},[t._v("\n                  You want to create bright ideas, achieve great work & cash out.\n                ")]),t._v(" "),n("p",{staticClass:"r-text-normal"},[t._v("\n                  We use the latest technologies to solve problems (AI, Graphical Data Tool Sets). Customer\n                  satisfaction\n                  comes first, create products which users love.\n                ")])])],2)],1)],1),t._v(" "),n("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[n("a-card",[n("a-card-meta",[n("template",{slot:"description"},[n("h4",{staticClass:"r-heading-light r-text-uppercase"},[t._v("\n                  Collaborative\n                ")]),t._v(" "),n("h4",{staticClass:"r-heading r-text-secondary"},[t._v("\n                  Shopple as a specialist house\n                ")]),t._v(" "),n("p",{staticClass:"r-text-normal"},[t._v("\n                  We work together as set of teams within teams of different specialities. Great work mates are at the\n                  core of the work we do, here.\n                ")]),t._v(" "),n("p",{staticClass:"r-text-normal"},[t._v("\n                  We incentives making mistakes and this helps to foster the spirit of innovation with as minimum\n                  friction\n                  and costs as possible.\n                ")])])],2)],1)],1)],1)],1)],1)],1)}),[],!1,null,null,null);e.default=component.exports}}]);