<div class="card card-custom">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-md-4" style="margin-top: 8px">Tampilkan</label>
                    <div class="col-md-6">
                        <select name="paging" id="paging" class="form-control">
                            <option value="4">4 Data</option>
                            <option value="16">16 Data</option>
                            <option value="24">24 Data</option>
                            <option value="48">48 Data</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Cari berdasarkan nama layanan">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hovered table-striped table-bordered" id="table-layanan">
                <thead class="bg-primary">
                    <tr>
                        <th class="text-center text-white" width="5%">NO</th>
                        <th class="text-center text-white">LINGKUP LAYANAN</th>
                        <th class="text-center text-white">LAYANAN TERSEDIA</th>
                        <th class="text-center"><i class="fas fa-cogs text-white"></i></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function tbody() {
        $('#table-layanan tbody').html("<tr><td colspan='4' class='text-center'><i class='fas fa-spinner fa-spin'></i> Loading ...</td></tr>")
        let url = '<?php echo base_url(); ?>/table/data'
        $.ajax({
            url: url,
            type: 'GET',
            data: {

            },
            success: function(res) {
                var response = $.parseJSON(res)
                console.log(response);
            }
        })
    }

    $(document).ready(function() {
        tbody()
    })
</script>