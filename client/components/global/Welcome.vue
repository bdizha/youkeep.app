<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <a-row class="r-mb-48" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <r-category-slider></r-category-slider>
          <r-steps></r-steps>
        </a-col>
      </a-row>
      <div class="r-grey-shadow">
        <r-category-list :columns="6" :limit="6"></r-category-list>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-welcome',
  components: {},
  props: {},
  async fetch() {
    let payload = {
      type: 2,
      category_id: null,
      limit: process.env.APP_LIMIT,
      order_by: 'randomized_at',
      with: ['photos', 'breadcrumbs']
    };

    await this.$store.dispatch('shop/onCategories', payload);
  },
  data() {
    return {
      title: "It's shopping time!",
      hasData: false
    }
  },
  computed: mapGetters({
    processes: 'base/processes'
  }),
  created() {
  },
  mounted() {
    this.hasData = true;
  },
  methods: {
    async payload() {
    }
  }
};
</script>
