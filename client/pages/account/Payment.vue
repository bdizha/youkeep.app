<template>
  <r-account>
    <a-row type="flex" justify="start" align="middle">
      <a-col class="gutter-row" :xs="{ span: 24 }"
             :sm="{ span: 24 }" :lg="{ span: 24 }">
        <a-card title="PAYMENT METHODS" style="width: 100%; margin-bottom: 20px;">
          <a-row type="flex" justify="start" align="middle">
            <a-col class="gutter-row r-store-page" :xs="{ span: 24 }"
                   :sm="{ span: 24 }" :lg="{ span: 12 }">
              <h4 class="r-heading-light">
                Here you can manage all your payment methods.
              </h4>
            </a-col>
          </a-row>
          <r-account-card-list></r-account-card-list>
          <r-account-card-add></r-account-card-add>
        </a-card>
      </a-col>
    </a-row>
  </r-account>
</template>
<script>
  export default {
    name: 'r-account-payment',
    components: {},
    data() {
      return {
        radioStyle: {
          display: 'block',
          lineHeight: '24px',
          marginBottom: '24px'
        },
        hasData: false,
        card: {id: null},
        cards: [],
        modal: {
          current: null,
          isVisible: false,
          category: null,
          address: null,
        }
      };
    },
    mounted() {
      this.payload();
    },
    methods: {},
  };
</script>
