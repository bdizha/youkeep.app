import Vue from 'vue'
import Router from 'vue-router'
import { scrollBehavior } from '~/utils'

Vue.use(Router)

const page = path => () => import(`~/pages/${path}`).then(m => m.default || m)

const routes = [
  { path: '/', name: 'index', meta: { isDark: false, isRaised: false}, component: page('Index.vue') },

  { path: '/login', name: 'login', meta: { isDark: false, isRaised: false}, component: page('auth/Login.vue') },
  { path: '/register', name: 'register', meta: { isDark: false, isRaised: false}, component: page('auth/Register.vue') },
  { path: '/password/reset', name: 'password.request', meta: { isDark: false, isRaised: false}, component: page('auth/password/Email.vue') },
  { path: '/password/reset/:token', name: 'password.reset', meta: { isDark: false, isRaised: false}, component: page('auth/password/Reset.vue') },
  { path: '/email/sent', name: 'verification.sent', meta: { isDark: false, isRaised: false}, component: page('auth/confirmation/Sent.vue') },
  { path: '/email/verify/:id', name: 'verification.verify', meta: { isDark: false, isRaised: false}, component: page('auth/confirmation/Confirm.vue') },
  { path: '/email/resend', name: 'verification.resend', meta: { isDark: false, isRaised: false}, component: page('auth/confirmation/Resend.vue') },
  { path: '/verify', name: 'verify', meta: { isDark: false, isRaised: false}, component: page('auth/Verify.vue') },
  { path: '/store/:store/category/:category', name: 'store.category.show', meta: { isDark: false, isRaised: false}, component: page('store/Category.vue') },
  {
    path: '/store/:store/category/:category/:level',
    name: 'store.category.show.level',
    component: page('store/Category.vue')
  },
  { path: '/store/:slug', name: 'store.show', meta: { isDark: false, isRaised: false}, component: page('store/Article.vue'), },
  { path: '/category/:slug', name: 'category.show', meta: { isDark: false, isRaised: false}, component: page('category/Article.vue') },
  { path: '/category/:slug/:level', name: 'category.show.level', meta: { isDark: false, isRaised: false}, component: page('category/Article.vue') },
  { path: '/category/:category/:level/service/:slug', name: 'category.product.show', meta: { isDark: false, isRaised: false}, component: page('store/Invoice.vue'), },
  { path: '/customer', name: 'customer', meta: { isDark: false, isRaised: false}, component: page('customer/Index.vue') },
  { path: '/shopper/membership', name: 'customer-membership', meta: { isDark: false, isRaised: false}, component: page('contact-us.vue') },
  { path: '/seller', name: 'seller', meta: { isDark: false, isRaised: false}, component: page('seller/Index.vue') },
  { path: '/chef', name: 'seller', meta: { isDark: false, isRaised: false}, component: page('chef/Index.vue') },
  { path: '/seller/blog', name: 'resource', meta: { isDark: false, isRaised: false}, component: page('resource/Index.vue') },
  { path: '/seller/resource/:slug', name: 'resource-show', meta: { isDark: false, isRaised: false}, component: page('resource/Article.vue') },
  { path: '/sellers/:category', name: 'sellers', meta: { isDark: false, isRaised: false}, component: page('store/Index.vue') },
  { path: '/home', name: 'home', meta: { isDark: false, isRaised: false}, component: page('home.vue') },
  { path: '/about-us', name: 'about-us', meta: { isDark: true, isRaised: false}, component: page('static/AboutUs.vue') },
  { path: '/contact-us', name: 'contact-us', meta: { isDark: false, isRaised: false}, component: page('static/ContactUs.vue') },
  { path: '/terms', name: 'terms', meta: { isDark: false, isRaised: true}, component: page('static/Terms.vue') },
  { path: '/privacy', name: 'privacy', meta: { isDark: false, isRaised: true}, component: page('static/Privacy.vue') },
  { path: '/hiw', name: 'hiw', meta: { isDark: false, isRaised: false}, component: page('static/Button.vue') },
  { path: '/shop', name: 'shop', meta: { isDark: false, isRaised: false}, component: page('store/Index.vue') },
  { path: '/partners', name: 'partners', meta: { isDark: false, isRaised: false}, component: page('static/Partners.vue') },
  { path: '/community', name: 'community', meta: { isDark: false, isRaised: false}, component: page('static/Community.vue') },
  { path: '/help', name: 'help', meta: { isDark: false, isRaised: true}, component: page('help/article/Index.vue') },
  { path: '/help/article/:slug', name: 'help.article.show', meta: { true: false, isRaised: true}, component: page('help/article/Show.vue') },
  { path: '/help/category/:slug', name: 'help.category.show', meta: { isDark: false, isRaised: true}, component: page('help/article/Category.vue') },
  { path: '/careers', name: 'careers', meta: { isDark: false, isRaised: true}, component: page('career/Index.vue') },
  { path: '/career/openings', name: 'career-list', meta: { isDark: false, isRaised: true}, component: page('career/Index.vue') },
  { path: '/career/:slug', name: 'career-show', meta: { isDark: false, isRaised: true}, component: page('career/Article.vue') },
  { path: '/career/:slug/apply', name: 'career-apply', meta: { isDark: false, isRaised: false}, component: page('career/Apply.vue') },
  { path: '/blog', name: 'blog', meta: { isDark: true, isRaised: true}, component: page('blog/Index.vue') },
  { path: '/blog/article/:slug', name: 'blog.article', meta: { isDark: false, isRaised: true}, component: page('blog/Article.vue') },
  { path: '/blog/category/:slug', name: 'blog.category', meta: { isDark: false, isRaised: true}, component: page('blog/Category.vue') },
  { path: '/service', name: 'services', meta: { isDark: false, isRaised: true}, component: page('service/Index.vue') },
  { path: '/service/:slug', name: 'service-show', meta: { isDark: false, isRaised: true}, component: page('service/Show.vue') },
  { path: '/pricing', name: 'pricing', meta: { isDark: false, isRaised: false}, component: page('static/Pricing.vue') },
  { path: '/docs', name: 'docs', meta: { isDark: false, isRaised: true}, component: page('static/Documentation.vue') },
  {
    path: '/settings',
    component: page('settings/Index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', meta: { isDark: false, isRaised: false}, component: page('settings/profile.vue') },
      { path: 'password', name: 'settings.password', meta: { isDark: false, isRaised: false}, component: page('settings/password.vue') }
    ]
  },
  {
    path: '/account/store/:slug/catalog-map',
    name: 'account.store.catalog-map',
    meta: { isDark: false, isRaised: false},
    component: page('account/store/Setup.vue')
  },
  {
    path: '/account/store',
    name: 'account.store',
    meta: { isDark: false, isRaised: false},
    component: page('account/store/Index.vue')
  },
  {
    path: '/account/store/:slug',
    name: 'account.store.show',
    meta: { isDark: false, isRaised: false},
    component: page('account/store/Article.vue')
  },
  {
    path: '/account/seller',
    name: 'account.store',
    meta: { isDark: false, isRaised: false},
    component: page('account/seller/Index.vue')
  },
  {
    path: '/account/seller/setup',
    name: 'account.store.setup',
    meta: { isDark: false, isRaised: false},
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
