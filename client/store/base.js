import axios from 'axios'
import Cookies from 'js-cookie'

// state
const state = () => ({
  store: {},
  hasStore: false,
  stores: { data: [] },
  countries: [],
  hasCountries: false,
  faqs: [],
  faq: { data: [] },
  category: {},
  product: {},
  products: [],
  menuCategory: { name: 'Shop By Category', slug: null },
  hasMenuCategory: false,
  banners: [],
  categories: [],
  hasProducts: false,
  hasBanners: false,
  departments: [],
  positions: [],
  position: {},
  storeCategories: [],
  hasStores: false,
  hasFaqs: false,
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
  filters: [],
  sort: null,
  search: {
    params: {
      limit: 36,
      category_id: null,
      category_ids: [],
      sort: 0,
      page: 1,
      term: null
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
    isProducts: false
  },
  isHelp: false,
  isDark: false,
  isRaised: false,
  hasFooter: true,
  hasDownload: true,
  hasSubscribe: true,
  redirectTo: null,
  popover: { name: null },
  errors: []
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
  faqs: state => state.faqs,
  countries: state => state.countries,
  hasStores: state => state.hasStores,
  hasFaqs: state => state.hasFaqs,
  hasCountries: state => state.hasCountries,
  menuCategory: state => state.menuCategory,
  hasMenuCategory: state => state.hasMenuCategory,
  category: state => state.category,
  departments: state => state.departments,
  positions: state => state.positions,
  position: state => state.position,
  categories: state => state.categories,
  banners: state => state.banners,
  storeCategories: state => state.storeCategories,
  hasBanners: state => state.hasBanners,
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
  isHelp: state => state.isHelp,
  isRaised: state => state.isRaised,
  hasFooter: state => state.hasFooter,
  hasDownload: state => state.hasDownload,
  hasSubscribe: state => state.hasSubscribe,
  redirectTo: state => state.redirectTo,
  errors: state => state.errors,
  popover: state => state.popover
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
  setFaqs (state, faqs) {
    state.faqs = faqs
    state.hasFaqs = faqs !== undefined && faqs.length > 0
  },
  setCountries (state, countries) {
    state.countries = countries
    state.hasCountries = countries !== undefined && countries.length > 0
  },
  setMenuCategory (state, category) {
    state.menuCategory = category
    state.hasMenuCategory = category.slug !== null
  },
  setCategory (state, category) {
    state.category = category
    state.hasCategory = category != null
  },
  setBanners (state, banners) {
    state.banners = banners
    state.hasBanners = banners !== undefined && banners.length > 0
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
    // console.trace() TO DO
    state.processes[process.key] = process.value
  },
  setHasForm (state, hasForm) {
    state.hasForm = hasForm
  },
  setIsDark (state, isDark) {
    state.isDark = isDark
  },
  setIsHelp (state, iHelp) {
    state.iHelp = iHelp
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
  }
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
  onMenuCategory ({ dispatch, commit, state }, category) {
    try {
      commit('setMenuCategory', category)
    } catch (e) {
      console.error('onCategory errors')
      console.log(e)
    }
  },
  async onCategory ({ dispatch, commit, state }, params) {
    try {
      dispatch('onProcess', { key: 'isCategory', value: true })
      dispatch('onProcess', { key: 'isProduct', value: true })
      dispatch('onProcess', { key: 'isFixed', value: true })

      const route = params.route

      commit('setCategories', [])
      commit('setStores', [])
      commit('setProducts', { data: [] })

      await axios.post(route, params).then(({ data }) => {

        commit('setCategory', data.category)
        commit('setCategories', data.categories)
        commit('setProducts', data.products)
        commit('setStore', data.store)

        dispatch('onProcess', { key: 'isProduct', value: false })
        dispatch('onProcess', { key: 'isCategory', value: false })
        dispatch('onProcess', { key: 'isFixed', value: false })
      })
    } catch (e) {
      console.error('onCategory errors')
      console.log(e)
    }
  },
  async onCategories ({ dispatch, commit, state }, payload) {
    try {
      dispatch('onProcess', { key: 'isFixed', value: true })
      dispatch('onProcess', { key: 'isCategories', value: true })

      commit('setCategories', [])

      await axios.post('/categories', payload).then(({ data }) => {

        commit('setCategories', data.categories)
        commit('setStore', data.store)

        dispatch('onProcess', { key: 'isCategory', value: false })
        dispatch('onProcess', { key: 'isCategories', value: false })

        dispatch('onProcess', { key: 'isFixed', value: false })
      })
    } catch (e) {
      console.error('onCategories errors')
      console.log(e)
    }
  },
  async onBanners ({ dispatch, commit, state }, payload) {
    try {
      commit('setBanners', [])

      await axios.post('/banners', payload).then(({ data }) => {

        commit('setBanners', data.banners)
      })
    } catch (e) {
      console.error('onBanners errors')
      console.log(e)
    }
  },
  async onProduct ({ dispatch, commit, state }, params) {
    dispatch('onProcess', { key: 'isProduct', value: true })
    dispatch('onProcess', { key: 'isFixed', value: true })

    try {
      const route = params.route

      await axios.post(route, params).then(({ data }) => {
        commit('setStore', data.store)
        commit('setProduct', data.product)

        // console.log('setProduct', data);
        commit('setCategory', data.category)

        dispatch('onProcess', { key: 'isFixed', value: false })

        const defaultVariant = data.product.default_variant
        const productType = defaultVariant.product_type

        dispatch('product/onVariant', defaultVariant, { root: true })
        dispatch('product/onProductType', productType, { root: true })
        dispatch('onProcess', { key: 'isProduct', value: false })
      })
    } catch (e) {
      console.error('onProduct errors', e)
      console.log(e)
    }
  },
  async onProducts ({ dispatch, commit, state }, payload) {
    dispatch('onProcess', { key: 'isProduct', value: true })
    dispatch('onProcess', { key: 'isFixed', value: true })

    dispatch('product/onPayload', payload, { root: true })

    try {
      await axios.post('/products', payload).then(({ data }) => {
        commit('setProducts', data)
        dispatch('onProcess', { key: 'isFixed', value: false })
        dispatch('onProcess', { key: 'isProduct', value: false })
      })
    } catch (e) {
      console.error('onProducts errors', e)
      console.log(e)
    }
  },
  async onPosition ({ dispatch, commit }, payload) {
    try {
      commit('setProcess', { key: 'isCareers', value: true })
      const { data } = await axios.get(payload.route, {})
      commit('setPosition', data.position)

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
      commit('setStores', data)
      commit('setFilter', { key: 'stores', value: data })
      commit('setProcess', { key: 'isTray', value: false })
    })
  },
  async onFaqs ({ dispatch, commit }, payload) {
    commit('setProcess', { key: 'isTray', value: true })

    await axios.post('/faqs', payload).then(({ data }) => {
      const faqs = data

      commit('setFaqs', faqs)
      commit('setProcess', { key: 'isTray', value: false })
    })
  },
  async onCountries ({ dispatch, commit }, payload) {
    await axios.post('/countries', payload).then(({ data }) => {
      const countries = data

      commit('setCountries', countries)
    })
  },
  async onReviews ({ dispatch, commit, state }, payload) {
    try {
      commit('setProcess', { key: 'isRunning', value: true })

      await axios.get('/testimonials', payload).then(({ data }) => {
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
    commit('setProcess', { key: 'isRunning', value: false })
    commit('setProcess', { key: 'isFixed', value: false })

    commit('setHasOverlay', state.hasDrawer)
  },
  onIsRaised ({ dispatch, commit }, payload) {
    commit('setIsRaised', payload)
  },
  onIsDark ({ dispatch, commit }, payload) {
    commit('setIsDark', payload)
  },
  onIsHelp ({ dispatch, commit }, payload) {
    commit('setIsHelp', payload)
  },
  onIsStore ({ dispatch, commit }, payload) {
    commit('setIsStore', payload)
  },
  onNotice ({ dispatch, commit }, payload) {
    commit('setNotice', payload)
  },
  onInit ({ dispatch, commit, state }, payload) {
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
