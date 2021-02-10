<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <a-row class="r-mb-48" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <r-category-slider v-if="hasCategories"></r-category-slider>
        </a-col>
      </a-row>
      <div class="r-grey-shadow">
        <r-category-list v-if="hasCategories" :is-flush="true" :columns="6" :limit="12"></r-category-list>
      </div>
      <r-steps></r-steps>
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
    this.payload = {
      type: 2,
      has_store: true,
      category_id: null,
      level: 1,
      limit: process.env.APP_LIMIT,
      order_by: 'randomized_at',
      with: ['photos', 'breadcrumbs']
    };

    await this.onCategories();
  },
  data() {
    return {
      title: "It's shopping time!",
      payload: {}
    }
  },
  computed: mapGetters({
    processes: 'base/processes',
    hasCategories: 'base/hasCategories'
  }),
  created() {
  },
  mounted() {
  },
  methods: {
    async onCategories() {
      await this.$store.dispatch('base/onCategories', this.payload);
    }
  }
};
</script>
