<template>
  <div class="d-flex justify-content-between">

    <div>
      <i class="fas fa-star yellow-text ml-2"></i>
      <small >{{ countLikes }}</small>
    </div>

    <div>

      <div class="border" v-show="this.authUser !== answerUserId">
        <button type="button" class="btn m-0 p-1 shadow-none" @click="clickLike">
            <i class="far fa-star text-muted"
                :class="{ 'fas fa-star yellow-text' : this.isLikedBy }" 
            > 
            </i>
            <small>{{ likeText }}</small>
        </button>
      </div>
    </div>
    
  </div>
</template>

<script>
export default {
  props: {
    initialIsLikedBy: {
      type: Boolean,
      default: false,
    },

    initialCountLikes: {
      type: Number,
      default: false,
    },

    authorized: {
      type: Boolean,
      default: false,
    },

    endpoint: {
      type: String,
    },

    authUser: {
      type: Number,
    },

    answerUserId: {
      type: Number,
    },

  },

  data() {
    return {
      isLikedBy: this.initialIsLikedBy,
      countLikes: this.initialCountLikes,
    }
  },

  computed: {
     likeText() {
       return this.isLikedBy
       ? '取り消す'
       : '評価する'
     }
  },

  methods: {
    clickLike() {
      if(!this.authorized) {
        alert('ログイン後に受け付けます')
        return
      }


      this.isLikedBy
      ? this.unlike()
      : this.like();
    },

    async like() {
      const response = await axios.put(this.endpoint);

      this.isLikedBy  = true
      this.countLikes = response.data.countLikes
    },

    async unlike() {
      const response = await axios.delete(this.endpoint);

      this.isLikedBy  = false
      this.countLikes = response.data.countLikes

    },
  }
}
</script>

<style>

</style>