<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,0]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-dark r-pull-h-24 r-border-none r-card-r-128">
            <a-row :gutter="[48,48]" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                  <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h3 class="r-heading-light r-text-uppercase">
                          <span class="r-text-primary">Merchant</span>
                          <span class="r-text-white">Central</span>
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading r-text-white r-text-uppercase">
                          <span class="r-text-primary">Sell </span> More.<br>
                          <span class="r-text-primary">Every </span> Where.
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium">
                          <span class="r-text-white">
                            Unlock your omnichannel opportunity and allow your products to discover new customers:
                          </span>
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <div class="r-checked-item">
                          <a-icon class="r-checked-item-icon" type="check"></a-icon>
                          <span class="r-text-normal">Autonomous merchant tools for growing businesses.</span>
                        </div>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <div class="r-checked-item">
                          <a-icon class="r-checked-item-icon" type="check"></a-icon>
                          <span class="r-text-normal">Curated,and unified network of merchants.</span>
                        </div>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <div class="r-checked-item">
                          <a-icon class="r-checked-item-icon" type="check"></a-icon>
                          <span class="r-text-normal">Customer experience as a service with</span>
                        </div>
                      </a-col>
                      <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                             :sm="{ span: 12 }"
                             :xs="{ span: 24 }"
                      >
                        <a-button class="r-btn-primary"
                                  @click="onModal"
                                  block
                                  size="large"
                                  type="blue"
                        >
                          See Shopple in action
                        </a-button>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </a-col>
              <a-col style="z-index: 455" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <r-avatar data-src="/products/product-07.svg" :size="300" class="r-avatar-block"
                ></r-avatar>
              </a-col>
            </a-row>
            <div class="r-cover-image-half" style="background-image:none;background-color: #FFFFFF"></div>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-seller-metrics></r-seller-metrics>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-merchant-actions></r-merchant-actions>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-seller-steps></r-seller-steps>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-services></r-services>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
          <r-seller-benefits></r-seller-benefits>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-contact-us></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-seller',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
  methods: {
    onRegister (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      this.$store.dispatch('base/onRegister', modal)
    }
  }
}
</script>
