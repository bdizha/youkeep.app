<template>
  <nuxt-link class="r-text-primary" :to="category.route">
    <a-row class="r-text-center" type="flex" justify="center" align="middle">
      <a-col v-if="hasCard" :span="24">
        <a-card class="r-card-category r-spin-holder" hoverable>
          <a-card-meta>
            <template slot="description">
              <r-category-photos :size="81" :category="category"></r-category-photos>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col v-if="!hasCard" :span="24">
        <r-category-photos :size="75" :category="category"></r-category-photos>
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
    store: 'base/store',
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
