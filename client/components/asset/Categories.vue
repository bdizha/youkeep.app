<template>
  <a-row :gutter="[24,24]" class="r-store-categories" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-store-category v-for="(category, index) in storeCategories"
                        :key="index + 1"
                        :category="category"
                        :columns="columns"
      >
      </r-store-category>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-categories',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 4 }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    storeCategories: 'base/storeCategories',
    hasStoreCategories: 'base/hasStoreCategories'
  }),
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
