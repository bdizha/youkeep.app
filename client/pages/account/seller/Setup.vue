<template>
  <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="gutter-row"
    >
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <a-steps :current="currentStep">
            <a-step v-for="(step, index) in steps"
                    :key="index"
                    :title="step.title">
            </a-step>
          </a-steps>
        </a-col>
        <a-col v-if="currentStep == 0" :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <a-card title="Business Information">
            <r-account-seller-business></r-account-seller-business>
          </a-card>
        </a-col>
        <a-col v-if="currentStep == 1" :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <a-card title="Seller Information">
            <r-account-seller-account></r-account-seller-account>
          </a-card>
        </a-col>
        <a-col v-if="currentStep == 2" :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <a-card title="Billing Information">
            <r-account-seller-billing></r-account-seller-billing>
          </a-card>
        </a-col>
        <a-col v-if="currentStep == 3" :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <a-card title="Store Information">
            <r-account-seller-store></r-account-seller-store>
          </a-card>
        </a-col>
        <a-col v-if="currentStep == 4" :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <a-card title="Confirmation">
            <r-account-seller-show></r-account-seller-show>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'column',
  data () {
    return {
      steps: [
        {
          title: 'Business Information'
        },
        {
          title: 'Seller Information'
        },
        {
          title: 'Billing Information'
        },
        {
          title: 'Store Setup'
        }
      ]
    }
  },
  computed: mapGetters({
    currentStep: 'account/currentStep'
  }),
  methods: {
    onModal (current) {
      this.modal.isVisible = true
      this.modal.current = current
      this.$store.dispatch('app/onModal', this.modal)
    }
  }
}
</script>
