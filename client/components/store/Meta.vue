<template>
  <a-row :gutter="[12,6]" type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <div class="r-store-text r-text-secondary">
        {{ store.name }}
      </div>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <div class="r-store-slogan r-text-light">
        {{ store.description.substr(0, 24) }}
      </div>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-store-meta',
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
