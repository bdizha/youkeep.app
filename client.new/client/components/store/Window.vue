<template>
  <a-row :class="{'r-is-empty': false}" align="middle" class="r-mt-24" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-p-24">
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
