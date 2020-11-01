<template>
  <a-row :gutter="[24,24]" class="r-mb-24" type="flex" justify="start">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 20 }"
           :lg="{ span: 20 }">
      <h3 class="r-heading">
        {{ category.name }}
      </h3>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 4 }"
           :lg="{ span: 4 }">
      <template v-if="isLast">
        <nuxt-link class="r-same-height r-text-view-more"
                   :to="category.route">
          <a-button class="r-hide-sm r-btn-bordered-secondary"
                    block
                    type="secondary"
                    :size="size">
            View all
            <a-icon type="right"/>
          </a-button>
          <a-avatar class="r-hide-lg" shape="square" icon="right"/>
        </nuxt-link>
      </template>
      <template v-if="!isLast">
        <r-store-sort></r-store-sort>
      </template>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-category-header',
  props: {
    isLast: {type: Boolean, required: false, default: true},
    category: {type: Object, required: false, default: {}},
    justify: {type: String, required: false, default: 'start'},
    size: {type: String, required: false, default: 'default'},
  },
  data() {
    return {};
  },
  computed: mapGetters({
    store: 'shop/store',
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    }
  },
  watch: {},
};
</script>

