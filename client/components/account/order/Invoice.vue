<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="r-margin-vertical-24"
    >
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="r-margin-vertical-24"
        >
          <h2 class="r-heading r-text-secondary">
            ORDER #202511935 placed on 27 July 2019 12:59
          </h2>
          <h4 class="r-heading">
            Here you can manage all your order details.
          </h4>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="r-margin-vertical-24"
    >
      <a-row align="middle" justify="center" type="flex">
        <a-col :xs="{ span: 24 }">
          <a-card style="width: 100%;" title="ORDER TIMELINE">
            <a-steps :direction="isVertical ? 'vertical' : 'horizontal'" size="large">
              <a-step :description="isVertical ? 'We are awaiting payment for your order' : ''"
                      title="Order received"
              />
              <a-step :description="isVertical ? 'Your order is being prepared by our operations team' : ''"
                      title="Order is being processed"
              />
              <a-step :description="isVertical ? 'Your order has been dispatched to our courier partner' : ''"
                      title="Parcel is en-route"
              />
              <a-step :description="isVertical ? 'Your order has been delivered!' : ''"
                      title="Order delivered"
              />
            </a-steps>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="r-margin-vertical-24"
    >
      <a-row :gutter="16" justify="right" type="flex">
        <a-col :xs="{ span: 24 }">
          <div style="text-align: right; width: 100%; margin-bottom: 20px;">
            <a-button class="r-btn-secondary" html-type="submit" type="secondary"
                      @click="toggleDirection"
            >
              {{ isVertical ? 'Less' : 'Detailed' }} Timeline
            </a-button>
          </div>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="r-margin-vertical-24"
    >
      <a-row align="middle" justify="center" type="flex">
        <a-col :xs="{ span: 12 }">
          <a-card style="width: 100%;" title="DELIVERY ADDRESS">
            <p class="r-text-normal">Batanayi Matuku</p>
            <p class="r-text-normal">Respublica</p>
            <p class="r-text-normal">10 Muswel Road Bryastan, Johannesburg, South</p>
            <p class="r-text-normal">Bryanston</p>
            <p class="r-text-normal">Bryanston</p>
            <p class="r-text-normal">City Of Johannesburg</p>
            <p class="r-text-normal">2191</p>
            <p class="r-text-normal">Gauteng</p>
            <p class="r-text-normal">0725228552</p>
          </a-card>
        </a-col>
        <a-col :xs="{ span: 12 }">
          <a-card style="width: 100%;" title="BILLING ADDRESS">
            <p class="r-text-normal">Batanayi Matuku</p>
            <p class="r-text-normal">Respublica</p>
            <p class="r-text-normal">10 Muswel Road Bryastan, Johannesburg, South</p>
            <p class="r-text-normal">Bryanston</p>
            <p class="r-text-normal">Bryanston</p>
            <p class="r-text-normal">City Of Johannesburg</p>
            <p class="r-text-normal">2191</p>
            <p class="r-text-normal">Gauteng</p>
            <p class="r-text-normal">0725228552</p>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="r-margin-vertical-24"
    >
      <a-row align="middle" justify="center" type="flex">
        <a-col :xs="{ span: 12 }">
          <a-card style="width: 100%;" title="PAYMENT METHOD">
            <p class="r-text-normal">Credit & Debit Card</p>
          </a-card>
        </a-col>
        <a-col :xs="{ span: 12 }">
          <a-card style="width: 100%;" title="DELIVERY METHOD">
            <p class="r-text-normal">Paise </p>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }" class="r-margin-vertical-24"
    >
      <a-table :columns="columns" :dataSource="data" bordered>
        <template slot="photo" slot-scope="photo">
          <a-avatar
            slot="avatar" :src="photo"
            shape="square"
            size="large"
            style="width: 56px; height: 56px; border-radius: 0px;"
          />
        </template>
      </a-table>
    </a-col>
  </a-row>
</template>
<script>
const columns = [
  {
    title: 'Product Image',
    dataIndex: 'photo',
    key: 'photo',
    scopedSlots: { customRender: 'photo' }
  },
  { title: 'Product Name', dataIndex: 'title', key: 'title' },
  { title: 'Variant', dataIndex: 'variant', key: 'variant' },
  { title: 'Item SKU', dataIndex: 'item_sku', key: 'item_sku' },
  { title: 'Status', dataIndex: 'status', key: 'status' },
  { title: 'Price', dataIndex: 'price', key: 'price' },
  { title: 'Discount', dataIndex: 'discount', key: 'discount' },
  { title: 'Qty', dataIndex: 'quantity', key: 'quantity' },
  { title: 'Subtotal', dataIndex: 'sub_total', key: 'sub_total' }
]
const data = [
  {
    photo: 'https://target.scene7.com/is/image/Target/GUEST_9ebabf4c-875e-497c-a1de-5b466667c333?wid=325&hei=325&qlt=80&fmt=pjpeg',
    title: 'Roma Tomato',
    variant: '1lb Bag',
    item_sku: 'A-52062240',
    status: 'Delivered',
    price: 'R 22.00',
    discount: 'R 4.00',
    quantity: '3',
    sub_total: 'R 66.00'
  },
  {
    photo: 'https://target.scene7.com/is/image/Target/GUEST_9ebabf4c-875e-497c-a1de-5b466667c333?wid=325&hei=325&qlt=80&fmt=pjpeg',
    title: 'Roma Tomato',
    variant: '1lb Bag',
    item_sku: 'A-52062240',
    status: 'Delivered',
    price: 'R 22.00',
    discount: 'R 4.00',
    quantity: '3',
    sub_total: 'R 66.00'
  },
  {
    photo: 'https://target.scene7.com/is/image/Target/GUEST_9ebabf4c-875e-497c-a1de-5b466667c333?wid=325&hei=325&qlt=80&fmt=pjpeg',
    title: 'Roma Tomato',
    variant: '1lb Bag',
    item_sku: 'A-52062240',
    status: 'Delivered',
    price: 'R 22.00',
    discount: 'R 4.00',
    quantity: '3',
    sub_total: 'R 66.00'
  }
]
export default {
  name: 'r-account-order-invoice',
  components: {},
  data () {
    return {
      isVertical: false,
      dataSource: [
        {
          title: 'Timeline',
          key: '0',
          name: 'Edward King 0',
          age: '32',
          address: 'London, Park Lane no. 0'
        },
        {
          title: 'Date Ordered',
          key: '1',
          name: 'Edward King 1',
          age: '32',
          address: 'London, Park Lane no. 1'
        },
        {
          title: 'Order Number',
          key: '1',
          name: 'Edward King 1',
          age: '32',
          address: 'London, Park Lane no. 1'
        }
      ],
      count: 2,
      columns,
      data
    }
  },
  methods: {
    toggleDirection () {
      this.isVertical = !this.isVertical
    }
  }
}
</script>
