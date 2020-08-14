<template>
  <div class="ant-avatar ant-avatar-image"
       :class="shapeClass()"
       :style="style()">
    <img :src="dataSrc"/>
  </div>
</template>
<script>
export default {
  name: 'r-avatar',
  props: {
    size: {type: Number, required: false, default: null},
    shape: {type: String, required: false, default: 'square'},
    dataSrc: {type: String, required: false, default: null},
  },
  data() {
    return {};
  },
  created() {
  },
  methods: {
    style() {
      if (this.size) {
        return {width: this.size + 'px', lineHeight: this.size + 'px', height: this.size + 'px'}
      } else {
        return {}
      }
    },
    shapeClass() {
      return 'ant-avatar-' + this.shape;
    }
  },
};
</script>
