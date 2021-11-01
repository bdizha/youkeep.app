<template>
  <div class="r-cart-drawer">
    <r-drawer
      current="cart-drawer"
      placement="right"
    >
      <a-row align="middle" justify="start" type="flex">
        <a-col :span="24" class="r-cart-body">
          <h4 v-if="false && hasItems" class="r-heading">
            {{ 'Your Cart (' + cart.count + ')' }}
          </h4>
          <div v-if="false" class="r-line"></div>
          <a-row v-for="(item, index) in cart.items" :key="index+1" :gutter="12" align="middle"
                 justify="start"
                 type="flex"
          >
            <a-col :lg="{ span: 16 }" :sm="{ span: 16 }"
                   :xs="{ span: 15 }" class="gutter-row"
            >
              <a-row :gutter="12" align="middle" class="gutter-row" justify="start" type="flex">
                <a-col :lg="{ span: 6 }" :sm="{ span: 6 }"
                       :xs="{ span: 7 }" class="gutter-row"
                >
                  <div class="gutter-box">
                    <a-avatar
                      slot="avatar"
                      :src="'/storage/product/' + item.thumbnail"
                      shape="square"
                      size="large"
                    >
                    </a-avatar>
                  </div>
                </a-col>
                <a-col :lg="{ span: 16 }" :sm="{ span: 16 }"
                       :xs="{ span: 17 }" class="gutter-row"
                >
                  <h3 class="r-product-text-cart">
                    {{ item.name }}
                  </h3>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 8 }" :sm="{ span: 8 }"
                   :xs="{ span: 9 }" class="gutter-row"
            >
              <a-row :gutter="12" align="middle" class="gutter-row" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }" class="gutter-row"
                >
                                    <span class="r-product-price">
                                        {{ 'R' + price(item) }}
                                    </span>
                </a-col>
                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }" class="gutter-row"
                >
                  <r-product-actions :product="item" size="small"></r-product-actions>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }" class="gutter-row"
            >
              <div class="r-line"></div>
            </a-col>
          </a-row>
          <a-row v-if="!hasItems" justify="middle" type="flex">
            <a-col :lg="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                   class="r-text-center"
            >
              <a-empty :image-style="{
                                      height: '60px',
                                    }"
                       image="/images/Youkeep/icon_black_light.svg"
              >
                <h4 slot="description" class="r-heading r-text-black">
                  Your business cart is
                  empty.
                </h4>
                <nuxt-link :to="'/store/' + store.slug">
                  <a-button class="ant-btn-primary r-btn-black" size="large">
                    <a-icon type="business"/>
                    Shop now
                  </a-button>
                </nuxt-link>
              </a-empty>
            </a-col>
          </a-row>
          <a-row v-if="hasItems" :gutter="24" class="r-cart-bottom-actions" justify="center" type="flex">
            <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                   class="r-text-center"
            >
              <a-button block class="r-btn-bordered-grey" size="small" v-on:click="save()">
                <a-icon type="file-done"/>
                Save cart
              </a-button>
            </a-col>
            <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                   class="r-text-center"
            >
              <a-popconfirm
                title="Are you sure you would like to clear your cart?"
                @confirm="reset"
              >
                <a-icon slot="icon" class="r-text-secondary" type="question-circle-o"/>
                <a-button block class="r-btn-bordered-grey" size="small">
                  <a-icon type="delete"/>
                  Clear cart
                </a-button>
              </a-popconfirm>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
      <div class="r-cart-footer">
        <a-row :gutter="24" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                 class="r-text-left"
          >
            <nuxt-link to="/checkout">
              <h3 class="r-heading r-text-white">
                {{ 'R' + cart.total }}
              </h3>
            </nuxt-link>
          </a-col>
          <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                 class="r-text-right"
          >
            <nuxt-link to="/checkout">
              <a-button block class="r-btn-bordered-white" size="small" type="secondary">
                <a-icon type="cart-icon"/>
                Checkout
              </a-button>
            </nuxt-link>
          </a-col>
        </a-row>
      </div>
    </r-drawer>
  </div>
</template>
<script>
export default {
  data () {
    return {
      store: { slug: null },
      cart: {
        items: [],
        frequency: {},
        frequencies: [],
        count: 0
      },
      isVisible: false,
      hasItems: false,
      hasCart: false,
    }
  },
  computed: {},
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
      this.cart = this.$store.state.cart
      this.store = this.$store.state.store
      this.setHasItems()

      let $this = this
      this.$store.subscribe((mutation, state) => {
        if (mutation.type == 'onCart') {
          $this.cart = mutation.payload
          $this.setHasItems()
          console.log('Updating the cart: ', this.cart)
        }
      })
    },
    setHasItems () {
      this.hasItems = this.cart.items.length > 0
    },
    reset () {
      this.cart = this.$store.state.cart
      this.cart.items = []
      this.$store.commit('onCart', this.cart)

      this.setHasItems()
    },
    price (item) {
      let price = item.variant.price
      return parseInt(price * item.quantity).toFixed(2)
    }
  },
}
</script>
