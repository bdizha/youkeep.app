<template>
  <a-row :gutter="[48,96]" type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-row style="background: #FFFFFF" type="flex" justify="start" align="middle">
        <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 12 }"
               :lg="{ span: 12 }"
        >
          <a-row type="flex" justify="end" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
                   :lg="{ span: 16 }"
            >
              <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-primary r-text-uppercase">
                    About us
                  </h4>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <h1 class="r-heading">
                    Shopple's technology enables better shopping.
                  </h1>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    Changing how people experience shopping and buy what they desire is just getting started.
                  </p>
                  <p class="r-text-normal">
                    Shopple powers the whole shopping experience for shppers around the world. We specialize in
                    online shopping, order tracking, and marketplace services focused on delivering a customer
                    experience of unparalleled quality.
                  </p>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col class="r-pv-48"
               style="background: url(/images/content/7.svg) no-repeat; background-size: cover; padding-bottom: 600px;"
               :xs="{ span: 24 }" :sm="{ span: 24 }"
               :md="{ span: 12 }"
               :lg="{ span: 12 }"
        >
        </a-col>
      </a-row>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
      <a-row :gutter="[48,48]" type="flex" justify="center" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >

          <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{  span: 24 }"
                   :md="{ span: 18 }"
                   :lg="{ span: 16 }"
            >
              <a-row class="r-text-left" type="flex" justify="center" align="middle">
                <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
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
                        We continue to prioritize quality shopping services
                      </h2>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        Shopple’s mission is to bring the best shopping tools directly to the customers and retailers.
                        Shopple
                        should always be
                        transparent and easily accessible. Shopping freedom should be for all of us.
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
        </a-col>

        <a-col :xs="{ span: 24 }" :sm="{  span: 24 }"
               :md="{ span: 18 }"
               :lg="{ span: 16 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-card-meta>
              <template slot="description">
                <div class="r-mv-48">
                  <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }"
                    >
                      <a-row class="r-text-left" :gutter="[24,24]" type="flex" justify="center" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                               :md="{ span: 24 }"
                               :lg="{ span: 24 }"
                        >
                          <h4 class="r-heading-light r-text-primary r-text-uppercase">
                            Our values
                          </h4>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                               :md="{ span: 24 }"
                               :lg="{ span: 24 }"
                        >
                          <h2 class="r-heading">
                            We make handling your <span class="r-text-secondary">marketplaces</span> more human
                          </h2>
                        </a-col>
                      </a-row>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }"
                    >
                      <a-row class="r-text-left" :gutter="[24,24]" type="flex" justify="center" align="middle">
                        <a-col v-for="(value, index) in values"
                               :key="index"
                               :xs="{ span: 24 }" :sm="{ span: 24 }"
                               :md="{ span: 24 }"
                               :lg="{ span: 24 }"
                        >
                          <a-row class="r-text-left" :gutter="[24,24]" type="flex" justify="center" align="middle">
                            <a-col :xs="{ span: 8 }" :sm="{ span: 9 }"
                                   :md="{ span: 6 }"
                                   :lg="{ span: 4 }"
                            >
                              <r-avatar :dataSrc="'/images/icons/' + value.image" :size="60"></r-avatar>
                            </a-col>
                            <a-col :xs="{ span: 16 }" :sm="{ span: 16 }"
                                   :md="{ span: 18 }"
                                   :lg="{ span: 20 }"
                            >
                              <h3 class="r-heading-light">
                                {{ value.title }}
                              </h3>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </div>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <a-row type="flex" justify="center" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{  span: 24 }"
                   :md="{ span: 18 }"
                   :lg="{ span: 16 }"
            >
              <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <a-row class="r-text-left" :gutter="[24,24]" type="flex" justify="center" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <h2 class="r-heading">
                        We’re <span class="r-text-primary">excited</span> to meet you!
                      </h2>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <a-card class="r-bg-primary-light">
                    <a-card-meta>
                      <template slot="description">
                        <div class="r-mv-48">
                          <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
                            <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                                   :lg="{ span: 24 }"
                            >
                              <h4 class="r-text-secondary r-text-uppercase">Ready to join us?</h4>
                            </a-col>
                            <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                                   :lg="{ span: 24 }"
                            >
                              <p class="r-text-normal">
                                Ready to join a team of bold and passionate builders to do your best work yet? We're a
                                team of innovative players and come join if you want to play an important role in
                                building the future of
                                fintech.
                              </p>
                            </a-col>
                            <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                                   :lg="{ span: 12 }"
                            >
                              <nuxt-link to="/career/openings">
                                <a-button type="secondary"
                                          class="r-btn-secondary"
                                          size="large"
                                          html-type="submit"
                                >
                                  See job openings
                                </a-button>
                              </nuxt-link>
                            </a-col>
                          </a-row>
                        </div>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{  span: 24 }"
                   :md="{ span: 18 }"
                   :lg="{ span: 16 }"
            >
              <a-card class="r-bg-secondary-light">
                <a-card-meta>
                  <template slot="description">
                    <div class="r-mv-48">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                               :lg="{ span: 12 }"
                        >
                          <a-row class="r-text-left" :gutter="[24,24]" type="flex" justify="center" align="middle">
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 24 }"
                                   :lg="{ span: 24 }"
                            >
                              <h4 class="r-heading-light r-text-primary r-text-uppercase">
                                Our promise to you
                              </h4>
                            </a-col>
                            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 24 }"
                                   :lg="{ span: 24 }"
                            >
                              <h2 class="r-heading">
                                We help stores <span class="r-text-primary">achieve</span> their sales goals:
                              </h2>
                            </a-col>
                            <a-col v-for="(promise, index) in promises"
                                   :key="index"
                                   :xs="{ span: 24 }" :sm="{ span: 24 }"
                                   :md="{ span: 24 }"
                                   :lg="{ span: 24 }"
                            >
                              <a-row class="r-text-left" :gutter="[12,12]" type="flex" justify="center" align="middle">
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <h3 class="r-heading">
                                    {{ promise.title }}
                                  </h3>
                                </a-col>
                                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                       :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <h4 class="r-heading-light">
                                    {{ promise.content }}
                                  </h4>
                                </a-col>
                              </a-row>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                               :lg="{ span: 12 }"
                        >
                          <r-avatar class="r-avatar-block" data-src="/images/content/9.png" :size="450"></r-avatar>
                        </a-col>
                      </a-row>
                    </div>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
          <r-locations></r-locations>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  layout: 'default',
  name: 'r-about-us',
  props: {},
  data () {
    return {
      values: [
        {
          title: 'We put our customers first',
          image: 'about-01.svg'
        },
        {
          title: 'We do the right thing',
          image: 'about-02.svg'
        },
        {
          title: 'We hold ourselves to high standards',
          image: 'about-03.svg'
        }
      ],
      promises: [
        {
          title: 'Affordable',
          content: 'You’re unique and your marketplaces should be too. We help match you to a plan that fits you and your business needs. '
        },
        {
          title: 'Simple',
          content: 'Easily find a plan in minutes. Set everything up online and cancel anytime. '
        },
        {
          title: 'Reliable',
          content: 'We provide high-quality solutions that are essential to your business marketplaces, and marketplace freedom.'
        }
      ]
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {},
}
</script>
