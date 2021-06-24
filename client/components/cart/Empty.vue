<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-empty image="/images/icon_default.png"
               :image-style="imageStyle"
      >
        <h4 slot="description" class="r-heading-light r-text-primary">
          Your shopping cart is
          empty.
        </h4>
        <a-row type="flex" justify="center" align="middle">
          <a-col type="flex" :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 24 }"
                 :lg="{ span: 24 }"
          >
            <r-store-shop-now size="large"></r-store-shop-now>
          </a-col>
        </a-row>
      </a-empty>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-cart-empty',
  props: {},
  data () {
    return {
      imageStyle: {
        height: '200px',
        width: '200px',
        borderRadius: '100%',
        overflow: 'hidden',
        margin: '48px auto'
      }
    }
  },
  computed: mapGetters({}),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
  },
}
</script>
