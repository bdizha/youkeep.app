<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }"
           :sm="{ span: 24 }" :xs="{ span: 24 }"
    >
      <a-rate :default-value="rating" size="small"/>
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
