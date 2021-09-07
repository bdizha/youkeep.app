<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-menu :default-selected-keys="['2']"
              mode="horizontal"
              theme="light"
      >
        <a-sub-menu>
          <div slot="title" class="r-menu-text">
            Who we serve
            <a-icon type="down" />
            <div class="r-sub-menu">
              <a-card class="r-bg-white r-pull-h-24 r-border-none">
                <div class="r-mv-24">
                  <a-row align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <h4 class="r-heading-light r-text-uppercase r-text-dark">
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
                            <a-card hoverable class="r-bg-primary-light">
                              <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                       :sm="{ span: 24 }"
                                       :xs="{ span: 24}"
                                >
                                  <h4 class="r-heading r-text-dark">
                                    {{ beneficiary.title }}
                                    <a-icon type="right" />
                                  </h4>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                       :sm="{ span: 24 }"
                                       :xs="{ span: 24}"
                                >
                                  <p class="r-text-normal r-text-dark">
                                    {{ beneficiary.summary }}
                                  </p>
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
        <a-sub-menu>
          <div slot="title" class="r-menu-text">
            Solutions
            <a-icon type="down" />
            <div class="r-sub-menu">
              <a-card class="r-bg-white r-pull-h-24 r-border-none">
                <div class="r-mv-24">
                  <a-row align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                        <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <h4 class="r-heading-light r-text-uppercase r-text-dark">
                            Marketplace Solutions
                          </h4>
                        </a-col>
                        <a-col v-for="(service, index) in products"
                               :key="index"
                               :lg="{ span: 8 }" :md="{ span: 8 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <nuxt-link class="r-link-card" :to="'/service/' + service.slug">
                            <a-card hoverable="" class="r-bg-yellow-light">
                              <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                                <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 9 }"
                                       :xs="{ span: 9}"
                                >
                                  <a-card class="r-bg-secondary r-p-0 r-inline-block">
                                    <nuxt-img width="66" height="66" :src="'/services/secondary/' + service.image" />
                                  </a-card>
                                </a-col>
                                <a-col :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 15 }"
                                       :xs="{ span: 15}"
                                >
                                  <a-row :gutter="[6,6]" align="top" justify="start" type="flex">
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                           :xs="{ span: 24}"
                                    >
                                      <h4 class="r-heading r-text-dark">
                                        {{ service.title }}
                                        <a-icon type="right" />
                                      </h4>
                                    </a-col>
                                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                           :xs="{ span: 24}"
                                    >
                                      <p class="r-text-normal r-text-dark" v-html="service.heading"></p>
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
        <a-sub-menu>
          <div slot="title" class="r-menu-text">
            <nuxt-link to="/pricing">
              Pricing
            </nuxt-link>
          </div>
        </a-sub-menu>
        <a-sub-menu>
          <div slot="title" class="r-menu-text">
            <nuxt-link to="/documentation">
              API Docs
            </nuxt-link>
          </div>
        </a-sub-menu>
        <a-sub-menu>
          <div slot="title" class="r-menu-text">
            Company
            <a-icon type="down" />
            <div class="r-sub-menu">
              <a-card class="r-bg-white r-pull-h-24 r-border-none">
                <div class="r-mv-24">
                  <a-row align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
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
                              <h3 class="r-heading">
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
                              <a-card class="r-bg-primary-light">
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
                                      <h4 class="r-heading r-text-dark">
                                        Our story
                                        <a-icon type="right" />
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/careers">
                                      <h4 class="r-heading r-text-dark">
                                        Careers
                                        <a-icon type="right" />
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/contact-us">
                                      <h4 class="r-heading r-text-dark">
                                        Contact Us
                                        <a-icon type="right" />
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
                              <a-card class="r-bg-secondary-light">
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
                                    <nuxt-link class="r-link-card" to="/resources">
                                      <h4 class="r-heading r-text-dark">
                                        Blog
                                        <a-icon type="right" />
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/help">
                                      <h4 class="r-heading r-text-dark">
                                        Documentation
                                        <a-icon type="right" />
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/help">
                                      <h4 class="r-heading r-text-dark">
                                        Help Center
                                        <a-icon type="right" />
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/privacy">
                                      <h4 class="r-heading r-text-dark">
                                        Data Privacy
                                        <a-icon type="right" />
                                      </h4>
                                    </nuxt-link>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <nuxt-link class="r-link-card" to="/terms">
                                      <h4 class="r-heading r-text-dark">
                                        Terms of Use
                                        <a-icon type="right" />
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
        <a-sub-menu>
          <div v-if="!isLoggedIn" slot="title" @click="onModal">
            <a-button id="r-user-login"
                      block
                      :class="{'r-btn-bordered-white': isDark, 'r-btn-bordered-dark': !isDark}"
                      type="secondary"
                      @click="onModal"
            >
              <a-icon type="user" />
              Sign in
            </a-button>
          </div>
          <div v-if="isLoggedIn" slot="title" @click="onDrawer">
            <a-icon type="user" />
            Account
          </div>
        </a-sub-menu>
        <a-sub-menu v-if="!isLoggedIn">
          <div slot="title" @click="onModal">
            <a-button block
                      :class="{'r-btn-yellow': isDark, 'r-btn-primary': !isDark}"
                      type="secondary"
                      @click="onModal('register')"
            >
              <a-icon type="user" />
              Sign Up
            </a-button>
          </div>
        </a-sub-menu>
      </a-menu>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'RNav',
  data () {
    return {
      beneficiaries: [
        {
          title: 'Marketplace',
          link: '/marketplace',
          summary: 'Discover and connect with new and innovative product suppliers.'
        },
        {
          title: 'Suppliers',
          link: '/supplier',
          summary: 'The tools, insights, and services you need to grow your business'
        },
        {
          title: 'Buyers',
          link: '/buyer',
          summary: 'A single place to discover thousands of innovative products'
        },
        {
          title: 'Community',
          link: '/community',
          summary: 'The tools, insights, and services you need to grow your business'
        },
        {
          title: 'Help Center',
          link: '/help',
          summary: 'The tools, insights, and services you need to grow your business'
        }
      ]
    }
  },
  computed: mapGetters({
    products: 'content/products',
    user: 'auth/user',
    cart: 'cart/cart',
    modal: 'base/modal',
    store: 'base/store',
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
