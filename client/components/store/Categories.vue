<template>
  <a-row type="flex" justify="start" :gutter="0">
    <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-store-category v-for="(category, index) in categories"
                        :key="index + 1"
                        :columns="columns"
                        :category="category">
      </r-store-category>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-categories',
  components: {},
  props: {
    columns: {type: Number, required: false, default: 6}
  },
  data() {
    return {}
  },
  computed: mapGetters({
    categories: 'base/categories'
  }),
  mounted() {
    this.payload();
  },
  methods: {
    payload() {
    }
  }
};
</script>
