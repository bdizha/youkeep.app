import axios from 'axios'
import Cookies from 'js-cookie'

// state
const state = () => ({
  current: null,
  address: null,
  search: {
    isSearching: false,
    term: null,
    suggestions: []
  },
  hasAddress: false,
  errors: [],
  processes: {
    isRunning: false,
    isSuccess: false,
  }
})

// getters
const getters = {
  current: state => state.current,
  search: state => state.search,
  hasAddress: state => state.hasAddress,
  address: state => state.address,
  errors: state => state.errors,
  processes: state => state.processes
}

// mutations
const mutations = {
  setCurrent (state, current) {
    state.current = current
  },
  setAddress (state, address) {
    state.address = address
    state.hasAddress = address !== null

    if (state.hasAddress) {
      address.is_default = Boolean(address.is_default)
    }
    Cookies.set('address', address, { expires: 365 })

    console.log(Cookies.get('address'), ' get cookie >>>>')
    console.log(state.hasAddress, ' state.hasAddress >>>>')
  },
  setSearch (state, search) {
    state.search = search
    state.hasSearched = true
  },
  setErrors (state, errors) {
  },
  setProcess (state, process) {
    state.processes[process.key] = process.value
  },
}

// actions
const actions = {
  async onAddress ({ dispatch, commit, route }, payload) {
    dispatch('base/onProcess', { key: 'isRunning', value: true }, { root: true })

    commit('setAddress', payload)
  },
  async onSelect ({ dispatch, commit, route }, payload) {
    dispatch('base/onProcess', { key: 'isRunning', value: true }, { root: true })
    dispatch('base/onProcess', { key: 'isSuccess', value: false }, { root: true })
    dispatch('base/onHasForm', false, { root: true })

    await axios.post('/location/address', payload).then(({ data }) => {
      console.log('response: onAddress data: ', data)

      let message = data.message
      dispatch('base/onNotice', message, { root: true })
      dispatch('base/onProcess', { key: 'isRunning', value: false }, { root: true })
      dispatch('base/onProcess', { key: 'isSuccess', value: true }, { root: true })

      let address = data.address
      commit('setAddress', address)

      setTimeout(() => {
        const modal = {}
        modal.isVisible = false
        modal.current = ''

        dispatch('base/onModal', modal, { root: true })

        setTimeout(() => {
          dispatch('base/onHasForm', true, { root: true })
          dispatch('base/onProcess', { key: 'isSuccess', value: false }, { root: true })
          dispatch('base/onNotice', null, { root: true })
        }, 600)
      }, 3600)
    })
  },
  async onProcess ({ dispatch, commit, state }, payload) {
    try {
      commit('setProcess', payload)
    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onSearch ({ dispatch, commit }, payload) {
    dispatch('base/onProcess', { key: 'isSearching', value: true }, { root: true })

    await axios.post('/location/lookup', payload).then(({ data }) => {
      console.log('response: onSearch data: ', data)

      let search = data
      commit('setSearch', search)
      console.log('response: onSearch: ', search)

      setTimeout(() => {
        dispatch('base/onProcess', { key: 'isSearching', value: false }, { root: true })
      }, 600)
    })
  },
  async onPost ({ dispatch, commit, state }, payload) {
    console.log('response: onPost', payload)

    let current = payload.current

    commit('setCurrent', current)

    await dispatch('form/onPost', payload, { root: true }).then(({ data }) => {
      console.log('response: onPost data::', data)

      dispatch('account/onAddresses', {}, { root: true })
    })
  },
  async onForm ({ dispatch, commit, state }, payload) {
    let form = payload.form
    let fields = payload.fields

    console.log('address value: onForm', state.address)

    let mapFields = {}
    if (state.address != null) {
      fields.forEach(function (field) {
        mapFields[field] = form.createFormField({
          value: state.address[field],
        })
      })
    } else {
      fields.forEach(function (field) {
        mapFields[field] = form.createFormField({
          value: null,
        })
      })
    }

    return mapFields
  },
  async onInit ({ dispatch, commit, state }, payload) {
    const address = Cookies.get('address')
    if (address) {
      commit('setAddress', JSON.parse(address))
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
