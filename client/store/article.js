// state
import axios from 'axios'

export const state = () => ({
  help: {
    articles: [],
    categories: [],
    article: {},
    article_types: []
  },
  blog: {
    articles: [],
    article: {}
  }
})

// getters
export const getters = {
  help: state => state.help,
  blog: state => state.blog
}

// mutations
const mutations = {
  setHelp (state, help) {
    state.help = help
  },
  setBlog (state, blog) {
    state.blog = blog
  }
}

// actions
const actions = {
  async onHelpArticle ({ dispatch, commit, state }, payload) {
    try {
      await axios.post('/help/article', payload).then(({ data }) => {
        const article = data.article
        console.log('onHelpArticle: ', article)

        const help = state.help
        help.article = article

        commit('setHelp', help)
      })
    } catch (e) {
      console.error('onHelpArticle error: ', e)
    }
  },
  async onHelp ({ dispatch, commit, state }, payload) {
    try {
      await axios.post('/help/articles', payload).then(({ data }) => {
        const help = data
        console.log('onHelp data: ', help)

        commit('setHelp', help)
      })
    } catch (e) {
      console.error('onHelp error: ', e)
    }
  },
  async onBlogArticle ({ dispatch, commit, state }, payload) {
    try {
      await axios.post('/blog/article', payload).then(({ data }) => {
        const article = data.article
        console.log('onBlogArticle data: ', article)

        const blog = state.blog
        blog.article = article

        commit('setBlog', blog)
      })
    } catch (e) {
      console.error('onBlogArticle error: ', e)
    }
  },
  async onBlog ({ dispatch, commit, state }, payload) {
    try {
      await axios.post('/blog/articles', payload).then(({ data }) => {
        const blog = data
        console.log('on onBlog data: ', blog)

        commit('setBlog', blog)
      })
    } catch (e) {
      console.error('onBlog error: ', e)
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
