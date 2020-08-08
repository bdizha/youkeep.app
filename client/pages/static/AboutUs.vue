<template>
  <r-page>
    <a-row type="flex" justify="center">
      <a-col class="gutter-row" :span="24">
        <div class="r-page-welcome r-bg-blue">
          <a-row type="flex" justify="center">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
              <a-row type="flex" justify="start" align="middle">
                <a-col class="r-padding-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ offset: 3, span: 9 }"
                       :lg="{ offset: 3, span: 9 }">
                  <r-space></r-space>
                  <a-row type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" s="r" :md="{ span: 24 }"
                           :lg="{ span: 16 }"
                           style="text-align: left;">
                      <h4 class="r-heading r-text-uppercase">
                        It's about you
                      </h4>
                      <h1 class="r-heading r-text-uppercase r-text-red">
                        A better way to shop.
                      </h1>
                    </a-col>
                  </a-row>
                  <a-row type="flex" justify="start">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                           style="text-align: left;">
                      <p class="r-text-normal">
                        We set out to build Kshop to give everyone the power to take back
                        control
                        of their day-to-day shopping experience.
                      </p>
                    </a-col>
                  </a-row>
                  <r-space></r-space>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
                  <div class="r-page-header-photo">
                    <div class="r-page-red"
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
             class="r-padding-48">
        <a-row type="flex" justify="start">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                 :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-row :gutter="[48,48]" type="flex" justify="start">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" s="r" :md="{ span: 24 }"
                     :lg="{ span: 24 }"
                     style="text-align: left;">
                <h2 class="r-heading r-text-uppercase r-text-red">
                  Take care of you
                </h2>
                <p class="r-text-normal">
                  Nice to know, we are Kshop, an online shopping service. We are the
                  only store in South Africa that is only online and entirely about other brands,
                  which means that our customers are at the
                  center of our business, in fact, we focus on our customers and how best we can serve
                  them.
                </p>
                <p class="r-text-normal">
                  We offer an advanced online shopping site that collects and supplies through private
                  shops and retail chains across the country, leveraging the short-term advantage.
                  Instead of
                  distant logistics centers, every customer receives a super fast delivery from a
                  shop
                  close to home that requires a short drive, while maintaining the highest level of
                  service
                  and quality.
                </p>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                &nbsp;
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <a-row :gutter="[48,48]" type="flex" justify="end" class="r-margin-vertical-48">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <h2 class="r-heading r-text-uppercase r-text-red">
              Our mission
            </h2>
            <p class="r-text-normal">
              Our mission is to provide our customers with the best service on the market.
              Our professional shoppers are waiting to choose you super cool and high quality
              products, our couriers are waiting to get you the shipment super fast and our
              customer
              service team is waiting to give you super personal and courteous service across many
              platforms. You just have to make a reservation at a super convenient and advanced
              interface,
              enjoy our super-worthy offers and your shopping experience with us.
            </p>
          </a-col>
        </a-row>
        <a-row class="r-margin-vertical-48" type="flex" justify="center">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
            <a-row :gutter="[48,48]" type="flex" justify="center">
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <h2 class="r-heading r-text-uppercase r-text-red">
                  We deliver upon your demand
                </h2>
                <p class="r-text-normal"> We do not store bread, vegetables and fruit in the shop
                  for
                  a few
                  days. Everything goes
                  directly from the farmer or baker to your plate. That is why you always get a fresh
                  guarantee on
                  our
                  fresh products. An additional advantage is that we do not waste food. When the Kshop
                  cash
                  register
                  closes at 22:00, baker Klaas Fuite knows exactly how many breads to bake for the
                  next
                  day. That
                  way
                  we never have to throw anything away. In this way we contribute to the environment
                  together and
                  we
                  keep prices low.</p>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <h2 class="r-heading r-text-uppercase r-text-red">
                  It's shopping time.
                </h2>
                <p class="r-text-normal">
                  In today's reality we have so many things to do, so many options on how to take the
                  time and
                  so little time to do it ... That's why we're happy to embrace any new service or
                  tool that
                  can help us be more efficient, more free, less troubled And less planned. Our goal
                  is to
                  help you make better use of your time, to do what you don't have to do for yourself
                  so you can make time for
                  the
                  really important thing. So winter clothing, toilet paper, food, home gadgets, but
                  also
                  kitchen and bedroom accessories.
                </p>
                <div class="r-divider"></div>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <h2 class="r-heading r-text-uppercase r-text-red">
                  Making sense, making value
                </h2>
                <p class="r-text-normal">
                  In September 2015, Kshop started in Midrand with four delivery vehicles.
                  There are
                  now about
                  100 cars driving around in more than 20 South African places. With hundreds of
                  thousands
                  of
                  customers
                  and a monthly expansion to new cities, Kshop was named the fastest growing
                  company in
                  South Africa in 2020.
                  Kshop thinks it can be done differently: faster, easier and cheaper. The idea is
                  simple. We
                  arrange
                  the shopping, so that you have more time for fun things. </p>
                <div class="r-divider"></div>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                     style="text-align: left;">
                <h2 class="r-heading r-text-uppercase r-text-red">
                  We believe in quality
                </h2>
                <p class="r-text-normal">
                  Online shopping is part of it, but there are more fun things to do. Yet we are often
                  in
                  the shops and we do more and more ourselves. We enter the fitting rooms at least 3
                  times just not to like the item we were trying.
                  We finally choose the most beautiful products with the best promise. We push our
                  trolleys around the different departments in our favourite stores,
                  chat with the shopping assistants, carry bags and wait in line for the cash
                  register.
                </p>
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
