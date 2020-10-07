@csrf

@error('image')
  <span class="text-danger">{{ $message }}</span>
@enderror
<article-image-upload 
  class="my-5"
  v-bind:article="{{ $article ?? '' }}">
</article-image-upload>

<div class="form-group p-4">
  <label>タイトル</label>
  <label class="bg-danger text-white px-1">必須</label>
  @error('title')
    <span class="text-danger">{{ $message }}</span>
  @enderror
  <input type="text" name="title" class="form-control w-100" placeholder="100文字以内" required value="{{ $article->title ?? old('title') }}">
</div>



<div class="form-group my-4 pt-5">
  <div class="col">
    <div class="label">
      <label>募集ポジション</label>
      <label class="bg-danger text-white px-1">必須</label>
      @error('position')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
 

 
    <div class="ml-1">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="ボケ" name="position" value="ボケ"  
        <?php 
            if( !empty($article->position)){
              if($article->position === "ボケ") {
                echo 'checked';
              }
            }
          ?>
        required>
        <label class="custom-control-label" for="ボケ">ボケ</label>
      </div>
    
      <div class="custom-control custom-radio ">
        <input type="radio" class="custom-control-input" id="ツッコミ" value="ツッコミ" name="position"
          <?php 
            if( !empty($article->position)){
              if($article->position === "ツッコミ") {
                echo 'checked';
              }
            }
          ?>
        >
        <label class="custom-control-label" for="ツッコミ">ツッコミ</label>
      </div>

      <div class="custom-control custom-radio ">
        <input type="radio" class="custom-control-input" id="作家" value="作家" name="position"
          <?php 
            if( !empty($article->position)){
              if($article->position === "作家") {
                echo 'checked';
              }
            }
          ?>
        >
        <label class="custom-control-label" for="作家">作家</label>
      </div>

      <div class="custom-control custom-radio ">
        <input type="radio" class="custom-control-input" id="その他(ポジション)" value="その他" name="position"
          <?php 
            if( !empty($article->position)){
              if($article->position === "その他") {
                echo 'checked';
              }
            }
          ?>
        >
        <label class="custom-control-label" for="その他(ポジション)">その他</label>
      </div>
    </div>

  </div>
</div>



<div class="form-group my-4">
  <div class="col">
    <label>募集スタイル</label>
    <label class="bg-danger text-white px-1">必須</label>

    @error('style')
      <span class="text-danger">{{ $message }}</span>
    @enderror

    <div class="ml-1">

      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input bg-danger" id="漫才" value="漫才" name="style" 
          <?php 
            if( !empty($article->style)){
              if($article->style === "漫才") {
                echo 'checked';
              }
            }
          ?>
        required>
        <label class="custom-control-label" for="漫才">漫才</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input bg-danger" id="コント" value="コント" name="style"
          <?php 
            if( !empty($article->style)){
              if($article->style === "コント") {
                echo 'checked';
              }
            }
          ?>
        >
        <label class="custom-control-label" for="コント">コント</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="その他(スタイル)" value="その他" name="style"
          <?php 
            if( !empty($article->style)){
              if($article->style === "その他") {
                echo 'checked';
              }
            }
          ?>
        >
        <label class="custom-control-label" for="その他(スタイル)">その他</label>
      </div>

    </div>

  </div>

</div> 

<div class="form-group my-4 p-4">
  <label>本文</label>
  <label class="bg-danger text-white px-1">必須</label>
  @error('text')
    <span class="text-danger">{{ $message }}</span>
  @enderror

  <article-textarea
  :article="{{json_encode($article->text)}}"
  :mark-body="{{json_encode($article->mark_body)}}">
  </article-textarea>
</div>







