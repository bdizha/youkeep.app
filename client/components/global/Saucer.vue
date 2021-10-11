<template>
  <a-card class="r-bg-secondary-pattern">
    <div class="r-mv-48">
      <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 24 }">
          <r-avatar :data-src="image" :size="300"
                    class="r-avatar-block"
          ></r-avatar>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-saucer',
  props: {
    theme: { type: String, required: false, default: 'primary' },
    image: { type: String, required: false, default: 'service-01.svg' },
    size: { type: Number, required: false, default: 300 }
  },
  data () {
    return {}
  },
  created () {
  },
  methods: {
    getBgClass () {
      return `r-bg-${this.theme}-light`
    }
  }
}
</script>
