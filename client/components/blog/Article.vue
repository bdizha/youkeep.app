<template>
  <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }"
           :sm="{ span: 24 }" :xs="{ span:24 }"
    >
      <nuxt-link :to="'/blog/article/' + article.slug">
        <a-card class="r-bg-dark" hoverable>
          <div style="min-height: 300px">
            <a-row :gutter="[24,24]" align="bottom" justify="start" type="flex">
              <a-col :lg="{ span: 24 }"
                     :sm="{ span: 24 }" :xs="{ span:24 }"
              >
                <div class="r-blog-item-cover" :style="'background-image: url(' + article.photo_url + ');'">
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
      </nuxt-link>
    </a-col>
    <a-col :lg="{ span: 24 }"
           :sm="{ span: 24 }" :xs="{ span:24 }"
    >
      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
        <a-col v-if="article.categories.length > 0"
                :lg="{ span: 24 }"
               :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
        <r-blog-categories :article="article"></r-blog-categories>
        </a-col>
        <a-col :lg="{ span: 24 }"
               :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
          <nuxt-link :to="'/blog/article/' + article.slug">
            <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
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
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <r-blog-author :article="article"></r-blog-author>
              </a-col>
            </a-row>
          </nuxt-link>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-blog-article',
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
