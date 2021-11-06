<template>
  <nuxt-link :to="category.route" class="r-text-primary">
    <a-row align="middle" class="r-text-center" justify="center" type="flex">
      <a-col v-if="hasCard" :span="24">
        <a-card class="r-card-category r-spin-holder" hoverable>
          <r-category-photos :category="category" :size="81"></r-category-photos>
        </a-card>
      </a-col>
      <a-col v-if="!hasCard" :span="24">
        <r-category-photos :category="category" :size="75"></r-category-photos>
      </a-col>
    </a-row>
  </nuxt-link>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-bundle',
  components: {},
  props: {
    category: { type: Object, required: false, default: null },
    hasCard: { type: Boolean, required: false, default: true }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    store: 'shop/store',
    processes: 'base/processes',
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
      let $this = this
    },
    onCategory (category) {
      this.$store.dispatch('base/onCategory', category.route)
    },
  }
}
</script>
