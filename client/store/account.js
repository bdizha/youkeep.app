import axios from 'axios'
import Cookies from 'js-cookie'

// state
const state = () => ({
  cards: [],
  hasCards: false,
  address: {},
  hasAddress: false,
  currentStep: 0,
  menu: {
    currentMenuKey: 'account'
  },
  hasMenu: false,
  sellers: { data: [] },
  hasSellers: false,
  hasAddresses: false,
  addresses: [],
  coupons: [],
  profile: [],
  businessLists: [],
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
  sellers: state => state.sellers,
  hasSellers: state => state.hasSellers > 0,
  address: state => state.address,
  hasAddress: state => state.hasSearched,
  currentStep: state => state.currentStep,
  menu: state => state.menu,
  hasMenu: state => state.hasMenu,
  hasAddresses: state => state.addresses.length > 0,
  addresses: state => state.addresses,
  processes: state => state.processes,
  coupons: state => state.coupons,
  profile: state => state.profile,
  businessLists: state => state.businessLists,
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
  setSellers (state, sellers) {
    state.sellers = sellers
    state.hasSellers = sellers.data !== undefined && sellers.data.length > 0
  },
  setAddresses (state, data) {
    state.addresses = data.addresses
  },
  setAddress (state, data) {
    state.address = data.address
  },
  setCurrentStep (state, currentStep) {
    state.currentStep = currentStep
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
  setbusinessLists (state, data) {
    state.businessLists = data.businessLists
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
  onCurrentStep ({ dispatch, commit, state }, payload) {
    commit('setCurrentStep', payload)

    console.log(payload, 'data onCurrentStep >>>>')
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
  async onsellers ({ dispatch, commit, state }, payload) {
    try {
      commit('setSellers', { data: [] })

      await axios.post('/account/store', payload).then(({ data }) => {
        commit('setSellers', data)
      })
    } catch (e) {
      console.error('onsellers errors')
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
