<template>
  <a-row :gutter="12" type="flex" justify="start" align="middle">
    <a-col class="gutter-row" :xs="{ span: 8 }"
           :sm="{ span: 10 }" :md="{ span: 12 }" :lg="{ span: 16 }">
      <a-row :gutter="12" class="gutter-row" type="flex" justify="start" align="middle">
        <a-col class="gutter-row" :xs="{ span: 24 }"
               :sm="{ span: 6 }" :md="{ span: 8 }" :lg="{ span: 6 }">
          <div class="gutter-box">
            <a-avatar
              shape="square"
              size="large"
              slot="avatar"
              :src="item.thumbnail">
            </a-avatar>
          </div>
        </a-col>
        <a-col class="r-hide-sm gutter-row r-padding-top-12" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :md="{ span: 16 }" :lg="{ span: 18 }">
          <h3 class="r-product-text-cart">
            {{ item.name }}
          </h3>
        </a-col>
      </a-row>
    </a-col>
    <a-col class="gutter-row" :xs="{ span: 16 }"
           :sm="{ span: 14 }" :md="{ span: 12 }" :lg="{ span: 8 }">
      <a-row :gutter="12" class="gutter-row" type="flex" justify="start" align="middle">
        <a-col class="r-hide-lg gutter-row" :xs="{ span: 24 }"
               :sm="{ span: 16 }" :lg="{ span: 16 }">
          <h3 class="r-product-text-cart">
            {{ item.name }}
          </h3>
        </a-col>
        <a-col class="gutter-row" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
                                    <span class="r-product-price">
                                        {{ 'R' + price(item) }}
                                    </span>
        </a-col>
        <a-col class="gutter-row" :xs="{ span: 24 }"
               :sm="{ span: 24 }" :lg="{ span: 24 }">
          <r-product-actions :product="item" size="small"></r-product-actions>
        </a-col>
      </a-row>
    </a-col>
    <a-col class="gutter-row" :xs="{ span: 24 }"
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
