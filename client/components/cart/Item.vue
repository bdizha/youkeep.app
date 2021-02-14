<template>
  <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 12 }"
           :sm="{ span: 12 }" :md="{ span: 8 }" :lg="{ span: 8 }">
      <nuxt-link :to="item.product.route"
                 style="display: block; width: 100%;">
        <r-product-photo :size="90" :product="item.product">
        </r-product-photo>
      </nuxt-link>
    </a-col>
    <a-col :xs="{ span: 12 }"
           :sm="{ span: 12 }" :md="{ span: 16 }" :lg="{ span: 16 }">
      <a-row :gutter="12" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
          <h3 class="r-product-text-cart">
            {{ item.product.name }}
          </h3>
        </a-col>
        <a-col :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
                                    <span class="r-product-price">
                                      {{ price(item) }}
                                    </span>
        </a-col>
        <a-col :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
          <r-product-actions :product="item.product" size="default"></r-product-actions>
        </a-col>
      </a-row>
    </a-col>
    <a-col :xs="{ span: 24 }"
           :sm="{ span: 24 }" :lg="{ span: 24 }">
      <div class="r-line"></div>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-cart-item',
  props: {
    item: {type: Object, required: true, default: {}}
  },
  data() {
    return {};
  },
  computed: mapGetters({}),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    price(item) {
      let price = item.variant.price;
      return parseInt(price * item.quantity).toFixed(2);
    },
  },
}
</script>
