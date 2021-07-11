import axios from 'axios'
import Cookies from 'js-cookie'

// state
const state = () => ({
  store: {},
  hasStore: false,
  stores: { data: [] },
  category: {},
  product: {},
  products: [],
  categories: [],
  hasProducts: false,
  departments: [],
  positions: [],
  position: {},
  storeCategories: [],
  hasStores: false,
  isStore: false,
  notice: null,
  hasNotice: false,
  hasForm: true,
  isValid: true,
  hasCategories: false,
  hasCategory: false,
  hasProduct: false,
  drawer: {
    current: null,
    isVisible: false,
    message: null
  },
  modal: {
    current: null,
    isVisible: false,
    isClosable: false,
    message: null,
    redirectTo: null
  },
  hasOverlay: false,
  hasDrawer: false,
  hasModal: false,
  hasStoreTray: false,
  reviews: [],
  filters: {
    selected: [],
    price_min: 15,
    price_max: 999999
  },
  sort: null,
  search: {
    params: {
      limit: 36,
      category_id: null,
      sort: 0,
      page: 1,
      term: null,
    }
  },
  processes: {
    isRunning: false,
    isFixed: false,
    isTray: false,
    isSuccess: false,
    isCategory: false,
    isCareers: false,
    isProduct: false,
    isCategories: false,
    isProducts: false,
  },
  isDark: false,
  isRaised: false,
  hasFooter: true,
  hasDownload: true,
  hasSubscribe: true,
  redirectTo: null,
  popover: { name: null },
  errors: [],
})

// getters
const getters = {
  isStore: state => state.isStore,
  notice: state => state.notice,
  hasNotice: state => state.hasNotice,
  hasForm: state => state.hasForm,
  store: state => state.store,
  hasStore: state => state.hasStore,
  stores: state => state.stores,
  hasStores: state => state.hasStores,
  category: state => state.category,
  departments: state => state.departments,
  positions: state => state.positions,
  position: state => state.position,
  categories: state => state.categories,
  storeCategories: state => state.storeCategories,
  hasCategories: state => state.hasCategories,
  hasProducts: state => state.hasProducts,
  hasCategory: state => state.hasCategory,
  hasProduct: state => state.hasProduct,
  drawer: state => state.drawer,
  hasDrawer: state => state.hasDrawer,
  hasOverlay: state => state.hasOverlay,
  modal: state => state.modal,
  hasModal: state => state.hasModal,
  hasStoreTray: state => state.hasStoreTray,
  product: state => state.product,
  products: state => state.products,
  reviews: state => state.reviews,
  hasReviews: state => state.reviews.length > 0,
  filters: state => state.filters,
  sort: state => state.sort,
  isSearching: state => state.isSearching,
  search: state => state.search,
  processes: state => state.processes,
  isDark: state => state.isDark,
  isRaised: state => state.isRaised,
  hasFooter: state => state.hasFooter,
  hasDownload: state => state.hasDownload,
  hasSubscribe: state => state.hasSubscribe,
  redirectTo: state => stores.redirectTo,
  errors: state => state.errors,
  popover: state => state.popover,
}

// mutations
const mutations = {
  setStore (state, store) {
    state.store = store
    state.hasStore = store !== undefined && store != null
  },
  setNotice (state, notice) {
    state.notice = notice
    state.hasNotice = notice !== null
  },
  setHasNotice (state, hasNotice) {
    state.hasNotice = hasNotice
  },
  setIsValid (state, isValid) {
    state.isValid = isValid
  },
  setStores (state, stores) {
    state.stores = stores
    state.hasStores = stores.data !== undefined && stores.data.length > 0
  },
  setCategory (state, category) {
    state.category = category
    state.hasCategory = category != null
  },
  setCategories (state, categories) {
    state.categories = categories
    state.hasCategories = categories !== undefined && categories.length > 0
  },
  setProduct (state, product) {
    state.product = product
    state.hasProduct = product != null
  },
  setProducts (state, products) {
    state.products = products
    state.hasProducts = products.data !== undefined && products.data.length > 0
  },
  setPositions (state, positions) {
    state.positions = positions
  },
  setPosition (state, position) {
    state.position = position
  },
  setDepartments (state, departments) {
    state.departments = departments
  },
  setStoreCategories (state, storeCategories) {
    state.storeCategories = storeCategories
  },
  setDrawer (state, drawer) {
    state.drawer = drawer
    state.hasDrawer = state.drawer.isVisible
    state.hasModal = false
    state.modal.isVisible = false
  },
  setModal (state, modal) {
    state.modal = modal
    state.hasDrawer = false
    state.hasModal = state.modal.isVisible
    state.drawer.isVisible = false
  },
  setHasOverlay (state, hasOverlay) {
    // console.log('setHasOverlay', hasOverlay);
    state.hasOverlay = hasOverlay
  },
  setFilters (state, filters) {
    state.filters = filters
  },
  setFilter (state, filter) {
    state.filters[filter.key] = filter.value
  },
  setReviews (state, reviews) {
    state.reviews = reviews
  },
  setSort (state, sort) {
    state.sort = sort

    Cookies.set('sort', sort, { expires: 365 })
  },
  setSearch (state, search) {
    state.search = search

    Cookies.set('search', search, { expires: 365 })
  },
  setProcess (state, process) {
    state.processes[process.key] = process.value
  },
  setHasForm (state, hasForm) {
    state.hasForm = hasForm
  },
  setIsDark (state, isDark) {
    state.isDark = isDark
  },
  setHasFooter (state, hasFooter) {
    state.hasFooter = hasFooter
  },
  setHasDownload (state, hasDownload) {
    state.hasDownload = hasDownload
  },
  setHasSubscribe (state, hasSubscribe) {
    state.hasSubscribe = hasSubscribe
  },
  setIsRaised (state, isRaised) {
    state.isRaised = isRaised
  },
  setIsStore (state, isStore) {
    state.isStore = isStore
  },
  setErrors (state, errors) {
    state.errors = errors
  },
  setPopover (state, popover) {
    state.popover = popover
  },
}

// actions
const actions = {
  onFilters ({ dispatch, commit }, payload) {
    commit('setFilters', payload)
  },
  onSort ({ dispatch, commit }, payload) {
    commit('setSort', payload)
  },
  onSearch ({ dispatch, commit }, payload) {
    commit('setSearch', payload)
  },
  onHasShop ({ dispatch, commit }, payload) {
    commit('setIsStore', payload)
  },
  onHasDownload ({ dispatch, commit }, payload) {
    commit('setHasDownload', payload)
  },
  onHasSubscribe ({ dispatch, commit }, payload) {
    commit('setHasSubscribe', payload)
  },
  onPopover ({ dispatch, commit }, payload) {
    commit('setPopover', payload)
  },
  async onCategory ({ dispatch, commit, state }, params) {
    try {
      dispatch('onProcess', { key: 'isCategory', value: true })
      dispatch('onProcess', { key: 'isProduct', value: true })
      dispatch('onProcess', { key: 'isFixed', value: true })

      let route = params.route

      commit('setCategories', [])
      commit('setProducts', { data: [] })

      await axios.post(route, params).then(({ data }) => {
        let category = data.category
        let categories = data.categories
        let products = data.products
        let store = data.store

        commit('setCategory', category)
        commit('setCategories', categories)
        commit('setProducts', products)
        commit('setStore', store)

        dispatch('onProcess', { key: 'isProduct', value: false })
        dispatch('onProcess', { key: 'isCategory', value: false })
      })

    } catch (e) {
      console.error('onCategory errors')
      console.log(e)
    }
  },
  async onCategories ({ dispatch, commit, state }, payload) {

    try {
      dispatch('onProcess', { key: 'isCategories', value: true })

      commit('setCategories', [])

      await axios.post('/categories', payload).then(({ data }) => {
        let categories = data.categories
        let store = data.store

        commit('setCategories', categories)
        commit('setStore', store)

        dispatch('onProcess', { key: 'isFixed', value: false })

        dispatch('onProcess', { key: 'isCategory', value: false })
        dispatch('onProcess', { key: 'isCategories', value: false })
      })
    } catch (e) {
      console.error('onCategories errors')
      console.log(e)
    }
  },
  async onProduct ({ dispatch, commit, state }, params) {
    dispatch('onProcess', { key: 'isProduct', value: true })

    try {
      let route = params.route

      await axios.post(route, params).then(({ data }) => {

        let product = data.product
        let category = data.category
        let store = data.store

        commit('setStore', store)
        commit('setProduct', product)

        // console.log('setProduct', data);
        commit('setCategory', category)

        dispatch('onProcess', { key: 'isFixed', value: false })
        dispatch('onProcess', { key: 'isProduct', value: false })
      })

    } catch (e) {
      console.error('onProduct errors')
      console.log(e)
    }
  },
  async onProducts ({ dispatch, commit }, payload) {
    dispatch('onProcess', { key: 'isProduct', value: true })

    try {
      await axios.post('/products', payload).then(({ data }) => {
        console.log('response: onProducts data: ', data)
        let products = data

        commit('setProducts', products)

        dispatch('onProcess', { key: 'isFixed', value: false })
        dispatch('onProcess', { key: 'isProduct', value: false })
      })

    } catch (e) {
      console.error('onProducts errors')
      console.log(e)
    }
  },
  async onPosition ({ dispatch, commit }, payload) {
    try {
      commit('setProcess', { key: 'isCareers', value: true })
      const { data } = await axios.get(payload.route, {})
      commit('setPosition', data.position)

      // console.log('setPosition data >>>>> ', data);

      commit('setProcess', { key: 'isCareers', value: false })

    } catch (e) {
      console.error('on error: ', e)
    }
  },
  async onCareers ({ dispatch, commit }, payload) {
    try {
      commit('setProcess', { key: 'isCareers', value: true })
      const { data } = await axios.post('/careers', payload)
      commit('setDepartments', data.departments)
      commit('setPositions', data.positions)

      commit('setProcess', { key: 'isCareers', value: false })

    } catch (e) {
      console.error('on error: ', e)
    }
  },
  async onStoreCategories ({ dispatch, commit }, payload) {
    try {
      commit('setProcess', { key: 'isRunning', value: true })
      const { data } = await axios.post('/categories', payload)
      commit('setStoreCategories', data.categories)

      commit('setProcess', { key: 'isRunning', value: false })

    } catch (e) {
      console.error('on error: ', e)
    }
  },
  async onStores ({ dispatch, commit }, payload) {
    commit('setProcess', { key: 'isTray', value: true })

    await axios.post('/shops', payload).then(({ data }) => {
      let stores = data
      // console.log('before onStores: ', stores);

      commit('setStores', stores)
      commit('setFilter', { key: 'stores', value: stores })
      commit('setProcess', { key: 'isTray', value: false })

      // console.log('after onStores: ', stores);
    })
  },
  async onReviews ({ dispatch, commit, state }, payload) {
    try {
      commit('setProcess', { key: 'isRunning', value: true })

      await axios.get('/testimonials', payload).then(({ data }) => {
        // console.log('response: reviews', data);

        commit('setReviews', data.testimonials)
        commit('setProcess', { key: 'isRunning', value: false })
      })

    } catch (e) {
      console.error('on error: ', e)
    }
  },
  onIsFixed ({ commit }) {
    commit('setProcess', { key: 'isFixed', value: true })

    commit('setProcess', { key: 'isFixed', value: false })
  },
  async onProcess ({ dispatch, commit, state }, payload) {
    commit('setProcess', payload)
  },
  async onHasForm ({ dispatch, commit, state }, payload) {
    commit('setHasForm', payload)
  },
  onFooter ({ dispatch, commit, state }, payload) {
    commit('setHasFooter', payload)
  },
  onDownload ({ dispatch, commit, state }, payload) {
    commit('setHasDownload', payload)
  },
  onSubscribe ({ dispatch, commit, state }, payload) {
    commit('setHasSubscribe', payload)
  },
  onModal ({ dispatch, commit, state }, payload) {
    commit('setProcess', { key: 'isRunning', value: true })
    commit('setProcess', { key: 'isFixed', value: true })
    commit('setModal', payload)
    commit('setHasOverlay', state.hasModal)

    setTimeout(function () {
      commit('setProcess', { key: 'isRunning', value: false })
      commit('setProcess', { key: 'isFixed', value: false })
    }, 300)
  },
  onDrawer ({ dispatch, commit, state }, payload) {
    commit('setProcess', { key: 'isRunning', value: true })
    commit('setProcess', { key: 'isFixed', value: true })
    commit('setDrawer', payload)

    setTimeout(function () {
      commit('setProcess', { key: 'isRunning', value: false })
      commit('setProcess', { key: 'isFixed', value: false })
    }, 300)

    commit('setHasOverlay', state.hasDrawer)
  },
  onIsRaised ({ dispatch, commit }, payload) {
    commit('setIsRaised', payload)
  },
  onIsDark ({ dispatch, commit }, payload) {
    commit('setIsDark', payload)
  },
  onNotice ({ dispatch, commit }, payload) {
    commit('setNotice', payload)
    commit('setHasNotice', false)
  },
  async onInit ({ dispatch, commit, state }, payload) {
    const search = Cookies.get('search')
    if (search) {
      commit('setSearch', JSON.parse(search))
    }
    const stores = Cookies.get('stores')
    if (stores) {
      commit('setStores', JSON.parse(stores))
    }
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
