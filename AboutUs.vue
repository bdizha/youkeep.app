<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-secondary r-pull-h-24 r-border-none">
            <div class="r-mv-96">
              <a-row :gutter="[48,48]" justify="center" type="flex">
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading-light r-text-uppercase">
                            Our mission
                          </h4>
                        </a-col>
                        <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <div
                            style="width: 176px; height: 176px;display: block; background: #FFFFFF; position:relative; overflow: hidden; border-top-right-radius: 50%;"
                          >
                            <div class="r-diamond"></div>
                            <div class="r-diamond" style="left: 96px;"></div>
                            <div class="r-diamond" style="top: 96px;"></div>
                            <div class="diagonal-01"></div>
                            <div class="diagonal-02"></div>
                          </div>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading">
                            We're unlocking <span class="r-text-primary">human</span> potential around the world.
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-medium">
                            Our goal is to make business financing accessible and adaptable to changing business
                            objectives
                            and help
                            steer long lasting growth for the merchants we support.
                          </p>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            We're 100% committed to providing brands of all sizes with on-demand credit lines.
                          </p>
                        </a-col>
                      </a-row>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <r-avatar data-src="/assets/asset-flower-02.svg" :size="300"
                                class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </div>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-card class="r-bg-white r-pull-h-24 r-border-none">
            <div class="r-mv-96">
              <a-row :gutter="[48,48]" justify="center" type="flex">
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-primary">
                        <div class="r-mv-48">
                          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h4 class="r-heading-light r-text-uppercase">
                                Our story
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h2 class="r-heading">
                                <span class="r-text-secondary">Problem:</span> old chicken and egg
                              </h2>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-medium">
                                In 2020 we realised that really accessible and adaptable business credit lines were out
                                of
                                reach
                                to
                                those who needed it most. Which seemed quite counterintuitive and unfair.
                              </p>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-normal">
                                It didn't make sense to us that accessing business financing was an exclusive commodity.
                                So,
                                we
                                brought
                                together powerful minds from some of the world’s most highly regarded organisations, to
                                help businesses break down the barriers that were preventing them from unlocking their
                                growth
                                potential.
                              </p>
                            </a-col>
                          </a-row>
                        </div>
                      </a-card>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-secondary">
                        <div class="r-mv-48">
                          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h4 class="r-heading-light r-text-uppercase">
                                Our vision
                              </h4>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h2 class="r-heading">
                                <span class="r-text-primary">Solution:</span> on-demand financing
                              </h2>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-medium">
                                The game had to change at last. Zerosum partners with mostly small businesses in a fair
                                and
                                equitable process to avoid the pitfalls that can hamper their
                                growth.
                              </p>
                            </a-col>
                            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <p class="r-text-normal">
                                We're supporting fledgling and growing merchants “unlock growth” by giving them access
                                to
                                affordable credit lines so they can improve cash flow and drive sales.
                                With a friendly fee based on length of financing, we can financing fledgling businesses
                                up to
                                a
                                full year of revenue upfront within 48 hours of applying.
                              </p>
                            </a-col>
                          </a-row>
                        </div>
                      </a-card>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </div>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-values></r-values>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us title="Get the freedom to grow with Zerosum."></r-contact-us>
    </a-col>
  </a-row>
</template>
<style>
.r-diamond {
  position: absolute;
  width: 80px;
  height: 80px;
  left: auto;
  right: auto;
  bottom: auto;
  top: auto;
  background: #00C2FF;
}

.r-diamond:first-child {
  background: #00C2FF;
}

.r-diamond:nth-child(2) {
  background: #d9af57;
}

.diagonal-01 {
  background: #FFFFFF;
  position: absolute;
  width: 16px;
  height: 300px;
  left: 66px;
  right: auto;
  bottom: -49px;
  top: auto;
  transform: rotate(-45deg);
}

.diagonal-02 {
  background: #FFFFFF;
  position: absolute;
  width: 16px;
  height: 300px;
  left: 91px;
  right: auto;
  bottom: auto;
  top: -74px;
  transform: rotate(45deg);
}

.arrow-up {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid black;
}

.arrow-down {
  width: 0;
  height: 0;
  border-left: 40px solid transparent;
  border-right: 40px solid transparent;

  border-top: 40px solid #00C2FF;
}

.arrow-right {
  width: 0;
  height: 0;
  border-top: 40px solid transparent;
  border-bottom: 40px solid transparent;

  border-left: 40px solid #00C2FF;
}

.arrow-left {
  width: 0;
  height: 0;
  border-top: 40px solid transparent;
  border-bottom: 40px solid transparent;
  border-right: 40px solid #d9af57;
}
</style>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('content/onTestimonials', {})
  },
  data () {
    return {
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
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
