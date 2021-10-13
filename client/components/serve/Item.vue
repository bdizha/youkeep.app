<template>
  <nuxt-link :to="serve.route" class="r-block">
    <a-card class="r-bg-white" :hoverable="true">
      <div :style="{width: '120px'}">
        <a-row class="r-text-center" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <img :style="{width: '120px', height: '120px'}" :src="serve.photo_url"/>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <p class="r-text-xs r-text-bold">
              {{ serve.name }}
            </p>
          </a-col>
        </a-row>
      </div>
    </a-card>
  </nuxt-link>
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
  }
}
</script>
