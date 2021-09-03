import axios from 'axios'

// state
const state = () => ({
  current: null,
  card: null,
  search: {
    isSearching: false,
    term: null,
    suggestions: []
  },
  hasCard: false,
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
  hasCard: state => state.hasCard,
  card: state => state.card,
  errors: state => state.errors,
  processes: state => state.processes
}

// mutations
const mutations = {
  setCurrent (state, current) {
    state.current = current
  },
  setCard (state, card) {
    state.card = card
    state.hasCard = card != null
  },
  setSearch (state, search) {
    state.search = search
    state.hasSearched = true
  },
  setErrors (state, errors) {
    state.hasCard = errors
  },
  setProcess (state, process) {
    state.processes[process.key] = process.value
  },
}

// actions
const actions = {
  onCard ({ dispatch, commit, state }, payload) {
    commit('setCard', payload)

    dispatch('base/onProcess', { key: 'isSuccess', value: false }, { root: true })
  },
  async onProcess ({ dispatch, commit, state }, payload) {
    try {
      commit('setProcess', payload)
    } catch (e) {
      commit('setErrors', e)
    }
  },
  async onSearch ({ commit }, payload) {
    dispatch('base/onProcess', { key: 'isSearching', value: true })

    await axios.post('/card/search', payload).then(({ data }) => {
      let search = data
      commit('setSearch', search)
      console.log('response: onSearch: ', search)

      setTimeout(() => {
        dispatch('base/onProcess', { key: 'isSearching', value: false })
      }, 600)
    })
  },
  async onPost ({ dispatch, commit, state }, payload) {
    console.log('response: onPost', payload)

    let current = payload.current

    commit('setCurrent', current)

    await dispatch('form/onPost', payload, { root: true }).then(({ data }) => {
      dispatch('account/onCards', {}, { root: true })
    })
  },
  async onForm ({ dispatch, commit, state }, payload) {
    let form = payload.form
    let fields = payload.fields

    let mapFields = {}
    if (state.card != null) {
      fields.forEach(function (field) {
        mapFields[field] = form.createFormField({
          value: state.card[field],
        })
      })
    } else {
      fields.forEach(function (field) {
        mapFields[field] = form.createFormField({
          value: null
        })
      })
    }

    return mapFields
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
