<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="r-cover-blog"
    >
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <a-layout>
            <a-layout-content class="r-min-height-256 r-layout-column">
              <slot/>
            </a-layout-content>
          </a-layout>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  components: {},
  props: {
    article: { type: Object, required: false, default: null },
  },
  data () {
    return {}
  },
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
