<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="r-margin-vertical-24"
    >
      <r-account-store-catalog-map></r-account-store-catalog-map>
    </a-col>
  </a-row>
</template>
<script>
export default {
  layout: 'account',
  components: {},
  data () {
    return {}
  },
  methods: {}
}
</script>
