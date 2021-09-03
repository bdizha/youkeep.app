<template>
  <a-card class="r-bg-white">
    <a-row  class="r-text-center"  :gutter="[24,24]" align="top" justify="start" type="flex">
      <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <h3 class="r-heading">
              Your Store
            </h3>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <div class="r-bg-node">
              <a-icon class="r-text-primary" style="font-size: 90px" type="bulb"></a-icon>
            </div>
          </a-col>
        </a-row>
      </a-col>
      <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <h3 class="r-heading">
              Shopple APIs
            </h3>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-row v-for="(group, index) in groups"
                   :key="index"
                   :gutter="[24,24]" justify="center" type="flex"
            >
              <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                     class="r-text-left"
              >
                <h3 class="r-heading">
                  {{ group.title }}
                </h3>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row v-for="(action, index) in group.actions"
                       :key="index"
                       :gutter="[24,24]" justify="center" type="flex"
                >
                  <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                         class="r-text-left"
                  >
                                <span class="r-action">
                                   <span class="r-action-title"> {{ action.title }} </span>
                                   <span v-if="false" class="r-action-content">{{ action.content }}</span>
                                </span>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
      <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
          <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <h3 class="r-heading">
              Merchant Network
            </h3>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-row :gutter="[24,24]" justify="center" type="flex">
              <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                     class="r-text-left"
              >
                <h4 class="r-heading-light r-text-primary">
                  <span class="r-text-primary">Increase</span> business traction
                </h4>
              </a-col>
              <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                     class="r-text-left"
              >
                <p class="r-text-medium">
                  <span class="r-text-primary">42%</span> of retailers are more likely to make a
                  purchase
                  if
                  offered the freedom of choice.
                </p>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>
export default {
  name: 'r-merchant-actions',
  props: {},
  data () {
    return {
      groups: [
        {
          title: 'Products',
          actions: [
            {
              title: 'get_products',
              trigger: 'on',
              content: 'Fetch all products by a store identifier and filters',
              icon: 'check'
            },
            {
              title: 'get_product',
              trigger: 'on',
              content: 'Fetch a product and variants by a product identifier',
              icon: 'check'
            },
            {
              title: 'set_product',
              trigger: 'on',
              content: 'Create/update a product by payload',
              icon: 'check'
            },
            {
              title: 'set_product_variant',
              trigger: 'on',
              content: 'Create/update a product variant by payload',
              icon: 'check'
            },
            {
              title: 'delete_product',
              trigger: 'on',
              content: 'Deletes a product and its associated variants',
              icon: 'check'
            },
            {
              title: 'delete_product',
              trigger: 'on',
              content: 'Deletes a product and its associated variants',
              icon: 'check'
            }
          ]
        },
        {
          title: 'Customers',
          actions: [
            {
              title: 'get_products',
              trigger: 'on',
              content: 'Fetch all products by a store identifier and filters',
              icon: 'check'
            },
            {
              title: 'get_product',
              trigger: 'on',
              content: 'Fetch a product and variants by a product identifier',
              icon: 'check'
            },
            {
              title: 'set_product',
              trigger: 'on',
              content: 'Create/update a product by payload',
              icon: 'check'
            },
            {
              title: 'set_product_variant',
              trigger: 'on',
              content: 'Create/update a product variant by payload',
              icon: 'check'
            },
            {
              title: 'delete_product',
              trigger: 'on',
              content: 'Deletes a product and its associated variants',
              icon: 'check'
            },
            {
              title: 'delete_product',
              trigger: 'on',
              content: 'Deletes a product and its associated variants',
              icon: 'check'
            }
          ]
        },
        {
          title: 'Orders',
          actions: [
            {
              title: 'get_products',
              trigger: 'on',
              content: 'Fetch all products by a store identifier and filters',
              icon: 'check'
            },
            {
              title: 'get_product',
              trigger: 'on',
              content: 'Fetch a product and variants by a product identifier',
              icon: 'check'
            },
            {
              title: 'set_product',
              trigger: 'on',
              content: 'Create/update a product by payload',
              icon: 'check'
            },
            {
              title: 'set_product_variant',
              trigger: 'on',
              content: 'Create/update a product variant by payload',
              icon: 'check'
            },
            {
              title: 'delete_product',
              trigger: 'on',
              content: 'Deletes a product and its associated variants',
              icon: 'check'
            },
            {
              title: 'delete_product',
              trigger: 'on',
              content: 'Deletes a product and its associated variants',
              icon: 'check'
            }
          ]
        },
        {
          title: 'Relations',
          actions: [
            {
              title: 'get_products',
              trigger: 'on',
              content: 'Fetch all products by a store identifier and filters',
              icon: 'check'
            },
            {
              title: 'get_product',
              trigger: 'on',
              content: 'Fetch a product and variants by a product identifier',
              icon: 'check'
            },
            {
              title: 'set_product',
              trigger: 'on',
              content: 'Create/update a product by payload',
              icon: 'check'
            },
            {
              title: 'set_product_variant',
              trigger: 'on',
              content: 'Create/update a product variant by payload',
              icon: 'check'
            },
            {
              title: 'delete_product',
              trigger: 'on',
              content: 'Deletes a product and its associated variants',
              icon: 'check'
            },
            {
              title: 'delete_product',
              trigger: 'on',
              content: 'Deletes a product and its associated variants',
              icon: 'check'
            }
          ]
        },
        {
          title: 'Merchant',
          actions: [
            {
              title: 'get_products',
              trigger: 'on',
              content: 'Fetch all products by a store identifier and filters',
              icon: 'check'
            },
            {
              title: 'get_product',
              trigger: 'on',
              content: 'Fetch a product and variants by a product identifier',
              icon: 'check'
            },
            {
              title: 'set_product',
              trigger: 'on',
              content: 'Create/update a product by payload',
              icon: 'check'
            },
            {
              title: 'set_product_variant',
              trigger: 'on',
              content: 'Create/update a product variant by payload',
              icon: 'check'
            },
            {
              title: 'delete_product',
              trigger: 'on',
              content: 'Deletes a product and its associated variants',
              icon: 'check'
            },
            {
              title: 'delete_product',
              trigger: 'on',
              content: 'Deletes a product and its associated variants',
              icon: 'check'
            }
          ]
        }
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
