<template>
  <r-account>
    <a-row type="flex" justify="center" align="middle">
      <a-col class="gutter-row" :xs="{ span: 24 }"
             :sm="{ span: 24 }" :lg="{ span: 24 }"
      >
        <r-account-store-list></r-account-store-list>
      </a-col>
    </a-row>
  </r-account>
</template>
<script>
export default {
  components: {},
  data () {
    return {
    }
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
