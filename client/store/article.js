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
        console.log('onHelpArticle: ', data)

        const breadcrumbs = data.breadcrumbs
        const article = data.article
        const relatedArticles = data.related_articles
        const viewedArticles = data.viewed_articles

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
        console.log('onHelpCategory: ', data)
        const { breadcrumbs, article_category: articleCategory, article_categories: articleCategories, articles } = data

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
        console.log('onHelpArticle: ', data)

        const recentArticles = data.recent_articles
        const articleCategories = data.article_categories
        const articleTypes = data.article_types

        const help = state.help
        help.breadcrumbs = []
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
        console.log('onBlogArticle data: ', data)

        const article = data.article
        const blog = state.blog
        blog.article = article
        blog.breadcrumbs = article.breadcrumbs

        commit('setBlog', blog)
      })
    } catch (e) {
      console.error('onBlogArticle error: ', e)
    }
  },
  async onBlogCategory ({ dispatch, commit, state }, payload) {
    try {
      await axios.post('/blog/category', payload).then(({ data }) => {
        console.log('onBlogCategory data: ', data)

        const articleCategory = data.article_category
        const articles = data.articles

        const blog = state.blog
        blog.article_category = articleCategory
        blog.breadcrumbs = articleCategory.breadcrumbs
        blog.articles = articles

        commit('setBlog', blog)
      })
    } catch (e) {
      console.error('onBlogCategory error: ', e)
    }
  },
  async onBlog ({ dispatch, commit, state }, payload) {
    try {
      await axios.post('/blog', payload).then(({ data }) => {
        console.log('onBlog data: ', data)
        const articles = data.articles

        const blog = state.blog
        blog.articles = articles
        blog.breadcrumbs = []

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
