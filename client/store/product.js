import axios from 'axios'

// state
const state = () => ({
  products: [],
  items: [],
  total: [],
  choices: [],
  options: [],
  parentOptions: [],
  hasOptions: false,
  isVisible: true,
  instructions: null,
  payload: {
    limit: 24,
    category_id: null,
    sort: 0,
    page: 1,
    filters: [],
    category_ids: [],
    price_min: 0,
    price_max: null
  },
  hasProducts: false,
  hasItems: false,
  option: null,
  hasOption: false,
  productType: null,
  item: {
    hasProduct: true,
    option: null,
    total: null,
    product: null,
    variant: null,
    options: [],
    optionIds: [],
    quantity: 0,
    key: null
  },
  hasProductType: null,
  hasItem: null
})

// getters
const getters = {
  choices: state => state.choices,
  products: state => state.products,
  items: state => state.items,
  options: state => state.options,
  parentOptions: state => state.parentOptions,
  hasParentOptions: state => state.parentOptions.length > 0,
  hasOptions: state => state.options.length > 0,
  isVisible: state => state.isVisible,
  instructions: state => state.instructions,
  payload: state => state.payload,
  hasProducts: state => state.hasProducts,
  hasItems: state => state.hasItems,
  option: state => state.option,
  hasOption: state => state.hasOption,
  productType: state => state.productType,
  item: state => state.item,
  hasProductType: state => state.hasProductType,
  hasItem: state => state.hasItem
}

// mutations
const mutations = {
  setChoices (state, choices) {
    state.choices = choices
  },
  setIsVisible (state, isVisible) {
    state.isVisible = isVisible
  },
  setProducts (state, products) {
    state.products = products
    state.hasProducts = products.data.length > 0
  },
  setPayload (state, payload) {
    state.payload = payload
    console.log('setPayload', payload)
  },
  setItems (state, items) {
    state.items = items
    state.hasItems = items.length > 0
  },
  setOptions (state, options) {
    state.isVisible = false
    state.options = options
    state.isVisible = true
  },
  setParentOptions (state, parentOptions) {
    state.parentOptions = parentOptions
  },
  setInstructions (state, instructions) {
    state.instructions = instructions
  },
  setOption (state, option) {
    state.option = option
    state.hasOption = option !== null

    console.log('setOption', option)
  },
  setProductType (state, productType) {
    state.productType = productType
    state.hasProductType = productType !== null
  },
  setItem (state, item) {
    state.item = item

    const items = state.items.filter((productItem, index) => {
      return productItem.key !== item.key
    })

    items.push(item)

    state.hasItem = item !== undefined
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
  async onOptions ({ dispatch, commit }, payload) {
    commit('setOptions', payload)
  },
  async onPayload ({ dispatch, commit }, payload) {
    commit('setPayload', payload)
  },
  async onItem ({ dispatch, commit }, payload) {
    commit('setOption', payload)
  },
  async onProductType ({ dispatch, commit }, payload) {
    commit('setProductType', payload)
  },
  async onBack ({ dispatch, commit }, payload) {
    commit('setOption', payload)
  },
  async onOption ({ dispatch, commit, state }, { productItem, option, options, choices, isChecked }) {
    console.log('onOption productItem', productItem)

    // console.trace()
    productItem = JSON.parse(JSON.stringify(productItem))

    console.log('onOption productItem', productItem)
    console.log('onOption option', option)
    console.log('onOption options', options)
    console.log('onOption choices', choices)

    productItem.options = productItem.options.filter((item) => {
      if ((option.is_choice && item.id !== option.id) ||
        (item.product_variant_id !== option.product_variant_id && !option.is_choice)) {
        return true
      }
    })

    commit('setChoices', choices)

    // set the current option
    if (option !== null) {
      productItem.hasProduct = !(option.options.length > 0)

      const parentOptions = state.parentOptions.filter((item) => {
        if (item.id !== option.product_variant_id) {
          return true
        }
      })
      productItem.option = option

      if (isChecked) {
        productItem.optionIds.push(option.id)
        productItem.options.push(option)
      }

      if (option.options.length > 0) {
        parentOptions.push({
          id: option.product_variant_id,
          options: state.options,
          option: state.option
        })
        commit('setOption', option)

        commit('setOptions', option.options)
      }

      console.log('onOption parentOptions', parentOptions)
      commit('setParentOptions', parentOptions)
    } else {
      commit('setOption', option)
    }
    commit('setIsVisible', true)

    options = state.options

    options.forEach((item, index) => {
      console.log('item, index', item, index)

      options[index].selected = item.is_choice ? [] : {}

      choices.forEach((choice) => {
        if (choice.id === item.id) {
          options[index].selected = choice.selected
        }
      })
    })

    commit('setOptions', options)

    console.log('options >>>>>>>>>>> ', options)

    console.log('onOption choices', state.choices)

    commit('setItem', productItem)
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
