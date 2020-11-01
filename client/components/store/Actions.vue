<template>
  <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-row v-if="hasInfo" :gutter="[24,24]" type="flex" justify="center" align="middle">
        <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
          <a-button @click="onDrawer" class="r-btn-bordered-secondary"
                    block
                    type="secondary"
                    size="default">
            <a-icon type="shop"></a-icon>
            Store info
          </a-button>
        </a-col>
      </a-row>
      <a-row class="r-hide-sm" :gutter="[12,12]" type="flex" justify="center" align="middle">
        <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
          <r-store-rate :store="store"></r-store-rate>
        </a-col>
        <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
          <r-store-subscribe :store="store"></r-store-subscribe>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-store-actions',
  components: {},
  props: {
    store: {type: Object, required: false},
    hasInfo: {type: Boolean, required: false, default: false},
  },
  data() {
    return {}
  },
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onDrawer() {
      let drawer = {};
      drawer.isVisible = true;
      drawer.current = 'store';

      this.$store.dispatch('base/onDrawer', drawer);
    },
  }
};
</script>
