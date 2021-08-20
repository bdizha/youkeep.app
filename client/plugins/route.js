export default ({ app }) => {
  // Every time the route changes (fired on initialization too)
  app.router.beforeEach((to, from, next) => {
    console.log('before each router...')
    app.store.dispatch('base/onProcess', { key: 'isFixed', value: true }, { root: true })

    console.log('to  route', to)
    console.log('from  route', from)

    const drawer = {}
    drawer.isVisible = false
    drawer.current = null

    app.store.dispatch('base/onIsDark', to.meta.isDark, { root: true })
    app.store.dispatch('base/onDrawer', drawer, { root: true })

    next()
  })

  app.router.afterEach(() => {
    setTimeout(function () {
      console.log('after each router...')
      app.store.dispatch('base/onProcess', { key: 'isFixed', value: false }, { root: true })

      const modal = {}
      modal.isVisible = false
      modal.current = null

      app.store.dispatch('base/onModal', modal, { root: true })
    }, 300)
  })
}
