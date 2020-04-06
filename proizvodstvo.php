<?php
/**
 *
 * Template Name: Производство
 *
 */

get_header(); ?>
<style>
.body_slides{
	list-style:none;
	margin:0;
	padding:0;
	z-index:-2; 
	background:#000;}
.body_slides,
.body_slides:after{
    position: fixed;
	width:100%;
	height:100%;
	top:0px;
	left:0px;}
@-webkit-keyframes anim_slides {
0% {opacity:0;}
6% {opacity:1;}
24% {opacity:1;}
30% {opacity:0;}
100% {opacity:0;}
}
@-moz-keyframes anim_slides {
0% {opacity:0;}
6% {opacity:1;}
24% {opacity:1;}
30% {opacity:0;}
100% {opacity:0;}
}
.body_slides li{
    width:100%;
	height:100%;
	position:absolute;
	top:0;
	left:0;
	    background-size: cover;
}
.body_slides li:nth-child(1){
background-image: url(<?php echo get_home_url(); ?>/images/head2.jpg) 
}
</style>
<!-- щапка -->
        <header id="sp2" class="dark">
            <div class="header-in">
        <ul class="body_slides">
            <li></li>
        </ul>
<div class="container">
                    <div class="row">
				<div class="shapka">
					<div class="col-md-3 col-xs-6">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("SidebarLOGO") ) : ?>
<?php endif; ?>
                    </div>
					<div class="col-md-3 col-xs-6">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("SidebarTEL") ) : ?>
<?php endif; ?>
                    </div>
					<div class="col-md-3 col-xs-6 hidden-xs">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("SidebarMAIL") ) : ?>
<?php endif; ?>
                    </div>
					<div class="col-md-3 col-xs-6 hidden-xs">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("SidebarZVONOK") ) : ?>
<?php endif; ?>
                    </div>
				</div>	
                    </div>
                </div>
				<div class="caption" style="transform: translateY(0px); opacity: 1;">
                    <h1>Открыть производство автоковриков</h1><br>
                    <h6>Открыть бизнес по изготавлению ковриках EVA за 10 дней! Легко!<br>Работаем со всеми регионами РФ, СНГ, ЕВЭС, ЕС. </h6>
                </div><img class="arrow" src="<?php echo get_home_url(); ?>/img/arrow.svg" alt="" style="transform: translateY(0px); opacity: 1;">
            </div>
        </header>

<section id="pricing" class="center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 title">
                        <h2>Выберите лучшие условия!</h2>
                        <h4>Как правило, на практике, вложения окупаются за 1-2 месяца! Научиться шить очень легко!
						<br>Все пакеты подобраны так, что бы Вы быстро окупили вложения, состав по цвету мы подберем с Вами индивидуально.
						<br>Комплексная покупка наиболее выгодная, вы экономите на общей скидке и доставке!</h4>
                    </div>
                </div>
                <div class="row m-space">
                    <div class="col-sm-4">
                        <div class="free-pack price-section mh" style="height: 464px;">
                            <h5>ПАКЕТ "СТАРТ"</h5>
                            <h2 class="bigger">105.000<b>руб.</b></h2>
                            <p>Открыто 89 производств!</p><br><p>Материала ЕВА на 50-60 комплектов автоковриков!</p>
                            <hr>
                            <ul class="list">
							    <li>Входит:</li>
                                <li>1.Швейная машинка AURORA 0302D со столом, прямой привод!<br> В комплекте с окантователем ЕВА 2.0!<u> Все настроено и укомлектовано!</u></li>
                                <li>2.Пресс для установки креплений с насадкой под люверсы и пробойник на 14 мм., 25 мм.</li>
								<li>3.Ручные ножницы для ЕВА.</li>
								<li>4.Иглы для EVA. </li>
                                <li>5.Листы ЕВА (1.8 кв.м) 1,20*1,50 м - 50 шт. </li>
								<li>6.Окантовка 600 м. - 12 катушек.</li>
								<li>7.Люверсы 1000 шт. - 14 мм. </li>
								<li>8.Нитки в катушках, 12 цветов.</li>
								<li>9.Липучка крепление 50 мм.- 100 м.</li>
								<li>10.Пакеты для упаковки 100 шт.</li>
								<li>11.Крепеж пластиковый</li>
								<li>12.Консультация бесплатно. </li>
								<li>13.Пробойник на 14 мм/ 25 мм</li>
								<li>14.Лекало в электронном виде на 508 автомобилей в подарок!</li>
								<br> Цветовую гамму выбираем с Вами индивидуально. Научим всему необходимому и избавим от лишних затрат!
								<br>
                            </ul>
                            <a href="#pack" class="btn23" data-lity><span>Заказать пакет!</span></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="price-section mh highlight" style="height: 464px;">
                            <h5>"Полный комплект"</h5>
                            <h2 class="bigger">137.000<b>руб.</b></h2>
							<p>Открыто 312 самостоятельных компаний!</p><br><p>Материала ЕВА на 80-90 комплектов автоковриков!</p>
                            <hr>
                            <ul class="list">
							    <li>Входит:</li>
								<li>1.Швейная машинка AURORA 0302D с прямым приводом! В комплекте с окантователем ЕВА 2.0 и столом.<u> ХИТ! Все настроено и укомлектовано!</u></li>
                                <li>2.Пресс для установки креплений с насадкой под люверсы и пробойник на 14 мм., 17 мм., 25 мм.</li>
								<li>3.Ручные ножницы для ЕВА.</li>
                                <li>4.Иглы для EVA. </li>
								<li>5.Ручной зажим для люверсов.</li>
								<li>6.Фен для формовки ЕВА.</li>                                
                                <li>7.Листы ЕВА (3.6) 1.4*2.57м - 25 шт.</li>
								<li>8.Листы ЕВА (1.8) 1.2*1.5 м - 20 шт.</li>
								<li>9.Окантовка 1250 м. - 25 катушек.</li>
								<li>10.Люверсы 1000 шт. - 14 мм. черные.</li>
								<li>11.Нитки в катушках, 12 цветов. </li>
                                <li>12.Липучка крепление 50 мм.- 100 м.</li>
								<li>13.Пакеты для упаковки 100 шт.</li>
								<li>14.Подпятники - 10 шт.</li>
								<li>15.Крепеж пластиковый</li>
								<li>16.Поддержка и консультация бесплатно. </li>
								<li>17.Лекало в электронном виде на 508 автомобилей в подарок!</li>
								<li>18.Обучение пошиву автоковриков на производстве бесплатно.</li>					
                            </ul>
                            <a href="#pack2" class="btn23" data-lity><span>Заказать пакет!</span></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="price-section mh" style="height: 464px;">
                            <h5>"Производитель"</h5>
                            <h2 class="bigger">295.000<b>руб.</b></h2>
							<p>Открыто 40 прозводителей EVALIST!</p><br><p>Материала ЕВА на 250-270 комплектов автоковриков!</p>
                            <hr>
                            <ul class="list">
							    <li>Входит:</li>                                                           
								<li>1.Швейная машинка AURORA 0302D с прямым приводом! В комплекте с окантователем ЕВА 2.0 и столом.<u> ХИТ! Все настроено и укомлектовано!</u></li>
                                <li>2.Пресс для установки креплений с насадкой под люверсы и пробойник на 14 мм., 17 мм., 25 мм.</li>
								<li>3.Электроножницы для ЕВА.</li>
								<li>4.Ручные ножницы для ЕВА.</li>
                                <li>5.Иглы для EVA. </li>
								<li>6.Ручной зажим для люверсов.</li>
								<li>7.Фен для формовки ЕВА.</li>
                                <li>8.Листы ЕВА (3.6) 1.4*2.57м - 60 шт.</li>
								<li>9.Листы ЕВА (1.8) 1.2*1.5 м - 100 шт.</li>
								<li>10.Окантовка 2000 м. - 40 катушек.</li>
								<li>11.Люверсы 2000 шт. - 14 мм. черные.</li>
								<li>12.Нитки в катушках, 12 цветов. </li>
                                <li>13.Липучка крепление 50 мм.- 200 м.</li>
								<li>14.Пакеты для упаковки 100 шт.</li>
								<li>15.Подпятники - 26 шт.</li>
								<li>15.Пластиковые крепления</li>
								<li>16.Поддержка и консультация бесплатно. </li>
								<li>17.Лекало в электронном виде на 508 автомобилей в подарок!</li>
								<li>18.Обучение пошиву автоковриков на производстве бесплатно.</li>	
								<li>19.Сайт на поддомене evalist.ru вашего города бесплатно!</li>
								<li>20.Постоянная максимальная скидка на весь период сотрудничества!</li>
                            </ul>
                            <a href="#pack3" class="btn23" data-lity><span>Заказать пакет!</span></a>
                        </div>
                    </div>
                </div>	
<div class="style-toggle"></div></section>				
<!-- производство1 -->
<section class="proiz">
            <div class="container">
                <div class="row m-space">
                    <div class="col-sm-6 mh fotka" style="height: 500px;">
                        <img src="<?php echo get_home_url(); ?>/img/image1.png" alt="">
                    </div>
                    <div class="col-sm-5 col-sm-offset-1 mh" style="height: 500px;">
                        <div class="holder">
                            <div class="placer">
                                <h5>101.000 руб.</h5>
                                <h2>«ПАКЕТ СТАРТ»</h2>
                                <h6>Данный пакет включает в себя всё необходимое для начало производства автоковриков ЕВА, включенно оборудование ДЛЯ ПОШИВА и материал, самые популярные листы ЕВА, кант, нитки, крепления.
								Заказывайте пакет СТАРТ и занимайтесь пошивом автоковриков в любом городе, даже если у Вас есть конкуренты, Вы не останитесь без работы. Высокий спрос на автоковрики Ева доказан сотнями наших клиентов.
								Подробная информация на странице ниже.
								<br><br>МИНИМАЛЬНЫЕ ВЛОЖЕНИЯ, ОКУПАЕМОСТЬ 1 МЕС.
								</h6>
                               	<a href="#pack" class="btn23" data-lity><span>Заказать пакет!</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="style-toggle"></div></section>
<!-- производство2 -->	
<section class="proiz grey">
            <div class="container">
                <div class="row m-space">
                    <div class="col-sm-5 mh" style="height: 500px;">
                        <div class="holder">
                            <div class="placer">
                                <h5>136.000 руб. ХИТ!</h5>
                                <h2>«ПОЛНЫЙ КОМПЛЕКТ»</h2>
                                <h6> Включено все необходимое с большим ассортиментом и ТРЕМЯ видами листов ЕВА, швейная машинка с настроенным окантователем, пресс для установки креплений, материал примерно на ПЕРВЫЙ месяц работы!
								Все это вы смогли бы купить по отдельности, но с нашей помощью Вы сэкономите время и деньги. Получите все необходимое для производства в одном пакете!
								Запуская собственное производство с нами, Вы не сможете упустить все самое Важное!
								<br><br>МИНИМАЛЬНЫЕ ВЛОЖЕНИЯ, ОКУПАЕМОСТЬ 1 МЕС.</h6>
                                <a href="#pack2" class="btn23" data-lity><span>Заказать пакет!</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-1 mh fotka" style="height: 500px;">
                        <img src="<?php echo get_home_url(); ?>/img/image2.png" alt="">
                    </div>
                </div>
            </div>
        <div class="style-toggle"></div></section>
<!-- производство3 -->
<section class="proiz">
            <div class="container">
                <div class="row m-space">
                    <div class="col-sm-6 mh fotka" style="height: 500px;">
                        <img src="<?php echo get_home_url(); ?>/img/image3.png" alt="">
                    </div>
                    <div class="col-sm-5 col-sm-offset-1 mh" style="height: 500px;">
                        <div class="holder">
                            <div class="placer">
                                <h5>274.000 руб.</h5>
                                <h2>«ПРОИЗВОДИТЕЛЬ»</h2>
                                <h6>Самый МОЩНЫЙ комплект, включено все оборудование, и большой запас материала.
								Вы станете ПРОИЗВОДИТЕЛЕМ от компании EVALIST в своем городе и получите низкие цены официального дилера!
								Все розничные заказы будут переходить к Вам и у Вас будет личный персональный сайт на основном домене!
								<br><br>ВНИМАНИЕ! ПРЕДЛОЖЕНИЕ ОГРАНИЧЕННО! ОКУПАЕМОСТЬ 2 МЕС.</h6>
                                <a href="#pack3" class="btn23" data-lity><span>Заказать пакет!</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- производство123 -->
<section class="dark1 halfarea">
            <div class="col-md-6 col-sm-3 imagearea col-md-offset-6 col-sm-offset-9">
                <img class="imagearea-img" src="//evalist.ru/img/image4.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 mh" style="height: 526px;">
                        <div class="holder">
                            <div class="placer">
                                <h5>Не можите определиться с выбором?</h5>
                                <h2>Есть индивидуальные условия для Вас!</h2>
                                <h6>Бывают в работе ситуации, когда Вам не нужен целый пакет, все можно купить отдельно
								или дополнить необходимым количеством материала по Вашему желанию. Подберем гибкие условия для Вас с персональным предложением.
								<br><br>ЕСЛИ ВАМ ПРЕДЛОЖАТ НА ПЕРВЫЙ ВЗГЛЯД ЧТО-ТО ВЫГОДНЕЕ, ОБРАТИТЕСЬ К НАМ И МЫ НЕ ОСТАВИМ ПОВОДА ДЛЯ СОМНЕНИЯ.</h6>
                                <a href="#" class="btn hidden-xs start-project"><span>Получить консультацию</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        <div class="style-toggle"></div></section>
                <div class="row left">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row m-space">
                            <div class="col-md-6">
                                <h3>ВОЗМОЖНО ПРЕДСТАВИТЕЛЬСТВО БЕЗ ПОКУПКИ ОБОРУДОВАНИЯ.</h3>
                                <p>Если Вы уже занимаетесь производством автоковриков EVA, и хотите работать с нами, продавать 
								EVA листы в своем городе, то возможно начать представительство без покупки оборудования.</p>
                            </div>
                            <div class="col-md-6">
                                <h3>ПРИ БОЛЬШИХ ОБЪЕМАХ И ДЛЯ ДИЛЕРОВ ИНДИВИДУАЛЬНЫЕ ЦЕНЫ С ХОРОШИМИ СКИДКАМИ.</h3>
                                <p>Хорошие скидки получить очень просто, чем больше разовая покупка, тем ниже стоимость за лист.
								Выгодно покупать большими объемами, так же и дешевле доставка из расчета на лист.</p>
                            </div>
                            <div class="col-md-6">
                                <h3>СЕБЕСТОИМОТЬ КОМПЛЕКТА ВСЕГО 600-800 РУБ.</h3>
                                <p>Продажа КОМПЛЕКТА автоковриков в розницу от 2.100 руб. до 2.700 руб.
								При выполнении хотя бы 3-5 заказов/в день, доход от 100.000 руб/мес. со всеми издержками!
								Один человек на одной машинке выполняет до 12 заказов за рабочий день, помещение необходимо от 25 кв.м. до 50 кв.м
								<br>Мы проконсультируем Вас по всем текущим вопросам, по запуску, по производству. У нас есть всё необходимое для производства автоковриков ЕВА. Научиться шить можно за 1 день без опыта!
								</p>
                            </div>
                            <div class="col-md-6">
                                <h3>ВСЕ ПРОДАЖИ ПО ДОГОВОРУ, С ГАРАНТИЕЙ НА ПОКУПКУ.</h3>
                                <p>Мы открыли более 312 производств и 30 представительств в нескольких странах. <br>Но рынок совсем незаполнен, спрос на автоковрики из материала EVA очень большой и постоянно растет.
								<br><br>Будьте внимательны при запуске бизнеса с "частниками". Мы гарантируем то, что сотрудничество с нами это лучший вариант для вашего бизнеса. Подберем оптимальный комплект для Вашего старта!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="style-toggle"></div></section>

<div style="display:none" class="fancybox-hidden">
<div id="pack">
<?php echo do_shortcode('[contact-form-7 id="64" title="pack1"]'); ?> 
</div>
</div>
<div style="display:none" class="fancybox-hidden">
<div id="pack2">
<?php echo do_shortcode('[contact-form-7 id="65" title="pack2"]'); ?> 
</div>
</div> 
<div style="display:none" class="fancybox-hidden">
<div id="pack3">
<?php echo do_shortcode('[contact-form-7 id="66" title="pack3"]'); ?> 
</div>
</div> 
<?php get_footer(); ?>