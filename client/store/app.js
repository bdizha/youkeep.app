import axios from 'axios'
import Cookies from 'js-cookie'

// state
export const state = () => ({
  accept: "*.doc,*.pdf,*.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document",
  user: {},
  isLoggedIn: false,
  isSpinning: false,
  drawer: {
    current: null,
    isVisible: false,
    message: null
  },
  isDark: false,
  isRaised: false,
  hasFooter: true,
  hasDownload: true,
  hasSubscribe: true,
  hasStoreTray: false,
  modal: {
    current: null,
    isVisible: false,
    message: null,
    product: null,
    address: null,
  },
  search: {
    isSearching: false,
    term: null,
    suggestions: []
  },
})

// getters
export const getters = {
  accept: state => state.accept,
  user: state => state.user,
  isLoggedIn: state => state.isLoggedIn,
  isSpinning: state => state.isSpinning,
  drawer: state => state.drawer,
  isDark: state => state.isDark,
  isRaised: state => state.isRaised,
  hasFooter: state => state.hasFooter,
  hasDownload: state => state.hasDownload,
  hasSubscribe: state => state.hasSubscribe,
  hasStoreTray: state => state.hasStoreTray,
  modal: state => state.modal
}

// mutations
export const mutations = {
  setModal(state, modal) {
    state.modal = modal;
    state.isSpinning = false;
    state.isDark = false;
    state.isRaised = false;
    console.trace();
  },
  setSpin(state, isSpinning) {
    state.isSpinning = isSpinning;
  },
  setDownload(state, hasDownload) {
    state.hasDownload = hasDownload;
  },
  setSubscribe(state, hasSubscribe) {
    state.hasSubscribe = hasSubscribe;
  },
  setDrawer(state, drawer) {
    state.drawer = drawer;
  },
  setDark(state, isDark) {
    state.isDark = isDark;
  },
  setRaise(state, isRaised) {
    state.isRaised = isRaised;
  },
  setFooter(state, hasFooter) {
    state.hasFooter = hasFooter;
  },
  setUser(state, user) {
    state.user = user;
  },
  setStoreTray(state, hasStoreTray) {
    state.hasStoreTray = hasStoreTray;
  },
}

// actions
export const actions = {
  onModal({commit}, payload) {
    commit('setModal', payload)
  },
  onSpin({commit}, payload) {
    commit('setSpin', payload)
  },
  onDownload({commit}, payload) {
    commit('setDownload', payload)
  },
  onSubscribe({commit}, payload) {
    commit('setSubscribe', payload)
  },
  onDrawer({commit}, payload) {
    commit('setDrawer', payload)
  },
  onDark({commit}, payload) {
    commit('setDark', payload)
  },
  onRaise({commit}, payload) {
    commit('setRaise', payload)
  },
  onFooter({commit}, payload) {
    commit('setFooter', payload)
  },
  onSearch({commit}, payload) {
    commit('setSearch', payload)
  },
  onUser({commit}, payload) {
    commit('setUser', payload)
  },
  onStoreTray({commit}, payload) {
    commit('setStoreTray', payload);

    // if (this.hasStoreTray) {
    //   $('body').addClass('r-hide-body');
    // } else {
    //   $('body').removeClass('r-hide-body');
    // }
  },
}
