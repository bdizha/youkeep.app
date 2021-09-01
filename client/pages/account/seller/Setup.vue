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
                    :title="step.title"
            >
            </a-step>
          </a-steps>
        </a-col>
        <a-col v-if="currentStep == 0" :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <r-account-seller-business></r-account-seller-business>
        </a-col>
        <a-col v-if="currentStep == 1" :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <r-account-seller-account></r-account-seller-account>
        </a-col>
        <a-col v-if="currentStep == 2" :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <r-account-seller-billing></r-account-seller-billing>
        </a-col>
        <a-col v-if="currentStep == 3" :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <r-account-seller-store></r-account-seller-store>
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
          title: 'Supplier Information'
        },
        {
          title: 'Billing Information'
        },
        {
          title: 'Confirmation'
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
