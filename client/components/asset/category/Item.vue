<template>
  <nuxt-link :to="category.route" class="r-block">
    <a-card class="r-bg-white" :hoverable="true">
      <div :style="{width: '120px'}">
        <a-row class="r-text-center" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <img :style="{width: '120px', height: '120px'}" :src="category.photo_url"/>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <p class="r-text-xs r-text-bold">
              {{ category.name }}
            </p>
          </a-col>
        </a-row>
      </div>
    </a-card>
  </nuxt-link>
</template>
<script>

export default {
  name: 'r-store-category-item',
  props: {
    category: {
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
