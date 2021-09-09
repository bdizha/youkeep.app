<template>
  <a-row :gutter="[48,48]" align="middle" class="r-help" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-left"
    >
      <a-row align="middle" class="r-mv-48" justify="center" type="flex">
        <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
               class="r-text-left"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
                   class="r-text-left"
            >
              <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    Hi. How can we help?
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <r-help-search></r-help-search>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-ph-24 r-text-left"
    >
      <r-help-categories></r-help-categories>
    </a-col>
  </a-row>
</template>
<script>

import { mapGetters } from 'vuex'

export default {
  async asyncData ({ store, params }) {
    console.log('onHelp params', params)
    await store.dispatch('article/onHelp', params)
  },
  data () {
    return {
      hasData: true
    }
  },
  computed: mapGetters({
    articles: 'content/articles',
    article: 'content/article',
    isLoggedIn: 'auth/isLoggedIn'
  }),
  created () {
    this.hasData = true
  }
}
</script>
