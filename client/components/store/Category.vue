<template>
  <a-row class="r-mt-24" :class="{'r-is-empty': false}" type="flex" justify="start">
    <a-col class="r-spin-holder" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-header :category="category" :is-showing="true"
                         :store="store"></r-category-header>
      <a-row class="r-slider r-product-cards" type="flex" justify="start">
        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
          <r-store-slider
            :columns="columns"
            :category="category"></r-store-slider>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-category',
  components: {},
  props: {
    columns: {type: Number, required: false, default: 6},
    category: {type: Object, required: false, default: {}}
  },
  data() {
    return {
      hasData: false
    }
  },
  computed: mapGetters({}),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    }
  }
};
</script>
