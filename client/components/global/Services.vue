<template>
  <a-card class="r-bg-primary-light r-pull-h-24 r-border-none-sm">
    <div class="r-mv-48">
      <a-row :gutter="[24,24]" align="top" justify="center" type="flex"
      >
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
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
                  <h4 v-if="!isShow" class="r-heading-light r-text-uppercase r-text-secondary">
                    MARKETPLACE SERVICES
                  </h4>
                  <h4  v-if="isShow" class="r-heading-light r-text-uppercase r-text-secondary">
                    More solutions
                  </h4>
                </a-col>
                <a-col v-if="!isShow" :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h3 class="r-heading">
                    Built for the B2B infrastructure in Africa
                  </h3>
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
              <a-card class="r-bg-white">
                <a-row align="middle" justify="start" type="flex">
                  <a-col v-if="!isCurrent(service)" :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }"
                             :xs="{ span: 24}"
                      >
                        <a-card class="r-bg-primary-light r-p-0 r-inline-block">
                        <nuxt-img width="66" height="66" :src="'/services/primary/' + service.image"></nuxt-img>
                        </a-card>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                             :xs="{ span: 24}"
                      >
                        <h4 class="r-heading">
                          {{ service.title }}
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                             :xs="{ span: 24}"
                      >
                        <p class="r-text-normal">
                          {{ service.summary }}
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <nuxt-link class="r-text-link" :to="'/service/' + service.slug">
                          Learn more
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
    </div>
  </a-card>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-services',
  props: {
    isShow: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
    }
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
    }
  }
}
</script>
