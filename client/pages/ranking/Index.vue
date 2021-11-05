<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-rankings :has-actions="true"></r-rankings>
    </a-col>
  </a-row>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  data () {
    return {
      hasData: true
    }
  },
  computed: mapGetters({}),
  created () {
    this.hasData = true
  },
  methods: {}
}
</script>
