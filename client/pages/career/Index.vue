<template>
  <a-row :gutter="[48,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-white">
        <a-card-meta>
          <template slot="description">
            <a-row :gutter="[96,48]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                  <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h3 class="r-heading-light r-text-secondary r-text-uppercase">
                          Work with us
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading">
                          A place where <span class="r-text-secondary">technology</span> meets <span
                          class="r-text-primary"
                        >shopping</span> experience.
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium">
                          Changing how people experience shopping and buying what they desire is just getting started.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          Spazamall powers the whole shopping experience for shoppers around the world. We specialize in
                          online shopping, order tracking, and marketplace services focused on delivering a customer
                          experience of unparalleled quality.
                        </p>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <r-avatar :size="450" class="r-avatar-auto" data-src="/images/content/7.svg"
                ></r-avatar>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{  span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
          <a-card class="r-bg-secondary">
            <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h4 class="r-heading-light r-text-primary r-text-uppercase">
                  Our objective
                </h4>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h3 class="r-heading">
                  To transform the way shopping is <span class="r-text-primary">experienced</span> around the world
                </h3>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-medium">
                  Spazamall’s mission is to bring the best shopping tools directly to the customers and
                  retailers.
                </p>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-normal">
                  Our enviroment is always transparent and easily accessible. Shopping freedom should be for all of us.
                </p>
                <p class="r-text-normal">
                  Spazamall is
                  here to make better shopping services easily accessible to everyone.
                </p>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
          <r-values></r-values>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
               :sm="{  span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-primary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <r-avatar :dataSrc="'/images/content/customer-03.svg'" :size="150" class="r-avatar-auto"
                                  shape="circle"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                              Innovative
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading">
                              Transforming
                              the way shopping is <span class="r-text-secondary">experienced</span> online
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <p class="r-text-medium">
                              If you take innovation passionately, then you're in the right place.
                            </p>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <p class="r-text-normal">
                              Spazamall is a consumer centric platform that transforms
                              the way shoppers experience their shopping.
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-primary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <r-avatar :dataSrc="'/images/content/customer-04.svg'" :size="150" class="r-avatar-auto"
                                  shape="circle"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                              Dynamic
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading">
                              Together, we can <span class="r-text-secondary">change</span> the world for the better
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <p class="r-text-medium">
                              It's all about giving back our customers the control of their shopping.
                            </p>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <p class="r-text-normal">
                              At Spazamall, we are building a shopping experience that helps millions of people be
                              in control of their shopping experience.
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-primary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <r-avatar :dataSrc="'/images/content/customer-03.svg'" :size="150" class="r-avatar-auto"
                                  shape="circle"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                              Progressive
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading">
                              We <span class="r-text-secondary">celebrate</span> mistakes and doing more experiments
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <p class="r-text-medium">
                              You want to create bright ideas, achieve great work & cash out.
                            </p>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <p class="r-text-normal">
                              We use the latest technologies to solve problems (AI, Graphical Data Tool Sets). Customer
                              satisfaction
                              comes first, create products which users love.
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-primary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <r-avatar :dataSrc="'/images/content/customer-03.svg'" :size="150" class="r-avatar-auto"
                                    shape="circle"
                          ></r-avatar>
                        </a-col>
                        <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                                Collaborative
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h4 class="r-heading">
                                Spazamall as a specialist house with a <span class="r-text-secondary">diverse</span>
                                team
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-medium">
                                Great work mates
                                are at the
                                core of the work we do, here.
                              </p>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-normal">
                                We incentives making mistakes and this helps to foster the spirit of innovation with as
                                minimum
                                friction
                                and costs as possible.
                              </p>
                            </a-col>
                          </a-row>
                        </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{  span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <h2 class="r-heading">
            We’re <span class="r-text-primary">excited</span> to meet you!
          </h2>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-secondary r-text-center">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" justify="center" type="flex"
                       class="r-text-center"
                >
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                  >
                    <h3 class="r-text-primary r-text-uppercase">Ready to join us?</h3>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                  >
                    <h2 class="r-heading">
                      Ready to join a team of <span class="r-text-primary">bold</span> and <span class="r-text-primary">passionate</span>
                      builders?
                    </h2>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                  >
                    <p class="r-text-medium">
                      Historically, finest services have been known to be complicated, expensive and difficult to
                      access.
                    </p>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                  >
                    <p class="r-text-normal">
                      We're
                      a team of innovative players and come join if you want to play an important role in
                      building the future of
                      shopping.
                    </p>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                  >
                    <nuxt-link to="/career/openings">
                      <a-button class="r-btn-primary"
                                block
                                size="large"
                                type="secondary"
                      >
                        See job openings
                      </a-button>
                    </nuxt-link>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-locations></r-locations>
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
      const params = {}
      const path = this.$route.path
      const $this = this

      axios.get(path, params)
        .then((response) => {
          console.log('setting positions >> before')
          console.log(response.data)

          $this.departments = response.data.departments
          $this.hasData = true

          console.log('setting positions >> after')
        })
        .catch((e) => {
          console.log(e)
        })
    }
  }
}
</script>
