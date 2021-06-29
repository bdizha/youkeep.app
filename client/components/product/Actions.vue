<template>
  <a-row :gutter="[24, 24]" type="flex" justify="center" align="middle">
    <a-col v-if="isEnabled || hasActions" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :lg="{ span: hasAddToCart ? 12 : 24 }"
    >
      <a-row type="flex" justify="center" align="middle">
        <a-col class="r-text-left" :xs="{ span: 6 }" :sm="{ span: 6 }" :md="{ span: !isShowing ? 6 : 4 }"
               :lg="{ span: !isShowing ? 6 : 4 }"
        >
          <a-button :class="{'r-btn-bordered-secondary': isEnabled}"
                    :disabled="!isEnabled && !hasActions"
                    @click="onMinus"
                    block
                    type="secondary"
                    size="default"
          >
            <a-icon class="r-icon-empty" type="minus"/>
          </a-button>
        </a-col>
        <a-col class="r-text-center" :xs="{ span: 10 }" :sm="{ span: 12 }" :md="{ span: !isShowing ? 16 : 12 }"
               :lg="{ span: !isShowing ? 12 : 16 }"
        >
          <div class="r-text-center r-action-height">
            <div class="r-cart" :class="{'r-cart__active': productItem.quantity > 0}">
              <div class="r-shopping-cart"></div>
              <span class="r-cart-count">{{ productItem.quantity }}</span>
            </div>
          </div>
        </a-col>
        <a-col class="r-text-right" :xs="{ span: 6 }" :sm="{ span: 6 }" :md="{ span: !isShowing ? 6 : 4 }"
               :lg="{ span: !isShowing ? 6 : 4 }"
        >
          <a-button :class="{'r-btn-bordered-primary': isEnabled}"
                    :disabled="!isEnabled && !hasActions"
                    @click="onPlus"
                    block
                    type="secondary"
                    size="default"
          >
            <a-icon class="r-icon-empty" type="plus"/>
          </a-button>
        </a-col>
      </a-row>
    </a-col>
    <a-col v-if="hasAddToCart" :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
      <a-row>
        <a-col :span="24">
          <a-button class="r-btn-secondary"
                    :disabled="!isEnabled"
                    @click="onClose"
                    block
                    type="secondary"
                    :size=size
          >
            <a-icon type="shopping"/>
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
    hasAddToCart: { type: Boolean, required: false, default: false },
    hasActions: { type: Boolean, required: false, default: true },
    product: { type: Object, required: false, default: null },
    size: { type: String, required: false, default: 'default' },
    itemKey: { type: Number, required: false, default: null },
  },
  data () {
    return {
      quantity: 0,
      item: {
        product: this.product,
        productType: null,
        variant: null,
        variants: [],
        productTypes: [],
        variantIds: [],
        quantity: 0,
        key: this.itemKey
      },
      modal: {
        isVisible: false,
        isClosable: false,
        current: 'product'
      },
      isEnabled: false
    }
  },
  created () {
    this.payload()
  },
  computed: {
    ...mapState({
      productItem (state) {
        let productItem = state.product.items.find(item => item.key === this.item.key)

        if (productItem === undefined) {
          return this.item
        }
        return productItem
      }
    }),
    ...mapGetters({
      store: 'base/store',
      cart: 'cart/cart',
      items: 'product/items',
    })
  },
  methods: {
    payload () {
      this.quantity = this.productItem.quantity
    },
    async onPlus () {
      if (this.isValid()) {
        // console.log('Before adding', this.quantity);
        this.quantity = this.productItem.quantity

        console.log('onPlus quantity >>>>>', this.quantity)
        this.quantity++
        console.log('quantity >>>>>', this.quantity)

        await this.onItem()
      }
    },
    onClose () {
      if (this.isValid()) {
        this.modal.isVisible = false
        this.$store.dispatch('base/onModal', this.modal)
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
      let productItem = JSON.parse(JSON.stringify(this.productItem))
      productItem.quantity = this.quantity

      console.log('productItem.quantity >>>>>', productItem.quantity)

      console.log('actions onItem productItem >>>> ', productItem)

      await this.$store.dispatch('product/onItem', productItem)

      const { status } = await this.$store.dispatch('cart/onItem', productItem)

      if (status === 1) {
        // this.$message.success('Item added to your bag');
      } else if (status === 2) {
        // this.$message.success('Item updated in your bag');
      } else if (status === 3) {
        // this.$message.success('Item removed from your bag');
      }
    },
    async onInit () {
      if (!this.item.key) {
        const current = new Date()
        let itemKey = current.getMilliseconds() * this.product.id

        this.item.key = itemKey
        this.item.product = this.product
        this.item.quantity = this.quantity
        this.item.variant = this.product.default_variant
        this.item.variantIds = [this.item.variant.id]
        this.item.productTypes = [this.item.variant.type]
        this.item.variants.push(this.item.variant)
        this.item.productType = null

        await this.$store.dispatch('product/onItem', this.item)
      }
    },
    isValid () {
      this.onInit()

      let productItem = this.cart.items.find(item => item.key === this.productItem.key)

      if (productItem == null) {
        productItem = this.productItem
      }

      let invalidItem = productItem.product.types.find((productType, index) => {
        if (productType.is_required && !productItem.productTypes.includes(productType.type)) {
          return true
        }
      })

      console.log('invalidItem >>>> ', invalidItem)

      if (invalidItem === undefined) {
        this.isEnabled = true
        return true
      }

      if (!this.itemKey) {
        this.modal.isVisible = true
        this.modal.current = 'product'
        this.$store.dispatch('base/onModal', this.modal)
      }
      this.isEnabled = false
      return false
    }
  },
}
</script>
