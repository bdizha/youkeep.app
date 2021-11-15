<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-96">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    Why become an artist?
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h2 class="r-heading">
                    <span class="r-text-secondary">Add</span> value to the NFTs marketplace
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Youkeep offers artists the opportunity to make a meaningful income by doing what they love!
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-normal">
                    We also believe that every person should have access to a wholesome, original collectibles at an affordable
                    price.
                  </p>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"

            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col v-for="(feature, index) in features"
                       :key="index"
                       :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-primary-light">
                    <a-row :gutter="[24, 24]" type="flex" align="middle">
                      <a-col>
                        <a-icon class="r-text-tertiary"
                                theme="filled"
                                :style="{ fontSize: '60px' }"
                                :type="feature.icon"
                        ></a-icon>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"

                      >
                        <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading" v-html="feature.title"></h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <p class="r-text-normal" v-html="feature.summary"></p>
                          </a-col>
                          <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-normal">
                              {{ feature.content }}
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </a-card>
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
  name: 'r-artist-features',
  props: {},
  data () {
    return {
      features: [
        {
          title: '<span class="r-text-secondary">Earn</span> real money',
          icon: 'golden',
          summary: 'It’s completely free to apply. Many artists make around $1,000 / week.',
          content: 'Expand revenue by building experiences that meet your customer\'s expectations.'
        },
        {
          title: '<span class="r-text-secondary">Be</span> your own boss',
          icon: 'compass',
          summary: 'Design your  own collection, set your own prices and work when you do.',
          content: 'We’ll help you get more orders, payments, order tracking and customer support.'
        },
        {
          title: '<span class="r-text-secondary">Serve</span> happy collectors',
          icon: 'clock',
          summary: 'Youkeep connects unique NFT collections with curios collectors.',
          content: 'We\'ll provide you with marketing support you need to grow your business.'
        }
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
