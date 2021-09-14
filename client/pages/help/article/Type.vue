<template>
  <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-card class="rbg-white">
        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h3 class="r-heading r-text-uppercase">
                  Spazaland - {{ help.article_type.name }}
                </h3>
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-medium">
                  {{ help.article_type.content }}
                </p>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[48,48]" align="top" class="r-help" justify="center" type="flex">
        <a-col v-for="(articleCategory, index) in help.article_categories"
               :key="index"
               v-if="articleCategory.articles.length > 0"
               :lg="{ span:8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
               class="gutter-row"
        >
          <r-help-category :article-category="articleCategory"></r-help-category>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  layout: 'help',
  async asyncData ({ store, params }) {
    console.log('onHelpType params', params)
    await store.dispatch('article/onHelpType', params)
  },
  data () {
    return {
      hasData: true
    }
  },
  computed: mapGetters({
    help: 'article/help',
    isLoggedIn: 'auth/isLoggedIn'
  }),
  created () {
    this.hasData = true
  }
}
</script>
