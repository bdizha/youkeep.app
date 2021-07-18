<template>
  <a-row align="middle" class="r-reviews r-mt-24" justify="start" type="flex">
    <a-col :span="24">
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row v-for="(rate, index) in ratings" :key="index"
                 :gutter="[24,24]"
                 align="top"
                 justify="start" type="flex"
          >
            <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 8 }">
              {{ rate.stars + ' star' + (rate.stars > 1 ? 's' : '') }}
            </a-col>
            <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 16 }" :xs="{ span: 16 }">
              <a-progress :percent="Math.floor(rate.value * 100 / ratingTotal)"/>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 8 }" :xs="{ span: 8 }" class="r-text-right">
              <a-button block
                        class="r-btn-bordered-grey"
                        size="large"
                        type="secondary"
              >
                {{ product.rating + '/' + 5 }}
              </a-button>
            </a-col>
            <a-col :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 16 }" :xs="{ span: 15 }" class="r-text-left">
              <r-rate :rating="product.rating"></r-rate>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
      <a-list :data-source="reviews" :pagination="pagination" class="r-mv-24" item-layout="vertical" size="large">
        <a-list-item key="item.title" slot="renderItem" slot-scope="item, index">
          <template v-for="{ type, text } in actions" slot="actions">
        <span :key="type">
          <a-icon :type="type" style="margin-right: 8px"/>
          {{ text }}
        </span>
          </template>
          <a-list-item-meta :description="item.description">
            <r-avatar slot="avatar" :size="48" :src="item.avatar"
                      class="r-avatar-auto"
                      shape="square"
            />
            <div slot="title">
              <r-rate :rating="item.rating"></r-rate>
              <div class="r-text-bold">
                {{ item.title }}
              </div>
            </div>
          </a-list-item-meta>
          <div class="r-text-normal">
            {{ item.title + ' ' + item.title }}
          </div>
        </a-list-item>
      </a-list>
    </a-col>
  </a-row>
</template>
<script>

const TITLES = [
  'Delivery is fast, the quality is good, I recommend the seller! ',
  'Qualitatively packed, excellent canvas, everything is clear and beautiful!',
  'Quality is good. Well packed. Recommend!!!!! Thank you!!!! ',
  'Product exactly as described. very high-quality prints! Came very fast',
  'Quality is good. Well packed. Recommend!!!!! Thank you!!!! ',
  'Perfect, identical to those sites much more expensive. Excellent quality',
  'Good quality and like on pictures. ',
  'Perfect, identical to those sites much more expensive. Excellent quality ',
  'Product exactly as described. very high-quality prints! Came very fast',
  'Material drawing, quality of norms ',
]

const REVIEWS = []

const RATINGS = []

let ratingTotal = 0
for (let i = 5; i >= 1; i--) {
  let value = Math.floor(Math.random() * Math.floor(i <= 3 ? 10 : 100))

  ratingTotal += value

  RATINGS.push({
    stars: i,
    value: value
  })
}

export default {
  name: 'r-product-reviews',
  props: {
    product: { type: Object, required: false, default: null },
    isShowing: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      quantity: 1,
      modal: {
        isVisible: true,
        current: 'product',
        product: null,
      },
      reviews: [],
      ratings: RATINGS,
      pagination: {
        onChange: page => {
          console.log(page)
        },
        pageSize: 3,
      },
      actions: [
        { type: 'dislike', text: Math.floor(Math.random() * Math.floor(100)) },
        { type: 'like', text: Math.floor(Math.random() * Math.floor(100)) },
        { type: 'message', text: '2' },
      ],
    }
  },
  created () {
    for (let i = 0; i < 23; i++) {
      const index = Math.floor(Math.random() * Math.floor(this.product.photos.length))

      this.reviews.push({
        href: 'https://www.antdv.com/',
        title: TITLES[index],
        avatar: this.product.photos[index].image,
        rating: Math.floor(Math.random() * Math.floor(5)),
        content:
          'We supply a series of design principles, practical patterns and high quality design resources (Sketch and Axure), to help people create their product prototypes beautifully and efficiently.',
      })
    }
  },
  computed: {
    hasDiscount () {
      return parseFloat(this.product.discount_percent) > 0
    },
    cart () {
      return this.$store.state.cart
    },
  },
  methods: {},
}
</script>
