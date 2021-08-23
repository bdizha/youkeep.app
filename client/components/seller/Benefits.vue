<template>
  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-primary-light">
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <h4 class="r-heading-light r-text-uppercase r-text-primary">
              Benefits for Sellers
            </h4>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <h2 class="r-heading">
              <span class="r-text-primary">Customer</span>
              <span>service is our game.</span>
            </h2>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <p class="r-text-medium">Plus, Addtract offers a host of seller tools
              and resources to enhance your fun and profits.
            </p>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <p class="r-text-normal">
              Addtract enables sellers to satisfy their customers with ease and control at a minimum pay-as-you earn
              model.
            </p>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"

          >
            <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
              <a-col v-for="(item, index) in benefits"
                     :key="index"
                     :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <div class="r-checked-item">
                  <a-icon class="r-checked-item-icon" type="check"/>
                  <span class="r-text-normal">
              {{ item }}
            </span>
                </div>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-avatar data-src="/images/content/screen-01-secondary.svg" :size="300" class="r-avatar-block"
      ></r-avatar>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-seller-benefits',
  props: {},
  data () {
    return {
      benefits: [
        'Enable more buying customers and increase recurring orders with Addtract.',
        'Maximize in-store impact with Addtract signage and online training for retail associates.',
        'We’ll ship you an activation kit to promote Addtract online.',
        'No obligations and risk with partnering with Addtract.'
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
