<template>
  <r-avatar shape="circle"
            :size="72"
            src-placeholder="/assets/icon_default.png"
            :src="store.photo_url"/>
</template>
<script>
export default {
  name: 'r-store-photo',
  props: {
    store: {type: Object, required: false, default: null},
    isShowing: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      quantity: 1,
      styles: null,
      size: 180,
    };
  },
  created() {


  },
  methods: {},
};
</script>
