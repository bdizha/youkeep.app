<template>
  <a-row class="r-catalog" type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-category-slider :columns="columns"></r-category-slider>
      <r-category-empty></r-category-empty>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-catalog',
  components: {},
  props: {
    columns: {type: Number, required: false, default: 1},
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
