(window.webpackJsonp=window.webpackJsonp||[]).push([[73],{503:function(r,o,t){"use strict";t.r(o);t(21);var e=t(9),n={scrollToTop:!1,head:function(){return{title:this.$t("settings")}},data:function(){return{form:new Form({password:"",password_confirmation:""})}},methods:{update:function(){var r=this;return Object(e.a)(regeneratorRuntime.mark((function o(){return regeneratorRuntime.wrap((function(o){for(;;)switch(o.prev=o.next){case 0:return o.next=2,r.form.patch("/settings/password");case 2:r.form.reset();case 3:case"end":return o.stop()}}),o)})))()}}},m=t(4),component=Object(m.a)(n,(function(){var r=this,o=r.$createElement,t=r._self._c||o;return t("card",{attrs:{title:r.$t("your_password")}},[t("form",{on:{submit:function(o){return o.preventDefault(),r.update(o)},keydown:function(o){return r.form.onKeydown(o)}}},[t("alert-success",{attrs:{form:r.form,message:r.$t("password_updated")}}),r._v(" "),t("div",{staticClass:"form-group row"},[t("label",{staticClass:"col-md-3 col-form-label text-md-right"},[r._v(r._s(r.$t("new_password")))]),r._v(" "),t("div",{staticClass:"col-md-7"},[t("input",{directives:[{name:"model",rawName:"v-model",value:r.form.password,expression:"form.password"}],staticClass:"form-control",class:{"is-invalid":r.form.errors.has("password")},attrs:{type:"password",name:"password"},domProps:{value:r.form.password},on:{input:function(o){o.target.composing||r.$set(r.form,"password",o.target.value)}}}),r._v(" "),t("has-error",{attrs:{form:r.form,field:"password"}})],1)]),r._v(" "),t("div",{staticClass:"form-group row"},[t("label",{staticClass:"col-md-3 col-form-label text-md-right"},[r._v(r._s(r.$t("confirm_password")))]),r._v(" "),t("div",{staticClass:"col-md-7"},[t("input",{directives:[{name:"model",rawName:"v-model",value:r.form.password_confirmation,expression:"form.password_confirmation"}],staticClass:"form-control",class:{"is-invalid":r.form.errors.has("password_confirmation")},attrs:{type:"password",name:"password_confirmation"},domProps:{value:r.form.password_confirmation},on:{input:function(o){o.target.composing||r.$set(r.form,"password_confirmation",o.target.value)}}}),r._v(" "),t("has-error",{attrs:{form:r.form,field:"password_confirmation"}})],1)]),r._v(" "),t("div",{staticClass:"form-group row"},[t("div",{staticClass:"col-md-9 ml-md-auto"},[t("v-button",{attrs:{loading:r.form.busy,type:"success"}},[r._v("\n          "+r._s(r.$t("update"))+"\n        ")])],1)])],1)])}),[],!1,null,null,null);o.default=component.exports}}]);