<template>
  <r-account>
    <a-row align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }" class="gutter-row"
      >
        <a-card v-if="hasTitle" class="r-mb-24" style="width: 100%;" title="PAYMENT METHODS">
          <a-row align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }" class="r-store-page"
            >
              <div class="r-text-small">
                <template v-if="hasCards">
                  Here you can manage all your payment cards.
                </template>
                <template v-if="!hasCards">
                  Your payment card is currently not set.
                </template>
              </div>
            </a-col>
          </a-row>
        </a-card>
        <r-account-card-list></r-account-card-list>
        <r-account-card-add></r-account-card-add>
      </a-col>
    </a-row>
  </r-account>
</template>
<script>
export default {
  components: {},
  data () {
    return {
      radioStyle: {
        display: 'block',
        lineHeight: '24px',
        marginBottom: '24px'
      },
      hasData: false,
      card: { id: null },
      cards: [],
      modal: {
        current: null,
        isVisible: false,
        category: null,
        address: null,
      }
    }
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
