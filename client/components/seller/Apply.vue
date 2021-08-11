<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col :lg="{span: 24}" :md="{ span: 24}" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-form :class="{'r-hidden' :isProcessing || isSuccessful}"
              :form="formApply"
              class="ant-form ant-form-vertical"
              @submit="onApply"
      >
        <a-form-item>
          <a-row class="r-mt-48" justify="center" type="flex">
            <a-col :xs="{ span: 24 }" class="r-text-left">
              <h2 class="r-heading r-text-secondary">
                Graphigem seller application
              </h2>
              <p class="r-text-normal">
                Contact us to learn more about Graphigem and checkout financing
              </p>
            </a-col>
          </a-row>
        </a-form-item>
        <a-row :gutter="24" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <a-form-item
              label="Full name"
            >
              <a-input
                v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]"
                placeholder="Your full name"
                size="large"
              >
                <a-icon slot="prefix" type="user"/>
              </a-input>
            </a-form-item>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <a-form-item
              label="Role title"
            >
              <a-input
                v-decorator="['role', { rules: [{ required: true, message: 'Please enter your role title' }] }]"
                placeholder="Your role number"
                size="large"
              >
                <a-icon slot="prefix" type="audit"/>
              </a-input>
            </a-form-item>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <a-form-item
              label="Phone number"
            >
              <a-input
                v-decorator="['phone', { rules: [{ required: true, message: 'Please enter your phone number' }] }]"
                placeholder="Your phone number"
                size="large"
              >
                <a-icon slot="prefix" type="phone"/>
              </a-input>
            </a-form-item>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <a-form-item
              label="Business email"
            >
              <a-input
                v-decorator="['email', { rules: [{ required: true, message: 'Please enter your company email' }] }]"
                placeholder="Your company email"
                size="large"
                type="email"
              >
                <a-icon slot="prefix" type="mail"/>
              </a-input>
            </a-form-item>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <a-form-item
              label="Business website"
            >
              <a-input
                v-decorator="['url', { rules: [{ required: true, message: 'Please enter your company email' }] }]"
                placeholder="Your company website"
                size="large"
                type="text"
              >
                <a-icon slot="prefix" type="link"/>
              </a-input>
            </a-form-item>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <a-form-item
              label="Platform"
            >
              <a-select
                :default-value="platforms[0]"
                label-in-value
                size="large"
                style="min-width: 100%;"
                @change="onPlatform"
              >
                <a-select-option v-for="(option, index) in platforms"
                                 :key="index"
                                 :value="option.key"
                >
                  <span class="r-sort-value">{{ option.label }}</span>
                </a-select-option>
              </a-select>
            </a-form-item>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <a-form-item
              label="Business industry"
            >
              <a-select
                :default-value="industries[0]"
                label-in-value
                size="large"
                style="min-width: 100%;"
                @change="onIndustry"
              >
                <a-select-option v-for="(option, index) in industries"
                                 :key="index"
                                 :value="option.key"
                >
                  <span class="r-sort-value">{{ option.label }}</span>
                </a-select-option>
              </a-select>
            </a-form-item>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <a-form-item
              label="Business website"
            >
              <a-input
                v-decorator="['url', { rules: [{ required: true, message: 'Please enter your company email' }] }]"
                placeholder="Your company website"
                size="large"
                type="text"
              >
                <a-icon slot="prefix" type="link"/>
              </a-input>
            </a-form-item>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <a-form-item
              label="Average order value"
            >
              <a-input
                v-decorator="['order_value', { rules: [{ required: true, message: 'Please enter your company email' }] }]"
                placeholder="Your average order value"
                size="large"
                type="text"
              >
                <a-icon slot="prefix" type="dollar"/>
              </a-input>
            </a-form-item>
          </a-col>
          <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                 class="r-text-left"
          >
            <a-form-item
              label="Business annual sales"
            >
              <a-select
                :default-value="annual_sales_range[0]"
                label-in-value
                size="large"
                style="min-width: 100%;"
                @change="onAnnualSales"
              >
                <a-select-option v-for="(option, index) in annual_sales_range"
                                 :key="index"
                                 :value="option.key"
                >
                  <span class="r-sort-value">{{ option.label }}</span>
                </a-select-option>
              </a-select>
            </a-form-item>
          </a-col>
        </a-row>
        <a-form-item
          label="Notes"
        >
          <a-input v-decorator="['notes', { rules: [{ required: true, message: 'Please enter your message' }] }]"
                   placeholder="Your message"
                   size="large"
                   type="textarea"
          >
            <a-icon slot="prefix" type="user"/>
          </a-input>
        </a-form-item>
        <a-form-item class="r-mt-48">
          <a-row :gutter="24" justify="center" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                   :xs="{ span: 12 }"
                   class="r-text-left"
            />
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                   :xs="{ span: 12 }"
                   class="r-text-left"
            >
              <a-button block class="r-btn-secondary" html-type="submit" size="large"
                        type="secondary"
                        @click="onApply"
              >
                Submit
              </a-button>
            </a-col>
          </a-row>
        </a-form-item>
      </a-form>
    </a-col>
  </a-row>
</template>
<script>
const INDUSTRIES = [
  {
    label: 'Home & Furniture',
    key: 1
  },
  {
    label: 'Jewelry & Accessories',
    key: 2
  },
  {
    label: 'Beauty & Health',
    key: 3
  },
  {
    label: 'Clothing',
    key: 4
  },
  {
    label: 'Food & Beverage',
    key: 5
  },
  {
    label: 'Kids & Babies',
    key: 6
  },
  {
    label: 'Pets',
    key: 7
  },
  {
    label: 'Footwear',
    key: 8
  },
  {
    label: 'Sports & Outdoors',
    key: 9
  },
  {
    label: 'Travel & Experiences',
    key: 10
  },
  {
    label: 'Education',
    key: 11
  }
]
const PLATFORMS = [
  {
    label: 'Bold Cashier',
    key: 1
  },
  {
    label: 'Custom API',
    key: 2
  },
  {
    label: 'Shopify',
    key: 3
  },
  {
    label: 'Magento',
    key: 4
  },
  {
    label: 'Magento 2',
    key: 5
  },
  {
    label: 'Sylius',
    key: 6
  },
  {
    label: 'BigCommerce',
    key: 7
  },
  {
    label: 'Weebly',
    key: 8
  },
  {
    label: 'Other',
    key: 9
  }
]
const ANNUAL_SALES_RANGE = [
  {
    label: 'Less than R1m',
    key: 1
  },
  {
    label: 'R1-R5m',
    key: 2
  },
  {
    label: 'R5m-R10m',
    key: 3
  },
  {
    label: 'R10m-R20m',
    key: 4
  },
  {
    label: 'R20m-R50m',
    key: 5
  },
  {
    label: 'R50m-R100m',
    key: 6
  },
  {
    label: 'R100m+',
    key: 7
  }
]
export default {
  name: 'r-seller-apply',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      formApply: this.$form.createForm(this, { name: 'form_apply' }),
      fields: [' name', 'url', 'platform', 'order_value', 'sales_revenue', 'mobile', 'email', 'notes'],
      hasData: false,
      message: 'Thank you for contacting us! We\'ll be getting back to you soonest.',
      industry: null,
      platform: null,
      annual_sales: null,
      industries: INDUSTRIES,
      annual_sales_range: ANNUAL_SALES_RANGE,
      platforms: PLATFORMS,
      errors: [],
      isSuccessful: false,
      isProcessing: false,
      store: {
        slug: 'all'
      },
      redirectTo: ''
    }
  },
  computed: {},
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {
    onApply (event) {
      event.preventDefault()

      this.hasError = false

      this.formApply.validateFields((error, values) => {
        if (!error) {
          this.isProcessing = true

          console.log('Making request...', values)
          const $this = this

          values.industry = this.industry
          values.platform = this.platform
          values.annual_business = this.annual_sales

          const params = Object.assign({}, values)

          console.log('Request params...', params)

          const path = '/seller/store'
          HTTP.post(path, params)
            .then((response) => {
              if ((response.status == 422 || response.status == 500) && response.data.errors != undefined) {
                $this.onError(response, $this)
              } else {
                $this.onResponse(response, $this)
              }
            })
            .catch((e) => {
              $this.isProcessing = false
              $this.hasError = true
              console.log('Errors', e)
            })
        } else {
          this.hasError = true
          console.error(error)
        }
      })
    },
    onResponse (response, $this) {
      $this.isSuccessful = true
      $this.formApply.resetFields()

      setTimeout(function () {
        $this.isProcessing = false
      }, 3000)
    },
    onError (response, $this) {
      const errors = response.data.errors

      this.fields.forEach(function (field) {
        if (errors[field] != undefined) {
          const value = $this.formApply.getFieldValue(field)
          const fields = {}
          fields[field] = {
            value,
            'errors': [
              {
                'notes': errors[field][0],
                field
              }
            ]
          }
          $this.formApply.setFields(fields)
          console.log('what is this :: ' + field, errors[field][0])
        }
      })

      setTimeout(function () {
        this.isProcessing = false
        this.isSuccessful = false
      }, 3000)
    },
    onIndustry (industry) {
      this.industry = industry.key
    },
    onAnnualbusiness (annual_sales) {
      this.annual_business = annual_sales.key
    },
    onPlatform (platform) {
      this.platform = platform.key
    }
  }
}
</script>
