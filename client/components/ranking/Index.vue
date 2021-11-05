<template>
  <a-card class="r-bg-dark r-pull-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[48,48]" class="r-slider" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
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
    </div>
  </a-card>
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
    dataIndex: 'diff_day'
  },
  {
    sorter: true,
    title: '7d %',
    dataIndex: 'diff_week'
  },
  {
    sorter: true,
    title: 'Floor price',
    dataIndex: 'floor'
  },
  {
    sorter: true,
    title: 'Roof price',
    dataIndex: 'roof'
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

const data = [
  {
    key: '1',
    collection: 'Decentraland',
    volume: '1548581',
    diff_day: '-51',
    diff_week: '125',
    floor: '.5',
    roof: '6585',
    owners: '14858',
    store: {
      name: 'Decentraland',
      route: '/collection/decentraland',
      photo_url: 'https://static.ftx.com/nfts/397533637652373428.jpeg'
    }
  },
  {
    key: '2',
    collection: 'Decentraland',
    volume: '1548581',
    diff_day: '-51',
    diff_week: '125',
    floor: '.5',
    roof: '6585',
    owners: '14858',
    store: {
      name: 'Decentraland',
      route: '/collection/decentraland',
      photo_url: 'https://static.ftx.com/nfts/397533637652373428.jpeg'
    }
  },
  {
    key: '3',
    collection: 'Decentraland',
    volume: '1548581',
    diff_day: '-51',
    diff_week: '125',
    floor: '.5',
    roof: '6585',
    owners: '14858',
    store: {
      name: 'Decentraland',
      route: '/collection/decentraland',
      photo_url: 'https://static.ftx.com/nfts/397533637652373428.jpeg'
    }
  },
  {
    key: '4',
    collection: 'Decentraland',
    volume: '1548581',
    diff_day: '-51',
    diff_week: '125',
    floor: '.5',
    roof: '6585',
    owners: '14858',
    store: {
      name: 'Decentraland',
      route: '/collection/decentraland',
      photo_url: 'https://static.ftx.com/nfts/397533637652373428.jpeg'
    }
  },
  {
    key: '5',
    collection: 'Decentraland',
    volume: '1548581',
    diff_day: '-51',
    diff_week: '125',
    floor: '.5',
    roof: '6585',
    owners: '14858',
    store: {
      name: 'Decentraland',
      route: '/collection/decentraland',
      photo_url: 'https://static.ftx.com/nfts/397533637652373428.jpeg'
    }
  },
  {
    key: '6',
    collection: 'Decentraland',
    volume: '1548581',
    diff_day: '-51',
    diff_week: '125',
    floor: '.5',
    roof: '6585',
    owners: '14858',
    store: {
      name: 'Decentraland',
      route: '/collection/decentraland',
      photo_url: 'https://static.ftx.com/nfts/397533637652373428.jpeg'
    }
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
    // this.onRankings()
  },
  data () {
    return {
      data,
      columns,
      pagination: {},
      loading: false
    }
  },
  methods: {
    onTableAction (pagination, filters, sorter) {
      console.log(pagination)
      const pager = { ...this.pagination }
      pager.current = pagination.current
      this.pagination = pager

      console.log('sorter order', sorter)

      this.onRankings({
        results: pagination.pageSize,
        page: pagination.current,
        sort: {
          column: sorter.field,
          dir: sorter.order.replace('ascend', 'ASC').replace('descend', 'DESC')
        },
        ...filters
      })
    },
    async onRankings (params = {}) {
      this.loading = true

      await axios.post('/rankings', params).then(({ data }) => {
        const rankings = data.rankings

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
