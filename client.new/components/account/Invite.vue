<template>
  <r-account>
    <a-row align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 24 }"
             :sm="{ span: 24 }" :xs="{ span: 24 }"
      >
        <a-card class="r-mb-24" style="width: 100%;" title="INVITE A FRIEND">
          <a-row align="start" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }" class="r-store-page"
            >
              <h4 class="r-heading-light">
                Bring 1 friend, get R100!
              </h4>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
    </a-row>
    <a-row :gutter="24" class="r-mt-24" justify="end" type="flex">
      <a-col :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 12 }" :xs="{ span: 12 }">

      </a-col>
      <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
        <a-button :class="'r-btn-secondary'" block
                  html-type="button"
                  size="large"
                  type="secondary"
        >
          Invite
        </a-button>
      </a-col>
    </a-row>
  </r-account>
</template>
<script>
export default {
  components: {},
  data () {
    return {
      formLayout: 'horizontal',
      formInvite: this.$form.createForm(this, { name: 'form_invite' }),
      modal: {
        current: null,
        isVisible: false
      }
    }
  },
  methods: {},
}
</script>
