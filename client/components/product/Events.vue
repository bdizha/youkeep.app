<template>
  <a-card class="r-bg-dark">
    <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-collapse default-active-key="0" expandIconPosition="right">
          <a-collapse-panel header="Asset activity">
            --- PUT EVENTS HERE
          </a-collapse-panel>
        </a-collapse>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>
export default {
  name: 'r-product-events',
  props: {
    product: {
      type: Object,
      required: true,
      default: () => {
      }
    }
  },
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
