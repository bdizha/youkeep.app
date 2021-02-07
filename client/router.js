import Vue from 'vue'
import Router from 'vue-router'
import {scrollBehavior} from '~/utils'

Vue.use(Router)

const page = path => () => import(`~/pages/${path}`).then(m => m.default || m)

const routes = [
  {path: '/', name: 'index', component: page('Index.vue')},

  {path: '/login', name: 'login', component: page('auth/login.vue')},
  {path: '/register', name: 'register', component: page('auth/register.vue')},
  {path: '/password/reset', name: 'password.request', component: page('auth/password/email.vue')},
  {path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue')},
  {path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue')},
  {path: '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue')},
  {path: '/store/:store/category/:category', name: 'store.category.show', component: page('store/Category.vue')},
  {
    path: '/store/:store/category/:category/:level',
    name: 'store.category.show.level',
    component: page('store/Category.vue')
  },
  {path: '/store/:slug', name: 'store.show', component: page('store/Show.vue'),},
  {path: '/category/:slug', name: 'category.show', component: page('category/Show.vue')},
  {path: '/category/:slug/:level', name: 'category.show.level', component: page('category/Show.vue')},
  {path: '/product/:slug', name: 'product.show', component: page('store/Product.vue'),},
  {path: '/shopper', name: 'shopper', component: page('shopper/Index.vue')},
  {path: '/shopper/paise', name: 'shopper-paise', component: page('shopper/Paise.vue')},
  {path: '/customer', name: 'customer', component: page('customer/Index.vue')},
  {path: '/customer/paise', name: 'customer-paise', component: page('customer/Paise.vue')},
  {path: '/merchant', name: 'merchant', component: page('merchant/Index.vue')},
  {path: '/merchant/paise', name: 'merchant-paise', component: page('merchant/Paise.vue')},
  {path: '/merchant/resources', name: 'resource', component: page('resource/Index.vue')},
  {path: '/merchant/resource/:slug', name: 'resource-show', component: page('resource/Show.vue')},
  {path: '/stores/:category', name: 'stores', component: page('store/Index.vue')},
  {path: '/home', name: 'home', component: page('home.vue')},
  {path: '/about-us', name: 'about-us', component: page('static/AboutUs.vue')},
  {path: '/contact-us', name: 'contact-us', component: page('static/ContactUs.vue')},
  {path: '/terms', name: 'terms', component: page('static/Terms.vue')},
  {path: '/privacy', name: 'privacy', component: page('static/Privacy.vue')},
  {path: '/hiw', name: 'hiw', component: page('static/Hiw.vue')},
  {path: '/help', name: 'help', component: page('help/Index.vue')},
  {path: '/help/:id/:slug', name: 'help.show', component: page('help/Show.vue')},
  {path: '/careers', name: 'careers', component: page('career/Index.vue')},
  {path: '/career/openings', name: 'career-list', component: page('career/List.vue')},
  {path: '/career/:slug', name: 'career-show', component: page('career/Show.vue')},
  {path: '/career/:slug/apply', name: 'career-apply', component: page('career/Apply.vue')},
  {
    path: '/settings',
    component: page('settings/Index.vue'),
    children: [
      {path: '', redirect: {name: 'settings.profile'}},
      {path: 'profile', name: 'settings.profile', component: page('settings/profile.vue')},
      {path: 'password', name: 'settings.password', component: page('settings/password.vue')}
    ]
  }
]

export function createRouter() {
  return new Router({
    routes,
    scrollBehavior,
    mode: 'history'
  })
}
