<template>
  <a-row :class="{'r-is-empty': false}" type="flex" justify="start">
    <a-col class="r-p-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-store-category-header :category="category" justify="end"></r-store-category-header>
      <a-row class="r-slider r-product-cards" type="flex" justify="start">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
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
