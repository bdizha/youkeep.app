<template>
  <r-page>
    <a-row :gutter="[24,24]" type="flex" justify="start" align="top">
      <a-col :xs="{ span: 24 }"
             :sm="{ span: 24 }"
             :md="{ span: 24 }"
             :lg="{ span: 24 }">
        <a-card>
          <a-card-meta>
            <template slot="description">
              <h2 class="r-heading r-text-secondary">
                <span v-if="!department">Current job openings at Shopple</span>
                <span v-if="department" v-on:click="onDepartment(null)">
                  <a-icon type="left"/>
                  {{ department.name }}
                </span>
              </h2>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }"
             :sm="{ span: 24 }"
             :md="{ span: 10 }"
             :lg="{ span: 8 }">
        <a-card>
          <a-list :data-source="departments">
            <a-list-item slot="renderItem"
                         slot-scope="item, index">
              <template>
                <span v-on:click="onDepartment(item)">
                  {{ item.name }}
                </span>
              </template>
            </a-list-item>
          </a-list>
        </a-card>
      </a-col>
      <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 14 }" :lg="{ span: 16 }">
        <a-row v-if="departments.length == 0" type="flex" justify="center">
          <a-col class="gutter-row" :span="24">
            <a-card>
              <a-card-meta>
                <a-empty
                  image="/assets/icon_grey.svg"
                  :imageStyle="{ height: '81px',}">
                  <span slot="description">Sorry. There aren't any job openings currently.</span>
                  <a-button size="default" class="ant-btn-primary r-btn-secondary">Shop now</a-button>
                </a-empty>
              </a-card-meta>
            </a-card>
          </a-col>
        </a-row>
        <a-card :hoverable="true"
                class="r-p-24 r-mb-48"
                v-for="(position, index) in positions"
                v-if="!department || position.department_type === department.id"
                :key="index">
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
                    <h4 class="r-text-normal">{{
                        position.city.name
                      }}
                    </h4>
                  </a-col>
                  <a-col class="gutter-row" :xs="{ span: 24 }"
                         :sm="{ span: 12 }"
                         :lg="{ span: 24 }">
                    <h4 class="r-text-primary r-text-capitalize">
                      {{ position.type_formatted }}
                    </h4>
                  </a-col>
                  <a-col v-on:click="onDepartment(department)" class="r-text-secondary r-text-capitalize"
                         :xs="{ span: 24 }"
                         :sm="{ span: 12 }"
                         :lg="{ span: 24 }">
                    {{ position.department }}
                  </a-col>
                </a-row>
              </a>
            </a-col>
            <a-col class="r-padding-24 gutter-row r-text-right" :xs="{ span: 10 }"
                   :sm="{ span: 8 }"
                   :lg="{ span: 6 }">
              <a class="r-same-height"
                 :href="'/career/' + position.slug + '/apply'">
                <a-button type="secondary"
                          class="r-btn-secondary" size="default">
                  Apply
                </a-button>
              </a>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-career-list',
  props: {},
  data() {
    return {
      department: null
    }
  },
  computed: mapGetters({
    departments: 'base/departments',
    positions: 'base/positions',
    modal: 'base/modal'
  }),
  created() {
  },
  mounted() {
    this.payload();
  },
  methods: {
    async payload() {
      const {data} = await this.$store.dispatch('base/onCareers', {});
    },
    onDepartment(department) {
      this.department = department;

      console.log('department', department)
    }
  }
};
</script>
