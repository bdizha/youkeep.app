<template>
  <a-row :gutter="[24, 24]" align="middle" justify="start" type="flex">
    <a-col v-if="canContinue || hasActions" :lg="{ span: isShowing ? 9 : 24 }"
           :md="{ span: isShowing ? 9 : 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row align="middle" justify="start" type="flex">
        <a-col v-if="hasItem()">
          <a-button :class="{'r-btn-bordered-secondary': canContinue}"
                    :disabled="!canContinue && !hasActions"
                    :size="size"
                    block
                    type="secondary"
                    @click="onMinus"
          >
            <a-icon class="r-icon-empty" type="minus"/>
          </a-button>
        </a-col>
        <a-col v-if="hasItem()" flex="auto">
          <div class="r-text-center r-action-height">
            <div :class="{'r-cart__active': productItem.quantity > 0}" class="r-cart">
              <div class="r-cart-icon"></div>
              <span class="r-cart-count">{{ productItem.quantity }}</span>
            </div>
          </div>
        </a-col>
        <a-col>
          <a-button :class="{'r-btn-dark': canContinue, 'r-btn-dark': true}"
                    :disabled="!canContinue && !hasActions"
                    :size="size"
                    block
                    type="secondary"
                    @click="onPlus"
          >
            <a-icon class="r-icon-empty" type="plus"/>
          </a-button>
        </a-col>
      </a-row>
    </a-col>
    <a-col v-if="isShowing" :lg="{ span: 15 }" :md="{ span: 15 }" :sm="{ span: 12 }" :xs="{ span: 24 }">
      <a-row>
        <a-col :span="24">
          <a-button :disabled="!canContinue"
                    :size="size"
                    block
                    :class="{'r-btn-secondary': canContinue}"
                    type="secondary"
                    @click="onClose"
          >
            <a-icon type="business"/>
            Add to cart
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
    isShowing: { type: Boolean, required: false, default: false },
    hasActions: { type: Boolean, required: false, default: true },
    product: { type: Object, required: false, default: null },
    item: { type: Object, required: false, default: null },
    itemKey: { type: Number, required: false, default: null },
    size: { type: String, required: false, default: 'small' }
  },
  data () {
    return {
      quantity: 0,
      modal: {
        isVisible: false,
        isClosable: false,
        current: 'product'
      },
      canContinue: false
    }
  },
  created () {
    this.payload()
  },
  computed: {
    ...mapState({
      productItem (state) {
        const productItem = state.product.items.find(item => item.key === this.itemKey)

        if (productItem === undefined) {
          return this.item
        }
        return productItem
      }
    }),
    ...mapGetters({
      store: 'base/store',
      cart: 'cart/cart',
      items: 'product/items'
    })
  },
  methods: {
    hasItem () {
      return this.quantity > 0
    },
    payload () {
      if (this.isShowing) {
        this.quantity = this.productItem.quantity
      }
    },
    async onPlus () {
      if (this.isValid()) {
        this.quantity = this.productItem.quantity

        console.log('onPlus quantity >>>>>', this.quantity)
        this.quantity++
        console.log('quantity >>>>>', this.quantity)

        await this.onItem()
      }
    },
    async onMinus () {
      if (this.isValid()) {
        this.quantity = this.productItem.quantity

        if (this.quantity > 0) {
          this.quantity--
        }
        await this.onItem()
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
      if (this.isValid()) {
        this.modal.isVisible = false
        this.$store.dispatch('base/onModal', this.modal)
      }
    },
    isValid () {
      const requiredItem = this.product.options.find((option) => {
        if (option.required_min > 0 && !this.productItem.options.includes(option.id)) {
          return true
        }
      })

      console.log('isValid requiredItem >>>> ', requiredItem)

      this.canContinue = (requiredItem === undefined)
      return this.canContinue
    }
  }
}
</script>
