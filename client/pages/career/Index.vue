<template>
  <r-page>
    <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card>
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light r-text-uppercase">
                Careers at Shopple
              </h4>
              <h1 class="r-heading">
                <span class="r-text-secondary">More dynamic,</span><br>
                <span>Less conventional</span>
              </h1>
              <p class="r-text-normal">
                Shopple introduces a new way to shopping
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
        <a-card>
          <div slot="cover">
            <r-avatar shape="square" :src="'/assets/' + banner"/>
          </div>
        </a-card>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" type="flex" justify="start">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
             style="text-align: left;">
        <a-row :gutter="[24,24]" type="flex" justify="end" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-card>
              <div slot="cover" class="r-card-cover-secondary r-p-24">
                <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
                  <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }"
                         :md="{ span: 24 }"
                         :lg="{ span: 24 }">
                    <h3 class="r-heading">
                      Yes, we're hiring now
                    </h3>
                    <p class="r-text-normal">
                      Bring your animal friend (a bird, or a dog, and even a cat/doll) to keep you super focused if
                      necessary.
                    </p>
                  </a-col>
                  <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                         :md="{ span: 12 }"
                         :lg="{ span: 12 }">
                    <nuxt-link to="/career/openings">
                      <a-button
                        block
                        type="secondary"
                        class="r-btn-secondary"
                        size="default">
                        See openings
                      </a-button>
                    </nuxt-link>
                  </a-col>
                  <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                         :md="{ span: 12 }"
                         :lg="{ span: 12 }">
                    <nuxt-link to="/contact-us">
                      <a-button class="r-btn-bordered-grey"
                                block
                                type="secondary"
                                size='default'>
                        Contact us
                      </a-button>
                    </nuxt-link>
                  </a-col>
                </a-row>
              </div>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" type="flex" justify="start">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }"
             style="text-align: left;">
        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-card>
              <a-card-meta>
                <template slot="description">
                  <h4 class="r-heading-light r-text-uppercase">
                    Innovative
                  </h4>
                  <h4 class="r-heading r-text-secondary">
                    Transforming
                    the way shopping is experienced
                  </h4>
                  <p class="r-text-normal">
                    Shopple is a consumer centric platform that transforms
                    the way shoppers experience their shopping.
                  </p>
                  <p class="r-text-normal">
                    If you take innovation intelligently and methodically, you're in the right place with unlimited
                    possibilities.
                  </p>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-card>
              <a-card-meta>
                <template slot="description">
                  <h4 class="r-heading-light r-text-uppercase">
                    Dynamic
                  </h4>
                  <h4 class="r-heading r-text-secondary">
                    Why we do what we do
                  </h4>
                  <p class="r-text-normal">
                    At Shopple, we are building a shopping experience that helps millions of people be effortlessly in
                    control of their shopping experience.
                  </p>
                  <p class="r-text-normal">
                    It's all about giving back our customers the control of their shopping capacity.
                  </p>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-card>
              <a-card-meta>
                <template slot="description">
                  <h4 class="r-heading-light r-text-uppercase">
                    Progressive
                  </h4>
                  <h4 class="r-heading r-text-secondary">
                    Function with new tools
                  </h4>
                  <p class="r-text-normal">
                    You want to create bright ideas, achieve great work & cash out.
                  </p>
                  <p class="r-text-normal">
                    We use the latest technologies to solve problems (AI, Graphical Data Tool Sets). Customer
                    satisfaction
                    comes first, create products which users love.
                  </p>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                 :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-card>
              <a-card-meta>
                <template slot="description">
                  <h4 class="r-heading-light r-text-uppercase">
                    Collaborative
                  </h4>
                  <h4 class="r-heading r-text-secondary">
                    Shopple as a specialist house
                  </h4>
                  <p class="r-text-normal">
                    We work together as set of teams within teams of different specialities. Great work mates are at the
                    core of the work we do, here.
                  </p>
                  <p class="r-text-normal">
                    We incentives making mistakes and this helps to foster the spirit of innovation with as minimum
                    friction
                    and costs as possible.
                  </p>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
        </a-row>
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
      banner: 'art-04.png',
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
