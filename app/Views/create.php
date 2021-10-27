<form action="" method="POST" id="saveLayanan">
    <div class="card card-custom">
        <div class="card-header">
            <h5 class="card-title">
                <i class="fas fa-plus"></i> Tambah Lingkup Layanan
            </h5>
        </div>
        <div class="card-body" style="background-color: rgba(0,0,0,.03)">
            <div class="form-group">
                <label>
                    Kategori <strong class="text-danger">*</strong>
                </label>
                <select name="category_id" id="category_id" class="form-control" required>
                    <option value="">.: Pilihan :.</option>
                    <?php
                        foreach($categories as $category) {
                            echo '<option value="'.$category['id'].'">'.$category['category_name'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>
                    Layanan <strong class="text-danger">*</strong>
                </label>
                <input type="text" name="layanan" id="layanan" class="form-control" placeholder="Nama Layanan" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-danger" id="btnReset"><i class="fas fa-redo-alt"></i> Clear</button>
            <button type="submit" class="btn btn-success" id="btnSubmit"><i class="fas fa-save"></i> Save</button>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        

        $('#btnReset').click(function(e) {
            e.preventDefault()
            Swal.fire({
                title: 'Button clicked',
                text: 'You are click the button!',
                icon: 'success'
            })
        })
    })
</script>