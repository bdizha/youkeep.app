require('dotenv').config()

module.exports = {
  target: 'static', // default is 'server'
  server: {
    port: 6000
  },

  // mode: 'spa', // Comment this for SSR
  srcDir: __dirname,

  env: {
    apiUrl: process.env.APP_URL + '/api',
    appUrl: process.env.APP_URL,
    appName: process.env.APP_NAME || 'Spazamall',
    appLocale: process.env.APP_LOCALE || 'en',
    githubAuth: !!process.env.GITHUB_CLIENT_ID
  },

  head: {
    title: process.env.APP_NAME,
    titleTemplate: '%s - ' + process.env.APP_NAME,
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: 'Nuxt.js project' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/assets.icon' }
    ],
    script: [
      {
        src: 'https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver',
        body: true
      }
    ]
  },

  generate: {
    interval: 3000,
    fallback: '200.html',
    routes: ['/help', '/customer', '/shopper', '/'],
    cache: {
      ignore: [
        '.nuxt', // buildDir
        'static', // dir.static
        'dist', // generate.dir
        'node_modules',
        '.**/*',
        '.*',
        'README.md'
      ]
    }
  },

  loading: {
    color: '#FBD13E',
    height: '3px'
  },

  router: {
    middleware: ['locale', 'check-auth'],
    prefetchLinks: true,
    prefetchPayloads: true
  },

  css: [
    { src: '~assets/less/app.less', lang: 'less' }
  ],

  plugins: [
    '~components/auth',
    '~components/global',
    '~components/help',
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
    '~components/customer',
    '~plugins/i18n',
    '~plugins/axios',
    '~plugins/ant-design-vue',
    '~plugins/route',
    '~plugins/vue-slick-carousel'
  ],

  modules: [
    '@nuxtjs/router',
    'nuxt-lazy-load'
  ],

  hooks: {
    'build:done' () {
      const modulesToClear = ['vue', 'vue/dist/vue.runtime.common.prod']
      modulesToClear.forEach((entry) => {
        delete require.cache[require.resolve(entry)]
      })
    }
  },

  build: {
    extractCSS: true,
    loaders: {
      less: { javascriptEnabled: true }
    }
  },
}
