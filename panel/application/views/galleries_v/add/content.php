<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Yeni Galeri Ekle
            <a href="#" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">

            <div class="widget-body">

                <form action="<?php echo base_url("galleries/save") ?>" method="post">
                    <div class="form-group">
                        <label>Galeri Adı</label>
                        <input class="form-control" placeholder="Galerinin adını giriniz..." name="title">
                        <?php if (isset($form_error)) : ?>
                            <small class="pull-right input-form-error "><?php echo form_error("title"); ?></small>
                        <?php endif; ?>
                    </div>


                    <div class="form-group">
                        <label for="control-demo-6">Galeri Türü</label>
                        <div id="control-demo-6" style="width: 50%;">
                            <select class="form-control" name="gallery_type">
                                <option value="image" style="display: <?php echo (isset($gallery_type) && $gallery_type == "image") ? "selected" : ""; ?>">Resim</option>
                                <option value="video" style="display: <?php echo (isset($gallery_type) && $gallery_type == "video") ? "selected" : ""; ?>">Video</option>
                                <option value="file" style="display: <?php echo (isset($gallery_type) && $gallery_type == "file") ? "selected" : ""; ?>">Dosya</option>

                            </select>
                        </div>
                    </div><!-- .form-group -->



                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("galleries/index"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div><!-- END column -->
</div>