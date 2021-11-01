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
              <a-row :gutter="[24,24]" align="middle" type="flex">
                <a-col>
                  <a-card class="r-bg-secondary-light r-p-0 r-border-circle">
                    <div class="r-p-12">
                      <nuxt-img src="/images/icon_primary.svg" width="36px"></nuxt-img>
                    </div>
                  </a-card>
                </a-col>
                <a-col flex="auto">
                  <h4 class="r-heading-light r-text-uppercase">
                    Collections of the week of the week
                  </h4>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h2 class="r-heading">
                <span class="r-text-primary">Nothing</span> is much like a Youkeep artist?
              </h2>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-normal r-text-white">
                Youkeep offers the widest range of artists, marketplaces, and let's you discover rare assets on the $keep marketplace.
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
                        class="r-bg-dark"
                >
                  <a-row :gutter="[48,48]" align="middle" type="flex">
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                      <a-card class="r-bg-dark r-pull-24">
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
                                    Learn more
                                    <a-icon type="right"/>
                                  </a-button>
                                </nuxt-link>
                              </a-col>
                            </a-row>
                          </a-col>
                        </a-row>
                      </a-card>
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
                                  See all
                                  <a-icon type="right"/>
                                </a-button>
                              </nuxt-link>
                            </a-col>
                          </a-row>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                            <a-col v-for="(item, index) in artist.items"
                                   :key="index"
                                   :lg="{ span: 8 }" :md="{ span: 8 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <a-card class="r-bg-primary-light r-p-0">
                                <a-row align="middle" type="flex">
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}">
                                    <r-avatar :data-src="item.photo"
                                              shape="square"
                                              :size="300"
                                              class="r-avatar-block"
                                    ></r-avatar>
                                  </a-col>
                                  <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                         :xs="{ span: 24}"
                                  >
                                    <r-seller-item :has-icon="false" :item="{title: item.name, content: artist.name}"></r-seller-item>
                                  </a-col>
                                </a-row>
                              </a-card>
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
  name: 'r-seller-featured',
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
          photo: '/images/icon_primary.svg',
          slogan: 'Love what you do and you’ll never work a day in your life.',
          items: [
            {
              name: 'Garlic Herb Baked Chicken',
              photo: '/patterns/pattern-11.svg'
            },
            {
              name: 'Garlic Herb Baked Chicken',
              photo: '/patterns/pattern-02.svg'
            },
            {
              name: 'Garlic Herb Baked Chicken',
              photo: '/patterns/pattern-04.svg'
            }
          ]
        },
        {
          name: 'Lorna Maseko',
          photo: '/images/icon_secondary.svg',
          slogan: 'Seeing people fed and smiling brings such joy to my heart.',
          items: [
            {
              name: 'Garlic Herb Baked Chicken',
              photo: '/patterns/pattern-04.svg'
            },
            {
              name: 'Roasted Pork Shoulder',
              photo: '/patterns/pattern-17.svg'
            },
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-06.svg'
            }
          ]
        },
        {
          name: 'Les Da',
          photo: '/images/icon_tertiary.svg',
          slogan: 'Food that is effortless to make but absolutely delicious.',
          items: [
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-07.svg'
            },
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-08.svg'
            },
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-09.svg'
            }
          ]
        },
        {
          name: 'Themba Gwejela',
          photo: '/images/icon_primary.svg',
          slogan: 'I hope I\'m not too late. Enjoy your favourite taste!',
          items: [
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-10.svg'
            },
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-11.svg'
            },
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-12.svg'
            }
          ]
        },
        {
          name: 'Themba Gwejela',
          photo: '/images/icon_secondary.svg',
          slogan: 'I hope I\'m not too late. Enjoy your favourite taste!',
          items: [
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-13.svg'
            },
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-14.svg'
            },
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-15.svg'
            }
          ]
        },
        {
          name: 'Jenny Morris',
          photo: '/images/icon_tertiary.svg',
          slogan: '"Dinner\'s ready" is just another way of me saying I love you.',
          items: [
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-07.svg'
            },
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-08.svg'
            },
            {
              name: 'Candied Yams',
              photo: '/patterns/pattern-18.svg'
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
