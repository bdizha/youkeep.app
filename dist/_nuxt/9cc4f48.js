(window.webpackJsonp=window.webpackJsonp||[]).push([[23],{579:function(t,o,e){"use strict";e.r(o);e(35);var r={components:{},props:{},data:function(){return{category:{},products:[],categories:[],store:{slug:null},hasData:!1,breadcrumbs:[],hasProducts:!1,hasCategories:!1,sort:0}},mounted:function(){this.payload();var t=this;this.$store.subscribe((function(o,e){"onSort"==o.type&&(t.sort=o.payload.key,t.payload())}))},methods:{payload:function(){this.store=this.$store.state.store;var t={category_id:this.category.id,sort:this.sort},path=this.$route.path,o=this;axios.post(path,t).then((function(t){o.category=t.data.category,o.breadcrumbs=o.category.breadcrumbs,o.category.categories.length>0?(o.hasCategories=!0,o.categories=o.category.categories):(o.products=o.category.products,o.hasCategories=!1),setTimeout((function(){o.$store.commit("onSpin",!1)}),1500),o.hasData=!0,console.log("setting category data >> after")})).catch((function(t){console.log(t)}))}}},c=e(4),component=Object(c.a)(r,(function(){var t=this,o=t.$createElement,e=t._self._c||o;return t.hasData?e("r-store-template",{attrs:{category:t.category}},[e("a-row",{attrs:{gutter:16,type:"flex",justify:"start",align:"middle"}},[e("a-col",{attrs:{xs:{span:24}}},[e("r-store-products",{attrs:{category:t.category,colums:6,store:t.store,products:t.products}})],1)],1)],1):t._e()}),[],!1,null,null,null);o.default=component.exports}}]);