<template>
  <a-row :gutter="[24,24]" align="top" justify="center" type="flex"
  >
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h4 v-if="!isShow" class="r-heading-light r-text-uppercase">
                Youkeep marketplace dsfdaf
              </h4>
              <h4 v-if="isShow" class="r-heading-light r-text-uppercase">
                More solutions
              </h4>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading" v-html="heading"></h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-medium r-text-white">
                    {{ summary }}
                  </p>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col v-for="(service, index) in products"
               :key="index"
               v-if="!isHidden(service)"
               :lg="{ span: isCurrent(service) ? 24 : 8 }" :md="{ span: isCurrent(service) ? 24 : 8 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24}"
        >
          <a-card :class="getBgClass(false)">
            <a-row align="middle" justify="start" type="flex">
              <a-col v-if="!isCurrent(service)" :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[12, 12]" type="flex" align="middle">
                  <a-col>
                    <div class="r-bg-tertiary-light r-p-12 r-border-radius-square">
                      <a-icon class="r-text-primary"
                              :style="{ fontSize: '36px' }"
                              :type="service.icon"
                      ></a-icon>
                    </div>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <h4 class="r-heading" v-html="service.title"></h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <p class="r-text-normal" v-html="service.heading">
                    </p>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <nuxt-link class="r-text-link r-text-tertiary" :to="'/service/' + service.slug">
                      Learn more
                      <a-icon type="right"></a-icon>
                    </nuxt-link>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-services',
  props: {
    isShow: { type: Boolean, required: false, default: false },
    theme: { type: String, required: false, default: 'primary' },
    accent: { type: String, required: false, default: 'primary' },
    heading: { type: String, required: false, default: '<span class="r-text-primary">Order</span> your favourites or discover new NFTs' },
    summary: { type: String, required: false, default: 'We work hard to help our artists feel taken care of and supported throughout the entire process.' }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    products: 'content/products',
    product: 'content/product'
  }),
  methods: {
    onCloseItem () {
    },
    isCurrent (item) {
      return item === this.product
    },
    isHidden (item) {
      if (this.product === null) {
        return false
      }

      return this.product.slug === item.slug
    },
    getBgClass (flip) {
      if (flip) {
        return `r-bg-${this.accent}-light`
      } else {
        return `r-bg-${this.theme}-light`
      }
    }
  }
}
</script>
