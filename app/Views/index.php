<?php
    include('header.php');
?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-cube"></i> Master Lingkup Layanan
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="row" style="margin-top: 25px">
            <div class="col-md-5" id="insertForm"></div>
            <div class="col-md-7" id="tableData"></div>
        </div>
    </div>

    <script>
        function getInsertForm() {
            let url = '<?php echo base_url(); ?>/create'
            // console.log(url)
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#insertForm').html(response)
                    $('#insertForm #saveLayanan').submit(function(e) {
                        e.preventDefault()
                        $('#btnSubmit').attr('disabled', '')
                        $('#btnSubmit').html('Menyimpan...')
                        Swal.fire({
                            title: 'Apakah Anda yakin akan menyimpan data ini?',
                            icon: 'warning',
                            showConfirmButton: true,
                            showCancelButton: true,
                            confirmButtonText: 'Yakin',
                            cancelButtonText: 'Tidak'
                        }).then((result) => {
                            if(result.value) {
                                let url = `<?php echo base_url(); ?>/save`
                                var $this = $(this)
                                $.ajax({
                                    url: url,
                                    type: $this.attr('method'),
                                    data: $this.serialize(),    
                                    success: function(res) {
                                        var response = $.parseJSON(res)
                                        console.log(response)
                                        $('#btnSubmit').attr('disabled', false)
                                        $('#btnSubmit').html('<i class="fas fa-save"></i> Save')
                                        if(response.status == 'success') {
                                            timerAlert('Success', response.msg, 'success', 2000).then(() => {
                                                $('#insertForm #saveLayanan #layanan').val('')
                                                $('#insertForm #saveLayanan #category_id').prop('selectedIndex', 0)
                                            })
                                        } else {
                                            console.log('error')
                                            alert('Error!', response.msg, 'error', 'Ok')
                                        }
                                    },
                                    error: function() {
                                        $('#btnSubmit').attr('disabled', false)
                                        $('#btnSubmit').html('<i class="fas fa-save"></i> Save')
                                        alert('Error!', 'Terjadi Kesalahan', 'error', 'Ok')
                                    }
                                })
                            }
                        })
                    })
                } 
            })
        }

        function getTableData() {
            let url = '<?php echo base_url(); ?>/table'
            // console.log(url)
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#tableData').html(response)
                } 
            })
        }

        $(document).ready(function() {
            getInsertForm()
            getTableData()
        })
    </script>
<?php
    include('footer.php');
?>