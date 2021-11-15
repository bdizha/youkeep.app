<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-menu :default-selected-keys="['2']"
              mode="horizontal"
              theme="light"
      >
        <a-sub-menu>
          <div slot="title" class="r-menu-text">
            Explore
            <a-icon type="down"/>
            <div class="r-sub-menu">
              <a-card class="r-bg-dark r-pull-h-24 r-border-none">
                <a-row :gutter="[48, 48]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <r-serve-slider></r-serve-slider>
                  </a-col>
                </a-row>
              </a-card>
            </div>
          </div>
        </a-sub-menu>
        <a-sub-menu class="r-menu-submenu-btn" v-if="hasNav">
          <div slot="title" class="r-menu-text">
            Marketplace
            <a-icon type="down"/>
            <div class="r-sub-menu">
              <a-card class="r-bg-dark r-pull-h-24 r-border-none">
                <div class="r-mv-24">
                  <a-row align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 18 }" :md="{ span: 21 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24}"
                            >
                              <h4 class="r-heading-light r-text-uppercase  ">
                                Use cases
                              </h4>
                            </a-col>
                            <a-col v-for="(beneficiary, index) in beneficiaries"
                                   :key="index"
                                   :lg="{ span: 8 }" :md="{ span: 8 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24}"
                            >
                              <nuxt-link class="r-link-card" :to="beneficiary.link">
                                <a-card hoverable class="r-bg-dark">
                                  <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                           :sm="{ span: 24 }"
                                           :xs="{ span: 24}"
                                    >
                                      <p class="r-text-medium" :class="getTxtColor(beneficiary.theme)">
                                        {{ beneficiary.title }}
                                        <a-icon type="right"/>
                                      </p>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                           :sm="{ span: 24 }"
                                           :xs="{ span: 24}"
                                    >
                                      <p class="r-text-normal r-text-white">
                                        {{ beneficiary.summary }}
                                      </p>
                                    </a-col>
                                  </a-row>
                                </a-card>
                              </nuxt-link>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <h4 class="r-heading-light r-text-uppercase  ">
                            Solutions
                          </h4>
                        </a-col>
                        <a-col v-for="(service, index) in services"
                               :key="index"
                               :lg="{ span: 8 }" :md="{ span: 8 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <nuxt-link class="r-link-card" :to="'/service/' + service.slug">
                            <a-card hoverable="" class="r-bg-dark">
                              <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                                <a-col flex="48px">
                                  <div class="r-bg-primary-light r-p-0 r-border-radius-square">
                                    <div class="r-p-12">
                                      <a-icon class="r-text-secondary"
                                              theme="filled"
                                              :style="{ fontSize: '24px' }"
                                              :type="service.icon"
                                      ></a-icon>
                                    </div>
                                  </div>
                                </a-col>
                                <a-col flex="1 1 0">
                                  <a-row :gutter="[6,6]" align="top" justify="start" type="flex">
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                           :xs="{ span: 24}"
                                    >
                                      <p class="r-text-medium">
                                        <span v-html="service.title"></span>
                                        <a-icon type="right"/>
                                      </p>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                           :xs="{ span: 24}"
                                    >
                                      <p class="r-text-normal" v-html="service.heading"></p>
                                    </a-col>
                                  </a-row>
                                </a-col>
                              </a-row>
                            </a-card>
                          </nuxt-link>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </div>
              </a-card>
            </div>
          </div>
        </a-sub-menu>
        <a-sub-menu v-if="hasNav">
          <div slot="title" class="r-menu-text">
            Company
            <a-icon type="down"/>
            <div class="r-sub-menu">
              <a-card class="r-bg-dark r-pull-h-24 r-border-none">
                <div class="r-mv-24">
                  <a-row align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 18 }" :md="{ span: 21 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24}"
                            >
                              <h3 class="r-heading r-text-tertiary">
                                About us
                              </h3>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24}"
                            >
                              <p class="r-text-medium">
                                Get to know the people behind the code and the mission behind the work.
                              </p>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24}"
                            >
                              <a-card class="r-bg-dark">
                                <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <h4 class="r-heading-light r-text-uppercase r-text-primary">
                                      Get started
                                    </h4>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/about-us">
                                      <h4 class="r-heading">
                                        Our story
                                        <a-icon type="right"/>
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/careers">
                                      <h4 class="r-heading">
                                        Careers
                                        <a-icon type="right"/>
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/partners">
                                      <h4 class="r-heading">
                                        Partners
                                        <a-icon type="right"/>
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/contact-us">
                                      <h4 class="r-heading">
                                        Contact Us
                                        <a-icon type="right"/>
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/pricing">
                                      <h4 class="r-heading">
                                        Pricing
                                        <a-icon type="right"/>
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                </a-row>
                              </a-card>
                            </a-col>
                            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24}"
                            >
                              <a-card class="r-bg-dark">
                                <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <h4 class="r-heading-light r-text-uppercase r-text-secondary">
                                      Resources
                                    </h4>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/blog">
                                      <h4 class="r-heading">
                                        Blog
                                        <a-icon type="right"/>
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/meta">
                                      <h4 class="r-heading">
                                        Get to know YouKeep
                                        <a-icon type="right"/>
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/help">
                                      <h4 class="r-heading">
                                        Help Center
                                        <a-icon type="right"/>
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/privacy">
                                      <h4 class="r-heading">
                                        Data Privacy
                                        <a-icon type="right"/>
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/terms">
                                      <h4 class="r-heading">
                                        Terms of Use
                                        <a-icon type="right"/>
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                </a-row>
                              </a-card>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </div>
              </a-card>
            </div>
          </div>
        </a-sub-menu>
        <a-sub-menu class="r-menu-submenu-btn">
          <div v-if="!isLoggedIn" slot="title" @click="onModal">
            <a-button block
                      size="small"
                      class="r-btn-dark"
                      type="secondary"
                      @click="onDrawer('menu')"
            >
              <a-icon type="user"/>
              Account
            </a-button>
          </div>
        </a-sub-menu>
        <a-sub-menu class="r-menu-submenu-btn" v-if="!isLoggedIn && hasNav && false">
          <div slot="title" @click="onModal">
            <a-button block
                      size="small"
                      :class="{'r-btn-bordered-primary': !hasNav, 'r-btn-bordered-primary': hasNav}"
                      type="primary"
                      @click="onModal('register')"
            >
              <a-icon type="user"/>
              Sign Up
            </a-button>
          </div>
        </a-sub-menu>
        <a-sub-menu class="r-menu-submenu-btn">
          <div slot="title" class="r-menu-text">
            <r-cart-count></r-cart-count>
          </div>
        </a-sub-menu>
      </a-menu>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-nav',
  props: {
    hasNav: { type: Boolean, required: false, default: true }
  },
  data () {
    return {
      metrics: [
        {
          name: 'Just dropped in',
          metric_id: 1
        },
        {
          name: 'Trending NFTs',
          metric_id: 1
        },
        {
          name: 'Recently added',
          metric_id: 1
        }
      ],
      beneficiaries: [
        {
          theme: 'primary',
          title: 'Collectors',
          link: '/customer',
          summary: 'Enjoy on-demand NFTs for your artistic taste by favourite creators.'
        },
        {
          theme: 'secondary',
          title: 'Artists',
          link: '/artist',
          summary: 'Discover and connect with collectors who love your authentic NFTs.'
        },
        {
          theme: 'tertiary',
          title: 'Sellers',
          link: '/seller',
          summary: 'Sell original NFTs and inspire millions of collectors on the $keep marketplace.'
        }
      ]
    }
  },
  computed: mapGetters({
    services: 'content/services',
    user: 'auth/user',
    cart: 'cart/cart',
    modal: 'base/modal',
    store: 'shop/store',
    drawer: 'base/drawer',
    isRaised: 'base/isRaised',
    isDark: 'base/isDark',
    isLoggedIn: 'auth/isLoggedIn'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    getTxtColor (theme) {
      return `r-text-${theme}`
    },
    onDrawer () {
      const drawer = {}
      drawer.current = 'account'
      drawer.isVisible = true

      this.$store.dispatch('base/onDrawer', drawer)
    },
    onModal (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current
      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
