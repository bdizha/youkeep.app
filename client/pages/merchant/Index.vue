<template>
  <r-page>
    <a-row type="flex" justify="center" align="middle">
      <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <h2 class="r-heading">
                Become a verified merchant today
              </h2>
              <p class="r-text-normal">
                Join the Shopple Merchant Program and start promoting Shopple in-store today and watch your
                sales run wild!
              </p>
              <a-row type="flex" justify="start">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                       style="text-align: left;">
                  <a-button @click="onModal('merchant')"
                            class="r-btn-secondary r-margin-top-24"
                            size="large" type="secondary">
                    Become a merchant
                  </a-button>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <div class="r-page-header-photo">
                <div class="r-page-primary"
                     style="background-image: url('/images/shopper.jpg')">
                </div>
              </div>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
    <a-row type="flex" justify="start">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
             class="r-p-48">
        <a-row :gutter="[48,48]" type="flex" justify="space-between">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                 :lg="{ span: 24 }"
                 style="text-align: left;">
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <div class="r-icon">
                    <a-icon type="line-chart"/>
                  </div>
                  <h4 class="r-heading">
                    Increase your conversion rate by 24%
                  </h4>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <div class="r-icon">
                    <a-icon type="pie-chart"/>
                  </div>
                  <h4 class="r-heading">
                    Increase returning orders by 75%
                  </h4>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <div class="r-icon">
                    <a-icon type="dot-chart"/>
                  </div>
                  <h4 class="r-heading">
                    Increase sales volume by at least 36%
                  </h4>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
        </a-row>
        <a-row :gutter="[48,48]" type="flex" justify="space-between">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                 :lg="{ span: 24 }"
                 style="text-align: left;">
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <h4 class="r-heading">
                    Benefits for merchant
                  </h4>
                  <h1 class="r-heading">
                    <span class="r-text-secondary"></span>
                  </h1>
                  <ul>
                    <li>
                      <p class="r-text-normal">
                        Enable more buying customers and increase recurring orders with Shopple.
                      </p>
                    </li>
                    <li>
                      <p class="r-text-normal">
                        Enable more buying customers and increase recurring orders with Shopple.
                      </p>
                    </li>
                    <li>
                      <p class="r-text-normal">
                        Maximize in-store impact with Shopple signage and online training for
                        retail associates.
                      </p>
                    </li>
                    <li>
                      <p class="r-text-normal">
                        We’ll ship you an activation kit to promote Shopple in-store.
                      </p>
                    </li>
                  </ul>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <h4 class="r-heading">
                    Want to start making more sells with Shopple?
                  </h4>
                  <p class="r-text-normal">
                    Apply to be a Shopple Merchant today and start achieving your goals.
                  </p>
                  <a-row type="flex" justify="center" align="middle">
                    <a-col :xs="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                      <a-button @click="onModal" size="large" type="secondary">
                        Become a merchant
                      </a-button>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <div class="r-icon">
                    <a-icon type="dot-chart"/>
                  </div>
                  <h4 class="r-heading">
                    Making sense, making value
                  </h4>
                  <p class="r-text-normal">
                    Customers want to buy more of your products. And now they've a more
                    flexible
                    shopping option with Shopple
                  </p>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <r-steps :has-wave="false" :has-title="true" heading="Shopple shopping experience"></r-steps>
    <r-merchant-modal></r-merchant-modal>
  </r-page>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-merchant',
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
