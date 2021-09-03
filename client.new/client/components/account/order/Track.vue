<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :xs="{ span: 24 }">
      <a-card style="width: 100%;" title="ORDER TIMELINE">
        <a-steps direction="vertical" size="large">
          <a-step description="We are awaiting payment for your order"
                  title="Order received"
          />
          <a-step description="Your order is being prepared by our operations team"
                  title="Order is being processed"
          />
          <a-step description="Your order has been dispatched to our courier partner"
                  title="Parcel is en-route"
          />
          <a-step description="Your order has been delivered!"
                  title="Order delivered"
          />
        </a-steps>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-account-order-track',
  data () {
    return {}
  },
  created () {
  },
  methods: {
    onTrack () {
    }
  }
}
</script>
