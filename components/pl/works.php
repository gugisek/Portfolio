<span id="works"></span>
<section class="w-80 px-10 d-flex flex-col ac jc">
    <div class="py-40px px-12 my-50px" style="
        background-image: url('img/works.png');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
    ">
        <a class="text-white fs-6 fw-extra-light font-family-lexend">moje prace</a>
    </div>
    <?php foreach (glob("prace/*.php") as $filename) {     
            include $filename;      
        } 
    ?> 
</section> 