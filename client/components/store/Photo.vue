<template>
  <r-avatar shape="square"
            :size="300"
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
