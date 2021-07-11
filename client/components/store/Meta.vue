<template>
  <a-row :gutter="[12,6]" type="flex" justify="center">
    <a-col v-if="false" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <div class="r-store-text r-text-secondary">
        {{ store.name }}
      </div>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
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
