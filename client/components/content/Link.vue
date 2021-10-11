<template>
  <nuxt-link :to="route">
    <r-button :size="size" :theme="theme" :title="title" :has-action="false"></r-button>
  </nuxt-link>
</template>
<script>
export default {
  name: 'r-link',
  props: {
    size: { type: String, required: false, default: 'default' },
    theme: { type: String, required: false, default: 'primary' },
    title: { type: String, required: false, default: null },
    route: { type: String, required: false, default: null }
  },
  data () {
    return {}
  },
  methods: {}
}
</script>
