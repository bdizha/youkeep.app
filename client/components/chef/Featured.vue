<template>
  <a-row :gutter="[96,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24}"
    >
      <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
               :xs="{ span: 24}"
        >
          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
              <a-row :gutter="[12,12]" align="middle" type="flex">
                <a-col flex="48px">
                  <div class="r-bg-secondary r-p-12 r-border-circle">
                    <nuxt-img src="/images/chef.svg" width="45px"></nuxt-img>
                  </div>
                </a-col>
                <a-col flex="auto">
                  <h4 class="r-heading-bold r-text-uppercase">
                    Spaza chefs of the week
                  </h4>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h2 class="r-heading">
                <span class="r-text-primary">Nothing</span> beats a Spaza chef, right?
              </h2>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-normal">
                Spazastop offers the widest range of chefs, restaurants, and let's you discover cooks in your
                neighbourhood.
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col v-if="hasChefs" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row align="middle" class="r-slider r-slider-chefs" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <VueSlickCarousel v-bind="settings">
                <a-card v-for="(chef, index) in chefs"
                        :key="index"
                        class="r-bg-secondary-light"
                >
                  <a-row :gutter="[48,48]" align="middle" type="flex">
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                      <div class="r-bg-white r-p-24 r-pull-24">
                        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                          <a-col :lg="{ span: 15 }" :md="{ span: 15 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                            <r-avatar :data-src="chef.photo" :size="300"
                                      class="r-avatar-block"
                            ></r-avatar>
                          </a-col>
                          <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                 :xs="{ span: 24}"
                          >
                            <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                                <h4 class="r-heading-bold r-text-uppercase">
                                  {{ chef.name }}
                                </h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                                <p class="r-text-normal">
                                  "{{ chef.slogan }}"
                                </p>
                              </a-col>
                              <a-col>
                                <nuxt-link to="/store/item-link-here">
                                  <a-button class="r-btn-bordered-secondary"
                                            block
                                            type="primary"
                                  >
                                    Learn more <a-icon type="right"/>
                                  </a-button>
                                </nuxt-link>
                              </a-col>
                            </a-row>
                          </a-col>
                        </a-row>
                      </div>
                    </a-col>
                    <a-col :lg="{ span: 15 }" :md="{ span: 15 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                      <a-row :gutter="[24,24]" align="middle" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                          <a-row :gutter="[12,12]" align="middle" type="flex">
                            <a-col :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                              <h4 class="r-heading">
                                {{ chef.name }}'s popular dishes
                              </h4>
                            </a-col>
                            <a-col class="r-text-right" :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 24 }"
                                   :xs="{ span: 24}"
                            >
                              <nuxt-link to="/store/item-link-here">
                                <a-button class="r-btn-bordered-primary"
                                          block
                                          type="primary"
                                >
                                  See all <a-icon type="right"/>
                                </a-button>
                              </nuxt-link>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                            <a-col v-for="(dish, index) in chef.dishes"
                                   :key="index"
                                   :lg="{ span: 8 }" :md="{ span: 8 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <a-row :gutter="[12,12]" align="middle" type="flex">
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                                  <r-avatar :data-src="dish.photo" :size="300"
                                            class="r-avatar-block"
                                  ></r-avatar>
                                </a-col>
                                <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                       :xs="{ span: 24}"
                                >
                                  <p class="r-text-normal">
                                    {{ dish.name }}
                                  </p>
                                </a-col>
                              </a-row>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-card>
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
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-chef-featured',
  props: {},
  async serverPrefetch () {
    // await this.$store.dispatch('content/onChefs', {})
  },
  data () {
    return {
      hasChefs: true,
      chefs: [
        {
          name: 'Patrick Do',
          photo: '/chefs/chef-01.jpg',
          slogan: 'Love what you do and you’ll never work a day in your life.',
          dishes: [
            {
              name: 'Garlic Herb Baked Chicken',
              photo: '/dishes/dish-01.jpeg'
            },
            {
              name: 'Garlic Herb Baked Chicken',
              photo: '/dishes/dish-02.jpeg'
            },
            {
              name: 'Garlic Herb Baked Chicken',
              photo: '/dishes/dish-03.jpeg'
            }
          ]
        },
        {
          name: 'Lorna Maseko',
          photo: '/chefs/chef-02.jpg',
          slogan: 'Seeing people fed and smiling brings such joy to my heart.',
          dishes: [
            {
              name: 'Garlic Herb Baked Chicken',
              photo: '/dishes/dish-04.jpeg'
            },
            {
              name: 'Roasted Pork Shoulder',
              photo: '/dishes/dish-05.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-06.jpeg'
            }
          ]
        },
        {
          name: 'Les Da',
          photo: '/chefs/chef-03.jpg',
          slogan: 'Food that is effortless to make but absolutely delicious.',
          dishes: [
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-07.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-08.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-09.jpeg'
            }
          ]
        },
        {
          name: 'Themba Gwejela',
          photo: '/chefs/chef-04.jpg',
          slogan: 'I hope I\'m not too late. Enjoy your favourite taste!',
          dishes: [
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-10.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-11.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-12.jpeg'
            }
          ]
        },
        {
          name: 'Themba Gwejela',
          photo: '/chefs/chef-05.jpg',
          slogan: 'I hope I\'m not too late. Enjoy your favourite taste!',
          dishes: [
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-13.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-14.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-15.jpeg'
            }
          ]
        },
        {
          name: 'Jenny Morris',
          photo: '/chefs/chef-06.jpg',
          slogan: '"Dinner\'s ready" is just another way of me saying I love you.',
          dishes: [
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-07.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-08.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/dishes/dish-18.jpeg'
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
  computed: mapGetters({
    processes: 'base/processes'
  }),
  created () {
  },
  methods: {}
}
</script>
