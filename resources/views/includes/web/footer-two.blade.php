<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="foot-text-area">
                    <div class="foot-copy">
                        <h2>Copyright © 2024 <span>NoonOKabab</span>. All Rights Reserved.</h2>
                    </div>
                    <div class="foot-copy">
                        <h2>Design & Developed by<a href="https://www.webdesignglory.com/" target="_blank">Web Design
                                Glory</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="order-via-popup-wrap">
    <div class="order-via-popup position-relative">
        <button type="button" class="order-via-btn app-cls-btn">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="order-via">
            <a href="#">
                <img class="img-fluid order-via-img" src="{{ asset("assets/web/images/eats-logo-1.png") }}" alt="">
            </a>
        </div>
        <div class="order-via">
            <a href="#">
                <img class="img-fluid order-via-img" src="{{ asset("assets/web/images/eats-logo-1.png") }}" alt="">
            </a>
        </div>
        <div class="order-via">
            <a href="#">
                <img class="img-fluid order-via-img" src="{{ asset("assets/web/images/eats-logo-1.png") }}" alt="">
            </a>
        </div>
        <div class="order-via">
            <a href="#">
                <img class="img-fluid order-via-img" src="{{ asset("assets/web/images/tost.png") }}" alt="">
            </a>
        </div>
    </div>
</div>
<script src="{{ asset("assets/web/js/jquery.js") }}"></script>
<script src="{{ asset("assets/web/js/bootstrap.bundle.min.js") }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js" integrity="sha512-XFd1m0eHgU1F05yOmuzEklFHtiacLVbtdBufAyZwFR0zfcq7vc6iJuxerGPyVFOXlPGgM8Uhem9gwzMI8SJ5uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    const orderViaBtns = document.querySelectorAll('.order-via-btn');
    const orderViaPopup = document.querySelector('.order-via-popup-wrap');

    orderViaBtns.forEach((orderViaBtn) => {
        orderViaBtn.addEventListener('click', () => {
            orderViaPopup.classList.toggle('active')
        })
    })
</script>

</body>

</html>
