<template>
  <a-row type="flex" justify="start" :gutter="0">
    <a-col class="r-padding-24 gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <h4 class="r-heading-light">
        {{ store.description }}
      </h4>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-summary',
  components: {},
  props: {
    store: {type: Object, required: false},
    span: {type: Number, required: false, default: 24}
  },
  data() {
    return {}
  },
  computed: mapGetters({
    store:  'shop/store'
  }),
  mounted() {
  },
  methods: {
    onDrawer() {
    }
  }
};
</script>
