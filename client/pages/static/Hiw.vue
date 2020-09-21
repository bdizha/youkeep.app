<template>
  <a-row type="flex" justify="center">
    <a-col class="gutter-row" :span="24">
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
                          <span class="r-text-primary">How does Shopple work?</span>
                        </h1>
                        <p class="r-text-normal">
                          It doesn’t matter when or where you shop, as long as
                          you do it with Shopple, you are fully in control.
                        </p>
                        <p class="r-text-normal">
                          In our mobile app you can do all the shopping you need within a few
                          minutes. However, shopping online can
                          take
                          some getting used to. That is why we are happy to explain how it works.
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
                            <a-button @click="onModal('register')" class="r-btn-primary"
                                      block
                                      type="secondary"
                                      size='large'>
                              Join now
                            </a-button>
                          </a-col>
                          <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                                 :md="{ span: 12 }"
                                 :lg="{ span: 12 }">
                            <a-button @click="onStoreTray" class="r-btn-bordered-black"
                                      block
                                      type="secondary"
                                      size='large'>
                              Shop directory
                            </a-button>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </a-col>
                  <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
                    <div class="r-page-header-photo">
                      <div class="r-page-primary"
                           style="background-image: url('/images/welcome-03.jpg')">
                      </div>
                    </div>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </div>
        </a-col>
      </a-row>
      <a-row class="r-mv-48" type="flex" justify="center">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }" :lg="{span: 18}">
          <r-steps></r-steps>
          <a-row :gutter="[24,24]" type="flex" justify="center"
                 class="r-text-center">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                   :lg="{span: 8}">
              <a-card hoverable>
                <div slot="cover" class="r-card-cover-secondary">
                  <a-icon class="r-icon r-icon-stroke r-icon-primary" type="shop"/>
                </div>
                <a-card-meta>
                  <template slot="description">
                    <h4 class="r-heading">
                      Online and in-store options
                    </h4>
                    <p class="r-text-normal">
                      We're changing how shopping is experienced. Get new products served to you based on your liking and
                      shopping preferences.
                    </p>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                   :lg="{span: 8}">
              <a-card hoverable>
                <div slot="cover" class="r-card-cover-secondary">
                  <a-icon class="r-icon r-icon-stroke r-icon-primary" type="shopping"/>
                </div>
                <a-card-meta>
                  <template slot="description">
                    <h4 class="r-heading">
                      One stop shopping platform
                    </h4>
                    <p class="r-text-normal">
                      We're changing how shopping is experienced. Get new products served to you based on your liking and
                      shopping preferences.
                    </p>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                   :lg="{span: 8}">
              <a-card hoverable>
                <div slot="cover" class="r-card-cover-secondary">
                  <a-icon class="r-icon r-icon-stroke r-icon-primary" type="dollar"/>
                </div>
                <a-card-meta>
                  <template slot="description">
                    <h4 class="r-heading">
                      Instant checkout finance
                    </h4>
                    <p class="r-text-normal">
                      We're changing how shopping is experienced. Get new products served to you based on your liking and
                      shopping preferences.
                    </p>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-hiw',
  props: {},
  data() {
    return {
      modal: {
        isVisible: false,
        current: null,
        message: null,
      },
    }
  },
  mounted() {
    this.modal = this.$store.state.modal;
  },
  methods: {
    onStoreTray() {
      this.$store.dispatch('app/onStoreTray', true);
    },
  },
};
</script>
