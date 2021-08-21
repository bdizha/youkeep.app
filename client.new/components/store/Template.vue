<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="r-store-page"
    >
      <r-category-arrows v-if="hasCategories"></r-category-arrows>
      <r-store-arrows v-if="!hasCategories"></r-store-arrows>
      <a-row align="middle" class="r-mt-24" justify="center" type="flex">
        <a-col :lg="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="r-ph-24"
        >
          <a-row :gutter="[24,24]" align="middle" class="r-mb-12" justify="center"
                 type="flex"
          >
            <a-col :lg="{ span: 20 }" :sm="{ span: 20 }" :xs="{ span: 24 }">
              <h3 class="r-heading">
                {{ hasStore ? store.name : '' }}
              </h3>
            </a-col>
            <a-col :lg="{ span: 4 }" :sm="{ span: 4 }" :xs="{ span: 24 }"
                   style="text-align: right"
            >
              <r-store-shop-now v-if="isStore" justify="end"></r-store-shop-now>
              <r-category-filters v-if="!isStore" :category="category" justify="end"></r-category-filters>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
      <slot/>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-template',
  components: {},
  props: {
    isStore: { type: Boolean, required: false, default: true },
  },
  data () {
    return {}
  },
  computed: mapGetters({
    store: 'base/store',
    hasStore: 'base/hasStore',
    category: 'base/category',
    hasNotice: 'base/hasNotice',
    hasCategories: 'base/hasCategories',
    isStore: 'base/isStore'
  }),
  created () {
    this.payload()
  },
  mounted () {
  },
  methods: {
    payload () {
    },
    onCollapse () {
      console.log('onCollapse')
    },
    onBreakpoint () {
      console.log('onCollapse')
    },
  }
}
</script>
