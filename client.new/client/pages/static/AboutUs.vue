<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-card class="r-bg-whiter-pull-h-24 r-border-none r-card-r-128">
        <div class="r-mv-48">
          <a-row :gutter="[96,48]" justify="start" align="middle" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                       :xs="{ span: 24}"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">

                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading-light r-text-primary r-text-uppercase">
                            It's not about us
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading r-text-secondary">
                            Driving small business success in Africa.
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-medium r-text-dark">
                            We put brands back in charge of their ecommerce journey and their customer relationships, and give them the power to grow.
                          </p>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal r-text-dark">
                            We're on a mission to make
                            end-to-end ecommerce capabilities
                            <span class="r-text-primary">accessible</span> and
                            <span class="r-text-secondary">affordable</span> to the masses.
                            A lack of cost effective and customer-centric merchant tools is one of the biggest problems affecting today's African sellers.
                          </p>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
            <a-col style="z-index: 1000" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <nuxt-img quality="100" width="600" height="600"
                        src="/assets/about-us.svg"
              ></nuxt-img>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-values></r-values>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-contact-us></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
export default {
  layout: 'default',
  name: 'r-about-us',
  props: {},
  data () {
    return {
      promises: [
        {
          title: 'We love brands',
          content: 'You’re unique and your businesses should be too. We help match your product to reliable and established property developers that fit your capital return goals . ',
          theme: 'secondary',
          textTheme: 'primary'
        },
        {
          title: 'We think beyond the box',
          content: 'Simplify to make better informed decisions while you accelerate your innovation pace. Technology transformation keeps shifting and we keep re-inventing.',
          theme: 'primary',
          textTheme: 'secondary'
        },
        {
          title: 'We don\'t give up',
          content: 'We provide high-quality solutions that are essential to your investment growth trajectory, and the freedom to reach out to our investment advisers more effectively.',
          theme: 'dark',
          textTheme: 'primary'
        },
        {
          title: 'We speak up',
          content: 'We explore new ideas and discover creative solutions. We think openly about how to serve brands and solve problems. No one expected this to be easy. We are resilient—we dig in and keep going.',
          theme: 'dark',
          textTheme: 'primary'
        }
      ]
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {
    getBgClass (theme) {
      return `r-bg-${theme}`
    },
    getTextClass (theme) {
      return `r-text-${theme}`
    }
  }
}
</script>
