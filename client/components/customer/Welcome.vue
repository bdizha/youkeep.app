<template>
  <a-card class="r-bg-primary-light r-border-none">
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
                    Today's famous dishes
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    Your <span class="r-text-primary">favourite</span> meals delivered to you
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-medium">
                    Sweeten up your morning, afternoon or night! Treat yourself to our new, delicious Spazastop dishes.
                    any time of day.
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
                  <div class="r-slider r-slider-dots">
                    <VueSlickCarousel v-bind="settings">
                      <a-card v-for="(dish, index) in dishes"
                              :key="index"
                              class="r-bg-white-primary"
                      >
                        <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                          <a-col :order="index === 1 ? 2 : 1" :lg="{ span: 15 }" :md="{ span: 15}"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <div class="r-bg-white r-pull-24">
                            <r-avatar :data-src="dish.images[0].src" :size="300"
                                      class="r-avatar-block"
                            ></r-avatar>
                            </div>
                          </a-col>
                          <a-col :order="index === 1 ? 1 : 2" :lg="{ span: 9 }" :md="{ span: 9}"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                              <a-col v-for="(image, index) in dish.images"
                                     v-if="index > 0"
                                     :key="index"
                                     :lg="{ span: 12 }" :md="{ span: 12 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24}"
                              >
                                <r-avatar :data-src="image.src" :size="300"
                                          class="r-avatar-block"
                                ></r-avatar>
                              </a-col>
                              <a-col :lg="{ span: 12 }" :md="{ span: 12}"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <h4 class="r-heading">
                                      {{ dish.title }}
                                    </h4>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <h4 class="r-heading-light r-text-primary">
                                      Made by Chef {{ dish.seller }}
                                    </h4>
                                  </a-col>
                                </a-row>
                              </a-col>
                            </a-row>
                          </a-col>
                        </a-row>
                      </a-card>
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
      dishes: [
        {
          title: 'Stuffed Paneer Kofta',
          seller: 'Monika',
          images: [
            {
              src: '/products/product-01.jpeg',
              span: 12
            },
            {
              src: '/products/product-02.jpeg',
              span: 12
            },
            {
              src: '/products/product-03.jpeg',
              span: 12
            },
            {
              src: '/products/product-04.jpeg',
              span: 12
            }
          ]
        },
        {
          title: 'Stuffed Paneer Kofta',
          seller: 'Monika',
          images: [
            {
              src: '/products/product-05.jpeg',
              span: 16
            },
            {
              src: '/products/product-06.jpeg',
              span: 8
            },
            {
              src: '/products/product-07.jpeg',
              span: 12
            },
            {
              src: '/products/product-08.jpeg',
              span: 12
            }
          ]
        },
        {
          title: 'Penne with a Slow-Cooked Sausage Sauce',
          seller: 'Ming',
          images: [
            {
              src: '/products/product-09.jpeg',
              span: 16
            },
            {
              src: '/products/product-10.jpeg',
              span: 8
            },
            {
              src: '/products/product-11.jpeg',
              span: 12
            },
            {
              src: '/products/product-12.jpeg',
              span: 12
            }
          ]
        }
      ],
      settings: {
        slidesToScroll: 1,
        slidesToShow: 1,
        dots: true,
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

