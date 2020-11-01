<template>
  <a-row class="r-store-categories" type="flex" justify="start" :gutter="0">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-store-category v-for="(category, index) in category.categories"
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
    category: 'base/category'
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
