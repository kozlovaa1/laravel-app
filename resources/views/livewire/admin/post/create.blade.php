<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Post</h3>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">

            <div class="form-group">
                <label for="inputtitle" class="col-sm-2 control-label">Title</label>
                <input type="text" wire:model.lazy="title" class="form-control @error('title') is-invalid @enderror" id="inputtitle">
                @error("title") <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="inputcontent" class="col-sm-2 control-label">Content</label>
                <textarea wire:model="content" class="form-control @error('content')is-invalid @enderror"></textarea>
                @error("content") <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="inputimage" class="col-sm-2 control-label">Image</label>
                <input type="file" wire:model="image" class="form-control-file @error('image')is-invalid @enderror" id="inputimage">
                @error("image") <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info">Create</button>
            <a href="{{ route('admin.post.read') }}" class="btn btn-default float-left">Cancel</a>
        </div>
    </form>
</div>
