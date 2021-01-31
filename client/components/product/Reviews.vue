<template>
  <a-row class="r-reviews r-mt-24" type="flex" justify="start" align="middle">
    <a-col :span="24">
      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
          <a-row v-for="(rate, index) in ratings" :gutter="[24,24]"
                 :key="index"
                 type="flex"
                 justify="start" align="top">
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
              <a-button class="r-btn-bordered-grey" type="secondary"
                        size="default">
                {{ product.rating + "/" + 5 }}
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
            <img slot="avatar"
                 width="48"
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
            {{ item.title + " " + item.title }}
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
];

const IMAGES = [
  'https://ae01.alicdn.com/kf/U96edfff39fca4c71a64a00980ccb549a6.jpg',
  'https://ae01.alicdn.com/kf/Hffaf401dfbf447f48affb31f5696c9a8n.jpg_480x480q90.jpg_.webp',
  'https://ae01.alicdn.com/kf/HTB1cJ5AaIvrK1Rjy0Feq6ATmVXaf/Fog-Reef-Snow-Mountain-Lake-Pine-Forest-Wall-Art-Canvas-Painting-Nordic-Posters-And-Prints-Wall.jpg_50x50.jpg_.webp',
  'https://ae01.alicdn.com/kf/HTB1eSAoXrY1gK0jSZTEq6xDQVXam/Fog-Reef-Snow-Mountain-Lake-Pine-Forest-Wall-Art-Canvas-Painting-Nordic-Posters-And-Prints-Wall.jpg_50x50.jpg_.webp',
  'https://ae01.alicdn.com/kf/H3f219b59ef41420cad69b00419c7bab84.jpg_480x480q90.jpg_.webp',
  'https://ae04.alicdn.com/kf/H9375e03a057a446da0bf419e542e74a8q.jpg_200x200.jpg',
  'https://ae04.alicdn.com/kf/Hd1bc240cd7234552865e55b4f177318c7.jpg_200x200.jpg',
  'https://ae04.alicdn.com/kf/HTB1YbLYeW1s3KVjSZFAq6x_ZXXaW.jpg_200x200.jpg',
  'https://ae04.alicdn.com/kf/He72185b4955a49c18dde42f535d83185G.jpg_200x200.jpg',
  'https://ae04.alicdn.com/kf/HTB1v7EnacfrK1Rjy0Fmq6xhEXXa3.jpg_200x200.jpg',
];

const REVIEWS = [];

const RATINGS = [];

let ratingTotal = 0;
for (let i = 5; i >= 1; i--) {
  let value = Math.floor(Math.random() * Math.floor(i <= 3 ? 10 : 100));

  ratingTotal += value;

  RATINGS.push({
    stars: i,
    value: value
  });
}

for (let i = 0; i < 23; i++) {
  let index = Math.floor(Math.random() * Math.floor(TITLES.length));

  REVIEWS.push({
    href: 'https://www.antdv.com/',
    title: TITLES[index],
    avatar: IMAGES[index],
    rating: Math.floor(Math.random() * Math.floor(5)),
    content:
      'We supply a series of design principles, practical patterns and high quality design resources (Sketch and Axure), to help people create their product prototypes beautifully and efficiently.',
  });
}

export default {
  name: 'r-product-reviews',
  props: {
    product: {type: Object, required: false, default: null},
    isShowing: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      quantity: 1,
      modal: {
        isVisible: true,
        current: 'product',
        product: null,
      },
      reviews: REVIEWS,
      ratings: RATINGS,
      ratingTotal: ratingTotal,
      pagination: {
        onChange: page => {
          console.log(page);
        },
        pageSize: 3,
      },
      actions: [
        {type: 'dislike', text: Math.floor(Math.random() * Math.floor(100))},
        {type: 'like', text: Math.floor(Math.random() * Math.floor(100))},
        {type: 'message', text: '2'},
      ],
    };
  },
  created() {
  },
  computed: {
    hasDiscount() {
      return parseFloat(this.product.discount_percent) > 0;
    },
    cart() {
      return this.$store.state.cart;
    },
  },
  methods: {},
};
</script>
