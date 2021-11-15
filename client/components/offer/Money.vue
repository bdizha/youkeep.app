<template>
  <a-card class="r-p-0 r-bg-white">
    <a-row class="r-store-meta r-store-meta__66"
           align="middle" justify="start" type="flex"
    >
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <nuxt-link :to="product.route" style="background-color: #FFFFFF">
          <a-card class="r-bg-cover r-p-0 r-bg-white" :style="getPhotoCoverStyle(7)" :class="getCoverClass(12)"
          >
            <a-row class="r-store-meta r-store-meta__66"
                   align="middle" justify="start" type="flex"
            >
              <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row class="r-store-meta r-store-meta__66"
                       align="middle" justify="start" type="flex"
                >
                  <a-col :lg="{ span: 12 }" :md="{ span: 12}"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-card :style="getPhotoCoverStyle(1)"
                            class="r-bg-cover" :class="getCoverClass(50)"
                    >
                      <r-avatar shape="circle"
                                data-src="/patterns/pattern-tertiary.svg" :size="150"
                                class="r-avatar-block"
                      ></r-avatar>
                    </a-card>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12}"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-card :style="getPhotoCoverStyle(2)"
                            class="r-bg-cover" :class="getCoverClass(50)"
                    >
                      <r-avatar shape="circle"
                                data-src="/patterns/pattern-tertiary.svg" :size="150"
                                class="r-avatar-block"
                      ></r-avatar>
                    </a-card>
                  </a-col>
                  <a-col :lg="{ span: 6 }" :md="{ span: 6}"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-card :style="getPhotoCoverStyle(7)"
                            class="r-bg-cover"
                    >
                      <r-avatar shape="circle"
                                data-src="/patterns/pattern-tertiary.svg" :size="75"
                                class="r-avatar-block"
                      ></r-avatar>
                    </a-card>
                  </a-col>
                  <a-col :lg="{ span: 6 }" :md="{ span: 6}"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-card :style="getPhotoCoverStyle(7)"
                            class="r-bg-cover r-radius-circle"
                    >
                      <r-avatar shape="circle"
                                data-src="/patterns/pattern-tertiary.svg" :size="75"
                                class="r-avatar-block"
                      ></r-avatar>
                    </a-card>
                  </a-col>
                  <a-col :lg="{ span: 6 }" :md="{ span: 6}"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-card :style="getPhotoCoverStyle(7)"
                            class="r-bg-cover r-radius-circle"
                    >
                      <r-avatar shape="circle"
                                data-src="/patterns/pattern-tertiary.svg" :size="75"
                                class="r-avatar-block"
                      ></r-avatar>
                    </a-card>
                  </a-col>
                  <a-col :lg="{ span: 6 }" :md="{ span: 6}"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-card :style="getPhotoCoverStyle(7)"
                            class="r-bg-cover"
                    >
                      <r-avatar shape="circle"
                                data-src="/patterns/pattern-tertiary.svg" :size="75"
                                class="r-avatar-block"
                      ></r-avatar>
                    </a-card>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row class="r-store-meta r-store-meta__66"
                       align="middle" justify="start" type="flex"
                >
                  <a-col :lg="{ span: 12 }" :md="{ span: 12}"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 9}"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                  </a-col>
                  <a-col :lg="{ span: 15 }" :md="{ span: 9}"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                  </a-col>
                  <a-col :lg="{ span: 9 }" :md="{ span: 9}"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
            <div v-if="false" class="r-absolute" :style="getPhotoCoverStyle(0)">

            </div>
          </a-card>
        </nuxt-link>
      </a-col>
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <div class="r-p-24">
          <r-product-foot :product="product" :is-drop="isDrop" :theme="theme"></r-product-foot>
        </div>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  name: 'r-offer-money',
  props: {
    isDrop: { type: Boolean, required: false, default: false },
    isVertical: { type: Boolean, required: false, default: true },
    product: { type: Object, required: false }
  },
  data () {
    return {
      images: [
        '/currencies/KEP.svg',
        '/patterns/pattern-25.svg',
        '/patterns/pattern-16.svg',
        '/patterns/pattern-08.svg',
        '/patterns/pattern-28.svg',
        '/patterns/pattern-23.svg',
        '/patterns/pattern-02.svg',
        '/patterns/pattern-04.svg'
      ],
      theme: 'white'
    }
  },
  computed: {
    ...mapGetters({})
  },
  created () {
    this.onTheme()
  },
  methods: {
    getPhotoCoverStyle (index) {
      return `background-image: url(${this.images[index]});`
    },
    getCoverClass (size) {
      return `r-bg-cover__repeat-${size}`
    },
    getBgClass () {
      let theme = 'dark'
      if (this.isDrop) {
        theme = this.theme + '-light'
      }
      return `r-bg-${theme}`
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
