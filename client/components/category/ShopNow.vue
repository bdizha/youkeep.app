<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col v-if="category" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <nuxt-link :to="category.route" class="r-same-height r-text-view-more"
                 @click.native="onCategory(category)"
      >
        <a-button :size="size"
                  block
                  class="r-btn-bordered-secondary"
                  type="secondary"
        >
          See all
          <a-icon type="right"/>
        </a-button>
      </nuxt-link>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-shop-now',
  props: {
    category: { type: Object, required: true, default: null },
    justify: { type: String, required: false, default: 'start' },
    size: { type: String, required: false, default: 'large' },
  },
  data () {
    return {}
  },
  computed: mapGetters({
    store: 'shop/store',
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onCategory (category) {
      this.$store.dispatch('base/onCategory', category.route)
    }
  },
  watch: {},
}
</script>
