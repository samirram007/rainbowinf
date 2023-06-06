<section id="newsroom" class="section gallery " >
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 section-heading h2 text-light">
              News Room
            </div>
        </div>
    </div>
    {{-- <div>
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" wire:model.lazy="title">
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    
            <div class="form-group">
                <label for="description">Description</label>
                <input type="description" class="form-control" id="description" name="description" wire:model.lazy="email">
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div> --}}

    <form action = "addnews" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <table>
        <tr>
        <td>Title</td>
        <td><input type='text' name='title' /></td>
        <tr>
        <td>Description</td>
        <td><input type="text" name='description'/></td>
        </tr>
        <tr>
           
        <tr>
        <td colspan = '2'>
        <button type = 'submit' value = "Add news">Add News</button>
        </td>
        </tr>
        </table>
    </form>
</section>
 