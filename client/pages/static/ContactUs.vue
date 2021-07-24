<template>
  <a-row :gutter="[48,96]" align="top" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           style="background: #d1e7fd;"
    >
      <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row align="middle" class="r-mv-48" justify="end" type="flex">
            <a-col :lg="{ span: 15 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                   class="r-ph-24"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h1 class="r-heading">
                    How can we help?
                  </h1>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    We'd love to hear from you! Feel free to reach out with any questions or comments below.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                           style="text-align: left;"
                    >
                      <h4 class="r-heading">
                        Want to join us?
                      </h4>
                      <p class="r-text-normal">
                        <span>Then apply </span>
                        <nuxt-link class="r-link-primary" target="_blank" to="/careers">here</nuxt-link>
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                           style="text-align: left;"
                    >
                      <h4 class="r-heading">
                        Need answers?
                      </h4>
                      <p class="r-text-normal">
                        <span>Check out the </span>
                        <nuxt-link class="r-link-primary" target="_blank" to="/help">Help center</nuxt-link>
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                           style="text-align: left;"
                    >
                      <h4 class="r-heading">
                        Email
                      </h4>
                      <p class="r-text-normal">
                        <a href="mailto:info@Spazamall.app" target="_blank">info@Spazamall.app</a>
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="r-text-center"
    >
      <a-row justify="start" type="flex">
        <a-col :lg="{span: 12}" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-p-24">
          <a-card>
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" justify="center" type="flex">
                  <a-col :xs="{ span: 24 }" class="r-text-left">
                    <h2 class="r-heading">
                      <span class="r-text-primary">Get</span> in touch
                    </h2>
                  </a-col>
                  <a-col :xs="{ span: 24 }" class="r-text-left">
                    <p class="r-text-normal">
                      How can we help? Just a quick note: try visiting our
                      <nuxt-link to="/help">Help center</nuxt-link>
                      that maybe of help only for general queries that we frequently receive from
                      our customers.
                    </p>
                  </a-col>
                  <a-col :xs="{ span: 24 }" class="r-text-left">
                    <r-hello></r-hello>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',
  name: 'r-about-us',
  props: {},
  data () {
    return {
      banner: 'art-05.png',
    }
  },
  computed: mapGetters({}),
  methods: {},
}
</script>
