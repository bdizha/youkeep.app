<template>
  <a-row class="r-pt-12" type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row class="r-product-actions">
        <a-col class="r-btn--minus r-text-left" :xs="{ span: 7 }" :sm="{ span: 6 }"
               :lg="{ span: 6 }"
        >
          <div class="r-btn-icon" @click="onMinus">
            <a-icon class="r-icon-empty" type="minus"/>
          </div>
        </a-col>
        <a-col :xs="{ span: 10 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
          <div class="r-action-height">
            <div class="r-product-cart" :class="{'r-product-cart__active': quantity > 0}">
              <div class="r-shopping-cart"></div>
              <span class="r-product-cart-count">{{ quantity }}</span>
            </div>
          </div>
        </a-col>
        <a-col class="r-btn--plus r-text-right" :xs="{ span: 7 }" :sm="{ span: 6 }"
               :lg="{ span: 6 }"
        >
          <div class="r-btn-icon" @click="onPlus">
            <a-icon class="r-icon-empty" type="plus"/>
          </div>
        </a-col>
      </a-row>
    </a-col>
    <a-col v-if="false" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row>
        <a-col :span="24">
          <a-button class="r-btn-secondary" @click="onPlus" block type="secondary"
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
import { mapGetters } from 'vuex'

export default {
  name: 'r-product-actions',
  props: {
    isShowing: { type: Boolean, required: false, default: false },
    product: { type: Object, required: false, default: null },
    size: { type: String, required: false, default: 'default' },
  },
  data () {
    return {
      quantity: 0
    }
  },
  created () {
    this.payload()
  },
  computed: mapGetters({
    store: 'base/store',
    cart: 'cart/cart',
    variant: 'product/variant',
    productType: 'product/productType',
  }),
  methods: {
    payload () {
      this.quantity = this.product.quantity
    },
    async onPlus () {
      // console.log('Before adding', this.quantity);
      this.quantity++

      await this.onItem()
    },
    async onMinus () {
      if (this.quantity !== 0) {
        this.quantity--
      }
      await this.onItem()
    },
    async onItem () {

      this.onProductType()

      let modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'product'
      this.$store.dispatch('base/onModal', modal)

      console.log('variant >>>> ', this.variant)
      console.log('product variant >>>> ', this.product.variant)
      console.log('product >>>> ', this.product)
      console.log('productType >>>> ', this.productType)

      let payload = {
        product: this.product,
        variant: this.variant,
        product_type: this.productType,
        quantity: this.quantity
      }
      console.log('variant payload >>>> ', payload)
      const { status } = await this.$store.dispatch('cart/onItem', payload)

      console.log('status >>>>>', status)

      if (status === 1) {
        // this.$message.success('Item added to your bag');
      } else if (status === 2) {
        // this.$message.success('Item updated in your bag');
      } else if (status === 3) {
        // this.$message.success('Item removed from your bag');
      }
    },
    async onProductType () {
      let productType = this.product.types.find((productType, index) => {
        return true
      })

      await this.$store.dispatch('product/onProductType', productType)
    }
  },
}
</script>
