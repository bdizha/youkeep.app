<template>
  <r-page>
    <a-row type="flex" justify="center">
      <a-col class="gutter-row" :span="24">
        <div class="r-page-welcome r-bg-primary">
          <a-row type="flex" justify="center">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
              <a-row type="flex" justify="start" align="middle">
                <a-col class="r-padding-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ offset: 3, span: 9 }"
                       :lg="{ offset: 3, span: 9 }">
                  <a-row type="flex" justify="start" align="middle">
                    <a-col class="r-padding-vertical-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                           style="text-align: left;">
                      <h4 class="r-heading">
                        For merchants
                      </h4>
                      <h1 class="r-heading">
                        <span class="r-text-secondary">Enable more buying customers and increase recurring orders with Shopple.</span>
                      </h1>
                      <p class="r-text-normal">
                        Maximize in-store impact with Shopple signage and online training for
                        retail associates.
                      </p>
                      <p class="r-text-normal">
                        We’ll ship you an activation kit to promote Shopple in-store.
                      </p>
                    </a-col>
                  </a-row>
                  <a-row type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 20 }"
                           :lg="{ span: 18 }">
                      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                               :md="{ span: 12 }"
                               :lg="{ span: 12 }">
                          <a-button @click="onModal('merchant')" class="r-btn-secondary"
                                    block
                                    type="secondary"
                                    size='default'>
                            Apply now
                          </a-button>
                        </a-col>
                        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                               :md="{ span: 12 }"
                               :lg="{ span: 12 }">
                          <a-button @click="onModal('store')" class="r-btn-bordered-secondary"
                                    block
                                    type="secondary"
                                    size='default'>
                            Shop directory
                          </a-button>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                  <r-space size="24"></r-space>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
                  <div class="r-page-header-photo">
                    <div class="r-page-white"
                         style="background-image: url('/images/art-04.png')">
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
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
        <a-row type="flex" justify="start"
               class="r-radius-right-white r-text-center">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18, offset:6 }"
                 :lg="{span: 18, offset:6}" class="r-padding-48">
            <a-row class="r-margin-vertical-24" type="flex" justify="start" align="middle">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                     :lg="{ span: 24 }"
                     style="text-align: left;">
                <h4 class="r-heading-light">
                  Customers want to buy more of your products. And now they've a more
                  flexible
                  shopping option with Shopple
                </h4>
              </a-col>
            </a-row>
            <a-row :gutter="[24,24]" type="flex" justify="start"
                   class="r-radius-right-white">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                     :lg="{span: 8}">
                <div class="r-icon">
                  <a-icon type="line-chart"/>
                </div>
                <h4 class="r-heading">
                  Increase your conversion rate by 24%
                </h4>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                     :lg="{span: 8}">
                <div class="r-icon">
                  <a-icon type="pie-chart"/>
                </div>
                <h4 class="r-heading">
                  Increase returning orders by 75%
                </h4>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                     :lg="{span: 8}">
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
    <r-steps :has-wave="false" :has-title="true" heading="Shopple shopping experience"></r-steps>
    <a-row class="r-text-center" type="flex" justify="center">
      <a-col class="r-padding-48" :xs="{ span: 24 }" :md="{ span: 24 }"
             :lg="{ span: 24 }">
        <a-row type="flex" justify="center">
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }" class="r-padding-vertical-48">
            <h2 class="r-heading r-text-secondary">
              Become a verified merchant today
            </h2>
            <p class="r-text-normal">
              Join the Shopple Merchant Program and start promoting Shopple in-store today and watch your
              sales run wild!
            </p>
          </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle">
          <a-col class="r-padding-bottom-48" :xs="{ span: 24 }" :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-button @click="onModal('merchant')" size="default" type="secondary">
              Become a merchant
            </a-button>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-resource',
  props: {},
  data() {
    return {}
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
  methods: {
    onModal(current) {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = current;

      this.$store.dispatch('base/onModal', modal);
    }
  },
};
</script>
