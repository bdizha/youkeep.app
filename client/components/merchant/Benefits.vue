<template>
  <a-card class="r-bg-white">
    <a-card-meta>
      <template slot="description">
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <h4 class="r-heading-light r-text-uppercase r-text-secondary">
              Benefits for Merchants
            </h4>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <h2 class="r-heading">
              <span class="r-text-secondary">Customer</span>
              <span>service is our game:</span>
            </h2>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <p class="r-text-medium">Plus, Spazamall offers a host of seller tools
              and resources to enhance your fun and profits.
            </p>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <p class="r-text-normal">
              Spazamall enables sellers to satisfy their customers with ease and control at a minimum pay-as-you earn model.
            </p>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"

          >
            <p v-for="(item, index) in benefits"
               :key="index"
               class="r-checked-item"
            >
              <a-icon class="r-checked-item-icon" type="check"/>
              <span class="r-checked-item-text">
                        {{ item }}
                      </span>
            </p>
          </a-col>
        </a-row>
      </template>
    </a-card-meta>
  </a-card>
</template>
<script>
export default {
  name: 'r-merchant-benefits',
  props: {},
  data () {
    return {
      benefits: [
        'Enable more buying customers and increase recurring orders with Spazamall.',
        'Maximize in-store impact with Spazamall signage and online training for retail associates.',
        'We’ll ship you an activation kit to promote Spazamall online.',
        'No obligations and risk with partnering with Spazamall.'
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
