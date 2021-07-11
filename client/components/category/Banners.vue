<template>
  <a-row class="r-mt-48" type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
        <a-card>
          <a-card-meta>
            <template slot="description">
        <a-row :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]" type="flex"
               justify="center"
        >
          <a-col
            v-for="(banner, index) in banners"
            :key="index" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 6 }"
            :lg="{span: 6}"
          >
            <nuxt-link
              :to="banner.route" style="display: block; width: 100%;"
            >
              <r-avatar class="r-avatar-block" shape="square"
                        :size="300"
                        :src="banner.photo"
              />
            </nuxt-link>
          </a-col>
        </a-row>
            </template>
          </a-card-meta>
        </a-card>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-category-banners',
  props: {
    columns: { type: Number, required: false, default: 1 }
  },
  data () {
    return {
      hasData: false,
      banners: [
        {
          route: '/category/L0000001/popular-products',
          photo: '/banners/mini/100_Percent_Original_Goods.png'
        },
        {
          route: '/category/L0000001/discounts',
          photo: '/banners/mini/Discounts.png'
        },
        {
          route: '/category/L0000001/famous-brands',
          photo: '/banners/mini/Famous_Brands.png'
        },
        {
          route: '/category/L0000001/fast-delivery',
          photo: '/banners/mini/Fast_Delivery.png'
        }
      ]
    }
  },
  computed: {},
  created () {
    this.payload()
  },
  mounted () {
  },
  methods: {
    async payload () {
    }
  }
}
</script>
