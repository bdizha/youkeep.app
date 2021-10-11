<template>
  <a-button :block="isBlock"
            :class="onClass()"
            :size="size"
            @click="onAction"
            type="secondary"
  >
    {{ title }}
    <a-icon v-if="!hasAction" type="right"></a-icon>
  </a-button>
</template>
<script>
export default {
  name: 'r-button',
  props: {
    size: { type: String, required: false, default: 'default' },
    theme: { type: String, required: false, default: 'primary' },
    title: { type: String, required: false, default: null },
    current: { type: String, required: false, default: 'login' },
    hasAction: { type: Boolean, required: false, default: true },
    isBlock: { type: Boolean, required: false, default: true }
  },
  data () {
    return {
      action: {
        current: this.current,
        isVisible: false,
        isClosable: false,
        message: null,
        redirectTo: null
      }
    }
  },
  methods: {
    onAction () {
      if (this.hasAction) {
        this.$store.dispatch('base/onModal', this.action)
      }
    },
    onClass () {
      return `r-btn-${this.theme}`
    }
  }
}
</script>
