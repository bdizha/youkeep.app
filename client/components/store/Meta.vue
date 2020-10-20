<template>
  <a-row type="flex" justify="center">
    <a-col class="r-p-12" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <div class="r-store-text">
        {{ store.name }}
      </div>
      <div class="r-store-slogan">
        {{ store.description }}
      </div>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-store-meta',
  components: {},
  props: {
    store: {type: Object, required: true}
  },
  data() {
    return {}
  },
  created() {
    this.payload();
  },
  methods: {
    payload() {
    }
  }
};
</script>
