import axios from 'axios'
import Cookies from 'js-cookie'

// state
const state = () => ({
  store: {},
  hasStore: false,
  catalogMap: {},
  hasCatalogMap: false,
  category: {},
  product: {},
  products: [],
  hasNotice: false,
  notice: null,
  hasCategories: false,
  hasSearched: false,
  filters: [
    {
      selected: [],
      price_min: 15,
      price_max: 999999
    }
  ],
  sort: null,
  isSearching: false,
  search: {
    data: null
  },
  processes: {
    isCategory: false,
    isCategories: false,
    isSlider: false,
    isSearching: false,
    isProduct: true
  }
})

// getters
const getters = {
  store: state => state.store,
  hasStore: state => state.hasStore,
  catalogMap: state => state.catalogMap,
  hasCatalogMap: state => state.hasCatalogMap,
  notice: state => state.notice,
  hasNotice: state => state.hasNotice,
  category: state => state.category,
  product: state => state.product,
  categories: state => state.categories,
  categoriesReverse: state => state.categories,
  products: state => state.products,
  productsReverse: state => state.products,
  filters: state => state.filters,
  sort: state => state.sort,
  search: state => state.search,
  hasSearched: state => state.hasSearched,
  processes: state => state.processes
}

// mutations
const mutations = {
  setCategory (state, category) {
    state.category = category
  },
  setProduct (state, product) {
    state.product = product
  },
  setStore (state, store) {
    state.store = store
    state.hasStore = store.id !== undefined

    console.log('response: store data: ', state.store)

    Cookies.set('store', store, { expires: 365 })
  },
  setCatalogMap (state, catalogMap) {
    state.catalogMap = catalogMap
    state.hasCatalogMap = catalogMap !== undefined
  },
  setNotice (state, notice) {
    state.notice = notice
    state.hasNotice = notice !== null

    console.log('response: state.hasNotice data: ', state.hasNotice)
    console.log('response: state.notice data: ', state.notice)
  },
  setHasNotice (state, hasNotice) {
    state.hasNotice = hasNotice
  },
  setFilters (state, filters) {
    state.filters = filters
  },
  setFilter (state, filter) {
    state.filters[filter.key] = filter.value
  },
  setSort (state, sort) {
    state.sort = sort
  },
  setSearch (state, search) {
    state.search = search
    state.hasSearched = true

    Cookies.set('store_search', search, { expires: 365 })
  },
  setProcess (state, process) {
    state.processes[process.key] = process.value
  }
}

// actions
const actions = {
  async onStore ({ dispatch, commit }, route) {
    console.log('response: route store', route)
    try {
      dispatch('base/onProcess', { key: 'isCategories', value: true }, { root: true })

      // console.log('route: ', route);
      let params = {}

      await axios.post(route, params).then(({ data }) => {
        let store = data.store
        commit('setStore', store)

        if (store.categories != undefined) {
          let categories = store.categories
          dispatch('base/onProcess', { key: 'isCategories', value: false }, { root: true })
        }

        console.log('onStore', store)
      })

    } catch (e) {
      console.error('onStore errors')
      console.log(e)
    }
  },
  async onCatalogMap ({ dispatch, commit }, payload) {
    console.log('response: route onCatalogMap', payload)
    try {
      dispatch('base/onProcess', { key: 'isCategories', value: true }, { root: true })

      await axios.post('/store/catalog/map', payload).then(({ data }) => {
        const catalogMap = data.catalog_map
        commit('setCatalogMap', catalogMap)

        dispatch('base/onProcess', { key: 'isCategories', value: false }, { root: true })
        console.log('onCatalogMap', catalogMap)
      })
    } catch (e) {
      console.error('onCatalogMap errors')
      console.log(e)
    }
  },
  async onCategories ({ dispatch, commit, state }, payload) {
    try {
      dispatch('base/onProcess', { key: 'isCategories', value: true }, { root: true })
      dispatch('base/onProcess', { key: 'isCategory', value: false }, { root: true })

      return await axios.post('/categories', payload).then(({ data }) => {
        const categories = data.categories

        dispatch('base/onProcess', { key: 'isFixed', value: false }, { root: true })
        dispatch('base/onProcess', { key: 'isCategories', value: false }, { root: true })

        return categories
      })
    } catch (e) {
      console.error('onCategories errors')
      console.log(e)
    }
  },
  async onProducts ({ dispatch, commit }, payload) {
    try {
      return await axios.post('/products', payload).then(({ data }) => {
        console.log('response: onProducts data: ', data)
        const products = data

        dispatch('base/onProcess', { key: 'isFixed', value: false }, { root: true })

        return products
      })
    } catch (e) {
      console.error('onProducts errors')
      console.log(e)
    }
  },
  onFilters ({ dispatch, commit }, payload) {
    commit('setFilters', payload)
  },
  onSort ({ dispatch, commit }, payload) {
    commit('setSort', payload)
  },
  onNotice ({ dispatch, commit }, payload) {
    commit('setNotice', payload)
    // commit('setHasNotice', false);
  },
  async onSearch ({ dispatch, commit }, payload) {

    try {
      commit('setProcess', { key: 'isSearching', value: true })

      await axios.post('/search', payload).then(({ data }) => {
        // console.log('response: onSearch data: ', data);

        let search = data
        commit('setSearch', search)
        console.log('response: onSearch: ', search)
        commit('setProcess', { key: 'isSearching', value: false })
      })

    } catch (e) {
      console.error('onSearch errors')
      console.log(e)
    }
  },
  async onInit ({ dispatch, commit, state }, payload) {
    const store = Cookies.get('store')

    console.log('Found store', JSON.parse(store))
    if (store) {
      commit('setStore', JSON.parse(store))
    }

    const search = Cookies.get('store_search')
    if (search) {
      commit('setSearch', JSON.parse(search))
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
