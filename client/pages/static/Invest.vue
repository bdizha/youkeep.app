<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
            <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <div class="r-mv-48">
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading-light r-text-uppercase">
                            Invest in property
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h1 class="r-heading">
                            How <span class="r-text-primary">investing</span> with Youkeep works
                          </h1>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-medium">
                            A smart, affordable way to invest in the property market.
                          </p>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            Our assets drive your returns. We pair our extensive network and expertise with the collective buying power of our investor community to acquire high-quality assets ranging from debt to equity, commercial to residential, and more.
                          </p>
                        </a-col>
                      </a-row>
                    </div>
                  </a-col>
                  <a-col class="r-text-center" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <r-avatar data-src="/images/content/illustration-14-primary.svg" :size="300"
                              class="r-avatar-auto"
                    ></r-avatar>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h3 class="r-heading-light r-text-uppercase">
                    <span class="r-text-primary">How it works</span>
                  </h3>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    We blend our investment expertise with smart technology to provide our 150,000 investors with the buying power and investment opportunities traditionally reserved for billion dollar institutions.
                  </p>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
            <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 24 }" :xs="{ span: 24}">
              <a-card class="r-bg-secondary-light">
                <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <r-avatar data-src="/images/content/step-1.svg" :size="120" class="r-avatar-auto"
                    ></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                  >
                    <h4 class="r-heading">
                      <span class="r-text-primary">Tell</span> us about your goals.
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                  >
                    <p class="r-text-normal">
                      We hand-pick quality properties and divide them into 10,000 Bricks
                    </p>
                  </a-col>
                </a-row>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 24 }" :xs="{ span: 24}">
              <a-card class="r-bg-secondary-light">
                <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <r-avatar data-src="/images/content/step-2.svg" :size="120" class="r-avatar-auto"
                    ></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                  >
                    <h4 class="r-heading">
                      <span class="r-text-secondary">Select</span> an investment plan.
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                  >
                    <p class="r-text-normal">
                      Choose the Bricks you want to buy or let us choose for you with Auto Invest
                    </p>
                  </a-col>
                </a-row>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 24 }" :xs="{ span: 24}">
              <a-card class="r-bg-secondary-light">
                <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <r-avatar data-src="/images/content/step-3.svg" :size="120" class="r-avatar-auto"
                    ></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                  >
                    <h4 class="r-heading">
                      <span class="r-text-primary">Invest</span> and monitor your portfolio.
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                  >
                    <p class="r-text-normal">
                      Invest and monitor your portfolio over time either manually or automatically.
                    </p>
                  </a-col>
                </a-row>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 24 }" :xs="{ span: 24}">
              <a-card class="r-bg-secondary-light">
                <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="space-between" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <r-avatar data-src="/images/content/step-3.svg" :size="120" class="r-avatar-auto"
                    ></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                  >
                    <h4 class="r-heading">
                      <span class="r-text-primary">Earn</span> returns over time.
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                  >
                    <p class="r-text-normal">
                      Earn returns in line with property price changes when you sell your Bricks.
                    </p>
                  </a-col>
                </a-row>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <r-tabs active-key="auto"></r-tabs>
    </a-col>
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-index',
  layout: 'default',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('content/onTestimonials', {})
  },
  data () {
    return {
      banner: 'art-01.svg',
      isProcessing: true,
      testimonials: [],
      modal: {
        current: null,
        isVisible: false
      },
      hasData: false,
      steps: [
        {
          title: 'The Youkeep Way',
          image: 'illustration-2-primary',
          theme: 'blue',
          heading: 'We deliver value in five steps:',
          summary: 'These guide us through the inevitable challenges that emerge when tackling complex problems. We want to do work that improves people\'s lives. That means finding good problems, where a solution will genuinely improve someone\'s life. ',
          content: null
        },
        {
          title: 'Envision It',
          image: 'illustration-10',
          theme: 'secondary',
          heading: 'Define outcomes and align stakeholders',
          summary: 'To solve any problem, you have to understand what the problem actually is. This is especially true of big, complex, system-level problems. To really understand a problem, you have to go deep, you have to be precise. ',
          content: 'This means reading documentation, embedding with clients, spending time with the audience, and trying current solutions to see how they succeed and fail. It means mining existing data and studies for additional insights. It means learning the substance of the domain.\n' +
            '\n<br />' +
            '\n<br />' +
            'But it also means being pragmatic. Research can be a trap. We can\'t - and don\'t need to - know everything. We do need to be able to clearly describe what is going on, in simple concrete terms.\n' +
            '\n<br />' +
            '\n<br />' +
            'Depth of analysis lets us pinpoint an effective solution. It also helps us create rich content that conveys complex messages in engaging ways. '
        },
        {
          title: 'Apply It',
          image: 'illustration-3',
          theme: 'green',
          heading: 'Pilot a set of enabling technologies',
          summary: 'We don\'t take a brief, disappear, and then come back with brilliance. We go on a journey of exploration and discovery, take our clients with us, and together we come back with something everyone loves. ',
          content: 'The key is that clients and users need to come with us. On the quest for new knowledge, insights and the right solution, we need their insight. We need to hear which paths they\'ve been down before, how they interpret what they see along the road, what they make of our ideas.\n' +
            '\n<br />' +
            '\n<br />' +
            'We don\'t venture blindly. We follow a process which is thorough, flexible and robust. But it\'s hard work, and it\'s often harder work than clients are used to, and sometimes we find ourselves in darkness, having to make leaps of faith.\n' +
            '\n<br />' +
            '\n<br />' +
            'To make it through, we need to lead the way, but also make sure that we are all in it together. '
        },
        {
          title: 'Evaluate It',
          image: 'illustration-4',
          theme: 'primary',
          heading: 'Expand pilots to full desired scope',
          summary: 'Complex problems need diverse teams. We create teams with an unusual depth and breadth of expertise, so they can cover all angles on a problem, and find the best way through.',
          content: 'This is why we value diversity in our staff. Designing an elegant solution to a complex challenge requires diverse points of view.\n' +
            '\n<br />' +
            '\n<br />' +
            'This is why we value good social and emotional skills. Diving deep into the detail and searching for the right answers requires cooperation, communication and persistence.\n' +
            '\n<br />' +
            '\n<br />' +
            'And this is why we value cognitive flexibility. To move quickly and maintain agility means we must have capable, reliable and likeminded partners across many areas of the business operations - we know having the right team matters! '
        },
        {
          title: 'Iterate It',
          image: 'illustration-13',
          theme: 'blue',
          heading: 'Continually refine production solutions',
          summary: 'Part of our job is to keep everyone moving. We get our projects moving. We keep our clients and partners moving. We keep ourselves motivated. The world doesn\'t stop; neither do we. ',
          content: 'When we talk about motion, we\'re talking at two scales.\n' +
            '\n<br />' +
            '\n<br />' +
            'First is the project scale. Projects are usually better when the pressure is on. Sometimes we need to choose when to apply that pressure - it\'s not always the right time - but when it\'s time, it\'s time.\n' +
            '\n<br />' +
            '\n<br />' +
            'Second is the industry scale. The world keeps moving. Technology keeps moving. Competitors keep moving. We keep moving, and we help our clients keep moving too.\n' +
            '\n<br />' +
            '\n<br />' +
            'We do our best to anticipate what\'s ahead, but we don\'t jump too far. We don\'t stay at the edge of technology; we stay at the edge of audience behaviour. '
        }
      ]
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
