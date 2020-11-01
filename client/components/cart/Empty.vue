<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :lg="{ span: 24 }">
      <a-empty image="/assets/icon_grey.svg"
               :image-style="imageStyle">
        <h3 slot="description" class="r-heading-light">
          Your shopping cart is
          empty.
        </h3>
        <a-row type="flex" justify="center" align="middle">
          <a-col type="flex" :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 16 }"
                 :lg="{ span: 12 }">
            <r-store-shop-now size="large"></r-store-shop-now>
          </a-col>
        </a-row>
      </a-empty>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-cart-empty',
  props: {},
  data() {
    return {
      imageStyle: {
        height: '200px',
      }
    };
  },
  computed: mapGetters({}),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
  },
}
</script>
