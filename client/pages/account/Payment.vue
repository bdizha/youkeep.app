<template>
  <r-account>
    <a-row align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }" class="gutter-row"
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
