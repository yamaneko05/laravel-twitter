<div class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
			<form action="/posts" method="post">
				@csrf
      	<div class="modal-body">
					<div class="mb-3">
						<label class="form-label">テキスト</label>
						<textarea name="text" class="form-control"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">投稿</button>
				</div>
			</form>
    </div>
  </div>
</div>