import Cookies from 'js-cookie'
import axios from 'axios'

// state
const state = () => ({
  redirectTo: '/',
  current: null,
  user: {},
  form: null,
  fields: [],
  processes: {
    isRunning: false,
    isSuccess: false,
  },
  token: null,
  isLoggedIn: false,
  errors: [],
})

// getters
const getters = {
  current: state => state.current,
  user: state => state.user,
  redirectTo: state => state.redirectTo,
  token: state => state.token,
  check: state => state.user !== null,
  isLoggedIn: state => state.isLoggedIn,
  errors: state => state.errors,
  processes: state => state.processes
}

// mutations
const mutations = {
  setCurrent (state, current) {
    state.current = current
  },
  setRedirectTo (state, redirectTo) {
    state.redirectTo = redirectTo
    Cookies.set('redirectTo', redirectTo, { expires: 365 })
  },
  setToken (state, token) {
    state.token = token
    Cookies.set('token', token, { expires: 365 })
  },
  setIsLogged (state, isLoggedIn) {
    state.isLoggedIn = isLoggedIn
    Cookies.set('isLoggedIn', isLoggedIn, { expires: isLoggedIn ? 365 : 0 })
  },
  setForm (state, form) {
    state.form = form
    Cookies.set('form', form, { expires: 365 })
  },
  setFields (state, fields) {
    state.fields = fields
  },
  setUser (state, user) {
    state.user = user
    Cookies.set('user', user, { expires: 365 })

    console.trace()
  },
  setProcess (state, process) {
    state.processes[process.key] = process.value
  },
  setErrors (state, errors) {
    // state.errors = errors;
  }
}

// actions
const actions = {
  async onToken ({ commit, dispatch, state }, { token, remember }) {
    commit('setToken', token)
  },
  async onPost ({ commit, dispatch, state }, payload) {
    console.log('response: onPost', payload)

    let form = payload.form
    let fields = payload.fields
    let current = payload.current
    let hasUser = payload.hasUser
    let canRedirect = payload.canRedirect

    commit('setCurrent', current)
    commit('setFields', fields)
    commit('setForm', form)

    await dispatch('form/onPost', payload, { root: true }).then(({ data }) => {
      if (hasUser === true) {
        let user = data.user
        commit('setUser', user)

        console.log('response: after user::', state.user)
        commit('setIsLogged', user !== null && user !== undefined)
      }

      if (canRedirect) {
        setTimeout(() => {
          dispatch('onRoute', state.redirectTo, { root: true }).catch(error => {
          })
        }, 4500)
      }

      console.log('response: completing onPost::', state.user)
    })
  },
  async onUser ({ dispatch, commit, state }, payload) {
    try {
      console.log(payload, 'onUser >>>> data')

      let meta = payload.meta
      store.dispatch('auth/onRedirect', to.path)

      // only send to the server when not logged in
      if (!state.isLoggedIn) {

        await axios.get('/user').then(({ data }) => {
          let user = data.user
          commit('setUser', user)
          commit('setIsLogged', user !== undefined && user !== null)

          if (meta.auth && !state.isLoggedIn) {
            dispatch('onRoute', '/login', { root: true })
          }

          if (state.isLoggedIn && state.user.activated === 0) {
            let modal = {}
            modal.isVisible = true
            modal.isClosable = true
            modal.current = 'secure'
            dispatch('base/onModal', modal, { root: true })
          }
        })
      }

    } catch (e) {
      Cookies.remove('token')
      Cookies.remove('user')

      commit('setErrors', e)
    }
  },
  async onUserUpdate ({ commit }, payload) {
    commit('UPDATE_USER', payload)
  },
  async onLogout ({ dispatch, commit, state }) {
    try {
      dispatch('base/onProcess', { key: 'isSuccess', value: false }, { root: true })
      dispatch('base/onProcess', { key: 'isRunning', value: true }, { root: true })

      await axios.post('/logout', {}).then(({ data }) => {
        console.log('response: onLogout data::', data)

        dispatch('base/onProcess', { key: 'isSuccess', value: true }, { root: true })
        setTimeout(() => {
          dispatch('base/onProcess', { key: 'isRunning', value: false }, { root: true })

          let drawer = {
            current: null,
            isVisible: false
          }

          dispatch('base/onProcess', { key: 'isSuccess', value: false }, { root: true })
          dispatch('base/onDrawer', drawer, { root: true })

          Cookies.remove('token')
          commit('setUser', null)
          commit('setIsLogged', false)

          console.log('Logged out now >>>> : onLogout data::', state.user)

          setTimeout(() => {
            dispatch('base/onProcess', { key: 'isSuccess', value: false }, { root: true })
            // dispatch('onRoute', state.redirectTo, {root: true});
          }, 600)
        }, 900)
      })
    } catch (e) {
    }

    Cookies.remove('token')
    commit('setUser', null)
    commit('setIsLogged', false)
  },
  async onInit ({ commit }) {
    // check if logged in or not
  },
  async onRedirect ({ commit }, payload) {
    commit('setRedirectTo', payload)
  },
  async onOauthUrl (ctx, { provider }) {
    const { data } = await axios.post(`/oauth/${provider}`)
    return data.url
  },
  async onProcess ({ commit, dispatch }, payload) {
    commit('setProcess', payload)
  },
  async onForm ({ dispatch, commit, state }, payload) {
    let form = payload.form
    let fields = payload.fields

    console.log('response: onPost state.user::', state.user)
    console.log('response: onPost fields::', fields)

    let mapFields = {}
    fields.forEach(function (field) {
      mapFields[field] = form.createFormField({
        value: state.user[field],
      })
    })

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
