<template>
  <r-modal-template :closable="closable"
                    :current="formName"
                    :mask-closable="maskClosable"
  >
    <a-row :gutter="[24,24]" justify="center" type="flex">
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <h3 class="r-heading r-text-secondary">
          Your account is being reviewed for activation
        </h3>
      </a-col>
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <p class="r-text-medium">
          Since Spazaland is a closed network, we need to review all accounts to ensure the integrity of the platform.
        </p>
      </a-col>
      <a-col :xs="{ span: 24 }">
        <p class="r-text-normal">
          We may reach out for more information to verify your account details further. You will receive an update on your account within 1 business day.
        </p>
      </a-col>
    </a-row>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'RLogin',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      formName: 'verify'
    }
  },
  computed: mapGetters({
  }),
  created () {
  },
  methods: {
  }
}
</script>
