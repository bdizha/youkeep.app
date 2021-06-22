<template>
  <a-row :gutter="[12,0]" type="flex" justify="center">
    <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <h3 class="r-header r-text-secondary">
        {{ store.name }}
      </h3>
    </a-col>
    <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
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
