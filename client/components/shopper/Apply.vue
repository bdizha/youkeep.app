<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18}"
           :lg="{span: 18}">
      <a-form :class="{'r-hidden' :isSuccessful}" class="ant-form ant-form-vertical"
              @submit="apply"
              :form="formApply">
        <a-form-item v-if="step == 0">
          <a-row type="flex" justify="start" align="middle">
            <a-col class="r-text-left" :xs="{ span: 24 }">
              <h2 class="r-heading r-text-secondary">
                Shopper application
              </h2>
              <p v-if="false" class="r-text-normal">
                Sign in to your account with your email address.
              </p>
            </a-col>
          </a-row>
          <a-row type="flex" justify="start" align="middle">
            <a-col class="r-text-left" :xs="{ span: 24 }">
              <h3 class="r-heading">
                What is Shopple?
              </h3>
              <p class="r-text-normal">
                Shopple is a fast growing startup that is improving lives by giving people more time to
                spend
                with their families! Shopple members order shopping via the Shopple app and can have
                them
                delivered on-demand as soon as 1 hour later.
              </p>
            </a-col>
          </a-row>
          <a-row type="flex" justify="start" align="middle">
            <a-col class="r-text-left" :xs="{ span: 24 }">
              <h3 class="r-heading">
                What is a Shopple shopper?
              </h3>
              <p class="r-text-normal">
                Shopple Shoppers carefully select member's shopping using the Shopple app and deliver
                them
                during a specified, delivery window. Our shoppers enjoy an interactive and fun culture
                all
                while being able to control their own schedule and income!
              </p>
            </a-col>
          </a-row>
        </a-form-item>
        <a-form-item v-if="step == 1">
          <h2 class="r-title">
            Start by telling us a little bit about yourself!
          </h2>
        </a-form-item>
        <a-form-item v-if="step == 1" label="First name">
          <a-input
            v-model="application.first_name"
            size="default"
            placeholder="Your first name"
            v-decorator="['first_name', { rules: [{ required: true, message: 'Please enter your first name' }] }]">
            <a-icon slot="prefix" type="user"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 1" label="Last name">
          <a-input
            v-model="application.last_name"
            size="default"
            placeholder="Your last name"
            v-decorator="['last_name', { rules: [{ required: true, message: 'Please enter your last name' }] }]">
            <a-icon slot="prefix" type="mail"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 2">
          <h2 class="r-title">
            What are your contact details?
          </h2>
          <p class="r-text-normal">
            By entering your email addrress and mobile number you are opting in to receive automated Shopple
            Application
            Notifications. Message and data rates may apply.
          </p>
        </a-form-item>
        <a-form-item v-if="step == 2" label="Mobile number">
          <a-input
            v-model="application.mobile"
            size="default"
            placeholder="Your mobile number"
            v-decorator="['mobile', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]">
            <a-icon slot="prefix" type="mobile"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 2" label="Email address">
          <a-input
            v-model="application.email"
            size="default"
            placeholder="Your email address"
            v-decorator="['email', { rules: [{ required: true, email: 'Invalid email address', message: 'Please confirm your email' }] }]">
            <a-icon slot="prefix" type="mail"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 3">
          <h2 class="r-title">
            Are you 18 or older?
          </h2>
          <a-radio-group
            v-model="application.age">
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
          <h2 class="r-title">
            Now, a little address information.
          </h2>
          <p class="r-text-normal">
            This is where we will send your materials once you complete the shopper onboarding process!
          </p>
        </a-form-item>
        <a-form-item v-if="step == 4" label="Address line 1">
          <a-input
            v-model="application.address_line_1"
            size="default"
            placeholder="Your address line 1"
            v-decorator="['address_line_1', { rules: [{ required: true, message: 'Please enter your address line 1' }] }]">
            <a-icon slot="prefix" type="environment"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 4" label="Address line 2 (optional)">
          <a-input
            v-model="application.address_line_2"
            size="default"
            placeholder="Your address line 2"
            v-decorator="['address_line_2', { rules: [{ required: false, message: 'Please enter your address line 2' }] }]">
            <a-icon slot="prefix" type="environment"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 5" label="Post code">
          <a-input
            v-model="application.post_code"
            size="default"
            placeholder="Your post code"
            v-decorator="['post_code', { rules: [{ required: true, message: 'Please enter your post code' }] }]">
            <a-icon slot="prefix" type="environment"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 5" label="City">
          <a-input
            v-model="application.city"
            size="default"
            placeholder="Your city"
            v-decorator="['city', { rules: [{ required: true, message: 'Please enter your city' }] }]">
            <a-icon slot="prefix" type="environment"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 6" label="Province">
          <a-input
            v-model="application.province"
            size="default"
            placeholder="Your province"
            v-decorator="['province', { rules: [{ required: true, message: 'Please enter your province' }] }]">
            <a-icon slot="prefix" type="environment"/>
          </a-input>
        </a-form-item>
        <a-form-item v-if="step == 7">
          <h2 class="r-title">
            Please select your shirt size.
          </h2>
          <p class="r-text-normal">
            We will send this size shirt to you once you are approved!
          </p>
          <a-radio-group
            v-model="application.size" @change="onSize">
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
          <h2 class="r-title">
            You're almost there! Just a few more questions.
          </h2>
        </a-form-item>
        <a-form-item v-if="step == 8">
          <h2 class="r-title">
            Two of our peak days are Sunday and Monday. Are you available to regularly shop on Sunday and/or
            Monday?
          </h2>
          <a-radio-group
            v-model="application.is_flexible">
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
          <h2 class="r-title">
            Do you smoke in your vehicle?
          </h2>
          <p class="r-text-light">
            * Please note that smoking is prohibited while on the job, shopping and delivering orders.
          </p>
          <a-radio-group
            v-model="application.is_smoker">
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
          <h2 class="r-title">
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
        <a-form-item @click="onStep" :wrapper-col="{ span: 24 }">
          <a-row :gutter="0" type="flex" justify="start" align="middle">
            <a-col class="r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
              <a-button @click="onBack"
                        :size="'default'"
                        type="default">
                <a-icon type="left"/>
                Back
              </a-button>
            </a-col>
            <a-col class="r-text-right" :xs="{ span: 12 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
              <a-button @click="onStep"
                        :size="'default'"
                        type="secondary"
                        html-type="button"
                        class="r-btn-secondary">
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
    name: 'r-shopper-apply',
    props: {
      maskClosable: {type: Boolean, required: false, default: false},
      closable: {type: Boolean, required: false, default: false},
    },
    data() {
      return {
        formApply: this.$form.createForm(this, {name: 'form_apply'}),
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
      };
    },
    mounted() {
    },
    computed: {
      hasBack() {
        return this.step > 0;
      }
    },
    methods: {
      onSize() {
      },
      onStep() {
        if (this.step == this.last) {
          return false;
        }
        this.step += 1;

        if (this.step == 11) {
          this.isSuccessful = true;
          this.modal.message = 'Thank you, ' + this.application.first_name + '. We\'ve sent you a confirmation email to ' + this.application.email + '.';

          setTimeout(function () {
            // $this.modal.message = null;
          }, 2400);
        }
      },
      onBack() {
        if (this.step == 0) {
          return false;
        }
        this.step -= 1;
      },
      apply(event) {
        event.preventDefault();

        this.formApply.validateFields((err, values) => {
          if (!err) {
            console.log('Logging user...', values);

            this.isProcessing = true;

            let params = Object.assign({}, values);
            let $this = this;

            let path = '/apply';
            HTTP.post(path, params)
              .then(response => {
                console.log('Response');
                console.log('Redirecting to >>>: ', $this.redirectTo + " => " + $this.store.slug);
                $this.isSuccessful = true;
                $this.modal.message = 'Welcome back. It\'s shopping time.';

                setTimeout(function () {
                  window.location.href = $this.redirectTo;
                  $this.modal.message = null;
                }, 2400);
              })
              .catch(e => {
                $this.isSuccessful = false;
              });
          } else {
            this.isSuccessful = false;
            console.error(err);
          }
        });
      }
    },
  };
</script>
