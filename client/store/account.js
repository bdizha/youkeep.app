import axios from 'axios'
import Cookies from 'js-cookie'

// state
const state = () => ({
  cards: [],
  hasCards: false,
  address: {},
  hasAddress: false,
  stores: [],
  hasStores: false,
  hasAddresses: false,
  addresses: [],
  coupons: [],
  profile: [],
  shoppingLists: [],
  error: {},
  isLoggedIn: false,
  processes: {
    isRunning: false,
    isSuccess: false,
  }
})

// getters
const getters = {
  cards: state => state.cards,
  hasCards: state => state.cards.length > 0,
  stores: state => state.stores,
  hasStores: state => state.stores.length > 0,
  address: state => state.address,
  hasAddress: state => state.hasSearched,
  hasAddresses: state => state.addresses.length > 0,
  addresses: state => state.addresses,
  processes: state => state.processes,
  coupons: state => state.coupons,
  profile: state => state.profile,
  shoppingLists: state => state.shoppingLists,
  isLoggedIn: state => state.isLoggedIn,
  error: state => state.error
}

// mutations
const mutations = {
  setAccount (state, data) {
    console.log('setAccount', data)

    state.cards = data.cards
    state.addresses = data.addresses
    state.coupons = data.coupons
    state.profile = data.profile

    console.log('coupons', state.coupons)
    console.log('addresses', state.addresses)
    console.log('cards', state.cards)
  },
  setCards (state, data) {
    state.cards = data.cards
  },
  setStores (state, data) {
    state.stores = data.stores
  },
  setAddresses (state, data) {
    state.addresses = data.addresses
  },
  setAddress (state, data) {
    state.address = data.address
  },
  setCoupons (state, data) {
    state.coupons = data.coupons
  },
  setProfile (state, data) {
    state.profile = data.profile
  },
  setShoppingLists (state, data) {
    state.shoppingLists = data.shoppingLists
  },
  setErrors (state, data) {
    state.errors = null
  },
}

// actions
const actions = {
  onAddress ({ dispatch, commit, state }, payload) {
    commit('setAddress', payload)
    state.hasAddress = payload !== null

    console.log(payload, 'data setAddress >>>>')
  },
  async onProcess ({ dispatch, commit, state }, payload) {
    try {
      commit('setProcess', payload)
    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onStores ({ commit }) {
    try {
      const { data } = await axios.get('/account/stores')

      console.log(data, 'data onStores >>>>')

      commit('setStores', data)
    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onCards ({ commit }) {
    try {
      const { data } = await axios.get('/account/cards')

      console.log(data, 'data onCards >>>>')

      commit('setCards', data)
    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onAddresses ({ commit }) {
    try {
      const { data } = await axios.get('/account/location')

      console.log(data, 'data onAddresses >>>>')

      commit('setAddresses', data)
    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onCoupons ({ commit }) {
    try {
      const { data } = await axios.get('/account/coupons')

      console.log(data, 'data onCoupons >>>>')

      commit('setCoupons', data)
    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onProfile ({ commit }) {
    try {
      const { data } = await axios.get('/account/profile')

      console.log(data, 'data onProfile >>>>')

      commit('setProfile', data)
    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onLogin ({ commit }) {
    try {
      const { data } = await axios.get('/account/profile')

      console.log(data, 'data onLogin >>>>')

      commit('setProfile', data)
    } catch (e) {
      commit('setErrors', e)
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
