// swall sukses
const swall = $('.swall').data('swall');
if (swall) {
    Swal.fire(
        'Mantap !',
        swall,
        'success'
    )
}

// swall error
const error = $('.error').data('error');
if (error) {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: error
    })
}

const selesai = $('.selesai').data('selesai');
if (selesai) {
    Swal.fire({
        icon: 'success',
        title: 'Terimakasih',
        text: selesai,
        showConfirmButton: false,
        timer: 5000
})
}