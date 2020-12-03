<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
  <fieldset>
  <div class="form-group">
      <label for="Title">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control" name="content" rows="3"></textarea>
    </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>