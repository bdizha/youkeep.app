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
                    <nuxt-img src="/images/artist.svg" width="45px"></nuxt-img>
                  </div>
                </a-col>
                <a-col flex="auto">
                  <h4 class="r-heading-light r-text-uppercase">
                    Top artists of the week
                  </h4>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h2 class="r-heading">
                <span class="r-text-primary">We</span> obsess with artists?
              </h2>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-normal">
                Youkeep offers the widest range of artists, marketplaces, and let's you discover rare assets  on the $keep marketplace.
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col v-if="hasArtists" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row align="middle" class="r-slider r-slider-artists" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <VueSlickCarousel v-bind="settings">
                <a-card v-for="(artist, index) in artists"
                        :key="index"
                        class="r-bg-secondary-light"
                >
                  <a-row :gutter="[48,48]" align="middle" type="flex">
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                      <div class="r-bg-white r-p-24 r-pull-24">
                        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                          <a-col :lg="{ span: 15 }" :md="{ span: 15 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                            <r-avatar :data-src="artist.photo" :size="300"
                                      class="r-avatar-block"
                            ></r-avatar>
                          </a-col>
                          <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                 :xs="{ span: 24}"
                          >
                            <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                                <h4 class="r-heading-light r-text-uppercase">
                                  {{ artist.name }}
                                </h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                                <p class="r-text-normal">
                                  "{{ artist.slogan }}"
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
                                {{ artist.name }}'s popular NFTs
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
                            <a-col v-for="(dish, index) in artist.NFTs"
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
  name: 'r-artist-featured',
  props: {},
  async serverPrefetch () {
    // await this.$store.dispatch('content/onArtists', {})
  },
  data () {
    return {
      hasArtists: true,
      artists: [
        {
          name: 'Patrick Do',
          photo: '/artists/artist-01.jpg',
          slogan: 'Love what you do and you’ll never work a day in your life.',
          NFTs: [
            {
              name: 'Garlic Herb Baked Chicken',
              photo: '/NFTs/dish-01.jpeg'
            },
            {
              name: 'Garlic Herb Baked Chicken',
              photo: '/NFTs/dish-02.jpeg'
            },
            {
              name: 'Garlic Herb Baked Chicken',
              photo: '/NFTs/dish-03.jpeg'
            }
          ]
        },
        {
          name: 'Lorna Maseko',
          photo: '/artists/artist-02.jpg',
          slogan: 'Seeing people fed and smiling brings such joy to my heart.',
          NFTs: [
            {
              name: 'Garlic Herb Baked Chicken',
              photo: '/NFTs/dish-04.jpeg'
            },
            {
              name: 'Roasted Pork Shoulder',
              photo: '/NFTs/dish-05.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-06.jpeg'
            }
          ]
        },
        {
          name: 'Les Da',
          photo: '/artists/artist-03.jpg',
          slogan: 'Food that is effortless to make but absolutely delicious.',
          NFTs: [
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-07.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-08.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-09.jpeg'
            }
          ]
        },
        {
          name: 'Themba Gwejela',
          photo: '/artists/artist-04.jpg',
          slogan: 'I hope I\'m not too late. Enjoy your favourite taste!',
          NFTs: [
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-10.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-11.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-12.jpeg'
            }
          ]
        },
        {
          name: 'Themba Gwejela',
          photo: '/artists/artist-05.jpg',
          slogan: 'I hope I\'m not too late. Enjoy your favourite taste!',
          NFTs: [
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-13.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-14.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-15.jpeg'
            }
          ]
        },
        {
          name: 'Jenny Morris',
          photo: '/artists/artist-06.jpg',
          slogan: '"Dinner\'s ready" is just another way of me saying I love you.',
          NFTs: [
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-07.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-08.jpeg'
            },
            {
              name: 'Candied Yams',
              photo: '/NFTs/dish-18.jpeg'
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
