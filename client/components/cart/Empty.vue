<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-empty :image-style="imageStyle"
               image="/images/icon_default.png"
      >
        <h4 slot="description" class="r-heading-light r-text-primary">
          Your business cart is
          empty.
        </h4>
        <a-row align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
                 type="flex"
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
