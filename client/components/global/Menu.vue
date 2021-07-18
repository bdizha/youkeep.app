<template>
  <a-row justify="start" type="flex">
    <a-col :xs="{ span: 24 }">
      <r-auth-actions></r-auth-actions>
    </a-col>
    <a-col :xs="{ span: 24 }">
      <r-store-menu :is-home="true" :is-store="true"></r-store-menu>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-menu',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({}),
  created () {
    this.payload()
  },
  methods: {
    async payload () {
    }
  }
}
</script>
