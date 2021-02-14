import axios from 'axios'

// state
const state = () => ({
  products: [],
  hasProducts: false,
  variant: null,
  hasVariant: null,
  productType: null,
  hasProductType: null,
})

// getters
const getters = {
  products: state => state.products,
  hasProducts: state => state.hasProducts,
  variant: state => state.variant,
  hasVariant: state => state.hasVariant,
  productType: state => state.productType,
  hasProductType: state => state.hasProductType,
}

// mutations
const mutations = {
  setProducts (state, products) {
    state.products = products
    state.hasProducts = products.data.length > 0
  },
  setVariant (state, variant) {
    state.variant = variant
    state.hasVariant = variant !== null

    console.log('setting variants')
  },
  setProductType (state, productType) {
    state.productType = productType
    state.hasProductType = productType !== null
  }
}

// actions
const actions = {
  async onProducts ({ dispatch, commit }, payload) {
    dispatch('base/onProcess', { key: 'isProduct', value: true }, { root: true })

    await axios.post('/product/list', payload).then(({ data }) => {
      // console.log('response: onProducts data: ', data);

      commit('setProducts', data)

      setTimeout(() => {
        dispatch('base/onProcess', { key: 'isProduct', value: false }, { root: true })
      }, 600)
    })
  },
  async onVariant ({ dispatch, commit }, payload) {
    commit('setVariant', payload)
  },
  async onProductType ({ dispatch, commit }, payload) {
    commit('setProductType', payload)
  },
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
