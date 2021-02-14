import axios from 'axios'
import Cookies from 'js-cookie'

// state
const state = () => ({
  cart: {
    isVisible: false,
    items: [],
    hasItems: [],
    total: 0.00,
    count: 0
  },
  productIds: [],
  variantIds: []
})

// getters
const getters = {
  cart: state => state.cart
}

// mutations
const mutations = {
  setCart (state, cart) {
    console.log(cart)
    console.log('cart items set')

    let items = cart.items
    let subTotal = 0
    let grandTotal = 0
    let serviceRate = 0.024
    let count = 0

    let discountTotal = 0.00
    let tempItems = []

    items.forEach(function (item) {
      let price = item.variant.price
      let discount = item.variant.discount
      if (item.quantity > 0) {
        tempItems.push(item)

        if (discount < price) {
          discountTotal += parseInt(discount * item.quantity)
        }
        subTotal += parseInt(price * item.quantity)
        count++
      }
    })

    items = tempItems
    cart.items = items

    cart.count = count
    let amounts = {}
    cart.summary = []
    amounts.subTotal = {
      key: 1,
      name: 'Sub Total',
      value: 'R' + subTotal.toFixed(2)
    }
    cart.summary.push(amounts.subTotal)

    let serviceFee = subTotal * serviceRate

    if (serviceFee < 15) {
      serviceFee = 15
    }

    amounts.serviceFee = {
      key: 2,
      name: 'Service Fee',
      value: 'R' + serviceFee.toFixed(2)
    }
    cart.summary.push(amounts.serviceFee)

    let deliveryFee = 25.00
    amounts.deliveryFee = {
      key: 3,
      name: 'Delivery Fee',
      value: 'R' + deliveryFee.toFixed(2)
    }
    cart.summary.push(amounts.deliveryFee)

    amounts.discountTotal = {
      key: 4,
      name: 'Discount Total',
      value: 'R' + discountTotal.toFixed(2)
    }
    cart.summary.push(amounts.discountTotal)

    grandTotal =
      subTotal +
      deliveryFee +
      serviceFee
    //     discountTotal;

    grandTotal = subTotal

    amounts.total = {
      key: 5,
      name: 'Total',
      value: 'R' + grandTotal.toFixed(2)
    }
    cart.summary.push(amounts.total)

    cart.amounts = amounts
    cart.total = grandTotal.toFixed(2)
    state.cart = cart
  }
}

// actions
const actions = {
  async onCart ({ commit }, payload) {
    commit('setCart', payload)

    await axios.post('/cart', { cart: payload })
  },
  async onItem ({ dispatch, commit, state }, payload) {

    // console.log(state.cart, 'current cart')

    let productItem = payload
    let quantity = payload.quantity
    let cart = JSON.parse(JSON.stringify(state.cart))
    let items = cart.items

    // console.log(cart, 'current cart after')
    // console.log(productItem, 'current productItem')

    let key = null

    items.filter((item, index) => {
      if (productItem.product.id === item.product.id && (!item.product_type.is_saleable || productItem.product_type.type == 0)) {
        key = index
        return true
      }
    })

    let status = 0

    productItem.quantity = quantity

    let variants = []
    let variant = null

    if (key != null) {
      if (quantity === 0) {
        // deleting
        status = 3
      } else {
        // updating
        status = 2
      }
      variants = items[key].variants
      variant = items[key].variant
    }

    variants = variants.filter((variant, index) => {
      if (productItem.product_type.type !== variant.product_type.type &&
        productItem.variant.id !== variant.id) {
        return true
      }
    })

    if (productItem.product_type.is_saleable) {
      productItem.variant.product_type = productItem.product_type
    } else {
      if (variant == null) {
        let defaultType = productItem.product.defaultVariant

        console.log(defaultVariant, 'defaultType >>>')

        productItem.variant = defaultVariant
      }
    }

    variants.push(productItem.variant)
    productItem.variants = variants

    if (key != null) {
      // updating
      items[key] = productItem
    } else {
      // adding
      status = 1
      items.push(productItem)
    }

    cart.items = items
    cart.isVisible = false
    dispatch('onCart', cart)

    return { status: status }
  },
  onCard ({ commit }, payload) {
    commit('setCard', payload)
  },
  onCards ({ commit }, payload) {
    commit('setCards', payload)
  },
  onPayment ({ commit }, payload) {
    commit('setPayment', payload)
  },
  onPayments ({ commit }, payload) {
    commit('setPayments', payload)
  },
  onCoupon ({ commit }, payload) {
    commit('setCoupon', payload)
  },
  async onInit ({ dispatch, commit, state }, payload) {
    const cart = Cookies.get('cart')
    if (cart) {
      alert('....')
      commit('setCart', JSON.parse(cart))
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
