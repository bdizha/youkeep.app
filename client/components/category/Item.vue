<template>
  <a-row :class="{'r-is-empty': false}" type="flex" justify="start" >
    <a-col class="r-spin-holder" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-header :category="category" :is-showing="isShowing" :has-product="hasProduct"
                         :store="store"></r-category-header>
      <a-row class="r-slider r-product-cards" type="flex" justify="start">
        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
          <r-product-slider
            :columns="columns"
            :category="category"></r-product-slider>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-item',
  components: {},
  props: {
    columns: {type: Number, required: false, default: 6},
    isShowing: {type: Boolean, required: false, default: false},
    category: {type: Object, required: false, default: {}},
    hasProduct: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      hasData: false
    }
  },
  computed: mapGetters({
    store: 'shop/store',
    processes: "base/processes",
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
      // do nothing for now
    }
  }
};
</script>
