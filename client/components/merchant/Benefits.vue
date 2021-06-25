<template>
  <a-card class="r-bg-secondary-light">
    <a-card-meta>
      <template slot="description">
        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 24 }"
                 :lg="{ span: 24 }"
          >
            <h4 class="r-heading-light r-text-uppercase r-text-secondary">
              Benefits for Merchants
            </h4>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24}" :lg="{ span: 24 }">
            <h2 class="r-heading">
              <span class="r-text-secondary">Customer</span>
              <span>service is our game:</span>
            </h2>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 24 }"
                 :lg="{ span: 24 }"

          >
            <a-list :data-source="benefits">
              <a-list-item slot="renderItem" slot-scope="item, index">
                <a-icon type="check"></a-icon>
                <div class="r-list-item-text">
                  {{ item }}
                </div>
              </a-list-item>
            </a-list>
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
        'Enable more buying customers and increase recurring orders with Shopple.',
        'Maximize in-store impact with Shopple signage and online training for retail associates.',
        'We’ll ship you an activation kit to promote Shopple in-store.',
        'No obligations and risk with partnering with Shopple.',
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
