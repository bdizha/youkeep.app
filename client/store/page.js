import axios from 'axios'
import Cookies from 'js-cookie'

// state
export const state = () => ({
    help: {
        sections: []
    },
    careers: {
        departments: []
    },
    error: {}
})

// getters
export const getters = {
    help: state => state.help,
    careers: state => state.careers,
    error: state => state.error
}

// mutations
export const mutations = {
    FETCH_HELP_SUCCESS(state, data) {

        console.log('...', data);

        state.help = data
    },
    FETCH_CAREERS_SUCCESS(state, data) {
        state.careers = data
    },

    FETCH_PAGE_FAILURE(state, data) {
        state.errors = null
    },
}

// actions
export const actions = {
    async fetchHelp({commit}) {
        try {
            const {data} = await axios.get('/help')

            commit('FETCH_HELP_SUCCESS', data)
        } catch (e) {
            commit('FETCH_PAGE_FAILURE', e)
        }
    },

    async fetchCareers({commit}) {
        try {
            const {data} = await axios.get('/career/openings')

            commit('FETCH_CAREERS_SUCCESS', data)
        } catch (e) {
            commit('FETCH_PAGE_FAILURE', e)
        }
    },
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
}
