import Vue from 'vue'
import Router from 'vue-router'
import { scrollBehavior } from '~/utils'

Vue.use(Router)

const page = path => () => import(`~/pages/${path}`).then(m => m.default || m)

const routes = [
  { path: '/', name: 'index', meta: { isDark: false}, component: page('Index.vue') },

  { path: '/login', name: 'login', meta: { isDark: false}, component: page('auth/Login.vue') },
  { path: '/register', name: 'register', meta: { isDark: false}, component: page('auth/Register.vue') },
  { path: '/password/reset', name: 'password.request', meta: { isDark: false}, component: page('auth/password/Email.vue') },
  { path: '/password/reset/:token', name: 'password.reset', meta: { isDark: false}, component: page('auth/password/Reset.vue') },
  { path: '/email/sent', name: 'verification.sent', meta: { isDark: false}, component: page('auth/verification/Sent.vue') },
  { path: '/email/verify/:id', name: 'verification.verify', meta: { isDark: false}, component: page('auth/verification/Verify.vue') },
  { path: '/email/resend', name: 'verification.resend', meta: { isDark: false}, component: page('auth/verification/Resend.vue') },
  { path: '/store/:store/category/:category', name: 'store.category.show', meta: { isDark: false}, component: page('store/Category.vue') },
  {
    path: '/store/:store/category/:category/:level',
    name: 'store.category.show.level',
    component: page('store/Category.vue')
  },
  { path: '/store/:slug', name: 'store.show', meta: { isDark: false}, component: page('store/Show.vue'), },
  { path: '/category/:slug', name: 'category.show', meta: { isDark: false}, component: page('category/Show.vue') },
  { path: '/category/:slug/:level', name: 'category.show.level', meta: { isDark: false}, component: page('category/Show.vue') },
  { path: '/product/:slug', name: 'product.show', meta: { isDark: false}, component: page('store/Invoice.vue'), },
  { path: '/category/:category/:level/product/:slug', name: 'category.product.show', meta: { isDark: false}, component: page('store/Invoice.vue'), },
  { path: '/shopper', name: 'shopper', meta: { isDark: false}, component: page('shopper/Index.vue') },
  { path: '/shopper/hiw', name: 'shopper-paise', meta: { isDark: false}, component: page('shopper/Auto.vue') },
  { path: '/customer', name: 'customer', meta: { isDark: false}, component: page('customer/Index.vue') },
  { path: '/customer/membership', name: 'customer-membership', meta: { isDark: false}, component: page('customer/Membership.vue') },
  { path: '/seller', name: 'seller', meta: { isDark: false}, component: page('seller/Index.vue') },
  { path: '/seller/hiw', name: 'seller-paise', meta: { isDark: false}, component: page('seller/Auto.vue') },
  { path: '/seller/resources', name: 'resource', meta: { isDark: false}, component: page('resource/Index.vue') },
  { path: '/seller/resource/:slug', name: 'resource-show', meta: { isDark: false}, component: page('resource/Show.vue') },
  { path: '/stores/:category', name: 'stores', meta: { isDark: false}, component: page('store/Index.vue') },
  { path: '/home', name: 'home', meta: { isDark: false}, component: page('home.vue') },
  { path: '/about-us', name: 'about-us', meta: { isDark: true}, component: page('static/AboutUs.vue') },
  { path: '/contact-us', name: 'contact-us', meta: { isDark: false}, component: page('static/ContactUs.vue') },
  { path: '/terms', name: 'terms', meta: { isDark: false}, component: page('static/Terms.vue') },
  { path: '/privacy', name: 'privacy', meta: { isDark: false}, component: page('static/Privacy.vue') },
  { path: '/hiw', name: 'hiw', meta: { isDark: false}, component: page('static/Auto.vue') },
  { path: '/help', name: 'help', meta: { isDark: false}, component: page('help/Index.vue') },
  { path: '/help/:slug', name: 'help.show', meta: { isDark: false}, component: page('help/Show.vue') },
  { path: '/careers', name: 'careers', meta: { isDark: false}, component: page('career/Index.vue') },
  { path: '/career/openings', name: 'career-list', meta: { isDark: false}, component: page('career/Index.vue') },
  { path: '/career/:slug', name: 'career-show', meta: { isDark: false}, component: page('career/Show.vue') },
  { path: '/career/:slug/apply', name: 'career-apply', meta: { isDark: false}, component: page('career/Apply.vue') },
  { path: '/capital', name: 'fund', meta: { isDark: false}, component: page('static/Capital.vue') },
  { path: '/articles', name: 'articles', meta: { isDark: false}, component: page('article/Index.vue') },
  { path: '/article/:slug', name: 'article-show', meta: { isDark: false}, component: page('article/Show.vue') },
  { path: '/invest', name: 'invest', meta: { isDark: false}, component: page('static/Invest.vue') },
  {
    path: '/settings',
    component: page('settings/Index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', meta: { isDark: false}, component: page('settings/profile.vue') },
      { path: 'password', name: 'settings.password', meta: { isDark: false}, component: page('settings/password.vue') }
    ]
  },
  {
    path: '/account/store/:slug/catalog-map',
    name: 'account.store.catalog-map',
    meta: { isDark: false},
    component: page('account/store/Setup.vue')
  },
  {
    path: '/account/store',
    name: 'account.store',
    meta: { isDark: false},
    component: page('account/store/Index.vue')
  },
  {
    path: '/account/store/:slug',
    name: 'account.store.show',
    meta: { isDark: false},
    component: page('account/store/Show.vue')
  },
  {
    path: '/account/seller',
    name: 'account.seller',
    meta: { isDark: false},
    component: page('account/seller/Index.vue')
  },
  {
    path: '/account/seller/setup',
    name: 'account.seller.setup',
    meta: { isDark: false},
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
