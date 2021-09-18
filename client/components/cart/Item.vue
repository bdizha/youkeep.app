<template>
  <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 12 }"
           :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
    >
      <nuxt-link :to="item.product.route"
                 style="display: block; width: 100%;"
      >
        <r-product-photo :product="item.product" :size="138">
        </r-product-photo>
      </nuxt-link>
    </a-col>
    <a-col :lg="{ span: 12 }"
           :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
    >
      <a-row :gutter="[12,6]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }"
               :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
          <h3 class="r-product-text-cart">
            {{ item.product.name }}
          </h3>
          <a-row align="middle" justify="start" type="flex">
            <a-col v-for="(variant, index) in item.variants"
                   v-if="variant.name" :key="index"
                   :lg="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <span class="r-text-s">
                <b>{{ variant.product_type.label }}:</b>
                <span>{{ variant.name }}</span>
              </span>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }"
               :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
                                    <span class="r-product-price">
                                      {{ price(item) }}
                                    </span>
        </a-col>
        <a-col :lg="{ span: 24 }"
               :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
          <r-product-actions :item-key="item.key" :product="item.product" size="large"></r-product-actions>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }"
           :sm="{ span: 24 }" :xs="{ span: 24 }"
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
