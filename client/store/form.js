import axios from 'axios'

// state
const state = () => ({
  current: null,
  errors: [],
  result: null,
  hasResult: false,
  isValid: true,
  processes: {
    isRunning: false,
    isSuccess: false
  }
})

// getters
const getters = {
  current: state => state.current,
  errors: state => state.errors,
  result: state => state.result,
  hasResult: state => state.hasResult,
  isValid: state => state.isValid,
  processes: state => state.processes
}

// mutations
const mutations = {
  setIsValid (state, isValid) {
    state.isValid = isValid
  },
  setCurrent (state, current) {
    state.current = current
  },
  setErrors (state, errors) {
    state.errors = errors
  },
  setResult (state, result) {
    state.result = result
    state.hasResult = result !== null
  },
  setHasResult (state, hasResult) {
    state.hasResult = hasResult
  },
  setProcess (state, process) {
    state.processes[process.key] = process.value
  }
}

// actions
const actions = {
  // eslint-disable-next-line require-await
  async onPost ({ dispatch, commit, state }, payload) {
    console.log('response: form onPost', payload)

    const params = payload.params
    const route = payload.route
    const current = payload.current

    commit('setCurrent', current)

    dispatch('base/onProcess', { key: 'isRunning', value: true }, { root: true })
    dispatch('base/onProcess', { key: 'isSuccess', value: false }, { root: true })
    dispatch('base/onHasForm', true, { root: true })
    dispatch('onIsValid', true)

    return axios.post(route, params).then(({ data }) => {
      console.log('response: form onPost data::', data)
      console.log('response: form onPost data::', data)

      dispatch('base/onHasForm', false, { root: true })
      dispatch('base/onProcess', { key: 'isSuccess', value: true }, { root: true })

      setTimeout(() => {
        dispatch('base/onProcess', { key: 'isRunning', value: false }, { root: true })
      }, 300)

      setTimeout(() => {
        const isRegistering = current === 'register'
        const modal = {
          current: isRegistering ? 'secure' : null,
          isVisible: isRegistering
        }

        console.log('isRegistering', isRegistering)
        console.log('isRegistering current', current)

        dispatch('base/onModal', modal, { root: true })
        dispatch('base/onHasForm', true, { root: true })
        dispatch('base/onProcess', { key: 'isSuccess', value: false }, { root: true })

        dispatch('base/onResult', null, { root: true })
      }, 12000)

      return { data }
    }).catch((error) => {
      setTimeout(() => {
        dispatch('form/onIsValid', false, { root: true })

        dispatch('base/onProcess', { key: 'isRunning', value: false }, { root: true })
        dispatch('base/onHasForm', true, { root: true })
      }, 300)

      throw error
    })
  },
  onCurrent ({ dispatch, commit, state }, payload) {
    commit('setCurrent', payload)
  },
  onIsValid ({ dispatch, commit, state }, payload) {
    commit('setIsValid', payload)
  },
  onProcess ({ dispatch, commit, state }, payload) {
    try {
      commit('setProcess', payload)
    } catch (e) {
      commit('setErrors', e)
    }
  },
  onResult ({ dispatch, commit }, payload) {
    commit('setResult', payload)
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
