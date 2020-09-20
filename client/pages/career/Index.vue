<template>
  <r-page class="r-bg-primary-light">
    <a-row type="flex" justify="center" align="middle">
      <a-col :xs="{span: 24}" :md="{span: 16}" :lg="{span: 12}" class="r-p-48 r-mv-48">
        <a-row type="flex" justify="space-around" align="middle">
          <a-col class="gutter-row r-text-center" :span="24">
            <h1 class="r-heading r-text-primary">
              Current job openings at Shopple
            </h1>
          </a-col>
        </a-row>
        <a-row class="r-mv-24" type="flex" justify="center" align="left">
          <a-col class="r-career r-text-left" v-for="(department, d) in careers.departments" :key="d"
                 :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
            <a-row>
              <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
                <h3 class="r-heading r-text-capitalize">{{ department.name }}</h3>
              </a-col>
            </a-row>
            <a-row class="r-mv-12" v-for="(position, p) in department.positions" :key="p">
              <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                <a-card>
                  <a-row type="flex" justify="start" align="middle">
                    <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :lg="{ span: 24 }">
                      <a-row>
                        <a-col class="gutter-row" :sm="{ span: 24 }" :lg="{ span: 24 }">
                          <a :href="'/career/' + position.slug">
                            <h4 class="r-heading">{{ position.title }}</h4>
                          </a>
                        </a-col>
                      </a-row>
                      <a-row>
                        <a-col class="gutter-row" :xs="{ span: 14 }" :sm="{ span: 16 }"
                               :lg="{ span: 18 }">
                          <a :href="'/career/' + position.slug">
                            <a-row>
                              <a-col class="gutter-row" :xs="{ span: 24 }"
                                     :sm="{ span: 12 }"
                                     :lg="{ span: 24 }">
                                <h4 class="r-text-grey">{{ position.city.name
                                  }}</h4>
                              </a-col>
                              <a-col class="gutter-row" :xs="{ span: 24 }"
                                     :sm="{ span: 12 }"
                                     :lg="{ span: 24 }">
                                <h4 class="r-text-grey-light">
                                  {{ position.type_formatted }}
                                </h4>
                              </a-col>

                              <a-col class="gutter-row" :xs="{ span: 24 }"
                                     :sm="{ span: 12 }"
                                     :lg="{ span: 24 }">
                                {{ position.department }}
                              </a-col>
                            </a-row>
                          </a>
                        </a-col>
                        <a-col class="r-p-24 gutter-row r-text-right" :xs="{ span: 10 }"
                               :sm="{ span: 8 }"
                               :lg="{ span: 6 }">
                          <a class="r-same-height"
                             :href="'/career/' + position.slug + '/apply'">
                            <a-button type="primary"
                                      class="r-btn-primary" size="default">
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
        <a-row v-if="careers.departments.length == 0" type="flex" justify="center">
          <a-col class="gutter-row r-text-center" :span="24">
            <a-empty
              image="/images/Shopple/icon_grey.svg"
              :imageStyle="{ height: '81px',}">
              <span slot="description">Sorry. There aren't any job openings currently.</span>
              <a-button size="large" class="ant-btn-primary r-btn-black">Shop now</a-button>
            </a-empty>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
  import {mapGetters} from "vuex";

  export default {
    name: 'r-career',
    props: {},
    data() {
      return {
        hasData: true
      }
    },
    computed: mapGetters({
      careers: 'page/careers'
    }),
    mounted() {
      this.payload();
    },
    methods: {
      payload() {
        this.$store.dispatch('page/fetchCareers');
      }
    },
  };
</script>
