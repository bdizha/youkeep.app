<template>
  <a-row class="r-mv-24" type="flex" justify="start" align="middle">
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-slider range
                :tooltipVisible="true"
                :tip-formatter="formatter"
                :min="price.min"
                :max="price.max"
                :included="false"
                :default-value="[100,2000]"
      />
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-filter-price',
  props: {},
  data () {
    return {
      price: {
        max: 2400,
        min: 33
      },
    }
  },
  computed: mapGetters({}),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    formatter (value) {
      return `R${value}`
    }
  },
}
</script>
