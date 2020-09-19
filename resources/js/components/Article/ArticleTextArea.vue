<template>
  <div>
    <div class="form-group shadow-textarea mt-5 pb-5">
      <strong>本文</strong>
      <strong class="text-danger">必須</strong>
      <div class="py-2" style="height: 90vh;">
       <mavon-editor v-model="this.text" name="text" language="ja" placeholder="2000文字以内" class="h-100" @change="changeText"/>
      </div>
    </div>
    <textarea name="text" v-model="this.text" class="form-control z-depth-2 d-none" rows="16" placeholder="2000文字まで打てます"></textarea>
  </div>
</template>

<script>
import Vue from "vue";
import mavonEditor from "mavon-editor"
import "mavon-editor/dist/css/index.css"
Vue.use(mavonEditor);

export default {
  props: {
     article: {
      type: String,
    },

    markBody: {
      type: String,
    }
  },

  data() {
    return {
      text: this.article,
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

  methods: {
    changeText(value, reder) {
      this.mdText = value;
      this.htmlText = reder;
    }
  },


}
</script>

<style>

</style>