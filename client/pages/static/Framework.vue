<template>
  <div>
    <r-page>
      <a-row align="middle" justify="center" type="flex">
        <a-col :span="24">
          <a-row align="middle" justify="space-around" type="flex">
            <a-col :lg="{span: 9 , offset: 3}" class="r-page-padding">
              <h1 class="r-heading">
                <span class="r-text-secondary">Graphigem Framework</span>
              </h1>
              <h2 class="r-heading r-text-secondary">
               Envision
              </h2>
            </a-col>
            <a-col :lg="{span: 12}" :xs="{span: 24}" class="r-p-lg-48" style="position: relative;">
              <div class="r-page-header-photo r-page-art-primary">
                <img alt="Couple orders online" src="/images/Graphigem/about-us.jpg">
              </div>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
      <a-row class="r-mv-48">
        <a-col :lg="{span: 12}">
          <a-row align="middle" class="r-radius-right-white"
                 justify="space-around" type="flex"
          >
            <a-col :lg="{span: 18 , offset: 6}" class="r-page-padding">
              <h2 class="r-heading r-text-secondary">
                Customer Centric
              </h2>
              <p class="r-text-normal">
                Nice to know, we are Graphigem, an online supermakert service. We are the
                only store in South Africa that is only online, which means that our customers are at
                the
                center of our business, in fact, we focus on our customers and how best we can serve
                them.
              </p>
              <p class="r-text-normal">
                We offer an advanced online business site that collects and supplies through private
                shops and chains across the country, leveraging the short-term advantage. Instead
                of
                distant logistics centers, every customer receives a super fast delivery from a
                shop
                close to home that requires a short drive, while maintaining the highest level of
                service
                and quality.
              </p>
              <p class="r-text-normal">
                Our mission is to provide our customers with the best service on the market.
                Our professional shoppers are waiting to choose you super fresh and high quality
                products, our couriers are waiting to get you the shipment super fast and our customer
                service team is waiting to give you super personal and courteous service across many
                platforms. You just have to make a reservation at a super convenient and advanced
                interface,
                enjoy our super-worthy offers and your business experience with us.
              </p>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
      <a-row align="middle" class="r-mv-48" justify="space-around" type="flex">
        <a-col :lg="{span: 12}" class="r-radius-right-white">
          <a-row align="middle" justify="space-around" type="flex">
            <a-col :lg="{span: 18 , offset: 6}" class="r-page-padding">
              <h2 class="r-heading r-text-secondary">
                Apply
              </h2>
              <h2 class="r-heading r-text-secondary">
                Evalute
              </h2>
              <p class="r-text-normal">
                online business is part of it, but there are more fun things to do. Yet we are often in
                the
                shop and we do more and more ourselves. We fill the cart, select the most
                beautiful
                vegetables with the best date. We scan ourselves, weigh fruit, carry bags and wait in
                line for
                the
                cash register.
              </p>
              <p class="r-text-normal">
                Graphigem thinks it can be done differently: faster, easier and cheaper. The idea is
                simple. We
                arrange
                the business, so that you have more time for fun things. At Graphigem you can order all
                business
                within a few minutes. So toilet paper, fresh, chips and ice cream, but also organic
                eggs, tender
                steak and fresh vegetables.</p>
              <h2 class="r-heading r-text-secondary">
                It's always saving time!
              </h2>
              <p class="r-text-normal">
                In today's reality we have so many things to do, so many options on how to take the time
                and
                so little time to do it ... That's why we're happy to embrace any new service or tool
                that
                can help us be more efficient, more free, less troubled And less planned. Our goal is to
                help you make better use of your time, no matter if you want to be planned or stay
                spontaneous, to do what you don't have to do for yourself so you can make time for the
                really important thing
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{span: 12}">
          <div class="r-page-photo-bg" style="padding-bottom: calc(100% / (16 / 9));">
            <div class="r-page-header-abs"
                 style="background: url(/images/steps/red/step-02.svg) no-repeat;"
            >
            </div>
          </div>
        </a-col>
      </a-row>
    </r-page>
  </div>
</template>
<script>
export default {
  props: {},
  data () {
    return {
      modal: {
        current: null,
        message: null,
      },
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {},
}
</script>
