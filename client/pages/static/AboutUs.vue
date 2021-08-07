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
                  <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
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
                          We believe shopping <span class="r-text-secondary">experience</span> should be
                          <span class="r-text-secondary">better</span> for everyone.
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium">
                          Changing how people experience shopping and buy what they desire is just getting started.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          Spazamall powers the whole shopping experience for shoppers around the world.
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
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col v-for="(item, index) in [11, 12, 13, 14, 15, 16]"
                         :key="index"
                         :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 8 }"
                         :xs="{ span: 8 }"
                  >
                    <r-avatar :size="300" class="r-avatar-block"
                              :data-src="'/shoppers/' + (item) + '_secondary.png'"
                    ></r-avatar>
                  </a-col>
                </a-row>
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
          <a-card class="r-bg-secondary r-card-stretch">
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
                  We continue to <span class="r-text-primary">prioritize</span> quality shopping services
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
                  Historically, finest services have been known to be complicated, expensive and difficult to
                  access.
                </p>
              <p class="r-text-normal">
                We partner up with sellers of all sizes and help them, run, and grow their businesses with easy tools.
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
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
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
              <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                Our promise to you
              </h4>
            </a-col>
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h3 class="r-heading">
                We help stores <span class="r-text-secondary">achieve</span> their sales goals:
              </h3>
            </a-col>
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-medium">
                Spazamall is
                here to make better shopping services easily accessible to everyone.
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
              <a-card class="r-bg-primary-light">
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
                          {{ promise.title }}
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
    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light">
        <a-card-meta>
          <template slot="description">
            <div class="r-mv-24">
              <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="center" type="flex">
                <a-col :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h3 class="r-heading-light r-text-secondary r-text-uppercase">Ready to join us?</h3>
                </a-col>
                <a-col :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    We’re <span class="r-text-secondary">excited</span> to meet you!
                  </h2>
                </a-col>
                <a-col :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                       class="r-text-center"
                >
                  <p class="r-text-normal">
                    Ready to join a team of bold and passionate builders to do your best work yet? We're a
                    team of innovative players and come join if you want to play an important role in
                    building the future of
                    fintech.
                  </p>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                       class="r-text-center"
                >
                  <nuxt-link to="/career/openings">
                    <a-button class="r-btn-secondary"
                              html-type="submit"
                              size="large"
                              type="secondary"
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
          title: 'Affordability',
          content: 'You’re unique and your marketplaces should be too. We help match you to an affordable plan that fits your business scalability and productivity needs. '
        },
        {
          title: 'Simplicity',
          content: 'Simplify to make informed and better decisions while you accelerate your innovation pace. Set everything up online and cancel anytime with minimized costs.'
        },
        {
          title: 'Reliability',
          content: 'We provide high-quality solutions that are essential to your business growth trajectory, and the freedom to reach out to your customers more effectively.'
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
