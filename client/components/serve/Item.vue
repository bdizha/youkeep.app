<template>
  <a-card class="r-bg-dark r-p-0 r-flash-card" :hoverable="true">
    <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
      <a-col flex="60px">
        <a-card class="r-bg-primary-light r-p-0">
          <r-avatar shape="circle"
                    :data-src="serve.photo_url" :size="36"
                    class="r-avatar-block"
          ></r-avatar>
        </a-card>
      </a-col>
      <a-col flex="1 1 0">
        <p class="r-text-sm r-text-bold r-text-white">
          {{ serve.name }}
        </p>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>

export default {
  name: 'r-serve-item',
  props: {
    serve: {
      type: Object,
      required: false,
      default: () => {
      }
    }
  },
  data () {
    return {}
  },
  computed: {},
  created () {
  },
  methods: {
    getPhotoCoverStyle () {
      return `background-image: url(${this.serve.photo_url});`
    }
  }
}
</script>
