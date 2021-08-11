import Vue from 'vue'
import Router from 'vue-router'
import { scrollBehavior } from '~/utils'

Vue.use(Router)

const page = path => () => import(`~/pages/${path}`).then(m => m.default || m)

const routes = [
  { path: '/', name: 'index', component: page('Index.vue') },

  { path: '/login', name: 'login', component: page('auth/Login.vue') },
  { path: '/register', name: 'register', component: page('auth/Register.vue') },
  { path: '/password/reset', name: 'password.request', component: page('auth/password/Email.vue') },
  { path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/Reset.vue') },
  { path: '/email/sent', name: 'verification.sent', component: page('auth/verification/Sent.vue') },
  { path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/Verify.vue') },
  { path: '/email/resend', name: 'verification.resend', component: page('auth/verification/Resend.vue') },
  { path: '/store/:store/category/:category', name: 'store.category.show', component: page('store/Category.vue') },
  {
    path: '/store/:store/category/:category/:level',
    name: 'store.category.show.level',
    component: page('store/Category.vue')
  },
  { path: '/store/:slug', name: 'store.show', component: page('store/Show.vue'), },
  { path: '/category/:slug', name: 'category.show', component: page('category/Show.vue') },
  { path: '/category/:slug/:level', name: 'category.show.level', component: page('category/Show.vue') },
  { path: '/product/:slug', name: 'product.show', component: page('store/Invoice.vue'), },
  { path: '/category/:category/:level/product/:slug', name: 'category.product.show', component: page('store/Invoice.vue'), },
  { path: '/shopper', name: 'shopper', component: page('shopper/Index.vue') },
  { path: '/shopper/hiw', name: 'shopper-paise', component: page('shopper/Hiw.vue') },
  { path: '/customer', name: 'customer', component: page('customer/Index.vue') },
  { path: '/customer/membership', name: 'customer-membership', component: page('customer/Membership.vue') },
  { path: '/seller', name: 'seller', component: page('seller/Index.vue') },
  { path: '/seller/hiw', name: 'seller-paise', component: page('seller/Hiw.vue') },
  { path: '/seller/resources', name: 'resource', component: page('resource/Index.vue') },
  { path: '/seller/resource/:slug', name: 'resource-show', component: page('resource/Show.vue') },
  { path: '/stores/:category', name: 'stores', component: page('store/Index.vue') },
  { path: '/home', name: 'home', component: page('home.vue') },
  { path: '/about-us', name: 'about-us', component: page('static/AboutUs.vue') },
  { path: '/contact-us', name: 'contact-us', component: page('static/ContactUs.vue') },
  { path: '/terms', name: 'terms', component: page('static/Terms.vue') },
  { path: '/privacy', name: 'privacy', component: page('static/Privacy.vue') },
  { path: '/hiw', name: 'hiw', component: page('static/Hiw.vue') },
  { path: '/help', name: 'help', component: page('help/Index.vue') },
  { path: '/help/:slug', name: 'help.show', component: page('help/Show.vue') },
  { path: '/careers', name: 'careers', component: page('career/Index.vue') },
  { path: '/career/openings', name: 'career-list', component: page('career/Index.vue') },
  { path: '/career/:slug', name: 'career-show', component: page('career/Show.vue') },
  { path: '/career/:slug/apply', name: 'career-apply', component: page('career/Apply.vue') },
  { path: '/fund', name: 'fund', component: page('static/Fund.vue') },
  { path: '/approach', name: 'approach', component: page('static/Approach.vue') },
  { path: '/partners', name: 'fund', component: page('static/Partners') },
  { path: '/framework', name: 'fund', component: page('static/Framework') },
  {
    path: '/settings',
    component: page('settings/Index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: page('settings/profile.vue') },
      { path: 'password', name: 'settings.password', component: page('settings/password.vue') }
    ]
  },
  {
    path: '/account/store/:slug/catalog-map',
    name: 'account.store.catalog-map',
    component: page('account/store/Setup.vue')
  },
  {
    path: '/account/store',
    name: 'account.store',
    component: page('account/store/Index.vue')
  },
  {
    path: '/account/store/:slug',
    name: 'account.store.show',
    component: page('account/store/Show.vue')
  },
  {
    path: '/account/seller',
    name: 'account.seller',
    component: page('account/seller/Index.vue')
  },
  {
    path: '/account/seller/setup',
    name: 'account.seller.setup',
    component: page('account/seller/Setup.vue')
  }
]

export function createRouter () {
  return new Router({
    routes,
    scrollBehavior,
    mode: 'history'
  })
}
