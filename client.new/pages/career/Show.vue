<template>
  <r-page>
    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
      <a-col :lg="{ span: 12 }"
             :md="{ span: 12 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-card>
          <nuxt-link to="/career/openings">
            <h3 class="r-heading">
              <a-icon type="left"/>
              Back to openings
            </h3>
          </nuxt-link>
          <h4 class="r-heading">
            <a-icon type="solution"/>
            {{ position.type_formatted }}
          </h4>
          <h4 class="r-heading-light">
            <a-icon type="bank"/>
            {{ position.department }}
          </h4>
        </a-card>
      </a-col>
      <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 24 }" class="gutter-row">
        <a-row align="middle" justify="center" type="flex">
          <a-col :lg="{span: 24}" :md="{span: 24}" :xs="{span: 24}">
            <a-breadcrumb class="r-mb-24">
              <a-breadcrumb-item>
                <nuxt-link :to="'/career/openings'"
                           class="r-text-primary"
                >
                  Jop openings
                </nuxt-link>
              </a-breadcrumb-item>
              <a-breadcrumb-item>
                                <span class="r-text-view-more">
                                    {{ position.title }}
                                </span>
              </a-breadcrumb-item>
            </a-breadcrumb>
          </a-col>
          <a-col :lg="{span: 24}" :md="{span: 24}" :xs="{span: 24}" class="r-padding-48">
            <a-row align="middle" class="" justify="start" type="flex">
              <a-col :lg="{span: 24}">
                <a-card>
                  <h2 class="r-heading r-text-secondary">{{ position.title }}</h2>
                  <div class="r-mt-48" v-html="position.description"></div>
                </a-card>
              </a-col>
            </a-row>
            <a-row align="middle" class="r-mt-24" justify="start" type="flex">
              <a-col :lg="{span: 24}" class="">
                <a :href="'/career/' + position.slug + '/apply'">
                  <a-button block
                            class="r-btn-secondary"
                            size="large" type="secondary"
                  >
                    Apply for this job
                  </a-button>
                </a>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-shopper-show',
  props: {},
  data () {
    return {}
  },
  async asyncData ({ store, params, query }) {
    try {
      let path = `/career/${params.slug}`
      await store.dispatch('base/onPosition', { 'route': path })

    } catch (e) {
      console.error('onStore errors')
      console.log(e)
    }
  },
  computed: mapGetters({
    position: 'base/position',
    modal: 'base/modal'
  }),
  created () {
  },
  methods: {
    async payload () {
      let path = this.$route.path
      await this.$store.dispatch('base/onPosition', { 'route': path })
    },
  }
}
</script>
