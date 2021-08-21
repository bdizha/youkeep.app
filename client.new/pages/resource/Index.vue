<template>
  <r-page>
    <a-row justify="center" type="flex">
      <a-col :span="24" class="gutter-row">
        <div class="r-page-welcome r-bg-primary">
          <a-row justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row align="middle" justify="start" type="flex">
                <a-col :lg="{ offset: 3, span: 9 }" :md="{ offset: 3, span: 9 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                       class="r-padding-48"
                >
                  <a-row align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                           class="r-padding-vertical-48"
                           style="text-align: left;"
                    >
                      <h4 class="r-heading">
                        For sellers
                      </h4>
                      <h1 class="r-heading">
                        <span class="r-text-secondary">Enable more buying customers and increase recurring orders with Spazamall.</span>
                      </h1>
                      <p class="r-text-normal">
                        Maximize in-store impact with Spazamall signage and online training for
                        retail associates.
                      </p>
                      <p class="r-text-normal">
                        We’ll ship you an activation kit to promote Spazamall online.
                      </p>
                    </a-col>
                  </a-row>
                  <a-row align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 18 }" :md="{ span: 20 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                               :xs="{ span: 24 }"
                               class="gutter-row"
                        >
                          <a-button block class="r-btn-secondary"
                                    size="default"
                                    type="secondary"
                                    @click="onModal('seller')"
                          >
                            Apply now
                          </a-button>
                        </a-col>
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                               :xs="{ span: 24 }"
                               class="gutter-row"
                        >
                          <a-button block class="r-btn-bordered-secondary"
                                    size="default"
                                    type="secondary"
                                    @click="onModal('store')"
                          >
                            Shop directory
                          </a-button>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                  <r-space size="24"></r-space>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <div class="r-page-header-photo">
                    <div class="r-page-white"
                         style="background-image: url('/images/art-04.png')"
                    >
                    </div>
                  </div>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
    <a-row class="r-margin-vertical-48" type="flex">
      <a-col :lg="{span: 12}" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <a-row class="r-radius-right-white r-text-center" justify="start"
               type="flex"
        >
          <a-col :lg="{span: 18, offset:6}" :md="{ span: 18, offset:6 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }" class="r-padding-48"
          >
            <a-row align="middle" class="r-margin-vertical-24" justify="start" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
                     style="text-align: left;"
              >
                <h4 class="r-heading-light">
                  Customers want to buy more of your products. And now they've a more
                  flexible
                  shopping option with Spazamall
                </h4>
              </a-col>
            </a-row>
            <a-row :gutter="[24,24]" class="r-radius-right-white" justify="start"
                   type="flex"
            >
              <a-col :lg="{span: 8}" :md="{ span: 8 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <div class="r-icon">
                  <a-icon type="line-chart"/>
                </div>
                <h4 class="r-heading">
                  Increase your conversion rate by 24%
                </h4>
              </a-col>
              <a-col :lg="{span: 8}" :md="{ span: 8 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <div class="r-icon">
                  <a-icon type="pie-chart"/>
                </div>
                <h4 class="r-heading">
                  Increase returning orders by 75%
                </h4>
              </a-col>
              <a-col :lg="{span: 8}" :md="{ span: 8 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <div class="r-icon">
                  <a-icon type="dot-chart"/>
                </div>
                <h4 class="r-heading">
                  Increase sales volume by at least 36%
                </h4>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <r-steps :has-title="true" :has-wave="false" heading="Spazamall shopping experience"></r-steps>
    <a-row class="r-text-center" justify="center" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24 }"
             class="r-padding-48"
      >
        <a-row justify="center" type="flex">
          <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 24 }" class="r-padding-vertical-48">
            <h2 class="r-heading r-text-secondary">
              Become a verified seller today
            </h2>
            <p class="r-text-normal">
              Join the Spazamall Seller Program and start promoting Spazamall online today and watch your
              sales run wild!
            </p>
          </a-col>
        </a-row>
        <a-row align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :xs="{ span: 24 }"
                 class="r-padding-bottom-48"
          >
            <a-button size="large" type="secondary" @click="onModal('seller')">
              Become a Seller
            </a-button>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-resource',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
  methods: {
    onModal (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
