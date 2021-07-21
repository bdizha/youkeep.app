<template>
  <a-steps>
    <a-step status="finish" title="Account Information">
      <a-icon slot="icon" type="user" />
    </a-step>
    <a-step status="finish" title="Seller Information">
      <a-icon slot="icon" type="solution" />
    </a-step>
    <a-step status="process" title="Billing Information">
      <a-icon slot="icon" type="loading" />
    </a-step>
    <a-step status="wait" title="Done">
      <a-icon slot="icon" type="smile-o" />
    </a-step>
  </a-steps>
</template>
<script>
export default {
  name: 'r-account-seller-tabs',
  props: {
  },
  data () {
    return {
    }
  }
}
</script>
