<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-serve-tabs></r-serve-tabs>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-customer-steps :size="16"></r-customer-steps>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-customer-welcome></r-customer-welcome>
    </a-col>
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-testimonials></r-testimonials>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-customer-benefits></r-customer-benefits>
    </a-col>
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us title="Take your artistic taste to the next level."></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { setInterval } from 'timers'
import RMetrics from '../components/global/Metrics'

const EVENT_TYPE_DROPPED = 1

export default {
  components: { RMetrics },
  layout: 'default',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('content/onTestimonials', {})
  },
  data () {
    return {
      eventType: EVENT_TYPE_DROPPED,
      images: [
        '/assets/asset-06.svg',
        '/assets/asset-07.svg',
        '/assets/asset-08.svg',
        '/assets/asset-09.svg',
        '/assets/asset-10.svg',
        '/assets/asset-11.svg',
        '/assets/asset-12.svg',
        '/assets/asset-13.svg',
        '/assets/asset-14.svg',
        '/assets/asset-15.svg',
        '/assets/asset-16.svg',
        '/assets/asset-17.svg'
      ],
      step: 1,
      settings: {
        slidesToScroll: 1,
        slidesToShow: 1,
        dots: false,
        responsive: [
          {
            'breakpoint': 1024,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 1,
              'dots': false
            }
          },
          {
            'breakpoint': 900,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 1,
              'dots': false
            }
          },
          {
            'breakpoint': 700,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 1,
              'dots': false
            }
          },
          {
            'breakpoint': 560,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 1,
              'dots': false
            }
          }
        ]
      },
      modal: {
        current: null,
        isVisible: false
      },
      hasData: false
    }
  },
  computed: {},
  async created () {
    await this.rotate()
  },
  methods: {
    isActive (step) {
      return step === this.step
    },
    getCardClass (item) {
      return `r-bg-${item.theme}`
    },
    getShapeClass (theme) {
      return `r-bg-${theme}`
    },
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onModal', modal)
    },
    rotate () {
      setInterval(() => {
        this.step = this.step > 2 ? 1 : this.step + 1
      }, 3000)
    }
  }
}
</script>
