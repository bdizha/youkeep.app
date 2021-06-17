<template>
  <a-row type="flex" justify="center">
    <a-col class="r-mt-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <a-row :gutter="[48,48]" type="flex" justify="center" align="middle">
        <a-col style="background: #1B9BD915" class="r-relative" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <div class="r-mv-48" style="padding-bottom: 240px">
            <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
              <a-col :xs="{ span: 24 }" :sm="{  span: 24 }"
                     :md="{ span: 18 }"
                     :lg="{ span: 16 }"
              >
                <a-row :gutter="[96,96]" type="flex" justify="start" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 12 }"
                         :lg="{ span: 12 }"
                  >
                    <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                             :lg="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <h4 class="r-heading-light r-text-primary r-text-uppercase">
                              Meet Shopple
                            </h4>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <h1 class="r-heading">
                              Partner with Shopple for shopping services you can leverage on.
                            </h1>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <p class="r-text-normal">
                              Clients in collections with the republic or SARS? Dealing with messy or non-existent
                              books? Shopple can produce years of outstanding marketplaces quickly, so you can focus
                              on getting your clients current and compliant.
                            </p>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 12 }"
                                 :lg="{ span: 12 }"
                          >
                            <a-button class="r-btn-primary"
                                      block
                                      type="primary"
                                      to="/register"
                                      size="large"
                            >
                              Get started today!
                            </a-button>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 12 }"
                         :lg="{ span: 12 }"
                  >
                    <r-avatar class="r-avatar-block" :dataSrc="'/images/content/37.png'" :size="600"
                    ></r-avatar>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </div>
          <r-wave fill="#FFFFFF"></r-wave>
        </a-col>
        <a-col style="background: #FFFFFF" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <div style="padding-bottom: 180px">
            <a-row class="r-mt-48" type="flex" justify="start" align="middle">
              <a-col :xs="{ span: 24 }" :sm="{  span: 24 }"
                     :md="{ span: 18 }"
                     :lg="{ span: 16 }"
              >
                <a-row class="r-text-left" :gutter="[24,24]" type="flex" justify="center" align="middle">
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                         :lg="{ span: 12 }"
                  >
                    <a-row class="r-text-left" :gutter="[24,24]" type="flex" justify="center" align="middle">
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                             :md="{ span: 24 }"
                             :lg="{ span: 24 }"
                      >
                        <h4 class="r-heading-light r-text-primary r-text-uppercase">
                          Our story
                        </h4>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                             :md="{ span: 24 }"
                             :lg="{ span: 24 }"
                      >
                        <h2 class="r-heading">
                          We continue to prioritize quality shopping services.
                        </h2>
                      </a-col>
                      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                             :md="{ span: 24 }"
                             :lg="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          Shopple’s mission is to bring the best marketplace tools directly to the stores.
                          Finances
                          should always be
                          transparent and easily accessible. marketplace freedom should be for all of us.
                        </p>
                        <p class="r-text-normal">
                          Historically, finest services have been known to be complicated, expensive and difficult to
                          access.
                          Shopple is
                          here to make better shopping services easily accessible to everyone.
                        </p>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
            <r-wave></r-wave>
          </div>
        </a-col>
      </a-row>
      <a-row type="flex" justify="start" align="middle">
        <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ offset: 3, span: 9 }"
               :lg="{ offset: 3, span: 9 }"
        >
          <a-row type="flex" justify="start" align="middle">
            <a-col class="r-pv-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 24 }"
                   :lg="{ span: 24 }"
                   style="text-align: left;"
            >
              <h1 class="r-heading">
                <span class="r-text-secondary">Shopple careers</span>
              </h1>
              <p class="r-text-normal">
                Shopple is a consumer centric shopping platform that exists to transform
                the way shoppers find and make purchases by offering simple and
                convenient shopping and payment methods.
              </p>
            </a-col>
          </a-row>
          <a-row class="r-mb-48" type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 20 }"
                   :lg="{ span: 18 }"
            >
              <a-row class="r-mt-24" :gutter="[24,24]" type="flex" justify="start" align="middle">
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <a-button type="secondary"
                            class="ant-btn ant-btn-secondary r-btn-black"
                            size="large"
                            @click="onModal"
                  >
                    See openings
                  </a-button>
                </a-col>
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <nuxt-link class="r-inline-block" to="/contact-us">
                    <a-button class="r-btn-bordered-grey"
                              block
                              type="secondary"
                              size="large"
                    >
                      Contact us
                    </a-button>
                  </nuxt-link>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
          <div class="r-page-header-photo">
            <div class="r-page-white"
                 style="background-image: url('/images/hiw.jpg')"
            >
            </div>
          </div>
        </a-col>
      </a-row>
      <a-row class="r-mv-48" type="flex">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
          <a-row type="flex" justify="start"
                 class="r-radius-right-white r-text-center"
          >
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18, offset:6 }"
                   :lg="{span: 18, offset:6}" class="r-p-48"
            >
              <a-row :gutter="[24,24]" type="flex" justify="start"
                     class="r-radius-right-white"
              >
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                       :lg="{span: 8}"
                >
                  <div class="r-icon r-icon-primary">
                    <a-icon type="qrcode"/>
                  </div>
                  <h4 class="r-heading-light r-text-uppercase">
                    A diverse team culture
                  </h4>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                       :lg="{span: 8}"
                >
                  <div class="r-icon r-icon-primary">
                    <a-icon type="usergroup-add"/>
                  </div>
                  <h4 class="r-heading-light r-text-uppercase">
                    A fast growing company
                  </h4>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                       :lg="{span: 8}"
                >
                  <div class="r-icon r-icon-primary">
                    <a-icon type="deployment-unit"/>
                  </div>
                  <h4 class="r-heading-light r-text-uppercase">
                    A place for any lifestyle
                  </h4>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
      <a-row type="flex" justify="center" :gutter="24">
        <a-col class="r-p-48" :xs="{ span: 24 }" :md="{ span: 18 }"
               :lg="{ span: 18 }"
        >
          <a-row type="flex" justify="center">
            <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }" class="r-p-48">
              <h2 class="r-heading r-text-secondary">
                Working at Shopple
              </h2>
              <p class="r-text-normal">
                Work with people who are tech-savvys, font-fanatics, word-wizards, data enthusiasts and
                of course, beer experts (yes, we're an online shop with big dreams). We work hard, think
                big, and play well.
                And we do it together, because at the Mother Shopple, we’re family.
              </p>
              <p class="r-text-normal">
                Nothing great has ever been built in a day, and it definitely wasn’t built in a flash.
                At Shopple, we’re building something great, something unimaginable at this juncture. We
                provide our service as a token of appreciation to the society that serves us.
              </p>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }" class="r-p-48">
              <h2 class="r-heading r-text-secondary">
                Why work with Shopple?
              </h2>
              <a-row class="r-mb-48" type="flex" justify="start" align="middle">
                <a-col :span="24">
                  <a-checkbox checked="true" :value="1">
                    Unlimited coffee
                  </a-checkbox>
                </a-col>
                <a-col :span="24">
                  <a-checkbox checked="true" :value="1">
                    Dog Fridays
                  </a-checkbox>
                </a-col>
                <a-col :span="24">
                  <a-checkbox checked="true" :value="1">
                    Unlimited coffee
                  </a-checkbox>
                </a-col>
                <a-col :span="24">
                  <a-checkbox checked="true" :value="1">
                    Growth opportunities
                  </a-checkbox>
                </a-col>
                <a-col :span="24">
                  <a-checkbox checked="true" :value="1">
                    Coworkers all over the RSA
                  </a-checkbox>
                </a-col>
                <a-col :span="24">
                  <a-checkbox checked="true" :value="1">
                    Unlimited snacks and pool games
                  </a-checkbox>
                </a-col>
                <a-col :span="24">
                  <a-checkbox checked="true" :value="1">
                    A casual dress code
                  </a-checkbox>
                </a-col>
              </a-row>
              <nuxt-link class="r-inline-block" to="/career/openings">
                <a-button type="secondary"
                          class="r-btn-secondary" size="large"
                >
                  See openings
                </a-button>
              </nuxt-link>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-careers',
  props: {},
  data () {
    return {
      departments: [],
      modal: {
        isVisible: null,
        current: null,
        message: null
      },
      hasData: true
    }
  },
  mounted () {
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'career'

      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
