<template>
  <a-row :class="{'r-is-empty': false}" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-p-24">
      <r-store-category-header :category="category" justify="end"></r-store-category-header>
      <a-row align="middle" class="r-slider r-product-cards" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-store-slider
            :category="category"
            :columns="columns"
          ></r-store-slider>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-category',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 6 },
    category: { type: Object, required: false, default: () => {} }
  },
  data () {
    return {
      hasData: false
    }
  },
  computed: mapGetters({}),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
