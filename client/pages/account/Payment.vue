<template>
  <r-account>
    <a-row type="flex" justify="start" align="middle">
      <a-col class="gutter-row" :xs="{ span: 24 }"
             :sm="{ span: 24 }" :lg="{ span: 24 }"
      >
        <r-account-card-list></r-account-card-list>
        <r-account-card-add></r-account-card-add>
      </a-col>
    </a-row>
  </r-account>
</template>
<script>
export default {
  components: {},
  data () {
    return {
      radioStyle: {
        display: 'block',
        lineHeight: '24px',
        marginBottom: '24px'
      },
      hasData: false,
      card: { id: null },
      cards: [],
      modal: {
        current: null,
        isVisible: false,
        category: null,
        address: null,
      }
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
