<template>
  <a-row :gutter="[12,6]" justify="center" type="flex">
    <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <div class="r-store-text r-text-secondary">
        {{ store.name }}
      </div>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <h3 class="r-store-slogan">
        {{ store.description !== 'Coming soon' ? store.description.substr(0, 60) : store.name }}
      </h3>
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
