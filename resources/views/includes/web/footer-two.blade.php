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
                <img class="img-fluid order-via-img" src="{{ asset("assets/images/eats-logo-1.png") }}" alt="">
            </a>
        </div>
        <div class="order-via">
            <a href="#">
                <img class="img-fluid order-via-img" src="{{ asset("assets/images/eats-logo-1.png") }}" alt="">
            </a>
        </div>
        <div class="order-via">
            <a href="#">
                <img class="img-fluid order-via-img" src="{{ asset("assets/images/eats-logo-1.png") }}" alt="">
            </a>
        </div>
        <div class="order-via">
            <a href="#">
                <img class="img-fluid order-via-img" src="{{ asset("assets/images/tost.png") }}" alt="">
            </a>
        </div>
    </div>
</div>

<script src="{{ asset("assets/js/jquery.js") }}"></script>
<script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script>

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
