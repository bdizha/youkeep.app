<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
        <div class="r-mv-48">
          <a-row :gutter="[48,48]" justify="center" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 15 }" :md="{ span: 15 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
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
                       To deliver <span class="r-text-secondary">value</span> to shopping
                      </h1>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium r-text-dark">
                        Our goal is to make online checkout as easy as swiping a credit card.
                        We are 100% committed to providing Shoppers with a better checkout experience.
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        We strongly emphasize simplicity and personal security; our team of user interface and payment security experts has worked tirelessly to make Paise as easy and safe as possible
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <nuxt-link to="/careers">
                        <a-button class="r-btn-dark"
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
                <a-col :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <r-avatar data-src="/images/icon_dark.svg" :size="300"
                            class="r-avatar-block"
                  ></r-avatar>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" justify="start" type="flex">
        <a-col :lg="{ span: 15 }" :md="{ span: 15 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h4 class="r-heading-light r-text-uppercase">
                Our vision
              </h4>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h2 class="r-heading">
                To bring freedom to shopping
              </h2>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-normal">
                What started as a way to help growing brands to conveniently sell their products has grown into a leading online
                marketplace that connects millions of shoppers with sellers of all sizes. Ultimately, Paise makes shopping more rewarding, by giving consumers the flexibility and freedom to buy what they want, with added benefits.
              </p>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-values></r-values>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us title="Get the freedom to buy what you want and earn with Paise."></r-contact-us>
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
  background: #00C2FF;
}

.r-diamond:first-child {
  background: #00C2FF;
}

.r-diamond:nth-child(2) {
  background: #3B9CFF;
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

  border-top: 40px solid #00C2FF;
}

.arrow-right {
  width: 0;
  height: 0;
  border-top: 40px solid transparent;
  border-bottom: 40px solid transparent;

  border-left: 40px solid #00C2FF;
}

.arrow-left {
  width: 0;
  height: 0;
  border-top: 40px solid transparent;
  border-bottom: 40px solid transparent;
  border-right:40px solid #3B9CFF;
}
</style>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('content/onTestimonials', {})
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
