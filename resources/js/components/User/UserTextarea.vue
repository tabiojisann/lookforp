<template>

  <div>
    <div class="py-2" style="height: 90vh;">
       <mavon-editor v-model="PR" name="PR" language="ja" class="h-100" @change="changeText"/>
    </div>
    <textarea name="PR" v-model="PR" tabindex="30" cols="70" rows="30" placeholder="本文" class="d-none form-control z-depth-2"></textarea>
    
    <div class="d-flex justify-content-center border-top  blue lighten-5 ">
      <input type="submit" class="btn btn-success px-5" value="更新">
    </div>
  </div>

</template>

<script>
import Vue from "vue";
import mavonEditor from "mavon-editor"
import "mavon-editor/dist/css/index.css"
Vue.use(mavonEditor);

export default {
  props: {
    user: {
      type: String,
    },

    markBody: {
      type: String,
    }
  },

  data() {
    return {
      PR: this.user,
      parseText: this.markBody,
      html: '',
      value: '',
      mdText: '',
      htmlText: '',
      toolbars: {
        bold: true,
        italic: true,
        header: true,
      }
      
    }
  },

  // methods: {
  //   parsePR: function(html) {
  //     this.html = html
  //   }
  // }

  methods: {
    changeText(value, reder) {
      this.mdText = value;
      this.htmlText = reder;
    }
  }


}

</script>

<style scoped>
  /* .editor {
    overflow: hidden scroll;
  } */

</style>