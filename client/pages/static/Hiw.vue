<template>
  <r-page>
    <a-row type="flex" justify="center">
      <a-col class="gutter-row" :span="24">
        <div class="r-bg-primary-light">
          <a-row type="flex" justify="center">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
              <a-row type="flex" justify="start">
                <a-col class="r-padding-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ offset: 3, span: 9 }"
                       :lg="{ offset: 3, span: 9 }">
                  <a-row type="flex" justify="start">
                    <a-col class="r-padding-vertical-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                           :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                           style="text-align: left;">
                      <h1 class="r-heading">
                        <span class="r-text-primary">How does Kshop work?</span>
                      </h1>
                      <p class="r-text-normal">
                        It doesn’t matter when or where you shop, as long as
                        you do it with Kshop, you are fully in control.
                      </p>
                      <p class="r-text-normal">
                        In our mobile app you can do all the shopping you need within a few
                        minutes. However, shopping online can
                        take
                        some getting used to. That is why we are happy to explain how it works.
                      </p>
                    </a-col>
                  </a-row>
                  <a-row class="r-margin-bottom-48" type="flex" justify="start">
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
    <a-row class="r-margin-vertical-48" type="flex">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
        <a-row type="flex" justify="start"
               class="r-radius-right-white r-text-center">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18, offset:6 }"
                 :lg="{span: 18, offset:6}" class="r-padding-48">
            <a-row :gutter="[48,48]" type="flex" justify="start"
                   class="r-radius-right-white">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                     :lg="{span: 8}">
                <div class="r-icon">
                  <a-icon type="shop"/>
                </div>
                <h4 class="r-heading r-text-uppercase">
                  Online and in-store options
                </h4>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                     :lg="{span: 8}">
                <div class="r-icon">
                  <a-icon type="shopping"/>
                </div>
                <h4 class="r-heading r-text-uppercase">
                  One stop shopping platform
                </h4>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                     :lg="{span: 8}">
                <div class="r-icon">
                  <a-icon type="dollar"/>
                </div>
                <h4 class="r-heading r-text-uppercase">
                  Instant checkout finance
                </h4>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <r-steps :has-wave="false" :has-title="true" heading="Kpay shopping experience"></r-steps>
    <a-row class="r-text-center" type="flex" justify="center" :gutter="24">
      <a-col class="gutter-row r-padding-48" :xs="{ span: 24 }" :md="{ span: 24 }"
             :lg="{ span: 24 }">
        <a-row type="flex" justify="center">
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }" class="r-padding-vertical-48">
            <h2 class="r-heading r-text-uppercase">
              Shop online with Kshop
            </h2>
            <p class="r-text-normal">
              Join the Kshop online experience and get better deals in-store and online today.
            </p>
          </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle">
          <a-col class="r-padding-bottom-48" :xs="{ span: 24 }" :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-button @click="onModal('login')" size="large" type="primary">
              Let's go
            </a-button>
          </a-col>
        </a-row>
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
      onModal(current) {
        this.modal.isVisible = true;
        this.modal.current = current;
        this.$store.dispatch('app/onModal', modal);
      },
      onStoreTray() {
        this.$store.dispatch('app/onStoreTray', true);
      },
    },
  };
</script>
