<template>
  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-primary r-border-none">
        <div class="r-mv-96">
          <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h3 class="r-heading r-text-white">
                    {{ blog.article_category.name }}
                  </h3>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col v-if="blog.breadcrumbs.length > 0"
           :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
    >
      <r-breadcrumbs prefix="/blog" :breadcrumbs="blog.breadcrumbs"></r-breadcrumbs>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-card class="rbg-white">
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col v-if="blog.article_category.content"
                 :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <p class="r-text-normal">
              {{ blog.article_category.content }}
            </p>
          </a-col>
          <a-col v-if="blog.articles.length > 0"
                 :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <r-blog-articles :articles="blog.articles"></r-blog-articles>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
    <a-col v-if="blog.article_categories.length > 0"
           :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
        <a-col v-for="(articleCategory, index) in blog.article_categories"
               :key="index"
               v-if="articleCategory.articles.length > 0"
               :lg="{ span:8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
               class="gutter-row"
        >
          <r-blog-category :article-category="articleCategory"></r-blog-category>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'blog',
  async asyncData ({ store, params }) {
    console.log('onBlogCategory params', params)
    await store.dispatch('article/onBlogCategory', params)
  },
  data () {
    return {
    }
  },
  computed: mapGetters({
    blog: 'article/blog'
  }),
  created () {
  }
}
</script>
