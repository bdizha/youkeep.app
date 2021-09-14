<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[0,0]" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
            <div class="r-mv-48">
              <a-row :gutter="[48,48]" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[48,48]" align="middle" justify="end" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading-light r-text-uppercase">
                            Our mission
                          </h4>
                        </a-col>
                        <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div style="width: 176px; height: 176px;display: block; background: #FFFFFF; position:relative; overflow: hidden; border-top-right-radius: 50%;">
                            <div class="r-diamond"></div>
                            <div class="r-diamond" style="left: 96px;"></div>
                            <div class="r-diamond" style="top: 96px;"></div>
                            <div class="diagonal-01"></div>
                            <div class="diagonal-02"></div>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading r-text-dark">
                            To empower <span class="r-text-secondary">farmers</span> of all sizes in
                            Africa.
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-medium r-text-dark">
                            What was missing was a solution designed specifically for local farmers and
                            marketplaces.
                          </p>
                        </a-col>
                        <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            While at PayPal, we witnessed the struggles of B2B merchants unable to complete the
                            transition
                            to the online space, being stuck with offline transaction processing. A fraction of their
                            trade
                            is via credit cards, so retrofitted consumer solutions weren't going to cut it.
                          </p>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            Spazaland's solutions enable owning the entire farming experience, end to end - unifying
                            different
                            farming inputs and access to market, providing a self serve experience, while getting full control.
                          </p>
                        </a-col>
                        <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                               :sm="{ span: 12 }"
                               :xs="{ span: 24 }"
                        >
                          <nuxt-link to="/careers">
                            <a-button class="r-btn-secondary"
                                      block
                                      size="large"
                                      type="blue"
                            >
                              See open positions
                            </a-button>
                          </nuxt-link>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <r-avatar data-src="/assets/asset-05.png" :size="300"
                            class="r-avatar-block"
                  ></r-avatar>
                </a-col>
              </a-row>
            </div>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h4 class="r-heading-light r-text-uppercase">
                Our story
              </h4>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h3 class="r-heading">
                <span class="r-text-secondary">Connecting</span> farmers and the marketplace
              </h3>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-normal">
                What started as a way to help small famers to conveniently sell their products has grown into a leading B2B
                marketplace that connects millions of buyers with farmers of all sizes.
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-metrics></r-metrics>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-values></r-values>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us title="Enabling a self propagating food supply chain in the world."></r-contact-us>
    </a-col>
  </a-row>
</template>
<style>
.r-diamond {
  position: absolute;
  width: 80px;
  height: 80px;
  left: auto;
  right: auto;
  bottom: auto;
  top: auto;
  background: #FFC83A;
}

.r-diamond:first-child {
  background: #FFC83A;
}

.r-diamond:nth-child(2) {
  background: #006648;
}

.diagonal-01 {
  background: #FFFFFF;
  position: absolute;
  width: 16px;
  height: 300px;
  left: 66px;
  right: auto;
  bottom: -49px;
  top: auto;
  transform: rotate(-45deg);
}

.diagonal-02 {
  background: #FFFFFF;
  position: absolute;
  width: 16px;
  height: 300px;
  left: 91px;
  right: auto;
  bottom: auto;
  top: -74px;
  transform: rotate(45deg);
}

.arrow-up {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid black;
}

.arrow-down {
  width: 0;
  height: 0;
  border-left: 40px solid transparent;
  border-right: 40px solid transparent;

  border-top: 40px solid #FFC83A;
}

.arrow-right {
  width: 0;
  height: 0;
  border-top: 40px solid transparent;
  border-bottom: 40px solid transparent;

  border-left: 40px solid #FFC83A;
}

.arrow-left {
  width: 0;
  height: 0;
  border-top: 40px solid transparent;
  border-bottom: 40px solid transparent;
  border-right:40px solid #006648;
}
</style>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('base/onReviews', {})
  },
  data () {
    return {
      isProcessing: true,
      testimonials: [],
      modal: {
        current: null,
        isVisible: false
      },
      hasData: false
    }
  },
  computed: mapGetters({
    store: 'base/store',
    category: 'base/category',
    categories: 'shop/categories',
    hasCategories: 'base/hasCategories'
  }),
  created () {
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
