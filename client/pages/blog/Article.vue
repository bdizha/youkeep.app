<template>
  <a-row :gutter="[24,24]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-blog r-border-none" :style="'background-image: url(' + blog.article.photo_url + ')'">
        <div class="r-mv-96">
          <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col v-if="blog.article.categories.length > 0"
                           :lg="{ span: 24 }"
                           :sm="{ span: 24 }" :xs="{ span: 24 }"
                    >
                      <r-blog-categories :article="blog.article" theme="white"></r-blog-categories>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading-light r-text-white">
                        {{ blog.article.title }}
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium r-text-primary r-text-white">
                        {{ blog.article.blurb }}
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <r-blog-author :article="blog.article" theme="white"></r-blog-author>
                    </a-col>
                  </a-row>
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
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" justify="center" align="top" type="flex">
        <a-col :lg="{ span: 18 }" :md="{ span: 16 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-white">
            <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <div class="r-text-normal" v-html="blog.article.content">
                </div>
              </a-col>
              <a-col :lg="{ span: 6 }" :md="{ span: 6 }"
                     :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                <a-button class="r-btn-primary"
                          @click="onModal"
                          block
                          size="large"
                          type="blue"
                >
                  Get started
                </a-button>
              </a-col>
              <a-col :lg="{ span: 6 }" :md="{ span: 6 }"
                     :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                <a-button class="r-btn-bordered-secondary"
                          @click="onModal"
                          block
                          size="large"
                          type="blue"
                >
                  Get in touch
                </a-button>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 6 }" :md="{ span: 8 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h4 class="r-heading-light r-text-primary r-text-uppercase">
                Articles in this section
              </h4>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                <a-col v-for="(article, index) in blog.related_articles"
                       :key="index"
                       v-if="index < 6"
                       :lg="{ span:24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                       class="gutter-row"
                >
                  <r-blog-article :article="article"></r-blog-article>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-white">
        <a-row :gutter="[24,24]" justify="start" align="top" type="flex">
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                     :sm="{ span: 12 }"
                     :xs="{ span: 24 }"
              >
                <h4 class="r-heading-light r-text-primary r-text-uppercase">
                  Recently viewed articles
                </h4>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                     :xs="{ span: 24}"
              >
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col v-for="(article, index) in blog.viewed_articles"
                         :key="index"
                         v-if="index < 6"
                         :lg="{ span:24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                         class="gutter-row"
                  >
                    <r-blog-article :article="article"></r-blog-article>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'blog',
  async asyncData ({ store, params }) {
    console.log('onBlogArticle params', params)
    await store.dispatch('article/onBlogArticle', params)
  },
  data () {
    return {}
  },
  computed: mapGetters({
    blog: 'article/blog'
  }),
  created () {
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
