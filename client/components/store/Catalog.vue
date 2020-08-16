<template>
  <a-row class="r-catalog" type="flex" justify="start">
    <a-col v-if="category" class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: span }">
      <div class="r-store-item-line">
        <a-row type="flex" justify="start">
          <a-col class="gutter-row r-padding-horizontal-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                 :lg="{ span: 24 }">
            <h3 class="r-heading">
              Catalog
            </h3>
          </a-col>
        </a-row>
        <a-row type="flex" justify="start">
          <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                 :lg="{ span: 24 }">
            <r-category-arrows :size="75"></r-category-arrows>
          </a-col>
          <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                 :lg="{ span: 24 }">
            <r-category-slider :columns="1"></r-category-slider>
          </a-col>
        </a-row>
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
    category: {type: Object, required: true, default: {}},
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
