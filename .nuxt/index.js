import Vue from 'vue'
import Meta from 'vue-meta'
import ClientOnly from 'vue-client-only'
import NoSsr from 'vue-no-ssr'
import { createRouter } from './router.js'
import NuxtChild from './components/nuxt-child.js'
import NuxtError from './components/nuxt-error.vue'
import Nuxt from './components/nuxt.js'
import App from './App.js'
import { setContext, getLocation, getRouteData, normalizeError } from './utils'
import { createStore } from './store.js'

/* Plugins */

import nuxt_plugin_vlazyload_6f33934c from 'nuxt_plugin_vlazyload_6f33934c' // Source: ./v-lazy-load.js (mode: 'all')
import nuxt_plugin_router_151fdade from 'nuxt_plugin_router_151fdade' // Source: ./router.js (mode: 'all')
import nuxt_plugin_global_0a6ae274 from 'nuxt_plugin_global_0a6ae274' // Source: ../client/components/global (mode: 'all')
import nuxt_plugin_product_2947c83e from 'nuxt_plugin_product_2947c83e' // Source: ../client/components/product (mode: 'all')
import nuxt_plugin_category_3e882b8f from 'nuxt_plugin_category_3e882b8f' // Source: ../client/components/category (mode: 'all')
import nuxt_plugin_delivery_6c9a8a85 from 'nuxt_plugin_delivery_6c9a8a85' // Source: ../client/components/delivery (mode: 'all')
import nuxt_plugin_drawer_059ad7c2 from 'nuxt_plugin_drawer_059ad7c2' // Source: ../client/components/drawer (mode: 'all')
import nuxt_plugin_modal_5b827dbc from 'nuxt_plugin_modal_5b827dbc' // Source: ../client/components/modal (mode: 'all')
import nuxt_plugin_checkout_d1be8852 from 'nuxt_plugin_checkout_d1be8852' // Source: ../client/components/checkout (mode: 'all')
import nuxt_plugin_store_5bd97bf0 from 'nuxt_plugin_store_5bd97bf0' // Source: ../client/components/store (mode: 'all')
import nuxt_plugin_cart_768bda31 from 'nuxt_plugin_cart_768bda31' // Source: ../client/components/cart (mode: 'all')
import nuxt_plugin_account_14e4f508 from 'nuxt_plugin_account_14e4f508' // Source: ../client/components/account (mode: 'all')
import nuxt_plugin_i18n_56ca5e75 from 'nuxt_plugin_i18n_56ca5e75' // Source: ../client/plugins/i18n (mode: 'all')
import nuxt_plugin_vform_f95cee7a from 'nuxt_plugin_vform_f95cee7a' // Source: ../client/plugins/vform (mode: 'all')
import nuxt_plugin_axios_fb9c9a02 from 'nuxt_plugin_axios_fb9c9a02' // Source: ../client/plugins/axios (mode: 'all')
import nuxt_plugin_antdesignvue_a709bf98 from 'nuxt_plugin_antdesignvue_a709bf98' // Source: ../client/plugins/ant-design-vue (mode: 'all')
import nuxt_plugin_route_f9c54e5c from 'nuxt_plugin_route_f9c54e5c' // Source: ../client/plugins/route (mode: 'all')
import nuxt_plugin_vueslickcarousel_e9b14d9a from 'nuxt_plugin_vueslickcarousel_e9b14d9a' // Source: ../client/plugins/vue-slick-carousel (mode: 'all')

// Component: <ClientOnly>
Vue.component(ClientOnly.name, ClientOnly)

// TODO: Remove in Nuxt 3: <NoSsr>
Vue.component(NoSsr.name, {
  ...NoSsr,
  render (h, ctx) {
    if (process.client && !NoSsr._warned) {
      NoSsr._warned = true

      console.warn('<no-ssr> has been deprecated and will be removed in Nuxt 3, please use <client-only> instead')
    }
    return NoSsr.render(h, ctx)
  }
})

// Component: <NuxtChild>
Vue.component(NuxtChild.name, NuxtChild)
Vue.component('NChild', NuxtChild)

// Component NuxtLink is imported in server.js or client.js

// Component: <Nuxt>
Vue.component(Nuxt.name, Nuxt)

Vue.use(Meta, {"keyName":"head","attribute":"data-n-head","ssrAttribute":"data-n-head-ssr","tagIDKeyName":"hid"})

const defaultTransition = {"name":"page","mode":"out-in","appear":false,"appearClass":"appear","appearActiveClass":"appear-active","appearToClass":"appear-to"}

async function createApp(ssrContext, config = {}) {
  const router = await createRouter(ssrContext)

  const store = createStore(ssrContext)
  // Add this.$router into store actions/mutations
  store.$router = router

  // Fix SSR caveat https://github.com/nuxt/nuxt.js/issues/3757#issuecomment-414689141
  const registerModule = store.registerModule
  store.registerModule = (path, rawModule, options) => registerModule.call(store, path, rawModule, Object.assign({ preserveState: process.client }, options))

  // Create Root instance

  // here we inject the router and store to all child components,
  // making them available everywhere as `this.$router` and `this.$store`.
  const app = {
    head: {"title":"Knuxt","titleTemplate":"%s - Knuxt","meta":[{"charset":"utf-8"},{"name":"viewport","content":"width=device-width, initial-scale=1"},{"hid":"description","name":"description","content":"Nuxt.js project"}],"link":[{"rel":"icon","type":"image\u002Fx-icon","href":"\u002Ffavicon.ico"}],"style":[],"script":[]},

    store,
    router,
    nuxt: {
      defaultTransition,
      transitions: [defaultTransition],
      setTransitions (transitions) {
        if (!Array.isArray(transitions)) {
          transitions = [transitions]
        }
        transitions = transitions.map((transition) => {
          if (!transition) {
            transition = defaultTransition
          } else if (typeof transition === 'string') {
            transition = Object.assign({}, defaultTransition, { name: transition })
          } else {
            transition = Object.assign({}, defaultTransition, transition)
          }
          return transition
        })
        this.$options.nuxt.transitions = transitions
        return transitions
      },

      err: null,
      dateErr: null,
      error (err) {
        err = err || null
        app.context._errored = Boolean(err)
        err = err ? normalizeError(err) : null
        let nuxt = app.nuxt // to work with @vue/composition-api, see https://github.com/nuxt/nuxt.js/issues/6517#issuecomment-573280207
        if (this) {
          nuxt = this.nuxt || this.$options.nuxt
        }
        nuxt.dateErr = Date.now()
        nuxt.err = err
        // Used in src/server.js
        if (ssrContext) {
          ssrContext.nuxt.error = err
        }
        return err
      }
    },
    ...App
  }

  // Make app available into store via this.app
  store.app = app

  const next = ssrContext ? ssrContext.next : location => app.router.push(location)
  // Resolve route
  let route
  if (ssrContext) {
    route = router.resolve(ssrContext.url).route
  } else {
    const path = getLocation(router.options.base, router.options.mode)
    route = router.resolve(path).route
  }

  // Set context to app.context
  await setContext(app, {
    store,
    route,
    next,
    error: app.nuxt.error.bind(app),
    payload: ssrContext ? ssrContext.payload : undefined,
    req: ssrContext ? ssrContext.req : undefined,
    res: ssrContext ? ssrContext.res : undefined,
    beforeRenderFns: ssrContext ? ssrContext.beforeRenderFns : undefined,
    ssrContext
  })

  function inject(key, value) {
    if (!key) {
      throw new Error('inject(key, value) has no key provided')
    }
    if (value === undefined) {
      throw new Error(`inject('${key}', value) has no value provided`)
    }

    key = '$' + key
    // Add into app
    app[key] = value
    // Add into context
    if (!app.context[key]) {
      app.context[key] = value
    }

    // Add into store
    store[key] = app[key]

    // Check if plugin not already installed
    const installKey = '__nuxt_' + key + '_installed__'
    if (Vue[installKey]) {
      return
    }
    Vue[installKey] = true
    // Call Vue.use() to install the plugin into vm
    Vue.use(() => {
      if (!Object.prototype.hasOwnProperty.call(Vue.prototype, key)) {
        Object.defineProperty(Vue.prototype, key, {
          get () {
            return this.$root.$options[key]
          }
        })
      }
    })
  }

  // Inject runtime config as $config
  inject('config', config)

  if (process.client) {
    // Replace store state before plugins execution
    if (window.__NUXT__ && window.__NUXT__.state) {
      store.replaceState(window.__NUXT__.state)
    }
  }

  // Add enablePreview(previewData = {}) in context for plugins
  if (process.static && process.client) {
    app.context.enablePreview = function (previewData = {}) {
      app.previewData = Object.assign({}, previewData)
      inject('preview', previewData)
    }
  }
  // Plugin execution

  if (typeof nuxt_plugin_vlazyload_6f33934c === 'function') {
    await nuxt_plugin_vlazyload_6f33934c(app.context, inject)
  }

  if (typeof nuxt_plugin_router_151fdade === 'function') {
    await nuxt_plugin_router_151fdade(app.context, inject)
  }

  if (typeof nuxt_plugin_global_0a6ae274 === 'function') {
    await nuxt_plugin_global_0a6ae274(app.context, inject)
  }

  if (typeof nuxt_plugin_product_2947c83e === 'function') {
    await nuxt_plugin_product_2947c83e(app.context, inject)
  }

  if (typeof nuxt_plugin_category_3e882b8f === 'function') {
    await nuxt_plugin_category_3e882b8f(app.context, inject)
  }

  if (typeof nuxt_plugin_delivery_6c9a8a85 === 'function') {
    await nuxt_plugin_delivery_6c9a8a85(app.context, inject)
  }

  if (typeof nuxt_plugin_drawer_059ad7c2 === 'function') {
    await nuxt_plugin_drawer_059ad7c2(app.context, inject)
  }

  if (typeof nuxt_plugin_modal_5b827dbc === 'function') {
    await nuxt_plugin_modal_5b827dbc(app.context, inject)
  }

  if (typeof nuxt_plugin_checkout_d1be8852 === 'function') {
    await nuxt_plugin_checkout_d1be8852(app.context, inject)
  }

  if (typeof nuxt_plugin_store_5bd97bf0 === 'function') {
    await nuxt_plugin_store_5bd97bf0(app.context, inject)
  }

  if (typeof nuxt_plugin_cart_768bda31 === 'function') {
    await nuxt_plugin_cart_768bda31(app.context, inject)
  }

  if (typeof nuxt_plugin_account_14e4f508 === 'function') {
    await nuxt_plugin_account_14e4f508(app.context, inject)
  }

  if (typeof nuxt_plugin_i18n_56ca5e75 === 'function') {
    await nuxt_plugin_i18n_56ca5e75(app.context, inject)
  }

  if (typeof nuxt_plugin_vform_f95cee7a === 'function') {
    await nuxt_plugin_vform_f95cee7a(app.context, inject)
  }

  if (typeof nuxt_plugin_axios_fb9c9a02 === 'function') {
    await nuxt_plugin_axios_fb9c9a02(app.context, inject)
  }

  if (typeof nuxt_plugin_antdesignvue_a709bf98 === 'function') {
    await nuxt_plugin_antdesignvue_a709bf98(app.context, inject)
  }

  if (typeof nuxt_plugin_route_f9c54e5c === 'function') {
    await nuxt_plugin_route_f9c54e5c(app.context, inject)
  }

  if (typeof nuxt_plugin_vueslickcarousel_e9b14d9a === 'function') {
    await nuxt_plugin_vueslickcarousel_e9b14d9a(app.context, inject)
  }

  // Lock enablePreview in context
  if (process.static && process.client) {
    app.context.enablePreview = function () {
      console.warn('You cannot call enablePreview() outside a plugin.')
    }
  }

  // If server-side, wait for async component to be resolved first
  if (process.server && ssrContext && ssrContext.url) {
    await new Promise((resolve, reject) => {
      router.push(ssrContext.url, resolve, (err) => {
        // https://github.com/vuejs/vue-router/blob/v3.3.4/src/history/errors.js
        if (!err._isRouter) return reject(err)
        if (err.type !== 1 /* NavigationFailureType.redirected */) return resolve()

        // navigated to a different route in router guard
        const unregister = router.afterEach(async (to, from) => {
          ssrContext.url = to.fullPath
          app.context.route = await getRouteData(to)
          app.context.params = to.params || {}
          app.context.query = to.query || {}
          unregister()
          resolve()
        })
      })
    })
  }

  return {
    store,
    app,
    router
  }
}

export { createApp, NuxtError }
