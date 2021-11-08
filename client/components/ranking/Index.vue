<template>
  <a-row :gutter="[48,48]" class="r-slider" justify="center" type="flex">
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[48,48]" class="r-slider" justify="start" type="flex">
        <a-col :span="24" class="r-text-center">
          <a-row :gutter="[24,24]" class="r-slider" justify="center" type="flex">
            <a-col :span="24" class="r-text-center">
              <h2 class="r-heading r-text-white">
                {{ title }}
              </h2>
            </a-col>
            <a-col v-if="hasActions" :span="24" class="r-text-center">
              <p class="r-text-normal r-text-white">
                {{ summary }}
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col v-if="hasActions" :span="24" class="r-text-center">
          <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 6 }" :md="{ span: 6 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-ranking-sort></r-ranking-sort>
            </a-col>
          </a-row>
        </a-col>
        <a-col :span="24" class="r-spin-holder">
          <a-table :columns="columns"
                   :data-source="data"
                   :row-key="record => record.id"
                   :pagination="pagination"
                   :loading="loading"
                   @change="onTableAction"
                   bordered
          >
            <template slot="collection" slot-scope="store">
              <nuxt-link :to="store.route" class="r-text-white">
                <r-store-head :store="store"></r-store-head>
              </nuxt-link>
            </template>
            <template slot="floor" slot-scope="floor, record">
              <r-store-price :currency="record.currency" :price="floor"></r-store-price>
            </template>
            <template slot="roof" slot-scope="roof, record">
              <r-store-price :currency="record.currency" :price="roof"></r-store-price>
            </template>
            <template slot="diff_day" slot-scope="diff_day">
              <r-ranking-change :value="diff_day"></r-ranking-change>
            </template>
            <template slot="diff_week" slot-scope="diff_week">
              <r-ranking-change :value="diff_week"></r-ranking-change>
            </template>
          </a-table>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
            <a-col>
              <r-link route="/ranking" title="Goto rankings" size="large" theme="primary"></r-link>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import axios from 'axios'

const columns = [
  {
    title: 'Collection',
    dataIndex: 'store',
    scopedSlots: { customRender: 'collection' }
  },
  {
    sorter: true,
    title: 'Volume',
    dataIndex: 'volume'
  },
  {
    sorter: true,
    title: '24h %',
    className: 'column-money',
    dataIndex: 'diff_day',
    scopedSlots: { customRender: 'diff_day' }
  },
  {
    sorter: true,
    title: '7d %',
    dataIndex: 'diff_week',
    scopedSlots: { customRender: 'diff_week' }
  },
  {
    sorter: true,
    title: 'Floor price',
    dataIndex: 'floor',
    scopedSlots: { customRender: 'floor' }
  },
  {
    sorter: true,
    title: 'Roof price',
    dataIndex: 'roof',
    scopedSlots: { customRender: 'roof' }
  },
  {
    sorter: true,
    title: 'Owners',
    dataIndex: 'owners'
  },
  {
    sorter: true,
    title: 'Assets',
    dataIndex: 'assets'
  }
]

export default {
  name: 'r-rankings',
  props: {
    hasActions: { type: Boolean, required: false, default: false },
    title: { type: String, required: false, default: 'Top collections' },
    summary: {
      type: String,
      required: false,
      default: 'The top NFTs on Youkeep, ranked by volume, floor price and other statistics.'
    }
  },
  created () {
    this.onRankings()
  },
  data () {
    return {
      data: [],
      columns,
      pagination: {},
      loading: false
    }
  },
  methods: {
    getTextColor (value) {
      if (parseFloat(value) < 0) {
        return `r-text-tertiary`
      }
      return `r-text-secondary`
    },
    onTableAction (pagination, filters, sorter) {
      console.log(pagination)
      const pager = { ...this.pagination }
      pager.current = pagination.current
      this.pagination = pager

      console.log('sorter order', sorter)
      let dir = 'DESC'

      if (sorter.order !== undefined) {
        dir = sorter.order.replace('ascend', 'ASC').replace('descend', 'DESC')
      }

      this.onRankings({
        results: pagination.pageSize,
        page: pagination.current,
        sort: {
          column: sorter.field,
          dir
        },
        ...filters
      })
    },
    getPrice (value, item) {
      const price = {
        price: value,
        currency: item.currency.code,
        currency_url: item.currency.currency_url
      }
      return price
    },
    async onRankings (params = {}) {
      this.loading = true

      await axios.post('/rankings', params).then(({ data }) => {
        const rankings = data

        console.log('data found', rankings)

        const pagination = { ...this.pagination }
        pagination.total = rankings.total
        this.loading = false
        this.data = rankings.data
        this.pagination = pagination
      })
    }
  }
}
</script>
