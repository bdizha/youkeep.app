<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }">
      <a-card title="Catalog Map" style="width: 100%;">
        <a-table bordered :dataSource="dataSource" :columns="columns">
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
  { title: 'Shopple Category', dataIndex: 'to', key: 'to' }
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
