<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Post List</h3>


                <div class="row justify-content-between mt-4 mb-4">
                    @if(config('easy_panel.crud.post.create'))
                    <div class="col-md-4 right-0">
                        <a href="{{ route('admin.post.create') }}" class="btn btn-success">Create Post</a>
                    </div>
                    @endif
                    @if(config('easy_panel.crud.post.search'))
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="text" class="form-control" wire:model="search" placeholder="Search" value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                    <tr style="pointer-events : none">
                        <td> Title </td>
                        <td> Content </td>
                        
                        <td>Action</td>
                    </tr>

                    @foreach($posts as $post)
                        @livewire('admin.post.single', ['post' => $post], key($post->id))
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-auto pt-3 pr-3">
                {{ $posts->appends(request()->query())->links() }}
            </div>

        </div>
    </div>
</div>
