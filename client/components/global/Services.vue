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
                    Addtract Marketplace services
                  </h4>
                  <h4  v-if="isShow" class="r-heading-light r-text-uppercase r-text-secondary">
                    Explore More
                  </h4>
                </a-col>
                <a-col v-if="!isShow" :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h3 class="r-heading">
                    Build the future of B2B infrastructure
                  </h3>
                </a-col>
              </a-row>
            </a-col>
            <a-col v-for="(service, index) in services"
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
                        <nuxt-img width="66" height="66" :src="'/services/light/' + service.image"></nuxt-img>
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
                        <nuxt-link :to="'/service/' + service.slug">
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
    services: 'content/services',
    service: 'content/service'
  }),
  methods: {
    getBgClass (service) {
      if (!this.isCurrent(service)) {
        return 'r-bg-primary-light'
      } else {
        return 'r-bg-secondary-light r-pull-h-24 r-border-none-sm'
      }
    },
    onCloseItem () {
    },
    isCurrent (item) {
      return item === this.service
    },
    isHidden (item) {
      if (this.service === null) {
        return false
      }

      return this.service.slug === item.slug
    }
  }
}
</script>
