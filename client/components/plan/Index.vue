<template>
  <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
    <a-col v-for="(plan, index) in plans"
           :key="index"
           :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24}"
    >
      <a-card :hoverable="true" class="r-bg-primary-light"
              @click="setCurrentPlan(index)"
              :class="getBgClass(index)"
      >
        <a-card class="r-bg-white">
          <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <h3 class="r-heading" :class="getTextClass(index)">
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
              <a-row class="r-text-left" :gutter="[12,12]" align="middle" justify="start" type="flex">
                <a-col v-for="(feature, index) in plan.features"
                       :key="index"
                       :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                >
                  <div class="r-checked-item r-text-left">
                    <a-icon class="r-checked-item-icon" type="check"></a-icon>
                    <span class="r-text-normal r-text-dark">{{ feature }}</span>
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
              <a-button :class="getBtnClass(index)"
                        @click="setCurrentPlan(index)"
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
      currentPlan: 2
    }
  },
  computed: mapGetters({
    plans: 'content/plans'
  }),
  methods: {
    setCurrentPlan (currentPlan) {
      this.currentPlan = currentPlan
    },
    getBgClass (index) {
      return index === this.currentPlan ? 'r-bg-primary' : 'r-bg-primary-light'
    },
    getTextClass (index) {
      return index === this.currentPlan ? 'r-text-primary' : 'r-text-dark'
    },
    getBtnClass (index) {
      return index === this.currentPlan ? 'r-btn-primary' : 'r-btn-bordered-primary'
    }
  }
}
</script>
