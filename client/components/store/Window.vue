<template>
  <a-row class="r-mt-24" :class="{'r-is-empty': false}" type="flex" justify="start" align="middle">
    <a-col class="r-p-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <r-store-face :store="store"></r-store-face>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-window',
  components: {},
  props: {
    columns: { type: Number, required: false, default: 6 },
    category: { type: Object, required: false, default: {} }
  },
  data () {
    return {
      hasData: false
    }
  },
  computed: mapGetters({}),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
