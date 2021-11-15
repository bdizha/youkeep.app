<template>
  <a-row :gutter="[24, 24]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-button :size="size"
                block
                class="r-btn-primary"
                type="secondary"
      >
        <a-icon type="shopping" theme="filled"></a-icon>
        Buy now
      </a-button>
    </a-col>
    <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-button :size="size"
                block
                class="r-btn-bordered-secondary"
                type="secondary"
      >
        <a-icon type="thunderbolt" theme="filled"></a-icon>
        Make offer
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters, mapState } from 'vuex'

export default {
  name: 'r-asset-buy',
  props: {
    size: { type: String, required: false, default: 'large' }
  },
  data () {
    return {
      quantity: 1,
      modal: {}
    }
  },
  created () {
  },
  computed: {
    ...mapState({
      total (state) {
        let total = 0.00
        const product = state.product
        console.log('on total product >>>> 111', product)

        if (this.hasProduct) {
          total = parseFloat(product.item.product.price)
          console.log('on total product >>>> 222', product)

          if (product.hasItem) {
            product.item.options.forEach((option) => {
              total += parseFloat(option.price)
              console.log('on total option.price', option.price)
              console.log('on total total', total)
            })
          }
        }

        return parseFloat(total) * this.quantity
      },
      productItem (state) {
        let productItem = null
        if (this.hasProduct) {
          productItem = state.product.items.find(item => item.key === this.itemKey)
        }

        if (productItem === undefined) {
          return this.item
        }
        return productItem
      }
    }),
    ...mapGetters({
      store: 'shop/store',
      cart: 'cart/cart',
      hasProduct: 'base/hasProduct',
      option: 'product/option',
      hasOption: 'product/hasOption',
      items: 'product/items'
    })
  },
  methods: {
    hasAdded () {
      return this.quantity > 0
    },
    payload () {
      if (this.isShowing) {
        this.quantity = this.productItem.quantity + 1
      }
    },
    isRequired (option) {
      console.log('isRequired option >>>>>', option.title + ' <<>> ' + option.id)
      if ((option.required_min > 0 &&
          (this.productItem.optionIds.includes(option.id) ||
            this.productItem.optionIds.includes(option.selected))) ||
        (option.required_min === 0 && option.options.length > 0)) {
        if (option.options.length > 0) {
          const required = option.options.filter((item) => {
            return !this.isRequired(item)
          })
          const isRequired = (required.length > 0)
          console.log('isRequired >>>>>', option.title + ' <<>> 1 ' + ' <<>> ' + option.id + isRequired)

          return isRequired
        } else {
          console.log('isRequired >>>>>', option.title + ' <<>> 11 ' + ' <<>> ' + option.id + true)
          return true
        }
      } else {
        console.log('isRequired >>>>>', option.title + ' <<>> 111 ' + ' <<>> ' + option.id + false)
        return false
      }
    },
    onClose () {
      if (this.isValid) {
        this.modal.isVisible = false
        this.$store.dispatch('base/onModal', this.modal)
      }
    }
  }
}
</script>
