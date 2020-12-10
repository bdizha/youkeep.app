<template>
  <div class="r-store-item-line">
    <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
      <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
        <div class="r-store-item">
          <r-avatar shape="square"
                    :size="81"
                    :src="store.photo_url"
                    src-placeholder="/assets/icon_default.png"/>
          <r-store-meta :store="store"></r-store-meta>
        </div>
      </a-col>
      <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
        <r-store-actions :store="store"></r-store-actions>
      </a-col>
      <a-row class="r-hide-lg" :gutter="[24,24]" type="flex" justify="center" align="middle">
        <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
          <r-store-rate :store="store"></r-store-rate>
        </a-col>
        <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
          <r-store-subscribe :store="store"></r-store-subscribe>
        </a-col>
      </a-row>
    </a-row>
  </div>
</template>
<script>
export default {
  name: 'r-store-item',
  components: {},
  props: {
    store: {type: Object, required: false},
    hasActions: {type: Boolean, required: false, default: true},
    isShow: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      hasSpin: true,
    }
  },
  created() {
    this.payload();
  },
  methods: {
    payload() {
      let $this = this;
    },
    onSearch() {
      this.isSearching = true;
    },
  }
};
</script>
