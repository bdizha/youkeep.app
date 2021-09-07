<template>
  <nuxt-link :to="'/resources/' + article.slug">
    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 24 }"
             :sm="{ span: 24 }" :xs="{ span:24 }"
      >
        <a-card class="r-bg-dark" hoverable>
          <div style="min-height: 300px">
            <a-row :gutter="[24,24]" align="bottom" justify="start" type="flex">
              <a-col :lg="{ span: 24 }"
                     :sm="{ span: 24 }" :xs="{ span:24 }"
              >
                <div class="r-blog-item-cover" :style="'background-image: url(' + article.photo + ');'">
                  &nbsp;
                </div>
              </a-col>
              <a-col :lg="{ span: 24 }"
                     :sm="{ span: 24 }" :xs="{ span:24 }"
              >
                <h4 class="r-heading r-text-white" v-html="article.heading"></h4>
              </a-col>
            </a-row>
          </div>
        </a-card>
      </a-col>
      <a-col :lg="{ span: 24 }"
             :sm="{ span: 24 }" :xs="{ span:24 }"
      >
        <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 24 }"
                 :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <div class="r-blog-tag">
              #Technology
            </div>
            <div class="r-blog-tag">
              #B2B Checkout
            </div>
            <div class="r-blog-tag">
              #B2B Payments
            </div>
          </a-col>
          <a-col :lg="{ span: 24 }"
                 :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <h3 class="r-heading-light">
              {{ article.title }}
            </h3>
          </a-col>
          <a-col :lg="{ span: 24 }"
                 :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <p class="r-text-normal">
              {{ article.blurb }}
            </p>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </nuxt-link>
</template>
<script>
export default {
  name: 'r-article-item',
  props: {
    article: { type: Object, required: true }
  },
  data () {
    return {}
  },
  mounted () {
  },
  methods: {}
}
</script>
