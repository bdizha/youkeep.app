<template>
  <a-row type="flex" justify="start">
    <a-col class="gutter-row r-padding-24" :xs="{ span: 24 }" :sm="{ span: 20 }" :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <nuxt-link :to="category.route">
        <h4 class="r-heading">
          <a-icon type="left"/>
          {{ category.name }}
        </h4>
      </nuxt-link>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-prev',
  props: {},
  data() {
    return {
      fetchBy: {
        id: 1
      }
    }
  },
  computed: mapGetters({
    category: 'shop/category',
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    }
  }
};
</script>
