<template>
  <r-page>
    <a-row :gutter="[{ md: 24, lg: 48 },{xs:24, sm:24, md: 24, lg: 48 }]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <h2 class="r-heading">
                Become a verified merchant today
              </h2>
              <p class="r-text-normal">
                Join the Shopple Merchant Program and start promoting Shopple in-store today and watch your
                sales run wild!
              </p><br />
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
        <a-card class="">
          <a-card-meta>
            <template slot="description">
              <r-slider :images="images"></r-slider>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" type="flex" justify="start">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
        <a-row :gutter="[{ md: 24, lg: 48 },{xs:24, sm:24, md: 24, lg: 48 }]" type="flex" justify="start">
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card class="">
              <a-card-meta>
                <template slot="description">
                  <a-row :gutter="[{ md: 24, lg: 48 },{xs:24, sm:24, md: 24, lg: 48 }]" type="flex" justify="center" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
                      <div class="r-icon">
                        <a-icon type="line-chart"/>
                      </div>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
                      <h4 class="r-heading">
                        Increase your conversion rate by 24%
                      </h4>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card class="">
              <a-card-meta>
                <template slot="description">
                  <a-row :gutter="[{ md: 24, lg: 48 },{xs:24, sm:24, md: 24, lg: 48 }]" type="flex" justify="center" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
                      <div class="r-icon">
                        <a-icon type="pie-chart"/>
                      </div>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
                      <h4 class="r-heading">
                        Increase returning orders by 75%
                      </h4>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card class="">
              <a-card-meta>
                <template slot="description">
                  <a-row :gutter="[{ md: 24, lg: 48 },{xs:24, sm:24, md: 24, lg: 48 }]" type="flex" justify="center" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
                      <div class="r-icon">
                        <a-icon type="dot-chart"/>
                      </div>
                    </a-col>
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
                      <h4 class="r-heading">
                        Increase sales volume by at least 36%
                      </h4>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col class="r-hide-sm" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card class="">
              <a-card-meta>
                <template slot="description">
                  <h4 class="r-heading">
                    Want to start making more sells with Shopple?
                  </h4>
                  <p class="r-text-normal">
                    Apply to be a Shopple Merchant today and start achieving your goals.
                  </p><br />
              <a-row type="flex" justify="center" align="middle">
                    <a-col :xs="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                      <a-button @click="onModal" class="r-btn-secondary"
                                size="large"
                                type="secondary">
                        Become a merchant
                      </a-button>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>

          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card class="">
              <a-card-meta>
                <template slot="description">
                  <h2 class="r-heading">
                    Benefits for merchant
                  </h2>
                  <p class="r-text-normal">
                    <a-icon type="check-circle" class="r-text-secondary"/>
                    Enable more buying customers and increase recurring orders with Shopple.
                  </p>
                  <p class="r-text-normal">
                    <a-icon type="check-circle" class="r-text-secondary"/>
                    Enable more buying customers and increase recurring orders with Shopple.
                  </p>
                  <p class="r-text-normal">
                    <a-icon type="check-circle" class="r-text-secondary"/>
                    Maximize in-store impact with Shopple signage and online training for
                    retail associates.
                  </p>
                  <p class="r-text-normal">
                    <a-icon type="check-circle" class="r-text-secondary"/>
                    We’ll ship you an activation kit to promote Shopple in-store.
                  </p>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <r-steps :has-wave="false" :has-title="true" heading="Shopple shopping experience"></r-steps>
  </r-page>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-merchant',
  props: {},
  data() {
    return {
      images: [
        'merchant-01.jpeg',
        'customer-01.jpeg',
        'paise-01.jpeg',
        'about-01.jpeg',
      ],
    }
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
