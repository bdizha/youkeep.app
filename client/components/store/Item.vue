<template>
  <div class="r-store-item-line">
    <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
      <a-col class="gutter-row" :xs="{span: 12}" :sm="{span: 12}" :md="{span: 14}" :lg="{span: 14}">
        <div class="r-store-item">
          <r-avatar shape="square" :size="75"
                    :src="store.photo_url"
                    src-placeholder="/assets/icon_default.png"/>
          <r-store-meta :store="store"></r-store-meta>
        </div>
      </a-col>
      <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 10}" :lg="{span: 10}">
       <r-store-actions :store="store"></r-store-actions>
      </a-col>
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
