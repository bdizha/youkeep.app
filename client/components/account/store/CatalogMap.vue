<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :xs="{ span: 24 }">
      <a-card style="width: 100%;" title="Catalog Map">
        <a-table :columns="columns" :dataSource="dataSource" bordered>
        </a-table>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
const COLUMNS = [
  {
    title: 'Mapped Category',
    dataIndex: 'from',
    key: 'from',
    scopedSlots: {}
  },
  { title: 'Youkeep Category', dataIndex: 'to', key: 'to' }
]

const CATEGORY_MAPS = [
  {
    from: 'Men > Clothing',
    to: 'Men > Apparel'
  },
  {
    from: 'Men > Clothing',
    to: 'Men > Apparel'
  },
  {
    from: 'Men > Clothing',
    to: 'Men > Apparel'
  }
]

export default {
  name: 'r-account-store-catalog-map',
  components: {},
  data () {
    return {
      dataSource: CATEGORY_MAPS,
      count: 2,
      columns: COLUMNS
    }
  },
  methods: {
    toggleDirection () {
    }
  }
}
</script>
