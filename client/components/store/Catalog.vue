<template>
  <a-row class="r-catalog" type="flex" justify="start">
    <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: span }">
      <div class="r-store-item-line">
        <a-row type="flex" justify="start">
          <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                 :lg="{ span: 24 }">
            <a-row :gutter="[24,24]" type="flex" justify="start">
              <a-col class="gutter-row" :xs="{ span: 18 }" :sm="{ span: 18 }" :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                <r-category-shop-by justify="end"></r-category-shop-by>
              </a-col>
              <a-col class="gutter-row" :xs="{ span: 18 }" :sm="{ span: 18 }" :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                <r-store-shop-now justify="end"></r-store-shop-now>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </div>
      <div class="r-store-item-line">
        <r-category-slider :columns="1"></r-category-slider>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-catalog',
  components: {},
  props: {
    columns: {type: Number, required: false, default: 6},
    store: {type: Object, required: false},
    span: {type: Number, required: false, default: 24},
  },
  data() {
    return {
      hasData: true,
      isProcessing: true,
      width: 18
    }
  },
  computed: mapGetters({}),
  mounted() {
    this.payload();
  },
  methods: {
    payload() {
    }
  }
};
</script>
