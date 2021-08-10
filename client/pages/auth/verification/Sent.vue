<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 12 }"
           :sm="{ span: 12 }" :xs="{ span: 24 }"
    >
      <div v-if="true" style="width: 100%; margin: 90px 0;">
        <img :alt="title" style="height: 36px;" src="/images/addtrack.png"/>
      </div>
      <a-card class="r-mt-48" title="Thank You For Signing Up!">
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <p class="r-text-medium">
              Check the confirmation email at {{ user ? '' : 'bata@graphigem.com' }}
            </p>
          </a-col>
          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <p class="r-text-normal">
              Note: If you do not receive the email in few minutes:
            </p>
          </a-col>
          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <p class="r-checked-item">
              <a-icon class="r-checked-item-icon" type="check"></a-icon>
              check spam folder
            </p>
            <p class="r-checked-item">
              <a-icon class="r-checked-item-icon" type="check"></a-icon>
              verify if you typed your email correctly
            </p>
            <p class="r-checked-item">
              <a-icon class="r-checked-item-icon" type="check"></a-icon>
              check spam folder
            </p>
            <p class="r-checked-item">
              <a-icon class="r-checked-item-icon" type="check"></a-icon>
              if you can't resolve the issue, please contact
              <a href="mailto:support@spazamall.app" target="_blank"
                 rel="noopener noreferrer"
              >support@spazamall.app</a>.
            </p>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
  </a-row>
</template>

<script>
export default {
  layout: 'single',
  data: () => ({}),

  methods: {
    onResend () {
      this.$router.push({ name: 'verification.resend' })
    }
  }
}
</script>
