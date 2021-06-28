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
                    Careers at Shopple
                  </h4>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <h1 class="r-heading">
                    Be part of something bigger
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
                        Our objective
                      </h4>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                    >
                      <h2 class="r-heading">
                        To transform the way shopping is experienced around the world
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
          <r-values></r-values>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }"
        >
          <a-row type="flex" justify="center" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{  span: 24 }"
                   :md="{ span: 18 }"
                   :lg="{ span: 16 }"
            >
              <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <a-card class="r-bg-primary-light">
                    <a-card-meta>
                      <template slot="description">
                        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                              Innovative
                            </h4>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <h2 class="r-heading">
                              Transforming
                              the way shopping is <span class="r-text-secondary">experienced</span>
                            </h2>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <p class="r-text-normal">
                              Shopple is a consumer centric platform that transforms
                              the way shoppers experience their shopping.
                            </p>
                            <p class="r-text-normal">
                              If you take innovation intelligently and methodically, you're in the right place with
                              unlimited
                              possibilities.
                            </p>
                          </a-col>
                        </a-row>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <a-card class="r-bg-primary-light">
                    <a-card-meta>
                      <template slot="description">
                        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                              Dynamic
                            </h4>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <h2 class="r-heading">
                              Together, we can <span class="r-text-secondary">change</span> the world for the better
                            </h2>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <p class="r-text-normal">
                              At Shopple, we are building a shopping experience that helps millions of people be
                              effortlessly in
                              control of their shopping experience.
                            </p>
                            <p class="r-text-normal">
                              It's all about giving back our customers the control of their shopping.
                            </p>
                          </a-col>
                        </a-row>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <a-card class="r-bg-primary-light">
                    <a-card-meta>
                      <template slot="description">
                        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                              Progressive
                            </h4>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <h2 class="r-heading">
                              We <span class="r-text-secondary">celebrate</span> mistakes and doing more experiments
                            </h2>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <p class="r-text-normal">
                              You want to create bright ideas, achieve great work & cash out.
                            </p>
                            <p class="r-text-normal">
                              We use the latest technologies to solve problems (AI, Graphical Data Tool Sets). Customer
                              satisfaction
                              comes first, create products which users love.
                            </p>
                          </a-col>
                        </a-row>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }"
                >
                  <a-card class="r-bg-primary-light">
                    <a-card-meta>
                      <template slot="description">
                        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                              Collaborative
                            </h4>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <h2 class="r-heading">
                              Shopple as a specialist house with a <span class="r-text-secondary">diverse</span> team
                            </h2>
                          </a-col>
                          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <p class="r-text-normal">
                              Great work mates
                              are at the
                              core of the work we do, here.
                            </p>
                            <p class="r-text-normal">
                              We incentives making mistakes and this helps to foster the spirit of innovation with as
                              minimum
                              friction
                              and costs as possible.
                            </p>
                          </a-col>
                        </a-row>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{  span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
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
                      <a-card class="r-bg-secondary-light">
                        <a-card-meta>
                          <template slot="description">
                            <div class="r-mv-48">
                              <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
                                <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                                       :lg="{ span: 24 }"
                                >
                                  <h3 class="r-text-secondary r-text-uppercase">Ready to join us?</h3>
                                </a-col>
                                <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                                       :lg="{ span: 21 }"
                                >
                                  <p class="r-text-normal">
                                    Ready to join a team of bold and passionate builders to do your best work yet? We're
                                    a
                                    team of innovative players and come join if you want to play an important role in
                                    building the future of
                                    fintech.
                                  </p>
                                </a-col>
                                <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }"
                                       :lg="{ span: 16 }"
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
import { mapGetters } from 'vuex'
import axios from 'axios'

export default {
  name: 'r-career',
  props: {},
  data () {
    return {
      banner: 'art-04.png',
      departments: [],
      modal: {
        isVisible: null,
        current: null,
        message: null,
      },
      hasData: true
    }
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
      let params = {}
      let path = this.$route.path
      let $this = this

      axios.get(path, params)
        .then(response => {
          console.log('setting positions >> before')
          console.log(response.data)

          $this.departments = response.data.departments
          $this.hasData = true

          console.log('setting positions >> after')
        })
        .catch(e => {
          console.log(e)
        })
    }
  }
}
</script>
