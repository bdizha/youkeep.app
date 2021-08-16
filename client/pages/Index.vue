<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-blue r-border-none">
            <a-row :gutter="[48,48]" justify="center" type="flex">
              <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <div class="r-mv-48">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading-light r-text-primary r-text-uppercase">
                            For Innovation
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h2 class="r-heading r-text-uppercase">
                            <span class="r-text-white">Envision.</span>
                            <span class="r-text-green">Apply.</span>
                            <span class="r-text-primary">Evaluate</span>
                          </h2>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-medium">
                            Graphigem Group helps you move faster and achieve success with early stage
                            investment opportunities supported by our Partner Network.
                          </p>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-medium">
                            <span class="r-text-white">Innovation.</span>
                            <span class="r-text-green">Investment.</span>
                            <span class="r-text-primary">Revenue.</span>
                          </p>
                        </a-col>
                      </a-row>
                    </div>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <r-avatar data-src="/images/content/illustration-14-white.svg" :size="300" class="r-avatar-block"
                    ></r-avatar>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h3 class="r-heading-light">
                <span class="r-text-blue">Innovate</span> <span class="r-text-secondary">alongside</span> Graphigem.
              </h3>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-normal">
                We enable your product to reach the customer with the help of our team's experiences of running
                successful businesses in their respective career journeys.
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-metrics></r-metrics>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row class="r-text-center" :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-dark r-border-none">
            <div class="r-mv-48">
              <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h3 class="r-heading-light r-text-blue r-text-uppercase">
                        Build a business that lasts long
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading">
                        <span class="r-text-primary">Everything</span> we do is based on <span class="r-text-blue"
                      >inclusion.</span>
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-normal">
                        As we envision a world where machines do more and more work that people used to do, our minds
                        naturally turn to those who would be displaced by technological advance.
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" class="r-text-left" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                    >
                      <a-card class="r-bg-blue-light">
                        <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                          <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                              <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                     :xs="{ span: 24}"
                              >
                                <r-avatar data-src="/images/content/illustration-13.svg" :size="120" class="r-avatar-auto"
                                ></r-avatar>
                              </a-col>
                              <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                     :xs="{ span: 24}"
                              >
                                <p class="r-text-medium r-text-blue">
                                  Define outcomes and align stakeholders.
                                </p>
                              </a-col>
                            </a-row>
                          </a-col>
                          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                                 class="r-text-left"
                          >
                            <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                              >
                                <h4 class="r-heading-light r-text-uppercase r-text-blue">
                                  Envision It
                                </h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                              >
                                <p class="r-text-normal r-text-dark">
                                  To solve any problem, you have to understand what the problem actually is. This is
                                  especially
                                  true
                                  of big, complex problems. To really understand a problem, you have to be crystal clear
                                  in your
                                  evaluation.
                                </p>
                              </a-col>
                            </a-row>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 6 }" :xs="{ span: 24}"
                    >
                      <a-card class="r-bg-blue-light">
                        <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                                 class="r-text-left"
                          >
                            <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                              >
                                <h4 class="r-heading-light r-text-uppercase r-text-secondary">
                                  Apply It
                                </h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                              >
                                <p class="r-text-normal r-text-dark">
                                  We don't take a brief, disappear, and then come back with brilliance. We go on a journey
                                  of
                                  exploration and discovery, take our clients with us, and together we come back with
                                  something
                                  everyone loves.
                                </p>
                              </a-col>
                            </a-row>
                          </a-col>
                          <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                              <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                     :xs="{ span: 24}"
                              >
                                <r-avatar data-src="/images/content/illustration-11.svg" :size="120" class="r-avatar-auto"
                                ></r-avatar>
                              </a-col>
                              <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                     :xs="{ span: 24}"
                              >
                                <p class="r-text-medium r-text-secondary">
                                  Pilot a set of enabling technologies
                                </p>
                              </a-col>
                            </a-row>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                    >
                      <a-card class="r-bg-blue-light">
                        <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                          <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-row :gutter="[12,12]" align="middle" justify="space-between" type="flex">
                              <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                     :xs="{ span: 24}"
                              >
                                <r-avatar data-src="/images/content/illustration-10.svg" :size="120" class="r-avatar-auto"
                                ></r-avatar>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                                     class="r-text-center"
                              >
                                <p class="r-text-medium r-text-green">
                                  Expand pilots to full desired scope.
                                </p>
                              </a-col>
                            </a-row>
                          </a-col>
                          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                                 class="r-text-left"
                          >
                            <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                              >
                                <h4 class="r-heading-light r-text-uppercase r-text-green">
                                  Evaluate It
                                </h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                              >
                                <p class="r-text-normal r-text-dark">
                                  Complex problems need diverse teams. We create teams with an unusual depth and breadth
                                  of
                                  expertise, so they can cover all angles on a problem, and find the best way through. Reciprocity works magic across all teams.
                                </p>
                              </a-col>
                            </a-row>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                    >
                      <a-card class="r-bg-blue-light">
                        <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                          <a-col :lg="{ span: 12 }" :md="{ span: 1126 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                                 class="r-text-left"
                          >
                            <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                              >
                                <h4 class="r-heading-light r-text-uppercase r-text-primary">
                                  Iterate It
                                </h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                              >
                                <p class="r-text-normal r-text-dark">
                                  Part of our job is to keep everyone moving. We get our projects moving. We keep our
                                  clients
                                  and partners moving. We keep ourselves motivated. The world doesn't stop; neither do we.
                                </p>
                              </a-col>
                            </a-row>
                          </a-col>
                          <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-row :gutter="[12,12]" align="middle" justify="space-between" type="flex">
                              <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                     :xs="{ span: 24}"
                              >
                                <r-avatar data-src="/images/content/illustration-12.svg" :size="120" class="r-avatar-auto"
                                ></r-avatar>
                              </a-col>
                              <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <p class="r-text-medium r-text-primary">
                                  Continually refine production solutions.
                                </p>
                              </a-col>
                            </a-row>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </div>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-testimonials></r-testimonials>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'single',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('base/onReviews', {})
  },
  data () {
    return {
      banner: 'art-01.png',
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
    onStoreTray () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'store'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
