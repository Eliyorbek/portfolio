@php
use Illuminate\Support\Facades\Session;
 @endphp
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            , made with ❤️ by
            <a href="#" target="_blank" class="footer-link fw-bolder">Tojimatov Eliyorbek</a>
        </div>
        <div>


            <a
                href="https://t.me/eliyorbek_tojimatov"
                target="_blank"
                class="footer-link me-4"
            >Support</a>
        </div>
    </div>
</footer>
<div class="content-backdrop fade"></div>
</div>
</div>
</div>
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="/back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/back/assets/vendor/js/menu.js"></script>
<script src="../assets/js/main.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
@livewireScripts
@if(Session::has('loginSuccess'))
    <script>
        Swal.fire({
            position: "bottom-end",
            icon: "success",
            title: "Tizimga muvofaqiyatli kirdingiz",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif
@if(Session::has('loginError'))
    <script>
        Swal.fire({
            position: "bottom-end",
            icon: "error",
            title: "Tizimga kirishda hatolik yuz berdi",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif
@if(Session::has('update'))
    <script>
        Swal.fire({
            position: "bottom-end",
            icon: "info",
            title: "Ma'lumot yangilandi!",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif
@if(Session::has('error'))
    <script>
        Swal.fire({
            position: "bottom-end",
            icon: "error",
            title: 'Xatolik yuz berdi',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
    @endif
@if(Session::has('delete'))
    <script>
        Swal.fire({
            position: "bottom-end",
            icon: "error",
            title: 'Ma\'lumot o\'chirildi',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif
@if(Session::has('success'))
    <script>
        Swal.fire({
            position: "bottom-end",
            icon: "success",
            title: 'Ma\'lumot qo\'shildi',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
    @endif
</body>
</html>








