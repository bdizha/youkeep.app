<template>
  <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 10 }"
           :sm="{ span: 10 }" :md="{ span: 10 }" :lg="{ span: 10 }">
      <a-avatar
        shape="square"
        size="large"
        slot="avatar"
        :src="'/storage/product/' + item.thumbnail">
      </a-avatar>
    </a-col>
    <a-col :xs="{ span: 14 }"
           :sm="{ span: 14 }" :md="{ span: 14 }" :lg="{ span: 14 }">
      <a-row :gutter="12" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
          <h3 class="r-product-text-cart">
            {{ item.name }}
          </h3>
        </a-col>
        <a-col :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
                                    <span class="r-product-price">
                                        {{ 'R' + price(item) }}
                                    </span>
        </a-col>
        <a-col :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
          <r-product-actions :product="item" size="small"></r-product-actions>
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
    item: {type: String, required: true, default: {}}
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
