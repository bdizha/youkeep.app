<template>
  <a-card class="r-bg-dark r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[96,96]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
               :xs="{ span: 24}"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <r-avatar class="r-avatar-block" data-src="/assets/asset-03.svg" :size="300"></r-avatar>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    Unique assets
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    Let <span class="r-text-secondary">curious</span> things happen with Youkeep
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-medium">
                    Youkeep's customizable alerts can be set to hint of trending air drops, pre-series auctions, you
                    name it. Explore our unique crypto assets and collect on-demand and stackable NFTs, anytime, anywhere.
                  </p>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-customer-welcome',
  props: {},
  data () {
    return {
      items: [
        {
          title: 'Stuffed Paneer Kofta',
          content: 'Monika',
          images: [
            {
              src: '/patterns/pattern-02-secondary.svg',
              theme: 'tertiary',
              span: 12
            },
            {
              src: '/patterns/pattern-07.svg',
              theme: 'secondary',
              span: 12
            },
            {
              src: '/patterns/pattern-08.svg',
              theme: 'primary',
              span: 12
            }
          ]
        },
        {
          title: 'Stuffed Paneer Kofta',
          content: 'Monika',
          images: [
            {
              src: '/patterns/pattern-15.svg',
              theme: 'secondary',
              span: 16
            },
            {
              src: '/patterns/pattern-17.svg',
              theme: 'tertiary',
              span: 12
            },
            {
              src: '/patterns/pattern-28.svg',
              theme: 'secondary',
              span: 12
            }
          ]
        },
        {
          title: 'Penne with a Slow-Cooked Sausage Sauce',
          content: 'Ming',
          images: [
            {
              src: '/patterns/pattern-09.svg',
              theme: 'secondary',
              span: 16
            },
            {
              src: '/patterns/pattern-17.svg',
              theme: 'tertiary',
              span: 12
            },
            {
              src: '/patterns/pattern-25-tertiary.svg',
              theme: 'primary',
              span: 12
            }
          ]
        }
      ],
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
      }
    }
  },
  created () {
  },
  computed: {},
  methods: {
    getCardClass (item) {
      return `r-bg-${item.theme}-light r-radius-${item.shape}`
    },
    onRegister () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onRegister', modal)
    }
  }
}
</script>

