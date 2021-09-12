<template>
  <div class="r-border-circle">
    <a-card :class="getBgClass()">
      <div class="r-p-24">
        <div class="r-border-circle">
          <a-card :class="getBgClass()">
            <div class="r-p-24">
              <div class="r-border-circle">
                <a-card class="r-bg-white">
                  <r-avatar :data-src="image" :size="300"
                            class="r-avatar-block"
                  ></r-avatar>
                </a-card>
              </div>
            </div>
          </a-card>
        </div>
      </div>
    </a-card>
  </div>
</template>
<script>
export default {
  name: 'r-saucer',
  props: {
    theme: { type: String, required: false, default: 'primary' },
    image: { type: String, required: false, default: 'service-01.svg' },
    size: { type: Number, required: false, default: 300 }
  },
  data () {
    return {}
  },
  created () {
  },
  methods: {
    getBgClass () {
      return `r-bg-${this.theme}-light`
    }
  }
}
</script>
