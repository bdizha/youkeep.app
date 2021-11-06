<template>
  <a-row :gutter="[24, 24]" align="middle" justify="start" type="flex">
    <a-col v-if="!hasOption">
      <a-row :gutter="[12, 12]" align="middle" justify="start" type="flex">
        <a-col class="r-cart-actions" v-if="hasActions">
          <a-button class="r-btn-dark"
                    size="default"
                    block
                    type="secondary"
                    @click="onMinus"
          >
            <a-icon class="r-icon-empty" type="minus"/>
          </a-button>
        </a-col>
        <a-col v-if="hasActions" flex="auto">
          <div class="r-text-center r-action-height">
            <div :class="{'r-cart__active': productItem.quantity > 0}" class="r-cart">
              <div class="r-cart-icon"></div>
              <span class="r-cart-count">{{ productItem.quantity }}</span>
            </div>
          </div>
        </a-col>
        <a-col class="r-cart-actions">
          <a-button class="r-btn-dark"
                    size="default"
                    block
                    type="secondary"
                    @click="onPlus"
          >
            <a-icon class="r-icon-empty" type="plus"/>
          </a-button>
        </a-col>
      </a-row>
    </a-col>
    <a-col flex="auto" v-if="!hasOption && isShowing">
      <a-row :gutter="[12, 12]" align="middle" justify="start" type="flex">
        <a-col :span="24">
          <a-button :disabled="!isValid"
                    :size="size"
                    block
                    :class="{'r-btn-secondary': isValid}"
                    type="secondary"
                    @click="onClose"
          >
            <a-row :gutter="[12, 12]" align="middle" justify="start" type="flex">
              <a-col flex="auto">
                <h3 class="r-cart-btn-text">
                  Add {{ quantity }} to cart
                </h3>
              </a-col>
              <a-col>
                <h4 class="r-cart-btn-total">
                  {{ 'R' + total.toFixed(2) }}
                </h4>
              </a-col>
            </a-row>
          </a-button>
        </a-col>
      </a-row>
    </a-col>
    <a-col v-if="isShowing && hasOption" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row>
        <a-col :span="24">
          <a-button :disabled="isRequired(option)"
                    :size="size"
                    block
                    :class="{'r-btn-secondary': !isRequired(option)}"
                    type="secondary"
                    @click="onClose"
          >
            <a-row>
              <a-col :span="6">
              </a-col>
              <a-col class="r-text-center" :span="12">
                <h3 class="r-cart-btn-text">
                  Save
                </h3>
              </a-col>
              <a-col :span="6">
                <h4 class="r-cart-btn-total">
                  {{ 'R' + total.toFixed(2) }}
                </h4>
              </a-col>
            </a-row>
          </a-button>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters, mapState } from 'vuex'

export default {
  name: 'r-product-actions',
  props: {
    hasActions: { type: Boolean, required: false, default: false },
    isShowing: { type: Boolean, required: false, default: false },
    product: { type: Object, required: false, default: null },
    item: { type: Object, required: false, default: null },
    itemKey: { type: Number, required: false, default: null },
    size: { type: String, required: false, default: 'small' }
  },
  data () {
    return {
      quantity: 1,
      modal: {
        isVisible: false,
        isClosable: false,
        current: 'product'
      }
    }
  },
  created () {
    this.payload()
  },
  computed: {
    isValid () {
      if (!this.hasProduct || this.productItem === null) {
        return false
      }

      console.log('isValid this.productItem >>>> ', this.productItem)

      const requiredItems = this.product.options.filter((option) => {
        return !this.isRequired(option)
      })

      console.log('isValid requiredItem >>>> ', requiredItems)

      if (requiredItems.length > 0) {
        return false
      }
      return true
    },
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
    async onPlus () {
      if (this.isShowing) {
        this.quantity = this.productItem.quantity

        console.log('onPlus quantity >>>>>', this.quantity)
        this.quantity++
        console.log('quantity >>>>>', this.quantity)

        if (this.isValid) {
          // await this.onItem()
        }
      }
    },
    async onMinus () {
      this.quantity = this.productItem.quantity

      if (this.quantity > 0) {
        this.quantity--
      }

      if (this.isValid) {
        // await this.onItem()
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
    async onItem () {
      const productItem = JSON.parse(JSON.stringify(this.productItem))
      productItem.quantity = this.quantity

      console.log('onItem productItem.quantity >>>>>', productItem.quantity)

      console.log('onItem productItem >>>> ', productItem)

      const { status } = await this.$store.dispatch('cart/onItem', productItem)

      await this.$store.dispatch('product/onItem', productItem)

      if (status === 1) {
        this.$message.success(productItem.product.name + ' has been added to your business cart.', 6)
      } else if (status === 2) {
        this.$message.success(productItem.product.name + ' has been updated in your business cart.', 6)
      } else if (status === 3) {
        this.$message.success(productItem.product.name + ' has been removed from your business cart.', 6)
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
