<h2><?php echo $title; ?></h2>

<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

<form action="<?php echo site_url('products/add'); ?>" method="post">
    <div class="form-group">
        <label for="name">Nama Produk</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>">
    </div>
    
    <div class="form-group">
        <label for="price">Harga</label>
        <input type="number" class="form-control" id="price" name="price" value="<?php echo set_value('price'); ?>">
    </div>
    
    <div class="form-group">
        <label for="description">Deskripsi</label>
        <textarea class="form-control" id="description" name="description"><?php echo set_value('description'); ?></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo site_url('products'); ?>" class="btn btn-secondary">Kembali</a>
</form>
