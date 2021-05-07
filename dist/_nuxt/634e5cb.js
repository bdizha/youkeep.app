(window.webpackJsonp=window.webpackJsonp||[]).push([[81],{618:function(e,t,r){"use strict";r.r(t);var o=r(5),n=[{label:"I would like to say thank you",key:1},{label:"I have a general query",key:2},{label:"I have a support request",key:3},{label:"I need some shopping assistance",key:4}],l={layout:"page",name:"r-about-us",props:{},data:function(){return{banner:"art-05.png",current:"contact-us",fields:["name","mobile","email","notes"],form:this.$form.createForm(this,{name:"form_contact"}),category_id:1,message:"Thank you for contacting us and we should be responding to your contact request soon.",categories:n,hasError:!1,errors:[]}},computed:Object(o.b)({current:"form/current",processes:"base/processes",hasForm:"base/hasForm"}),methods:{onSubmit:function(e){var t=this;e.preventDefault(),this.hasError=!1,this.form.validateFields((function(e,r){if(!e){var o=Object.assign({},r);o.category_id=t.category_id,o.is_active=!0;var n={params:o,route:"/contact-us",current:t.current,message:t.message};t.$store.dispatch("form/onPost",n)}}))},onCategory:function(e){this.category_id=e.key}}},c=r(4),component=Object(c.a)(l,(function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("r-page",[r("a-row",{attrs:{type:"flex",justify:"center"}},[r("a-col",{staticClass:"gutter-row",attrs:{span:24}},[r("a-row",{attrs:{gutter:[24,24],type:"flex",justify:"start",align:"middle"}},[r("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[r("a-card",[r("a-card-meta",[r("template",{slot:"description"},[r("h1",{staticClass:"r-heading r-text-secondary"},[e._v("\n                  How can we help?\n                ")]),e._v(" "),r("p",{staticClass:"r-text-normal"},[e._v("\n                  We'd love to hear from you! Feel free to reach out with any questions or comments below.\n                ")]),e._v(" "),r("a-row",{attrs:{gutter:[24,24],type:"flex",justify:"start",align:"middle"}},[r("a-col",{staticStyle:{"text-align":"left"},attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[r("h4",{staticClass:"r-heading"},[e._v("\n                      Want to join us?\n                    ")]),e._v(" "),r("p",{staticClass:"r-text-normal"},[r("span",[e._v("Then apply ")]),e._v(" "),r("NuxtLink",{attrs:{prefetch:!0,target:"_blank",to:"/careers"}},[e._v("here")])],1)]),e._v(" "),r("a-col",{staticStyle:{"text-align":"left"},attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[r("h4",{staticClass:"r-heading"},[e._v("\n                      Need answers?\n                    ")]),e._v(" "),r("p",{staticClass:"r-text-normal"},[r("span",[e._v("Check out the ")]),e._v(" "),r("NuxtLink",{attrs:{prefetch:!0,target:"_blank",to:"/help"}},[e._v("Help center")])],1)]),e._v(" "),r("a-col",{staticStyle:{"text-align":"left"},attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[r("h4",{staticClass:"r-heading"},[e._v("\n                      Email\n                    ")]),e._v(" "),r("p",{staticClass:"r-text-normal"},[r("a",{attrs:{href:"mailto:info@shopple.app",target:"_blank"}},[e._v("info@shopple.app")])])])],1)],1)],2)],1)],1),e._v(" "),r("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[r("a-card",[r("div",{attrs:{slot:"cover"},slot:"cover"},[r("r-avatar",{directives:[{name:"lazy-load",rawName:"v-lazy-load"}],attrs:{shape:"square","data-src":"/assets/"+e.banner}})],1)])],1),e._v(" "),r("a-col",{attrs:{xs:{span:24},sm:{span:24},md:{span:12},lg:{span:12}}},[r("a-card",[r("div",{staticClass:"r-card-cover-secondary r-p-24",attrs:{slot:"cover"},slot:"cover"},[r("a-card",[r("a-card-meta",[r("template",{slot:"description"},[r("a-form",{directives:[{name:"show",rawName:"v-show",value:e.hasForm,expression:"hasForm"}],staticClass:"ant-form ant-form-vertical",attrs:{form:e.form},on:{submit:e.onSubmit}},[r("a-form-item",[r("a-row",{attrs:{type:"flex",justify:"center"}},[r("a-col",{staticClass:"r-text-left",attrs:{xs:{span:24}}},[r("h2",{staticClass:"r-heading r-text-secondary"},[e._v("\n                              Get in touch\n                            ")]),e._v(" "),r("p",{staticClass:"r-text-normal"},[e._v("\n                              How can we help? Just a quick note: try visiting our\n                              "),r("NuxtLink",{attrs:{prefetch:!0,to:"/help"}},[e._v("Help center")]),e._v("\n                              that maybe of help only for general queries that we frequently receive from\n                              our customers.\n                            ")],1)])],1)],1),e._v(" "),r("a-form-item",{attrs:{label:"Select a department"}},[r("a-select",{staticStyle:{"min-width":"100%"},attrs:{labelInValue:"",defaultValue:e.categories[0],size:"default"},on:{change:e.onCategory}},e._l(e.categories,(function(option,t){return r("a-select-option",{key:t,attrs:{value:option.key}},[r("span",{staticClass:"r-sort-value"},[e._v(e._s(option.label))])])})),1)],1),e._v(" "),r("a-form-item",{attrs:{label:"Name"}},[r("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["name",{rules:[{required:!0,message:"Please enter your full name"}]}],expression:"['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]"}],attrs:{size:"default",placeholder:"Your full name"}},[r("a-icon",{attrs:{slot:"prefix",type:"mail"},slot:"prefix"})],1)],1),e._v(" "),r("a-form-item",{attrs:{label:"Mobile"}},[r("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["mobile",{rules:[{required:!0,message:"Please enter your mobile number"}]}],expression:"['mobile', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]"}],attrs:{size:"default",placeholder:"Your mobile number"}},[r("a-icon",{attrs:{slot:"prefix",type:"mobile"},slot:"prefix"})],1)],1),e._v(" "),r("a-form-item",{attrs:{label:"Email address"}},[r("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["email",{rules:[{required:!0,message:"Please enter your email address"}]}],expression:"['email', { rules: [{ required: true, message: 'Please enter your email address' }] }]"}],attrs:{type:"email",size:"default",placeholder:"Your email address"}},[r("a-icon",{attrs:{slot:"prefix",type:"user"},slot:"prefix"})],1)],1),e._v(" "),r("a-form-item",{attrs:{label:"Notes"}},[r("a-input",{directives:[{name:"decorator",rawName:"v-decorator",value:["notes",{rules:[{required:!0,message:"Please enter your message"}]}],expression:"['notes', { rules: [{ required: true, message: 'Please enter your message' }] }]"}],attrs:{type:"textarea",size:"default",placeholder:"Your message"}},[r("a-icon",{attrs:{slot:"prefix",type:"user"},slot:"prefix"})],1)],1),e._v(" "),r("a-row",{attrs:{type:"flex",justify:"center"}},[r("a-col",{staticClass:"r-text-left",attrs:{xs:{span:12},sm:{span:12},md:{span:12},lg:{span:12}}}),e._v(" "),r("a-col",{staticClass:"r-text-left",attrs:{xs:{span:12},sm:{span:12},md:{span:12},lg:{span:12}}},[r("a-button",{staticClass:"r-btn-secondary",attrs:{block:"",size:"default",type:"secondary","html-type":"submit"},on:{click:e.onSubmit}},[e._v("\n                            Save\n                          ")])],1)],1)],1),e._v(" "),r("r-notice",{attrs:{process:e.current}}),e._v(" "),r("r-spinner",{attrs:{process:"isRunning","is-absolute":!0}})],1)],2)],1)],1)])],1)],1)],1)],1)],1)}),[],!1,null,null,null);t.default=component.exports}}]);