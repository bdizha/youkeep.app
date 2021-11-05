<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
        <div class="r-mv-96">
          <a-row :gutter="[48,48]" justify="center" type="flex">
            <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 16 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h3 class="r-heading">
                        Welcome. How can we help?
                      </h3>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <r-help-search size="large"></r-help-search>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-help></r-help>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-white r-pull-h-24 r-border-none">
      <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
        <a-col class="r-text-center" :lg="{ span: 12 }" :md="{ span: 12 }"
               :sm="{ span: 12 }"
               :xs="{ span: 24 }"
        >
          <h4 class="r-heading-light r-text-primary r-text-uppercase">
            Recently published articles
          </h4>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24}"
        >
          <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
            <a-col v-for="(article, index) in help.recent_articles"
                   :key="index"
                   :lg="{ span:12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                   class="gutter-row"
            >
              <r-help-article :article="article" :has-category="true"></r-help-article>
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
    console.log('onHelp params', params)
    await store.dispatch('article/onHelp', params)
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
  }
}
</script>
