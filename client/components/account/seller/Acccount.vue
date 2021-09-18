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
        <a-card title="Seller Information">
          <a-row :gutter="[24,0]">
            <a-col :xs="{ span: 24 }">
              <p class="r-text-light">
                Please note you are required to provide accurate information to keep on our records. Click here
                if you would like to read our privacy policy. We take the security of your information very seriously.
              </p>
            </a-col>
            <a-col :xs="{ span: 24 }">
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                       :xs="{ span: 12 }" class="gutter-row"
                >
                  <a-form-item label="Country of Citizenship">
                    <a-select
                      v-decorator="['citizenship_country', { rules: [{ required: true, message: 'Please enter Country of Citizenship' }] }]"
                      :defaultValue="1"
                      labelInValue
                      placeholder="Country of Citizenship"
                      size="default"
                      style="min-width: 100%;"
                      @change="onCitizenshipCountry"
                    >
                      <a-select-option v-for="(country, index) in countries"
                                       :key="index"
                                       :value="country.id"
                      >
                        <span class="r-sort-value">{{ country.name }}</span>
                      </a-select-option>
                    </a-select>
                  </a-form-item>
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 24 }">
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                       :xs="{ span: 12 }" class="gutter-row"
                >
                  <a-form-item label="Country of Birth">
                    <a-select
                      v-decorator="['birth_country', { rules: [{ required: true, message: 'Please enter Country of Birth' }] }]"
                      :defaultValue="1"
                      labelInValue
                      placeholder="Country of Birth"
                      size="default"
                      style="min-width: 100%;"
                      @change="onBirthCountry"
                    >
                      <a-select-option v-for="(country, index) in countries"
                                       :key="index"
                                       :value="country.id"
                      >
                        <span class="r-sort-value">{{ country.name }}</span>
                      </a-select-option>
                    </a-select>
                  </a-form-item>
                </a-col>
                <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                       :xs="{ span: 12 }" class="gutter-row"
                >
                  <a-form-item label="Date of Birth">
                    <a-date-picker
                      v-decorator="['birth_date', { rules: [{ required: true, message: 'Please enter Date of Birth' }] }]"
                      :format="dateFormat"
                      placeholder="Date of Birth"
                      size="default"
                    />
                  </a-form-item>
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 24 }">
              <a-row :gutter="[24,0]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                       :xs="{ span: 12 }" class="gutter-row"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                           :xs="{ span: 12 }" class="gutter-row"
                    >
                      <a-form-item label="Type of Identity">
                        <a-select
                          :defaultValue="identityTypes[0]"
                          labelInValue
                          size="default"
                          style="min-width: 100%;"
                          @change="onIdentityType"
                        >
                          <a-select-option v-for="(option, index) in identityTypes"
                                           :key="index"
                                           :value="option.key"
                          >
                            <span class="r-sort-value">{{ option.label }}</span>
                          </a-select-option>
                        </a-select>
                      </a-form-item>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                           :xs="{ span: 12 }" class="gutter-row"
                    >
                      <a-form-item label="Number">
                        <a-input
                          v-decorator="['identity_number', { rules: [{ required: true, message: 'Please enter Identity Number' }] }]"
                          placeholder="Identity Number"
                          size="default"
                          type="text"
                        >
                          <a-icon slot="prefix" type="user"/>
                        </a-input>
                      </a-form-item>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                       :xs="{ span: 12 }" class="gutter-row"
                >
                  <a-form-item label="Date of Expiry">
                    <a-date-picker
                      v-decorator="['document_expire_at', { rules: [{ required: true, message: 'Please enter Date of Expiry' }] }]"
                      :format="dateFormat"
                      placeholder="Date of Expiry"
                      size="default"
                    />
                  </a-form-item>
                </a-col>
                <a-col :xs="{ span: 12 }">
                  <a-form-item label="Country of Issue">
                    <a-select
                      v-decorator="['issuing_country', { rules: [{ required: true, message: 'Please enter Country of Issue' }] }]"
                      :defaultValue="1"
                      labelInValue
                      placeholder="Country of Issue"
                      size="default"
                      style="min-width: 100%;"
                      @change="onIssuingCountry"
                    >
                      <a-select-option v-for="(country, index) in countries"
                                       :key="index"
                                       :value="country.id"
                      >
                        <span class="r-sort-value">{{ country.name }}</span>
                      </a-select-option>
                    </a-select>
                  </a-form-item>
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 12 }">
              <a-form-item label="Mobile Number">
                <a-input
                  v-decorator="['phone', { rules: [{ required: true, message: 'Please enter your Mobile Number for confirmation' }] }]"
                  placeholder="Your Mobile Number"
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
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }" class="gutter-row"
      >
        <a-card title="Business Address">
          <a-row :gutter="[24,24]">
            <a-col :xs="{ span: 24 }">
              <r-account-address-list empty-title="Your Business Address is currently not set."
              ></r-account-address-list>
            </a-col>
            <a-col :xs="{ span: 24 }">
              <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                <a-col v-if="false" :lg="{ span: 8 }" :sm="{ span: 8 }"
                       :xs="{ span: 12 }" class="gutter-row"
                >
                  <a-button block class="r-btn-bordered-primary" html-type="submit" size="small"
                            type="secondary"
                  >
                    View All Addresses
                  </a-button>
                </a-col>
                <a-col :lg="{ span: 8 }" :sm="{ span: 8 }"
                       :xs="{ span: 12 }" class="gutter-row"
                >
                  <r-account-address-add></r-account-address-add>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
             class="gutter-row"
      >
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 12 }" :sm="{ span: 12 }"
                 :xs="{ span: 12 }" class="gutter-row"
          >
            <a-button block class="r-btn-grey"
                      size="large"
                      type="secondary"
                      @click="onPrevStep"
            >
              Previous
            </a-button>
          </a-col>
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

export default {
  name: 'r-account-seller-account',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      selectedIdentityType: null,
      formName: 'account',
      nextStep: 2,
      prevStep: 0,
      fields: ['registration', 'phone', 'contact_name'],
      form: this.$form.createForm(this, { name: 'form_account' }),
      message: null,
      userType: 1,
      dateFormat: 'YYYY-MM-DD',
      identityTypes: [
        {
          key: 'passport',
          label: 'Passport'
        },
        {
          key: 'national_id',
          label: 'National Id'
        }
      ]
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
    hasResult: 'form/hasResult',
    countries: 'base/countries',
    hasCountries: 'base/hasCountries'
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
        route: '/account',
        current: this.formName,
        message: this.message,
        form: this.form,
        fields: this.fields,
        hasUser: true,
        canRedirect: false
      }

      const $this = this

      await this.$store.dispatch('account/onPost', payload).catch((error) => {
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
          $this.$message.success('Thank you for signing up with us, ' + $this.user.name + '. Enjoy your business with Paise.')
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
    onBirthCountry () {
    },
    onCitizenshipCountry () {
    },
    onIssuingCountry () {
    },
    onIdentityType (identityType) {
      this.selectedIdentityType = identityType
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
    }
  }
}
</script>
