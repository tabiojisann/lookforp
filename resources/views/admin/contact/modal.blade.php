<!-- modal -->
  <div class="modal fade right" id="deleteContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
    <div class="modal-dialog modal-side modal-top-right" role="document">
      <form method="POST" action="{{ route('admin.contacts.destroy', ['contact' => $contact]) }}">
        @csrf
        @method('DELETE')
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              この記事を削除します。本当によろしいですか？
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">いいえ</button>
              <button type="submit" class="btn btn-danger">はい</button>
            </div>
          </div>
      </form>
    </div>
  </div>
<!-- modal -->