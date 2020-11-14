require('dotenv').config()

module.exports = {
  target: 'static', // default is 'server'

  // mode: 'spa', // Comment this for SSR
  srcDir: __dirname,

  env: {
    apiUrl: process.env.VUE_APP_API_URL || process.env.VUE_APP_URL + '/api',
    appUrl: process.env.VUE_APP_URL,
    appName: process.env.VUE_APP_NAME || 'Shopple',
    appLocale: process.env.VUE_APP_LOCALE || 'en',
    githubAuth: !!process.env.GITHUB_CLIENT_ID
  },

  head: {
    title: process.env.VUE_APP_NAME,
    titleTemplate: '%s - ' + process.env.VUE_APP_NAME,
    meta: [
      {charset: 'utf-8'},
      {name: 'viewport', content: 'width=device-width, initial-scale=1'},
      {hid: 'description', name: 'description', content: 'Nuxt.js project'}
    ],
    link: [
      {rel: 'icon', type: 'image/x-icon', href: '/assets.icon'}
    ]
  },

  generate: {
    fallback: 'index.html'
  },

  loading: {
    color: '#f50a2b',
    height: '3px'
  },

  router: {
    middleware: ['locale', 'check-auth']
  },

  css: [
    {src: '~assets/less/app.less', lang: 'less'}
  ],

  plugins: [
    '~components/auth',
    '~components/global',
    '~components/product',
    '~components/category',
    '~components/delivery',
    '~components/drawer',
    '~components/modal',
    '~components/checkout',
    '~components/store',
    '~components/cart',
    '~components/account',
    '~components/merchant',
    '~components/shopper',
    '~plugins/i18n',
    '~plugins/axios',
    '~plugins/ant-design-vue',
    '~plugins/route',
    '~plugins/vue-slick-carousel'
  ],

  modules: [
    '@nuxtjs/router',
    'nuxt-lazy-load',
  ],

  build: {
    extractCSS: true,
    loaders: {
      less: {javascriptEnabled: true}
    }
  },
}
