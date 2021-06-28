import axios from 'axios'
import Cookies from 'js-cookie'

// state
export const state = () => ({
  sliderCategories: [],
  featuredCategories: [],
  mainCategories: [],
  testimonials: [],
  error: {}
})

// getters
export const getters = {
  sliderCategories: state => state.sliderCategories,
  featuredCategories: state => state.featuredCategories,
  mainCategories: state => state.mainCategories,
  testimonials: state => state.testimonials,
  error: state => state.error
}

// mutations
export const mutations = {
  FETCH_HOME_SUCCESS (state, data) {

    console.log('...', data)

    state.sliderCategories = data.slider_categories
    state.featuredCategories = data.featured_categories
    state.mainCategories = data.main_categories
    state.testimonials = data.testimonials

    console.log('mainCategories', state.mainCategories)
    console.log('featuredCategories', state.featuredCategories)
    console.log('sliderCategories', state.sliderCategories)
  },
  FETCH_SLIDER_CATEGORIES_SUCCESS (state, slider) {
    state.sliderCategories = slider.slider_categories
    console.log('sliderCategories', state.sliderCategories)
  },
  FETCH_MAIN_CATEGORIES_SUCCESS (state, main) {
    state.mainCategories = main.main_categories
    console.log('mainCategories', state.mainCategories)
  },
  FETCH_FEATURED_CATEGORIES_SUCCESS (state, featured) {
    state.featuredCategories = featured.featured_categories
    console.log('featuredCategories', state.featuredCategories)
  },

  FETCH_HOME_FAILURE (state, data) {
    state.errors = null
  },
}

// actions
export const actions = {
  async fetchHome ({ commit }) {
    try {
      const { data } = await axios.get('/welcome')

      commit('FETCH_HOME_SUCCESS', data)
    } catch (e) {
      commit('FETCH_HOME_FAILURE', e)
    }
  },
  async fetchMainCategories ({ commit }) {
    try {
      const { data } = await axios.get('/home/main')

      commit('FETCH_MAIN_CATEGORIES_SUCCESS', data)
    } catch (e) {
      commit('FETCH_HOME_FAILURE', e)
    }
  },
  async fetchFeaturedCategories ({ commit }) {
    try {
      const { data } = await axios.get('/home/featured')

      commit('FETCH_FEATURED_CATEGORIES_SUCCESS', data)
    } catch (e) {
      commit('FETCH_HOME_FAILURE', e)
    }
  },
  async fetchSliderCategories ({ commit }) {
    try {
      const { data } = await axios.get('/home/slider')

      commit('FETCH_SLIDER_CATEGORIES_SUCCESS', data)
    } catch (e) {
      commit('FETCH_HOME_FAILURE', e)
    }
  }
}
