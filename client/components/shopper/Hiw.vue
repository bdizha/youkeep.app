<template>
  <a-row :gutter="[48,96]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <r-tabs active-key="customer" theme="shopper"></r-tabs>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
               class="r-ph-24 r-text-center"
        >
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h2 class="r-heading">
                Why millions of shoppers <span class="r-text-secondary">choose</span> Spazamall
              </h2>
            </a-col>
            <a-col :lg="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-card class="r-bg-primary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                        <r-avatar :dataSrc="'/images/content/customer-02.svg'" :size="90" class="r-avatar-auto" shape="circle"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                        Perfectly categorized and reconciled transactions come standard
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-card class="r-bg-primary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                        <r-avatar :dataSrc="'/images/content/customer-03.svg'" :size="90" class="r-avatar-auto" shape="circle"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                        Our Client Research Team tackles complex questions and is 100% free
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-text-center">
              <a-card class="r-bg-primary-light">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                        <r-avatar :dataSrc="'/images/content/customer-06.svg'" :size="90" class="r-avatar-auto" shape="circle"
                        ></r-avatar>
                      </a-col>
                      <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                        We always respond to messages or calls in one business day or less
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
               class="r-ph-24"
        >
          <a-card class="r-bg-white">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[96,48]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                              Better way to shop
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h3 class="r-heading">
                              Spazamall <span class="r-text-primary">gives</span> you the flexibility to <span class="r-text-secondary">shop</span> however you like.
                            </h3>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading">
                              You can use it with:
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <p class="r-text-normal">
                              <a-icon slot="prefix" class="r-text-secondary" type="check"/>
                              Your bank account
                            </p>
                            <p class="r-text-normal">
                              <a-icon slot="prefix" class="r-text-secondary" type="check"/>
                              Your debit or credit card
                            </p>
                            <p class="r-text-normal">
                              <a-icon slot="prefix" class="r-text-secondary" type="check"/>
                              New payment options like <a href="https://paise.shop" target="_blank">Spazamall</a>
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <r-avatar  data-src="/images/content/screen-02-secondary.png" :size="300" class="r-avatar-block"
                    ></r-avatar>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
               class="r-ph-24"
        >
          <a-card class="r-bg-white">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[96,48]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <r-avatar data-src="/images/content/screen-01-secondary.png" :size="300" class="r-avatar-block"
                    ></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                              Buy online at Spazamall
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h3 class="r-heading">
                              Spazamall is the best way to <span class="r-text-secondary">find</span> and <span class="r-text-primary">purchase</span> whatever your haert desires.
                            </h3>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <p class="r-text-medium">
                              Spazamall partners with trusted and local stores that ensures faster deliveries in less
                              than an hour for some lucky shoppers like you.
                            </p>
                            <p class="r-text-normal">
                              Spazamall is created to offer you the best
                              shopping experience on the online market.
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-shopper-hiw',
  props: {},
  data () {
    return {}
  },
  mounted () {
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = false
      modal.current = 'register'
      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
