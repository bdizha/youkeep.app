require('dotenv').config()
const {join} = require('path')
const {copySync, removeSync} = require('fs-extra')

module.exports = {
  // mode: 'spa', // Comment this for SSR

  srcDir: __dirname,

  env: {
    apiUrl: process.env.API_URL || process.env.APP_URL + '/api',
    appUrl: process.env.APP_URL,
    appName: process.env.APP_NAME || 'KNuxt',
    appLocale: process.env.APP_LOCALE || 'en',
    githubAuth: !!process.env.GITHUB_CLIENT_ID
  },

  head: {
    title: process.env.APP_NAME,
    titleTemplate: '%s - ' + process.env.APP_NAME,
    meta: [
      {charset: 'utf-8'},
      {name: 'viewport', content: 'width=device-width, initial-scale=1'},
      {hid: 'description', name: 'description', content: 'Nuxt.js project'}
    ],
    link: [
      {rel: 'icon', type: 'image/x-icon', href: '/favicon.ico'}
    ]
  },

  loading: {color: '#007bff'},

  router: {
    middleware: ['locale', 'check-auth']
  },

  css: [
    {src: '~assets/less/app.less', lang: 'less'}
  ],

  plugins: [
    '~components/global',
    '~components/product',
    '~components/category',
    '~components/delivery',
    '~components/drawer',
    '~components/modal',
    // '~components/checkout',
    '~components/store',
    '~plugins/i18n',
    '~plugins/vform',
    '~plugins/axios',
    '~plugins/ant-design-vue',
    '~plugins/route',
    '~plugins/vue-slick-carousel'
    // '~plugins/nuxt-client-init', // Comment this for SSR
    // {src: '~plugins/bootstrap', mode: 'client'}
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

  hooks: {
    generate: {
      done(generator) {
        // Copy dist files to public/_nuxt
        if (generator.nuxt.options.dev === true /*&& generator.nuxt.options.mode === 'spa'*/) {
          const publicDir = join(generator.nuxt.options.rootDir, 'public', '_nuxt')
          removeSync(publicDir)
          copySync(join(generator.nuxt.options.generate.dir, '_nuxt'), publicDir)
          copySync(join(generator.nuxt.options.generate.dir, '200.html'), join(publicDir, 'index.html'))
          removeSync(generator.nuxt.options.generate.dir)
        }
      }
    }
  }
}
