<template>
  <a-row :gutter="[24,24]" align="top" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <div class="r-header r-header-primary">
        <a-row :gutter="[24,24]" align="top" justify="center" type="flex">
          <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <a-row :gutter="[48, 48]" type="flex">
              <a-col flex="165px">
                <nuxt-link class="r-logo" to="/">
                  <nuxt-img src="/images/logo_white.svg" width="164px"></nuxt-img>
                </nuxt-link>
              </a-col>
              <a-col flex="auto">
                <a-row :gutter="[24,24]" align="top" justify="center" type="flex">
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                    <nuxt-link class="r-logo" to="/help">
                      <h4 class="r-heading">
                        Help
                      </h4>
                    </nuxt-link>
                  </a-col>
                  <a-col class="r-text-right" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <div class="r-pv-12">
                      <template v-if="isHelp()">
                        <a-button slot="suffix"
                                  class="r-btn-white"
                                  size="small"
                                  type="secondary"
                                  @click="onModal"
                        >
                          Sign in
                        </a-button>
                      </template>
                      <template v-if="!isHelp()">
                        <r-help-search size="small"></r-help-search>
                      </template>
                    </div>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <r-modal></r-modal>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-help-header',
  props: {
    isIcon: { type: Boolean, required: false, default: true }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    help: 'article/help'
  }),
  async created () {
  },
  methods: {
    onModal () {
    },
    isHelp () {
      return this.$route.path === '/help'
    }
  }
}
</script>
