<template>
  <r-page>
    <a-row type="flex" justify="center" align="middle">
      <a-col :span="24">
        <a-row type="flex" justify="space-around" align="middle">
          <a-col :lg="{span: 9 , offset: 3}" class="r-page-padding">
            <h1 class="r-heading r-text-secondary">
              Where does Shopple deliver?
            </h1>
            <p class="r-text-normal">
              In more and more cities in the South Africa, we deliver all your shopping conveniently
              at
              home for the lowest price. At this moment you can have Shopple deliver your shopping in
              more than 20 places. And we are expanding quickly, new cities are added every month! Do
              we already deliver in your area?
            </p>
          </a-col>
          <a-col :xs="{span: 24}" :lg="{span: 12}" style="position: relative;">
            <div class="r-page-header-photo r-page-art-primary">
              <img alt="Shopple - Carrers" src="/images/steps/red/step-032.svg">
            </div>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <a-row class="r-mv-48">
      <a-col :span="24">
        <a-row class="r-radius-right-white" type="flex"
               justify="space-around" align="middle"
        >
          <a-col :span="18" style="padding: 48px;">
            <p class="r-text-normal">
              Locations here!!!
            </p>
            <p class="r-text-normal">
              Locations here!!!
            </p>
            <p class="r-text-normal">
              Locations here!!!
            </p>
            <p class="r-text-normal">
              Locations here!!!
            </p>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
export default {
  props: {},
  data () {
    return {
      modal: {
        current: null,
        message: null,
      },
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {},
}
</script>
