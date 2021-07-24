<template>
  <r-page>
    <a-row align="middle" justify="center" type="flex">
      <a-col :lg="{span: 12}" :md="{span: 16}" :xs="{span: 24}" class="r-p-48 r-mv-48">
        <a-row align="middle" justify="space-around" type="flex">
          <a-col :span="24">
            <h1 class="r-heading r-text-secondary">
              Current job openings at Spazamall
            </h1>
          </a-col>
        </a-row>
        <a-row v-if="hasData" align="left" class="r-mt-48" justify="center" type="flex">
          <a-col v-for="(department, d) in departments" :key="d" :lg="{ span: 24 }"
                 :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-career r-text-left"
          >
            <a-row class="r-margin-top-24">
              <a-col :lg="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <h3 class="r-heading r-text-capitalize r-text-secondary">{{ department.name }}</h3>
              </a-col>
            </a-row>
            <a-row v-for="(position, p) in department.positions" :key="p" class="r-mv-12">
              <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <a-card>
                  <a-row align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row>
                        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }">
                          <a :href="'/career/' + position.slug">
                            <h4 class="r-heading">{{ position.title }}</h4>
                          </a>
                        </a-col>
                      </a-row>
                      <a-row>
                        <a-col :lg="{ span: 18 }" :sm="{ span: 16 }"
                               :xs="{ span: 14 }"
                        >
                          <a :href="'/career/' + position.slug">
                            <a-row>
                              <a-col :lg="{ span: 24 }"
                                     :sm="{ span: 12 }"
                                     :xs="{ span: 24 }"
                              >
                                <h4 class="r-text-normal">{{
                                    position.city.name
                                  }}
                                </h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }"
                                     :sm="{ span: 12 }"
                                     :xs="{ span: 24 }"
                              >
                                <h4 class="r-text-primary r-text-capitalize">
                                  {{ position.type_formatted }}
                                </h4>
                              </a-col>
                              <a-col :lg="{ span: 24 }"
                                     :sm="{ span: 12 }"
                                     :xs="{ span: 24 }"
                                     class="r-text-secondary r-text-capitalize"
                              >
                                {{ position.department }}
                              </a-col>
                            </a-row>
                          </a>
                        </a-col>
                        <a-col :lg="{ span: 6 }" :sm="{ span: 8 }"
                               :xs="{ span: 10 }"
                               class="r-padding-24 gutter-row r-text-right"
                        >
                          <a :href="'/career/' + position.slug + '/apply'"
                             class="r-same-height"
                          >
                            <a-button class="r-btn-secondary"
                                      size="large" type="secondary"
                            >
                              Apply
                            </a-button>
                          </a>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-card>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
        <a-row v-if="hasData && departments.length == 0" justify="center" type="flex">
          <a-col :span="24">
            <a-empty
              :imageStyle="{ height: '81px',}"
              image="/images/icon_pattern_grey.svg"
            >
              <span slot="description">Sorry. There aren't any job openings currently.</span>
              <a-button class="ant-btn-primary r-btn-secondary" size="large">Shop now</a-button>
            </a-empty>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  props: {},
  data () {
    return {
      departments: [],
      modal: {
        isVisible: null,
        current: null,
        message: null,
      },
      hasData: true
    }
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
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
          console.log('setting positions >> before')
          console.log(response.data)

          $this.departments = response.data.departments
          $this.hasData = true

          console.log('setting positions >> after')
        })
        .catch(e => {
          console.log(e)
        })
    }
  }
}
</script>
