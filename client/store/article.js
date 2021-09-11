// state
import axios from 'axios'

export const state = () => ({
  help: {
    article: {},
    article_category: {},
    article_type: {},
    articles: [],
    article_types: [],
    article_categories: [],
    related_articles: [],
    viewed_articles: [],
    recent_articles: [],
    breadcrumbs: []
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
        const breadcrumbs = data.breadcrumbs
        const article = data.article
        const relatedArticles = data.related_articles
        const viewedArticles = data.viewed_articles

        console.log('onHelpArticle: ', data)

        const help = state.help
        help.article = article
        help.related_articles = relatedArticles
        help.breadcrumbs = breadcrumbs
        help.viewed_articles = viewedArticles

        commit('setHelp', help)
      })
    } catch (e) {
      console.error('onHelpArticle error: ', e)
    }
  },
  async onHelpCategory ({ dispatch, commit, state }, payload) {
    try {
      await axios.post('/help/category', payload).then(({ data }) => {
        const breadcrumbs = data.breadcrumbs
        const articleCategory = data.article_category
        const articleCategories = data.article_categories
        const articles = data.articles

        console.log('onHelpCategory: ', data)

        const help = state.help
        help.breadcrumbs = breadcrumbs
        help.articles = articles
        help.article_category = articleCategory
        help.article_categories = articleCategories

        commit('setHelp', help)
      })
    } catch (e) {
      console.error('onHelpCategory error: ', e)
    }
  },
  async onHelp ({ dispatch, commit, state }, payload) {
    try {
      await axios.post('/help', payload).then(({ data }) => {
        const breadcrumbs = data.breadcrumbs
        const recentArticles = data.recent_articles
        const articleCategories = data.article_categories
        const articleTypes = data.article_types
        console.log('onHelpArticle: ', data)

        const help = state.help
        help.breadcrumbs = breadcrumbs
        help.recent_articles = recentArticles
        help.article_categories = articleCategories
        help.article_types = articleTypes

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
  async onBlogCategory ({ dispatch, commit, state }, payload) {
    try {
      await axios.post('/blog/category', payload).then(({ data }) => {
        const article = data.article
        console.log('onBlogArticle data: ', article)

        const blog = state.blog
        blog.article = article

        commit('setBlog', blog)
      })
    } catch (e) {
      console.error('onBlogCategory error: ', e)
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
