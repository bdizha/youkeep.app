export default ({app}) => {
  // Every time the route changes (fired on initialization too)
  app.router.beforeEach((to, from, next) => {
    console.log('before each router...');
    app.store.dispatch('base/onProcess', {key: 'isFixed', value: true}, {root: true});
    next();
  });

  app.router.afterEach(() => {
    setTimeout(function () {

      console.log('after each router...');
      app.store.dispatch('base/onProcess', {key: 'isFixed', value: false}, {root: true});
    }, 600);
  });
}
