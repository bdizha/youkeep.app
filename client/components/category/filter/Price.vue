<template>
  <a-row class="r-mv-12" :gutter="[12,12]" type="flex" justify="start" align="middle">
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-slider :min="price.min" :max="price.max"
                :included="false"
                :default-value="600"/>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-filter-price',
  props: {},
  data() {
    return {
      price: {
        max: '24000',
        min: '100'
      },
    };
  },
  computed: mapGetters({
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    }
  },
}
</script>
