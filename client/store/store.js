import axios from 'axios'
import Cookies from 'js-cookie'

// state
export const state = () => ({
  sellers: [],
  store: {},
  category: { has_categories: false, has_products: false },
  categories: [],
  products: [],
  product: {},
  filters: {
    categories: [],
    discounts: [],
    brands: []
  },
  sort: null,
  search: {
    isSearching: false,
    term: null,
    suggestions: []
  },
})

// getters
export const getters = {
  sellers: state => state.sellers,
  store: state => state.store,
  product: state => state.product,
  products: state => state.products,
  filters: state => state.filters,
  sort: state => state.sort,
  search: state => state.search,
  category: state => state.category,
  categories: state => state.categories,
}

// mutations
export const mutations = {
  setSellers (state, sellers) {
    console.log('sellers...', sellers)
    state.sellers = sellers
  },
  setStore (state, store) {
    console.log('store...', store)
    state.store = store
  },
  setProduct (state, product) {
    state.product = product
  },
  setProducts (state, products) {
    state.products = products
  },
  setStoreTray (state, hasStoreTray) {
    state.hasStoreTray = hasStoreTray
  },
  setFilters (state, filters) {
    state.filters = filters
  },
  setSort (state, sort) {
    state.sort = sort
  },
  setSearch (state, search) {
    state.search = search
  },
  setCategory (state, category) {
    state.category = category
  },
  setCategories (state, categories) {
    state.categories = categories
  },
  FETCH_STORE_SUCCESS (state, data) {
    state.sellers = data.sellers
    state.store = data.sellers[0]

    console.log('sellers', state.sellers)
  },
  FETCH_sellers_SUCCESS (state, data) {
    state.sellers = data.sellers
    state.store = data.sellers[0]

    console.log('sellers', state.sellers)
  },
  FETCH_CATEGORY_SUCCESS (state, data) {
    state.category = data.category
  },
  FETCH_PRODUCTS_SUCCESS (state, data) {
    state.products = data.products
  },
  FETCH_CATEGORIES_SUCCESS (state, data) {
    state.categories = data.categories
  },
  FETCH_STORE_FAILURE (state, data) {
    state.errors = null
  },
}

// actions
export const actions = {
  onsellers ({ commit }, payload) {
    commit('setSellers', payload)
  },
  onProduct ({ commit }, payload) {
    commit('setProduct', payload)
  },
  onProducts ({ commit }, payload) {
    commit('setProducts', payload)
  },
  onFilters ({ commit }, payload) {
    commit('setFilters', payload)
  },
  onSort ({ commit }, payload) {
    commit('setSort', payload)
  },
  onSearch ({ commit }, payload) {
    commit('setSearch', payload)
  },
  onCategories ({ commit }, payload) {
    commit('setCategories', payload)
  },
  onCategory ({ commit }, payload) {
    commit('setCategory', payload)
  },

  async fetchsellers ({ commit }) {
    try {
      const { data } = await axios.get('/sellers')

      commit('FETCH_STORE_SUCCESS', data)
    } catch (e) {
      commit('FETCH_STORE_FAILURE', e)
    }
  },

  async fetchProducts ({ commit }, payload) {
    try {
      const { data } = await axios.get('/products', payload)
      commit('FETCH_PRODUCTS_SUCCESS', data)
    } catch (e) {
      commit('FETCH_STORE_FAILURE', e)
    }
  },

  async fetchCategories ({ commit }, payload) {
    try {
      const { data } = await axios.get(payload)
      commit('FETCH_CATEGORIES_SUCCESS', data)
    } catch (e) {
      commit('FETCH_STORE_FAILURE', e)
    }
  },

  async fetchCategory ({ commit }, path) {
    try {
      const { data } = await axios.get(path)
      commit('FETCH_CATEGORY_SUCCESS', data)
    } catch (e) {
      commit('FETCH_STORE_FAILURE', e)
    }
  },
}
