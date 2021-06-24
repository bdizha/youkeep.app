<template>
  <r-page>
    <a-row type="flex" justify="center" align="middle">
      <a-col :span="24">
        <a-row type="flex" justify="center" align="middle" class="r-art-primary">
          <a-col :xs="{span: 24}" :sm="{span: 24}" :lg="{span: 12}"
                 class="r-mv-48 r-text-center"
          >
            <a-row type="flex" justify="center" align="middle">
              <a-col :xs="{span: 24}" :sm="{span: 24}" :lg="{span: 24}">
                <h1 class="r-heading r-text-white">
                  {{ position.title }}
                </h1>
              </a-col>
            </a-row>
            <a-row type="flex" justify="center" align="middle">
              <a-col :xs="{span: 8}" :sm="{span: 8}" :lg="{span: 6}">
                <h3 class="r-heading r-text-white">
                  <a-icon type="environment"/>
                  <br>
                  {{ position.city.name }}
                </h3>
              </a-col>
              <a-col :xs="{span: 8}" :sm="{span: 8}" :lg="{span: 6}">
                <h3 class="r-heading r-text-white">
                  <a-icon type="solution"/>
                  <br>
                  {{ position.type_formatted }}
                </h3>
              </a-col>
              <a-col :xs="{span: 8}" :sm="{span: 8}" :lg="{span: 6}">
                <h3 class="r-heading r-text-white">
                  <a-icon type="bank"/>
                  <br>
                  {{ position.department }}
                </h3>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle">
          <a-col :xs="{span: 24}" :md="{span: 16}" :lg="{span: 12}" class="r-p-48">
            <a-breadcrumb class="r-same-height">
              <a-breadcrumb-item>
                <nuxt-link class="r-text-primary"
                           :to="'/career/openings'"
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
        </a-row>
        <a-row type="flex" justify="center" align="middle">
          <a-col :xs="{span: 24}" :md="{span: 16}" :lg="{span: 12}" class="r-bg-white r-p-48">
            <a-row class="" type="flex" justify="start" align="middle">
              <a-col :lg="{span: 24}">
                <article class="r-article" v-html="position.description"></article>
              </a-col>
            </a-row>
            <a-row class="r-mt-48" type="flex" justify="start" align="middle">
              <a-col :lg="{span: 24}" class="">
                <a :href="'/career/' + position.slug + '/apply'">
                  <a-button size="large" type="secondary">
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
export default {
  props: {},
  data () {
    return {
      hasData: false,
      position: {},
    }
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
      let params = {}
      let path = this.$route.path
      let $this = this

      axios.get(path, params)
        .then(response => {
          // console.log("setting position >> before");
          console.log(response.data)

          $this.position = response.data.position
          $this.hasData = true

          // console.log("setting position >> after");
        })
        .catch(e => {
          console.log(e)
        })
    }
  }
}
</script>
