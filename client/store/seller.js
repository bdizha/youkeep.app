import axios from 'axios'
import Cookies from 'js-cookie'

// state
const state = () => ({
  cards: [],
  hasCards: false,
  address: {},
  hasAddress: false,
  currentStep: false,
  menu: {
    currentMenuKey: 'account'
  },
  hasMenu: false,
  stores: { data: [] },
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
    isSuccess: false
  }
})

// getters
const getters = {
  cards: state => state.cards,
  hasCards: state => state.cards.length > 0,
  stores: state => state.stores,
  hasStores: state => state.hasStores > 0,
  address: state => state.address,
  hasAddress: state => state.hasSearched,
  menu: state => state.menu,
  hasMenu: state => state.hasMenu,
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
  setStores (state, stores) {
    state.stores = stores
    state.hasStores = stores.data !== undefined && stores.data.length > 0
  },
  setAddresses (state, data) {
    state.addresses = data.addresses
  },
  setAddress (state, data) {
    state.address = data.address
  },
  setMenu (state, menu) {
    state.menu = menu
    state.hasMenu = menu !== null
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
  }
}

// actions
const actions = {
  onAddress ({ dispatch, commit, state }, payload) {
    commit('setAddress', payload)
    state.hasAddress = payload !== null

    console.log(payload, 'data onAddress >>>>')
  },
  onMenu ({ dispatch, commit, state }, payload) {
    commit('setMenu', payload)

    console.log(payload, 'data onMenu >>>>')
  },
  onProcess ({ dispatch, commit, state }, payload) {
    try {
      commit('setProcess', payload)
    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onStores ({ dispatch, commit, state }, payload) {
    try {
      commit('setStores', { data: [] })

      await axios.post('/account/store', payload).then(({ data }) => {
        commit('setStores', data)
      })
    } catch (e) {
      console.error('onStores errors')
      console.log(e)
    }
  },
  async onCards ({ commit }) {
    try {
      const { data } = await axios.get('/account/card')

      console.log(data, 'data onCards >>>>')

      commit('setCards', data)
    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onAddresses ({ commit }) {
    try {
      const { data } = await axios.get('/account/address')

      console.log(data, 'data onAddresses >>>>')

      commit('setAddresses', data)
    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onCoupons ({ commit }) {
    try {
      const { data } = await axios.get('/account/coupon')

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