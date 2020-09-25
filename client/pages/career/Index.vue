<template>
  <r-page>
    <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                Current job openings at Shopple
              </h4>
              <h1 class="r-heading r-text-uppercase">
                <span class="r-text-primary">More dynamic,</span><br>
                <span class="r-text-secondary">Less boring.</span>
              </h1>
              <p class="r-text-normal">
                Shopple introduces a new way to shopping.
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
        <div class="r-page-header-photo">
          <div class="r-page-primary"
               style="background-image: url('/images/welcome-02.jpg')">
          </div>
        </div>
      </a-col>
    </a-row>
    <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <h1 class="r-heading">
                <span class="r-text-primary">Shopple careers</span>
              </h1>
              <p class="r-text-normal">
                Shopple is a consumer centric shopping platform that exists to transform
                the way shoppers find and make purchases by offering simple and
                convenient shopping and payment methods.
              </p>
              <a-row :gutter="[24,24]" type="flex" justify="start">
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <nuxt-link to="/career/openings">
                    <a-button
                      block
                      type="primary"
                      class="ant-btn"
                      size="large">
                      See openings
                    </a-button>
                  </nuxt-link>
                </a-col>
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <nuxt-link to="/contact-us">
                    <a-button class="r-btn-bordered-black"
                              block
                              type="secondary"
                              size='large'>
                      Contact us
                    </a-button>
                  </nuxt-link>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
import {mapGetters} from "vuex";
import axios from 'axios'

export default {
  name: 'r-career',
  props: {},
  data() {
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
  created() {
    this.payload();
  },
  methods: {
    payload() {
      let params = {};
      let path = this.$route.path;
      let $this = this;

      axios.get(path, params)
        .then(response => {
          console.log("setting positions >> before");
          console.log(response.data);

          $this.departments = response.data.departments;
          $this.hasData = true;

          console.log("setting positions >> after");
        })
        .catch(e => {
          console.log(e);
        });
    }
  }
};
</script>
