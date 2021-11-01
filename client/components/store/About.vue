<template>
  <a-row :gutter="[12,6]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <p class="r-text-normal" v-html="store.description">
      </p>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-store-about',
  components: {},
  props: {
    store: { type: Object, required: true }
  },
  data () {
    return {}
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
