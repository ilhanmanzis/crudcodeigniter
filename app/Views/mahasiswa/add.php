<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Mahasiswa</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('mahasiswa'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <form action="<?= base_url('mahasiswa'); ?>/save" id="FrmAddMahasiswa" method="post" autocomplete="off" accept-charset="utf-8">
                        <?= csrf_field(); ?>




                        <div class="form-group row">

                            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= (validation_show_error('Nama')) ? 'is-invalid' : ''; ?>" id="Nama" name="Nama" value=" <?= set_value('Nama'); ?>" autofocus>
                                <small class="text-danger invalid-feedback">
                                    <?= validation_show_error('Nama') ?>
                                </small>
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">

                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input <?= (validation_show_error('JenisKelamin')) ? 'is-invalid' : ''; ?>" type="radio" id="JenisKelamin" name="JenisKelamin" value="Laki-laki" <?php if (set_value('JenisKelamin') == "Laki-laki") : echo "checked";
                                                                                                                                                                                                                    endif; ?>>
                                        <label class="form-check-label" for="JenisKelamin">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="JenisKelamin2" name="JenisKelamin" value="Perempuan" <?php
                                                                                                                                                if (set_value('JenisKelamin') == "Perempuan") : echo "checked";
                                                                                                                                                endif; ?>>
                                        <label class="form-check-label" for="JenisKelamin2">
                                            Perempuan
                                        </label>
                                    </div>
                                    <small class="text-danger">

                                        <?= validation_show_error('JenisKelamin') ?>
                                    </small>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">

                            <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>

                            <div class="col-sm-10">
                                <textarea class="form-control <?= (validation_show_error('Alamat')) ? 'is-invalid' : ''; ?>" id="Alamat" name="Alamat" rows="3"><?= set_value('Alamat'); ?></textarea>
                                <small class="text-danger">
                                    <?= validation_show_error('Alamat') ?>
                                </small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Alamat" class="col-sm-2 col-form-label">Agama</label>

                            <div class="col-sm-10">
                                <select class="form-control <?= (validation_show_error('Agama')) ? 'is-invalid' : ''; ?>" id="Agama" name="Agama">
                                    <option value="Islam" selected disabled>Pilih</option>
                                    <option value="Islam" <?php if (set_value('Agama') == "Islam") : echo "selected";
                                                            endif;
                                                            ?>>Islam</option>
                                    <option value="Protestan" <?php if (set_value('Agama') == "Protestan") : echo "selected";
                                                                endif;
                                                                ?>>Protestan</option>
                                    <option value="Katolik" <?php if (set_value('Agama') == "Katolik") : echo "selected";
                                                            endif;
                                                            ?>>Katolik</option>
                                    <option value="Hindu" <?php if (set_value('Agama') == "Hindu") : echo "selected";
                                                            endif;
                                                            ?>>Hindu</option>
                                    <option value="Buddha" <?php if (set_value('Agama') == "Buddha") : echo "selected";
                                                            endif;
                                                            ?>>Buddha</option>
                                    <option value="Khonghucu" <?php if (set_value('Agama') == "Khonghucu") : echo "selected";
                                                                endif;
                                                                ?>>Khonghucu</option>
                                </select>

                                <small class="text-danger">

                                    <?= validation_show_error('Agama') ?>
                                </small>
                            </div>
                        </div>
                        <div class="form-group row">

                            <label for="NoHp" class="col-sm-2 col-form-label">No Hp</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control <?= (validation_show_error('NoHp')) ? 'is-invalid' : ''; ?>" id="NoHp" name="NoHp" value="<?= set_value('NoHp'); ?>">
                                <small class="text-danger">
                                    <?= validation_show_error('NoHp') ?>
                                </small>
                            </div>
                        </div>
                        <div class="form-group row">

                            <label for="Email" class="col-sm-2 col-form-label">Email</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control <?= (validation_show_error('Email')) ? 'is-invalid' : ''; ?>" id="Email" name="Email" value="<?= set_value('Email'); ?>">
                                <small class="text-danger">
                                    <?= validation_show_error('Email') ?>
                                </small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>

                                <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>