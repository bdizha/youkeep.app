(window.webpackJsonp=window.webpackJsonp||[]).push([[54],{634:function(t,e,r){"use strict";r.r(e);var n=r(5),o={props:{name:"r-checkout-instructions"},data:function(){return{form:this.$form.createForm(this,{name:"form_instructions"})}},computed:Object(n.b)({cart:"cart/cart"}),created:function(){this.payload()},methods:{payload:function(){},onStep:function(){this.$store.dispatch("base/onModal",modal)}}},l=r(4),component=Object(l.a)(o,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("a-row",{attrs:{gutter:24,type:"flex",justify:"center"}},[r("a-col",{staticClass:"gutter-row",attrs:{xs:{span:24},sm:{span:24},lg:{span:24}}},[r("a-form",{staticClass:"ant-form ant-form-vertical",attrs:{form:t.form},on:{submit:t.onStep}},[r("a-form-item",{attrs:{label:"Notes"}},[r("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["notes",{rules:[{required:!0,message:"Please enter your delivery instructions."}]}],expression:"['notes', { rules: [{ required: true, message: 'Please enter your delivery instructions.' }] }]"}],attrs:{type:"textarea",size:"default",placeholder:"Your delivery instructions"}})],1),t._v(" "),r("a-form-item",{attrs:{label:"What if you're not around?"}},[t._v("\n                By selecting this option you accept full responsibility for your\n                order after it has been delivered unattended, including any loss due\n                to theft or damage due to temperature sensitivity.\n            ")]),t._v(" "),r("a-row",{staticClass:"r-margin-vertical-24",attrs:{gutter:24,type:"flex",justify:"start"}},[r("a-col",{staticClass:"r-text-left",attrs:{xs:{span:12},sm:{span:12},md:{span:18},lg:{span:18}}},[r("a-button",{staticClass:"r-btn-bordered-secondary",attrs:{size:"default",type:"secondary","html-type":"button"}},[t._v("\n                        Skip\n                    ")])],1),t._v(" "),r("a-col",{staticClass:"r-text-right",attrs:{xs:{span:12},sm:{span:12},md:{span:6},lg:{span:6}}},[r("a-button",{staticClass:"r-btn-secondary",attrs:{block:"",type:"secondary","html-type":"submit"}},[t._v("\n                        Proceed\n                    ")])],1)],1)],1),t._v(" "),r("r-spinner",{attrs:{process:"isProcessing"}})],1)],1)}),[],!1,null,null,null);e.default=component.exports}}]);