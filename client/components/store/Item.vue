<template>
  <div class="r-store-item-line">
    <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
      <a-col :xs="{span: 16}" :sm="{span: 18}" :md="{span: 18}" :lg="{span: 18}">
        <div class="r-store-item">
          <r-avatar shape="circle" :size="75"
                    :src="store.photo_url"
                    src-placeholder="/assets/icon_default.png"/>
          <div class="r-store-text">
            {{ store.name }}
          </div>
          <div class="r-store-slogan">
            {{ store.description }}
          </div>
        </div>
      </a-col>
      <a-col class="r-store-actions" :xs="{span: 8}" :sm="{span: 6}" :md="{span: 6}" :lg="{span: 6}">
        <a-row type="flex" justify="center" align="middle">
          <a-col :xs="{span: 24}" class="r-pr-12" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
            <a-button
              block
              type="secondary" class="r-btn-bordered-primary"
              icon="star"
              :size="'small'">{{ store.rate.toFixed(1) }}
            </a-button>
          </a-col>
        </a-row>
        <a-row :gutter="[6,12]" type="flex" justify="center" align="middle">
          <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
            <a-avatar class="r-avatar-secondary" shape="square" icon="shop"/>
          </a-col>
          <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
            <a-avatar class="r-avatar-primary" shape="square" icon="check-circle"/>
          </a-col>
        </a-row>
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
