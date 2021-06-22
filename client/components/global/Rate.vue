<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col :xs="{ span: 24 }"
           :sm="{ span: 24 }" :lg="{ span: 24 }"
    >
      <a-rate size="small" :default-value="rating"/>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-rate',
  props: {
    rating: { type: Number, required: true, default: 0 }
  },
  data () {
    return {
      hasData: false
    }
  },
  created () {
    this.payload()
  },
  computed: mapGetters({
    processes: 'base/processes'
  }),
  methods: {
    payload () {
    },
  },
}
</script>
