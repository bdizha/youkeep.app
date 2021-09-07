<template>
  <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
    <a-col v-for="(plan, index) in plans"
           :key="index"
           :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24}"
    >
      <a-card :hoverable="true" @click="setCurrentPlan(plan)" :class="getBgClass(plan)">
        <a-card class="r-bg-white">
          <a-row class="r-text-left" :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <h3 class="r-heading" :class="getTextClass(plan)">
                {{ plan.title }}
              </h3>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <p class="r-text-medium r-text-dark">
                {{ plan.heading }}
              </p>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <h4 class="r-heading-light r-text-uppercase" :class="getTextClass(plan)">
                Products
              </h4>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row class="r-text-left" :gutter="[12,12]" align="middle" justify="start" type="flex">
                <a-col v-for="(product, index) in products"
                       :key="index"
                       :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                >
                  <div class="r-checked-item r-text-left">
                    <a-icon class="r-checked-item-icon" type="check"></a-icon>
                    <span class="r-text-normal r-text-dark">{{ product.title }}</span>
                  </div>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <h4 class="r-heading-light r-text-uppercase" :class="getTextClass(plan)">
                Services
              </h4>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row class="r-text-left" :gutter="[12,12]" align="middle" justify="start" type="flex">
                <a-col v-for="(service, index) in services"
                       :key="index"
                       :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                >
                  <div class="r-checked-item r-text-left">
                    <a-icon class="r-checked-item-icon" type="check"></a-icon>
                    <span class="r-text-normal r-text-dark">{{ service.title }}</span>
                  </div>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
            >
              <h4 class="r-heading r-text-dark">
                {{ plan.price }}
                <span class="r-text-light">
                         {{ plan.frequency }}
                       </span>
              </h4>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-button :class="getBtnClass(plan)"
                        @click="setCurrentPlan(plan)"
                        block
                        size="large"
                        type="blue"
              >
                {{ plan.action }}
              </a-button>
            </a-col>
          </a-row>
        </a-card>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-plans',
  props: {
    isShow: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      currentPlan: null
    }
  },
  created () {
    this.currentPlan = this.plans[0]
  },
  computed: mapGetters({
    plans: 'content/plans',
    products: 'content/products',
    services: 'content/services'
  }),
  methods: {
    setCurrentPlan (currentPlan) {
      this.currentPlan = currentPlan
    },
    getBgClass (item) {
      return item === this.currentPlan ? `r-bg-${item.theme}` : `r-bg-${item.theme}-light`
    },
    getBtnClass (item) {
      return item === this.currentPlan ? `r-btn-${item.theme}` : `r-btn-bordered-${item.theme}`
    },
    getTextClass (item) {
      return item === this.currentPlan ? `r-text-${item.theme}` : `r-text-dark`
    }
  }
}
</script>
