<template>
  <a-row :gutter="0" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="r-p-24 gutter-row"
    >
      <h4 class="r-heading-light">
        {{ store.description }}
      </h4>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-summary',
  components: {},
  props: {
    store: { type: Object, required: false },
    span: { type: Number, required: false, default: 24 }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    store: 'base/store'
  }),
  mounted () {
  },
  methods: {
    onDrawer () {
    }
  }
}
</script>
