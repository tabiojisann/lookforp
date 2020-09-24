<template>
    <div class="d-inline">

      <div v-show="countKeeps" class="text-right">
        <h6 class="text-muted"><span class="text-warning font-weight-bold">{{ countKeeps }}</span>人のユーザーが気になっています</h6>
      </div>

      <button class="btn btn-success px-2" type="button" 
              :class="{'grey lighten-2':this.isKeep}"
              @click="clickButton">
        <i class="mr-1"
          :class="keepIcon">
        </i>気になる
      </button>
    </div>
   
</template>

<script>
export default {
  props: {
    initialIsKeep: {
      type: Boolean,
      default: false
    },
    initialCountKeeps: {
      type: Number,
      default: 0,
    },
    authorized: {
      type: Boolean,
      default: false
    },
    endpoint: {
      type: String,
    },
    stock: {
      type: Number,
      default: 0,
    }
   
  },

  data() {
    return {
      isKeep: this.initialIsKeep,
      keeping: false,
      countKeeps: this.initialCountKeeps,


    }
  },

  computed: {
    keepIcon() {
      return this.isKeep
      ? 'fas fa-check'
      : 'fas fa-star text-warning'
    }
  },

  methods: {
    clickButton() {
      if (!this.authorized) {
        alert('ログイン後に受け付けます');
        return
      }

      this.isKeep
      ? this.unkeep()
      : this.keep()
    },

    async keep() {
      const response = await axios.put(this.endpoint)

      this.isKeep = true
      this.keeping = true
      this.countKeeps = response.data.countKeeps
    },

    async unkeep() {
      const response = await axios.delete(this.endpoint)

      this.isKeep = false
      this.keeping = false
      this.countKeeps = response.data.countKeeps
    },
  },

}
</script>

<style>

</style>

