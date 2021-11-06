<template>
  <nuxt-link :to="serve.route">
    <a-card class="r-bg-dark r-p-0" :hoverable="true">
      <a-row :gutter="[12,12]" class="r-text-center" align="middle" justify="center" type="flex">
        <a-col>
          <div style="margin-top: 24px; background-image: url(/patterns/art-tertiary.svg)"
               class="r-bg-cover r-radius-circle">
            <div style="width: 90px; height: 90px;">
              <r-avatar shape="circle"
                        :data-src="serve.photo_url" :size="90"
                        class="r-avatar-block"
              ></r-avatar>
            </div>
          </div>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-bold r-text-white">
            {{ serve.name }}
          </p>
        </a-col>
      </a-row>
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
  },
  methods: {
    getPhotoCoverStyle () {
      return `background-image: url(${this.serve.photo_url});`
    }
  }
}
</script>
