<tr x-data="{ modalIsOpen : false }">
    <td> {{ $post->title }} </td>
    <td> {{ $post->content }} </td>    
    @if(config('easy_panel.crud.post.delete') or config('easy_panel.crud.post.update'))
        <td>

            @if(config('easy_panel.crud.post.delete'))
                <a href="@route(getRouteName().'.post.update', ['post' => $post->id])" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(config('easy_panel.crud.post.delete'))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">Delete an item</h5>
                        <p>Do You really want to delete this item ?</p>
                        <div class="mt-5 d-flex justify-content-between">
                            <a wire:click.prevent="delete" class="text-white btn btn-success shadow">Yes, Delete it.</a>
                            <a @click.prevent="modalIsOpen = false" class="text-white btn btn-danger shadow">No, Cancel it.</a>
                        </div>
                    </div>
                </div>
            @endif
        </td>
    @endif
</tr>
