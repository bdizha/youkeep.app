<template>
  <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 12 }"
           :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
    >
      <nuxt-link :to="item.product.route"
                 style="display: block; width: 100%;"
      >
        <r-product-photo :size="138" :product="item.product">
        </r-product-photo>
      </nuxt-link>
    </a-col>
    <a-col :xs="{ span: 12 }"
           :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
    >
      <a-row :gutter="[12,6]" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }"
        >
          <h3 class="r-product-text-cart">
            {{ item.product.name }}
          </h3>
          <a-row type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }"
                   :sm="{ span: 24 }" :lg="{ span: 24 }"
                   v-for="(variant, index) in item.variants"
                   :key="index"
                   v-if="variant.name"
            >
              <span class="r-text-small">
                <b>{{ variant.product_type.label }}:</b>
                <span>{{ variant.name }}</span>
              </span>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }"
        >
                                    <span class="r-product-price">
                                      {{ price(item) }}
                                    </span>
        </a-col>
        <a-col :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }"
        >
          <r-product-actions :item-key="item.key" :product="item.product" size="large"></r-product-actions>
        </a-col>
      </a-row>
    </a-col>
    <a-col :xs="{ span: 24 }"
           :sm="{ span: 24 }" :lg="{ span: 24 }"
    >
      <div class="r-line"></div>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-cart-item',
  props: {
    item: { type: Object, required: true, default: {} }
  },
  data () {
    return {}
  },
  computed: mapGetters({}),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    price (item) {
      let price = item.variant.price
      return parseInt(price * item.quantity).toFixed(2)
    },
  },
}
</script>
