<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Lingkup Layanan</title>

    <!-- Assets -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Additional Script -->
    <!-- JQuery JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>
    <script>
        function confirmAlert(title, text, icon, confirmText, cancelText) {
            return Swal.fire({
                title: title,
                text: text,
                icon: icon,
                showConfirmButton: true,
                showCancelButton: true,
                confirmButtonText: confirmText ?? 'Confirm',
                cancelButtonText: cancelText ?? 'Cancel'
            })
        }

        function timerAlert(title, text, icon, duration) {
            return Swal.fire({
                title: title,
                text: text,
                icon: icon,
                timer: duration,
                showConfirmButton: false
            })
        }

        function alert(title, text, icon, confirmText) {
            return Swal.fire({
                title: title,
                text: text,
                icon: icon,
                showConfirmButton: true,
                confirmButtonText: confirmText ?? 'Ok',
            })
        }
    </script>