<template>
  <r-page>
    <a-row type="flex" justify="center">
      <a-col class="gutter-row" :span="24">
        <div class="r-page-welcome r-bg-blue">
          <a-row type="flex" justify="center">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
              <a-row type="flex" justify="start" align="middle">
                <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ offset: 3, span: 9 }"
                       :lg="{ offset: 3, span: 9 }">
                  <r-space></r-space>
                  <a-row type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" s="r" :md="{ span: 24 }"
                           :lg="{ span: 16 }"
                           style="text-align: left;">
                      <h4 class="r-heading-light r-text-uppercase">
                        It's about you
                      </h4>
                      <h1 class="r-heading r-text-uppercase r-text-primary">
                        A better way to shop
                      </h1>
                    </a-col>
                  </a-row>
                  <a-row type="flex" justify="start">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                           style="text-align: left;">
                      <p class="r-text-normal">
                        We set out to build Owami to give everyone the power to take back
                        control
                        of their day-to-day shopping experience.
                      </p>
                    </a-col>
                  </a-row>
                  <r-space></r-space>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
                  <div class="r-page-header-photo">
                    <div class="r-page-primary"
                         style="background-image: url('/images/welcome.jpg')">
                    </div>
                  </div>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
    <a-row type="flex" justify="center">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }" :lg="{ span: 18 }"
             class="r-p-48">
        <a-row type="flex" justify="start">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                 :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-row :gutter="[48,48]" type="flex" justify="start">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" s="r" :md="{ span: 24 }"
                     :lg="{ span: 24 }"
                     style="text-align: left;">
                <h2 class="r-heading r-text-uppercase r-text-primary">
                  It's shopping time!
                </h2>
                <p class="r-text-normal">
                  Nice to know, we are Owami, an online shopping service. We are the
                  only store in South Africa that is only online and entirely about other brands,
                  which means that our customers are at the
                  center of our business, in fact, we put the first on our customers and how best we can serve
                  them.
                </p>
                <p class="r-text-normal">
                  We offer an advanced online shopping platform that collects and supplies through private
                  shops and retail chains across the world, leveraging the short-term advantage.
                  Instead of independent shoppers, every customer receives a super fast delivery from a
                  shop close to home that requires a short drive, while maintaining the highest level of
                  service and quality.
                </p>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                &nbsp;
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <a-row :gutter="[48,48]" type="flex" justify="end" class="r-mv-48">
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
              Our mission is to provide our customers with the best service on the market.
              Our professional shoppers are waiting to choose you high quality
              products, our couriers are waiting to bring your delivery super fast and our
              customer service team is waiting to give you highly personalized and courteous service across many
              platforms.
            </p>
          </a-col>
        </a-row>
        <a-row class="r-mv-48" type="flex" justify="center">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
            <a-row :gutter="[48,48]" type="flex" justify="center">
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <h2 class="r-heading r-text-uppercase r-text-primary">
                  Quality
                </h2>
                <p class="r-text-normal">
                  Online shopping experience is part of it, but there are more fun things to do. Yet we are often
                  in
                  the shops and we do more and more ourselves. We enter the fitting rooms at least 3
                  times just not to like the item we're trying. Almost by chance, we finally choose the most beautiful
                  products with the best promise. We push our
                  trolleys around the different departments in our favourite stores,
                  chat with the shopping assistants, carry bags and wait in line for the cash
                  register.
                </p>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <h2 class="r-heading r-text-uppercase r-text-primary">
                  Craftsmanship
                </h2>
                <h3 class="r-heading-light">
                  We deliver upon your demand
                </h3>
                <p class="r-text-normal">
                  You just have to make a reservation at a super convenient and rich
                  interface,
                  enjoy our instant offers and your shopping experience with us.

                  We do not warehouse any product that we sell on our platforms. We use an on demand supply mechanism
                  such trhat everything goes
                  directly from the store or restaurant to your doorstep. That is why you always get a better service on
                  our shopping experience.
                  An additional advantage is that we do not energy resources. When
                  cash
                  register
                  closes at 00:00am, shopper Owami knows exactly how many orders to prepare for the
                  next
                  day. That way
                  we never have to waste time delivering your order. In this way we contribute to the environment
                  together, create new job opportunities and we drive prices low.</p>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <h2 class="r-heading r-text-uppercase r-text-primary">
                  Making sense, making value
                </h2>
                <p class="r-text-normal">
                  In September 2015, Owami was started in with 18 shoppers and 12 delivery vehicles.
                  There are
                  now about
                  2000 shoppers driving around in more than 20 South African areas. With hundreds of
                  thousands
                  of
                  customers
                  and a monthly expansion to new cities, Owami was named the fastest growing retail platform
                  company in
                  South Africa in 2020.
                  Owami thinks it can be done differently: faster, easier and cheaper. The idea is
                  simple. We
                  arrange
                  the shopping, so that you have more time for fun things. </p>
                <div class="r-divider"></div>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <p class="r-text-normal"></p>
                <div class="r-divider"></div>
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
