<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{span: 18}" :md="{ span: 18}" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-form v-if="hasForm" :form="formApply"
              class="ant-form ant-form-vertical"
              @submit="apply"
      >
        <a-form-item v-if="step == 0">
          <a-row align="middle" justify="start" type="flex">
            <a-col :xs="{ span: 24 }" class="r-text-left">
              <h2 class="r-heading r-text-secondary">
                Youkeep shopper application
              </h2>
              <p v-if="false" class="r-text-normal">
                Sign in to your account with your email address.
              </p>
            </a-col>
          </a-row>
          <a-row align="middle" justify="start" type="flex">
            <a-col :xs="{ span: 24 }" class="r-text-left">
              <h3 class="r-heading">
                What is Youkeep?
              </h3>
              <p class="r-text-normal">
                Youkeep is a fast growing startup that is improving lives by giving people more time to
                spend
                with their families! Our Youkeep members order business via the Youkeep app and can have
                them
                delivered on-demand as soon as 1 hour later.
              </p>
            </a-col>
          </a-row>
          <a-row align="middle" justify="start" type="flex">
            <a-col :xs="{ span: 24 }" class="r-text-left">
              <h3 class="r-heading">
                What is a Youkeep shopper?
              </h3>
              <p class="r-text-normal">
                Our Youkeep Shoppers carefully select member's business using the Youkeep app and deliver
                them
                during a specified, delivery window. Our shoppers enjoy an interactive and fun culture
                all
                while being able to control their own schedule and income!
              </p>
            </a-col>
          </a-row>
        </a-form-item>
        <a-form-item v-if="step == 1">
          <h2 class="r-heading">
            Start by telling us a little bit about yourself!
          </h2>
        </a-form-item>
        <a-form-item v-if="step == 1" label="First name">
          <a-input
            v-model="application.first_name"
            v-decorator="['first_name', { rules: [{ required: true, message: 'Please enter your first name' }] }]"
            placeholder="Your first name"
            size="large"
          >
            <a-icon slot="prefix" type="user"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 1" label="Last name">
          <a-input
            v-model="application.last_name"
            v-decorator="['last_name', { rules: [{ required: true, message: 'Please enter your last name' }] }]"
            placeholder="Your last name"
            size="large"
          >
            <a-icon slot="prefix" type="mail"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 2">
          <h2 class="r-heading">
            What are your contact details?
          </h2>
          <p class="r-text-normal">
            By entering your email addrress and mobile number you are opting in to receive automated Youkeep
            Application
            Notifications. Message and data rates may apply.
          </p>
        </a-form-item>
        <a-form-item v-if="step == 2" label="Mobile number">
          <a-input
            v-model="application.mobile"
            v-decorator="['mobile', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]"
            placeholder="Your mobile number"
            size="large"
          >
            <a-icon slot="prefix" type="mobile"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 2" label="Email address">
          <a-input
            v-model="application.email"
            v-decorator="['email', { rules: [{ required: true, email: 'Invalid email address', message: 'Please confirm your email' }] }]"
            placeholder="Your Email Address"
            size="large"
          >
            <a-icon slot="prefix" type="mail"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 3">
          <h2 class="r-heading">
            Are you 18 or older?
          </h2>
          <a-radio-group
            v-model="application.age"
          >
            <a-row>
              <a-col :span="24">
                <a-radio>Yes</a-radio>
              </a-col>
              <a-col :span="24">
                <a-radio>No</a-radio>
              </a-col>
            </a-row>
          </a-radio-group>
        </a-form-item>
        <a-form-item v-if="step == 4 || step == 5 || step == 6">
          <h2 class="r-heading">
            Now, a little address information.
          </h2>
          <p class="r-text-normal">
            This is where we will send your materials once you complete the shopper onboarding process!
          </p>
        </a-form-item>
        <a-form-item v-if="step == 4" label="Address line 1">
          <a-input
            v-model="application.address_line_1"
            v-decorator="['address_line_1', { rules: [{ required: true, message: 'Please enter your address line 1' }] }]"
            placeholder="Your address line 1"
            size="large"
          >
            <a-icon slot="prefix" type="environment"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 4" label="Address line 2 (optional)">
          <a-input
            v-model="application.address_line_2"
            v-decorator="['address_line_2', { rules: [{ required: false, message: 'Please enter your address line 2' }] }]"
            placeholder="Your address line 2"
            size="large"
          >
            <a-icon slot="prefix" type="environment"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 5" label="Post code">
          <a-input
            v-model="application.post_code"
            v-decorator="['post_code', { rules: [{ required: true, message: 'Please enter your post code' }] }]"
            placeholder="Your post code"
            size="large"
          >
            <a-icon slot="prefix" type="environment"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 5" label="City">
          <a-input
            v-model="application.city"
            v-decorator="['city', { rules: [{ required: true, message: 'Please enter your city' }] }]"
            placeholder="Your city"
            size="large"
          >
            <a-icon slot="prefix" type="environment"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 6" label="Province">
          <a-input
            v-model="application.province"
            v-decorator="['province', { rules: [{ required: true, message: 'Please enter your province' }] }]"
            placeholder="Your province"
            size="large"
          >
            <a-icon slot="prefix" type="environment"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 7">
          <h2 class="r-heading">
            Please select your shirt size.
          </h2>
          <p class="r-text-normal">
            We will send this size shirt to you once you are approved!
          </p>
          <a-radio-group
            v-model="application.size" @change="onSize"
          >
            <a-row>
              <a-col v-for="(size, s) in sizes" :key="s + 1" :span="24">
                <a-radio :value="size.key">
                  {{ size.title }}
                </a-radio>
              </a-col>
            </a-row>
          </a-radio-group>
        </a-form-item>
        <a-form-item v-if="step == 7">
          <h2 class="r-heading">
            You're almost there! Just a few more questions.
          </h2>
        </a-form-item>
        <a-form-item v-if="step == 8">
          <h2 class="r-heading">
            Two of our peak days are Sunday and Monday. Are you available to regularly shop on Sunday and/or
            Monday?
          </h2>
          <a-radio-group
            v-model="application.is_flexible"
          >
            <a-row>
              <a-col :span="24">
                <a-radio>Yes</a-radio>
              </a-col>
              <a-col :span="24">
                <a-radio>No</a-radio>
              </a-col>
            </a-row>
          </a-radio-group>
        </a-form-item>
        <a-form-item v-if="step == 9">
          <h2 class="r-heading">
            Do you smoke in your vehicle?
          </h2>
          <p class="r-text-light">
            * Please note that smoking is prohibited while on the job, business and delivering orders.
          </p>
          <a-radio-group
            v-model="application.is_smoker"
          >
            <a-row>
              <a-col :span="24">
                <a-radio>Yes</a-radio>
              </a-col>
              <a-col :span="24">
                <a-radio>No</a-radio>
              </a-col>
            </a-row>
          </a-radio-group>
        </a-form-item>
        <a-form-item v-if="step == 10">
          <h2 class="r-heading">
            Do you have at least one year of experience as a licensed driver?
          </h2>
          <a-radio-group>
            <a-row>
              <a-col :span="24">
                <a-radio>Yes</a-radio>
              </a-col>
              <a-col :span="24">
                <a-radio>No</a-radio>
              </a-col>
            </a-row>
          </a-radio-group>
        </a-form-item>
        <a-form-item :wrapper-col="{ span: 24 }" @click="onStep">
          <a-row align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }" class="r-text-left">
              <a-button class="r-btn-secondary"
                        size="large"
                        type="default"
                        @click="onBack"
              >
                <a-icon type="left"/>
                Back
              </a-button>
            </a-col>
            <a-col :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }" class="r-text-right">
              <a-button class="ant-btn r-btn-secondary"
                        html-type="button"
                        size="large" type="secondary"
                        @click="onStep"
              >
                {{ step == 11 ? 'Submit' : 'Continue' }}
                <a-icon type="right"/>
              </a-button>
            </a-col>
          </a-row>
        </a-form-item>
      </a-form>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-customer-apply',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      formApply: this.$form.createForm(this, { name: 'form_apply' }),
      isShowing: false,
      hasData: false,
      formSize: null,
      first: 0,
      step: 0,
      last: 11,
      current: 'shopper',
      modal: {
        current: null,
        isVisible: false
      },
      application: {
        first_name: null,
        last_name: null,
        email: null,
        mobile: null,
        age: null,
        address_line_1: null,
        address_line_2: null,
        post_code: null,
        city: null,
        province: null,
        has_licence: null,
        is_flexible: null,
        is_smoker: null,
      },
      sizes: [
        {
          key: 0,
          title: 'S'
        },
        {
          key: 1,
          title: 'M'
        },
        {
          key: 2,
          title: 'L'
        },
        {
          key: 3,
          title: 'XL'
        },
        {
          key: 4,
          title: 'XXL'
        },
        {
          key: 5,
          title: 'XXXL'
        },
      ],
      errors: [],
      isSuccessful: false,
      isProcessing: false,
      store: {
        slug: 'all'
      },
      redirectTo: ''
    }
  },
  created () {
  },
  computed: {
    hasBack () {
      return this.step > 0
    }
  },
  methods: {
    onSize () {
    },
    onStep () {
      if (this.step == this.last) {
        return false
      }
      this.step += 1

      if (this.step == 11) {
        this.isSuccessful = true
        this.modal.message = 'Thank you, ' + this.application.first_name + '. We\'ve sent you a confirmation email to ' + this.application.email + '.'

        setTimeout(function () {
          // $this.modal.message = null;
        }, 2400)
      }
    },
    onBack () {
      if (this.step == 0) {
        return false
      }
      this.step -= 1
    },
    apply (event) {
      event.preventDefault()

      this.formApply.validateFields((err, values) => {
        if (!err) {
          console.log('Logging user...', values)

          this.isProcessing = true

          let params = Object.assign({}, values)
          let $this = this

          let path = '/apply'
          HTTP.post(path, params)
            .then(response => {
              console.log('Response')
              console.log('Redirecting to >>>: ', $this.redirectTo + ' => ' + $this.store.slug)
              $this.isSuccessful = true
              $this.modal.message = 'Welcome back. It\'s business time.'

              setTimeout(function () {
                window.location.href = $this.redirectTo
                $this.modal.message = null
              }, 2400)
            })
            .catch(e => {
              $this.isSuccessful = false
            })
        } else {
          this.isSuccessful = false
          console.error(err)
        }
      })
    }
  },
}
</script>
