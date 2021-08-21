<template>
  <a-form v-if="hasForm"
          :form="form"
          class="ant-form ant-form-vertical"
          @submit="onPost"
  >
    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }" class="gutter-row"
      >
        <a-card title="Business Information">
          <a-row>
            <a-col :xs="{ span: 24 }">
              <a-row :gutter="[24,0]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }" class="gutter-row"
                >
                  <p class="r-text-light">
                    Tell us about your business so we can serve you better.
                  </p>
                </a-col>
                <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                       :xs="{ span: 12 }" class="gutter-row"
                >
                  <a-form-item label="Business Name">
                    <a-input
                      v-decorator="['registration', { rules: [{ required: true, message: 'Please enter Business Name' }] }]"
                      placeholder="Your Business Name"
                      size="default"
                    >
                      <a-icon slot="prefix" type="user"/>
                    </a-input>
                  </a-form-item>
                </a-col>
                <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                       :xs="{ span: 12 }" class="gutter-row"
                >
                  <a-form-item label="Company Registration Number">
                    <a-input
                      v-decorator="['registration', { rules: [{ required: true, message: 'Please enter Company Registration Number' }] }]"
                      placeholder="Company Registration Number"
                      size="default"
                    >
                      <a-icon slot="prefix" type="user"/>
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
                      size="default"
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
                      :defaultValue="platforms[0]"
                      labelInValue
                      size="default"
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
                      :defaultValue="industries[0]"
                      labelInValue
                      size="default"
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
                      size="default"
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
                    label="Average Order Value"
                  >
                    <a-input
                      v-decorator="['order_value', { rules: [{ required: true, message: 'Please enter your Average Order Value' }] }]"
                      placeholder="Your Order Value Value"
                      size="default"
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
                    label="Business Annual Sales"
                  >
                    <a-select
                      :defaultValue="annual_sales_range[0]"
                      labelInValue
                      size="default"
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
            </a-col>
          </a-row>
        </a-card>
      </a-col>
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }" class="gutter-row"
      >
        <a-card title="Contact Information">
          <a-row :gutter="[24,0]">
            <a-col :xs="{ span: 24 }">
              <p class="r-text-light">
                Contact us to learn more about Spazamall and checkout financing options we've got in store for sellers
                like you.
              </p>
            </a-col>
            <a-col :xs="{ span: 24 }">
              <a-form-item label="Primary Business Person">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                         :xs="{ span: 12 }" class="gutter-row"
                  >
                    <a-input
                      v-decorator="['first_name', { rules: [{ required: true, message: 'Please enter Contact\'s First Name' }] }]"
                      placeholder="First name"
                      size="default"
                      type="text"
                    >
                      <a-icon slot="prefix" type="user"/>
                    </a-input>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                         :xs="{ span: 12 }" class="gutter-row"
                  >
                    <a-input
                      v-decorator="['last_name', { rules: [{ required: true, message: 'Please enter Contact\'s First Name' }] }]"
                      placeholder="Last name"
                      size="default"
                      type="text"
                    >
                      <a-icon slot="prefix" type="user"/>
                    </a-input>
                  </a-col>
                </a-row>
              </a-form-item>
            </a-col>
            <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                   :xs="{ span: 12 }" class="gutter-row"
            >
              <a-form-item label="Business Email">
                <a-input
                  v-decorator="['email', { rules: [{ required: true, message: 'Please enter your Business Email' }] }]"
                  placeholder="Your Business Email"
                  size="default"
                  type="email"
                >
                  <a-icon slot="prefix" type="mail"/>
                </a-input>
              </a-form-item>
            </a-col>
            <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                   :xs="{ span: 12 }" class="gutter-row"
            >
              <a-form-item label="Business Phone">
                <a-input
                  v-decorator="['phone', { rules: [{ required: true, message: 'Please enter your Business Phone' }] }]"
                  placeholder="Your Business Phone"
                  size="default"
                  type="text"
                >
                  <a-icon slot="prefix" type="mail"/>
                </a-input>
              </a-form-item>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
             class="gutter-row"
      >
        <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
          <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                 class="gutter-row"
          >
            <a-button block class="r-btn-secondary" html-type="submit" size="large"
                      type="secondary"
            >
              Next
            </a-button>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <r-result v-if="hasResult"></r-result>
    <r-spinner :is-absolute="true" process="isRunning"></r-spinner>
  </a-form>
</template>
<script>
import { mapGetters } from 'vuex'

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
  name: 'r-account-seller-business',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      formName: 'business',
      nextStep: 1,
      prevStep: null,
      industry: null,
      platform: null,
      annual_sales: null,
      industries: INDUSTRIES,
      annual_sales_range: ANNUAL_SALES_RANGE,
      platforms: PLATFORMS,
      fields: ['registration', 'phone', 'contact_name', 'url', 'platform', 'order_value', 'sales_revenue', 'mobile', 'email', 'notes'],
      form: this.$form.createForm(this, { name: 'form_business' }),
      message: null,
      userType: 1
    }
  },
  computed: mapGetters({
    user: 'auth/user',
    current: 'auth/current',
    hasAddress: 'account/hasAddress',
    address: 'account/address',
    processes: 'base/processes',
    isValid: 'form/isValid',
    hasForm: 'base/hasForm',
    result: 'form/result',
    hasResult: 'form/hasResult'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onPost (event) {
      event.preventDefault()

      this.onNextStep()

      this.form.validateFields((errors, values) => {
        if (!errors) {
          const params = Object.assign({}, values)
          this.onForm(params)
        }
      })
    },
    async onForm (params) {
      params.type = this.userType

      const payload = {
        params,
        route: '/seller/store',
        current: this.formName,
        message: this.message,
        form: this.form,
        fields: this.fields,
        hasUser: true,
        canRedirect: false
      }

      const $this = this

      await this.$store.dispatch('auth/onPost', payload).catch((error) => {
        const data = error.response.data
        if (data.errors !== undefined) {
          $this.setErrors(data.errors, $this)
        }
      }).then((response) => {
        setTimeout(() => {
          $this.onNextStep()

          const message = {
            title: 'Thank you for signing up',
            content: `Thank you for signing up with us, ${$this.user.name}. We sent a verification email to<br>
                        ${$this.user.email}<br>
                        Click the link inside to get started!`
          }

          $this.$store.dispatch('form/onResult', message)
          $this.$message.success('Thank you for signing up with us, ' + $this.user.name + '. Enjoy your shopping with Spazamall.')
        }, 600)
      })
    },
    onModal (current, event) {
      event.preventDefault()

      const modal = {}
      modal.isVisible = true
      modal.isClosable = false
      modal.current = current
      this.$store.dispatch('base/onModal', modal)
    },
    onNextStep () {
      this.$store.dispatch('account/onCurrentStep', this.nextStep)
    },
    onPrevStep () {
      this.$store.dispatch('account/onCurrentStep', this.prevStep)
    },
    onUserType (e) {
      this.userType = e.target.value
    },
    setErrors (errors, $this) {
      $this.errors = errors
      $this.fields.forEach(function (field) {
        if ($this.errors[field] !== undefined) {
          const value = $this.form.getFieldValue(field)
          const fields = {}
          fields[field] = {
            value,
            'errors': [
              {
                'message': $this.errors[field][0],
                field
              }
            ]
          }
          $this.form.setFields(fields)
          console.log('what is this :: ' + field, $this.errors[field][0])
        }
      })
    },
    onIndustry (industry) {
      this.industry = industry.key
    },
    onAnnualSales (annual_sales) {
      this.annual_sales = annual_sales.key
    },
    onPlatform (platform) {
      this.platform = platform.key
    }
  }
}
</script>
