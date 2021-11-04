<template>
  <a-table :columns="columns" :data-source="data" bordered>
    <template slot="name" slot-scope="text">
      <a>{{ text }}</a>
    </template>
  </a-table>
</template>
<script>
const columns = [
  {
    title: 'Item',
    dataIndex: 'title',
    scopedSlots: { customRender: 'name' }
  },
  {
    title: 'Unit Price',
    className: 'column-money',
    dataIndex: 'price'
  },
  {
    title: 'USD Unit Price',
    dataIndex: 'usd_price'
  },
  {
    title: 'From',
    dataIndex: 'from'
  },
  {
    title: 'Expired At',
    dataIndex: 'expired_at'
  },
  {
    title: 'Received At',
    dataIndex: 'created_at'
  }
]

const data = [
  {
    key: '1',
    title: 'Spookies Specials',
    price: 'SOL 1.00',
    usd_price: '$200.00',
    from: 'Backwoodking',
    expired_at: 'In 3 hours',
    created_at: '7 minutes ago'
  },
  {
    key: '2',
    event: 'Minted',
    title: 'Cupcats Official',
    price: 'SOL 1.5.00',
    usd_price: 'USD 500.00',
    from: 'Backwoodking',
    expired_at: 'In 3 hours',
    created_at: '7 minutes ago'
  },
  {
    key: '3',
    event: 'Minted',
    title: 'Spookies Specials',
    price: 'SOL 3.00',
    usd_price: 'USD 600.00',
    from: 'Backwoodking',
    expired_at: 'In a day',
    created_at: '7 minutes ago'
  }
]

export default {
  name: 'r-offers',
  data () {
    return {
      data,
      columns
    }
  }
}
</script>
