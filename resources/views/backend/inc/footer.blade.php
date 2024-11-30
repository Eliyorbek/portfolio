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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/back/assets/vendor/js/menu.js"></script>
<script src="../assets/js/main.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>

@if(Session::has('loginSuccess'))
    <script>
        Swal.fire({
            position: "bottom-end",
            icon: "success",
            title: "Tizimga muvofaqiyatli kirdingiz",
            showConfirmButton: false,
            timer: 1500
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
            timer: 1500
        });
    </script>
    @endif
</body>
</html>








