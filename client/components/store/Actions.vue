<template>
  <div class="r-store-item-line r-ph-24">
    <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
      <a-col :xs="{span: 24}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
        <a-button @click="onDrawer" class="r-btn-bordered-secondary"
                  block
                  type="secondary"
                  size="default">
          <a-icon type="shop"></a-icon>
          Store info
        </a-button>
      </a-col>
      <a-col :xs="{span: 24}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
        <r-store-subscribe></r-store-subscribe>
      </a-col>
    </a-row>
  </div>
</template>
<script>
export default {
  name: 'r-store-actions',
  components: {},
  props: {
    store: {type: Object, required: false}
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
