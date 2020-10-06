<template>
  <r-page>
    <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <h1 class="r-heading">
                <span class="r-text-secondary">How does Shopple work?</span>
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
              <a-row :gutter="[24,24]" type="flex" justify="start">
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <a-button @click="onModal('register')" class="r-btn-secondary"
                            block
                            type="secondary"
                            size='large'>
                    Join now
                  </a-button>
                </a-col>
                <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 12 }"
                       :md="{ span: 12 }"
                       :lg="{ span: 12 }">
                  <a-button @click="onStoreTray" class="r-btn-bordered-grey"
                            block
                            type="secondary"
                            size='large'>
                    Shop directory
                  </a-button>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <div class="r-page-header-photo">
                <div class="r-page-primary"
                     style="background-image: url('/images/welcome-03.jpg')">
                </div>
              </div>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
    <r-steps></r-steps>
    <a-row :gutter="[48,48]" type="flex" justify="justify">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
             :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card hoverable>
          <div slot="cover" class="r-card-cover-secondary">
            <a-icon class="r-icon r-icon-stroke r-icon-primary" type="shop"/>
          </div>
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light">
                Online and in-store options
              </h4>
              <p class="r-text-normal">
                We're changing how shopping is experienced. Get new products served to you based on your liking
                and
                shopping preferences.
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        &nbsp;
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card hoverable>
          <div slot="cover" class="r-card-cover-secondary">
            <a-icon class="r-icon r-icon-stroke r-icon-primary" type="shopping"/>
          </div>
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light">
                One stop shopping platform
              </h4>
              <p class="r-text-normal">
                We're changing how shopping is experienced. Get new products served to you based on your liking
                and
                shopping preferences.
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
             style="text-align: left;">
        <a-card hoverable>
          <div slot="cover" class="r-card-cover-secondary">
            <a-icon class="r-icon r-icon-stroke r-icon-primary" type="dollar"/>
          </div>
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading-light">
                Instant checkout finance
              </h4>
              <p class="r-text-normal">
                We're changing how shopping is experienced. Get new products served to you based on your liking
                and
                shopping preferences.
              </p>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
  </r-page>
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
