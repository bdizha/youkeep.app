<template>
  <a-row class="r-tabs" type="flex" justify="start">
    <a-col class="r-text-left" :xs="{ span: 24 }">
      <a-collapse default-active-key="0" expandIconPosition="right">
        <a-collapse-panel v-for="(link, index) in links"
                          :key="index"
                          class="r-category-menu-panel" :header="link.label">
          <div class="r-product-description">
            {{ product.html_description }}
          </div>
        </a-collapse-panel>
      </a-collapse>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-info',
  props: {
    isShowing: {type: Boolean, required: false, default: false},
    product: {type: Object, required: false, default: null},
  },
  data() {
    return {
      currentLink: 'description',
      links: [
        {label: 'Product Description', key: 'description'},
        {label: 'Reviews', key: 'reviews'},
        {label: 'Delivery & Returns', key: 'delivery-returns'}
      ],
      settings: {
        slidesToScroll: 5,
        infinite: false,
        dots: false,
        variableWidth: true,
        responsive: [
          {
            "breakpoint": 1024,
            "settings": {
              "slidesToShow": 3,
              "slidesToScroll": 5,
              "dots": false
            }
          },
          {
            "breakpoint": 900,
            "settings": {
              "slidesToShow": 5,
              "slidesToScroll": 5,
              "dots": false
            }
          },
          {
            "breakpoint": 700,
            "settings": {
              "slidesToShow": 4,
              "slidesToScroll": 1,
              "dots": false
            }
          },
          {
            "breakpoint": 560,
            "settings": {
              "slidesToShow": 1,
              "slidesToScroll": 1,
              "dots": false
            }
          }
        ]
      },
    };
  },
  created() {
  },
  computed: {},
  methods: {
    setTab(link) {
      this.currentLink = link.key;
    }
  },
};
</script>
