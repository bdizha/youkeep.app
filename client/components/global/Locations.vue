<template>
  <a-card class="r-bg-secondary r-border-none r-border-radius-none">
    <a-card-meta class="r-text-center">
      <template slot="description">
        <a-row class="r-mv-48" justify="center" type="flex">
          <a-col :lg="{span: 16}" :md="{span: 18}" :sm="{span: 24}" :xs="{span: 24}" class="r-text-center">
            <a-row :gutter="[24,24]" justify="start" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                     class="r-text-left"
              >
                <h4 class="r-heading-light r-text-uppercase">
                  Where we're located
                </h4>
              </a-col>
              <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                     class="r-text-left"
              >
                <a-row :gutter="[24,24]" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <h2 class="r-heading">
                      <a-icon type="environment"/>
                      Johannesburg, <br>
                      South Africa
                    </h2>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <p class="r-text-normal">
                      <nuxt-link class="r-text-white" to="mailto:info@shopple.app">info@shopple.app
                      </nuxt-link>
                    </p>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                     class="r-text-left"
              >
                <a-row :gutter="[24,24]" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <h2 class="r-heading">
                      <a-icon type="environment"/>
                      London, <br>
                      United Kingdom
                    </h2>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <p class="r-text-normal">
                      <nuxt-link class="r-text-white" to="mailto:info@shopple.app">Coming soon</nuxt-link>
                    </p>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                     class="r-text-left"
              >
                <a-row :gutter="[24,24]" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <h2 class="r-heading">
                      <a-icon type="environment"/>
                      Sydney, <br>
                      Australia
                    </h2>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                    <p class="r-text-normal">
                      <nuxt-link class="r-text-white" to="mailto:info@shopple.app">Coming soon</nuxt-link>
                    </p>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </template>
    </a-card-meta>
  </a-card>
</template>
<script>
export default {
  layout: 'default',
  name: 'r-locations',
  props: {},
  data () {
    return {
      locations: [
        {
          title: 'South Africa',
          image: 'about-01.svg'
        },
        {
          title: 'We do the right thing',
          image: 'about-02.svg'
        },
        {
          title: 'We hold ourselves to high standards',
          image: 'about-03.svg'
        }
      ]
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {},
}
</script>
