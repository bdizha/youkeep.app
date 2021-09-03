<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,0]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-primary-light r-pull-h-24 r-border-none r-pt-81">
            <div class="r-mv-48">
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
                            <span class="r-text-secondary">For</span>
                            <span class="r-text-dark">Suppliers</span>
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading">
                            <span class="r-text-secondary">Digitizing</span> end-to-end B2B <span class="r-text-primary">payments</span>.
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-medium">
                            Addtract is the leading product discovery and sourcing platform where retailers and suppliers discover, connect, and grow their business.
                          </p>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            Join the Addtract Supplier Platform and start promoting your categories online today and watch
                            your sales shoot through the roof.
                          </p>
                        </a-col>
                        <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                               :sm="{ span: 12 }"
                               :xs="{ span: 24 }"
                        >
                          <a-button class="r-btn-primary"
                                    @click="onRegister"
                                    block
                                    size="large"
                                    type="blue"
                          >
                            Get started
                          </a-button>
                        </a-col>
                        <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                               :sm="{ span: 12 }"
                               :xs="{ span: 24 }"
                        >
                          <nuxt-link to="/contact-us">
                            <a-button class="r-btn-dark"
                                      block
                                      size="large"
                                      type="blue"
                            >
                              Get started
                            </a-button>
                          </nuxt-link>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <r-avatar data-src="/assets/setup-01.svg" :size="300" class="r-avatar-block"
                  ></r-avatar>
                </a-col>
              </a-row>
            </div>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-metrics></r-metrics>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
            <div class="r-mv-48">
              <a-row :gutter="[48,48]" align="middle" class="r-text-left" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <r-avatar data-src="/assets/rocket-yellow.svg" :size="300"
                            class="r-avatar-block"
                  ></r-avatar>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading-light r-text-uppercase">
                            Transform your business
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading r-text-secondary">
                            Get discovered by the
                            world's leading retailers
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-medium">
                            Built for retail businesses, Addtract offers a clear view into product purchase activity with:
                            automated billing, expensing, and reporting.
                          </p>
                        </a-col>
                        <a-col :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                          <nuxt-link to="/customer/membership">
                            <a-button block
                                      class="r-btn-primary"
                                      size="large"
                                      type="secondary"
                            >
                              Discover More
                            </a-button>
                          </nuxt-link>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </div>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
               class="r-text-center"
        >
          <r-tabs active-key="supplier" theme="white"></r-tabs>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
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
