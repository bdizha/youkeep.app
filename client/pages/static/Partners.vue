<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-dark r-pull-h-24 r-border-none">
        <div class="r-mv-48">
          <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <div style="width: 1120px; height: 1120px;margin: auto">
                    <a-row align="middle" justify="start" type="flex">
                      <a-col v-for="(item, row) in rows"
                             :key="row"
                             :lg="{ span: 12 }" :md="{ span: 12 }"
                             :sm="{ span: 12 }"
                             :xs="{ span: 12 }"
                      >
                        <a-row align="middle" justify="start" type="flex">
                          <a-col v-for="(item, index) in rows"
                                 :key="index"
                                 :lg="{ span: 6 }" :md="{ span: 6 }"
                                 :sm="{ span: 6 }"
                                 :xs="{ span: 6 }"
                          >
                            <div class="r-gem-block" :style="getGemStyle(row)"
                                 style="width: 140px; height: 140px;"
                            >
                            </div>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </div>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',
  props: {},
  data () {
    return {
      benefits: [
        {
          icon: 'shop',
          title: 'Sell with Zerosum',
          heading: '<span class="r-text-primary">Monetize</span> digital sales',
          content: 'Drive passive income with endless scale by collecting a percentage of your client’s digital revenue.'
        },
        {
          icon: 'dollar',
          title: 'Lend with Zerosum',
          heading: '<span class="r-text-primary">Get</span> more clients',
          content: 'We’re always looking for agencies and system integrators to help manage the growing demand for Zerosum.'
        },
        {
          icon: 'sync',
          title: 'Grow with Zerosum',
          heading: '<span class="r-text-primary">Exposure</span>  & leadership',
          content: 'Share your expertise and get exposure to our audience of B2C, B2B e-commerce and marketplace leaders.'
        }
      ],
      floor: 12.5,
      roof: 100,
      modal: {
        current: null,
        isVisible: false
      },
      hasData: false,
      items: Array.from({ length: 4 }, (x, i) => i),
      rows: Array.from({ length: 16 }, (x, i) => i)
    }
  },
  computed: mapGetters({}),
  created () {
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onModal', modal)
    },
    getGemStyle (index) {
      const operand = index > 0 ? (index * 2) : 1
      const percent = this.roof / operand
      return `background-size: ${percent}%`
    }
  }
}
</script>
