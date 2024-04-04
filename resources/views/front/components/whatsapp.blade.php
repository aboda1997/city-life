<!-- wpp-btn-mobile -->
<div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style=""><a id="WhatsApp-button"
        href="{{ 'https://wa.me/' .settings()->contact()->active()->where('type', 'whatsapp')->first()->contact }}"
        target="_blank" class="phoneJs" title="WhatsApp 360imagem">
        <div class="cbh-ph-circle"></div>
        <div class="cbh-ph-circle-fill"></div>
        <div class="cbh-ph-img-circle1 d-flex justify-content-center align-items-center">
            <i class="fab fa-whatsapp text-white fa-2x"></i>
        </div>
    </a>
</div>
<!-- wpp-btn-mobile -->
