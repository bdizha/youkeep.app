<template>
  <a-card class="r-bg-dark r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[96,96]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
               :xs="{ span: 24}"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    Today's Top NFTs
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    Discover <span class="r-text-secondary">favourite</span> collectibles, so you keep
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-medium">
                    Explore our unique crypto assets and collect on-demand and stackable NFTs, anytime, anywhere.
                  </p>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                <a-col
                  :lg="{ span: 24 }" :md="{ span: 24}"
                  :sm="{ span: 24 }"
                  :xs="{ span: 24 }"
                >
                  <div class="r-slider">
                    <VueSlickCarousel v-bind="settings">
                      <a-row v-for="(item, index) in items"
                             :key="index" :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col v-for="(image, index) in item.images"
                               :key="index"
                               :lg="{ span: 8 }" :md="{ span: 8 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <a-card :class="getCardClass(image)" class="r-p-0 r-seller-item" :hoverable="true">
                            <a-row align="middle" justify="start" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <r-avatar :data-src="image.src" :size="300"
                                          class="r-avatar-block"
                                ></r-avatar>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <r-seller-item :item="item"></r-seller-item>
                              </a-col>
                            </a-row>
                          </a-card>
                        </a-col>
                      </a-row>
                      <template #prevArrow="arrowOption">
                        <div class="r-slick-arrow r-slick-arrow-prev r-arrow-prev">
                          <a-icon type="left"/>
                        </div>
                      </template>
                      <template #nextArrow="arrowOption">
                        <div class="r-slick-arrow r-slick-arrow-next r-arrow-next">
                          <a-icon type="right"/>
                        </div>
                      </template>
                    </VueSlickCarousel>
                  </div>
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

