<template>
  <r-page>
    <a-row type="flex" justify="center">
      <a-col class="gutter-row" :span="24">
        <div class="r-bg-primary-light">
          <a-row type="flex" justify="center">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
              <a-row type="flex" justify="start">
                <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ offset: 3, span: 9 }"
                       :lg="{ offset: 3, span: 9 }">
                  <a-row type="flex" justify="start">
                    <a-col class="r-pv-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                           style="text-align: left;">
                      <h1 class="r-heading">
                        <span class="r-text-primary">Shopple careers</span>
                      </h1>
                      <p class="r-text-normal">
                        Shopple is a consumer centric shopping platform that exists to transform
                        the way shoppers find and make purchases by offering simple and
                        convenient shopping and payment methods.
                      </p>
                    </a-col>
                  </a-row>
                  <a-row class="r-mb-48" type="flex" justify="start">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 20 }"
                           :lg="{ span: 18 }">
                      <a-row :gutter="[24,24]" type="flex" justify="start">
                        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                               :md="{ span: 12 }"
                               :lg="{ span: 12 }">
                          <router-link class="r-inline-block" to="/career/openings">
                            <a-button type="primary"
                                      class="ant-btn ant-btn-secondary r-btn-black"
                                      size="large">
                              See openings
                            </a-button>
                          </router-link>
                        </a-col>
                        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                               :md="{ span: 12 }"
                               :lg="{ span: 12 }">
                          <router-link class="r-inline-block" to="/contact-us">
                            <a-button class="r-btn-bordered-black"
                                      block
                                      type="secondary"
                                      size='large'>
                              Contact us
                            </a-button>
                          </router-link>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
                  <div class="r-page-header-photo">
                    <div class="r-page-primary"
                         style="background-image: url('/images/hiw.jpg')">
                    </div>
                  </div>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
    <a-row class="r-mv-48" type="flex">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
        <a-row type="flex" justify="start"
               class="r-radius-right-white r-text-center">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18, offset:6 }"
                 :lg="{span: 18, offset:6}" class="r-p-48">
            <a-row :gutter="[48,48]" type="flex" justify="start"
                   class="r-radius-right-white">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                     :lg="{span: 8}">
                <div class="r-icon r-icon-primary">
                  <a-icon type="qrcode"/>
                </div>
                <h4 class="r-heading-light r-text-uppercase">
                  A diverse team culture
                </h4>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                     :lg="{span: 8}">
                <div class="r-icon r-icon-primary">
                  <a-icon type="usergroup-add"/>
                </div>
                <h4 class="r-heading-light r-text-uppercase">
                  A fast growing company
                </h4>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                     :lg="{span: 8}">
                <div class="r-icon r-icon-primary">
                  <a-icon type="deployment-unit"/>
                </div>
                <h4 class="r-heading-light r-text-uppercase">
                  A place for any lifestyle
                </h4>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <a-row type="flex" justify="center" :gutter="24">
      <a-col class="gutter-row r-p-48" :xs="{ span: 24 }" :md="{ span: 18 }"
             :lg="{ span: 18 }">
        <a-row type="flex" justify="center">
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }" class="r-p-48">
            <h2 class="r-heading">
              Working at Shopple
            </h2>
            <p class="r-text-normal">
              Work with people who are tech-savvys, font-fanatics, word-wizards, data enthusiasts and
              of course, beer experts (yes, we're an online shop with big dreams). We work hard, think
              big, and play well.
              And we do it together, because at the Mother Shopple, we’re family.
            </p>
            <p class="r-text-normal">
              Nothing great has ever been built in a day, and it definitely wasn’t built in a flash.
              At Shopple, we’re building something great, something unimaginable at this juncture. We
              provide our service as a token of appreciation to the society that serves us.
            </p>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }" class="r-p-48">
            <h2 class="r-heading">
              Why work with Shopple?
            </h2>
            <a-row class="r-mb-48" type="flex" justify="start">
              <a-col :span="24">
                <a-checkbox checked='true' :value="1">
                  Unlimited coffee
                </a-checkbox>
              </a-col>
              <a-col :span="24">
                <a-checkbox checked='true' :value="1">
                  Dog Fridays
                </a-checkbox>
              </a-col>
              <a-col :span="24">
                <a-checkbox checked='true' :value="1">
                  Unlimited coffee
                </a-checkbox>
              </a-col>
              <a-col :span="24">
                <a-checkbox checked='true' :value="1">
                  Growth opportunities
                </a-checkbox>
              </a-col>
              <a-col :span="24">
                <a-checkbox checked='true' :value="1">
                  Coworkers all over the RSA
                </a-checkbox>
              </a-col>
              <a-col :span="24">
                <a-checkbox checked='true' :value="1">
                  Unlimited snacks and pool games
                </a-checkbox>
              </a-col>
              <a-col :span="24">
                <a-checkbox checked='true' :value="1">
                  A casual dress code
                </a-checkbox>
              </a-col>
            </a-row>
            <router-link class="r-inline-block" to="/career/openings">
              <a-button type="primary"
                        class="ant-btn r-btn-primary" size="large">
                See openings
              </a-button>
            </router-link>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
  export default {
    name: 'r-careers',
    props: {},
    data() {
      return {}
    },
    mounted() {
    },
    methods: {},
  };
</script>
