<template>

 <div>

    <textarea name="text" class="form-control" rows="10" placeholder="2000文字以内"
      v-model="text">
    </textarea>

    <label :class="computedColor" >{{ this.textCount }}</label>
    <label >/</label>
    <label>2000</label>

 </div>

  
  
</template>

<script>

export default {
  props: {
     article: {
      type: String,
    },
  },

  data() {
    return {
      text: this.article,
    }
  },

  computed: {
    textCount: function(){
      if(this.text) {
        return 2000 - this.text.length 
      } else {
        return 2000
      }
    },
    
    computedColor() {
      let color = 'text-black';

      if(this.textCount < 30) {
        color = 'text-warning font-weight-bold';
      }
      if(this.textCount < 0) {
        color = 'text-danger font-weight-bold';
      }

      console.log(this.textCount);
      console.log(color);

      return color;
    }


    
    
  }

}

</script>

<style scoped>

</style>