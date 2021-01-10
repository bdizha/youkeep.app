<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col :span="24">
      <a-list item-layout="horizontal" :data-source="data">
        <a-list-item slot="renderItem" slot-scope="item, index">
          <a-list-item-meta
            description="Ant Design, a design language for background applications, is refined by Ant UED Team"
          >
            <a slot="title" href="https://www.antdv.com/">{{ item.title }}</a>
            <a-avatar
              slot="avatar"
              src="https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png"
            />
          </a-list-item-meta>
        </a-list-item>
      </a-list>
    </a-col>
  </a-row>
</template>
<script>
const data = [
  {
    title: 'Ant Design Title 1',
  },
  {
    title: 'Ant Design Title 2',
  },
  {
    title: 'Ant Design Title 3',
  },
  {
    title: 'Ant Design Title 4',
  },
];

export default {
  name: 'r-product-reviews',
  props: {
    product: {type: Object, required: false, default: null},
    isShowing: {type: Boolean, required: false, default: false},
  },
  data() {
    return {
      quantity: 1,
      modal: {
        isVisible: true,
        current: 'product',
        product: null,
      },
      data
    };
  },
  created() {
  },
  computed: {
    hasDiscount() {
      return parseFloat(this.product.discount_percent) > 0;
    },
    cart() {
      return this.$store.state.cart;
    },
  },
  methods: {},
};
</script>
