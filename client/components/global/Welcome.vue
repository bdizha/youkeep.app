<template>
  <a-row :gutter="[24,48]" type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <div class="r-ph-24">
        <r-category-slider></r-category-slider>
      </div>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <div class="r-grey-shadow">
        <r-category-list v-if="hasCategories" :is-flush="true" :columns="6" :limit="12"></r-category-list>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-welcome',
  components: {},
  props: {},
  async fetch () {
    this.payload = {
      type: 2,
      has_store: true,
      category_id: null,
      level: 1,
      limit: process.env.APP_LIMIT,
      store_id: process.env.APP_STORE_ID,
      order_by: 'randomized_at',
      with: ['photos', 'breadcrumbs', 'categories']
    }

    await this.onCategories()
  },
  data () {
    return {
      title: 'It\'s shopping time!',
      payload: {}
    }
  },
  computed: mapGetters({
    processes: 'base/processes',
    hasCategories: 'base/hasCategories'
  }),
  created () {
  },
  mounted () {
  },
  methods: {
    async onCategories () {
      await this.$store.dispatch('base/onCategories', this.payload)
    }
  }
}
</script>
