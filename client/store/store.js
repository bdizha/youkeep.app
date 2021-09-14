import axios from 'axios'
import Cookies from 'js-cookie'

// state
export const state = () => ({
  farmers: [],
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
  farmers: state => state.farmers,
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
  setfarmers (state, farmers) {
    console.log('farmers...', farmers)
    state.farmers = farmers
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
    state.farmers = data.farmers
    state.store = data.farmers[0]

    console.log('farmers', state.farmers)
  },
  FETCH_farmers_SUCCESS (state, data) {
    state.farmers = data.farmers
    state.store = data.farmers[0]

    console.log('farmers', state.farmers)
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
  onfarmers ({ commit }, payload) {
    commit('setfarmers', payload)
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

  async fetchfarmers ({ commit }) {
    try {
      const { data } = await axios.get('/farmers')

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
