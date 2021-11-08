<template>
  <a-row :gutter="[24,24]" justify="start" align="middle" type="flex">
    <a-col :lg="{ span: 12 }" :md="{ span: 12}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-xs r-text-light">
            Description
          </p>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-xs r-text-white" v-html="store.description"></p>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 12 }" :md="{ span: 12}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-xs r-text-light">
            Joined
          </p>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-xs r-text-white">
            {{ store.joined_at }}
          </p>
        </a-col>
      </a-row>
    </a-col>
    <a-col v-if="hasRanking" :lg="{ span: 24 }" :md="{ span: 24}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" justify="start" align="middle" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-xs r-text-light">
                Volume
              </p>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-xs r-text-white">
                {{ ranking.volume }}
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-xs r-text-light">
                NFTs
              </p>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-xs r-text-white">
                {{ ranking.assets }}
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <div class="r-text-xs r-text-light">
                Floor price
              </div>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-store-price :price="ranking.floor" :currency="ranking.currency"></r-store-price>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <div class="r-text-xs r-text-light">
                Avg price
              </div>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-store-price :price="ranking.roof" :currency="ranking.currency"></r-store-price>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-xs r-text-light">
                Assets
              </p>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-xs r-text-white">
                {{ ranking.assets }}
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-xs r-text-light">
                Owners
              </p>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-xs r-text-white">
                {{ ranking.owners }}
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-xs r-text-light">
                24h %
              </p>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-ranking-change :value="ranking.diff_day"></r-ranking-change>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12}"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-xs r-text-light">
                7d %
              </p>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-ranking-change :value="ranking.diff_week"></r-ranking-change>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-about',
  components: {},
  props: {
    store: {
      type: Object,
      required: () => {
        return {
          description: null
        }
      }
    }
  },
  computed: {
    hasRanking () {
      return this.store.ranking !== null
    },
    ranking () {
      return this.store.ranking
    },
    ...mapGetters({
      'productCount': 'shop/productCount'
    })
  },
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
