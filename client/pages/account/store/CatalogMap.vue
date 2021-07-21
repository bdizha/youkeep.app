<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="r-margin-vertical-24" :xs="{ span: 24 }"
           :sm="{ span: 24 }" :lg="{ span: 24 }"
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
    return {
    }
  },
  methods: {
  }
}
</script>
