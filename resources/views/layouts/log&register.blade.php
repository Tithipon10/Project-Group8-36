<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}" id="border-log">เข้าสู่ระบบ</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" id="border-register">สมัครสมาชิก</a>
                @endif
            @endauth
        </div>
    @endif
</div>

{{-- <!--   sweetalert2  -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const {
        value: formValues
    } = await Swal.fire({
        title: 'Multiple inputs',
        html: '<input id="swal-input1" class="swal2-input">' +
            '<input id="swal-input2" class="swal2-input">',
        focusConfirm: false,
        preConfirm: () => {
            return [
                document.getElementById('swal-input1').value,
                document.getElementById('swal-input2').value
            ]
        }
    })

    if (formValues) {
        Swal.fire(JSON.stringify(formValues))
    }
</script> --}}
