<footer class="footer" style="background-color: #414141;">
    <div class="mx-auto">
        <div class="d-flex p-1 justify-content-center">

            <a id="footerA" class="icon-link" href="https://www.facebook.com/ACDCtributedebrecen/" target="_blank"
                onmouseover="mouseover()" onmouseout="mouseout()" style="color: #9b9b9b;">
                <i class="bi-facebook" style="font-size: 2rem;"></i>
            </a>
        </div>
        <div class="d-flex p-1 justify-content-center">
            <p id="footerP" style="color: #9b9b9b;">
                &copy; DC/79 @php echo date("Y"); @endphp
            </p>
        </div>
    </div>
</footer>

<script>
    function mouseover() {
        document.getElementById("footerA").style.color = "#7c7c7c";
    }

    function mouseout() {
        document.getElementById("footerA").style.color = "#9b9b9b";
    }
</script>
