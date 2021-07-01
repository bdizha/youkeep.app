<template>
  <a-row class="r-reviews r-mt-24" type="flex" justify="start" align="middle">
    <a-col :span="24">
      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
          <a-row v-for="(rate, index) in ratings" :gutter="[24,24]"
                 :key="index"
                 type="flex"
                 justify="start" align="top"
          >
            <a-col :xs="{ span: 8 }" :sm="{ span: 8 }" :md="{ span: 8 }" :lg="{ span: 8 }">
              {{ rate.stars + ' star' + (rate.stars > 1 ? 's' : '') }}
            </a-col>
            <a-col :xs="{ span: 16 }" :sm="{ span: 16 }" :md="{ span: 16 }" :lg="{ span: 16 }">
              <a-progress :percent="Math.floor(rate.value * 100 / ratingTotal)"/>
            </a-col>
          </a-row>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
          <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
            <a-col class="r-text-right" :xs="{ span: 8 }" :sm="{ span: 8 }" :md="{ span: 6 }" :lg="{ span: 6 }">
              <a-button class="r-btn-bordered-grey"
                        block
                        type="secondary"
                        size="large"
              >
                {{ product.rating + '/' + 5 }}
              </a-button>
            </a-col>
            <a-col class="r-text-left" :xs="{ span: 15 }" :sm="{ span: 16 }" :md="{ span: 18 }" :lg="{ span: 18 }">
              <r-rate :rating="product.rating"></r-rate>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
      <a-list class="r-mv-24" item-layout="vertical" size="large" :pagination="pagination" :data-source="reviews">
        <a-list-item slot="renderItem" key="item.title" slot-scope="item, index">
          <template v-for="{ type, text } in actions" slot="actions">
        <span :key="type">
          <a-icon :type="type" style="margin-right: 8px"/>
          {{ text }}
        </span>
          </template>
          <a-list-item-meta :description="item.description">
            <r-avatar slot="avatar" class="r-avatar-auto" shape="square"
                      :size="48"
                      :src="item.avatar"
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
