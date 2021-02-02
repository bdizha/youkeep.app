<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-row :gutter="[12,12]" type="flex" justify="center" align="middle">
        <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
          <r-store-subscribe :store="store"></r-store-subscribe>
        </a-col>
        <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
          <a-button @click="onDrawer" class="r-btn-bordered-secondary"
                    block
                    type="secondary"
                    size="default">
            <a-icon type="shop"></a-icon>
            Catalog
          </a-button>
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
