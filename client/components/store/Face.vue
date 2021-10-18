<template>
  <nuxt-link :to="store.route">
    <div class="r-store-face">
      <r-store-photos v-if="false" :store="store"></r-store-photos>
      <a-row :gutter="[12, 12]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-card :style="getPhotoCoverStyle()" class="r-bg-cover r-bg-primary-light">
            <a-card-meta>
              <template slot="description">
                <div class="r-store-avatar">
                  <r-store-rate v-if="false" :store="store"></r-store-rate>
                  <r-store-photo slot="cover" :store="store"></r-store-photo>
                </div>
                <div class="r-store-tag">
                  <span :class="getBgClass()">{{ store.tag }}</span>
                </div>
                <div class="r-store-meta">
                  <a-row align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <h4 class="r-store-name">
                        {{ store.name }}
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-row align="middle" justify="center" type="flex">
                        <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
                          <a-icon type="star"/>
                          <span>{{ store.rating }}</span>
                        </a-col>
                        <a-col class="r-text-right" :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
                          <a-icon type="clock-circle"/>
                          <span>88m</span>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </div>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col v-if="false" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-button
            block
            class="r-btn-primary"
            icon="check-circle"
            size="large"
            type="secondary"
          >
            Follow
          </a-button>
        </a-col>
      </a-row>
    </div>
  </nuxt-link>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-face',
  components: {},
  props: {
    store: {
      type: Object,
      required: true,
      default: () => {
      }
    },
    isPlain: { type: Boolean, required: false, default: false },
    span: { type: Number, required: false, default: 24 }
  },
  data () {
    return {
      themes: [
        'primary',
        'secondary',
        'dark'
      ]
    }
  },
  computed: mapGetters({}),
  mounted () {
  },
  methods: {
    onDrawer () {
    },
    getPhotoCoverStyle () {
      return `background-image: url(${this.store.photo_url});`
    },
    getBgClass () {
      const random = Math.floor(Math.random() * Math.floor(3))

      const theme = this.themes[random]

      return `r-bg-${theme} r-text-white`
    }
  }
}
</script>
