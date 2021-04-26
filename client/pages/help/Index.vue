<template>
  <r-page>
    <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 24 }"
             :lg="{ span: 24 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <h1 class="r-heading">
                Help center
              </h1>
              <h3 class="r-heading">
                How can we help?
              </h3>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
    <a-row v-if="hasData" type="flex" justify="center" align="middle">
      <a-col :xs="{span: 24}" :sm="{span: 18}" :md="{span: 16}" :lg="{span: 12}">
        <a-row :gutter="16" type="flex" justify="start" align="middle">
          <a-col class="gutter-row" :span="24">
            <a-row :gutter="36" type="flex" justify="start" align="middle">
              <a-col v-for="(section, s) in help.sections"
                     :key="'section-' + s" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 12}"
                     :lg="{span: 12}"
                     class="r-page-padding r-ph-24 r-text-left">
                <a-row type="flex" justify="center" :gutter="0">
                  <a-col class="gutter-row" :span="24">
                    <h3 class="r-help-header r-heading r-text-capitalize">
                      {{ section.name }}
                    </h3>
                  </a-col>
                </a-row>
                <a-row v-for="(group, g) in section.groups"
                       :key="'group-' + g"
                       type="flex" justify="center"
                       class="r-help-row">
                  <a-col class="gutter-row" :span="18">
                    <a class="r-same-height r-help-text"
                       :href="'/help/' + group.id + '/' + group.slug">
                      {{ group.name }}
                    </a>
                  </a-col>
                  <a-col class="gutter-row" :span="6" style="text-align: right">
                    <a class="r-same-height r-text-primary" href="/hiw">
                      <a-icon style="font-size: 14px;" type="right"/>
                    </a>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
import {mapGetters} from "vuex";
import axios from "axios";

export default {
  name: 'r-help',
  props: {},
  data() {
    return {
      hasData: true
    }
  },
  computed: mapGetters({
    help: 'page/help'
  }),
  async fetch({store, params}) {
    // let { data } = await axios.get('/help')
    // store.commit('page/FETCH_HELP_SUCCESS', data)
  },
  mounted() {
    this.payload();
  },
  methods: {
    payload() {
    }
  },
};
</script>
