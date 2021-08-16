<template>
  <r-modal-template :closable="true"
                    :mask-closable="true"
                    current="timeline"
  >
    <a-row justify="center" type="flex">
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <h3 class="r-heading">
          Your business timeline
        </h3>
      </a-col>
    </a-row>
    <a-row :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]" align="middle"
           class="r-product-cards" justify="start" type="flex"
    >
      <a-col v-for="(product, index) in products" :key="index" :lg="{span: 4}"
             :md="{span: 6}"
             :sm="{span: 12}" :xs="{span: 12}" class="r-p-24"
      >
        <r-product-item :product="product"></r-product-item>
      </a-col>
    </a-row>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  props: {
    name: 'r-product-modal-timeline'
  },
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  computed: mapGetters({
    modal: 'base/modal',
    hasProducts: 'product/hasProducts',
    products: 'product/products',
  }),
  methods: {
    async payload () {
    },
  },
}
</script>
