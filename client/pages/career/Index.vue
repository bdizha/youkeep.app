<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-dark r-pull-h-24 r-border-none">
            <div class="r-mv-48">
              <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[48,48]" align="middle" justify="end" type="flex">
                    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading-light r-text-uppercase">
                            Work with us
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading">
                            A place where <span class="r-text-secondary">technology</span> meets <span
                            class="r-text-primary"
                          >business</span> excellence.
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-medium">
                            Changing how people experience business growth and gain access to capital is just getting
                            started.
                          </p>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            Youkeep empowers the whole startup experience for businesses in Africa. We specialize in
                            B2B payments, coupled with marketplace services focused on delivering a customer
                            experience of unparalleled quality.
                            No great solution is developed in a vacuum. Experience and domain knowledge is crucial.
                          </p>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <r-avatar data-src="/assets/asset-06.svg" :size="300" class="r-avatar-block"
                  ></r-avatar>
                </a-col>
              </a-row>
            </div>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
          <r-values></r-values>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col v-for="(sense, index) in senses"
               :key="index"
               :lg="{ span: 12 }" :md="{ span: 12 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h4 class="r-heading-light r-text-uppercase">
                  {{ sense.title }}
                </h4>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h4 class="r-heading" v-html="sense.heading">
                </h4>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-normal" v-html="sense.content">
                </p>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-contact-us title="You want to help us transform the B2B sellers' marketplace?"></r-contact-us>
    </a-col>
  </a-row>
</template>
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
      banner: 'art-01.svg',
      senses: [
        {
          title: 'Innovative',
          heading: 'Transforming the way business is <span class="r-text-primary">experienced</span> online',
          content: ' If you take innovation passionately, then you\'re in the right place.\n' +
            '                  Youkeep is a shopper centric platform that transforms\n' +
            '                  the way shoppers experience their business.'
        },
        {
          title: 'Dynamic',
          heading: 'Together, we can <span class="r-text-secondary">change</span> the world for the better',
          content: 'It\'s all about giving back our shoppers the control of their business.\n' +
            '                  At Youkeep, we are building a business experience that helps millions of people be\n' +
            '                  in control of their business experience.'
        },
        {
          title: 'Progressive',
          heading: 'We <span class="r-text-secondary">celebrate</span> mistakes and doing more experiments',
          content: 'You want to create bright ideas, achieve great work & cash out.\n' +
            '                  We use the latest technologies to solve problems (AI, Graphical Data Tool Sets). Customer\n' +
            '                  satisfaction\n' +
            '                  comes first, create products which users love.'
        },
        {
          title: 'Collaborative',
          heading: 'Youkeep as a specialist house with a <span class="r-text-orange">diverse</span>\n' +
            '                  team',
          content: 'Great work mates\n' +
            '                  are at the\n' +
            '                  core of the work we do, here.\n' +
            '                  We incentives making mistakes and this helps to foster the spirit of innovation with as\n' +
            '                  minimum\n' +
            '                  friction\n' +
            '                  and costs as possible.'
        }
      ],
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
    onStoreTray () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'store'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
