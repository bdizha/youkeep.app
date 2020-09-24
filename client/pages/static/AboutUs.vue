<template>
  <r-page>
    <a-row type="flex" justify="center">
      <a-col class="gutter-row" :span="24">
        <div class="r-page-welcome r-bg-blue">
          <a-row type="flex" justify="start" align="middle">
            <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                   :md="{ span: 12 }"
                   :lg="{ span: 12 }">
              <a-row type="flex" justify="start" align="middle">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" s="r" :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                       style="text-align: left;">
                  <a-card hoverable>
                    <a-card-meta>
                      <template slot="description">
                        <h4 class="r-heading-light r-text-uppercase">
                          It's about you
                        </h4>
                        <h1 class="r-heading r-text-uppercase r-text-primary">
                          A better way to shop
                        </h1>
                        <p class="r-text-normal">
                          We set out to build Shopple to give everyone the power to take back
                          control of their day-to-day shopping experience. Your shopping assistants are waiting to
                          choose you high quality
                          products and bring them right to your doorstep for a considerably small service fee/tip.
                        </p>
                      </template>
                    </a-card-meta>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
              <div class="r-page-header-photo">
                <div class="r-page-primary"
                     style="background-image: url('/images/welcome.jpg')">
                </div>
              </div>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
    <a-row type="flex" justify="start" class="r-mv-48">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <h2 class="r-heading r-text-uppercase r-text-primary">
          Our mission
        </h2>
        <p class="r-text-normal">
          To provide our customers with a dynamic and adaptive shopping service on the market.
        </p>
      </a-col>
    </a-row>
    <a-row type="flex" justify="start">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
             class="r-p-48">
        <a-row type="flex" justify="center">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
            <a-row :gutter="[48,48]" type="flex" justify="center">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                     :lg="{ span: 12 }"
                     style="text-align: left;">
                <a-card hoverable>
                  <a-card-meta>
                    <template slot="description">
                      <h2 class="r-heading r-text-uppercase r-text-primary">
                        It's shopping time!
                      </h2>
                      <p class="r-text-normal">
                        We offer an advanced online shopping platform that collects and supplies through private
                        shops and retail chains across the world, leveraging the short-term advantage.
                        Instead of independent shoppers, every customer receives a super fast delivery from a
                        shop close to home that requires a short drive, while maintaining the highest level of
                        service and quality.
                      </p>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                &nbsp;
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
                      <h2 class="r-heading r-text-uppercase r-text-primary">
                        Quality
                      </h2>
                      <p class="r-text-normal">
                        Online shopping experience is part of it, but there are more fun things to do. Yet we are often
                        in
                        the shops and we do more and more ourselves. We enter the fitting rooms at least 3
                        times just not to like the item we're trying. Almost by chance, we finally choose the most
                        beautiful
                        products with the best promise. We push our
                        trolleys around the different departments in our favourite stores,
                        chat with the shopping assistants, carry bags and wait in line for the cash
                        register.
                      </p>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <a-card hoverable>
                  <a-card-meta>
                    <template slot="description">
                      <h2 class="r-heading r-text-uppercase r-text-primary">
                        Craftsmanship
                      </h2>
                      <p class="r-text-normal">
                        You just have to make a reservation at a super convenient and rich
                        interface,
                        enjoy our instant offers and your shopping experience with us.

                        We do not warehouse any product that we sell on our platforms. We use an on demand supply
                        mechanism
                        such trhat everything goes
                        directly from the store or restaurant to your doorstep. That is why you always get a better
                        service on
                        our shopping experience.</p>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                &nbsp;
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
                      <h2 class="r-heading r-text-uppercase r-text-primary">
                        Making sense
                      </h2>
                      <p class="r-text-normal">
                        We promise to deliver on demand at your home comfort. We're only able to achieve this great service because of the great people that make this possible. We've shoppers in every city where we're partnered with local retailers. We're constantly expanding and if we aren't in your area yet, chances are high that will be there soon.</p>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
            </a-row>
            <a-row :gutter="[48,48]" type="flex" justify="center">
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <a-card hoverable>
                  <a-card-meta>
                    <template slot="description">
                      <h2 class="r-heading r-text-uppercase r-text-primary">
                        Making value
                      </h2>
                      <p class="r-text-normal">With hundreds of
                        thousands
                        of
                        customers
                        and a monthly expansion to new cities, Shopple was named the fastest growing retail platform
                        company in
                        South Africa in 2020.
                        Shopple thinks it can be done differently: faster, easier and cheaper. The idea is
                        simple. We
                        arrange
                        the shopping, so that you have more time for fun things.</p>
                    </template>
                  </a-card-meta>
                </a-card>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                &nbsp;
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
export default {
  layout: 'page',
  name: 'r-about-us',
  props: {},
  data() {
    return {
      modal: {
        current: null,
        message: null,
      },
    }
  },
  mounted() {
    this.modal = this.$store.state.modal;
  },
  methods: {},
};
</script>
