<template>
  <a-row :gutter="[24,24]" align="middle" class="r-mb-24" justify="start" type="flex">
    <a-col :lg="{ span: 20 }" :md="{ span: 20 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <h3 class="r-heading">
        {{ category.name }}
      </h3>
    </a-col>
    <a-col :lg="{ span: 4 }" :md="{ span: 4 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <template v-if="isLast">
        <nuxt-link :to="category.route"
                   class="r-same-height r-text-view-more"
        >
          <a-button :size="size"
                    block
                    class="r-hide-sm r-btn-bordered-secondary"
                    type="secondary"
          >
            See all
            <a-icon type="right"/>
          </a-button>
          <a-avatar class="r-hide-lg" icon="right" shape="square"/>
        </nuxt-link>
      </template>
      <template v-if="!isLast">
        <r-store-sort></r-store-sort>
      </template>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-category-header',
  props: {
    isLast: { type: Boolean, required: false, default: true },
    category: { type: Object, required: false, default: {} },
    justify: { type: String, required: false, default: 'start' },
    size: { type: String, required: false, default: 'large' },
  },
  data () {
    return {}
  },
  computed: mapGetters({
    store: 'base/store',
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  },
  watch: {},
}
</script>

