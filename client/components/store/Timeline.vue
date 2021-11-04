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
    title: 'Event',
    dataIndex: 'event'
  },
  {
    title: 'Item',
    dataIndex: 'title',
    scopedSlots: { customRender: 'name' }
  },
  {
    title: 'Price',
    className: 'column-money',
    dataIndex: 'price'
  },
  {
    title: 'Quantity',
    dataIndex: 'quantity'
  },
  {
    title: 'From',
    dataIndex: 'from'
  },
  {
    title: 'To',
    dataIndex: 'to'
  },
  {
    title: 'Time',
    dataIndex: 'time'
  }
]

const data = [
  {
    key: '1',
    event: 'Minted',
    title: 'Spookies Specials',
    price: '$125.00',
    quantity: '1',
    from: 'oneayebandit',
    to: '---',
    time: '9 days ago'
  },
  {
    key: '2',
    event: 'Minted',
    title: 'Spookies Specials',
    price: '$125.00',
    quantity: '1',
    from: 'oneayebandit',
    to: '---',
    time: '12 days ago'
  },
  {
    key: '3',
    event: 'Minted',
    title: 'Spookies Specials',
    price: '$125.00',
    quantity: '1',
    from: 'oneayebandit',
    to: '---',
    time: '2 days ago'
  }
]

export default {
  name: 'r-store-timeline',
  data () {
    return {
      data,
      columns
    }
  }
}
</script>
