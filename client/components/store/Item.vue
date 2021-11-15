<template>
  <a-card class="r-p-0 r-store-meta r-store-meta__66" :class="getBgClass()">
    <a-row :gutter="[12, 12]"
           align="middle" justify="start" type="flex"
    >
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <r-store-head :has-overlay="false" :size="300" :store="store"></r-store-head>
      </a-col>
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <r-store-head :size="60"
                      :store="store"
        ></r-store-head>
      </a-col>
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <div class="r-p-24">
          <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-store-body :is-featured="isFeatured"
                            :store="store"
              ></r-store-body>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-store-foot :is-featured="isFeatured"
                            :store="store"
                            :is-drop="isDrop"
                            :theme="theme"
              ></r-store-foot>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  name: 'r-store-item',
  props: {
    isFeatured: { type: Boolean, required: false, default: false },
    isDrop: { type: Boolean, required: false, default: false },
    isVertical: { type: Boolean, required: false, default: true },
    store: { type: Object, required: false }
  },
  data () {
    return {
    }
  },
  computed: mapGetters({
    'themes': 'content/themes'
  }),
  created () {
    this.onTheme()
  },
  methods: {
    getPhotoCoverStyle () {
      return `background-image: url(${this.store.photo_url});`
    },
    getBgClass () {
      const random = Math.floor(Math.random() * Math.floor(3))
      const theme = this.themes[random]

      return `r-bg-${theme}-light`
    },
    onTheme () {
      if (this.isDrop) {
        const $this = this
        this.$store.dispatch('content/onTheme').then((theme) => {
          $this.theme = theme
        })
      }
    }
  }
}
</script>
