<template>
  <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row class="r-text-center" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    Partner with us
                  </h2>
                </a-col>
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-medium">
                    Grow your business with unified merchant financing tools, made for modern businesses.
                  </p>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
                <a-col v-for="(partner, index) in partners"
                       :key="index"
                       :lg="{ span: 12 }" :md="{ span: 12}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-primary-light">
                    <div class="r-mv-48">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading" v-html="partner.title"></h3>
                        </a-col>
                        <a-col v-for="(row, index) in partner.rows"
                               :key="index"
                               :lg="{ span: 24 }" :md="{ span: 24}"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                   :xs="{ span: 24}"
                            >
                              <h4 class="r-heading" v-html="row.title">
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-normal">
                                {{ row.content }}
                              </p>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                               :sm="{ span: 12 }"
                               :xs="{ span: 24 }"
                        >
                          <nuxt-link to="/contact-us">
                            <a-button class="r-btn-bordered-secondary"
                                      block
                                      size="large"
                                      type="primary"
                            >
                              Partner with us
                              <a-icon type="right"></a-icon>
                            </a-button>
                          </nuxt-link>
                        </a-col>
                      </a-row>
                    </div>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-partners',
  props: {},
  data () {
    return {
      partners: [
        {
          title: 'Agency Partners',
          rows: [
            {
              title: '<span class="r-text-primary">Grow </span> your clients’ marketing budget',
              content: 'Paise is an inexpensive way for your D2C eCommerce clients to increase their marketing budgets substantially, resulting in more opportunities for growth on your end.'
            },
            {
              title: '<span class="r-text-primary">Revenue</span>  Share opportunity',
              content: 'Add incremental revenue streams for your agency by participating in our revenue share program'
            }
          ]
        },
        {
          title: 'Tech Partners',
          rows: [
            {
              title: '<span class="r-text-primary">Co-marketing</span> opportunities',
              content: 'Paise serves hundreds of D2C eCommerce brands with the funds they need to grow. Our audience includes founders/CEOs and CFOs.'
            },
            {
              title: '<span class="r-text-primary">Revenue</span>  Share opportunity',
              content: 'Add incremental revenue streams for your business by participating in our revenue share program'
            }
          ]
        },
        {
          title: 'VC Partners',
          rows: [
            {
              title: '<span class="r-text-primary">Zero-equity</span> financing',
              content: 'Grow the marketing budgets of the companies in your portfolio and grow faster with unsecured and non-dilutive capital.'
            },
            {
              title: '<span class="r-text-primary">Scale</span>  faster with better visibility',
              content: 'D2C founders struggle with two things: unlocking funds, and knowing where to spend them - we solve both.'
            }
          ]
        }
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
