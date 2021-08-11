<template>
  <r-page>
    <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
      <a-col :lg="{ span: 24 }"
             :md="{ span: 24 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-card>
          <a-card-meta>
            <template slot="description">
              <h2 class="r-heading r-text-secondary">
                <span v-if="!department">Current job openings at Graphigem</span>
                <span v-if="department" v-on:click="onDepartment(null)">
                  <a-icon type="left"/>
                  {{ department.name }}
                </span>
              </h2>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :lg="{ span: 8 }"
             :md="{ span: 10 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-card>
          <a-list :data-source="departments">
            <a-list-item slot="renderItem"
                         slot-scope="item, index"
            >
              <template>
                <span v-on:click="onDepartment(item)">
                  {{ item.name }}
                </span>
              </template>
            </a-list-item>
          </a-list>
        </a-card>
      </a-col>
      <a-col :lg="{ span: 16 }" :sm="{ span: 14 }" :xs="{ span: 24 }" class="gutter-row">
        <a-row v-if="departments.length == 0" justify="center" type="flex">
          <a-col :span="24" class="gutter-row">
            <a-card>
              <a-card-meta>
                <a-empty
                  :imageStyle="{ height: '81px',}"
                  image="/images/icon_pattern_grey.svg"
                >
                  <span slot="description">Sorry. There aren't any job openings currently.</span>
                  <a-button class="ant-btn-primary r-btn-secondary" size="large">Shop now</a-button>
                </a-empty>
              </a-card-meta>
            </a-card>
          </a-col>
        </a-row>
        <a-card v-for="(position, index) in positions"
                v-if="!department || position.department_type === department.id"
                :key="index"
                :hoverable="true"
                class="r-p-24 r-mb-48"
        >
          <a-row>
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" class="gutter-row">
              <a :href="'/career/' + position.slug">
                <h4 class="r-heading">{{ position.title }}</h4>
              </a>
            </a-col>
          </a-row>
          <a-row>
            <a-col :lg="{ span: 18 }" :sm="{ span: 16 }" :xs="{ span: 14 }"
                   class="gutter-row"
            >
              <a :href="'/career/' + position.slug">
                <a-row>
                  <a-col :lg="{ span: 24 }" :sm="{ span: 12 }"
                         :xs="{ span: 24 }"
                         class="gutter-row"
                  >
                    <h4 class="r-text-normal">{{
                        position.city.name
                      }}
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :sm="{ span: 12 }"
                         :xs="{ span: 24 }"
                         class="gutter-row"
                  >
                    <h4 class="r-text-primary r-text-capitalize">
                      {{ position.type_formatted }}
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :sm="{ span: 12 }"
                         :xs="{ span: 24 }"
                         class="r-text-secondary r-text-capitalize"
                         v-on:click="onDepartment(department)"
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
        </a-card>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-career-list',
  props: {},
  data () {
    return {
      department: null
    }
  },
  computed: mapGetters({
    departments: 'base/departments',
    positions: 'base/positions',
    modal: 'base/modal'
  }),
  created () {
  },
  mounted () {
    this.payload()
  },
  methods: {
    async payload () {
      const { data } = await this.$store.dispatch('base/onCareers', {})
    },
    onDepartment (department) {
      this.department = department

      console.log('department', department)
    }
  }
}
</script>
