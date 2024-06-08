<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Mahasiswa</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('mahasiswa'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array(
                        'id' => 'FrmEditMahasiswa',
                        'method' => "post",
                        "autocomplete" => "off"
                    );
                    echo form_open('/mahasiswa/update', $attributes);
                    ?>
                    <div class="form-group row">

                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>

                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="IdMhsw" name="IdMhsw" value=" <?= $data_mahasiswa['IdMhsw']; ?>">
                            <input type="text" class="form-control" id="Nama" name="Nama" value=" <?= $data_mahasiswa['Nama']; ?>">
                            <small class="text-danger">
                                <?= isset($validation) ? $validation->getError('Nama') : '' ?>
                            </small>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">

                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>

                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="JenisKelamin" name="JenisKelamin" value="Laki-laki" <?php
                                                                                                                                            if ($data_mahasiswa['JenisKelamin'] == "Laki-laki") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="JenisKelamin">
                                        Laki-laki
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="JenisKelamin2" name="JenisKelamin" value="Perempuan" <?php
                                                                                                                                            if ($data_mahasiswa['JenisKelamin'] == "Perempuan") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="JenisKelamin2">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?= isset($validation) ? $validation->getError('JenisKelamin') : '' ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">

                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>

                        <div class="col-sm-10">
                            <textarea class="form-control" id="Alamat" name="Alamat" rows="3"><?= $data_mahasiswa['Alamat']; ?></textarea>
                            <small class="text-danger">
                                <?= isset($validation) ? $validation->getError('Alamat') : '' ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">

                        <label for="Alamat" class="col-sm-2 col-form-label">Agama</label>

                        <div class="col-sm-10">
                            <select class="form-control" id="Agama" name="Agama">
                                <option value="Islam" selected disabled>Pilih</option>
                                <option value="Islam" <?php if ($data_mahasiswa['Agama'] == "Islam") : echo "selected";
                                                        endif;
                                                        ?>>Islam</option>
                                <option value="Protestan" <?php if ($data_mahasiswa['Agama'] == "Protestan") : echo "selected";
                                                            endif;
                                                            ?>>Protestan</option>
                                <option value="Katolik" <?php if ($data_mahasiswa['Agama'] == "Katolik") : echo "selected";
                                                        endif;
                                                        ?>>Katolik</option>
                                <option value="Hindu" <?php if ($data_mahasiswa['Agama'] == "Hindu") : echo "selected";
                                                        endif;
                                                        ?>>Hindu</option>
                                <option value="Buddha" <?php if ($data_mahasiswa['Agama'] == "Buddha") : echo "selected";
                                                        endif;
                                                        ?>>Buddha</option>
                                <option value="Khonghucu" <?php if ($data_mahasiswa['Agama'] == "Khonghucu") : echo "selected";
                                                            endif;
                                                            ?>>Khonghucu</option>
                            </select>

                            <small class="text-danger">

                                <?= isset($validation) ? $validation->getError('Agama') : '' ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">

                        <label for="NoHp" class="col-sm-2 col-form-label">No Hp</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHp" name="NoHp" value="<?= $data_mahasiswa['NoHp']; ?>">
                            <small class="text-danger">
                                <?= isset($validation) ? $validation->getError('NoHp') : '' ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">

                        <label for="Email" class="col-sm-2 col-form-label">Email</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Email" name="Email" value="<?= $data_mahasiswa['Email']; ?>">
                            <small class="text-danger">
                                <?= isset($validation) ? $validation->getError('Email') : '' ?>
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