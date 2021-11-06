<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-dark r-pull-24">
        <div class="r-mv-48">
          <a-row :gutter="[48,48]" justify="center" type="flex">
            <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h4 class="r-heading-light r-text-uppercase r-text-primary">
                        Our blog
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading-light r-text-dark r-text-white">
                        <span class="r-text-primary">Youkeep</span> NFTS insights
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-white">
                        Stay up to date with the latest stories and commentary brought to you by Youkeep, the world's
                        leading NFTs ecosystem.
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-blog-articles></r-blog-articles>
    </a-col>
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us title="Take your artistic taste to the next level."></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
export default {
  layout: 'blog',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('article/onBlog')
  },
  data () {
    return {}
  },
  created () {
  },
  methods: {}
}
</script>
