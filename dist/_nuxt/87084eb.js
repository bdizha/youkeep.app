(window.webpackJsonp=window.webpackJsonp||[]).push([[45],{585:function(t,e,r){"use strict";r.r(e);var n=r(6),c=(r(20),r(114),r(46),r(19)),l=r.n(c),o=function(t){return Object.keys(t).map((function(e){return"".concat(e,"=").concat(t[e])})).join("&")},f={middleware:"guest",metaInfo:function(){return{title:this.$t("verify_email")}},asyncData:function(t){return Object(n.a)(regeneratorRuntime.mark((function e(){var r,n,c,data;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.params,n=t.query,e.prev=1,e.next=4,l.a.post("/email/verify/".concat(r.id,"?").concat(o(n)));case 4:return c=e.sent,data=c.data,e.abrupt("return",{success:!0,status:data.status});case 9:return e.prev=9,e.t0=e.catch(1),e.abrupt("return",{success:!1,status:e.t0.response.data.status});case 12:case"end":return e.stop()}}),e,null,[[1,9]])})))()}},v=r(4),component=Object(v.a)(f,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"row"},[r("div",{staticClass:"col-lg-8 m-auto"},[r("card",{attrs:{title:t.$t("verify_email")}},[t.success?[r("div",{staticClass:"alert alert-success",attrs:{role:"alert"}},[t._v("\n          "+t._s(t.status)+"\n        ")]),t._v(" "),r("NuxtLink",{staticClass:"btn btn-primary",attrs:{prefetch:!0,to:{name:"login"}}},[t._v("\n          "+t._s(t.$t("login"))+"\n        ")])]:[r("div",{staticClass:"alert alert-danger",attrs:{role:"alert"}},[t._v("\n          "+t._s(t.status||t.$t("failed_to_verify_email"))+"\n        ")]),t._v(" "),r("NuxtLink",{staticClass:"small float-right",attrs:{prefetch:!0,to:{name:"verification.resend"}}},[t._v("\n          "+t._s(t.$t("resend_verification_link"))+"\n        ")])]],2)],1)])}),[],!1,null,null,null);e.default=component.exports}}]);