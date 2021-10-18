<template>
  <div class="r-header" :class="{'r-header-dark': false}">
    <a-row v-if="!modal.isVisible" align="middle" justify="start" type="flex">
      <a-col :span="24" type="flex">
        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
          <a-col>
            <r-nav-item class="r-nav-item__logo r-p-r-0">
              <r-logo :is-icon="true"></r-logo>
            </r-nav-item>
          </a-col>
          <a-col flex="299px">
            <div class="r-nav-item">
              <div style="padding: 3px;" class="r-bg-primary-secondary r-border-radius-12">
                <a-row style="width: 100%" align="middle" justify="center" type="flex">
                  <a-col v-for="(deliveryType, index) in deliveryTypes"
                         :key="index"
                         :lg="{ span: 12 }" :md="{ span: 12 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p class="r-delivery-type"
                       :class="isCurrent(deliveryType)"
                       @click="setDeliveryType(deliveryType)">
                      {{ deliveryType.name }}
                    </p>
                  </a-col>
                </a-row>
              </div>
            </div>
          </a-col>
          <a-col>
            <div class="r-nav-item">
              <r-delivery-search size="default" :has-button="false"></r-delivery-search>
            </div>
          </a-col>
          <a-col flex="auto">
            <div class="r-nav-item">
              <r-search size="default" :has-button="false"></r-search>
            </div>
          </a-col>
          <a-col>
            <r-nav :has-nav="false"></r-nav>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <r-layout-menu v-if="modal.isVisible" class="r-layout-menu r-layout-menu-modal">
      <r-nav-item class="r-nav-item__text">
        <a-button class="r-btn-bordered-primary"
                  type="secondary"
                  @click="onModalClose"
        >
          <a-icon type="left"/>
          Back
        </a-button>
      </r-nav-item>
      <r-nav-item @click="onModalClose"
                  class="r-nav-item__logo">
        <r-logo :is-icon="true"></r-logo>
      </r-nav-item>
    </r-layout-menu>
    <r-drawer></r-drawer>
    <r-modal></r-modal>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-header',
  components: {},
  props: {
    isShow: { type: Boolean, required: false }
  },
  data () {
    return {
      deliveryType: 1,
      hasData: false,
      deliveryTypes: [
        {
          name: 'Delivery',
          key: 1
        },
        {
          name: 'Pickup',
          key: 2
        }
      ]
    }
  },
  computed: mapGetters({
    modal: 'base/modal',
    store: 'base/store',
    hasStore: 'base/hasStore',
    processes: 'base/processes'
  }),
  created () {
    this.hasData = true
    this.deliveryType = this.deliveryTypes[0]
  },
  methods: {
    setDeliveryType (deliveryType) {
      this.deliveryType = deliveryType
    },
    isCurrent (deliveryType) {
      return this.deliveryType === deliveryType ? `r-bg-white` : ``
    },
    onModalClose () {
      const modal = {}
      modal.isVisible = false
      modal.isClosable = false
      modal.current = null

      this.$store.dispatch('base/onModal', modal)
    }
  },
  watch: {}
}
</script>
