
<section class="allRights privacy__wrap">
    <div class="privacy__data" >
        <a href="http://portfolioanzhela/politika-konfidenczialnosti/" class="privacy__title">Ознакомиться с политикой конфеденциальности</a>
    </div>
    <div class="allRights__content">

        <p class="_subtitle">&#169; <?php the_field('logo_subtitle',2); ?></p>
        <p class="allRights__subtitle">
            Все права защищены
        </p>
    </div>
</section>
<script>
    if(window.location.href == 'http://portfolioanzhela/politika-konfidenczialnosti/'){
        document.querySelector('.privacy__data').style.display = 'none';
    }else {
        document.querySelector('.privacy__data').style.display = 'block';
    }
</script>