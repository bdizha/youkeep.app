import axios from 'axios'

// state
const state = () => ({
  products: [],
  items: [],
  hasProducts: false,
  hasItems: false,
  variant: null,
  hasVariant: null,
  productType: null,
  item: null,
  hasProductType: null,
  hasItem: null,
})

// getters
const getters = {
  products: state => state.products,
  items: state => state.items,
  hasProducts: state => state.hasProducts,
  hasItems: state => state.hasItems,
  variant: state => state.variant,
  hasVariant: state => state.hasVariant,
  productType: state => state.productType,
  item: state => state.item,
  hasProductType: state => state.hasProductType,
  hasItem: state => state.hasItem,
}

// mutations
const mutations = {
  setProducts (state, products) {
    state.products = products
    state.hasProducts = products.data.length > 0
  },
  setItems (state, items) {
    state.items = items
    state.hasItems = items.length > 0
  },
  setVariant (state, variant) {
    state.variant = variant
    state.hasVariant = variant !== null

    console.log('setting variants')
  },
  setProductType (state, productType) {
    state.productType = productType
    state.hasProductType = productType !== null
  },
  setItem (state, item) {

    state.item = item

    let items = state.items.filter((productItem, index) => {
      return productItem.key != item.key
    })

    items.push(item)

    state.hasItem = item != undefined
    state.items = items
  }
}

// actions
const actions = {
  async onProducts ({ dispatch, commit }, payload) {
    dispatch('base/onProcess', { key: 'isProduct', value: true }, { root: true })

    await axios.post('/product/list', payload).then(({ data }) => {
      // console.log('response: onProducts data: ', data);

      commit('setProducts', data)

      dispatch('base/onProcess', { key: 'isProduct', value: false }, { root: true })
    })
  },
  async onVariant ({ dispatch, commit }, payload) {
    commit('setVariant', payload)
  },
  async onProductType ({ dispatch, commit }, payload) {
    commit('setProductType', payload)
  },
  async onItem ({ dispatch, commit }, payload) {
    commit('setItem', payload)
  },
  async onItems ({ dispatch, commit }, payload) {
    commit('setItems', payload)
  },
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
