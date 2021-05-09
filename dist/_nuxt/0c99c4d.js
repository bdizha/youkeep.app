(window.webpackJsonp=window.webpackJsonp||[]).push([[0,5,69,70,71],{1097:function(t,e,r){},1099:function(t,e,r){"use strict";r(1097)},1102:function(t,e,r){var map={"./Index.vue":557,"./Invoice.vue":558,"./Show.vue":559,"./Track.vue":560};function n(t){var e=o(t);return r(e)}function o(t){if(!r.o(map,t)){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}return map[t]}n.keys=function(){return Object.keys(map)},n.resolve=o,t.exports=n,n.id=1102},221:function(t,e,r){"use strict";r.r(e);r(24),r(39),r(43),r(31);var n=r(15),o=r(1102);o.keys().forEach((function(t){var e=o(t).default;e.name&&n.a.component(e.name,e)}))},557:function(t,e,r){"use strict";r.r(e);var n=r(208),o=(r(45),r(142),[{title:"Timeline",dataIndex:"timelime",key:"timelime"},{title:"Date Ordered",dataIndex:"ordered_at",key:"ordered_at"},{title:"Order Number",dataIndex:"order_number",key:"order_number"},{title:"Items Ordered",dataIndex:"items_count",key:"items_count"},{title:"Total Cost",dataIndex:"total_cost",key:"total_cost"},{title:"View",dataIndex:"",key:"x",scopedSlots:{customRender:"action"}}]),l=[{timelime:1,ordered_at:"03 March 2020",order_number:"202511935",items_count:"4",total_cost:"R 360.00"},{timelime:1,ordered_at:"27 Dec 2019",order_number:"202511921",items_count:"3",total_cost:"R 1 360.00"},{timelime:1,ordered_at:"12 August 2019",order_number:"202511935",items_count:"11",total_cost:"R 2 360.00"}],d={components:{},data:function(){return{dataSource:[{title:"Timeline",key:"0",name:"Edward King 0",age:"32",address:"London, Park Lane no. 0"},{title:"Date Ordered",key:"1",name:"Edward King 1",age:"32",address:"London, Park Lane no. 1"},{title:"Order Number",key:"1",name:"Edward King 1",age:"32",address:"London, Park Lane no. 1"}],count:2,columns:o,data:l}},methods:{onDelete:function(t){var e=Object(n.a)(this.dataSource);this.dataSource=e.filter((function(e){return e.key!==t}))},handleAdd:function(){var t=this.count,e=this.dataSource,r={key:t,name:"Edward King ".concat(t),age:32,address:"London, Park Lane no. ".concat(t)};this.dataSource=[].concat(Object(n.a)(e),[r]),this.count=t+1}}},c=(r(1099),r(4)),component=Object(c.a)(d,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("r-account",[r("a-row",{attrs:{type:"flex",justify:"center",align:"middle"}},[r("a-col",{staticClass:"gutter-row",attrs:{xs:{span:24},sm:{span:24},lg:{span:24}}},[r("a-card",{staticStyle:{width:"100%"},attrs:{title:"YOUR ORDERS"}},[r("span",{staticClass:"r-text-small"},[t._v("\n                    Here you can manage all your orders.\n                ")])]),t._v(" "),r("a-table",{attrs:{bordered:"",dataSource:t.data,columns:t.columns},scopedSlots:t._u([{key:"action",fn:function(text,e){return[r("a-row",{attrs:{gutter:24,type:"flex",justify:"center",align:"middle"}},[r("a-col",{attrs:{xs:{span:12},sm:{span:12},md:{span:12},lg:{span:12}}},[r("nuxt-link",{attrs:{to:"/account/order/A-52062240"}},[r("a-button",{staticClass:"r-btn-bordered-primary",attrs:{block:"",size:"small",type:"secondary"}},[t._v("\n                                    Order\n                                ")])],1)],1),t._v(" "),r("a-col",{attrs:{xs:{span:12},sm:{span:12},md:{span:12},lg:{span:12}}},[r("nuxt-link",{attrs:{to:"/account/order/A-52062240/invoice"}},[r("a-button",{staticClass:"r-btn-bordered-secondary",attrs:{block:"",size:"small",type:"secondary"}},[t._v("\n                                    Invoice\n                                ")])],1)],1)],1)]}}])})],1)],1)],1)}),[],!1,null,null,null);e.default=component.exports},558:function(t,e,r){"use strict";r.r(e);var n=[{title:"Product Image",dataIndex:"photo",key:"photo",scopedSlots:{customRender:"photo"}},{title:"Product Name",dataIndex:"title",key:"title"},{title:"Variant",dataIndex:"variant",key:"variant"},{title:"Item SKU",dataIndex:"item_sku",key:"item_sku"},{title:"Status",dataIndex:"status",key:"status"},{title:"Price",dataIndex:"price",key:"price"},{title:"Discount",dataIndex:"discount",key:"discount"},{title:"Qty",dataIndex:"quantity",key:"quantity"},{title:"Subtotal",dataIndex:"sub_total",key:"sub_total"}],o=[{photo:"https://target.scene7.com/is/image/Target/GUEST_9ebabf4c-875e-497c-a1de-5b466667c333?wid=325&hei=325&qlt=80&fmt=pjpeg",title:"Roma Tomato",variant:"1lb Bag",item_sku:"A-52062240",status:"Delivered",price:"R 22.00",discount:"R 4.00",quantity:"3",sub_total:"R 66.00"},{photo:"https://target.scene7.com/is/image/Target/GUEST_9ebabf4c-875e-497c-a1de-5b466667c333?wid=325&hei=325&qlt=80&fmt=pjpeg",title:"Roma Tomato",variant:"1lb Bag",item_sku:"A-52062240",status:"Delivered",price:"R 22.00",discount:"R 4.00",quantity:"3",sub_total:"R 66.00"},{photo:"https://target.scene7.com/is/image/Target/GUEST_9ebabf4c-875e-497c-a1de-5b466667c333?wid=325&hei=325&qlt=80&fmt=pjpeg",title:"Roma Tomato",variant:"1lb Bag",item_sku:"A-52062240",status:"Delivered",price:"R 22.00",discount:"R 4.00",quantity:"3",sub_total:"R 66.00"}],l={components:{},data:function(){return{isVertical:!1,dataSource:[{title:"Timeline",key:"0",name:"Edward King 0",age:"32",address:"London, Park Lane no. 0"},{title:"Date Ordered",key:"1",name:"Edward King 1",age:"32",address:"London, Park Lane no. 1"},{title:"Order Number",key:"1",name:"Edward King 1",age:"32",address:"London, Park Lane no. 1"}],count:2,columns:n,data:o}},methods:{toggleDirection:function(){this.isVertical=!this.isVertical}}},d=r(4),component=Object(d.a)(l,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("r-account",[r("a-row",{attrs:{type:"flex",justify:"center",align:"middle"}},[r("a-col",{staticClass:"r-margin-vertical-24",attrs:{xs:{span:24},sm:{span:24},lg:{span:24}}},[r("h2",{staticClass:"r-heading r-text-secondary"},[t._v("\n                ORDER #202511935 placed on 27 July 2019 12:59\n            ")]),t._v(" "),r("h4",{staticClass:"r-heading"},[t._v("\n                Here you can manage all your order details.\n            ")])])],1),t._v(" "),r("a-row",{attrs:{type:"flex",justify:"center",align:"middle"}},[r("a-col",{attrs:{xs:{span:24}}},[r("a-card",{staticStyle:{width:"100%"},attrs:{title:"ORDER TIMELINE"}},[r("a-steps",{attrs:{direction:t.isVertical?"vertical":"horizontal",size:"default"}},[r("a-step",{attrs:{title:"Order received",description:t.isVertical?"We are awaiting payment for your order":""}}),t._v(" "),r("a-step",{attrs:{title:"Order is being processed",description:t.isVertical?"Your order is being prepared by our operations team":""}}),t._v(" "),r("a-step",{attrs:{title:"Parcel is en-route",description:t.isVertical?"Your order has been dispatched to our courier partner":""}}),t._v(" "),r("a-step",{attrs:{title:"Order delivered",description:t.isVertical?"Your order has been delivered!":""}})],1)],1)],1)],1),t._v(" "),r("a-row",{attrs:{gutter:16,type:"flex",justify:"right"}},[r("a-col",{attrs:{xs:{span:24}}},[r("div",{staticStyle:{"text-align":"right",width:"100%","margin-bottom":"20px"}},[r("a-button",{staticClass:"r-btn-secondary",attrs:{type:"secondary","html-type":"submit"},on:{click:t.toggleDirection}},[t._v("\n                    "+t._s(t.isVertical?"Less":"Detailed")+" Timeline\n                ")])],1)])],1),t._v(" "),r("a-row",{attrs:{type:"flex",justify:"center",align:"middle"}},[r("a-col",{attrs:{xs:{span:12}}},[r("a-card",{staticStyle:{width:"100%"},attrs:{title:"DELIVERY ADDRESS"}},[r("p",{staticClass:"r-text-normal"},[t._v("Batanayi Matuku")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Respublica")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("10 Muswel Road Bryastan, Johannesburg, South")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Bryanston")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Bryanston")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("City Of Johannesburg")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("2191")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Gauteng")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("0725228552")])])],1),t._v(" "),r("a-col",{attrs:{xs:{span:12}}},[r("a-card",{staticStyle:{width:"100%"},attrs:{title:"BILLING ADDRESS"}},[r("p",{staticClass:"r-text-normal"},[t._v("Batanayi Matuku")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Respublica")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("10 Muswel Road Bryastan, Johannesburg, South")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Bryanston")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Bryanston")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("City Of Johannesburg")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("2191")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Gauteng")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("0725228552")])])],1)],1),t._v(" "),r("a-row",{attrs:{type:"flex",justify:"center",align:"middle"}},[r("a-col",{attrs:{xs:{span:12}}},[r("a-card",{staticStyle:{width:"100%"},attrs:{title:"PAYMENT METHOD"}},[r("p",{staticClass:"r-text-normal"},[t._v("Credit & Debit Card")])])],1),t._v(" "),r("a-col",{attrs:{xs:{span:12}}},[r("a-card",{staticStyle:{width:"100%"},attrs:{title:"DELIVERY METHOD"}},[r("p",{staticClass:"r-text-normal"},[t._v("Shopple ")])])],1)],1),t._v(" "),r("a-table",{attrs:{bordered:"",dataSource:t.data,columns:t.columns},scopedSlots:t._u([{key:"photo",fn:function(t){return[r("a-avatar",{directives:[{name:"lazy-load",rawName:"v-lazy-load"}],staticStyle:{width:"56px",height:"56px","border-radius":"0px"},attrs:{slot:"avatar",shape:"square",size:"default","data-src":t},slot:"avatar"})]}}])})],1)}),[],!1,null,null,null);e.default=component.exports},559:function(t,e,r){"use strict";r.r(e);var n=[{title:"Product Image",dataIndex:"photo",key:"photo",scopedSlots:{customRender:"photo"}},{title:"Product Name",dataIndex:"title",key:"title"},{title:"Variant",dataIndex:"variant",key:"variant"},{title:"Item SKU",dataIndex:"item_sku",key:"item_sku"},{title:"Status",dataIndex:"status",key:"status"},{title:"Price",dataIndex:"price",key:"price"},{title:"Discount",dataIndex:"discount",key:"discount"},{title:"Qty",dataIndex:"quantity",key:"quantity"},{title:"Subtotal",dataIndex:"sub_total",key:"sub_total"}],o=[{photo:"https://target.scene7.com/is/image/Target/GUEST_9ebabf4c-875e-497c-a1de-5b466667c333?wid=325&hei=325&qlt=80&fmt=pjpeg",title:"Roma Tomato",variant:"1lb Bag",item_sku:"A-52062240",status:"Delivered",price:"R 22.00",discount:"R 4.00",quantity:"3",sub_total:"R 66.00"},{photo:"https://target.scene7.com/is/image/Target/GUEST_9ebabf4c-875e-497c-a1de-5b466667c333?wid=325&hei=325&qlt=80&fmt=pjpeg",title:"Roma Tomato",variant:"1lb Bag",item_sku:"A-52062240",status:"Delivered",price:"R 22.00",discount:"R 4.00",quantity:"3",sub_total:"R 66.00"},{photo:"https://target.scene7.com/is/image/Target/GUEST_9ebabf4c-875e-497c-a1de-5b466667c333?wid=325&hei=325&qlt=80&fmt=pjpeg",title:"Roma Tomato",variant:"1lb Bag",item_sku:"A-52062240",status:"Delivered",price:"R 22.00",discount:"R 4.00",quantity:"3",sub_total:"R 66.00"}],l={components:{},data:function(){return{isVertical:!1,dataSource:[{title:"Timeline",key:"0",name:"Edward King 0",age:"32",address:"London, Park Lane no. 0"},{title:"Date Ordered",key:"1",name:"Edward King 1",age:"32",address:"London, Park Lane no. 1"},{title:"Order Number",key:"1",name:"Edward King 1",age:"32",address:"London, Park Lane no. 1"}],count:2,columns:n,data:o}},methods:{toggleDirection:function(){this.isVertical=!this.isVertical}}},d=r(4),component=Object(d.a)(l,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("r-account",[r("a-row",{attrs:{type:"flex",justify:"center",align:"middle"}},[r("a-col",{staticClass:"r-margin-vertical-24",attrs:{xs:{span:24},sm:{span:24},lg:{span:24}}},[r("h2",{staticClass:"r-heading r-text-secondary"},[t._v("\n                ORDER #202511935 placed on 27 July 2019 12:59\n            ")]),t._v(" "),r("h4",{staticClass:"r-heading"},[t._v("\n                Here you can manage all your order details.\n            ")])])],1),t._v(" "),r("a-row",{attrs:{type:"flex",justify:"center",align:"middle"}},[r("a-col",{attrs:{xs:{span:24}}},[r("a-card",{staticStyle:{width:"100%"},attrs:{title:"ORDER TIMELINE"}},[r("a-steps",{attrs:{direction:t.isVertical?"vertical":"horizontal",size:"default"}},[r("a-step",{attrs:{title:"Order received",description:t.isVertical?"We are awaiting payment for your order":""}}),t._v(" "),r("a-step",{attrs:{title:"Order is being processed",description:t.isVertical?"Your order is being prepared by our operations team":""}}),t._v(" "),r("a-step",{attrs:{title:"Parcel is en-route",description:t.isVertical?"Your order has been dispatched to our courier partner":""}}),t._v(" "),r("a-step",{attrs:{title:"Order delivered",description:t.isVertical?"Your order has been delivered!":""}})],1)],1)],1)],1),t._v(" "),r("a-row",{attrs:{gutter:16,type:"flex",justify:"right"}},[r("a-col",{attrs:{xs:{span:24}}},[r("div",{staticStyle:{"text-align":"right",width:"100%","margin-bottom":"20px"}},[r("a-button",{staticClass:"r-btn-secondary",attrs:{type:"secondary","html-type":"submit"},on:{click:t.toggleDirection}},[t._v("\n                    "+t._s(t.isVertical?"Less":"Detailed")+" Timeline\n                ")])],1)])],1),t._v(" "),r("a-row",{attrs:{gutter:24,type:"flex",justify:"center",align:"middle"}},[r("a-col",{attrs:{xs:{span:12}}},[r("a-card",{staticStyle:{width:"100%"},attrs:{title:"DELIVERY ADDRESS"}},[r("p",{staticClass:"r-text-normal"},[t._v("Batanayi Matuku")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Respublica")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("10 Muswel Road Bryastan, Johannesburg, South")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Bryanston")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Bryanston")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("City Of Johannesburg")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("2191")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Gauteng")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("0725228552")])])],1),t._v(" "),r("a-col",{attrs:{xs:{span:12}}},[r("a-card",{staticStyle:{width:"100%"},attrs:{title:"BILLING ADDRESS"}},[r("p",{staticClass:"r-text-normal"},[t._v("Batanayi Matuku")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Respublica")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("10 Muswel Road Bryastan, Johannesburg, South")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Bryanston")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Bryanston")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("City Of Johannesburg")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("2191")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("Gauteng")]),t._v(" "),r("p",{staticClass:"r-text-normal"},[t._v("0725228552")])])],1)],1),t._v(" "),r("a-row",{attrs:{gutter:24,type:"flex",justify:"center",align:"middle"}},[r("a-col",{attrs:{xs:{span:12}}},[r("a-card",{staticStyle:{width:"100%"},attrs:{title:"PAYMENT METHOD"}},[r("p",{staticClass:"r-text-normal"},[t._v("Credit & Debit Card")])])],1),t._v(" "),r("a-col",{attrs:{xs:{span:12}}},[r("a-card",{staticStyle:{width:"100%"},attrs:{title:"DELIVERY METHOD"}},[r("p",{staticClass:"r-text-normal"},[t._v("Shopple ")])])],1)],1),t._v(" "),r("a-table",{attrs:{bordered:"",dataSource:t.data,columns:t.columns},scopedSlots:t._u([{key:"photo",fn:function(t){return[r("a-avatar",{directives:[{name:"lazy-load",rawName:"v-lazy-load"}],staticStyle:{width:"56px",height:"56px","border-radius":"0px"},attrs:{slot:"avatar",shape:"square",size:"default","data-src":t},slot:"avatar"})]}}])})],1)}),[],!1,null,null,null);e.default=component.exports},560:function(t,e,r){"use strict";r.r(e);var n={data:function(){return{cart:{items:[],frequency:{},frequencies:[]},formAddress:this.$form.createForm(this,{name:"form_address"})}},created:function(){this.cart=this.$store.state.cart,console.log("Cart data : ",this.cart)},methods:{saveAddress:function(t){var e=this;t.preventDefault(),this.formAddress.validateFields((function(t,r){t||(console.log("Received values of form: ",r),e.setCurrent(1))}))}}},o=r(4),component=Object(o.a)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("a-form",{staticClass:"ant-form ant-form-vertical",attrs:{form:t.formAddress},on:{submit:t.saveAddress}},[r("a-form-item",{attrs:{label:"Address Line 1"}},[r("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["address_line_1",{rules:[{required:!0,message:"Address line 1 is required"}]}],expression:"['address_line_1', { rules: [{ required: true, message: 'Address line 1 is required' }] }]"}]})],1),t._v(" "),r("a-form-item",{attrs:{label:"Address line 1 (optional)"}},[r("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["email",{rules:[]}],expression:"['email', { rules: [] }]"}]})],1),t._v(" "),r("a-form-item",{attrs:{label:"Unit # (optional)"}},[r("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["unit",{rules:[]}],expression:"['unit', { rules: [] }]"}]})],1),t._v(" "),r("a-form-item",{attrs:{label:"Post Code"}},[r("a-row",[r("a-col",{attrs:{xs:{span:12},lg:{span:6}}},[r("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["post_code",{rules:[{required:!0,message:"Post code is required"}]}],expression:"['post_code', { rules: [{ required: true, message: 'Post code is required' }] }]"}]})],1)],1)],1),t._v(" "),r("a-form-item",{attrs:{"wrapper-col":{span:24}}},[r("a-button",{staticClass:"r-btn-secondary",attrs:{type:"secondary","html-type":"submit"}},[t._v("\n            Proceed\n        ")])],1)],1)}),[],!1,null,null,null);e.default=component.exports}}]);