<template>
  <a-row :gutter="[24,24]" justify="center" type="flex">
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }"
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
                <h3 class="r-heading">
                  {{ help.article.title }}
                </h3>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-medium r-text-primary r-text-dark">
                  {{ help.article.blurb }}
                </p>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <div class="r-text-normal" v-html="help.article.content">
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
                <a-col v-for="(article, index) in help.related_articles"
                       :key="index"
                       v-if="index < 6"
                       :lg="{ span:24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                       class="gutter-row"
                >
                  <r-help-article :article="article"></r-help-article>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }"
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
                <a-col v-for="(article, index) in help.viewed_articles"
                       :key="index"
                       v-if="index < 6"
                       :lg="{ span:24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                       class="gutter-row"
                >
                  <r-help-article :article="article"></r-help-article>
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
  layout: 'help',
  async asyncData ({ store, params }) {
    console.log('onHelpArticle params', params)
    await store.dispatch('article/onHelpArticle', params)
  },
  data () {
    return {
      hasData: true
    }
  },
  computed: mapGetters({
    help: 'article/help'
  }),
  created () {
    this.hasData = true
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
