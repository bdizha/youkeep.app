<template>
  <a-row :gutter="[48,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light">
        <a-card-meta>
          <template slot="description">
            <a-row :gutter="[96,48]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h3 class="r-heading-light r-text-secondary r-text-uppercase">
                          About us
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading">
                          We believe in an <span class="r-text-secondary">inclusive</span> <span class="r-text-primary">economy</span> for <span class="r-text-blue">everyone</span>.
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium">
                          Changing how startup businesses access venture capital in Africa. Investing its time, capital and resources to accelerate their ability to scale internationally.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          Graphigem facilitates the whole incubation experience for startups around the African continent.
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
                <r-avatar :size="450" class="r-avatar-block" data-src="/images/about-us.jpg"
                ></r-avatar>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
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
                  Our story
                </h4>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h3 class="r-heading">
                  We continue to <span class="r-text-primary">prioritize</span> accessible venture catalyst services.
                </h3>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-medium">
                  Graphigem’s mission is to bring the best shopping tools directly to the customers and
                  retailers.
                </p>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-normal">
                  Historically, early stage startup funding services have been known to be non-existent, complicated, expensive and difficult to
                  access.
                </p>
              <p class="r-text-normal">
                We partner up with startups of all sizes and help them, run, and grow their businesses within an effective framework model.
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
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{  span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h4 class="r-heading-light r-text-uppercase">
                <span class="r-text-blue">Our promise to you</span>
              </h4>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h3 class="r-heading">
                We help startups <span class="r-text-blue">achieve</span> their business goals:
              </h3>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-medium">
                Graphigem is
                here to make better venture catalyst services easily accessible to everyone.
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{  span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
            <a-col v-for="(promise, index) in promises"
                   :key="index"
                   :lg="{ span: 8 }" :md="{ span: 8 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card :class="getBgClass(promise.theme)">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[12,12]" align="middle" class="r-text-left" justify="center"
                           type="flex"
                    >
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h4 class="r-checked-item r-heading">
                          <a-icon class="r-checked-item-icon" type="check"></a-icon>
                          <span :class="getTextClass(promise.textTheme)">
                            {{ promise.title }}
                          </span>
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          {{ promise.content }}
                        </p>
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
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light">
        <a-card-meta>
          <template slot="description">
            <div class="r-mv-24">
              <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
                <a-col :lg="{ span: 18 }" :md="{ span: 16 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    We’re <span class="r-text-secondary">excited</span> to meet you!
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    Ready to join a team of bold and passionate builders to do your best work yet? We're a
                    team of innovative players and come join if you want to play an important role in
                    building the future of
                    fintech.
                  </p>
                </a-col>
              </a-row>
                </a-col>
                <a-col :lg="{ span: 6 }" :md="{ span: 8 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">Ready to join us?</h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                  >
                    <nuxt-link to="/career/openings">
                      <a-button class="r-btn-secondary"
                                block
                                size="large"
                                type="secondary"
                      >
                        See job openings
                      </a-button>
                    </nuxt-link>
                  </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </div>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-locations></r-locations>
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
      promises: [
        {
          title: 'Affordability',
          content: 'You’re unique and your marketplaces should be too. We help match you to an affordable plan that fits your business scalability and productivity needs. ',
          theme: 'blue',
          textTheme: 'secondary'
        },
        {
          title: 'Simplicity',
          content: 'Simplify to make informed and better decisions while you accelerate your innovation pace. Set everything up online and cancel anytime with minimized costs.',
          theme: 'primary',
          textTheme: 'blue'
        },
        {
          title: 'Reliability',
          content: 'We provide high-quality solutions that are essential to your business growth trajectory, and the freedom to reach out to your customers more effectively.',
          theme: 'secondary',
          textTheme: 'primary'
        }
      ]
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {
    getBgClass (theme) {
      return `r-bg-${theme}-light`
    },
    getTextClass (theme) {
      return `r-text-${theme}`
    }
  }
}
</script>
